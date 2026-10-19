<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}"
      x-data="{ dark: localStorage.getItem('theme') === 'dark', menu: false }" :class="{ dark: dark }"
      x-init="$watch('dark', value => { localStorage.setItem('theme', value ? 'dark' : 'light'); localStorage.setItem('darkMode', String(value)); })">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @php
        $pageTitle = trim((string) ($title ?? '')) ?: 'LaraCoreKit - Laravel for your public site and admin';
        $pageDescription = trim((string) ($metaDescription ?? '')) ?: 'An MIT-licensed modular Laravel foundation with a public frontend, Filament administration, Livewire authentication, roles, multilingual content and media.';
        $pageImage = trim((string) ($ogImage ?? '')) ?: asset('images/screenshots/homepage.png');
    @endphp
    <title>{{ $pageTitle }}</title>
    <meta name="description" content="{{ $pageDescription }}">
    <meta name="robots" content="{{ $robots ?? 'index, follow' }}">
    <link rel="canonical" href="{{ url()->current() }}">
    <link rel="icon" type="image/svg+xml" href="{{ asset('images/logo.svg') }}">
    <meta property="og:type" content="{{ $ogType ?? 'website' }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="{{ $pageTitle }}">
    <meta property="og:description" content="{{ $pageDescription }}">
    <meta property="og:image" content="{{ $pageImage }}">
    <meta property="og:site_name" content="LaraCoreKit">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $pageTitle }}">
    <meta name="twitter:description" content="{{ $pageDescription }}">
    <meta name="twitter:image" content="{{ $pageImage }}">
    @if(isset($structuredData))
        {!! $structuredData !!}
    @else
    <script type="application/ld+json">{!! json_encode([
        '@context' => 'https://schema.org', '@type' => 'SoftwareSourceCode',
        'name' => 'LaraCoreKit', 'description' => $pageDescription,
        'codeRepository' => 'https://github.com/ProgrammerNomad/LaraCoreKit',
        'license' => 'https://opensource.org/license/mit', 'programmingLanguage' => 'PHP',
        'runtimePlatform' => 'Laravel 13', 'url' => url('/'),
    ], JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_UNESCAPED_SLASHES) !!}</script>
    @endif
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="bg-white text-slate-900 antialiased dark:bg-slate-950 dark:text-slate-100">
    <a href="#main-content" class="sr-only focus:not-sr-only focus:fixed focus:top-2 focus:start-2 focus:z-[100] focus:bg-white focus:p-3 focus:text-indigo-700">{{ __('Skip to content') }}</a>
    <header class="sticky top-0 z-50 border-b border-slate-200 bg-white/95 backdrop-blur dark:border-slate-800 dark:bg-slate-950/95">
        <div class="mx-auto flex h-16 max-w-7xl items-center justify-between gap-2 px-4 sm:px-8">
            <a href="/" class="flex shrink-0 items-center gap-2 font-bold tracking-tight" aria-label="LaraCoreKit home">
                <img src="{{ asset('images/logo.svg') }}" alt="LaraCoreKit" width="563" height="74" class="h-auto w-28 sm:w-44 dark:rounded dark:bg-white dark:p-1">
            </a>
            <nav aria-label="Main navigation" class="hidden items-center gap-7 text-sm font-medium lg:flex">
                @foreach(['/docs/installation' => 'Get started', '/docs/core/architecture' => 'Architecture', '/ui-showcase' => 'Components', '/blog' => 'Blog'] as $href => $label)
                    <a href="{{ $href }}" class="transition hover:text-indigo-600 dark:hover:text-indigo-400">{{ __($label) }}</a>
                @endforeach
            </nav>
            <div class="flex shrink-0 items-center gap-2 sm:gap-3">
                <button type="button" @click="dark = !dark" :aria-pressed="String(dark)" aria-label="Toggle dark theme" class="grid h-10 w-10 shrink-0 place-items-center rounded-lg border border-slate-200 dark:border-slate-700">
                    <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" aria-hidden="true"><path d="M20.5 13A8.5 8.5 0 0 1 11 3.5 8.5 8.5 0 1 0 20.5 13Z"/></svg>
                </button>
                <div class="hidden sm:block"><livewire:locale-switcher /></div>
                <a href="/admin" class="inline-flex h-10 shrink-0 items-center whitespace-nowrap rounded-lg bg-slate-900 px-3 sm:px-4 text-sm font-semibold text-white dark:bg-white dark:text-slate-900">{{ __('Try admin') }}</a>
                <button type="button" @click="menu = !menu" :aria-expanded="String(menu)" aria-controls="mobile-nav" aria-label="Toggle navigation" class="grid h-10 w-10 shrink-0 place-items-center rounded-lg border border-slate-200 lg:hidden dark:border-slate-700"><svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path d="M4 6h16M4 12h16M4 18h16"/></svg></button>
            </div>
        </div>
        <nav id="mobile-nav" x-show="menu" style="display: none;" x-cloak @keydown.escape.window="menu = false" @resize.window="if (window.innerWidth >= 1024) menu = false" aria-label="Mobile navigation" class="border-t border-slate-200 px-5 py-4 lg:hidden dark:border-slate-800">
            <div class="grid gap-4">
                <a href="/docs/installation">{{ __('Get started') }}</a><a href="/docs/core/architecture">{{ __('Architecture') }}</a>
                <a href="/ui-showcase">{{ __('Components') }}</a><a href="/blog">{{ __('Blog') }}</a>
                <a href="https://github.com/ProgrammerNomad/LaraCoreKit">GitHub</a><livewire:locale-switcher />
            </div>
        </nav>
    </header>
    @if(config('demo.enabled') && view()->exists('demo::components.login-banner'))
        <div class="mx-auto max-w-7xl px-5 pt-5 sm:px-8">@include('demo::components.login-banner', ['type' => 'user'])</div>
    @endif
    <main id="main-content">{{ $slot }}</main>
    <footer class="border-t border-slate-200 bg-slate-50 dark:border-slate-800 dark:bg-slate-900/50">
        <div class="mx-auto grid max-w-7xl gap-10 px-5 py-14 sm:px-8 md:grid-cols-3">
            <div><a href="/" aria-label="LaraCoreKit home"><img src="{{ asset('images/logo.svg') }}" alt="LaraCoreKit" width="563" height="74" class="h-auto w-44 dark:rounded dark:bg-white dark:p-1"></a><p class="mt-3 max-w-xs text-sm leading-6 text-slate-600 dark:text-slate-400">{{ __('A modular foundation for your public website and admin workspace. Built in the open. Licensed under MIT.') }}</p></div>
            <div><h2 class="text-sm font-semibold">{{ __('Build with it') }}</h2><ul class="mt-4 space-y-3 text-sm text-slate-600 dark:text-slate-400"><li><a href="/docs/installation">{{ __('Installation') }}</a></li><li><a href="/docs/core/architecture">{{ __('Package architecture') }}</a></li><li><a href="/docs/deployment/production">{{ __('Deploy safely') }}</a></li><li><a href="/changelog">{{ __('Changelog') }}</a></li></ul></div>
            <div><h2 class="text-sm font-semibold">{{ __('Build with us') }}</h2><ul class="mt-4 space-y-3 text-sm text-slate-600 dark:text-slate-400"><li><a href="https://github.com/ProgrammerNomad/LaraCoreKit">GitHub repository</a></li><li><a href="https://github.com/ProgrammerNomad/LaraCoreKit/issues">{{ __('Issues and feature requests') }}</a></li><li><a href="https://github.com/ProgrammerNomad/LaraCoreKit/blob/main/CONTRIBUTING.md">{{ __('Contributing') }}</a></li><li><a href="https://github.com/ProgrammerNomad/LaraCoreKit/security/policy">{{ __('Security policy') }}</a></li></ul></div>
        </div>
        <div class="mx-auto flex max-w-7xl flex-wrap justify-between gap-3 border-t border-slate-200 px-5 py-6 text-xs text-slate-500 sm:px-8 dark:border-slate-800"><span>© {{ date('Y') }} LaraCoreKit · MIT license</span><span>Laravel 13 · Filament 5 · Livewire 4</span></div>
    </footer>
    @livewireScripts
</body>
</html>
