# Project Structure

**Estimated time:** 10 minutes  
**Difficulty:** Beginner to Intermediate

---

Understanding LaraCoreKit's structure is essential for efficient development. This guide explains how the codebase is organized and where to find everything.

---

## High-Level Overview

```
LaraCoreKit/
├── app/                    # Core application code
├── bootstrap/              # Framework bootstrap files
├── config/                 # Configuration files
├── database/              # Migrations, seeders, factories
├── modules/               # � Feature modules (THE KEY)
├── public/                # Web server document root
├── resources/             # Views, assets, lang files
├── routes/                # Route definitions
├── storage/               # Generated files, logs, cache
├── tests/                 # Automated tests
└── vendor/                # Composer dependencies
```

---

## Core Directories

### `/app` - Application Core

Contains base application code that's **not** part of modules. Keep this minimal.

```
app/
├── Console/
│   └── Kernel.php              # Console kernel
├── Exceptions/
│   └── Handler.php             # Exception handler
├── Http/
│   ├── Controllers/            # Global controllers (minimal)
│   ├── Middleware/             # Global middleware
│   └── Kernel.php              # HTTP kernel
├── Models/
│   └── User.php                # Base User model
├── Providers/
│   ├── AppServiceProvider.php     # Application services
│   └── ModuleServiceProvider.php  # � Loads modules
└── Filament/
    └── Pages/                  # Global Filament pages (if any)
```

**Key Files:**

- `Providers/ModuleServiceProvider.php` - Discovers and registers modules
- `Models/User.php` - Base user model (can be extended by User module)
- `Http/Kernel.php` - Registers global middleware

---

### `/config` - Configuration

All configuration files following Laravel conventions.

```
config/
├── app.php                 # Application settings
├── auth.php                # Authentication config
├── database.php            # Database connections
├── filesystems.php         # Storage disks
├── modules.php             # � Module configuration
├── permission.php          # Spatie permission config
├── filament.php            # Filament admin config
├── cache.php               # Cache drivers
├── mail.php                # Email settings
├── queue.php               # Queue connections
└── services.php            # Third-party services
```

**Key Configuration Files:**

#### `config/modules.php`

Defines enabled modules and their metadata:

```php
return [
    'namespace' => 'Modules',
    
    'paths' => [
        'modules' => base_path('modules'),
    ],
    
    'enabled' => [
        'Core',
        'Auth',
        'User',
        'Blog',
        'Media',
        'Settings',
    ],
    
    'scan' => [
        'enabled' => true,
        'paths' => [
            base_path('modules'),
        ],
    ],
];
```

---

### `/modules` - Feature Modules 

**This is where the magic happens.** Each module is self-contained.

```
modules/
├── Core/                   # Base module (required)
│   ├── composer.json
│   └── src/
│       ├── CoreServiceProvider.php
│       ├── Http/
│       │   ├── Controllers/
│       │   └── Middleware/
│       ├── resources/
│       │   ├── views/
│       │   └── lang/
│       └── routes/
│           └── web.php
│
├── Auth/                   # Authentication module
│   └── src/
│       ├── AuthServiceProvider.php
│       ├── Http/
│       │   ├── Controllers/
│       │   │   ├── LoginController.php
│       │   │   ├── RegisterController.php
│       │   │   └── PasswordResetController.php
│       │   └── Middleware/
│       ├── resources/
│       │   └── views/
│       │       ├── login.blade.php
│       │       └── register.blade.php
│       └── routes/
│
├── Blog/                   # Blog module
│   └── src/
│       ├── BlogServiceProvider.php
│       ├── Models/
│       │   └── Blog.php
│       ├── Filament/
│       │   └── Resources/
│       │       └── BlogResource.php
│       ├── Http/
│       │   ├── Controllers/
│       │   └── Livewire/
│       │       ├── BlogList.php
│       │       └── BlogShow.php
│       ├── Database/
│       │   ├── migrations/
│       │   └── seeders/
│       └── resources/
│           ├── views/
│           └── lang/
│
├── User/                   # User management module
├── Media/                  # Media management module
└── Settings/               # Settings module
```

---

## Module Structure (Standard)

Every module follows this structure:

```
ModuleName/
├── composer.json                    # Module metadata
├── README.md                        # Module documentation
└── src/
    ├── ModuleNameServiceProvider.php  # Registers module
    │
    ├── Models/                      # Eloquent models
    │   ├── Post.php
    │   └── Category.php
    │
    ├── Http/
    │   ├── Controllers/             # Controllers
    │   │   └── PostController.php
    │   ├── Middleware/              # Module middleware
    │   │   └── CheckPostOwner.php
    │   └── Livewire/                # Livewire components
    │       └── PostForm.php
    │
    ├── Filament/                    # Filament admin
    │   ├── Resources/
    │   │   └── PostResource.php
    │   └── Pages/
    │       └── CustomPage.php
    │
    ├── Console/                     # Artisan commands
    │   └── Commands/
    │       └── ImportPosts.php
    │
    ├── Database/
    │   ├── migrations/              # Module migrations
    │   ├── seeders/                 # Module seeders
    │   └── factories/               # Model factories
    │
    ├── resources/
    │   ├── views/                   # Blade views
    │   │   ├── index.blade.php
    │   │   └── show.blade.php
    │   ├── lang/                    # Translations
    │   │   ├── en.json
    │   │   └── hi.json
    │   └── assets/                  # Module assets (optional)
    │
    ├── routes/
    │   ├── web.php                  # Web routes
    │   └── api.php                  # API routes
    │
    ├── config/
    │   └── module-name.php          # Module config
    │
    └── Tests/                       # Module tests
        ├── Unit/
        └── Feature/
```

---

## Resources

### `/resources` - Views & Assets

```
resources/
├── views/
│   ├── layouts/                 # Global layouts
│   │   ├── app.blade.php
│   │   ├── guest.blade.php
│   │   └── admin.blade.php
│   ├── components/              # Blade components
│   │   ├── button.blade.php
│   │   └── card.blade.php
│   └── welcome.blade.php        # Homepage
│
├── css/
│   └── app.css                  # Tailwind entry point
│
├── js/
│   ├── app.js                   # Vite entry point
│   └── bootstrap.js             # Bootstrap JavaScript
│
└── lang/                        # Global translations (optional)
    ├── en.json
    ├── hi.json
    └── ar.json
```

**Important:**

- Module-specific views should live in `modules/{Module}/resources/views/`
- Global layouts and shared components go here
- Tailwind CSS compiles from `resources/css/app.css`

---

## Routes

### `/routes` - Routing

```
routes/
├── web.php                  # Web routes
├── api.php                  # API routes
└── console.php              # Console routes (Closure-based commands)
```

**How Routes Work:**

1. **Global routes** in `routes/web.php`
2. **Module routes** in `modules/{Module}/src/routes/web.php`
3. Module routes are registered by `ModuleServiceProvider`

Example module route registration:

```php
// modules/Blog/src/BlogServiceProvider.php
public function boot()
{
    $this->loadRoutesFrom(__DIR__.'/routes/web.php');
}
```

---

## Database

### `/database` - Database Files

```
database/
├── migrations/                  # Global migrations
│   ├── 2024_01_01_000000_create_users_table.php
│   └── 2024_01_01_000001_create_password_resets_table.php
│
├── seeders/                     # Global seeders
│   ├── DatabaseSeeder.php
│   └── RoleSeeder.php
│
└── factories/                   # Model factories
    └── UserFactory.php
```

**Note:**

- Module-specific migrations are in `modules/{Module}/src/Database/migrations/`
- Module migrations are auto-discovered and loaded by the module service provider

---

## Public Assets

### `/public` - Web Root

```
public/
├── index.php                    # Application entry point
├── .htaccess                    # Apache rewrite rules
├── robots.txt                   # SEO robots file
├── favicon.ico                  # Site favicon
│
├── build/                       # Vite build output
│   ├── manifest.json
│   └── assets/
│
├── storage/                     # Symlink to storage/app/public
│   └── uploads/
│
├── css/                         # Additional CSS (if any)
├── js/                          # Additional JS (if any)
├── images/                      # Static images
└── fonts/                       # Web fonts
```

**Key Points:**

- Never edit files in `public/build/` - they're auto-generated
- Use `php artisan storage:link` to create storage symlink
- Static assets can be accessed via `/images/logo.png`

---

## Storage

### `/storage` - Generated Files

```
storage/
├── app/
│   ├── public/                  # Publicly accessible files
│   │   └── uploads/
│   └── private/                 # Private files
│
├── framework/
│   ├── cache/                   # Framework cache
│   ├── sessions/                # Session files
│   └── views/                   # Compiled Blade views
│
└── logs/
    └── laravel.log              # Application logs
```

**Permissions:**

Storage directory must be writable:

```bash
chmod -R 775 storage
chmod -R 775 bootstrap/cache
```

---

## Testing

### `/tests` - Automated Tests

```
tests/
├── TestCase.php                 # Base test case
├── CreatesApplication.php       # Test trait
│
├── Feature/                     # Feature tests
│   ├── Auth/
│   │   ├── LoginTest.php
│   │   └── RegisterTest.php
│   └── Blog/
│       └── BlogCrudTest.php
│
└── Unit/                        # Unit tests
    └── Models/
        └── UserTest.php
```

**Module Tests:**

Each module can have its own tests in `modules/{Module}/src/Tests/`

---

## Configuration Files

### Key Configuration

#### `composer.json`

Defines PHP dependencies and PSR-4 autoloading:

```json
{
    "autoload": {
        "psr-4": {
            "App\\": "app/",
            "Modules\\": "modules/",
            "Database\\Seeders\\": "database/seeders/"
        }
    }
}
```

#### `package.json`

Defines JavaScript dependencies:

```json
{
    "devDependencies": {
        "@tailwindcss/forms": "^0.5.0",
        "tailwindcss": "^4.0.0",
        "vite": "^5.0.0",
        "laravel-vite-plugin": "^1.0.0"
    }
}
```

#### `vite.config.js`

Vite build configuration:

```javascript
import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
});
```

#### `tailwind.config.js`

TailwindCSS configuration:

```javascript
export default {
    content: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './modules/**/resources/**/*.blade.php',
        './vendor/filament/**/*.blade.php',
    ],
    theme: {
        extend: {},
    },
    plugins: [
        require('@tailwindcss/forms'),
    ],
}
```

---

## Important Files

### Root Directory Files

```
.env                         # Environment configuration (DO NOT COMMIT)
.env.example                 # Environment template
.gitignore                   # Git ignore rules
artisan                      # Artisan CLI tool
composer.json                # PHP dependencies
composer.lock                # Locked PHP versions
package.json                 # JavaScript dependencies
package-lock.json            # Locked JS versions
phpunit.xml                  # PHPUnit configuration
README.md                    # Project readme
```

---

## File Naming Conventions

### Controllers

```
{Name}Controller.php         # Standard controller
{Name}ApiController.php      # API controller
```

Examples:
- `PostController.php`
- `UserApiController.php`

### Models

```
{SingularName}.php           # Model name
```

Examples:
- `Post.php`
- `BlogCategory.php`

### Migrations

```
{timestamp}_create_{table}_table.php
{timestamp}_add_{field}_to_{table}_table.php
```

Examples:
- `2024_01_01_000000_create_posts_table.php`
- `2024_01_02_000000_add_featured_to_posts_table.php`

### Blade Views

```
{name}.blade.php             # Standard view
{name}-{variant}.blade.php   # Variant view
```

Examples:
- `index.blade.php`
- `show.blade.php`
- `form-create.blade.php`

---

## Module Discovery

### How Modules Are Loaded

1. **ModuleServiceProvider** reads `config/modules.php`
2. Scans directories in `paths.modules`
3. Discovers `*ServiceProvider.php` files
4. Auto-registers enabled modules
5. Loads routes, migrations, views, translations

### Module Registration Order

Modules are loaded in the order specified in `config/modules.php`:

```php
'enabled' => [
    'Core',        // 1. Loaded first (provides base functionality)
    'Auth',        // 2. Authentication
    'User',        // 3. User management
    'Blog',        // 4. Blog features
    'Media',       // 5. Media management
    'Settings',    // 6. Settings last
],
```

**Important:** `Core` module must always be first.

---

## Autoloading

### PSR-4 Autoloading Map

```
App\                         → app/
Modules\                     → modules/
Database\Seeders\            → database/seeders/
```

### Refresh Autoloader

After adding new classes:

```bash
composer dump-autoload
```

---

## Next Steps

Now that you understand the structure:

1. � **[Learn Module System →](core/modules-system.md)** 
2. � **[Create Your First Module →](modules/create-module.md)**
3. � **[Explore Configuration →](configuration.md)**

---

## Quick Reference

| Directory | Purpose | Edit Frequency |
|-----------|---------|----------------|
| `/modules` | Feature modules |  |
| `/resources/views` | Blade templates |  |
| `/config` | Configuration |  |
| `/routes` | Route definitions |  |
| `/public` | Static assets |  |
| `/app` | Core app code |  |
| `/database` | Migrations/Seeders |  |
| `/tests` | Automated tests |  |

---

**� Understanding the structure is the first step to mastering LaraCoreKit!**
