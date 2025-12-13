@extends('showcase::layouts.showcase')

@section('page-title', 'Layout Components')
@section('page-description', 'Cards, containers, grids, and layout patterns')

@section('content')
<div class="max-w-7xl mx-auto space-y-8">

    <!-- Basic Card -->
    @component('showcase::components.showcase-item', [
        'title' => 'Basic Card',
        'description' => 'Simple card with shadow',
        'code' => '<div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6">
    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Card Title</h3>
    <p class="text-gray-600 dark:text-gray-400">This is a basic card component with some content inside.</p>
</div>'
    ])
        @slot('preview')
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Card Title</h3>
                <p class="text-gray-600 dark:text-gray-400">This is a basic card component with some content inside.</p>
            </div>
        @endslot
    @endcomponent

    <!-- Card with Header and Footer -->
    @component('showcase::components.showcase-item', [
        'title' => 'Card with Header & Footer',
        'description' => 'Card with distinct sections',
        'code' => '<div class="bg-white dark:bg-gray-800 rounded-lg shadow overflow-hidden">
    <div class="bg-gray-50 dark:bg-gray-700 px-6 py-4 border-b border-gray-200 dark:border-gray-600">
        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Card Header</h3>
    </div>
    <div class="px-6 py-4">
        <p class="text-gray-600 dark:text-gray-400">Main content of the card goes here. This section can contain any content you need.</p>
    </div>
    <div class="bg-gray-50 dark:bg-gray-700 px-6 py-4 border-t border-gray-200 dark:border-gray-600">
        <div class="flex justify-end space-x-2">
            <button class="px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-200 dark:hover:bg-gray-600 rounded">Cancel</button>
            <button class="px-4 py-2 text-sm bg-blue-600 text-white rounded hover:bg-blue-700">Save</button>
        </div>
    </div>
</div>'
    ])
        @slot('preview')
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow overflow-hidden">
                <div class="bg-gray-50 dark:bg-gray-700 px-6 py-4 border-b border-gray-200 dark:border-gray-600">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Card Header</h3>
                </div>
                <div class="px-6 py-4">
                    <p class="text-gray-600 dark:text-gray-400">Main content of the card goes here. This section can contain any content you need.</p>
                </div>
                <div class="bg-gray-50 dark:bg-gray-700 px-6 py-4 border-t border-gray-200 dark:border-gray-600">
                    <div class="flex justify-end space-x-2">
                        <button class="px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-200 dark:hover:bg-gray-600 rounded">Cancel</button>
                        <button class="px-4 py-2 text-sm bg-blue-600 text-white rounded hover:bg-blue-700">Save</button>
                    </div>
                </div>
            </div>
        @endslot
    @endcomponent

    <!-- Card with Image -->
    @component('showcase::components.showcase-item', [
        'title' => 'Card with Image',
        'description' => 'Card featuring an image header',
        'code' => '<div class="bg-white dark:bg-gray-800 rounded-lg shadow overflow-hidden max-w-sm">
    <div class="h-48 bg-gradient-to-r from-blue-500 to-purple-600"></div>
    <div class="p-6">
        <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Featured Card</h3>
        <p class="text-gray-600 dark:text-gray-400 mb-4">Beautiful card with image header and action buttons.</p>
        <button class="w-full px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Learn More</button>
    </div>
</div>'
    ])
        @slot('preview')
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow overflow-hidden max-w-sm">
                <div class="h-48 bg-gradient-to-r from-blue-500 to-purple-600"></div>
                <div class="p-6">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Featured Card</h3>
                    <p class="text-gray-600 dark:text-gray-400 mb-4">Beautiful card with image header and action buttons.</p>
                    <button class="w-full px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Learn More</button>
                </div>
            </div>
        @endslot
    @endcomponent

    <!-- Two Column Grid -->
    @component('showcase::components.showcase-item', [
        'title' => 'Two Column Grid',
        'description' => 'Responsive two-column layout',
        'code' => '<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
    <div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6">
        <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Column 1</h3>
        <p class="text-gray-600 dark:text-gray-400">First column content</p>
    </div>
    <div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6">
        <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Column 2</h3>
        <p class="text-gray-600 dark:text-gray-400">Second column content</p>
    </div>
</div>'
    ])
        @slot('preview')
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Column 1</h3>
                    <p class="text-gray-600 dark:text-gray-400">First column content</p>
                </div>
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Column 2</h3>
                    <p class="text-gray-600 dark:text-gray-400">Second column content</p>
                </div>
            </div>
        @endslot
    @endcomponent

    <!-- Three Column Grid -->
    @component('showcase::components.showcase-item', [
        'title' => 'Three Column Grid',
        'description' => 'Responsive three-column layout',
        'code' => '<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    <div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6">
        <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Column 1</h3>
        <p class="text-gray-600 dark:text-gray-400">First column</p>
    </div>
    <div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6">
        <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Column 2</h3>
        <p class="text-gray-600 dark:text-gray-400">Second column</p>
    </div>
    <div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6">
        <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Column 3</h3>
        <p class="text-gray-600 dark:text-gray-400">Third column</p>
    </div>
</div>'
    ])
        @slot('preview')
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Column 1</h3>
                    <p class="text-gray-600 dark:text-gray-400">First column</p>
                </div>
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Column 2</h3>
                    <p class="text-gray-600 dark:text-gray-400">Second column</p>
                </div>
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Column 3</h3>
                    <p class="text-gray-600 dark:text-gray-400">Third column</p>
                </div>
            </div>
        @endslot
    @endcomponent

    <!-- Container with Max Width -->
    @component('showcase::components.showcase-item', [
        'title' => 'Container (Max Width)',
        'description' => 'Centered container with maximum width',
        'code' => '<div class="max-w-4xl mx-auto bg-white dark:bg-gray-800 rounded-lg shadow p-6">
    <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Contained Content</h2>
    <p class="text-gray-600 dark:text-gray-400">This content is centered and has a maximum width of 4xl (896px).</p>
</div>'
    ])
        @slot('preview')
            <div class="max-w-4xl mx-auto bg-white dark:bg-gray-800 rounded-lg shadow p-6">
                <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Contained Content</h2>
                <p class="text-gray-600 dark:text-gray-400">This content is centered and has a maximum width of 4xl (896px).</p>
            </div>
        @endslot
    @endcomponent

    <!-- Sidebar Layout -->
    @component('showcase::components.showcase-item', [
        'title' => 'Sidebar Layout',
        'description' => 'Main content with sidebar',
        'code' => '<div class="grid grid-cols-1 lg:grid-cols-4 gap-6">
    <aside class="lg:col-span-1 bg-white dark:bg-gray-800 rounded-lg shadow p-6">
        <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Sidebar</h3>
        <nav class="space-y-2">
            <a href="#" class="block px-3 py-2 rounded text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700">Link 1</a>
            <a href="#" class="block px-3 py-2 rounded text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700">Link 2</a>
            <a href="#" class="block px-3 py-2 rounded text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700">Link 3</a>
        </nav>
    </aside>
    <main class="lg:col-span-3 bg-white dark:bg-gray-800 rounded-lg shadow p-6">
        <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Main Content</h2>
        <p class="text-gray-600 dark:text-gray-400">This is the main content area next to the sidebar.</p>
    </main>
</div>'
    ])
        @slot('preview')
            <div class="grid grid-cols-1 lg:grid-cols-4 gap-6">
                <aside class="lg:col-span-1 bg-white dark:bg-gray-800 rounded-lg shadow p-6">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Sidebar</h3>
                    <nav class="space-y-2">
                        <a href="#" class="block px-3 py-2 rounded text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700">Link 1</a>
                        <a href="#" class="block px-3 py-2 rounded text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700">Link 2</a>
                        <a href="#" class="block px-3 py-2 rounded text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700">Link 3</a>
                    </nav>
                </aside>
                <main class="lg:col-span-3 bg-white dark:bg-gray-800 rounded-lg shadow p-6">
                    <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Main Content</h2>
                    <p class="text-gray-600 dark:text-gray-400">This is the main content area next to the sidebar.</p>
                </main>
            </div>
        @endslot
    @endcomponent

    <!-- Split Panel -->
    @component('showcase::components.showcase-item', [
        'title' => 'Split Panel',
        'description' => 'Equal split layout',
        'code' => '<div class="grid grid-cols-1 md:grid-cols-2 gap-0 rounded-lg overflow-hidden shadow">
    <div class="bg-gradient-to-br from-blue-500 to-blue-700 p-8 text-white">
        <h3 class="text-2xl font-bold mb-4">Left Panel</h3>
        <p>This could be an image or feature showcase.</p>
    </div>
    <div class="bg-white dark:bg-gray-800 p-8">
        <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Right Panel</h3>
        <p class="text-gray-600 dark:text-gray-400">Content or form goes here.</p>
    </div>
</div>'
    ])
        @slot('preview')
            <div class="grid grid-cols-1 md:grid-cols-2 gap-0 rounded-lg overflow-hidden shadow">
                <div class="bg-gradient-to-br from-blue-500 to-blue-700 p-8 text-white">
                    <h3 class="text-2xl font-bold mb-4">Left Panel</h3>
                    <p>This could be an image or feature showcase.</p>
                </div>
                <div class="bg-white dark:bg-gray-800 p-8">
                    <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Right Panel</h3>
                    <p class="text-gray-600 dark:text-gray-400">Content or form goes here.</p>
                </div>
            </div>
        @endslot
    @endcomponent

    <!-- Stats Grid -->
    @component('showcase::components.showcase-item', [
        'title' => 'Stats Grid',
        'description' => 'Statistics display grid',
        'code' => '<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
    <div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6">
        <div class="text-sm font-medium text-gray-500 dark:text-gray-400">Total Users</div>
        <div class="mt-2 flex items-baseline">
            <div class="text-3xl font-bold text-gray-900 dark:text-white">1,234</div>
            <div class="ml-2 text-sm text-green-600">+12%</div>
        </div>
    </div>
    <div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6">
        <div class="text-sm font-medium text-gray-500 dark:text-gray-400">Revenue</div>
        <div class="mt-2 flex items-baseline">
            <div class="text-3xl font-bold text-gray-900 dark:text-white">$45.6K</div>
            <div class="ml-2 text-sm text-green-600">+8%</div>
        </div>
    </div>
    <div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6">
        <div class="text-sm font-medium text-gray-500 dark:text-gray-400">Orders</div>
        <div class="mt-2 flex items-baseline">
            <div class="text-3xl font-bold text-gray-900 dark:text-white">892</div>
            <div class="ml-2 text-sm text-red-600">-3%</div>
        </div>
    </div>
    <div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6">
        <div class="text-sm font-medium text-gray-500 dark:text-gray-400">Conversion</div>
        <div class="mt-2 flex items-baseline">
            <div class="text-3xl font-bold text-gray-900 dark:text-white">3.2%</div>
            <div class="ml-2 text-sm text-green-600">+0.5%</div>
        </div>
    </div>
</div>'
    ])
        @slot('preview')
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6">
                    <div class="text-sm font-medium text-gray-500 dark:text-gray-400">Total Users</div>
                    <div class="mt-2 flex items-baseline">
                        <div class="text-3xl font-bold text-gray-900 dark:text-white">1,234</div>
                        <div class="ml-2 text-sm text-green-600">+12%</div>
                    </div>
                </div>
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6">
                    <div class="text-sm font-medium text-gray-500 dark:text-gray-400">Revenue</div>
                    <div class="mt-2 flex items-baseline">
                        <div class="text-3xl font-bold text-gray-900 dark:text-white">$45.6K</div>
                        <div class="ml-2 text-sm text-green-600">+8%</div>
                    </div>
                </div>
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6">
                    <div class="text-sm font-medium text-gray-500 dark:text-gray-400">Orders</div>
                    <div class="mt-2 flex items-baseline">
                        <div class="text-3xl font-bold text-gray-900 dark:text-white">892</div>
                        <div class="ml-2 text-sm text-red-600">-3%</div>
                    </div>
                </div>
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6">
                    <div class="text-sm font-medium text-gray-500 dark:text-gray-400">Conversion</div>
                    <div class="mt-2 flex items-baseline">
                        <div class="text-3xl font-bold text-gray-900 dark:text-white">3.2%</div>
                        <div class="ml-2 text-sm text-green-600">+0.5%</div>
                    </div>
                </div>
            </div>
        @endslot
    @endcomponent

    <!-- Hero Section -->
    @component('showcase::components.showcase-item', [
        'title' => 'Hero Section',
        'description' => 'Landing page hero layout',
        'code' => '<div class="bg-gradient-to-r from-blue-600 to-purple-600 rounded-lg shadow-xl p-12 text-center text-white">
    <h1 class="text-4xl md:text-5xl font-bold mb-4">Welcome to Our Platform</h1>
    <p class="text-xl mb-8 text-blue-100">Build amazing things with our powerful tools and components</p>
    <div class="flex justify-center space-x-4">
        <button class="px-8 py-3 bg-white text-blue-600 rounded-lg font-semibold hover:bg-blue-50">Get Started</button>
        <button class="px-8 py-3 bg-blue-700 text-white rounded-lg font-semibold hover:bg-blue-800">Learn More</button>
    </div>
</div>'
    ])
        @slot('preview')
            <div class="bg-gradient-to-r from-blue-600 to-purple-600 rounded-lg shadow-xl p-12 text-center text-white">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Welcome to Our Platform</h1>
                <p class="text-xl mb-8 text-blue-100">Build amazing things with our powerful tools and components</p>
                <div class="flex justify-center space-x-4">
                    <button class="px-8 py-3 bg-white text-blue-600 rounded-lg font-semibold hover:bg-blue-50">Get Started</button>
                    <button class="px-8 py-3 bg-blue-700 text-white rounded-lg font-semibold hover:bg-blue-800">Learn More</button>
                </div>
            </div>
        @endslot
    @endcomponent

    <!-- List with Dividers -->
    @component('showcase::components.showcase-item', [
        'title' => 'List with Dividers',
        'description' => 'Vertical list with separators',
        'code' => '<div class="bg-white dark:bg-gray-800 rounded-lg shadow divide-y divide-gray-200 dark:divide-gray-700">
    <div class="px-6 py-4 hover:bg-gray-50 dark:hover:bg-gray-700">
        <h3 class="text-sm font-medium text-gray-900 dark:text-white">List Item 1</h3>
        <p class="text-sm text-gray-500 dark:text-gray-400">Description for item 1</p>
    </div>
    <div class="px-6 py-4 hover:bg-gray-50 dark:hover:bg-gray-700">
        <h3 class="text-sm font-medium text-gray-900 dark:text-white">List Item 2</h3>
        <p class="text-sm text-gray-500 dark:text-gray-400">Description for item 2</p>
    </div>
    <div class="px-6 py-4 hover:bg-gray-50 dark:hover:bg-gray-700">
        <h3 class="text-sm font-medium text-gray-900 dark:text-white">List Item 3</h3>
        <p class="text-sm text-gray-500 dark:text-gray-400">Description for item 3</p>
    </div>
</div>'
    ])
        @slot('preview')
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow divide-y divide-gray-200 dark:divide-gray-700">
                <div class="px-6 py-4 hover:bg-gray-50 dark:hover:bg-gray-700">
                    <h3 class="text-sm font-medium text-gray-900 dark:text-white">List Item 1</h3>
                    <p class="text-sm text-gray-500 dark:text-gray-400">Description for item 1</p>
                </div>
                <div class="px-6 py-4 hover:bg-gray-50 dark:hover:bg-gray-700">
                    <h3 class="text-sm font-medium text-gray-900 dark:text-white">List Item 2</h3>
                    <p class="text-sm text-gray-500 dark:text-gray-400">Description for item 2</p>
                </div>
                <div class="px-6 py-4 hover:bg-gray-50 dark:hover:bg-gray-700">
                    <h3 class="text-sm font-medium text-gray-900 dark:text-white">List Item 3</h3>
                    <p class="text-sm text-gray-500 dark:text-gray-400">Description for item 3</p>
                </div>
            </div>
        @endslot
    @endcomponent

    <!-- Accordion Panel -->
    @component('showcase::components.showcase-item', [
        'title' => 'Accordion Panel',
        'description' => 'Expandable content sections',
        'code' => '<div x-data="{ open: 1 }" class="bg-white dark:bg-gray-800 rounded-lg shadow divide-y divide-gray-200 dark:divide-gray-700">
    <div class="px-6 py-4">
        <button @click="open = open === 1 ? 0 : 1" class="flex justify-between items-center w-full text-left">
            <span class="font-medium text-gray-900 dark:text-white">Section 1</span>
            <svg :class="open === 1 ? \'rotate-180\' : \'\'" class="w-5 h-5 transform transition-transform" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
            </svg>
        </button>
        <div x-show="open === 1" class="mt-2 text-gray-600 dark:text-gray-400">Content for section 1</div>
    </div>
    <div class="px-6 py-4">
        <button @click="open = open === 2 ? 0 : 2" class="flex justify-between items-center w-full text-left">
            <span class="font-medium text-gray-900 dark:text-white">Section 2</span>
            <svg :class="open === 2 ? \'rotate-180\' : \'\'" class="w-5 h-5 transform transition-transform" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
            </svg>
        </button>
        <div x-show="open === 2" class="mt-2 text-gray-600 dark:text-gray-400">Content for section 2</div>
    </div>
</div>'
    ])
        @slot('preview')
            <div x-data="{ open: 1 }" class="bg-white dark:bg-gray-800 rounded-lg shadow divide-y divide-gray-200 dark:divide-gray-700">
                <div class="px-6 py-4">
                    <button @click="open = open === 1 ? 0 : 1" class="flex justify-between items-center w-full text-left">
                        <span class="font-medium text-gray-900 dark:text-white">Section 1</span>
                        <svg :class="open === 1 ? 'rotate-180' : ''" class="w-5 h-5 transform transition-transform" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <div x-show="open === 1" class="mt-2 text-gray-600 dark:text-gray-400">Content for section 1</div>
                </div>
                <div class="px-6 py-4">
                    <button @click="open = open === 2 ? 0 : 2" class="flex justify-between items-center w-full text-left">
                        <span class="font-medium text-gray-900 dark:text-white">Section 2</span>
                        <svg :class="open === 2 ? 'rotate-180' : ''" class="w-5 h-5 transform transition-transform" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <div x-show="open === 2" class="mt-2 text-gray-600 dark:text-gray-400">Content for section 2</div>
                </div>
            </div>
        @endslot
    @endcomponent

</div>
@endsection
