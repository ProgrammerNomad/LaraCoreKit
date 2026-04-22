# Configuration

---
**Supported Stack:** Laravel 13 / Filament 5 / Livewire 4 / Tailwind 4  
**Last Updated:** April 22, 2026  
**Estimated Time:** 8 minutes  
**Difficulty:** Intermediate  
**Source Files:** [config/modules.php](../../config/modules.php) | [config/app.php](../../config/app.php)
---

This guide explains all key configuration points in LaraCoreKit, including app settings, module configuration, multilingual setup, and environment-specific options.

---

## Environment File (`.env`)

Your `.env` file controls runtime behavior for local, staging, and production environments.

### Core Application Settings

```env
APP_NAME="LaraCoreKit"
APP_ENV=local
APP_KEY=base64:your-generated-key
APP_DEBUG=true
APP_URL=http://localhost:8000
```

### Localization

```env
APP_LOCALE=en
APP_FALLBACK_LOCALE=en
APP_FAKER_LOCALE=en_US
```

### Database

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laracorekit
DB_USERNAME=root
DB_PASSWORD=
```

### Cache & Sessions

```env
CACHE_DRIVER=file
SESSION_DRIVER=file
QUEUE_CONNECTION=sync
```

### Mail

```env
MAIL_MAILER=smtp
MAIL_HOST=mailpit
MAIL_PORT=1025
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS="hello@laracorekit.com"
MAIL_FROM_NAME="${APP_NAME}"
```

---

## Modules Configuration (`config/modules.php`) 

This is one of the most important files in LaraCoreKit.

### Example

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

### Enable/Disable a Module

Disable module temporarily:

```php
'enabled' => [
    'Core',
    'Auth',
    'User',
    // 'Blog', // disabled
    'Media',
    'Settings',
],
```

Then clear cache:

```bash
php artisan optimize:clear
```

---

## Application Config (`config/app.php`)

Common customizations:

- Application name
- Timezone
- Locale defaults
- Service providers
- Aliases

### Recommended

```php
'name' => env('APP_NAME', 'LaraCoreKit'),
'timezone' => 'UTC',
'locale' => env('APP_LOCALE', 'en'),
'fallback_locale' => env('APP_FALLBACK_LOCALE', 'en'),
```

---

## Authentication Config (`config/auth.php`)

LaraCoreKit uses Laravel auth + Sanctum.

Key sections:

- `guards` (web, api)
- `providers` (users)
- `passwords` (reset options)

If using custom user model in a module, update provider model accordingly.

---

## Permissions Config (`config/permission.php`)

Powered by Spatie Permission.

Configure:

- Role model / permission model
- Teams support
- Cache store and expiration
- Table names

After permission changes, clear permission cache:

```bash
php artisan permission:cache-reset
```

---

## Filesystem Config (`config/filesystems.php`)

Use local or cloud storage.

### Local Disk

```php
'public' => [
    'driver' => 'local',
    'root' => storage_path('app/public'),
    'url' => env('APP_URL').'/storage',
    'visibility' => 'public',
],
```

### S3 Disk

```env
FILESYSTEM_DISK=s3
AWS_ACCESS_KEY_ID=your_key
AWS_SECRET_ACCESS_KEY=your_secret
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=your_bucket
AWS_URL=
```

Create storage symlink for local:

```bash
php artisan storage:link
```

---

## Cache & Queue Config

### Local Development

```env
CACHE_DRIVER=file
QUEUE_CONNECTION=sync
SESSION_DRIVER=file
```

### Production Recommended

```env
CACHE_DRIVER=redis
QUEUE_CONNECTION=redis
SESSION_DRIVER=redis
```

Run queue worker:

```bash
php artisan queue:work
```

---

## Mail Configuration

### Development (Mailpit)

```env
MAIL_MAILER=smtp
MAIL_HOST=127.0.0.1
MAIL_PORT=1025
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
```

### Production (SMTP)

```env
MAIL_MAILER=smtp
MAIL_HOST=smtp.mailgun.org
MAIL_PORT=587
MAIL_USERNAME=postmaster@laracorekit.com
MAIL_PASSWORD=your_password
MAIL_ENCRYPTION=tls
```

---

## Multilingual Config

Supported locales are usually managed by Core/Settings modules.

Typical setup:

```php
// config/app.php
'locale' => 'en',
'fallback_locale' => 'en',
```

And language files in:

- `lang/en.json`
- `lang/hi.json`
- `lang/ar.json`

For RTL logic:

```blade
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}">
```

---

## Frontend Build Config

### Vite (`vite.config.js`)

Make sure module assets/views are included when needed.

Typical inputs:

```js
input: ['resources/css/app.css', 'resources/js/app.js']
```

### Tailwind (`tailwind.config.js`)

Include module blade paths:

```js
content: [
  './resources/**/*.blade.php',
  './modules/**/resources/**/*.blade.php',
  './vendor/filament/**/*.blade.php',
]
```

---

## Config Cache Commands

Use these commands during configuration updates:

```bash
php artisan config:clear
php artisan cache:clear
php artisan route:clear
php artisan view:clear
php artisan optimize:clear
```

Production optimize:

```bash
php artisan config:cache
php artisan route:cache
php artisan view:cache
php artisan optimize
```

---

## Environment Profiles

### Local

- `APP_DEBUG=true`
- File cache/session
- Sync queue
- Detailed logs

### Staging

- `APP_DEBUG=false`
- Real services where possible
- Redis queue/cache
- Lower log verbosity

### Production

- `APP_DEBUG=false`
- Redis for cache/session/queue
- SMTP configured
- Monitoring enabled
- Config and route cache enabled

---

## Common Configuration Mistakes

1. Forgetting to run `php artisan optimize:clear` after config changes.
2. Missing module path in `config/modules.php`.
3. Not including module blade files in Tailwind content paths.
4. Wrong `APP_URL` causing broken asset URLs.
5. Wrong filesystem disk causing upload failures.

---

## Next Steps

Next: [Core Architecture →](core/architecture.md)  
Then: [Module System →](core/modules-system.md)

