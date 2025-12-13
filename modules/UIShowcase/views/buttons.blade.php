@extends('showcase::layouts.showcase')

@section('page-title', 'Buttons')
@section('page-description', 'All button styles, sizes, states, and variants')

@section('content')
<div class="max-w-7xl mx-auto space-y-8">
    
    <!-- Primary Button -->
    @component('showcase::components.showcase-item', [
        'title' => 'Primary Button',
        'description' => 'Main call-to-action buttons',
        'code' => '<button class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition">
    Primary Button
</button>'
    ])
        @slot('preview')
            <button class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition">
                Primary Button
            </button>
        @endslot
    @endcomponent

    <!-- Secondary Button -->
    @component('showcase::components.showcase-item', [
        'title' => 'Secondary Button',
        'description' => 'Secondary action buttons',
        'code' => '<button class="px-4 py-2 bg-gray-200 dark:bg-gray-700 text-gray-900 dark:text-white rounded-lg hover:bg-gray-300 dark:hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 transition">
    Secondary Button
</button>'
    ])
        @slot('preview')
            <button class="px-4 py-2 bg-gray-200 dark:bg-gray-700 text-gray-900 dark:text-white rounded-lg hover:bg-gray-300 dark:hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 transition">
                Secondary Button
            </button>
        @endslot
    @endcomponent

    <!-- Outline Button -->
    @component('showcase::components.showcase-item', [
        'title' => 'Outline Button',
        'description' => 'Buttons with border only',
        'code' => '<button class="px-4 py-2 border-2 border-blue-600 text-blue-600 dark:text-blue-400 rounded-lg hover:bg-blue-50 dark:hover:bg-blue-900/20 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition">
    Outline Button
</button>'
    ])
        @slot('preview')
            <button class="px-4 py-2 border-2 border-blue-600 text-blue-600 dark:text-blue-400 rounded-lg hover:bg-blue-50 dark:hover:bg-blue-900/20 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition">
                Outline Button
            </button>
        @endslot
    @endcomponent

    <!-- Ghost Button -->
    @component('showcase::components.showcase-item', [
        'title' => 'Ghost Button',
        'description' => 'Transparent buttons',
        'code' => '<button class="px-4 py-2 text-gray-700 dark:text-gray-300 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 transition">
    Ghost Button
</button>'
    ])
        @slot('preview')
            <button class="px-4 py-2 text-gray-700 dark:text-gray-300 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 transition">
                Ghost Button
            </button>
        @endslot
    @endcomponent

    <!-- Danger Button -->
    @component('showcase::components.showcase-item', [
        'title' => 'Danger Button',
        'description' => 'Destructive action buttons',
        'code' => '<button class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition">
    Delete
</button>'
    ])
        @slot('preview')
            <button class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition">
                Delete
            </button>
        @endslot
    @endcomponent

    <!-- Success Button -->
    @component('showcase::components.showcase-item', [
        'title' => 'Success Button',
        'description' => 'Positive action buttons',
        'code' => '<button class="px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 transition">
    Save Changes
</button>'
    ])
        @slot('preview')
            <button class="px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 transition">
                Save Changes
            </button>
        @endslot
    @endcomponent

    <!-- Icon Button -->
    @component('showcase::components.showcase-item', [
        'title' => 'Icon Button',
        'description' => 'Buttons with icon only',
        'code' => '<button class="p-2 text-gray-600 dark:text-gray-400 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-500 transition">
    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
    </svg>
</button>'
    ])
        @slot('preview')
            <button class="p-2 text-gray-600 dark:text-gray-400 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-500 transition">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                </svg>
            </button>
        @endslot
    @endcomponent

    <!-- Button with Icon (Left) -->
    @component('showcase::components.showcase-item', [
        'title' => 'Button with Icon (Left)',
        'description' => 'Text button with icon on the left',
        'code' => '<button class="inline-flex items-center px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition">
    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
    </svg>
    Create New
</button>'
    ])
        @slot('preview')
            <button class="inline-flex items-center px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                </svg>
                Create New
            </button>
        @endslot
    @endcomponent

    <!-- Button with Icon (Right) -->
    @component('showcase::components.showcase-item', [
        'title' => 'Button with Icon (Right)',
        'description' => 'Text button with icon on the right',
        'code' => '<button class="inline-flex items-center px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition">
    Continue
    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
    </svg>
</button>'
    ])
        @slot('preview')
            <button class="inline-flex items-center px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition">
                Continue
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                </svg>
            </button>
        @endslot
    @endcomponent

    <!-- Loading Button -->
    @component('showcase::components.showcase-item', [
        'title' => 'Loading Button State',
        'description' => 'Button with loading spinner',
        'code' => '<button class="inline-flex items-center px-4 py-2 bg-blue-600 text-white rounded-lg opacity-75 cursor-not-allowed" disabled>
    <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" fill="none" viewBox="0 0 24 24">
        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
    </svg>
    Processing...
</button>'
    ])
        @slot('preview')
            <button class="inline-flex items-center px-4 py-2 bg-blue-600 text-white rounded-lg opacity-75 cursor-not-allowed" disabled>
                <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" fill="none" viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                </svg>
                Processing...
            </button>
        @endslot
    @endcomponent

    <!-- Disabled Button -->
    @component('showcase::components.showcase-item', [
        'title' => 'Disabled Button',
        'description' => 'Non-interactive button state',
        'code' => '<button class="px-4 py-2 bg-gray-300 dark:bg-gray-700 text-gray-500 dark:text-gray-500 rounded-lg cursor-not-allowed" disabled>
    Disabled
</button>'
    ])
        @slot('preview')
            <button class="px-4 py-2 bg-gray-300 dark:bg-gray-700 text-gray-500 dark:text-gray-500 rounded-lg cursor-not-allowed" disabled>
                Disabled
            </button>
        @endslot
    @endcomponent

    <!-- Full Width Button -->
    @component('showcase::components.showcase-item', [
        'title' => 'Full Width Button',
        'description' => 'Button spanning full container width',
        'code' => '<button class="w-full px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition">
    Full Width Button
</button>'
    ])
        @slot('preview')
            <button class="w-full px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition">
                Full Width Button
            </button>
        @endslot
    @endcomponent

    <!-- Button Group -->
    @component('showcase::components.showcase-item', [
        'title' => 'Button Group',
        'description' => 'Multiple buttons grouped together',
        'code' => '<div class="inline-flex rounded-lg shadow-sm" role="group">
    <button class="px-4 py-2 bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-600 text-gray-700 dark:text-gray-300 rounded-l-lg hover:bg-gray-50 dark:hover:bg-gray-700 focus:z-10 focus:ring-2 focus:ring-blue-500">
        Left
    </button>
    <button class="px-4 py-2 bg-white dark:bg-gray-800 border-t border-b border-gray-300 dark:border-gray-600 text-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-700 focus:z-10 focus:ring-2 focus:ring-blue-500">
        Center
    </button>
    <button class="px-4 py-2 bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-600 text-gray-700 dark:text-gray-300 rounded-r-lg hover:bg-gray-50 dark:hover:bg-gray-700 focus:z-10 focus:ring-2 focus:ring-blue-500">
        Right
    </button>
</div>'
    ])
        @slot('preview')
            <div class="inline-flex rounded-lg shadow-sm" role="group">
                <button class="px-4 py-2 bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-600 text-gray-700 dark:text-gray-300 rounded-l-lg hover:bg-gray-50 dark:hover:bg-gray-700 focus:z-10 focus:ring-2 focus:ring-blue-500">
                    Left
                </button>
                <button class="px-4 py-2 bg-white dark:bg-gray-800 border-t border-b border-gray-300 dark:border-gray-600 text-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-700 focus:z-10 focus:ring-2 focus:ring-blue-500">
                    Center
                </button>
                <button class="px-4 py-2 bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-600 text-gray-700 dark:text-gray-300 rounded-r-lg hover:bg-gray-50 dark:hover:bg-gray-700 focus:z-10 focus:ring-2 focus:ring-blue-500">
                    Right
                </button>
            </div>
        @endslot
    @endcomponent

    <!-- Button Sizes -->
    @component('showcase::components.showcase-item', [
        'title' => 'Button Sizes',
        'description' => 'Different button sizes (Small, Medium, Large)',
        'code' => '<!-- Small -->
<button class="px-3 py-1.5 text-sm bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">
    Small
</button>

<!-- Medium (Default) -->
<button class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">
    Medium
</button>

<!-- Large -->
<button class="px-6 py-3 text-lg bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">
    Large
</button>'
    ])
        @slot('preview')
            <div class="flex items-center space-x-4">
                <button class="px-3 py-1.5 text-sm bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">
                    Small
                </button>
                <button class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">
                    Medium
                </button>
                <button class="px-6 py-3 text-lg bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">
                    Large
                </button>
            </div>
        @endslot
    @endcomponent

    <!-- Button with Dropdown -->
    @component('showcase::components.showcase-item', [
        'title' => 'Button with Dropdown',
        'description' => 'Button that opens a dropdown menu',
        'code' => '<div x-data="{ open: false }" class="relative" @click.away="open = false">
    <button @click="open = !open" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 flex items-center gap-2">
        Actions
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
        </svg>
    </button>
    
    <div x-show="open" x-cloak class="absolute mt-2 w-48 bg-white dark:bg-gray-800 rounded-lg shadow-lg border border-gray-200 dark:border-gray-700 py-1 z-10">
        <a href="#" class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700">Edit</a>
        <a href="#" class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700">Duplicate</a>
        <a href="#" class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700">Archive</a>
        <hr class="my-1 border-gray-200 dark:border-gray-700">
        <a href="#" class="block px-4 py-2 text-sm text-red-600 hover:bg-gray-100 dark:hover:bg-gray-700">Delete</a>
    </div>
</div>'
    ])
        @slot('preview')
            <div class="flex gap-4 flex-wrap">
                <!-- Basic Dropdown -->
                <div x-data="{ open: false }" class="relative" @click.away="open = false">
                    <button @click="open = !open" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 flex items-center gap-2">
                        Actions
                        <svg class="w-4 h-4" :class="open ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    
                    <div x-show="open" x-cloak x-transition class="absolute mt-2 w-48 bg-white dark:bg-gray-800 rounded-lg shadow-lg border border-gray-200 dark:border-gray-700 py-1 z-10">
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700">Edit</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700">Duplicate</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700">Archive</a>
                        <hr class="my-1 border-gray-200 dark:border-gray-700">
                        <a href="#" class="block px-4 py-2 text-sm text-red-600 hover:bg-gray-100 dark:hover:bg-gray-700">Delete</a>
                    </div>
                </div>

                <!-- Split Button Dropdown -->
                <div x-data="{ open: false }" class="relative flex" @click.away="open = false">
                    <button class="px-4 py-2 bg-green-600 text-white rounded-l-lg hover:bg-green-700">
                        Save
                    </button>
                    <button @click="open = !open" class="px-2 py-2 bg-green-600 text-white border-l border-green-500 rounded-r-lg hover:bg-green-700">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    
                    <div x-show="open" x-cloak x-transition class="absolute top-full mt-2 right-0 w-48 bg-white dark:bg-gray-800 rounded-lg shadow-lg border border-gray-200 dark:border-gray-700 py-1 z-10">
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700">Save & Close</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700">Save & New</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700">Save as Draft</a>
                    </div>
                </div>

                <!-- Dropdown with Icons -->
                <div x-data="{ open: false }" class="relative" @click.away="open = false">
                    <button @click="open = !open" class="px-4 py-2 bg-purple-600 text-white rounded-lg hover:bg-purple-700 flex items-center gap-2">
                        Options
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    
                    <div x-show="open" x-cloak x-transition class="absolute mt-2 w-56 bg-white dark:bg-gray-800 rounded-lg shadow-lg border border-gray-200 dark:border-gray-700 py-1 z-10">
                        <a href="#" class="flex items-center gap-3 px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
                            </svg>
                            Edit
                        </a>
                        <a href="#" class="flex items-center gap-3 px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                            </svg>
                            Duplicate
                        </a>
                        <a href="#" class="flex items-center gap-3 px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"></path>
                            </svg>
                            Share
                        </a>
                        <hr class="my-1 border-gray-200 dark:border-gray-700">
                        <a href="#" class="flex items-center gap-3 px-4 py-2 text-sm text-red-600 hover:bg-gray-100 dark:hover:bg-gray-700">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                            </svg>
                            Delete
                        </a>
                    </div>
                </div>
            </div>
        @endslot
    @endcomponent

    <!-- Floating Action Button (FAB) -->
    @component('showcase::components.showcase-item', [
        'title' => 'Floating Action Button (FAB)',
        'description' => 'Fixed position button for primary actions',
        'code' => '<button class="fixed bottom-6 right-6 w-14 h-14 bg-blue-600 text-white rounded-full shadow-lg hover:bg-blue-700 hover:shadow-xl transition-all flex items-center justify-center z-50">
    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
    </svg>
</button>'
    ])
        @slot('preview')
            <div class="relative h-64 bg-gray-100 dark:bg-gray-900 rounded-lg overflow-hidden">
                <p class="p-4 text-gray-600 dark:text-gray-400">Scroll down to see the FAB in the bottom right corner</p>
                
                <!-- Simple FAB -->
                <button class="absolute bottom-6 right-6 w-14 h-14 bg-blue-600 text-white rounded-full shadow-lg hover:bg-blue-700 hover:shadow-xl transition-all flex items-center justify-center">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                    </svg>
                </button>

                <!-- FAB with Label -->
                <button class="absolute bottom-24 right-6 bg-green-600 text-white px-4 py-3 rounded-full shadow-lg hover:bg-green-700 hover:shadow-xl transition-all flex items-center gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
                    </svg>
                    <span class="text-sm font-medium">New Post</span>
                </button>

                <!-- FAB Menu -->
                <div x-data="{ open: false }" class="absolute bottom-6 left-6">
                    <!-- Main FAB -->
                    <button @click="open = !open" class="w-14 h-14 bg-purple-600 text-white rounded-full shadow-lg hover:bg-purple-700 hover:shadow-xl transition-all flex items-center justify-center relative z-10">
                        <svg class="w-6 h-6 transition-transform" :class="open ? 'rotate-45' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                        </svg>
                    </button>
                    
                    <!-- Speed Dial Menu -->
                    <div x-show="open" x-cloak x-transition class="absolute bottom-16 left-0 flex flex-col gap-3">
                        <button class="w-12 h-12 bg-white dark:bg-gray-700 text-gray-700 dark:text-white rounded-full shadow-lg hover:shadow-xl transition-all flex items-center justify-center">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                        </button>
                        <button class="w-12 h-12 bg-white dark:bg-gray-700 text-gray-700 dark:text-white rounded-full shadow-lg hover:shadow-xl transition-all flex items-center justify-center">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                            </svg>
                        </button>
                        <button class="w-12 h-12 bg-white dark:bg-gray-700 text-gray-700 dark:text-white rounded-full shadow-lg hover:shadow-xl transition-all flex items-center justify-center">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        @endslot
    @endcomponent

    <!-- Link Button -->
    @component('showcase::components.showcase-item', [
        'title' => 'Link Button',
        'description' => 'Button styled as link with hover effects',
        'code' => '<button class="text-blue-600 dark:text-blue-400 hover:text-blue-700 dark:hover:text-blue-300 hover:underline transition">
    Link Button
</button>'
    ])
        @slot('preview')
            <div class="flex gap-6 flex-wrap items-center">
                <!-- Basic Link Button -->
                <button class="text-blue-600 dark:text-blue-400 hover:text-blue-700 dark:hover:text-blue-300 hover:underline transition">
                    Basic Link
                </button>

                <!-- Link with Icon Left -->
                <button class="flex items-center gap-2 text-blue-600 dark:text-blue-400 hover:text-blue-700 dark:hover:text-blue-300 hover:underline transition">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                    </svg>
                    Back
                </button>

                <!-- Link with Icon Right -->
                <button class="flex items-center gap-2 text-blue-600 dark:text-blue-400 hover:text-blue-700 dark:hover:text-blue-300 hover:underline transition">
                    Learn More
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg>
                </button>

                <!-- Danger Link -->
                <button class="text-red-600 dark:text-red-400 hover:text-red-700 dark:hover:text-red-300 hover:underline transition">
                    Delete Account
                </button>

                <!-- Success Link -->
                <button class="text-green-600 dark:text-green-400 hover:text-green-700 dark:hover:text-green-300 hover:underline transition">
                    Confirm Action
                </button>

                <!-- Muted Link -->
                <button class="text-gray-600 dark:text-gray-400 hover:text-gray-800 dark:hover:text-gray-200 hover:underline transition">
                    View Details
                </button>

                <!-- Link with External Icon -->
                <button class="flex items-center gap-1 text-blue-600 dark:text-blue-400 hover:text-blue-700 dark:hover:text-blue-300 hover:underline transition">
                    External Link
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                    </svg>
                </button>

                <!-- Link Button with Background on Hover -->
                <button class="px-3 py-1.5 text-blue-600 dark:text-blue-400 hover:bg-blue-50 dark:hover:bg-blue-900/20 rounded-lg transition">
                    Download
                </button>
            </div>
        @endslot
    @endcomponent

</div>
@endsection
