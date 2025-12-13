@extends('showcase::layouts.showcase')

@section('page-title', 'Navigation Components')
@section('page-description', 'Headers, menus, breadcrumbs, and navigation patterns')

@section('content')
<div class="max-w-7xl mx-auto space-y-8">

    <!-- Horizontal Navbar -->
    @component('showcase::components.showcase-item', [
        'title' => 'Horizontal Navbar',
        'description' => 'Top navigation bar with logo and menu items',
        'code' => '<nav class="bg-white dark:bg-gray-800 shadow">
    <div class="max-w-7xl mx-auto px-4">
        <div class="flex justify-between h-16">
            <div class="flex items-center">
                <span class="text-xl font-bold text-gray-900 dark:text-white">Logo</span>
            </div>
            <div class="flex items-center space-x-4">
                <a href="#" class="text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 px-3 py-2">Home</a>
                <a href="#" class="text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 px-3 py-2">About</a>
                <a href="#" class="text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 px-3 py-2">Services</a>
                <a href="#" class="text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 px-3 py-2">Contact</a>
            </div>
        </div>
    </div>
</nav>'
    ])
        @slot('preview')
            <nav class="bg-white dark:bg-gray-800 shadow rounded-lg">
                <div class="max-w-7xl mx-auto px-4">
                    <div class="flex justify-between h-16">
                        <div class="flex items-center">
                            <span class="text-xl font-bold text-gray-900 dark:text-white">Logo</span>
                        </div>
                        <div class="flex items-center space-x-4">
                            <a href="#" class="text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 px-3 py-2">Home</a>
                            <a href="#" class="text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 px-3 py-2">About</a>
                            <a href="#" class="text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 px-3 py-2">Services</a>
                            <a href="#" class="text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 px-3 py-2">Contact</a>
                        </div>
                    </div>
                </div>
            </nav>
        @endslot
    @endcomponent

    <!-- Breadcrumbs -->
    @component('showcase::components.showcase-item', [
        'title' => 'Breadcrumbs',
        'description' => 'Navigation trail showing current location',
        'code' => '<nav class="flex" aria-label="Breadcrumb">
    <ol class="inline-flex items-center space-x-1 md:space-x-3">
        <li class="inline-flex items-center">
            <a href="#" class="text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400">
                <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path>
                </svg>
                Home
            </a>
        </li>
        <li>
            <div class="flex items-center">
                <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                </svg>
                <a href="#" class="ml-1 text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400">Products</a>
            </div>
        </li>
        <li>
            <div class="flex items-center">
                <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                </svg>
                <span class="ml-1 text-gray-500 dark:text-gray-400">Current Page</span>
            </div>
        </li>
    </ol>
</nav>'
    ])
        @slot('preview')
            <nav class="flex" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-3">
                    <li class="inline-flex items-center">
                        <a href="#" class="text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400">
                            <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path>
                            </svg>
                            Home
                        </a>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <a href="#" class="ml-1 text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400">Products</a>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="ml-1 text-gray-500 dark:text-gray-400">Current Page</span>
                        </div>
                    </li>
                </ol>
            </nav>
        @endslot
    @endcomponent

    <!-- Tabs -->
    @component('showcase::components.showcase-item', [
        'title' => 'Tabs',
        'description' => 'Tabbed navigation for content sections',
        'code' => '<div x-data="{ activeTab: \'profile\' }">
    <div class="border-b border-gray-200 dark:border-gray-700">
        <nav class="-mb-px flex space-x-8">
            <button @click="activeTab = \'profile\'" 
                    :class="activeTab === \'profile\' ? \'border-blue-500 text-blue-600 dark:text-blue-400\' : \'border-transparent text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300 hover:border-gray-300\'" 
                    class="whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm">
                Profile
            </button>
            <button @click="activeTab = \'settings\'" 
                    :class="activeTab === \'settings\' ? \'border-blue-500 text-blue-600 dark:text-blue-400\' : \'border-transparent text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300 hover:border-gray-300\'" 
                    class="whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm">
                Settings
            </button>
            <button @click="activeTab = \'notifications\'" 
                    :class="activeTab === \'notifications\' ? \'border-blue-500 text-blue-600 dark:text-blue-400\' : \'border-transparent text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300 hover:border-gray-300\'" 
                    class="whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm">
                Notifications
            </button>
        </nav>
    </div>
    <div class="mt-4">
        <div x-show="activeTab === \'profile\'" class="text-gray-700 dark:text-gray-300">Profile content here...</div>
        <div x-show="activeTab === \'settings\'" class="text-gray-700 dark:text-gray-300">Settings content here...</div>
        <div x-show="activeTab === \'notifications\'" class="text-gray-700 dark:text-gray-300">Notifications content here...</div>
    </div>
</div>'
    ])
        @slot('preview')
            <div x-data="{ activeTab: 'profile' }">
                <div class="border-b border-gray-200 dark:border-gray-700">
                    <nav class="-mb-px flex space-x-8">
                        <button @click="activeTab = 'profile'" :class="activeTab === 'profile' ? 'border-blue-500 text-blue-600 dark:text-blue-400' : 'border-transparent text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300 hover:border-gray-300'" class="whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm">
                            Profile
                        </button>
                        <button @click="activeTab = 'settings'" :class="activeTab === 'settings' ? 'border-blue-500 text-blue-600 dark:text-blue-400' : 'border-transparent text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300 hover:border-gray-300'" class="whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm">
                            Settings
                        </button>
                        <button @click="activeTab = 'notifications'" :class="activeTab === 'notifications' ? 'border-blue-500 text-blue-600 dark:text-blue-400' : 'border-transparent text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300 hover:border-gray-300'" class="whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm">
                            Notifications
                        </button>
                    </nav>
                </div>
                <div class="mt-4">
                    <div x-show="activeTab === 'profile'" class="text-gray-700 dark:text-gray-300">Profile content here...</div>
                    <div x-show="activeTab === 'settings'" class="text-gray-700 dark:text-gray-300">Settings content here...</div>
                    <div x-show="activeTab === 'notifications'" class="text-gray-700 dark:text-gray-300">Notifications content here...</div>
                </div>
            </div>
        @endslot
    @endcomponent

    <!-- Pagination -->
    @component('showcase::components.showcase-item', [
        'title' => 'Pagination',
        'description' => 'Page navigation controls',
        'code' => '<nav class="flex items-center justify-between">
    <div class="flex-1 flex justify-between sm:hidden">
        <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 dark:border-gray-600 text-sm font-medium rounded-md text-gray-700 dark:text-gray-300 bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-700">
            Previous
        </a>
        <a href="#" class="ml-3 relative inline-flex items-center px-4 py-2 border border-gray-300 dark:border-gray-600 text-sm font-medium rounded-md text-gray-700 dark:text-gray-300 bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-700">
            Next
        </a>
    </div>
    <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
        <div>
            <p class="text-sm text-gray-700 dark:text-gray-300">
                Showing <span class="font-medium">1</span> to <span class="font-medium">10</span> of <span class="font-medium">97</span> results
            </p>
        </div>
        <div>
            <nav class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px">
                <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-800 text-sm font-medium text-gray-500 dark:text-gray-400 hover:bg-gray-50 dark:hover:bg-gray-700">
                    <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"/>
                    </svg>
                </a>
                <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-800 text-sm font-medium text-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-700">1</a>
                <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 dark:border-gray-600 bg-blue-50 dark:bg-blue-900/20 text-sm font-medium text-blue-600 dark:text-blue-400">2</a>
                <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-800 text-sm font-medium text-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-700">3</a>
                <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-800 text-sm font-medium text-gray-500 dark:text-gray-400 hover:bg-gray-50 dark:hover:bg-gray-700">
                    <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
                    </svg>
                </a>
            </nav>
        </div>
    </div>
</nav>'
    ])
        @slot('preview')
            <nav class="flex items-center justify-between">
                <div class="flex-1 flex justify-between sm:hidden">
                    <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 dark:border-gray-600 text-sm font-medium rounded-md text-gray-700 dark:text-gray-300 bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-700">
                        Previous
                    </a>
                    <a href="#" class="ml-3 relative inline-flex items-center px-4 py-2 border border-gray-300 dark:border-gray-600 text-sm font-medium rounded-md text-gray-700 dark:text-gray-300 bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-700">
                        Next
                    </a>
                </div>
                <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
                    <div>
                        <p class="text-sm text-gray-700 dark:text-gray-300">
                            Showing <span class="font-medium">1</span> to <span class="font-medium">10</span> of <span class="font-medium">97</span> results
                        </p>
                    </div>
                    <div>
                        <nav class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px">
                            <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-800 text-sm font-medium text-gray-500 dark:text-gray-400 hover:bg-gray-50 dark:hover:bg-gray-700">
                                <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                            </a>
                            <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-800 text-sm font-medium text-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-700">1</a>
                            <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 dark:border-gray-600 bg-blue-50 dark:bg-blue-900/20 text-sm font-medium text-blue-600 dark:text-blue-400">2</a>
                            <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-800 text-sm font-medium text-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-700">3</a>
                            <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-800 text-sm font-medium text-gray-500 dark:text-gray-400 hover:bg-gray-50 dark:hover:bg-gray-700">
                                <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
                                </svg>
                            </a>
                        </nav>
                    </div>
                </div>
            </nav>
        @endslot
    @endcomponent

    <!-- Vertical Sidebar Menu -->
    @component('showcase::components.showcase-item', [
        'title' => 'Vertical Sidebar Menu',
        'description' => 'Side navigation with icons',
        'code' => '<div class="w-64 bg-white dark:bg-gray-800 shadow rounded-lg">
    <nav class="p-4 space-y-1">
        <a href="#" class="flex items-center px-4 py-2 text-gray-700 dark:text-gray-300 bg-blue-50 dark:bg-blue-900/20 rounded-lg">
            <svg class="w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path>
            </svg>
            Dashboard
        </a>
        <a href="#" class="flex items-center px-4 py-2 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 rounded-lg">
            <svg class="w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20">
                <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"></path>
            </svg>
            Users
        </a>
        <a href="#" class="flex items-center px-4 py-2 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 rounded-lg">
            <svg class="w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M3 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
            </svg>
            Posts
        </a>
        <a href="#" class="flex items-center px-4 py-2 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 rounded-lg">
            <svg class="w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"></path>
            </svg>
            Settings
        </a>
    </nav>
</div>'
    ])
        @slot('preview')
            <div class="w-64 bg-white dark:bg-gray-800 shadow rounded-lg">
                <nav class="p-4 space-y-1">
                    <a href="#" class="flex items-center px-4 py-2 text-gray-700 dark:text-gray-300 bg-blue-50 dark:bg-blue-900/20 rounded-lg">
                        <svg class="w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path>
                        </svg>
                        Dashboard
                    </a>
                    <a href="#" class="flex items-center px-4 py-2 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 rounded-lg">
                        <svg class="w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"></path>
                        </svg>
                        Users
                    </a>
                    <a href="#" class="flex items-center px-4 py-2 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 rounded-lg">
                        <svg class="w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M3 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                        </svg>
                        Posts
                    </a>
                    <a href="#" class="flex items-center px-4 py-2 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 rounded-lg">
                        <svg class="w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"></path>
                        </svg>
                        Settings
                    </a>
                </nav>
            </div>
        @endslot
    @endcomponent

    <!-- Dropdown Menu -->
    @component('showcase::components.showcase-item', [
        'title' => 'Dropdown Menu',
        'description' => 'User profile dropdown',
        'code' => '<div x-data="{ open: false }" class="relative inline-block text-left">
    <button @click="open = !open" 
            type="button" 
            class="inline-flex justify-center w-full rounded-md border border-gray-300 dark:border-gray-600 shadow-sm px-4 py-2 bg-white dark:bg-gray-800 text-sm font-medium text-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-700">
        Options
        <svg class="-mr-1 ml-2 h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
        </svg>
    </button>
    <div x-show="open" 
         @click.away="open = false" 
         class="origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-white dark:bg-gray-800 ring-1 ring-black ring-opacity-5">
        <div class="py-1">
            <a href="#" class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700">Account settings</a>
            <a href="#" class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700">Support</a>
            <a href="#" class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700">License</a>
            <a href="#" class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700">Sign out</a>
        </div>
    </div>
</div>'
    ])
        @slot('preview')
            <div x-data="{ open: false }" class="relative inline-block text-left">
                <button @click="open = !open" type="button" class="inline-flex justify-center w-full rounded-md border border-gray-300 dark:border-gray-600 shadow-sm px-4 py-2 bg-white dark:bg-gray-800 text-sm font-medium text-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-700">
                    Options
                    <svg class="-mr-1 ml-2 h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </button>
                <div x-show="open" @click.away="open = false" class="origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-white dark:bg-gray-800 ring-1 ring-black ring-opacity-5 z-10">
                    <div class="py-1">
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700">Account settings</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700">Support</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700">License</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700">Sign out</a>
                    </div>
                </div>
            </div>
        @endslot
    @endcomponent

    <!-- Mobile Menu Toggle -->
    @component('showcase::components.showcase-item', [
        'title' => 'Mobile Menu (Hamburger)',
        'description' => 'Responsive mobile navigation menu',
        'code' => '<div x-data="{ mobileMenuOpen: false }" class="bg-white dark:bg-gray-800 shadow rounded-lg">
    <div class="px-4 py-3 flex justify-between items-center">
        <span class="text-xl font-bold text-gray-900 dark:text-white">Logo</span>
        <button @click="mobileMenuOpen = !mobileMenuOpen" 
                class="text-gray-700 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path x-show="!mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                <path x-show="mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
    </div>
    <div x-show="mobileMenuOpen" class="border-t border-gray-200 dark:border-gray-700 px-2 pt-2 pb-3 space-y-1">
        <a href="#" class="block px-3 py-2 rounded-md text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700">Home</a>
        <a href="#" class="block px-3 py-2 rounded-md text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700">About</a>
        <a href="#" class="block px-3 py-2 rounded-md text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700">Services</a>
        <a href="#" class="block px-3 py-2 rounded-md text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700">Contact</a>
    </div>
</div>'
    ])
        @slot('preview')
            <div x-data="{ mobileMenuOpen: false }" class="bg-white dark:bg-gray-800 shadow rounded-lg">
                <div class="px-4 py-3 flex justify-between items-center">
                    <span class="text-xl font-bold text-gray-900 dark:text-white">Logo</span>
                    <button @click="mobileMenuOpen = !mobileMenuOpen" class="text-gray-700 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path x-show="!mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                            <path x-show="mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
                <div x-show="mobileMenuOpen" class="border-t border-gray-200 dark:border-gray-700 px-2 pt-2 pb-3 space-y-1">
                    <a href="#" class="block px-3 py-2 rounded-md text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700">Home</a>
                    <a href="#" class="block px-3 py-2 rounded-md text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700">About</a>
                    <a href="#" class="block px-3 py-2 rounded-md text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700">Services</a>
                    <a href="#" class="block px-3 py-2 rounded-md text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700">Contact</a>
                </div>
            </div>
        @endslot
    @endcomponent

    <!-- Stepper / Multi-step Wizard -->
    @component('showcase::components.showcase-item', [
        'title' => 'Stepper / Multi-step Wizard',
        'description' => 'Step-by-step progress indicator for forms and processes',
        'code' => '<div x-data="{ currentStep: 1 }">
    <!-- Stepper Header -->
    <div class="flex items-center justify-between mb-8">
        <div class="flex-1 flex items-center" :class="currentStep >= 1 ? \'text-blue-600\' : \'text-gray-400\'">
            <div class="flex items-center justify-center w-10 h-10 rounded-full" :class="currentStep >= 1 ? \'bg-blue-600 text-white\' : \'bg-gray-200 dark:bg-gray-700 text-gray-600\'">
                1
            </div>
            <span class="ml-2 text-sm font-medium">Account</span>
        </div>
        <div class="flex-1 h-1" :class="currentStep >= 2 ? \'bg-blue-600\' : \'bg-gray-200 dark:bg-gray-700\'"></div>
        <div class="flex-1 flex items-center" :class="currentStep >= 2 ? \'text-blue-600\' : \'text-gray-400\'">
            <div class="flex items-center justify-center w-10 h-10 rounded-full" :class="currentStep >= 2 ? \'bg-blue-600 text-white\' : \'bg-gray-200 dark:bg-gray-700 text-gray-600\'">
                2
            </div>
            <span class="ml-2 text-sm font-medium">Profile</span>
        </div>
        <div class="flex-1 h-1" :class="currentStep >= 3 ? \'bg-blue-600\' : \'bg-gray-200 dark:bg-gray-700\'"></div>
        <div class="flex-1 flex items-center" :class="currentStep >= 3 ? \'text-blue-600\' : \'text-gray-400\'">
            <div class="flex items-center justify-center w-10 h-10 rounded-full" :class="currentStep >= 3 ? \'bg-blue-600 text-white\' : \'bg-gray-200 dark:bg-gray-700 text-gray-600\'">
                3
            </div>
            <span class="ml-2 text-sm font-medium">Complete</span>
        </div>
    </div>
    
    <!-- Navigation Buttons -->
    <div class="flex justify-between">
        <button @click="currentStep > 1 && currentStep--" :disabled="currentStep === 1" class="px-4 py-2 border rounded-lg disabled:opacity-50">
            Previous
        </button>
        <button @click="currentStep < 3 && currentStep++" :disabled="currentStep === 3" class="px-4 py-2 bg-blue-600 text-white rounded-lg disabled:opacity-50">
            Next
        </button>
    </div>
</div>'
    ])
        @slot('preview')
            <!-- Horizontal Stepper -->
            <div x-data="{ currentStep: 1 }" class="mb-12">
                <h4 class="text-sm font-semibold text-gray-900 dark:text-white mb-4">Horizontal Stepper</h4>
                
                <!-- Stepper Header -->
                <div class="flex items-center mb-8">
                    <div class="flex items-center flex-1">
                        <div class="flex items-center justify-center w-10 h-10 rounded-full transition-all" :class="currentStep >= 1 ? 'bg-blue-600 text-white' : 'bg-gray-200 dark:bg-gray-700 text-gray-600 dark:text-gray-400'">
                            <svg x-show="currentStep > 1" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <span x-show="currentStep <= 1">1</span>
                        </div>
                        <div class="ml-3">
                            <p class="text-sm font-medium" :class="currentStep >= 1 ? 'text-blue-600 dark:text-blue-400' : 'text-gray-500 dark:text-gray-400'">Step 1</p>
                            <p class="text-xs text-gray-500 dark:text-gray-400">Account Info</p>
                        </div>
                    </div>
                    
                    <div class="flex-1 h-1 mx-4 transition-all" :class="currentStep >= 2 ? 'bg-blue-600' : 'bg-gray-200 dark:bg-gray-700'"></div>
                    
                    <div class="flex items-center flex-1">
                        <div class="flex items-center justify-center w-10 h-10 rounded-full transition-all" :class="currentStep >= 2 ? 'bg-blue-600 text-white' : 'bg-gray-200 dark:bg-gray-700 text-gray-600 dark:text-gray-400'">
                            <svg x-show="currentStep > 2" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <span x-show="currentStep <= 2">2</span>
                        </div>
                        <div class="ml-3">
                            <p class="text-sm font-medium" :class="currentStep >= 2 ? 'text-blue-600 dark:text-blue-400' : 'text-gray-500 dark:text-gray-400'">Step 2</p>
                            <p class="text-xs text-gray-500 dark:text-gray-400">Personal Details</p>
                        </div>
                    </div>
                    
                    <div class="flex-1 h-1 mx-4 transition-all" :class="currentStep >= 3 ? 'bg-blue-600' : 'bg-gray-200 dark:bg-gray-700'"></div>
                    
                    <div class="flex items-center flex-1">
                        <div class="flex items-center justify-center w-10 h-10 rounded-full transition-all" :class="currentStep >= 3 ? 'bg-blue-600 text-white' : 'bg-gray-200 dark:bg-gray-700 text-gray-600 dark:text-gray-400'">
                            <svg x-show="currentStep > 3" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <span x-show="currentStep <= 3">3</span>
                        </div>
                        <div class="ml-3">
                            <p class="text-sm font-medium" :class="currentStep >= 3 ? 'text-blue-600 dark:text-blue-400' : 'text-gray-500 dark:text-gray-400'">Step 3</p>
                            <p class="text-xs text-gray-500 dark:text-gray-400">Confirmation</p>
                        </div>
                    </div>
                </div>
                
                <!-- Step Content -->
                <div class="bg-gray-50 dark:bg-gray-900/50 rounded-lg p-6 mb-6">
                    <div x-show="currentStep === 1">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Account Information</h3>
                        <p class="text-sm text-gray-600 dark:text-gray-400">Enter your account details to get started.</p>
                    </div>
                    <div x-show="currentStep === 2" x-cloak>
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Personal Details</h3>
                        <p class="text-sm text-gray-600 dark:text-gray-400">Tell us more about yourself.</p>
                    </div>
                    <div x-show="currentStep === 3" x-cloak>
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Review & Confirm</h3>
                        <p class="text-sm text-gray-600 dark:text-gray-400">Please review your information before submitting.</p>
                    </div>
                </div>
                
                <!-- Navigation Buttons -->
                <div class="flex justify-between">
                    <button @click="currentStep > 1 && currentStep--" :disabled="currentStep === 1" class="px-4 py-2 border border-gray-300 dark:border-gray-600 text-gray-700 dark:text-gray-300 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-700 disabled:opacity-50 disabled:cursor-not-allowed transition">
                        Previous
                    </button>
                    <button @click="currentStep < 3 && currentStep++" :disabled="currentStep === 3" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 disabled:opacity-50 disabled:cursor-not-allowed transition">
                        <span x-show="currentStep < 3">Next</span>
                        <span x-show="currentStep === 3" x-cloak>Submit</span>
                    </button>
                </div>
            </div>

            <!-- Vertical Stepper -->
            <div x-data="{ currentStep: 1 }">
                <h4 class="text-sm font-semibold text-gray-900 dark:text-white mb-4">Vertical Stepper</h4>
                
                <div class="space-y-4">
                    <!-- Step 1 -->
                    <div class="flex">
                        <div class="flex flex-col items-center mr-4">
                            <div class="flex items-center justify-center w-10 h-10 rounded-full" :class="currentStep >= 1 ? 'bg-blue-600 text-white' : 'bg-gray-200 dark:bg-gray-700 text-gray-600 dark:text-gray-400'">
                                <svg x-show="currentStep > 1" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span x-show="currentStep <= 1">1</span>
                            </div>
                            <div class="w-1 h-16" :class="currentStep > 1 ? 'bg-blue-600' : 'bg-gray-200 dark:bg-gray-700'"></div>
                        </div>
                        <div class="flex-1 pb-8">
                            <h4 class="text-sm font-semibold mb-1" :class="currentStep >= 1 ? 'text-blue-600 dark:text-blue-400' : 'text-gray-900 dark:text-white'">Choose Service</h4>
                            <p class="text-sm text-gray-600 dark:text-gray-400 mb-3">Select the service you want to purchase</p>
                            <div x-show="currentStep === 1">
                                <button @click="currentStep = 2" class="px-4 py-2 bg-blue-600 text-white text-sm rounded-lg hover:bg-blue-700">Continue</button>
                            </div>
                        </div>
                    </div>

                    <!-- Step 2 -->
                    <div class="flex">
                        <div class="flex flex-col items-center mr-4">
                            <div class="flex items-center justify-center w-10 h-10 rounded-full" :class="currentStep >= 2 ? 'bg-blue-600 text-white' : 'bg-gray-200 dark:bg-gray-700 text-gray-600 dark:text-gray-400'">
                                <svg x-show="currentStep > 2" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span x-show="currentStep <= 2">2</span>
                            </div>
                            <div class="w-1 h-16" :class="currentStep > 2 ? 'bg-blue-600' : 'bg-gray-200 dark:bg-gray-700'"></div>
                        </div>
                        <div class="flex-1 pb-8">
                            <h4 class="text-sm font-semibold mb-1" :class="currentStep >= 2 ? 'text-blue-600 dark:text-blue-400' : 'text-gray-900 dark:text-white'">Enter Details</h4>
                            <p class="text-sm text-gray-600 dark:text-gray-400 mb-3">Provide your contact information</p>
                            <div x-show="currentStep === 2" x-cloak class="space-x-2">
                                <button @click="currentStep = 1" class="px-4 py-2 border border-gray-300 dark:border-gray-600 text-gray-700 dark:text-gray-300 text-sm rounded-lg hover:bg-gray-50 dark:hover:bg-gray-700">Back</button>
                                <button @click="currentStep = 3" class="px-4 py-2 bg-blue-600 text-white text-sm rounded-lg hover:bg-blue-700">Continue</button>
                            </div>
                        </div>
                    </div>

                    <!-- Step 3 -->
                    <div class="flex">
                        <div class="flex flex-col items-center mr-4">
                            <div class="flex items-center justify-center w-10 h-10 rounded-full" :class="currentStep >= 3 ? 'bg-blue-600 text-white' : 'bg-gray-200 dark:bg-gray-700 text-gray-600 dark:text-gray-400'">
                                <svg x-show="currentStep > 3" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span x-show="currentStep <= 3">3</span>
                            </div>
                        </div>
                        <div class="flex-1">
                            <h4 class="text-sm font-semibold mb-1" :class="currentStep >= 3 ? 'text-blue-600 dark:text-blue-400' : 'text-gray-900 dark:text-white'">Complete</h4>
                            <p class="text-sm text-gray-600 dark:text-gray-400 mb-3">Review and submit your order</p>
                            <div x-show="currentStep === 3" x-cloak class="space-x-2">
                                <button @click="currentStep = 2" class="px-4 py-2 border border-gray-300 dark:border-gray-600 text-gray-700 dark:text-gray-300 text-sm rounded-lg hover:bg-gray-50 dark:hover:bg-gray-700">Back</button>
                                <button class="px-4 py-2 bg-green-600 text-white text-sm rounded-lg hover:bg-green-700">Submit Order</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endslot
    @endcomponent

    {{-- Sticky Header --}}
    @component('showcase::components.showcase-item', [
        'title' => 'Sticky Header',
        'description' => 'Navigation header that sticks to the top when scrolling',
        'code' => <<<'HTML'
<!-- Sticky Header -->
<div class="relative h-[600px] overflow-y-auto border border-gray-300 dark:border-gray-600 rounded-lg">
    <nav class="sticky top-0 z-10 bg-white dark:bg-gray-800 shadow-md">
        <div class="px-4 py-3">
            <div class="flex items-center justify-between">
                <span class="text-lg font-bold text-gray-900 dark:text-white">🚀 StickyNav</span>
                <div class="flex items-center space-x-4">
                    <a href="#" class="text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400">Home</a>
                    <a href="#" class="text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400">Features</a>
                    <a href="#" class="text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400">Pricing</a>
                    <button class="px-4 py-2 bg-blue-600 text-white text-sm rounded-lg hover:bg-blue-700">Sign Up</button>
                </div>
            </div>
        </div>
    </nav>
    
    <div class="p-6 space-y-4">
        <div class="h-40 bg-gradient-to-r from-blue-500 to-purple-600 rounded-lg flex items-center justify-center text-white text-xl font-bold">Hero Section</div>
        <div class="h-32 bg-gray-100 dark:bg-gray-700 rounded-lg"></div>
        <div class="h-32 bg-gray-100 dark:bg-gray-700 rounded-lg"></div>
        <div class="h-32 bg-gray-100 dark:bg-gray-700 rounded-lg"></div>
        <div class="h-32 bg-gray-100 dark:bg-gray-700 rounded-lg"></div>
        <p class="text-center text-gray-500 dark:text-gray-400">Scroll to see sticky header in action ⬆️</p>
    </div>
</div>

<!-- Sticky Header with Scroll Effect -->
<div x-data="{ scrolled: false }" @scroll.window="scrolled = (window.pageYOffset > 50)" class="relative">
    <nav :class="scrolled ? 'shadow-lg py-2' : 'py-4'" class="sticky top-0 z-50 bg-white dark:bg-gray-800 transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex items-center justify-between">
                <span class="text-lg font-bold" :class="scrolled ? 'text-sm' : 'text-xl'">📱 AppName</span>
                <div class="flex items-center space-x-4">
                    <a href="#" class="text-gray-700 dark:text-gray-300 hover:text-blue-600">Products</a>
                    <a href="#" class="text-gray-700 dark:text-gray-300 hover:text-blue-600">About</a>
                    <a href="#" class="text-gray-700 dark:text-gray-300 hover:text-blue-600">Contact</a>
                </div>
            </div>
        </div>
    </nav>
</div>
HTML
    ])
        @slot('preview')
            {{-- Sticky Header --}}
            <div class="relative h-[600px] overflow-y-auto border border-gray-300 dark:border-gray-600 rounded-lg">
                <nav class="sticky top-0 z-10 bg-white dark:bg-gray-800 shadow-md">
                    <div class="px-4 py-3">
                        <div class="flex items-center justify-between">
                            <span class="text-lg font-bold text-gray-900 dark:text-white">🚀 StickyNav</span>
                            <div class="flex items-center space-x-4">
                                <a href="#" class="text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400">Home</a>
                                <a href="#" class="text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400">Features</a>
                                <a href="#" class="text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400">Pricing</a>
                                <button class="px-4 py-2 bg-blue-600 text-white text-sm rounded-lg hover:bg-blue-700">Sign Up</button>
                            </div>
                        </div>
                    </div>
                </nav>
                
                <div class="p-6 space-y-4">
                    <div class="h-40 bg-gradient-to-r from-blue-500 to-purple-600 rounded-lg flex items-center justify-center text-white text-xl font-bold">Hero Section</div>
                    <div class="h-32 bg-gray-100 dark:bg-gray-700 rounded-lg"></div>
                    <div class="h-32 bg-gray-100 dark:bg-gray-700 rounded-lg"></div>
                    <div class="h-32 bg-gray-100 dark:bg-gray-700 rounded-lg"></div>
                    <div class="h-32 bg-gray-100 dark:bg-gray-700 rounded-lg"></div>
                    <p class="text-center text-gray-500 dark:text-gray-400">Scroll to see sticky header in action ⬆️</p>
                </div>
            </div>
        @endslot
    @endcomponent

    {{-- Nested Sidebar Menu --}}
    @component('showcase::components.showcase-item', [
        'title' => 'Nested Sidebar Menu',
        'description' => 'Multi-level collapsible sidebar navigation with nested items',
        'code' => <<<'HTML'
<!-- Nested Sidebar Menu -->
<div x-data="{
    openMenus: {},
    toggleMenu(menu) {
        this.openMenus[menu] = !this.openMenus[menu];
    }
}" class="w-64 bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg">
    <div class="p-4">
        <h3 class="text-sm font-semibold text-gray-500 dark:text-gray-400 uppercase mb-2">Menu</h3>
        
        <!-- Dashboard -->
        <a href="#" class="flex items-center px-3 py-2 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 rounded-lg mb-1">
            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
            </svg>
            Dashboard
        </a>
        
        <!-- Users (with nested items) -->
        <div class="mb-1">
            <button @click="toggleMenu('users')" class="w-full flex items-center justify-between px-3 py-2 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 rounded-lg">
                <div class="flex items-center">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                    </svg>
                    Users
                </div>
                <svg class="w-4 h-4 transition-transform" :class="openMenus.users ? 'rotate-90' : ''" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                </svg>
            </button>
            <div x-show="openMenus.users" x-cloak class="ml-8 mt-1 space-y-1">
                <a href="#" class="block px-3 py-2 text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white hover:bg-gray-50 dark:hover:bg-gray-700/50 rounded-lg">All Users</a>
                <a href="#" class="block px-3 py-2 text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white hover:bg-gray-50 dark:hover:bg-gray-700/50 rounded-lg">Add New</a>
                <a href="#" class="block px-3 py-2 text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white hover:bg-gray-50 dark:hover:bg-gray-700/50 rounded-lg">Roles</a>
                <a href="#" class="block px-3 py-2 text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white hover:bg-gray-50 dark:hover:bg-gray-700/50 rounded-lg">Permissions</a>
            </div>
        </div>
        
        <!-- Content (with nested items) -->
        <div class="mb-1">
            <button @click="toggleMenu('content')" class="w-full flex items-center justify-between px-3 py-2 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 rounded-lg">
                <div class="flex items-center">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                    Content
                </div>
                <svg class="w-4 h-4 transition-transform" :class="openMenus.content ? 'rotate-90' : ''" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                </svg>
            </button>
            <div x-show="openMenus.content" x-cloak class="ml-8 mt-1 space-y-1">
                <a href="#" class="block px-3 py-2 text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white hover:bg-gray-50 dark:hover:bg-gray-700/50 rounded-lg">Posts</a>
                <a href="#" class="block px-3 py-2 text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white hover:bg-gray-50 dark:hover:bg-gray-700/50 rounded-lg">Pages</a>
                <a href="#" class="block px-3 py-2 text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white hover:bg-gray-50 dark:hover:bg-gray-700/50 rounded-lg">Categories</a>
                <a href="#" class="block px-3 py-2 text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white hover:bg-gray-50 dark:hover:bg-gray-700/50 rounded-lg">Tags</a>
            </div>
        </div>
        
        <!-- Settings -->
        <a href="#" class="flex items-center px-3 py-2 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 rounded-lg">
            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
            </svg>
            Settings
        </a>
    </div>
</div>
HTML
    ])
        @slot('preview')
            {{-- Nested Sidebar Menu --}}
            <div x-data="{
                openMenus: {},
                toggleMenu(menu) {
                    this.openMenus[menu] = !this.openMenus[menu];
                }
            }" class="w-64 bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg">
                <div class="p-4">
                    <h3 class="text-sm font-semibold text-gray-500 dark:text-gray-400 uppercase mb-2">Menu</h3>
                    
                    {{-- Dashboard --}}
                    <a href="#" class="flex items-center px-3 py-2 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 rounded-lg mb-1">
                        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                        </svg>
                        Dashboard
                    </a>
                    
                    {{-- Users (with nested items) --}}
                    <div class="mb-1">
                        <button @click="toggleMenu('users')" class="w-full flex items-center justify-between px-3 py-2 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 rounded-lg">
                            <div class="flex items-center">
                                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                                </svg>
                                Users
                            </div>
                            <svg class="w-4 h-4 transition-transform" :class="openMenus.users ? 'rotate-90' : ''" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <div x-show="openMenus.users" x-cloak class="ml-8 mt-1 space-y-1">
                            <a href="#" class="block px-3 py-2 text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white hover:bg-gray-50 dark:hover:bg-gray-700/50 rounded-lg">All Users</a>
                            <a href="#" class="block px-3 py-2 text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white hover:bg-gray-50 dark:hover:bg-gray-700/50 rounded-lg">Add New</a>
                            <a href="#" class="block px-3 py-2 text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white hover:bg-gray-50 dark:hover:bg-gray-700/50 rounded-lg">Roles</a>
                            <a href="#" class="block px-3 py-2 text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white hover:bg-gray-50 dark:hover:bg-gray-700/50 rounded-lg">Permissions</a>
                        </div>
                    </div>
                    
                    {{-- Content (with nested items) --}}
                    <div class="mb-1">
                        <button @click="toggleMenu('content')" class="w-full flex items-center justify-between px-3 py-2 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 rounded-lg">
                            <div class="flex items-center">
                                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                </svg>
                                Content
                            </div>
                            <svg class="w-4 h-4 transition-transform" :class="openMenus.content ? 'rotate-90' : ''" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <div x-show="openMenus.content" x-cloak class="ml-8 mt-1 space-y-1">
                            <a href="#" class="block px-3 py-2 text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white hover:bg-gray-50 dark:hover:bg-gray-700/50 rounded-lg">Posts</a>
                            <a href="#" class="block px-3 py-2 text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white hover:bg-gray-50 dark:hover:bg-gray-700/50 rounded-lg">Pages</a>
                            <a href="#" class="block px-3 py-2 text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white hover:bg-gray-50 dark:hover:bg-gray-700/50 rounded-lg">Categories</a>
                            <a href="#" class="block px-3 py-2 text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white hover:bg-gray-50 dark:hover:bg-gray-700/50 rounded-lg">Tags</a>
                        </div>
                    </div>
                    
                    {{-- Settings --}}
                    <a href="#" class="flex items-center px-3 py-2 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 rounded-lg">
                        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        Settings
                    </a>
                </div>
            </div>
        @endslot
    @endcomponent

    {{-- Infinite Scroll Pagination --}}
    @component('showcase::components.showcase-item', [
        'title' => 'Infinite Scroll Pagination',
        'description' => 'Automatically load more content as user scrolls to the bottom',
        'code' => <<<'HTML'
<!-- Infinite Scroll Container -->
<div x-data="{
    items: Array.from({ length: 10 }, (_, i) => ({ id: i + 1, title: `Item ${i + 1}` })),
    loading: false,
    hasMore: true,
    loadMore() {
        if (this.loading || !this.hasMore) return;
        this.loading = true;
        
        setTimeout(() => {
            const start = this.items.length + 1;
            const newItems = Array.from({ length: 10 }, (_, i) => ({ id: start + i, title: `Item ${start + i}` }));
            this.items = [...this.items, ...newItems];
            this.loading = false;
            
            if (this.items.length >= 50) {
                this.hasMore = false;
            }
        }, 1000);
    }
}" class="h-96 overflow-y-auto border border-gray-300 dark:border-gray-600 rounded-lg">
    <div class="p-4 space-y-3">
        <template x-for="item in items" :key="item.id">
            <div class="p-4 bg-white dark:bg-gray-700 border border-gray-200 dark:border-gray-600 rounded-lg">
                <h4 class="font-medium text-gray-900 dark:text-white" x-text="item.title"></h4>
                <p class="text-sm text-gray-600 dark:text-gray-400">Some content for this item...</p>
            </div>
        </template>
        
        <div x-show="loading" class="flex justify-center py-4">
            <svg class="animate-spin h-8 w-8 text-blue-600" fill="none" viewBox="0 0 24 24">
                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
            </svg>
        </div>
        
        <div x-show="!hasMore" class="text-center py-4 text-gray-500 dark:text-gray-400">
            No more items to load
        </div>
        
        <div x-intersect="loadMore" class="h-4"></div>
    </div>
</div>
HTML
    ])
        @slot('preview')
            {{-- Infinite Scroll Container --}}
            <div x-data="{
                items: Array.from({ length: 10 }, (_, i) => ({ id: i + 1, title: `Item ${i + 1}` })),
                loading: false,
                hasMore: true,
                loadMore() {
                    if (this.loading || !this.hasMore) return;
                    this.loading = true;
                    
                    setTimeout(() => {
                        const start = this.items.length + 1;
                        const newItems = Array.from({ length: 10 }, (_, i) => ({ id: start + i, title: `Item ${start + i}` }));
                        this.items = [...this.items, ...newItems];
                        this.loading = false;
                        
                        if (this.items.length >= 50) {
                            this.hasMore = false;
                        }
                    }, 1000);
                }
            }" class="h-96 overflow-y-auto border border-gray-300 dark:border-gray-600 rounded-lg">
                <div class="p-4 space-y-3">
                    <template x-for="item in items" :key="item.id">
                        <div class="p-4 bg-white dark:bg-gray-700 border border-gray-200 dark:border-gray-600 rounded-lg">
                            <h4 class="font-medium text-gray-900 dark:text-white" x-text="item.title"></h4>
                            <p class="text-sm text-gray-600 dark:text-gray-400">Some content for this item...</p>
                        </div>
                    </template>
                    
                    <div x-show="loading" class="flex justify-center py-4">
                        <svg class="animate-spin h-8 w-8 text-blue-600" fill="none" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                        </svg>
                    </div>
                    
                    <div x-show="!hasMore" class="text-center py-4 text-gray-500 dark:text-gray-400">
                        No more items to load
                    </div>
                    
                    <div x-intersect="loadMore" class="h-4"></div>
                </div>
            </div>
        @endslot
    @endcomponent

    {{-- Load More Button --}}
    @component('showcase::components.showcase-item', [
        'title' => 'Load More Button',
        'description' => 'Click to load additional content with loading state',
        'code' => <<<'HTML'
<!-- Load More Button -->
<div x-data="{
    items: Array.from({ length: 6 }, (_, i) => ({ id: i + 1, name: `Product ${i + 1}`, price: `$${(Math.random() * 100 + 20).toFixed(2)}` })),
    loading: false,
    hasMore: true,
    loadMore() {
        this.loading = true;
        setTimeout(() => {
            const start = this.items.length + 1;
            const newItems = Array.from({ length: 6 }, (_, i) => ({ id: start + i, name: `Product ${start + i}`, price: `$${(Math.random() * 100 + 20).toFixed(2)}` }));
            this.items = [...this.items, ...newItems];
            this.loading = false;
            if (this.items.length >= 24) this.hasMore = false;
        }, 800);
    }
}">
    <div class="grid grid-cols-3 gap-4 mb-6">
        <template x-for="item in items" :key="item.id">
            <div class="p-4 bg-white dark:bg-gray-700 border border-gray-200 dark:border-gray-600 rounded-lg text-center">
                <div class="w-16 h-16 bg-gradient-to-br from-blue-400 to-purple-500 rounded-lg mx-auto mb-3"></div>
                <h4 class="font-medium text-gray-900 dark:text-white" x-text="item.name"></h4>
                <p class="text-blue-600 dark:text-blue-400 font-bold" x-text="item.price"></p>
            </div>
        </template>
    </div>
    
    <div class="flex justify-center">
        <button x-show="hasMore" @click="loadMore" :disabled="loading"
                class="px-6 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 disabled:opacity-50 disabled:cursor-not-allowed flex items-center gap-2">
            <svg x-show="loading" class="animate-spin h-5 w-5" fill="none" viewBox="0 0 24 24">
                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
            </svg>
            <span x-text="loading ? 'Loading...' : 'Load More Products'"></span>
        </button>
        <p x-show="!hasMore" class="text-gray-500 dark:text-gray-400">All products loaded</p>
    </div>
</div>
HTML
    ])
        @slot('preview')
            {{-- Load More Button --}}
            <div x-data="{
                items: Array.from({ length: 6 }, (_, i) => ({ id: i + 1, name: `Product ${i + 1}`, price: `$${(Math.random() * 100 + 20).toFixed(2)}` })),
                loading: false,
                hasMore: true,
                loadMore() {
                    this.loading = true;
                    setTimeout(() => {
                        const start = this.items.length + 1;
                        const newItems = Array.from({ length: 6 }, (_, i) => ({ id: start + i, name: `Product ${start + i}`, price: `$${(Math.random() * 100 + 20).toFixed(2)}` }));
                        this.items = [...this.items, ...newItems];
                        this.loading = false;
                        if (this.items.length >= 24) this.hasMore = false;
                    }, 800);
                }
            }">
                <div class="grid grid-cols-3 gap-4 mb-6">
                    <template x-for="item in items" :key="item.id">
                        <div class="p-4 bg-white dark:bg-gray-700 border border-gray-200 dark:border-gray-600 rounded-lg text-center">
                            <div class="w-16 h-16 bg-gradient-to-br from-blue-400 to-purple-500 rounded-lg mx-auto mb-3"></div>
                            <h4 class="font-medium text-gray-900 dark:text-white" x-text="item.name"></h4>
                            <p class="text-blue-600 dark:text-blue-400 font-bold" x-text="item.price"></p>
                        </div>
                    </template>
                </div>
                
                <div class="flex justify-center">
                    <button x-show="hasMore" @click="loadMore" :disabled="loading"
                            class="px-6 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 disabled:opacity-50 disabled:cursor-not-allowed flex items-center gap-2">
                        <svg x-show="loading" class="animate-spin h-5 w-5" fill="none" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                        </svg>
                        <span x-text="loading ? 'Loading...' : 'Load More Products'"></span>
                    </button>
                    <p x-show="!hasMore" class="text-gray-500 dark:text-gray-400">All products loaded</p>
                </div>
            </div>
        @endslot
    @endcomponent

</div>
@endsection
