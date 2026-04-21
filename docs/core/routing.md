# Routing

**Estimated time:** 7 minutes  
**Difficulty:** Intermediate

---

Routing in LaraCoreKit combines global Laravel routes with module-specific routes.

---

## Route Sources

1. `routes/web.php` - global routes
2. `routes/api.php` - global API routes
3. `modules/*/src/routes/web.php` - module web routes
4. `modules/*/src/routes/api.php` - module API routes

---

## Module Route Loading

Module providers load their own routes:

```php
$this->loadRoutesFrom(__DIR__.'/routes/web.php');
```

This keeps routes close to feature code.

---

## Recommended Route Conventions

### Public web routes

```php
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
```

### Protected routes

```php
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', DashboardController::class)->name('dashboard');
});
```

### API routes

```php
Route::middleware('auth:sanctum')->group(function () {
    Route::get('/profile', [ProfileController::class, 'show']);
});
```

---

## Route Naming

Use consistent names to avoid conflicts:

- `blog.index`
- `blog.show`
- `user.profile.edit`
- `settings.general.update`

Prefer module-prefixed route names.

---

## Route Caching

Production:

```bash
php artisan route:cache
```

After route changes:

```bash
php artisan route:clear
```

---

## Debugging Routes

List routes:

```bash
php artisan route:list
```

Filter by module/prefix:

```bash
php artisan route:list --name=blog
php artisan route:list --path=admin
```

---

## Next Steps

Next: [Middleware →](middleware.md)
