# Publishing Modules

---
**Supported Stack:** Laravel 13 / Filament 5 / Livewire 4 / Tailwind 4  
**Last Updated:** April 22, 2026  
**Estimated Time:** 12 minutes  
**Example:** [Demo Module Package](https://github.com/ProgrammerNomad/laracorekit-demo-module)
---

LaraCoreKit modules can be extracted and distributed as standalone **Composer packages**, making them reusable across projects and shareable with the community.

---

## When to Publish a Module

Consider publishing when your module:
- Solves a generic problem (newsletter, notifications, analytics)
- Is stable and tested
- Has clear documentation
- Has no tight coupling to your app's specific data

---

## Step 1: Prepare the Module

### 1.1 Create a new GitHub repository

Name it: `{vendor}/{module-name}` (e.g., `programmernomad/laracorekit-newsletter`)

### 1.2 Create `composer.json`

```json
{
    "name": "programmernomad/laracorekit-newsletter",
    "description": "Newsletter subscription module for LaraCoreKit",
    "type": "library",
    "license": "MIT",
    "keywords": ["laravel", "laracorekit", "newsletter", "module"],
    "authors": [
        {
            "name": "Your Name",
            "email": "you@laracorekit.com"
        }
    ],
    "require": {
        "php": "^8.3",
        "laravel/framework": "^13.0",
        "livewire/livewire": "^4.0"
    },
    "autoload": {
        "psr-4": {
            "YourVendor\\Newsletter\\": "src/"
        }
    },
    "extra": {
        "laravel": {
            "providers": [
                "YourVendor\\Newsletter\\NewsletterServiceProvider"
            ]
        }
    }
}
```

### 1.3 Add a README.md

Explain:
- What the module does
- Installation steps
- Usage examples

---

## Step 2: Directory Structure for a Package

```
laracorekit-newsletter/
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
├── config/
│   └── newsletter.php
├── composer.json
├── README.md
└── LICENSE
```

---

## Step 3: Update ServiceProvider for Package

```php
class NewsletterServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        // Load migrations
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');

        // Load views
        $this->loadViewsFrom(__DIR__ . '/../views', 'newsletter');

        // Publish assets (optional)
        $this->publishes([
            __DIR__ . '/../config/newsletter.php' => config_path('newsletter.php'),
            __DIR__ . '/../views'                 => resource_path('views/vendor/newsletter'),
        ], 'newsletter');

        // Merge config
        $this->mergeConfigFrom(
            __DIR__ . '/../config/newsletter.php', 'newsletter'
        );

        // Register Livewire components
        Livewire::component('newsletter.subscribe', Subscribe::class);
    }
}
```

---

## Step 4: Publish to Packagist

1. Push your code to GitHub
2. Visit [packagist.org](https://packagist.org)
3. Click **"Submit"** and enter your GitHub repo URL
4. Packagist auto-indexes it within minutes

---

## Step 5: Install in Any LaraCoreKit Project

```bash
composer require programmernomad/laracorekit-newsletter
php artisan migrate
```

Use in Blade:

```blade
@livewire('newsletter.subscribe')
```

---

## Step 6: Enable Auto-discovery (Already Done)

Because the `extra.laravel.providers` key is set in `composer.json`, the ServiceProvider is automatically registered by Laravel - no manual registration needed.

---

## Versioning

Follow **Semantic Versioning**:
- `1.0.0` - Initial stable release
- `1.0.1` - Bug fix
- `1.1.0` - New feature (backward compatible)
- `2.0.0` - Breaking change

---

## Tagging Releases

```bash
git tag v1.0.0
git push origin v1.0.0
```

---

## Next Steps

**[Best Practices →](best-practices)**

