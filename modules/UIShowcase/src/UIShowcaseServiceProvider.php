<?php

namespace Modules\UIShowcase;

use Illuminate\Support\ServiceProvider;

class UIShowcaseServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        // Load views
        $this->loadViewsFrom(__DIR__ . '/../views', 'showcase');
        
        // Load routes
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
    }
}
