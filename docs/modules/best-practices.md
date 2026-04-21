# Module Best Practices

**Estimated time:** 8 minutes  
**Difficulty:** Intermediate

---

Building good modules isn't just about making them work — it's about making them maintainable, testable, and enjoyable for other developers (including future you).

---

##  Do These

### 1. One Responsibility Per Module

Each module should handle **one feature domain** only.

```
 Newsletter module  → email subscriptions
 Blog module        → content management
❌ BlogNewsletter     → mixing two concerns
```

---

### 2. Prefix ALL Database Tables

```php
//  Good — prefix with module name
Schema::create('blog_posts', function (Blueprint $table) { ... });
Schema::create('blog_categories', function (Blueprint $table) { ... });

// ❌ Bad — generic names cause conflicts
Schema::create('posts', ...);
Schema::create('categories', ...);
```

---

### 3. Always Use Module View Namespaces

```blade
{{--  Good — explicit namespace --}}
@extends('blog::layouts.base')
@include('blog::partials.card')

{{-- ❌ Bad — implicit, breaks when moved --}}
@extends('layouts.app')
```

---

### 4. Put Business Logic in Services

```php
//  Good
class SubscribeController extends Controller
{
    public function __construct(private NewsletterService $newsletter) {}

    public function store(Request $request): JsonResponse
    {
        $this->newsletter->subscribe($request->email);
        return response()->json(['message' => 'Subscribed!']);
    }
}

// ❌ Bad — business logic inside controller
public function store(Request $request)
{
    Subscriber::create(['email' => $request->email]);
    Mail::to($request->email)->send(new ConfirmationMail());
    // ... more logic
}
```

---

### 5. Use `__DIR__` for All Paths

```php
//  Good — relative, portable
$this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
$this->loadViewsFrom(__DIR__ . '/../views', 'newsletter');

// ❌ Bad — absolute path, breaks on different machines
$this->loadMigrationsFrom('/var/www/app/modules/Newsletter/database/migrations');
```

---

### 6. Write Tests for Every Module

```
tests/
└── Modules/
    └── Newsletter/
        ├── Unit/
        │   └── SubscriberModelTest.php
        └── Feature/
            ├── SubscribeFormTest.php
            └── UnsubscribeTest.php
```

---

### 7. Provide a Seeder for Demo Data

```php
php artisan db:seed --class=Modules\\Blog\\Database\\Seeders\\BlogSeeder
```

---

### 8. Document Your Module

Every module should have a `README.md`:
- What it does
- Installation
- Configuration
- Usage examples
- Available blade components / Livewire components

---

## ❌ Avoid These

### Don't Import Cross-Module Classes Directly

```php
// ❌ Bad — tight coupling between modules
use Modules\User\Models\User;
use Modules\Blog\Models\Post;

class Newsletter extends Model
{
    public function sendToAllBlogReaders()
    {
        User::whereHas('posts')->each(fn($u) => ...);
    }
}
```

Instead, use **events** or **contracts**:

```php
//  Good — loose coupling via events
event(new NewPostPublished($post));

// In Newsletter module's listener:
class SendNewsletterOnNewPost
{
    public function handle(NewPostPublished $event): void
    {
        // notify subscribers
    }
}
```

---

### Don't Hardcode Config Values

```php
// ❌ Bad
$perPage = 12;

//  Good
$perPage = config('blog.posts_per_page', 12);
```

---

### Don't Skip Validation

Every user-facing input must be validated:

```php
//  Always validate
$validated = $request->validate([
    'email' => 'required|email|max:255',
]);
```

---

## Code Quality Checklist

Before shipping a module:

- [ ] Tables are prefixed with module name
- [ ] All views use the module namespace
- [ ] Business logic is in Services, not controllers
- [ ] Tests cover happy paths and edge cases
- [ ] Config values are not hardcoded
- [ ] ServiceProvider uses `__DIR__` relative paths
- [ ] Module has a README
- [ ] Module is listed in `config/modules.php`
- [ ] Namespace added to `composer.json` autoload

---

## Next Steps

� **[Production Setup →](../deployment/production)**
