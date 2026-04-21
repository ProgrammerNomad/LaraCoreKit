<?php

namespace Modules\Docs;

use Illuminate\Support\ServiceProvider;

class DocsServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        // Load views
        $this->loadViewsFrom(__DIR__ . '/../views', 'docs');

        // Load routes
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
    }
}
