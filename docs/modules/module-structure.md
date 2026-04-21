# Module Structure

**Estimated time:** 6 minutes  
**Difficulty:** Beginner

---

Every module in LaraCoreKit follows a consistent, predictable directory structure. Once you learn it for one module, you know it for all.

---

## Standard Structure

```
modules/{ModuleName}/
├── src/                              ← PHP source (PSR-4 autoloaded)
│   ├── {Module}ServiceProvider.php  ← REQUIRED: registers everything
│   ├── Models/                      ← Eloquent models
│   │   └── {Model}.php
│   ├── Http/
│   │   ├── Controllers/             ← Traditional controllers
│   │   │   └── {Model}Controller.php
│   │   └── Livewire/                ← Livewire components
│   │       └── {Component}.php
│   ├── Filament/
│   │   ├── Resources/               ← Filament admin resources
│   │   │   └── {Model}Resource.php
│   │   └── Pages/                   ← Custom admin pages
│   └── Services/                    ← Business logic services
│       └── {Module}Service.php
├── database/
│   ├── migrations/                  ← Module-specific migrations
│   │   └── *.php
│   └── seeders/                     ← Module-specific seeders
│       └── {Module}Seeder.php
├── views/                           ← Blade templates
│   └── {module}/                    ← Namespaced folder
│       ├── livewire/
│       │   └── *.blade.php
│       └── layouts/
│           └── *.blade.php
└── routes/
    ├── web.php                      ← Frontend routes
    └── api.php                      ← API routes (optional)
```

---

## Naming Conventions

| What | Convention | Example |
|------|-----------|---------|
| Module directory | `PascalCase` | `Newsletter` |
| PHP namespace | `Modules\{Name}` | `Modules\Newsletter` |
| Service Provider | `{Name}ServiceProvider` | `NewsletterServiceProvider` |
| View namespace | lowercase | `newsletter::` |
| Livewire component | `{module}.{component}` | `newsletter.subscribe` |
| Database table prefix | `{module}_` | `blog_posts` |
| Config file | `{module}.php` | `newsletter.php` |

---

## What the Service Provider Does

The ServiceProvider is the **only required file** in every module. It bootstraps everything:

```php
class BlogServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        // Makes migrations run with php artisan migrate
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');

        // Enables blog:: view namespace
        $this->loadViewsFrom(__DIR__ . '/../views', 'blog');

        // Registers Livewire components
        Livewire::component('blog.blog-list', BlogList::class);

        // Registers routes
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');

        // Publishes config (optional)
        $this->publishes([
            __DIR__ . '/../config/blog.php' => config_path('blog.php'),
        ], 'config');
    }
}
```

---

## Module Config

Add optional configuration file:

```
modules/Blog/
└── config/
    └── blog.php
```

```php
return [
    'posts_per_page' => 12,
    'image_width'    => 1200,
    'allow_comments' => false,
];
```

Load in ServiceProvider:

```php
$this->mergeConfigFrom(__DIR__ . '/../config/blog.php', 'blog');
```

Use anywhere:

```php
config('blog.posts_per_page'); // 12
```

---

## Module Dependencies

Modules can share data through Laravel's service container:

```php
// Module A registers a service
$this->app->singleton(NewsletterService::class, fn ($app) => new NewsletterService());

// Module B resolves it
$service = app(NewsletterService::class);
```

---

## Next Steps

**[Publishing Modules →](publishing)**
