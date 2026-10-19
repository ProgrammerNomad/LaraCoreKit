<?php

namespace LaraCoreKit\Core\Console;

use Illuminate\Console\Command;

class InstallCommand extends Command
{
    protected $signature = 'laracorekit:install {--migrate : Run outstanding application and package migrations}';

    protected $description = 'Publish LaraCoreKit configuration and assets without creating demo accounts';

    public function handle(): int
    {
        $this->call('vendor:publish', ['--tag' => 'laracorekit-config']);
        $this->call('vendor:publish', ['--tag' => 'laracorekit-assets', '--force' => true]);
        if ($this->call('filament:assets') !== self::SUCCESS) {
            return self::FAILURE;
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
}
