# Caching

**Estimated time:** 8 minutes  
**Difficulty:** Intermediate

---

Effective caching can make your application 10-100x faster. LaraCoreKit supports multiple cache drivers out of the box.

---

## Cache Drivers

| Driver | Config value | Best For |
|--------|-------------|----------|
| File | `file` | Development / small apps |
| Redis | `redis` | Production (recommended) |
| Memcached | `memcached` | High-traffic alternative |
| DynamoDB | `dynamodb` | AWS serverless deployments |
| Array | `array` | Testing only |

Set in `.env`:

```env
CACHE_DRIVER=redis
```

---

## Basic Cache Operations

```php
use Illuminate\Support\Facades\Cache;

// Store a value (seconds TTL)
Cache::put('key', $value, 3600);

// Store with Carbon TTL
Cache::put('key', $value, now()->addHours(6));

// Store forever
Cache::forever('key', $value);

// Retrieve
$value = Cache::get('key');
$value = Cache::get('key', 'default_value');

// Check existence
Cache::has('key');

// Remove
Cache::forget('key');

// Clear all cache
Cache::flush();
```

---

## The Remember Pattern (Most Common)

```php
// Only queries DB if cache misses
$posts = Cache::remember('home_posts', 3600, function () {
    return Post::published()->latest()->take(6)->get();
});

// Remember forever
$settings = Cache::rememberForever('app_settings', function () {
    return Setting::all()->pluck('value', 'key');
});
```

---

## Cache in Livewire Components

```php
use Illuminate\Support\Facades\Cache;
use Livewire\Attributes\Computed;

class BlogList extends Component
{
    #[Computed]
    public function posts()
    {
        return Cache::remember('blog_list_' . $this->page, 300, function () {
            return Post::published()
                ->locale(app()->getLocale())
                ->latest()
                ->paginate(12);
        });
    }
}
```

---

## Cache Tags

Group related cache items for easy invalidation:

```php
// Store with tags
Cache::tags(['posts', 'homepage'])->put('featured_posts', $posts, 3600);

// Retrieve with tags
$posts = Cache::tags(['posts'])->get('featured_posts');

// Invalidate all 'posts' tagged caches at once
Cache::tags(['posts'])->flush();
```

> **Note:** Cache tags require Redis or Memcached driver.

---

## Model Cache Events

Auto-clear cache when model changes:

```php
class Post extends Model
{
    protected static function booted(): void
    {
        static::saved(function () {
            Cache::tags(['posts'])->flush();
        });

        static::deleted(function () {
            Cache::tags(['posts'])->flush();
        });
    }
}
```

---

## HTTP Response Caching

Cache entire HTTP responses:

```php
// In a controller
return response()
    ->view('blog.index', compact('posts'))
    ->header('Cache-Control', 'public, max-age=3600')
    ->header('ETag', md5($posts->toJson()));
```

---

## Artisan Cache Commands

```bash
# Clear application cache
php artisan cache:clear

# Clear config cache
php artisan config:clear

# Clear all compiled/cached files
php artisan optimize:clear
```

---

## Next Steps

**[Queues →](queues)**
