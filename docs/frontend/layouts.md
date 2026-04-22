# Layout System

**Estimated time:** 6 minutes  
**Difficulty:** Beginner

---

LaraCoreKit uses a modular layout system where each module can define its own layouts while sharing the core design tokens, navigation, and assets.

---

## Core Layout

The primary app layout lives in the Core module:

```
modules/Core/views/layouts/app.blade.php
```

```blade
<!DOCTYPE html>
<html
    lang="{{ str_replace('_', '-', app()->getLocale()) }}"
    dir="{{ in_array(app()->getLocale(), ['ar']) ? 'rtl' : 'ltr' }}"
    class="{{ session('theme', 'dark') }}"
>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? config('app.name') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="min-h-screen bg-gray-50 dark:bg-gray-950">

    {{-- Navigation --}}
    <x-navbar />

    {{-- Locale Switcher --}}
    @livewire('locale-switcher')

    {{-- Page Content --}}
    <main>
        {{ $slot }}
    </main>

    {{-- Footer --}}
    <x-footer />

    @livewireScripts
</body>
</html>
```

---

## Extending the Layout

### With Livewire full-page components

```php
class BlogList extends Component
{
    public function render()
    {
        return view('blog::livewire.blog-list')
            ->layout('core::layouts.app', [
                'title' => 'Blog - ' . config('app.name'),
            ]);
    }
}
```

### With Blade extends

```blade
@extends('core::layouts.app', ['title' => 'My Page'])

@section('content')
    <h1>My page content</h1>
@endsection
```

---

## Module-Specific Layouts

Modules can define their own layouts:

```
modules/Blog/views/layouts/blog.blade.php
```

```blade
@extends('core::layouts.app')

@section('content')
<div class="max-w-4xl mx-auto px-4 py-12">
    <x-breadcrumbs :items="$breadcrumbs ?? []" />

    <article class="prose dark:prose-invert max-w-none">
        {{ $slot }}
    </article>

    <x-blog-sidebar />
</div>
@endsection
```

---

## Guest Layout (Auth Pages)

```
modules/Auth/views/layouts/guest.blade.php
```

A centered, minimal layout for login/register pages with no navigation.

---

## Named Slots

```blade
{{-- In the layout file --}}
<header>
    {{ $header ?? '' }}
</header>

<main>{{ $slot }}</main>

<footer>
    {{ $footer ?? '' }}
</footer>
```

```blade
{{-- When using the layout --}}
<x-layouts.app>
    <x-slot name="header">
        <h1>Page Title</h1>
    </x-slot>

    <p>Page content here</p>
</x-layouts.app>
```

---

## Asset Pipeline

Assets are compiled with **Vite**:

```
resources/
├── css/
│   └── app.css       ← Main CSS (TailwindCSS v4)
└── js/
    └── app.js        ← Main JS (Alpine.js, Livewire)
```

Development:
```bash
npm run dev    # Hot-reload
```

Production:
```bash
npm run build  # Minified assets
```

---

## Next Steps

**[UI Showcase →](ui-showcase)**
