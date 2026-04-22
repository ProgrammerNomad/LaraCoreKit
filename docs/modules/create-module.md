# Create a Module

---
**Supported Stack:** Laravel 13 / Filament 5 / Livewire 4 / Tailwind 4  
**Last Updated:** April 22, 2026  
**Estimated Time:** 15 minutes  
**Source Files:** [ServiceProvider example](../../modules/Blog/src/BlogServiceProvider.php)
---

This guide walks you through creating a complete custom module in LaraCoreKit from scratch. We'll build a **Newsletter** module as the real-world example.

---

## Step 1: Create the Directory Structure

```bash
mkdir -p modules/Newsletter/src/Http/Livewire
mkdir -p modules/Newsletter/src/Models
mkdir -p modules/Newsletter/src/Filament/Resources
mkdir -p modules/Newsletter/database/migrations
mkdir -p modules/Newsletter/database/seeders
mkdir -p modules/Newsletter/views/newsletter
mkdir -p modules/Newsletter/routes
```

Final structure:

```
modules/Newsletter/
├── src/
│   ├── NewsletterServiceProvider.php
│   ├── Models/
│   │   └── Subscriber.php
│   └── Http/
│       └── Livewire/
│           └── Subscribe.php
├── database/
│   └── migrations/
│       └── 2024_01_01_create_subscribers_table.php
├── views/
│   └── newsletter/
│       └── subscribe.blade.php
└── routes/
    └── web.php
```

---

## Step 2: Create the Service Provider

```php
<?php
// modules/Newsletter/src/NewsletterServiceProvider.php

namespace Modules\Newsletter;

use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;

class NewsletterServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
        $this->loadViewsFrom(__DIR__ . '/../views', 'newsletter');

        Livewire::component('newsletter.subscribe', \Modules\Newsletter\Http\Livewire\Subscribe::class);

        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
    }
}
```

---

## Step 3: Create the Migration

```php
<?php
// modules/Newsletter/database/migrations/2024_01_01_create_subscribers_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('newsletter_subscribers', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->string('name')->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamp('confirmed_at')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('newsletter_subscribers');
    }
};
```

---

## Step 4: Create the Model

```php
<?php
// modules/Newsletter/src/Models/Subscriber.php

namespace Modules\Newsletter\Models;

use Illuminate\Database\Eloquent\Model;

class Subscriber extends Model
{
    protected $table = 'newsletter_subscribers';

    protected $fillable = ['email', 'name', 'is_active', 'confirmed_at'];

    protected $casts = [
        'is_active'    => 'boolean',
        'confirmed_at' => 'datetime',
    ];

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function isConfirmed(): bool
    {
        return $this->confirmed_at !== null;
    }
}
```

---

## Step 5: Create the Livewire Component

```php
<?php
// modules/Newsletter/src/Http/Livewire/Subscribe.php

namespace Modules\Newsletter\Http\Livewire;

use Livewire\Component;
use Modules\Newsletter\Models\Subscriber;

class Subscribe extends Component
{
    public string $email = '';
    public string $name  = '';
    public bool   $success = false;
    public string $error   = '';

    public function subscribe()
    {
        $this->validate([
            'email' => 'required|email|max:255',
            'name'  => 'nullable|string|max:100',
        ]);

        try {
            Subscriber::firstOrCreate(
                ['email' => $this->email],
                ['name'  => $this->name, 'is_active' => true]
            );

            $this->success = true;
            $this->reset(['email', 'name']);
        } catch (\Exception $e) {
            $this->error = 'Something went wrong. Please try again.';
        }
    }

    public function render()
    {
        return view('newsletter::newsletter.subscribe');
    }
}
```

---

## Step 6: Create the View

```blade
{{-- modules/Newsletter/views/newsletter/subscribe.blade.php --}}

<div class="newsletter-subscribe">
    @if($success)
        <div class="alert-success">
            You've subscribed successfully!
        </div>
    @else
        <form wire:submit="subscribe">
            @if($error)
                <div class="alert-error">{{ $error }}</div>
            @endif

            <input
                type="text"
                wire:model="name"
                placeholder="Your name (optional)"
            />

            <input
                type="email"
                wire:model="email"
                placeholder="your@email.com"
                required
            />
            @error('email') <span class="error">{{ $message }}</span> @enderror

            <button type="submit" wire:loading.attr="disabled">
                <span wire:loading.remove>Subscribe</span>
                <span wire:loading>Subscribing...</span>
            </button>
        </form>
    @endif
</div>
```

---

## Step 7: Add Routes

```php
<?php
// modules/Newsletter/routes/web.php

use Illuminate\Support\Facades\Route;
use Modules\Newsletter\Http\Livewire\Subscribe;

Route::get('/newsletter', Subscribe::class)->name('newsletter.subscribe');
```

---

## Step 8: Register in Composer Autoload

Add to `composer.json`:

```json
{
    "autoload": {
        "psr-4": {
            "Modules\\Newsletter\\": "modules/Newsletter/src/"
        }
    }
}
```

Then run:

```bash
composer dump-autoload
```

---

## Step 9: Enable the Module

Add to `config/modules.php`:

```php
'Newsletter' => [
    'enabled'   => true,
    'namespace' => 'Modules\\Newsletter',
    'provider'  => 'Modules\\Newsletter\\NewsletterServiceProvider',
],
```

---

## Step 10: Run the Migration

```bash
php artisan migrate
```

**Expected output:**
```
Migrating: 2024_01_01_create_subscribers_table
Migrated:  2024_01_01_create_subscribers_table (32.50ms)
```

---

## Step 11: Use the Component

In any Blade view:

```blade
@livewire('newsletter.subscribe')
```

---

##  Verify It Works

1. Visit `http://localhost:8000/newsletter`
2. Submit the form with an email
3. Check the database: `SELECT * FROM newsletter_subscribers;`

---

## Optional: Add Filament Admin

Create a resource to manage subscribers from the admin panel:

```bash
php artisan make:filament-resource Subscriber --model=Modules\\Newsletter\\Models\\Subscriber
```

Move the generated file to `modules/Newsletter/src/Filament/Resources/SubscriberResource.php` and update the namespace.

---

## Next Steps

**[Module Structure →](module-structure)**

Deep dive into module conventions and best practices.
