"""Build a local distribution and exercise Composer create-project without Packagist cutover."""
from pathlib import Path
import json, shutil, subprocess, tempfile, zipfile
root = Path(__file__).resolve().parents[1]
work = Path(tempfile.mkdtemp(prefix='laracorekit-project-'))
archive = work/'starter.zip'
files = subprocess.check_output(['git', 'ls-files', '--cached', '--others', '--exclude-standard', '-z'], cwd=root).decode().split('\0')
with zipfile.ZipFile(archive, 'w', zipfile.ZIP_DEFLATED) as bundle:
    for name in sorted(set(files)):
        path = root/name
        if not name or not path.is_file() or name.startswith(('docs/images/', '.github/', 'tools/', 'tests/')):
            continue
        bundle.write(path, name)
manifest = json.loads((root/'composer.json').read_text(encoding='utf-8'))
manifest.update({'version': '1.0.0', 'dist': {'type': 'zip', 'url': archive.as_uri()}})
repository = work/'packages.json'
repository.write_text(json.dumps({'packages': {'programmernomad/laracorekit': {'1.0.0': manifest}}}), encoding='utf-8')
composer = shutil.which('composer') or shutil.which('composer.bat')
app = work/'app'
subprocess.run([composer, 'create-project', '--repository='+str(repository), 'programmernomad/laracorekit', str(app), '1.0.0', '--no-interaction'], check=True)
assert not (app/'vendor/programmernomad/laracorekit').exists()
assert (app/'modules/Auth/src/Http/Livewire/Login.php').exists()
probe = r'''<?php
require __DIR__.'/vendor/autoload.php';
$app = require __DIR__.'/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);
foreach (['/', '/blog', '/login', '/admin/login', '/ui-showcase'] as $path) {
    $request = Illuminate\Http\Request::create($path);
    $response = $kernel->handle($request);
    if ($response->getStatusCode() !== 200) { throw new RuntimeException($path.' '.$response->getStatusCode()); }
    $kernel->terminate($request, $response);
}
if (Modules\User\Models\User::count() !== 0) { throw new RuntimeException('Unexpected sample accounts'); }
if (class_exists(LaraCoreKit\DemoModule\DemoServiceProvider::class)) { throw new RuntimeException('Demo dependency included'); }
echo "Editable starter routes and safe defaults passed.\n";
'''
(app/'smoke.php').write_text(probe, encoding='utf-8')
subprocess.run(['php', 'smoke.php'], cwd=app, check=True)
subprocess.run(['php', 'artisan', 'optimize'], cwd=app, check=True)
subprocess.run(['php', 'smoke.php'], cwd=app, check=True)
print('Verified project retained at', app)
