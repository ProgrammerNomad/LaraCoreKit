# Performance Optimization

**Estimated time:** 10 minutes  
**Difficulty:** Intermediate

---

Speed directly impacts user experience, SEO rankings, and conversion rates. This guide covers key optimizations for LaraCoreKit in production.

---

## Laravel Built-in Optimizations

Run all at once:

```bash
php artisan optimize
```

Or individually:

```bash
# Cache config (major speedup)
php artisan config:cache

# Cache routes (faster route matching)
php artisan route:cache

# Cache views (skip Blade compilation)
php artisan view:cache

# Cache events (avoid dynamic discovery)
php artisan event:cache
```

Clear all caches:

```bash
php artisan optimize:clear
```

---

## PHP OPcache

Enable OPcache in `php.ini`:

```ini
opcache.enable=1
opcache.enable_cli=1
opcache.memory_consumption=256
opcache.max_accelerated_files=20000
opcache.validate_timestamps=0      ; Disable in production
opcache.save_comments=1
opcache.fast_shutdown=1
```

Verify it's active:

```bash
php -r "echo opcache_get_status()['opcache_enabled'] ? 'OPcache ON' : 'OPcache OFF';"
```

---

## Redis for Cache, Sessions, Queues

Switch all drivers to Redis in `.env`:

```env
CACHE_DRIVER=redis
SESSION_DRIVER=redis
QUEUE_CONNECTION=redis
```

Redis is dramatically faster than file-based drivers under load.

---

## Database Indexes

Add indexes to frequently queried columns:

```php
// In a migration
Schema::table('blog_posts', function (Blueprint $table) {
    $table->index(['status', 'locale']);
    $table->index('slug');
    $table->index('published_at');
    $table->index('author_id');
});
```

Check for missing indexes using Laravel Telescope or the query log.

---

## Eager Loading (Avoid N+1)

```php
// ❌ Bad - N+1 queries
$posts = Post::all();
foreach ($posts as $post) {
    echo $post->author->name; // Query per post
}

//  Good - 2 queries total
$posts = Post::with('author', 'tags', 'media')->get();
```

---

## HTTP Caching with Cache Headers

```php
// In a controller
return response()->view('blog.show', compact('post'))
    ->header('Cache-Control', 'public, max-age=3600');
```

---

## Asset Optimization (Vite)

Already handled by `npm run build`:
- Minification
- Tree-shaking
- Content hash for cache busting
- CSS extraction

---

## Image Optimization

When using Spatie MediaLibrary, add WebP conversions:

```php
$this->addMediaConversion('webp')
     ->format('webp')
     ->quality(80);
```

Use lazy loading in Blade:

```blade
<img src="{{ $post->cover_url }}" loading="lazy" alt="{{ $post->title }}">
```

---

## Livewire Optimization

```php
//  Use lazy loading for heavy components
@livewire('blog.blog-list', lazy: true)

//  Use wire:navigate for SPA-like navigation (Livewire 4)
<a wire:navigate href="/blog">Blog</a>

//  Minimize re-renders with computed properties
#[Computed]
public function posts()
{
    return Post::published()->latest()->paginate(12);
}
```

---

## Benchmark Your App

```bash
# Install k6 for load testing
# https://k6.io

# Or use Apache Benchmark
ab -n 1000 -c 10 https://www.laracorekit.com/blog
```

---

## Monitoring

Use these tools in production:

| Tool | Purpose |
|------|---------|
| Laravel Telescope | Debug queries, jobs, requests |
| Sentry | Error tracking |
| UptimeRobot | Uptime monitoring |
| New Relic / Datadog | APM (Application Performance Monitoring) |

---

## Next Steps

**[Testing →](../advanced/testing)**


