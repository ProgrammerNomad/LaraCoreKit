@extends('showcase::layouts.showcase')

@section('page-title', 'Drawers & Slide-over Panels')
@section('page-description', 'Drawer and slide-over panel components with different positions')

@section('content')
<div class="max-w-7xl mx-auto space-y-8">

    <!-- Drawer - Right -->
    @component('showcase::components.showcase-item', [
        'title' => 'Drawer - Right',
        'description' => 'Slide-over panel from the right side',
        'code' => '<div x-data="{ drawerOpen: false }">
    <button @click="drawerOpen = true" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
        Open Right Drawer
    </button>
    
    <!-- Drawer Overlay -->
    <div x-show="drawerOpen" x-cloak @click="drawerOpen = false" class="fixed inset-0 bg-black bg-opacity-50 z-40"></div>
    
    <!-- Drawer Panel -->
    <div x-show="drawerOpen" x-cloak x-transition:enter="transform transition ease-in-out duration-300" x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="transform transition ease-in-out duration-300" x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full" class="fixed right-0 top-0 h-full w-80 bg-white dark:bg-gray-800 shadow-xl z-50 flex flex-col">
        <div class="p-4 border-b border-gray-200 dark:border-gray-700 flex items-center justify-between">
            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Drawer Title</h3>
            <button @click="drawerOpen = false" class="text-gray-400 hover:text-gray-600 dark:hover:text-gray-200">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>
        <div class="flex-1 overflow-y-auto p-4">
            <p class="text-gray-600 dark:text-gray-400">Drawer content goes here...</p>
        </div>
    </div>
</div>'
    ])
        @slot('preview')
            <div x-data="{ drawerOpen: false }">
                <button @click="drawerOpen = true" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
                    Open Right Drawer
                </button>
                
                <!-- Drawer Overlay -->
                <div x-show="drawerOpen" x-cloak @click="drawerOpen = false" class="fixed inset-0 bg-black bg-opacity-50 z-40"></div>
                
                <!-- Drawer Panel -->
                <div x-show="drawerOpen" x-cloak x-transition:enter="transform transition ease-in-out duration-300" x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="transform transition ease-in-out duration-300" x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full" class="fixed right-0 top-0 h-full w-80 bg-white dark:bg-gray-800 shadow-xl z-50 flex flex-col">
                    <div class="p-4 border-b border-gray-200 dark:border-gray-700 flex items-center justify-between">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Drawer Title</h3>
                        <button @click="drawerOpen = false" class="text-gray-400 hover:text-gray-600 dark:hover:text-gray-200">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>
                    <div class="flex-1 overflow-y-auto p-4">
                        <h4 class="font-medium text-gray-900 dark:text-white mb-2">Drawer Content</h4>
                        <p class="text-sm text-gray-600 dark:text-gray-400 mb-4">This is a right drawer component. It slides in from the right side of the screen.</p>
                        
                        <div class="space-y-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Name</label>
                                <input type="text" class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:text-white">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Email</label>
                                <input type="email" class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:text-white">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Message</label>
                                <textarea rows="4" class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:text-white"></textarea>
                            </div>
                        </div>
                        
                        <div class="mt-6 flex gap-3">
                            <button class="flex-1 px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">Save</button>
                            <button @click="drawerOpen = false" class="flex-1 px-4 py-2 border border-gray-300 dark:border-gray-600 text-gray-700 dark:text-gray-300 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-700">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        @endslot
    @endcomponent

    <!-- Drawer - Left -->
    @component('showcase::components.showcase-item', [
        'title' => 'Drawer - Left',
        'description' => 'Slide-over panel from the left side',
        'code' => '<div x-data="{ drawerOpen: false }">
    <button @click="drawerOpen = true" class="px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700">
        Open Left Drawer
    </button>
    
    <div x-show="drawerOpen" x-cloak @click="drawerOpen = false" class="fixed inset-0 bg-black bg-opacity-50 z-40"></div>
    
    <div x-show="drawerOpen" x-cloak x-transition:enter="transform transition ease-in-out duration-300" x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="transform transition ease-in-out duration-300" x-transition:leave-start="translate-x-0" x-transition:leave-end="-translate-x-full" class="fixed left-0 top-0 h-full w-80 bg-white dark:bg-gray-800 shadow-xl z-50">
        <div class="p-4 border-b border-gray-200 dark:border-gray-700 flex items-center justify-between">
            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Navigation</h3>
            <button @click="drawerOpen = false">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>
        <div class="p-4">
            <nav class="space-y-2">
                <a href="#" class="block px-3 py-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">Dashboard</a>
                <a href="#" class="block px-3 py-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">Users</a>
                <a href="#" class="block px-3 py-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">Settings</a>
            </nav>
        </div>
    </div>
</div>'
    ])
        @slot('preview')
            <div x-data="{ drawerOpen: false }">
                <button @click="drawerOpen = true" class="px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700">
                    Open Left Drawer
                </button>
                
                <div x-show="drawerOpen" x-cloak @click="drawerOpen = false" class="fixed inset-0 bg-black bg-opacity-50 z-40"></div>
                
                <div x-show="drawerOpen" x-cloak x-transition:enter="transform transition ease-in-out duration-300" x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="transform transition ease-in-out duration-300" x-transition:leave-start="translate-x-0" x-transition:leave-end="-translate-x-full" class="fixed left-0 top-0 h-full w-80 bg-white dark:bg-gray-800 shadow-xl z-50 flex flex-col">
                    <div class="p-4 border-b border-gray-200 dark:border-gray-700 flex items-center justify-between">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Navigation Menu</h3>
                        <button @click="drawerOpen = false" class="text-gray-400 hover:text-gray-600 dark:hover:text-gray-200">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>
                    <div class="flex-1 overflow-y-auto p-4">
                        <nav class="space-y-1">
                            <a href="#" class="flex items-center gap-3 px-3 py-2 rounded-lg text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                                </svg>
                                Dashboard
                            </a>
                            <a href="#" class="flex items-center gap-3 px-3 py-2 rounded-lg text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                                </svg>
                                Users
                            </a>
                            <a href="#" class="flex items-center gap-3 px-3 py-2 rounded-lg text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                                Settings
                            </a>
                            <a href="#" class="flex items-center gap-3 px-3 py-2 rounded-lg text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                                </svg>
                                Analytics
                            </a>
                        </nav>
                    </div>
                </div>
            </div>
        @endslot
    @endcomponent

    <!-- Drawer - Bottom -->
    @component('showcase::components.showcase-item', [
        'title' => 'Drawer - Bottom',
        'description' => 'Slide-up panel from the bottom (mobile sheet)',
        'code' => '<div x-data="{ drawerOpen: false }">
    <button @click="drawerOpen = true" class="px-4 py-2 bg-purple-600 text-white rounded-lg hover:bg-purple-700">
        Open Bottom Drawer
    </button>
    
    <div x-show="drawerOpen" x-cloak @click="drawerOpen = false" class="fixed inset-0 bg-black bg-opacity-50 z-40"></div>
    
    <div x-show="drawerOpen" x-cloak x-transition:enter="transform transition ease-in-out duration-300" x-transition:enter-start="translate-y-full" x-transition:enter-end="translate-y-0" x-transition:leave="transform transition ease-in-out duration-300" x-transition:leave-start="translate-y-0" x-transition:leave-end="translate-y-full" class="fixed bottom-0 left-0 right-0 bg-white dark:bg-gray-800 rounded-t-2xl shadow-xl z-50 max-h-96">
        <div class="p-4">
            <div class="w-12 h-1 bg-gray-300 dark:bg-gray-600 rounded-full mx-auto mb-4"></div>
            <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Bottom Sheet</h3>
            <p class="text-gray-600 dark:text-gray-400">This is commonly used on mobile devices for actions and selections.</p>
        </div>
    </div>
</div>'
    ])
        @slot('preview')
            <div x-data="{ drawerOpen: false }">
                <button @click="drawerOpen = true" class="px-4 py-2 bg-purple-600 text-white rounded-lg hover:bg-purple-700">
                    Open Bottom Drawer
                </button>
                
                <div x-show="drawerOpen" x-cloak @click="drawerOpen = false" class="fixed inset-0 bg-black bg-opacity-50 z-40"></div>
                
                <div x-show="drawerOpen" x-cloak x-transition:enter="transform transition ease-in-out duration-300" x-transition:enter-start="translate-y-full" x-transition:enter-end="translate-y-0" x-transition:leave="transform transition ease-in-out duration-300" x-transition:leave-start="translate-y-0" x-transition:leave-end="translate-y-full" class="fixed bottom-0 left-0 right-0 bg-white dark:bg-gray-800 rounded-t-2xl shadow-xl z-50 max-h-96 overflow-y-auto">
                    <div class="p-6">
                        <!-- Handle -->
                        <div class="w-12 h-1 bg-gray-300 dark:bg-gray-600 rounded-full mx-auto mb-6"></div>
                        
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Bottom Sheet</h3>
                        <p class="text-sm text-gray-600 dark:text-gray-400 mb-6">This is commonly used on mobile devices for actions, filters, and selections.</p>
                        
                        <div class="space-y-3">
                            <button class="w-full px-4 py-3 text-left rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 flex items-center gap-3">
                                <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"></path>
                                </svg>
                                <span class="text-gray-900 dark:text-white">Share</span>
                            </button>
                            <button class="w-full px-4 py-3 text-left rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 flex items-center gap-3">
                                <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
                                </svg>
                                <span class="text-gray-900 dark:text-white">Download</span>
                            </button>
                            <button class="w-full px-4 py-3 text-left rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 flex items-center gap-3">
                                <svg class="w-5 h-5 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                                </svg>
                                <span class="text-gray-900 dark:text-white">Add to Favorites</span>
                            </button>
                            <button @click="drawerOpen = false" class="w-full px-4 py-3 text-left rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 flex items-center gap-3">
                                <svg class="w-5 h-5 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                </svg>
                                <span class="text-gray-900 dark:text-white">Cancel</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        @endslot
    @endcomponent

</div>
@endsection
