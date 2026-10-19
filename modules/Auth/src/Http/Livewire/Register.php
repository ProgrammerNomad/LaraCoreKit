<?php

namespace Modules\Auth\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\RateLimiter;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
use Modules\User\Models\User;
use Spatie\Permission\Models\Role;

#[Layout('core::layouts.app')]
#[Title('Register')]
class Register extends Component
{
    public string $name = '';

    public string $email = '';

    public string $password = '';

    public string $password_confirmation = '';

    public function register()
    {
        abort_unless(config('laracorekit.registration'), 403);
        $key = 'laracorekit:register:'.request()->ip();
        if (RateLimiter::tooManyAttempts($key, 5)) {
            $this->addError('email', __('Too many attempts. Please try again later.'));

            return;
        }
        RateLimiter::hit($key, 60);
        $validated = $this->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);

        Auth::login($user);
        $user->assignRole(Role::findOrCreate('User', 'web'));

        session()->regenerate();

        return redirect()->route('dashboard');
    }

    public function render()
    {
        return view('auth::livewire.register');
    }
}
