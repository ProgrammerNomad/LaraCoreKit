<?php

namespace Modules\Auth\Http\Livewire;

use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\RateLimiter;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('core::layouts.app')]
#[Title('Forgot Password')]
class ForgotPassword extends Component
{
    public string $email = '';

    public string $message = '';

    public function sendResetLink()
    {
        $this->validate([
            'email' => ['required', 'email'],
        ]);

        $key = 'laracorekit:reset:'.request()->ip();
        if (! RateLimiter::tooManyAttempts($key, 5)) {
            RateLimiter::hit($key, 60);
            Password::sendResetLink(['email' => $this->email]);
        }

        $this->message = __('If an account exists, a password reset link will be sent.');
        $this->email = '';
    }

    public function render()
    {
        return view('auth::livewire.forgot-password');
    }
}
