# Blog System

**Estimated time:** 8 minutes  
**Difficulty:** Beginner

---

The Blog module in LaraCoreKit provides a fully multilingual blog system with SEO-friendly slugs, categories, and Filament admin integration.

---

## Features

-  Multilingual posts (EN, HI, AR)
-  SEO-friendly slugs
-  Categories and tags
-  Featured images via Media Library
-  Draft/Published status
-  Author attribution
-  Filament admin CRUD

---

## Routes

```
GET  /blog              → BlogList (Livewire)
GET  /blog/{slug}        → BlogDetail (Livewire)
GET  /admin/posts        → Filament admin
```

---

## Post Model

```php
namespace Modules\Blog\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Post extends Model implements HasMedia
{
    use InteractsWithMedia;

    protected $fillable = [
        'title', 'slug', 'content', 'excerpt',
        'status', 'locale', 'author_id', 'published_at',
    ];

    public function scopePublished($query)
    {
        return $query->where('status', 'published');
    }

    public function scopeLocale($query, string $locale)
    {
        return $query->where('locale', $locale);
    }
}
```

---

## Creating a Post Programmatically

```php
use Modules\Blog\Models\Post;

Post::create([
    'title'        => 'Getting Started with LaraCoreKit',
    'slug'         => 'getting-started-with-laracorekit',
    'content'      => '...',
    'excerpt'      => 'A short summary of the post.',
    'status'       => 'published',
    'locale'       => 'en',
    'published_at' => now(),
]);
```

---

## Displaying Posts in Blade

```blade
@foreach($posts as $post)
<article>
    <h2>{{ $post->title }}</h2>
    <p>{{ $post->excerpt }}</p>
    <a href="{{ route('blog.show', $post->slug) }}">Read more →</a>
</article>
@endforeach
```

---

## Blog in Multiple Languages

Filter posts by locale:

```php
$posts = Post::published()->locale(app()->getLocale())->latest()->paginate(12);
```

---

## Admin Panel

Navigate to `/admin/posts` to:
- Create, edit, delete posts
- Set status (Draft/Published)
- Upload featured images
- Set SEO metadata

---

## Customizing the Blog

Add a new field to posts:

```php
// In migration
$table->string('reading_time')->nullable();

// In model $fillable
'reading_time',

// In Filament resource schema
TextInput::make('reading_time')->suffix('min'),
```

---

## Next Steps

**[Media Management →](media)**
