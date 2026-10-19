"""Install only the reusable package in a disposable Laravel 13 consumer.

Requires PHP and Composer on PATH. Leaves the isolated consumer in the system
temporary directory for inspection. Never points at the host database.
"""
import argparse
import base64
import json
import os
from pathlib import Path
import shutil
import subprocess
import tempfile

parser = argparse.ArgumentParser(description=__doc__)
parser.add_argument('--source', choices=['path', 'packagist'], default='path')
args = parser.parse_args()

root = Path(__file__).resolve().parents[1]
package = root / 'packages/core'
composer = shutil.which('composer') or shutil.which('composer.bat')
php = shutil.which('php')
target = Path(tempfile.mkdtemp(prefix='laracorekit-consumer-')) / 'app'

def run(args, cwd=None):
    subprocess.run(args, cwd=cwd, check=True)

if not composer or not php:
    raise SystemExit('PHP and Composer must be on PATH.')

run([composer, 'create-project', 'laravel/laravel', str(target), '~13.0', '--no-install', '--no-scripts', '--no-interaction'])
manifest = target / 'composer.json'
config = json.loads(manifest.read_text(encoding='utf-8'))
if args.source == 'path':
    config['repositories'] = [{'type': 'path', 'url': package.as_posix(), 'options': {'symlink': False, 'versions': {'programmernomad/laracorekit': 'dev-main'}}}]
    config['require']['programmernomad/laracorekit'] = 'dev-main'
else:
    config.pop('repositories', None)
    config['require']['programmernomad/laracorekit'] = '~0.2.0'
manifest.write_text(json.dumps(config, indent=4)+'\n', encoding='utf-8')
database = target / 'database/database.sqlite'
database.touch()
(target/'.env').write_text('\n'.join([
    'APP_NAME=ConsumerSmoke', 'APP_ENV=testing', 'APP_DEBUG=false',
    'APP_KEY=base64:'+base64.b64encode(os.urandom(32)).decode(),
    'APP_URL=http://localhost', 'DB_CONNECTION=sqlite', 'DB_DATABASE='+database.as_posix(),
    'CACHE_STORE=array', 'SESSION_DRIVER=array', 'MAIL_MAILER=array', 'DEMO_MODE=false',
])+'\n', encoding='utf-8')
run([composer, 'install', '--no-dev', '--prefer-dist', '--no-interaction'], target)
locked = json.loads((target/'composer.lock').read_text(encoding='utf-8'))
installed = next(p for p in locked['packages'] if p['name'] == 'programmernomad/laracorekit')
if args.source == 'packagist' and ('dev' in installed['version'] or installed.get('dist', {}).get('type') == 'path'):
    raise SystemExit('Registry test did not resolve a tagged public release.')
print('Verified consumer source:', args.source, 'version:', installed['version'], flush=True)
run([composer, 'audit', '--locked'], target)
stock_routes = (target/'routes/web.php').read_text(encoding='utf-8')
run([php, 'artisan', 'laracorekit:install', '--without-frontend', '--no-interaction'], target)
assert (target/'routes/web.php').read_text(encoding='utf-8') == stock_routes
assert not (target/'resources/views/home.blade.php').exists()
run([php, 'artisan', 'laracorekit:install', '--migrate', '--no-interaction'], target)
assert (target/'routes/web.php.laracorekit-backup').read_text(encoding='utf-8') == stock_routes
home = target/'resources/views/home.blade.php'
assert 'Make it yours.' in home.read_text(encoding='utf-8')
home.write_text(home.read_text(encoding='utf-8')+'\n{{-- preserved-home-customization --}}\n', encoding='utf-8')
# A customized routes file must never be replaced on repeat installation.
custom_routes = (target/'routes/web.php').read_text(encoding='utf-8')+'\n// preserved-custom-route\n'
(target/'routes/web.php').write_text(custom_routes, encoding='utf-8')
published_config = target/'config/laracorekit.php'
published_config.write_text(published_config.read_text(encoding='utf-8')+'\n// preserved-consumer-customization\n', encoding='utf-8')
run([php, 'artisan', 'laracorekit:install', '--no-interaction'], target)
assert 'preserved-home-customization' in home.read_text(encoding='utf-8')
assert (target/'routes/web.php').read_text(encoding='utf-8') == custom_routes
if 'preserved-consumer-customization' not in published_config.read_text(encoding='utf-8'):
    raise SystemExit('The installer overwrote existing consumer configuration.')

probe = r'''<?php
require __DIR__.'/vendor/autoload.php';
$app = require __DIR__.'/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);
foreach (['/', '/ui-showcase', '/ui-showcase/charts/line-chart', '/login', '/forgot-password', '/blog', '/admin/login'] as $path) {
    $request = Illuminate\Http\Request::create($path);
    $response = $kernel->handle($request);
    if ($response->getStatusCode() !== 200) {
        fwrite(STDERR, $path.' returned '.$response->getStatusCode().PHP_EOL);
        exit(1);
    }
    $kernel->terminate($request, $response);
}
if (! is_file(__DIR__.'/public/vendor/laracorekit/showcase.js')) { exit(10); }
if (Illuminate\Support\Facades\Route::has('register')) { exit(2); }
if (Modules\User\Models\User::count() !== 0) { exit(3); }
if (class_exists(LaraCoreKit\DemoModule\DemoServiceProvider::class)) { exit(4); }
if (! is_file(__DIR__.'/public/vendor/laracorekit/laracorekit.css')) { exit(5); }
if (! is_file(__DIR__.'/public/js/filament/filament/app.js')) { exit(6); }
if (config('laracorekit.panel.enabled') !== true) { exit(7); }
if (config('auth.providers.users.model') !== Modules\User\Models\User::class) { exit(8); }
if (is_dir(__DIR__.'/vendor/programmernomad/laracorekit/resources/dist/images')) { exit(9); }
echo 'Clean package consumer passed: public routes, admin login, assets, safe defaults and no demo dependency.'.PHP_EOL;
'''
(target/'smoke.php').write_text(probe, encoding='utf-8')
run([php, 'smoke.php'], target)
run([php, 'artisan', 'config:cache'], target)
run([php, 'artisan', 'route:cache'], target)
run([php, 'smoke.php'], target)
print('Consumer retained at', target)
