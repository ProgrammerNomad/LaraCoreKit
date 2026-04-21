# Livewire Basics

**Estimated time:** 10 minutes  
**Difficulty:** Beginner

---

LaraCoreKit is built on **Livewire v4** — Laravel's full-stack component framework that lets you build dynamic, reactive UIs without writing JavaScript.

---

## How Livewire Works

Livewire components consist of:
1. A **PHP class** (holds state + handles actions)
2. A **Blade view** (renders the UI)

When users interact, Livewire sends AJAX requests to the server, re-renders only the changed part, and updates the DOM with morphdom diffing.

---

## A Simple Component

### PHP Class

```php
<?php

namespace Modules\Blog\Http\Livewire;

use Livewire\Component;
use Modules\Blog\Models\Post;

class BlogSearch extends Component
{
    public string $query = '';

    public function render()
    {
        $posts = Post::published()
            ->when($this->query, fn ($q) =>
                $q->where('title', 'like', "%{$this->query}%")
            )
            ->latest()
            ->take(10)
            ->get();

        return view('blog::livewire.blog-search', compact('posts'));
    }
}
```

### Blade View

```blade
<div>
    <input
        type="search"
        wire:model.live="query"
        placeholder="Search posts..."
        class="search-input"
    >

    <div wire:loading>
        <span>Searching...</span>
    </div>

    <ul wire:loading.remove>
        @forelse($posts as $post)
            <li>
                <a href="{{ route('blog.show', $post->slug) }}">
                    {{ $post->title }}
                </a>
            </li>
        @empty
            <li>No results found.</li>
        @endforelse
    </ul>
</div>
```

---

## Essential Wire Directives

| Directive | What it does |
|-----------|-------------|
| `wire:click="method"` | Call a PHP method on click |
| `wire:model="property"` | Two-way bind an input to a property |
| `wire:model.live` | Bind and sync on every keystroke |
| `wire:model.blur` | Bind and sync on field blur |
| `wire:submit="method"` | Handle form submission |
| `wire:loading` | Show element during AJAX request |
| `wire:loading.remove` | Hide element during AJAX request |
| `wire:navigate` | SPA-style page navigation |
| `wire:confirm="message"` | Confirm dialog before action |

---

## Form with Validation

```php
class ContactForm extends Component
{
    public string $name    = '';
    public string $email   = '';
    public string $message = '';
    public bool   $sent    = false;

    protected $rules = [
        'name'    => 'required|min:2|max:100',
        'email'   => 'required|email',
        'message' => 'required|min:10|max:2000',
    ];

    public function send(): void
    {
        $this->validate();

        // Send email logic...
        Mail::to('admin@laracorekit.com')->send(new ContactMail($this->all()));

        $this->reset(['name', 'email', 'message']);
        $this->sent = true;
    }
}
```

```blade
<div>
    @if($sent)
        <div class="alert-success">Message sent! We'll get back to you soon.</div>
    @else
        <form wire:submit="send">
            <input wire:model="name" type="text" placeholder="Your name">
            @error('name') <span class="error">{{ $message }}</span> @enderror

            <input wire:model="email" type="email" placeholder="your@email.com">
            @error('email') <span class="error">{{ $message }}</span> @enderror

            <textarea wire:model="message" placeholder="Your message"></textarea>
            @error('message') <span class="error">{{ $message }}</span> @enderror

            <button type="submit" wire:loading.attr="disabled">
                <span wire:loading.remove>Send Message</span>
                <span wire:loading>Sending...</span>
            </button>
        </form>
    @endif
</div>
```

---

## Registering a Component

In the module's ServiceProvider:

```php
Livewire::component('blog.search', \Modules\Blog\Http\Livewire\BlogSearch::class);
```

Using in Blade:

```blade
@livewire('blog.search')

{{-- Or with props --}}
@livewire('blog.search', ['category' => 'tutorial'])

{{-- Or as Blade component tag --}}
<livewire:blog.search />
```

---

## Lifecycle Hooks

```php
class MyComponent extends Component
{
    public function mount(): void
    {
        // Runs once when component mounts
        $this->loadData();
    }

    public function updated($property): void
    {
        // Runs after any property updates
    }

    public function updatedQuery(): void
    {
        // Runs specifically when $query updates
        $this->resetPage();
    }
}
```

---

## Pagination

```php
use Livewire\WithPagination;

class BlogList extends Component
{
    use WithPagination;

    public function render()
    {
        return view('blog::list', [
            'posts' => Post::published()->paginate(12),
        ]);
    }
}
```

---

## Next Steps

**[UI Components →](components)**

