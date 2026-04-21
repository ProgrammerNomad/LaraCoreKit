# Service Providers

**Estimated time:** 6 minutes  
**Difficulty:** Intermediate

---

Service providers are the bootstrap layer of LaraCoreKit and each module.

---

## Why Providers Matter

Service providers tell Laravel how to wire your application:

- Register services in the container
- Load routes/views/translations/migrations
- Bind interfaces to implementations
- Register event listeners and commands

---

## Provider Types in LaraCoreKit

1. `AppServiceProvider` - global app bootstrapping.
2. `ModuleServiceProvider` - discovers and registers modules.
3. `*ModuleServiceProvider` - one per module.

---

## Typical Module Provider

```php
class BlogServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        // Bind services or merge config
    }

    public function boot(): void
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/resources/views', 'blog');
        $this->loadMigrationsFrom(__DIR__.'/Database/migrations');
        $this->loadTranslationsFrom(__DIR__.'/resources/lang', 'blog');
    }
}
```

---

## Register vs Boot

- `register()`:
  - Container bindings
  - Config merge
  - No runtime dependencies

- `boot()`:
  - Route/view/migration loading
  - Event registration
  - Runtime-ready logic

---

## Best Practices

1. Keep providers lightweight.
2. Avoid heavy DB queries in `boot()`.
3. Use dedicated classes for complex registration logic.
4. Namespace module views/translations.

---

## Next Steps

Next: [Routing →](routing.md)
