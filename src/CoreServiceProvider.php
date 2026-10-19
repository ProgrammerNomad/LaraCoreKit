<?php

namespace LaraCoreKit\Core;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use LaraCoreKit\Core\Console\InstallCommand;
use LaraCoreKit\Core\Console\MakeAdminCommand;
use LaraCoreKit\Core\Filament\AdminPanelProvider;
use Modules\Core\Http\Middleware\SetLocale;
use Modules\User\Models\User;

class CoreServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/laracorekit.php', 'laracorekit');

        foreach (['Auth' => ['User'], 'Blog' => ['User', 'Media']] as $module => $dependencies) {
            if (config("laracorekit.modules.{$module}")) {
                foreach ($dependencies as $dependency) {
                    if (! config("laracorekit.modules.{$dependency}")) {
                        throw new \LogicException("LaraCoreKit {$module} requires the {$dependency} module.");
                    }
                }
            }
        }
        if (config('laracorekit.panel.enabled') && ! config('laracorekit.modules.User')) {
            throw new \LogicException('The LaraCoreKit panel requires the User module.');
        }

        if (config('laracorekit.configure_auth')) {
            config(['auth.providers.users.model' => User::class]);
        }

        $this->app->register(\Modules\Core\CoreServiceProvider::class);

        foreach (config('laracorekit.modules', []) as $module => $enabled) {
            if ($enabled) {
                $provider = "Modules\\{$module}\\{$module}ServiceProvider";
                if (class_exists($provider)) {
                    $this->app->register($provider);
                }
            }
        }

        if (config('laracorekit.panel.enabled')) {
            $this->app->register(AdminPanelProvider::class);
        }
    }

    public function boot(): void
    {
        $this->loadJsonTranslationsFrom(__DIR__.'/../lang');
        $this->publishes([__DIR__.'/../config/laracorekit.php' => config_path('laracorekit.php')], 'laracorekit-config');
        $this->publishes([__DIR__.'/../resources/dist' => public_path('vendor/laracorekit')], 'laracorekit-assets');
        $this->publishes([__DIR__.'/../modules/Core/views' => resource_path('views/vendor/core')], 'laracorekit-views');

        $this->app['router']->pushMiddlewareToGroup('web', SetLocale::class);

        if (! $this->app->routesAreCached()) {
            Route::middleware('web')->get('/locale/{locale}', function (string $locale) {
                abort_unless(in_array($locale, config('laracorekit.locales'), true), 404);
                session()->put('locale', $locale);

                // A fixed local destination avoids accepting external redirect targets.
                return redirect('/');
            })->name('locale.switch');
        }

        if ($this->app->runningInConsole()) {
            $this->commands([InstallCommand::class, MakeAdminCommand::class]);
        }
    }
}
