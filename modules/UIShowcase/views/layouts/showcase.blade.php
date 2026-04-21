<!DOCTYPE html>
<html lang="en" x-data="{ darkMode: localStorage.getItem('darkMode') === 'true' }" x-init="$watch('darkMode', val => localStorage.setItem('darkMode', val))" :class="{ 'dark': darkMode }">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'UI Showcase') - LaraCoreKit</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
    <style>
        [x-cloak] { display: none !important; }
        html { scroll-behavior: smooth; }
    </style>
</head>
<body class="bg-gray-50 dark:bg-gray-900">
    <div class="flex min-h-screen" x-data="{ 
        openSections: JSON.parse(localStorage.getItem('openSections') || '{}'),
        toggleSection(section) {
            this.openSections[section] = !this.openSections[section];
            localStorage.setItem('openSections', JSON.stringify(this.openSections));
        },
        init() {
            // Auto-expand section based on current route
            const route = '{{ request()->route()->getName() }}';
            if (route.includes('typography')) this.openSections.typography = true;
            if (route.includes('buttons')) this.openSections.buttons = true;
            if (route.includes('forms')) this.openSections.forms = true;
            if (route.includes('navigation')) this.openSections.navigation = true;
            if (route.includes('layouts')) this.openSections.layouts = true;
            if (route.includes('data-display')) this.openSections['data-display'] = true;
            if (route.includes('feedback')) this.openSections.feedback = true;
            if (route.includes('charts')) this.openSections.charts = true;
            if (route.includes('media')) this.openSections.media = true;
            if (route.includes('auth')) this.openSections.auth = true;
            if (route.includes('ecommerce') || route.includes('landing')) {
                this.openSections['ecommerce'] = true;
                this.openSections['landing'] = true;
            }
            if (route.includes('advanced')) this.openSections['advanced'] = true;
            if (route.includes('utilities')) this.openSections['utilities'] = true;
        }
    }">
        <!-- Sidebar -->
        <aside class="w-64 bg-white dark:bg-gray-800 border-r border-gray-200 dark:border-gray-700 fixed h-full overflow-y-auto">
            <div class="p-6">
                <a href="/" class="flex items-center space-x-2 mb-8">
                    <img src="{{ asset('images/logo.svg') }}" alt="LaraCoreKit" class="h-8">
                </a>
                
                @include('showcase::components.sidebar')
            </div>
        </aside>

        <!-- Main Content -->
        <div class="ml-64 flex-1 min-w-0 flex flex-col">
            <!-- Top Bar -->
            <header class="bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700 sticky top-0 z-10">
                <div class="px-6 py-4 flex justify-between items-center">
                    <div>
                        <h1 class="text-2xl font-bold text-gray-900 dark:text-white">@yield('page-title', 'UI Showcase')</h1>
                        <p class="text-sm text-gray-500 dark:text-gray-400 mt-1">@yield('page-description', 'Component library and design system')</p>
                    </div>
                    <div class="flex items-center space-x-4">
                        <!-- Theme Toggle -->
                        <button @click="darkMode = !darkMode" class="p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 transition">
                            <svg x-show="!darkMode" class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path>
                            </svg>
                            <svg x-show="darkMode" class="w-5 h-5 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path>
                            </svg>
                        </button>
                        <a href="/" class="text-sm text-gray-700 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white">Back to Site</a>
                    </div>
                </div>
            </header>

            <!-- Page Content -->
            <main class="p-6 flex-1 w-full overflow-x-hidden">
                @yield('content')
            </main>
        </div>
    </div>
    @livewireScripts
</body>
</html>
