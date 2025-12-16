<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ModuleServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $modules = config('modules.modules', []);

        foreach ($modules as $moduleName => $moduleConfig) {
            if ($moduleConfig['enabled'] ?? false) {
                $providerClass = $moduleConfig['provider'] ?? null;
                if ($providerClass && class_exists($providerClass)) {
                    $this->app->register($providerClass);
                }
            }
        }
    }

    public function boot(): void
    {
        //
    }
}
