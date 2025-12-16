<?php

namespace Modules\Auth\Http\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Illuminate\Support\Facades\Auth;

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

        \Log::info('Login attempt', ['email' => $this->email]);

        if (Auth::attempt(['email' => $this->email, 'password' => $this->password], $this->remember)) {
            session()->regenerate();
            $user = Auth::user();
            
            \Log::info('Login successful', [
                'email' => $this->email,
                'roles' => $user->getRoleNames()->toArray(),
                'hasAdminRole' => $user->hasRole(['Admin', 'Editor']),
            ]);
            
            // Redirect based on role - admins/editors to admin panel, users to home
            if ($user->hasRole(['Admin', 'Editor'])) {
                \Log::info('Redirecting to /admin');
                return redirect()->intended('/admin');
            }
            
            \Log::info('Redirecting to /dashboard');
            return redirect()->intended('/dashboard');
        }

        \Log::warning('Login failed', ['email' => $this->email]);
        $this->addError('email', 'The provided credentials do not match our records.');
    }

    public function render()
    {
        return view('auth::livewire.login');
    }
}
