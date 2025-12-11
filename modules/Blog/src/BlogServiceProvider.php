<?php

namespace Modules\Blog;

use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;

class BlogServiceProvider extends ServiceProvider
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
        $this->loadViewsFrom(__DIR__ . '/../views', 'blog');

        // Register Livewire components
        Livewire::component('blog.blog-list', \Modules\Blog\Http\Livewire\BlogList::class);
        Livewire::component('blog.blog-detail', \Modules\Blog\Http\Livewire\BlogDetail::class);

        // Load routes
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
    }
}
