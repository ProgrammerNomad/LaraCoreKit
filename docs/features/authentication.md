# Features: Authentication

**Estimated time:** 8 minutes  
**Difficulty:** Beginner

---

LaraCoreKit's Auth module provides a complete, production-ready authentication system built on **Laravel Breeze** with added enhancements for multilingual support, admin integration, and API token management.

---

## What's Included

| Feature | Status |
|---------|--------|
| Login / Register |  |
| Email Verification |  |
| Password Reset |  |
| Remember Me |  |
| Sanctum API Tokens |  |
| Filament Admin Auth |  |
| Multilingual Forms |  |

---

## Module Location

```
modules/Auth/
├── src/
│   ├── AuthServiceProvider.php
│   └── Http/
│       └── Livewire/
│           ├── Login.php
│           ├── Register.php
│           └── ForgotPassword.php
├── views/
│   └── auth/
│       ├── login.blade.php
│       └── register.blade.php
└── routes/
    └── web.php
```

---

## Routes

The Auth module registers these routes automatically:

```php
GET  /login          → Auth\Login
POST /login          → Auth\Login (Livewire action)
GET  /register       → Auth\Register
POST /register       → Auth\Register (Livewire action)
GET  /forgot-password → Auth\ForgotPassword
POST /forgot-password → Email password reset link
GET  /reset-password/{token}
POST /logout
GET  /email/verify
GET  /email/verify/{id}/{hash}
```

---

## Login Component

The `Login` Livewire component handles authentication:

```php
namespace Modules\Auth\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{
    public string $email = '';
    public string $password = '';
    public bool $remember = false;

    public function login()
    {
        $this->validate([
            'email'    => 'required|email',
            'password' => 'required|min:6',
        ]);

        if (!Auth::attempt(['email' => $this->email, 'password' => $this->password], $this->remember)) {
            $this->addError('email', __('auth.failed'));
            return;
        }

        redirect()->intended('/dashboard');
    }
}
```

---

## Protecting Routes

Use standard Laravel middleware to protect routes:

```php
// In any module's routes/web.php
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', DashboardPage::class)->name('dashboard');
});

// Verify email
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/profile', ProfilePage::class)->name('profile');
});
```

---

## Admin Authentication

Filament admin authentication is handled separately. Admin users must be explicitly created:

```bash
php artisan filament:user
```

Under the hood, Filament checks `canAccessFilament()` on the User model via a Filament Panel configuration in `app/Providers/Filament/AdminPanelProvider.php`.

---

## Email Verification

Enable email verification by implementing `MustVerifyEmail` on the User model:

```php
use Illuminate\Contracts\Auth\MustVerifyEmail;

class User extends Authenticatable implements MustVerifyEmail
{
    // ...
}
```

Configure your mail settings in `.env`:

```env
MAIL_MAILER=smtp
MAIL_HOST=smtp.mailgun.org
MAIL_PORT=587
MAIL_USERNAME=your@mailgun.org
MAIL_PASSWORD=secret
MAIL_FROM_ADDRESS=noreply@yourdomain.com
```

---

## Sanctum API Tokens

For API authentication, Sanctum is pre-configured:

```php
// Create a token for the authenticated user
$token = $user->createToken('my-app')->plainTextToken;

// Revoke all tokens
$user->tokens()->delete();
```

API routes should use:

```php
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
```

---

## Customization

### Custom Login Redirect

Override the `redirectTo` property in the Login component:

```php
protected string $redirectTo = '/dashboard';
```

### Custom Guards

Add a new guard in `config/auth.php` and create a corresponding provider.

---

## Next Steps

� **[Users & Profiles →](users)**

Learn how to manage user profiles, avatars, and extended user data.
