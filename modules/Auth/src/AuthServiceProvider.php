<?php

namespace Modules\Auth;

use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;

class AuthServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__ . '/../views', 'auth');
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');

        Livewire::component('auth.login', \Modules\Auth\Http\Livewire\Login::class);
        Livewire::component('auth.register', \Modules\Auth\Http\Livewire\Register::class);
        Livewire::component('auth.forgot-password', \Modules\Auth\Http\Livewire\ForgotPassword::class);
    }
}
