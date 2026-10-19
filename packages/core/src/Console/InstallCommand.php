<?php

namespace LaraCoreKit\Core\Console;

use Illuminate\Console\Command;

class InstallCommand extends Command
{
    protected $signature = 'laracorekit:install {--without-frontend : Keep the existing homepage without publishing starter views} {--migrate : Run outstanding application and package migrations}';

    protected $description = 'Publish LaraCoreKit configuration and assets without creating demo accounts';

    public function handle(): int
    {
        $this->call('vendor:publish', ['--tag' => 'laracorekit-config']);
        $this->call('vendor:publish', ['--tag' => 'laracorekit-assets', '--force' => true]);
        if ($this->call('filament:assets') !== self::SUCCESS) {
            return self::FAILURE;
        }

        if (! $this->option('without-frontend')) {
            $this->installFrontend();
        }

        if ($this->option('migrate')) {
            if ($this->call('migrate') !== self::SUCCESS) {
                return self::FAILURE;
            }
        }

        $this->info('LaraCoreKit configuration and assets installed. Existing configuration was preserved.');
        $this->line('Next: php artisan migrate; php artisan laracorekit:admin; php artisan storage:link');
        $this->line('Configure mail, storage, APP_URL and production settings before deployment.');

        return self::SUCCESS;
    }

    private function installFrontend(): void
    {
        $this->call('vendor:publish', ['--tag' => 'laracorekit-starter']);
        $routes = base_path('routes/web.php');
        $contents = is_file($routes) ? (file_get_contents($routes) ?: '') : '';
        $stock = "<?php use Illuminate\\Support\\Facades\\Route; Route::get('/', function () { return view('welcome'); });";
        $normalize = static fn (string $value): string => preg_replace('/\s+/', '', $value) ?? '';
        if ($normalize($contents) === $normalize($stock)) {
            copy($routes, $routes.'.laracorekit-backup');
            file_put_contents($routes, "<?php\n\nuse Illuminate\\Support\\Facades\\Route;\n\nRoute::view('/', 'home')->name('home');\n");
            $this->info('Starter homepage installed at /. Edit resources/views/home.blade.php and resources/views/vendor/core/layouts/app.blade.php.');
        } elseif (! str_contains($contents, "Route::view('/', 'home')")) {
            $this->warn("Custom routes preserved. To use the starter, add Route::view('/', 'home')->name('home') to routes/web.php after resolving your existing homepage route.");
        }
        $this->line('Components: /ui-showcase. Publish editable examples with php artisan vendor:publish --tag=laracorekit-showcase-views.');
    }
}
