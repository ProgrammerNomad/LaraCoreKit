<?php

namespace Modules\Auth\Http\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Illuminate\Support\Facades\Password;

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

        $status = Password::sendResetLink(['email' => $this->email]);

        if ($status === Password::RESET_LINK_SENT) {
            $this->message = 'Password reset link sent to your email!';
            $this->email = '';
        } else {
            $this->addError('email', 'Unable to send reset link. Please try again.');
        }
    }

    public function render()
    {
        return view('auth::livewire.forgot-password');
    }
}
