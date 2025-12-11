<?php

namespace Modules\Core;

use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;

class CoreServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        // Load views
        $this->loadViewsFrom(__DIR__ . '/../views', 'core');

        // Register Livewire components
        Livewire::component('locale-switcher', \Modules\Core\Http\Livewire\LocaleSwitcher::class);
        Livewire::component('home', \Modules\Core\Http\Livewire\Home::class);
    }
}
