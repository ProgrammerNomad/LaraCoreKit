@extends('showcase::layouts.showcase')

@section('page-title', 'UI Showcase Overview')
@section('page-description', 'Complete component library for LaraCoreKit')

@section('content')
<div class="max-w-7xl mx-auto">
    <!-- Hero Section -->
    <div class="bg-gradient-to-r from-blue-600 to-purple-600 rounded-2xl p-12 mb-8 text-white">
        <h2 class="text-4xl font-bold mb-4">LaraCoreKit UI Components</h2>
        <p class="text-xl text-blue-100 mb-6">A comprehensive collection of beautiful, responsive UI components built with Tailwind CSS and Alpine.js</p>
        <div class="flex space-x-4">
            <a href="{{ route('showcase.typography') }}" class="px-6 py-3 bg-white text-blue-600 rounded-lg font-medium hover:bg-blue-50 transition">
                Browse Components
            </a>
            <a href="https://github.com/yourusername/laracorekit" target="_blank" class="px-6 py-3 bg-blue-700 text-white rounded-lg font-medium hover:bg-blue-800 transition">
                View on GitHub
            </a>
        </div>
    </div>

    <!-- Stats -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
        <div class="bg-white dark:bg-gray-800 rounded-lg p-6 border border-gray-200 dark:border-gray-700">
            <div class="text-3xl font-bold text-blue-600 dark:text-blue-400 mb-2">200+</div>
            <div class="text-sm text-gray-600 dark:text-gray-400">UI Components</div>
        </div>
        <div class="bg-white dark:bg-gray-800 rounded-lg p-6 border border-gray-200 dark:border-gray-700">
            <div class="text-3xl font-bold text-purple-600 dark:text-purple-400 mb-2">16</div>
            <div class="text-sm text-gray-600 dark:text-gray-400">Categories</div>
        </div>
        <div class="bg-white dark:bg-gray-800 rounded-lg p-6 border border-gray-200 dark:border-gray-700">
            <div class="text-3xl font-bold text-green-600 dark:text-green-400 mb-2">100%</div>
            <div class="text-sm text-gray-600 dark:text-gray-400">Responsive</div>
        </div>
        <div class="bg-white dark:bg-gray-800 rounded-lg p-6 border border-gray-200 dark:border-gray-700">
            <div class="text-3xl font-bold text-orange-600 dark:text-orange-400 mb-2">Dark</div>
            <div class="text-sm text-gray-600 dark:text-gray-400">Mode Support</div>
        </div>
    </div>

    <!-- Component Categories -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <a href="{{ route('showcase.typography') }}" class="group">
            <div class="bg-white dark:bg-gray-800 rounded-lg p-6 border border-gray-200 dark:border-gray-700 hover:border-blue-500 dark:hover:border-blue-500 transition">
                <div class="w-12 h-12 bg-blue-100 dark:bg-blue-900/30 rounded-lg flex items-center justify-center mb-4 group-hover:bg-blue-200 dark:group-hover:bg-blue-900/50 transition">
                    <svg class="w-6 h-6 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Typography</h3>
                <p class="text-sm text-gray-600 dark:text-gray-400">Headings, paragraphs, lists, and text formatting</p>
                <div class="mt-4 text-sm text-blue-600 dark:text-blue-400 font-medium">8 components →</div>
            </div>
        </a>

        <a href="{{ route('showcase.buttons') }}" class="group">
            <div class="bg-white dark:bg-gray-800 rounded-lg p-6 border border-gray-200 dark:border-gray-700 hover:border-blue-500 dark:hover:border-blue-500 transition">
                <div class="w-12 h-12 bg-purple-100 dark:bg-purple-900/30 rounded-lg flex items-center justify-center mb-4 group-hover:bg-purple-200 dark:group-hover:bg-purple-900/50 transition">
                    <svg class="w-6 h-6 text-purple-600 dark:text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Buttons</h3>
                <p class="text-sm text-gray-600 dark:text-gray-400">Primary, secondary, outline, and more button styles</p>
                <div class="mt-4 text-sm text-blue-600 dark:text-blue-400 font-medium">15 variants →</div>
            </div>
        </a>

        <a href="{{ route('showcase.forms') }}" class="group">
            <div class="bg-white dark:bg-gray-800 rounded-lg p-6 border border-gray-200 dark:border-gray-700 hover:border-blue-500 dark:hover:border-blue-500 transition">
                <div class="w-12 h-12 bg-green-100 dark:bg-green-900/30 rounded-lg flex items-center justify-center mb-4 group-hover:bg-green-200 dark:group-hover:bg-green-900/50 transition">
                    <svg class="w-6 h-6 text-green-600 dark:text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Form Elements</h3>
                <p class="text-sm text-gray-600 dark:text-gray-400">Inputs, selects, checkboxes, and form controls</p>
                <div class="mt-4 text-sm text-blue-600 dark:text-blue-400 font-medium">30+ elements →</div>
            </div>
        </a>

        <a href="{{ route('showcase.navigation') }}" class="group">
            <div class="bg-white dark:bg-gray-800 rounded-lg p-6 border border-gray-200 dark:border-gray-700 hover:border-blue-500 dark:hover:border-blue-500 transition">
                <div class="w-12 h-12 bg-orange-100 dark:bg-orange-900/30 rounded-lg flex items-center justify-center mb-4 group-hover:bg-orange-200 dark:group-hover:bg-orange-900/50 transition">
                    <svg class="w-6 h-6 text-orange-600 dark:text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Navigation</h3>
                <p class="text-sm text-gray-600 dark:text-gray-400">Navbars, breadcrumbs, tabs, and pagination</p>
                <div class="mt-4 text-sm text-blue-600 dark:text-blue-400 font-medium">12 components →</div>
            </div>
        </a>

        <a href="{{ route('showcase.layouts') }}" class="group">
            <div class="bg-white dark:bg-gray-800 rounded-lg p-6 border border-gray-200 dark:border-gray-700 hover:border-blue-500 dark:hover:border-blue-500 transition">
                <div class="w-12 h-12 bg-pink-100 dark:bg-pink-900/30 rounded-lg flex items-center justify-center mb-4 group-hover:bg-pink-200 dark:group-hover:bg-pink-900/50 transition">
                    <svg class="w-6 h-6 text-pink-600 dark:text-pink-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h4a1 1 0 011 1v7a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM14 5a1 1 0 011-1h4a1 1 0 011 1v7a1 1 0 01-1 1h-4a1 1 0 01-1-1V5zM4 16a1 1 0 011-1h4a1 1 0 011 1v3a1 1 0 01-1 1H5a1 1 0 01-1-1v-3zM14 16a1 1 0 011-1h4a1 1 0 011 1v3a1 1 0 01-1 1h-4a1 1 0 01-1-1v-3z"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Layouts</h3>
                <p class="text-sm text-gray-600 dark:text-gray-400">Grid systems, containers, and page layouts</p>
                <div class="mt-4 text-sm text-blue-600 dark:text-blue-400 font-medium">10 layouts →</div>
            </div>
        </a>

        <a href="{{ route('showcase.data-display') }}" class="group">
            <div class="bg-white dark:bg-gray-800 rounded-lg p-6 border border-gray-200 dark:border-gray-700 hover:border-blue-500 dark:hover:border-blue-500 transition">
                <div class="w-12 h-12 bg-indigo-100 dark:bg-indigo-900/30 rounded-lg flex items-center justify-center mb-4 group-hover:bg-indigo-200 dark:group-hover:bg-indigo-900/50 transition">
                    <svg class="w-6 h-6 text-indigo-600 dark:text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M3 14h18m-9-4v8m-7 0h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Data Display</h3>
                <p class="text-sm text-gray-600 dark:text-gray-400">Tables, cards, badges, and data visualization</p>
                <div class="mt-4 text-sm text-blue-600 dark:text-blue-400 font-medium">25+ components →</div>
            </div>
        </a>

        <a href="{{ route('showcase.feedback') }}" class="group">
            <div class="bg-white dark:bg-gray-800 rounded-lg p-6 border border-gray-200 dark:border-gray-700 hover:border-blue-500 dark:hover:border-blue-500 transition">
                <div class="w-12 h-12 bg-red-100 dark:bg-red-900/30 rounded-lg flex items-center justify-center mb-4 group-hover:bg-red-200 dark:group-hover:bg-red-900/50 transition">
                    <svg class="w-6 h-6 text-red-600 dark:text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Feedback</h3>
                <p class="text-sm text-gray-600 dark:text-gray-400">Alerts, modals, toasts, and notifications</p>
                <div class="mt-4 text-sm text-blue-600 dark:text-blue-400 font-medium">18 components →</div>
            </div>
        </a>
    </div>

    <!-- Features -->
    <div class="mt-12 bg-white dark:bg-gray-800 rounded-lg p-8 border border-gray-200 dark:border-gray-700">
        <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">Features</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="flex items-start space-x-4">
                <div class="w-10 h-10 bg-blue-100 dark:bg-blue-900/30 rounded-lg flex items-center justify-center flex-shrink-0">
                    <svg class="w-5 h-5 text-blue-600 dark:text-blue-400" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                    </svg>
                </div>
                <div>
                    <h4 class="font-semibold text-gray-900 dark:text-white mb-1">Copy to Clipboard</h4>
                    <p class="text-sm text-gray-600 dark:text-gray-400">One-click copy for all code examples</p>
                </div>
            </div>
            <div class="flex items-start space-x-4">
                <div class="w-10 h-10 bg-purple-100 dark:bg-purple-900/30 rounded-lg flex items-center justify-center flex-shrink-0">
                    <svg class="w-5 h-5 text-purple-600 dark:text-purple-400" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                    </svg>
                </div>
                <div>
                    <h4 class="font-semibold text-gray-900 dark:text-white mb-1">Dark Mode</h4>
                    <p class="text-sm text-gray-600 dark:text-gray-400">All components support dark mode</p>
                </div>
            </div>
            <div class="flex items-start space-x-4">
                <div class="w-10 h-10 bg-green-100 dark:bg-green-900/30 rounded-lg flex items-center justify-center flex-shrink-0">
                    <svg class="w-5 h-5 text-green-600 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                    </svg>
                </div>
                <div>
                    <h4 class="font-semibold text-gray-900 dark:text-white mb-1">Responsive</h4>
                    <p class="text-sm text-gray-600 dark:text-gray-400">Mobile-first and fully responsive</p>
                </div>
            </div>
            <div class="flex items-start space-x-4">
                <div class="w-10 h-10 bg-orange-100 dark:bg-orange-900/30 rounded-lg flex items-center justify-center flex-shrink-0">
                    <svg class="w-5 h-5 text-orange-600 dark:text-orange-400" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                    </svg>
                </div>
                <div>
                    <h4 class="font-semibold text-gray-900 dark:text-white mb-1">Accessible</h4>
                    <p class="text-sm text-gray-600 dark:text-gray-400">ARIA labels and keyboard navigation</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
