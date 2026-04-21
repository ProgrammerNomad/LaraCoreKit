# FAQ

**Estimated time:** 5 minutes  
**Difficulty:** Beginner

---

Answers to the most common questions about LaraCoreKit.

---

## General

### Q: What PHP version does LaraCoreKit require?

A: **PHP 8.3** or higher.

### Q: Can I use LaraCoreKit for commercial projects?

A: **Yes!** LaraCoreKit is MIT licensed — completely free for commercial use with no restrictions.

### Q: What databases are supported?

A: MySQL, PostgreSQL, SQLite, and SQL Server. MySQL 8+ is recommended for production.

### Q: Is TailwindCSS v4 compatible with older browsers?

A: TailwindCSS v4 uses modern CSS features. It supports all evergreen browsers (Chrome, Firefox, Safari, Edge). IE11 is not supported.

---

## Installation

### Q: I get "Class not found" errors.

**Solution:**
```bash
composer dump-autoload
php artisan optimize:clear
```

### Q: Migration fails with a database connection error.

**Solution:**
1. Check your `.env` database credentials
2. Ensure the database server is running
3. For MySQL, make sure the database exists:
   ```sql
   CREATE DATABASE laracorekit;
   ```

### Q: Vite build fails with Node.js errors.

**Solution:**
```bash
rm -rf node_modules package-lock.json
npm install
npm run build
```

---

## Modules

### Q: Can I disable a built-in module (e.g., Blog)?

A: **Yes.** Set `enabled => false` in `config/modules.php`:

```php
'Blog' => [
    'enabled' => false,
    ...
],
```

Then run `php artisan optimize:clear`.

### Q: Can I build and sell my own modules?

A: **Absolutely.** You own whatever you build. Extract any module as a Composer package and distribute it freely (or commercially).

### Q: I added a new module but routes aren't loading.

**Solution:**
1. Add the module to `config/modules.php` with `enabled => true`
2. Add namespace to `composer.json` autoload psr-4
3. Run `composer dump-autoload`
4. Run `php artisan optimize:clear`

---

## Admin Panel

### Q: I can't log into the admin panel.

A: Create an admin user:

```bash
php artisan filament:user
```

### Q: Where are the Filament admin resources?

A: Inside each module: `modules/{Module}/src/Filament/Resources/`

### Q: How do I change the admin panel path from `/admin`?

A: In `app/Providers/Filament/AdminPanelProvider.php`:

```php
->path('dashboard')  // Changes to /dashboard
```

---

## Frontend

### Q: I updated a view but still see the old content.

**Solution:**
```bash
php artisan view:clear
```

### Q: How do I enable dark mode manually?

A: Add `dark` class to your `<html>` tag:

```blade
<html class="dark">
```

Or let Alpine.js handle the toggle:

```javascript
document.documentElement.classList.toggle('dark');
```

---

## Debugging

### Q: How do I enable debug mode?

```env
APP_DEBUG=true
APP_ENV=local
```

### Q: How do I see all SQL queries?

```php
// In AppServiceProvider::boot()
DB::listen(fn ($query) => logger($query->sql, $query->bindings));
```

Or install Laravel Telescope:

```bash
composer require laravel/telescope --dev
php artisan telescope:install
php artisan migrate
```

Visit `/telescope` to see queries, jobs, requests, and more.

---

## Performance

### Q: How do I speed up my app?

```bash
# Cache everything
php artisan optimize

# Use Redis for cache/sessions/queues
# Set in .env:
# CACHE_DRIVER=redis
# SESSION_DRIVER=redis
# QUEUE_CONNECTION=redis
```

---

## Next Steps

**[Contributing →](contributing)**
