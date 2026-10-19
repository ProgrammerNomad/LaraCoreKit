<?php

namespace LaraCoreKit\Core;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class ShowcaseServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        // Merge config
        $this->mergeConfigFrom(__DIR__.'/../showcase/config/components.php', 'showcase.components');
    }

    public function boot(): void
    {
        // Load views
        $this->loadViewsFrom(__DIR__.'/../showcase/views', 'showcase');

        // Load routes
        if (! $this->app->routesAreCached()) {
            Route::middleware('web')->group(__DIR__.'/../showcase/routes/web.php');
        }
    }
}
