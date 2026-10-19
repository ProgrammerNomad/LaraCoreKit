<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="robots" content="{{ $robots ?? 'index, follow' }}">
    <title>{{ $title ?? config('app.name') }}</title>
    <link rel="stylesheet" href="{{ asset('vendor/laracorekit/laracorekit.css') }}?v={{ is_file(public_path('vendor/laracorekit/laracorekit.css')) ? filemtime(public_path('vendor/laracorekit/laracorekit.css')) : 'unpublished' }}">
    @if(isset($structuredData)){!! $structuredData !!}@endif
    @livewireStyles
</head>
<body class="bg-gray-50 text-gray-900 antialiased">
    <nav aria-label="Main navigation" class="border-b bg-white px-6 py-4 flex gap-6 items-center">
        <a href="/" class="font-semibold">{{ config('app.name') }}</a>
        @if(config('laracorekit.modules.Blog'))<a href="{{ route('blog.index') }}">{{ __('Blog') }}</a>@endif
        @if(config('laracorekit.modules.Auth'))
        @auth
            <a href="{{ route('dashboard') }}">{{ __('Dashboard') }}</a>
            <form method="POST" action="{{ route('logout') }}">@csrf<button type="submit">{{ __('Log out') }}</button></form>
        @else
            @if(Route::has('login'))<a href="{{ route('login') }}">{{ __('Log in') }}</a>@endif
        @endauth
        @endif
        <livewire:locale-switcher />
    </nav>
    <main id="main-content">{{ $slot }}</main>
    @livewireScripts
</body>
</html>
