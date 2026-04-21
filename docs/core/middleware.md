# Middleware

**Estimated time:** 6 minutes  
**Difficulty:** Intermediate

---

Middleware provides request-level control for authentication, localization, permissions, and feature flags.

---

## Common Middleware in LaraCoreKit

- `web` - session, CSRF, cookies
- `auth` - authenticated users only
- `verified` - email verified only
- `setLocale` - locale from request/session/user
- `permission:*` - permission-based access control

---

## Global vs Route Middleware

### Global middleware

Runs on every request (registered in HTTP kernel).

### Route middleware

Applied only on specific routes/groups:

```php
Route::middleware(['auth', 'verified'])->group(function () {
    // Protected routes
});
```

---

## Localization Middleware

Typical behavior:

1. Detect locale from route/session/user preference.
2. Set `app()->setLocale($locale)`.
3. Apply RTL layout if locale is Arabic.

---

## Permission Middleware

Spatie permission middleware controls route-level RBAC:

```php
Route::middleware(['auth', 'permission:blog.create'])->group(function () {
    Route::get('/admin/blog/create', ...);
});
```

---

## Best Practices

1. Keep middleware focused and single-purpose.
2. Avoid heavy logic in middleware.
3. Use route groups for clean middleware stacking.
4. Document custom middleware behavior.

---

## Next Steps

Next: [Authentication Feature →](../features/authentication.md)
