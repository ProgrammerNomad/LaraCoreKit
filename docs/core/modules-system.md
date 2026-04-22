# Module System 

**Estimated time:** 10 minutes  
**Difficulty:** Intermediate

---

The LaraCoreKit Module System is the **core differentiator** that makes this starter kit production-ready and team-scalable. Instead of one giant `app/` directory, features are organized into self-contained, independent modules.

---

## What is a Module?

A **module** is a self-contained PHP package directory within `/modules` that handles a single feature area. Each module owns:

- Its own **Models**
- Its own **Controllers / Livewire components**
- Its own **Migrations** and **Seeders**
- Its own **Views** and **Blade components**
- Its own **Routes**
- Its own **Translations**
- Its own **Service Provider**

---

## How Modules Load

The loading pipeline:

```
config/modules.php
       │
       ▼
App\Providers\ModuleServiceProvider::register()
       │  (iterates enabled modules)
       │
       ▼
Each Module's ServiceProvider::boot()
       │
       ├── loadViewsFrom()
       ├── loadMigrationsFrom()
       ├── loadRoutesFrom()
       └── Livewire::component(...)
```

### `config/modules.php`

```php
return [
    'modules' => [
        'Blog' => [
            'enabled'  => true,
            'namespace' => 'Modules\\Blog',
            'provider'  => 'Modules\\Blog\\BlogServiceProvider',
        ],
        // ... more modules
    ],
];
```

Setting `enabled => false` completely disables a module - no routes registered, no migrations run.

---

## Benefits

| Benefit | What it means for you |
|---------|----------------------|
| **Independent** | Teams can work on separate modules independently |
| **Enable/Disable** | Toggle features without touching any other code |
| **Distributable** | Publish as Composer packages |
| **Testable** | Test each module in isolation |
| **Scalable** | Add features without touching existing code |

---

## Module Directory Structure

```
modules/
└── Blog/
    ├── src/
    │   ├── BlogServiceProvider.php   ← Registers everything
    │   ├── Models/
    │   │   └── Post.php
    │   ├── Http/
    │   │   └── Livewire/
    │   │       ├── BlogList.php
    │   │       └── BlogDetail.php
    │   └── Filament/
    │       └── Resources/
    │           └── PostResource.php
    ├── database/
    │   ├── migrations/
    │   │   └── 2024_01_01_create_posts_table.php
    │   └── seeders/
    │       └── BlogSeeder.php
    ├── views/
    │   └── blog/
    │       ├── list.blade.php
    │       └── detail.blade.php
    └── routes/
        └── web.php
```

---

## The Service Provider

Every module has one `ServiceProvider` that bootstraps the module:

```php
namespace Modules\Blog;

use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;

class BlogServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        // Bind interfaces, share config, etc.
    }

    public function boot(): void
    {
        // Load migrations
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');

        // Load Blade views under 'blog::' namespace
        $this->loadViewsFrom(__DIR__ . '/../views', 'blog');

        // Register Livewire components
        Livewire::component('blog.blog-list',   \Modules\Blog\Http\Livewire\BlogList::class);
        Livewire::component('blog.blog-detail', \Modules\Blog\Http\Livewire\BlogDetail::class);

        // Load routes
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
    }
}
```

---

## Accessing Module Views

Module views use a **namespace** prefix:

```blade
{{-- In any Blade view --}}
@extends('blog::layouts.base')

@include('blog::partials.card')
```

---

## Module Autoloading

Modules are autoloaded via `composer.json`:

```json
{
    "autoload": {
        "psr-4": {
            "Modules\\Blog\\": "modules/Blog/src/",
            "Modules\\Blog\\Database\\Seeders\\": "modules/Blog/database/seeders/"
        }
    }
}
```

After adding a new module, run:

```bash
composer dump-autoload
```

---

## Disabling a Module

To temporarily disable the Blog module:

```php
// config/modules.php
'Blog' => [
    'enabled' => false,   // ← toggle this
    ...
],
```

Run `php artisan optimize:clear` after changing this.

---

## Next Steps

**[Create a Module →](../modules/create-module)**

Step-by-step guide to building your first custom module.
