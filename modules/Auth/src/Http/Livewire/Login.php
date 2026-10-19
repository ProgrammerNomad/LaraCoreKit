<?php

namespace Modules\Auth\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('core::layouts.app')]
#[Title('Login')]
class Login extends Component
{
    public string $email = '';

    public string $password = '';

    public bool $remember = false;

    public function login()
    {
        $this->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $key = 'laracorekit:login:'.hash('sha256', strtolower(trim($this->email)).'|'.request()->ip());
        $ipKey = 'laracorekit:login-ip:'.request()->ip();
        if (RateLimiter::tooManyAttempts($key, 5) || RateLimiter::tooManyAttempts($ipKey, 30)) {
            $this->addError('email', __('Too many attempts. Please try again in one minute.'));

            return;
        }

        if (Auth::attempt(['email' => $this->email, 'password' => $this->password], $this->remember)) {
            RateLimiter::clear($key);
            session()->regenerate();
            $user = Auth::user();

            // Redirect based on role - admins/editors to admin panel, users to home
            if ($user->hasRole(['Admin', 'Editor'])) {
                return redirect()->intended('/'.config('laracorekit.panel.path', 'admin'));
            }

            return redirect()->intended('/dashboard');
        }

        RateLimiter::hit($key, 60);
        RateLimiter::hit($ipKey, 60);
        $this->addError('email', 'The provided credentials do not match our records.');
    }

    public function render()
    {
        return view('auth::livewire.login');
    }
}
