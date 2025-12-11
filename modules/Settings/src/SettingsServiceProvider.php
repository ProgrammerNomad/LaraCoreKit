<?php

namespace Modules\Settings;

use Illuminate\Support\ServiceProvider;
use Filament\Support\Facades\FilamentView;
use Filament\View\PanelsRenderHook;

class SettingsServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        // Load migrations
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');

        // Load views
        $this->loadViewsFrom(__DIR__ . '/../views', 'settings');

        // Register Filament pages
        FilamentView::registerRenderHook(
            PanelsRenderHook::PAGE_START,
            fn () => ''
        );
    }
}
