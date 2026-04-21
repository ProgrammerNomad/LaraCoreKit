<!DOCTYPE html>
<html
    lang="{{ str_replace('_', '-', app()->getLocale()) }}"
    dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}"
    x-data="{
        theme: 'light',
        initTheme() {
            const savedTheme = localStorage.getItem('theme');
            const legacyDarkMode = localStorage.getItem('darkMode');

            let initialTheme = savedTheme;

            if (! initialTheme) {
                initialTheme = legacyDarkMode === 'true' ? 'dark' : 'light';
            }

            if (initialTheme === 'system') {
                initialTheme = window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';
            }

            this.applyTheme(initialTheme, false);
            localStorage.setItem('theme', this.theme);
            localStorage.setItem('darkMode', this.theme === 'dark' ? 'true' : 'false');

            window.addEventListener('theme-changed', (event) => {
                let incomingTheme = event.detail;

                if (incomingTheme === 'system') {
                    incomingTheme = window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';
                }

                this.applyTheme(incomingTheme, false);
            });
        },
        applyTheme(value, shouldPersist = true) {
            const normalized = value === 'dark' ? 'dark' : 'light';

            this.theme = normalized;
            document.documentElement.classList.toggle('dark', normalized === 'dark');

            if (! shouldPersist) {
                return;
            }

            localStorage.setItem('theme', normalized);
            localStorage.setItem('darkMode', normalized === 'dark' ? 'true' : 'false');
            window.dispatchEvent(new CustomEvent('theme-changed', { detail: normalized }));
        },
        toggleTheme() {
            this.applyTheme(this.theme === 'dark' ? 'light' : 'dark');
        },
    }"
    x-init="initTheme()"
>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ $title ?? 'LaraCoreKit - Modular Laravel Starter Kit with Admin Panel, UI Components & Multilingual Support' }}</title>
        
        <!-- SEO Meta Tags -->
        <meta name="description" content="Build production-ready Laravel apps in minutes with LaraCoreKit. Includes Filament admin, 175+ UI components, multilingual support, and modular architecture.">
        <meta name="keywords" content="Laravel starter kit, Laravel admin panel, Filament, Livewire, Laravel boilerplate, Laravel template, multilingual Laravel, Laravel UI components, Laravel modular architecture">
        <meta name="author" content="LaraCoreKit">
        <meta name="robots" content="index, follow">

        <!-- Open Graph / Facebook -->
        <meta property="og:type" content="website">
        <meta property="og:url" content="{{ url()->current() }}">
        <meta property="og:title" content="LaraCoreKit - Modular Laravel Starter Kit">
        <meta property="og:description" content="Build production-ready Laravel apps in minutes. Includes Filament admin, 175+ UI components, multilingual support (EN/HI/AR), and modular architecture.">
        <meta property="og:image" content="{{ asset('images/og-preview.png') }}">
        <meta property="og:site_name" content="LaraCoreKit">

        <!-- Twitter Card -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:url" content="{{ url()->current() }}">
        <meta name="twitter:title" content="LaraCoreKit - Modular Laravel Starter Kit">
        <meta name="twitter:description" content="Build production-ready Laravel apps in minutes with Filament admin, 175+ UI components & multilingual support.">
        <meta name="twitter:image" content="{{ asset('images/og-preview.png') }}">

        <!-- Canonical URL -->
        <link rel="canonical" href="{{ url()->current() }}">

        <!-- JSON-LD Structured Data -->
        <script type="application/ld+json">
        {
            "@@context": "https://schema.org",
            "@@type": "SoftwareApplication",
            "name": "LaraCoreKit",
            "applicationCategory": "DeveloperApplication",
            "operatingSystem": "Web",
            "description": "Modular Laravel starter kit with Filament admin panel, 175+ UI components, multilingual support, and role-based permissions.",
            "offers": {
                "@@type": "Offer",
                "price": "0",
                "priceCurrency": "USD"
            },
            "author": {
                "@@type": "Person",
                "name": "Shiv Singh"
            },
            "url": "{{ url('/') }}",
            "sameAs": [
                "https://github.com/ProgrammerNomad/LaraCoreKit"
            ],
            "softwareVersion": "1.0.0",
            "programmingLanguage": "PHP",
            "runtimePlatform": "Laravel 13"
        }
        </script>

        <!-- Fonts - Self Hosted -->
        <!-- Fonts are included in Tailwind config via Inter and Poppins -->

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireStyles
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-50 dark:bg-gray-900">
            <!-- Navigation -->
            <nav class="bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700 sticky top-0 z-50">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="flex justify-between h-16">
                        <div class="flex items-center">
                            <!-- Logo -->
                            <a href="/" class="flex items-center">
                                <img src="{{ asset('images/logo.svg') }}" alt="LaraCoreKit" class="h-6">
                            </a>
                            
                            <div class="hidden sm:ml-10 sm:flex sm:space-x-8">
                                <a href="/" class="inline-flex items-center px-1 pt-1 text-sm font-medium text-gray-900 dark:text-gray-100 hover:text-blue-600 dark:hover:text-blue-400 transition">
                                    {{ __('Home') }}
                                </a>
                                <a href="/docs" class="inline-flex items-center px-1 pt-1 text-sm font-medium text-gray-500 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 transition">
                                    {{ __('Docs') }}
                                </a>
                                <a href="/ui-showcase" wire:navigate class="inline-flex items-center px-1 pt-1 text-sm font-medium text-gray-500 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 transition">
                                    {{ __('UI') }}
                                </a>
                                <a href="/blog" wire:navigate class="inline-flex items-center px-1 pt-1 text-sm font-medium text-gray-500 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 transition">
                                    {{ __('Blog') }}
                                </a>
                                <a href="https://github.com/ProgrammerNomad/LaraCoreKit" target="_blank" rel="noopener" class="inline-flex items-center gap-1 px-1 pt-1 text-sm font-medium text-gray-500 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 transition">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"></path></svg>
                                    GitHub
                                </a>
                            </div>
                        </div>

                        <div class="flex items-center space-x-4">
                            <!-- Theme Switcher -->
                            <button
                                @click="toggleTheme()"
                                type="button"
                                class="p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 transition"
                            >
                                <svg x-cloak x-show="theme !== 'dark'" class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path>
                                </svg>
                                <svg x-cloak x-show="theme === 'dark'" class="w-5 h-5 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path>
                                </svg>
                            </button>

                            <!-- Locale Switcher -->
                            @livewire('locale-switcher')

                            <!-- User Menu -->
                            @auth
                                <div x-data="{ open: false }" class="relative">
                                    <button @click="open = !open" class="flex items-center space-x-2 p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 transition">
                                        <div class="w-8 h-8 bg-blue-600 rounded-full flex items-center justify-center">
                                            <span class="text-white text-sm font-medium">{{ substr(auth()->user()->name, 0, 1) }}</span>
                                        </div>
                                        <svg class="w-4 h-4 text-gray-600 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                        </svg>
                                    </button>
                                    <div x-show="open" @click.away="open = false" class="absolute right-0 mt-2 w-48 bg-white dark:bg-gray-800 rounded-lg shadow-lg border border-gray-200 dark:border-gray-700 py-1">
                                        <div class="px-4 py-2 border-b border-gray-200 dark:border-gray-700">
                                            <p class="text-sm font-medium text-gray-900 dark:text-white">{{ auth()->user()->name }}</p>
                                            <p class="text-xs text-gray-500 dark:text-gray-400">{{ auth()->user()->email }}</p>
                                        </div>
                                        @if(auth()->user()->hasRole(['Admin', 'Editor']))
                                            <a href="/admin" class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700">
                                                {{ __('Admin Dashboard') }}
                                            </a>
                                        @else
                                            <a href="/dashboard" class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700">
                                                {{ __('Dashboard') }}
                                            </a>
                                        @endif
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <button type="submit" class="w-full text-left px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700">
                                                {{ __('Logout') }}
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            @endauth
                            @guest
                                <a href="{{ route('login') }}" class="text-sm font-medium text-gray-700 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white transition">
                                    {{ __('Login') }}
                                </a>
                                <a href="{{ route('register') }}" class="px-4 py-2 bg-blue-600 text-white text-sm font-medium rounded-lg hover:bg-blue-700 transition">
                                    {{ __('Register') }}
                                </a>
                            @endguest
                        </div>
                </div>
            </nav>

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>

            <!-- Footer -->
            <footer class="bg-white dark:bg-gray-800 border-t border-gray-200 dark:border-gray-700 mt-auto">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-8">
                        <!-- Brand -->
                        <div>
                            <div class="flex items-center mb-3">
                                <img src="{{ asset('images/logo.svg') }}" alt="LaraCoreKit" class="h-6 mr-2">
                            </div>
                            <p class="text-sm text-gray-500 dark:text-gray-400 mb-3">
                                {{ __('A modular, production-ready Laravel 13 starter kit.') }}
                            </p>
                            <div class="flex gap-2 flex-wrap">
                                <span class="text-xs px-2 py-1 bg-green-100 dark:bg-green-900/40 text-green-700 dark:text-green-400 rounded-full font-medium">MIT {{ __('License') }}</span>
                                <span class="text-xs px-2 py-1 bg-blue-100 dark:bg-blue-900/40 text-blue-700 dark:text-blue-400 rounded-full font-medium">{{ __('Free Forever') }}</span>
                                <span class="text-xs px-2 py-1 bg-purple-100 dark:bg-purple-900/40 text-purple-700 dark:text-purple-400 rounded-full font-medium">{{ __('Open Source') }}</span>
                            </div>
                        </div>
                        <!-- Links -->
                        <div>
                            <h4 class="text-sm font-semibold text-gray-800 dark:text-gray-200 mb-3">{{ __('Explore') }}</h4>
                            <ul class="space-y-2 text-sm">
                                <li><a href="/" class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-400 transition">{{ __('Home') }}</a></li>
                                <li><a href="/docs" class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-400 transition">{{ __('Documentation') }}</a></li>
                                <li><a href="/ui-showcase" wire:navigate class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-400 transition">{{ __('UI Showcase') }}</a></li>
                                <li><a href="/blog" wire:navigate class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-400 transition">{{ __('Blog') }}</a></li>
                                <li><a href="/admin" class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-400 transition">{{ __('Admin Panel') }}</a></li>
                            </ul>
                        </div>
                        <!-- GitHub / Contribute -->
                        <div>
                            <h4 class="text-sm font-semibold text-gray-800 dark:text-gray-200 mb-3">{{ __('Community') }}</h4>
                            <ul class="space-y-2 text-sm">
                                <li>
                                    <a href="https://github.com/ProgrammerNomad/LaraCoreKit" target="_blank" rel="noopener" class="inline-flex items-center gap-1 text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-400 transition">
                                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"></path></svg>
                                        {{ __('View on GitHub') }}
                                    </a>
                                </li>
                                <li>
                                    <a href="https://github.com/ProgrammerNomad/LaraCoreKit/issues" target="_blank" rel="noopener" class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-400 transition">{{ __('Report an Issue') }}</a>
                                </li>
                                <li>
                                    <a href="https://github.com/ProgrammerNomad/LaraCoreKit/blob/main/CONTRIBUTING.md" target="_blank" rel="noopener" class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-400 transition">{{ __('Contributing Guide') }}</a>
                                </li>
                                <li>
                                    <a href="https://github.com/ProgrammerNomad/LaraCoreKit/blob/main/LICENSE" target="_blank" rel="noopener" class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-400 transition">MIT {{ __('License') }}</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="border-t border-gray-200 dark:border-gray-700 pt-6 text-center text-gray-500 dark:text-gray-400 text-sm">
                        <p>&copy; {{ date('Y') }} {{ config('app.name', 'LaraCoreKit') }}. {{ __('All rights reserved.') }} | {{ __('Built with') }} Laravel 13 | <a href="https://github.com/ProgrammerNomad/LaraCoreKit" target="_blank" rel="noopener" class="hover:text-blue-600 dark:hover:text-blue-400 transition">{{ __('Open Source') }}</a></p>
                    </div>
                </div>
            </footer>
        </div>

        @livewireScripts
    </body>
</html>


