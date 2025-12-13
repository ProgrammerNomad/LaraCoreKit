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

</div>
@endsection
