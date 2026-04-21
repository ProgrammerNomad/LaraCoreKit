# Search

**Estimated time:** 10 minutes  
**Difficulty:** Intermediate

---

Add powerful full-text search to LaraCoreKit using database queries, Laravel Scout, or Algolia.

---

## Option 1: Simple Database Search

Good for small-to-medium datasets (<10,000 records).

```php
// In a Livewire component
public string $query = '';

public function render()
{
    $posts = Post::published()
        ->when($this->query, function ($q) {
            $q->where(function ($q) {
                $q->where('title', 'LIKE', "%{$this->query}%")
                  ->orWhere('content', 'LIKE', "%{$this->query}%")
                  ->orWhere('excerpt', 'LIKE', "%{$this->query}%");
            });
        })
        ->latest()
        ->paginate(12);

    return view('blog::livewire.blog-list', compact('posts'));
}
```

Add database indexes for better performance:

```php
Schema::table('blog_posts', function (Blueprint $table) {
    $table->fullText(['title', 'content', 'excerpt']);
});
```

Then use MATCH AGAINST:

```php
$posts = Post::whereRaw(
    "MATCH(title, content, excerpt) AGAINST(? IN BOOLEAN MODE)",
    [$this->query . '*']
)->get();
```

---

## Option 2: Laravel Scout

The standard approach for scalable search.

### Install Scout

```bash
composer require laravel/scout
php artisan vendor:publish --provider="Laravel\Scout\ScoutServiceProvider"
```

### Add Searchable Trait

```php
namespace Modules\Blog\Models;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Post extends Model
{
    use Searchable;

    public function toSearchableArray(): array
    {
        return [
            'id'      => $this->id,
            'title'   => $this->title,
            'content' => $this->content,
            'excerpt' => $this->excerpt,
            'locale'  => $this->locale,
            'status'  => $this->status,
        ];
    }

    public function shouldBeSearchable(): bool
    {
        return $this->status === 'published';
    }
}
```

### Search

```php
// Simple search
$results = Post::search('laravel tutorial')->get();

// With filters
$results = Post::search('laravel')->where('locale', 'en')->paginate(15);
```

### Import Existing Records

```bash
php artisan scout:import "Modules\Blog\Models\Post"
```

---

## Option 3: Algolia (Best for Production)

**Algolia DocSearch** is free for open-source projects.

### Step 1: Install Algolia Driver

```bash
composer require algolia/algoliasearch-client-php

# Set Scout driver to algolia
SCOUT_DRIVER=algolia
ALGOLIA_APP_ID=your-app-id
ALGOLIA_SECRET=your-secret-key
```

### Step 2: Add Algolia to Your Front-end

```bash
npm install algoliasearch instantsearch.js
```

```javascript
import algoliasearch from 'algoliasearch/lite';
import instantsearch from 'instantsearch.js';

const searchClient = algoliasearch('YOUR_APP_ID', 'YOUR_SEARCH_KEY');

const search = instantsearch({
    indexName: 'blog_posts',
    searchClient,
});

search.start();
```

---

## Search UI Component (Livewire)

```php
class GlobalSearch extends Component
{
    public string $query  = '';
    public array  $results = [];

    public function updatedQuery(): void
    {
        if (strlen($this->query) < 2) {
            $this->results = [];
            return;
        }

        $this->results = Post::search($this->query)
            ->take(10)
            ->get()
            ->map(fn ($post) => [
                'id'    => $post->id,
                'title' => $post->title,
                'url'   => route('blog.show', $post->slug),
                'type'  => 'Post',
            ])
            ->toArray();
    }

    public function render()
    {
        return view('core::livewire.global-search');
    }
}
```

---

## Search Route

```php
// In your module's routes/web.php
Route::get('/search', function (Request $request) {
    $query   = $request->get('q', '');
    $results = $query ? Post::search($query)->paginate(20) : collect();

    return view('search.results', compact('results', 'query'));
})->name('search');
```

---

## Next Steps

**[FAQ →](../faq)**
