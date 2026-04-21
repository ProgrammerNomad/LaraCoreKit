# Testing

**Estimated time:** 12 minutes  
**Difficulty:** Intermediate

---

LaraCoreKit is configured with **PHPUnit** and supports **Pest PHP** for an elegant, expressive testing experience.

---

## Running Tests

```bash
# Run all tests
php artisan test

# Run with verbose output
php artisan test --verbose

# Run with coverage
php artisan test --coverage

# Run a specific test file
php artisan test tests/Feature/Blog/PostTest.php

# Run tests matching a filter
php artisan test --filter=BlogTest

# Run in parallel (much faster)
php artisan test --parallel
```

---

## Test Structure

```
tests/
├── Feature/                   ← HTTP/integration tests
│   ├── Auth/
│   │   ├── LoginTest.php
│   │   └── RegisterTest.php
│   ├── Blog/
│   │   ├── PostTest.php
│   │   └── BlogListTest.php
│   └── Api/
│       └── ApiTokenTest.php
├── Unit/                      ← Unit tests (no HTTP)
│   ├── Blog/
│   │   └── PostModelTest.php
│   └── Newsletter/
│       └── SubscriberTest.php
└── TestCase.php               ← Base test class
```

---

## Feature Test Example

```php
<?php

namespace Tests\Feature\Blog;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Blog\Models\Post;

class PostTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_list_published_posts(): void
    {
        Post::factory()->count(5)->published()->create();
        Post::factory()->count(3)->draft()->create();

        $response = $this->get(route('blog.index'));

        $response
            ->assertOk()
            ->assertViewHas('posts')
            ->assertViewHas('posts', fn ($posts) => $posts->count() === 5);
    }

    /** @test */
    public function it_shows_a_published_post(): void
    {
        $post = Post::factory()->published()->create([
            'title' => 'Test Post Title',
        ]);

        $this->get(route('blog.show', $post->slug))
             ->assertOk()
             ->assertSee('Test Post Title');
    }

    /** @test */
    public function it_returns_404_for_draft_post(): void
    {
        $post = Post::factory()->draft()->create();

        $this->get(route('blog.show', $post->slug))
             ->assertNotFound();
    }
}
```

---

## Unit Test Example

```php
<?php

namespace Tests\Unit\Blog;

use Tests\TestCase;
use Modules\Blog\Models\Post;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PostModelTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_generates_slug_from_title(): void
    {
        $post = Post::factory()->create(['title' => 'Hello World']);

        $this->assertEquals('hello-world', $post->slug);
    }

    /** @test */
    public function published_scope_filters_correctly(): void
    {
        Post::factory()->published()->create();
        Post::factory()->draft()->create();

        $this->assertEquals(1, Post::published()->count());
    }
}
```

---

## Livewire Component Tests

```php
<?php

use Livewire\Livewire;
use Modules\Newsletter\Http\Livewire\Subscribe;
use Modules\Newsletter\Models\Subscriber;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

it('subscribes successfully with valid email', function () {
    Livewire::test(Subscribe::class)
        ->set('email', 'test@laracorekit.com')
        ->call('subscribe')
        ->assertHasNoErrors()
        ->assertSet('success', true);

    $this->assertDatabaseHas('newsletter_subscribers', [
        'email' => 'test@laracorekit.com',
    ]);
});

it('fails with invalid email', function () {
    Livewire::test(Subscribe::class)
        ->set('email', 'not-an-email')
        ->call('subscribe')
        ->assertHasErrors(['email']);
});
```

---

## Authentication Helpers

```php
// Authenticate as a user in tests
$user = User::factory()->create();
$this->actingAs($user);

// Authenticate with a specific role
$admin = User::factory()->create();
$admin->assignRole('admin');
$this->actingAs($admin);

// Test unauthenticated access
$this->get(route('dashboard'))->assertRedirect('/login');
```

---

## Model Factories

Create factories for each module:

```php
// modules/Blog/database/factories/PostFactory.php
namespace Modules\Blog\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Blog\Models\Post;

class PostFactory extends Factory
{
    protected $model = Post::class;

    public function definition(): array
    {
        return [
            'title'        => $this->faker->sentence(),
            'slug'         => $this->faker->slug(),
            'content'      => $this->faker->paragraphs(5, asText: true),
            'excerpt'      => $this->faker->paragraph(),
            'status'       => 'draft',
            'locale'       => 'en',
            'published_at' => null,
        ];
    }

    public function published(): static
    {
        return $this->state([
            'status'       => 'published',
            'published_at' => now()->subDays(rand(1, 30)),
        ]);
    }

    public function draft(): static
    {
        return $this->state(['status' => 'draft']);
    }
}
```

---

## Next Steps

**[Caching →](caching)**

