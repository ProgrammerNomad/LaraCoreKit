<?php

namespace Modules\Auth;

use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;
use Modules\Auth\Http\Livewire\Dashboard;
use Modules\Auth\Http\Livewire\ForgotPassword;
use Modules\Auth\Http\Livewire\Login;
use Modules\Auth\Http\Livewire\Register;
use Modules\Auth\Http\Livewire\ResetPassword;

class AuthServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__.'/../views', 'auth');

        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');

        Livewire::component('auth.login', Login::class);
        Livewire::component('auth.register', Register::class);
        Livewire::component('auth.reset-password', ResetPassword::class);
        Livewire::component('auth.forgot-password', ForgotPassword::class);
        Livewire::component('auth.dashboard', Dashboard::class);
    }
}
