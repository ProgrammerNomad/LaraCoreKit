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
        \Illuminate\Support\Facades\Route::middleware('web')
            ->group(__DIR__ . '/../routes/web.php');
    }
}
