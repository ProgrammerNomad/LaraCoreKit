<?php

namespace Modules\Blog;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;
use Modules\Blog\Http\Livewire\BlogDetail;
use Modules\Blog\Http\Livewire\BlogList;

class BlogServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        // Load migrations
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');

        // Load views
        $this->loadViewsFrom(__DIR__.'/../views', 'blog');

        // Register Livewire components
        Livewire::component('blog.blog-list', BlogList::class);
        Livewire::component('blog.blog-detail', BlogDetail::class);

        // Load routes
        if (! $this->app->routesAreCached()) {
            Route::middleware('web')->group(__DIR__.'/../routes/web.php');
        }
    }
}
