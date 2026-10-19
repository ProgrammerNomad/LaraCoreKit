<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}" x-data="{ dark: localStorage.getItem('theme') === 'dark', menu: false }" :class="{ dark }" x-init="$watch('dark', value => localStorage.setItem('theme', value ? 'dark' : 'light'))">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="robots" content="{{ $robots ?? 'index, follow' }}">
    <title>{{ $title ?? config('app.name') }}</title>
    <script>try { document.documentElement.classList.toggle('dark', localStorage.getItem('theme') === 'dark'); } catch (e) {}</script>
    <link rel="stylesheet" href="{{ asset('vendor/laracorekit/laracorekit.css') }}?v={{ is_file(public_path('vendor/laracorekit/laracorekit.css')) ? filemtime(public_path('vendor/laracorekit/laracorekit.css')) : 'unpublished' }}">
    @if(isset($structuredData)){!! $structuredData !!}@endif
    @livewireStyles
</head>
<body class="min-h-screen flex flex-col bg-white text-gray-900 antialiased dark:bg-gray-950 dark:text-gray-100">
    <a href="#main-content" class="sr-only focus:not-sr-only">{{ __('Skip to content') }}</a>
    <header class="border-b border-gray-200 bg-white dark:border-gray-800 dark:bg-gray-950" @keydown.escape.window="menu = false" @resize.window="if (window.innerWidth >= 1024) menu = false">
        <div class="mx-auto flex min-h-16 max-w-7xl items-center justify-between gap-3 px-4 sm:px-8">
            <a href="/" aria-label="{{ config('app.name') }}" class="lck-brand shrink-0 dark:rounded dark:bg-white dark:px-1">@include('core::components.logo')</a>
            <nav aria-label="Main navigation" class="hidden items-center gap-6 text-sm lg:flex">
                <a href="/">{{ __('Home') }}</a>
                @if(Route::has('blog.index'))<a href="{{ route('blog.index') }}">{{ __('Blog') }}</a>@endif
                @if(Route::has('showcase.index'))<a href="{{ route('showcase.index') }}">{{ __('Components') }}</a>@endif
                @if(Route::has('dashboard'))@auth<a href="{{ route('dashboard') }}">{{ __('Dashboard') }}</a>@else<a href="{{ route('login') }}">{{ __('Log in') }}</a>@endauth @endif
            </nav>
            <div class="flex shrink-0 items-center gap-2">
                <button type="button" @click="dark = !dark" :aria-pressed="String(dark)" aria-label="Toggle dark theme" class="rounded-lg border border-gray-200 p-2 dark:border-gray-700"><span aria-hidden="true" x-text="dark ? '☀' : '☾'">☾</span></button>
                <livewire:locale-switcher />
                <button type="button" aria-label="Toggle navigation" aria-controls="starter-navigation" :aria-expanded="String(menu)" @click="menu = !menu" class="rounded-lg border border-gray-200 p-2 lg:hidden dark:border-gray-700">☰</button>
            </div>
        </div>
        <nav id="starter-navigation" aria-label="Mobile navigation" x-show="menu" x-cloak class="space-y-3 border-t border-gray-200 px-4 py-4 text-sm lg:hidden dark:border-gray-800">
            <a class="block" href="/">{{ __('Home') }}</a>
            @if(Route::has('blog.index'))<a class="block" href="{{ route('blog.index') }}">{{ __('Blog') }}</a>@endif
            @if(Route::has('showcase.index'))<a class="block" href="{{ route('showcase.index') }}">{{ __('Components') }}</a>@endif
            @if(Route::has('login'))<a class="block" href="{{ route(auth()->check() ? 'dashboard' : 'login') }}">{{ auth()->check() ? __('Dashboard') : __('Log in') }}</a>@endif
        </nav>
    </header>
    <main id="main-content" class="flex-1">{{ $slot }}</main>
    <footer class="border-t border-gray-200 dark:border-gray-800">
        <div class="mx-auto flex max-w-7xl flex-wrap items-center justify-between gap-4 px-5 py-8 text-sm text-gray-500 sm:px-8">
            <p>© {{ date('Y') }} {{ config('app.name') }}. {{ __('Built with LaraCoreKit.') }}</p>
            <div class="flex gap-5"><a href="/">{{ __('Home') }}</a>@if(Route::has('blog.index'))<a href="{{ route('blog.index') }}">{{ __('Blog') }}</a>@endif<a href="https://github.com/ProgrammerNomad/LaraCoreKit">GitHub</a></div>
        </div>
    </footer>
    @livewireScripts
</body>
</html>
