@extends('showcase::layouts.showcase')

@section('page-title', 'Feedback Components')
@section('page-description', 'Alerts, modals, toasts, and user feedback elements')

@section('content')
<div class="max-w-7xl mx-auto space-y-8">

    <!-- Alert - Info -->
    @component('showcase::components.showcase-item', [
        'title' => 'Alert - Info',
        'description' => 'Informational alert message',
        'code' => '<div class="bg-blue-50 dark:bg-blue-900/20 border border-blue-200 dark:border-blue-800 rounded-lg p-4">
    <div class="flex">
        <svg class="w-5 h-5 text-blue-600 dark:text-blue-400" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
        </svg>
        <div class="ml-3">
            <h3 class="text-sm font-medium text-blue-800 dark:text-blue-300">Information</h3>
            <p class="mt-1 text-sm text-blue-700 dark:text-blue-400">This is an informational message.</p>
        </div>
    </div>
</div>'
    ])
        @slot('preview')
            <div class="bg-blue-50 dark:bg-blue-900/20 border border-blue-200 dark:border-blue-800 rounded-lg p-4">
                <div class="flex">
                    <svg class="w-5 h-5 text-blue-600 dark:text-blue-400" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
                    </svg>
                    <div class="ml-3">
                        <h3 class="text-sm font-medium text-blue-800 dark:text-blue-300">Information</h3>
                        <p class="mt-1 text-sm text-blue-700 dark:text-blue-400">This is an informational message.</p>
                    </div>
                </div>
            </div>
        @endslot
    @endcomponent

    <!-- Alert - Success -->
    @component('showcase::components.showcase-item', [
        'title' => 'Alert - Success',
        'description' => 'Success confirmation alert',
        'code' => '<div class="bg-green-50 dark:bg-green-900/20 border border-green-200 dark:border-green-800 rounded-lg p-4">
    <div class="flex">
        <svg class="w-5 h-5 text-green-600 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
        </svg>
        <div class="ml-3">
            <h3 class="text-sm font-medium text-green-800 dark:text-green-300">Success</h3>
            <p class="mt-1 text-sm text-green-700 dark:text-green-400">Your action was completed successfully.</p>
        </div>
    </div>
</div>'
    ])
        @slot('preview')
            <div class="bg-green-50 dark:bg-green-900/20 border border-green-200 dark:border-green-800 rounded-lg p-4">
                <div class="flex">
                    <svg class="w-5 h-5 text-green-600 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                    </svg>
                    <div class="ml-3">
                        <h3 class="text-sm font-medium text-green-800 dark:text-green-300">Success</h3>
                        <p class="mt-1 text-sm text-green-700 dark:text-green-400">Your action was completed successfully.</p>
                    </div>
                </div>
            </div>
        @endslot
    @endcomponent

    <!-- Alert - Warning -->
    @component('showcase::components.showcase-item', [
        'title' => 'Alert - Warning',
        'description' => 'Warning alert message',
        'code' => '<div class="bg-yellow-50 dark:bg-yellow-900/20 border border-yellow-200 dark:border-yellow-800 rounded-lg p-4">
    <div class="flex">
        <svg class="w-5 h-5 text-yellow-600 dark:text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path>
        </svg>
        <div class="ml-3">
            <h3 class="text-sm font-medium text-yellow-800 dark:text-yellow-300">Warning</h3>
            <p class="mt-1 text-sm text-yellow-700 dark:text-yellow-400">Please review this important information.</p>
        </div>
    </div>
</div>'
    ])
        @slot('preview')
            <div class="bg-yellow-50 dark:bg-yellow-900/20 border border-yellow-200 dark:border-yellow-800 rounded-lg p-4">
                <div class="flex">
                    <svg class="w-5 h-5 text-yellow-600 dark:text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                    </svg>
                    <div class="ml-3">
                        <h3 class="text-sm font-medium text-yellow-800 dark:text-yellow-300">Warning</h3>
                        <p class="mt-1 text-sm text-yellow-700 dark:text-yellow-400">Please review this important information.</p>
                    </div>
                </div>
            </div>
        @endslot
    @endcomponent

    <!-- Alert - Error -->
    @component('showcase::components.showcase-item', [
        'title' => 'Alert - Error',
        'description' => 'Error alert message',
        'code' => '<div class="bg-red-50 dark:bg-red-900/20 border border-red-200 dark:border-red-800 rounded-lg p-4">
    <div class="flex">
        <svg class="w-5 h-5 text-red-600 dark:text-red-400" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"></path>
        </svg>
        <div class="ml-3">
            <h3 class="text-sm font-medium text-red-800 dark:text-red-300">Error</h3>
            <p class="mt-1 text-sm text-red-700 dark:text-red-400">An error occurred while processing your request.</p>
        </div>
    </div>
</div>'
    ])
        @slot('preview')
            <div class="bg-red-50 dark:bg-red-900/20 border border-red-200 dark:border-red-800 rounded-lg p-4">
                <div class="flex">
                    <svg class="w-5 h-5 text-red-600 dark:text-red-400" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"></path>
                    </svg>
                    <div class="ml-3">
                        <h3 class="text-sm font-medium text-red-800 dark:text-red-300">Error</h3>
                        <p class="mt-1 text-sm text-red-700 dark:text-red-400">An error occurred while processing your request.</p>
                    </div>
                </div>
            </div>
        @endslot
    @endcomponent

    <!-- Alert with Dismiss -->
    @component('showcase::components.showcase-item', [
        'title' => 'Alert with Dismiss',
        'description' => 'Closeable alert message',
        'code' => '<div x-data="{ show: true }" x-show="show" class="bg-blue-50 dark:bg-blue-900/20 border border-blue-200 dark:border-blue-800 rounded-lg p-4">
    <div class="flex justify-between items-start">
        <div class="flex">
            <svg class="w-5 h-5 text-blue-600 dark:text-blue-400" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
            </svg>
            <div class="ml-3">
                <p class="text-sm text-blue-700 dark:text-blue-400">You can dismiss this message.</p>
            </div>
        </div>
        <button @click="show = false" class="text-blue-600 dark:text-blue-400 hover:text-blue-800 dark:hover:text-blue-300">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
            </svg>
        </button>
    </div>
</div>'
    ])
        @slot('preview')
            <div x-data="{ show: true }" x-show="show" class="bg-blue-50 dark:bg-blue-900/20 border border-blue-200 dark:border-blue-800 rounded-lg p-4">
                <div class="flex justify-between items-start">
                    <div class="flex">
                        <svg class="w-5 h-5 text-blue-600 dark:text-blue-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
                        </svg>
                        <div class="ml-3">
                            <p class="text-sm text-blue-700 dark:text-blue-400">You can dismiss this message.</p>
                        </div>
                    </div>
                    <button @click="show = false" class="text-blue-600 dark:text-blue-400 hover:text-blue-800 dark:hover:text-blue-300">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
            </div>
        @endslot
    @endcomponent

    <!-- Modal -->
    @component('showcase::components.showcase-item', [
        'title' => 'Modal',
        'description' => 'Dialog overlay window',
        'code' => '<div x-data="{ open: false }">
    <button @click="open = true" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
        Open Modal
    </button>
    <div x-show="open" class="fixed inset-0 z-50 overflow-y-auto" x-cloak>
        <div class="flex items-center justify-center min-h-screen px-4">
            <div @click="open = false" class="fixed inset-0 bg-black opacity-50"></div>
            <div class="relative bg-white dark:bg-gray-800 rounded-lg max-w-md w-full p-6">
                <h3 class="text-lg font-medium text-gray-900 dark:text-white mb-4">Modal Title</h3>
                <p class="text-gray-600 dark:text-gray-400 mb-6">This is the modal content.</p>
                <div class="flex justify-end space-x-2">
                    <button @click="open = false" class="px-4 py-2 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 rounded">Cancel</button>
                    <button @click="open = false" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Confirm</button>
                </div>
            </div>
        </div>
    </div>
</div>'
    ])
        @slot('preview')
            <div x-data="{ open: false }">
                <button @click="open = true" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
                    Open Modal
                </button>
                <div x-show="open" class="fixed inset-0 z-50 overflow-y-auto" x-cloak>
                    <div class="flex items-center justify-center min-h-screen px-4">
                        <div @click="open = false" class="fixed inset-0 bg-black opacity-50"></div>
                        <div class="relative bg-white dark:bg-gray-800 rounded-lg max-w-md w-full p-6">
                            <h3 class="text-lg font-medium text-gray-900 dark:text-white mb-4">Modal Title</h3>
                            <p class="text-gray-600 dark:text-gray-400 mb-6">This is the modal content.</p>
                            <div class="flex justify-end space-x-2">
                                <button @click="open = false" class="px-4 py-2 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 rounded">Cancel</button>
                                <button @click="open = false" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Confirm</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endslot
    @endcomponent

    <!-- Toast Notification -->
    @component('showcase::components.showcase-item', [
        'title' => 'Toast Notification',
        'description' => 'Temporary notification message',
        'code' => '<div x-data="{ show: false, message: \'Changes saved successfully!\' }">
    <button @click="show = true; setTimeout(() => show = false, 3000)" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
        Show Toast
    </button>
    <div x-show="show" 
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0 transform translate-y-2"
         x-transition:enter-end="opacity-100 transform translate-y-0"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         class="fixed bottom-4 right-4 bg-green-500 text-white px-6 py-3 rounded-lg shadow-lg">
        <div class="flex items-center">
            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
            </svg>
            <span x-text="message"></span>
        </div>
    </div>
</div>'
    ])
        @slot('preview')
            <div x-data="{ show: false, message: 'Changes saved successfully!' }">
                <button @click="show = true; setTimeout(() => show = false, 3000)" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
                    Show Toast
                </button>
                <div x-show="show" 
                     x-transition:enter="transition ease-out duration-300"
                     x-transition:enter-start="opacity-0 transform translate-y-2"
                     x-transition:enter-end="opacity-100 transform translate-y-0"
                     x-transition:leave="transition ease-in duration-200"
                     x-transition:leave-start="opacity-100"
                     x-transition:leave-end="opacity-0"
                     class="fixed bottom-4 right-4 bg-green-500 text-white px-6 py-3 rounded-lg shadow-lg z-50">
                    <div class="flex items-center">
                        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span x-text="message"></span>
                    </div>
                </div>
            </div>
        @endslot
    @endcomponent

    <!-- Spinner -->
    @component('showcase::components.showcase-item', [
        'title' => 'Loading Spinner',
        'description' => 'Animated loading indicator',
        'code' => '<div class="flex space-x-4">
    <div class="w-8 h-8 border-4 border-blue-600 border-t-transparent rounded-full animate-spin"></div>
    <div class="w-10 h-10 border-4 border-green-600 border-t-transparent rounded-full animate-spin"></div>
    <div class="w-12 h-12 border-4 border-purple-600 border-t-transparent rounded-full animate-spin"></div>
</div>'
    ])
        @slot('preview')
            <div class="flex space-x-4">
                <div class="w-8 h-8 border-4 border-blue-600 border-t-transparent rounded-full animate-spin"></div>
                <div class="w-10 h-10 border-4 border-green-600 border-t-transparent rounded-full animate-spin"></div>
                <div class="w-12 h-12 border-4 border-purple-600 border-t-transparent rounded-full animate-spin"></div>
            </div>
        @endslot
    @endcomponent

    <!-- Skeleton Loader -->
    @component('showcase::components.showcase-item', [
        'title' => 'Skeleton Loader',
        'description' => 'Content placeholder while loading',
        'code' => '<div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6 space-y-4 animate-pulse">
    <div class="h-4 bg-gray-200 dark:bg-gray-700 rounded w-3/4"></div>
    <div class="h-4 bg-gray-200 dark:bg-gray-700 rounded"></div>
    <div class="h-4 bg-gray-200 dark:bg-gray-700 rounded w-5/6"></div>
    <div class="flex space-x-4 mt-4">
        <div class="h-10 w-10 bg-gray-200 dark:bg-gray-700 rounded-full"></div>
        <div class="flex-1 space-y-2">
            <div class="h-4 bg-gray-200 dark:bg-gray-700 rounded w-1/2"></div>
            <div class="h-3 bg-gray-200 dark:bg-gray-700 rounded w-3/4"></div>
        </div>
    </div>
</div>'
    ])
        @slot('preview')
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6 space-y-4 animate-pulse">
                <div class="h-4 bg-gray-200 dark:bg-gray-700 rounded w-3/4"></div>
                <div class="h-4 bg-gray-200 dark:bg-gray-700 rounded"></div>
                <div class="h-4 bg-gray-200 dark:bg-gray-700 rounded w-5/6"></div>
                <div class="flex space-x-4 mt-4">
                    <div class="h-10 w-10 bg-gray-200 dark:bg-gray-700 rounded-full"></div>
                    <div class="flex-1 space-y-2">
                        <div class="h-4 bg-gray-200 dark:bg-gray-700 rounded w-1/2"></div>
                        <div class="h-3 bg-gray-200 dark:bg-gray-700 rounded w-3/4"></div>
                    </div>
                </div>
            </div>
        @endslot
    @endcomponent

    <!-- Confirmation Dialog -->
    @component('showcase::components.showcase-item', [
        'title' => 'Confirmation Dialog',
        'description' => 'Confirm destructive actions',
        'code' => '<div x-data="{ open: false }">
    <button @click="open = true" class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700">
        Delete Item
    </button>
    <div x-show="open" class="fixed inset-0 z-50 overflow-y-auto" x-cloak>
        <div class="flex items-center justify-center min-h-screen px-4">
            <div @click="open = false" class="fixed inset-0 bg-black opacity-50"></div>
            <div class="relative bg-white dark:bg-gray-800 rounded-lg max-w-md w-full p-6">
                <div class="flex items-center mb-4">
                    <div class="flex-shrink-0 w-12 h-12 rounded-full bg-red-100 dark:bg-red-900/30 flex items-center justify-center">
                        <svg class="w-6 h-6 text-red-600 dark:text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
                        </svg>
                    </div>
                    <div class="ml-4">
                        <h3 class="text-lg font-medium text-gray-900 dark:text-white">Delete Item</h3>
                        <p class="text-sm text-gray-500 dark:text-gray-400 mt-1">Are you sure you want to delete this item? This action cannot be undone.</p>
                    </div>
                </div>
                <div class="flex justify-end space-x-2 mt-6">
                    <button @click="open = false" class="px-4 py-2 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 rounded">Cancel</button>
                    <button @click="open = false" class="px-4 py-2 bg-red-600 text-white rounded hover:bg-red-700">Delete</button>
                </div>
            </div>
        </div>
    </div>
</div>'
    ])
        @slot('preview')
            <div x-data="{ open: false }">
                <button @click="open = true" class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700">
                    Delete Item
                </button>
                <div x-show="open" class="fixed inset-0 z-50 overflow-y-auto" x-cloak>
                    <div class="flex items-center justify-center min-h-screen px-4">
                        <div @click="open = false" class="fixed inset-0 bg-black opacity-50"></div>
                        <div class="relative bg-white dark:bg-gray-800 rounded-lg max-w-md w-full p-6">
                            <div class="flex items-center mb-4">
                                <div class="flex-shrink-0 w-12 h-12 rounded-full bg-red-100 dark:bg-red-900/30 flex items-center justify-center">
                                    <svg class="w-6 h-6 text-red-600 dark:text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
                                    </svg>
                                </div>
                                <div class="ml-4">
                                    <h3 class="text-lg font-medium text-gray-900 dark:text-white">Delete Item</h3>
                                    <p class="text-sm text-gray-500 dark:text-gray-400 mt-1">Are you sure you want to delete this item? This action cannot be undone.</p>
                                </div>
                            </div>
                            <div class="flex justify-end space-x-2 mt-6">
                                <button @click="open = false" class="px-4 py-2 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 rounded">Cancel</button>
                                <button @click="open = false" class="px-4 py-2 bg-red-600 text-white rounded hover:bg-red-700">Delete</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endslot
    @endcomponent

    <!-- Slide-over Drawer (Right) -->
    @component('showcase::components.showcase-item', [
        'title' => 'Slide-over Drawer (Right)',
        'description' => 'Panel that slides in from the right side',
        'code' => '<div x-data="{ open: false }">
    <button &#64;click="open = true" class="px-4 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700">
        Open Drawer
    </button>
    <div x-show="open" class="fixed inset-0 z-50 overflow-hidden" x-cloak>
        <div &#64;click="open = false" class="absolute inset-0 bg-black bg-opacity-50"></div>
        <div class="absolute inset-y-0 right-0 max-w-md w-full bg-white dark:bg-gray-800 shadow-xl"
             x-show="open"
             x-transition:enter="transform transition ease-in-out duration-300"
             x-transition:enter-start="translate-x-full"
             x-transition:enter-end="translate-x-0"
             x-transition:leave="transform transition ease-in-out duration-300"
             x-transition:leave-start="translate-x-0"
             x-transition:leave-end="translate-x-full">
            <div class="h-full flex flex-col">
                <div class="px-6 py-4 bg-gray-50 dark:bg-gray-900 border-b border-gray-200 dark:border-gray-700">
                    <div class="flex items-center justify-between">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Drawer Title</h3>
                        <button &#64;click="open = false" class="text-gray-400 hover:text-gray-500">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="flex-1 overflow-y-auto p-6">
                    <p class="text-gray-600 dark:text-gray-400">Drawer content goes here. This panel slides in from the right side of the screen.</p>
                </div>
                <div class="px-6 py-4 bg-gray-50 dark:bg-gray-900 border-t border-gray-200 dark:border-gray-700">
                    <div class="flex justify-end space-x-2">
                        <button &#64;click="open = false" class="px-4 py-2 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 rounded">Cancel</button>
                        <button class="px-4 py-2 bg-indigo-600 text-white rounded hover:bg-indigo-700">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>'
    ])
        @slot('preview')
            <div x-data="{ open: false }">
                <button @click="open = true" class="px-4 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700">
                    Open Drawer
                </button>
                <div x-show="open" class="fixed inset-0 z-50 overflow-hidden" x-cloak>
                    <div @click="open = false" class="absolute inset-0 bg-black bg-opacity-50"></div>
                    <div class="absolute inset-y-0 right-0 max-w-md w-full bg-white dark:bg-gray-800 shadow-xl"
                         x-show="open"
                         x-transition:enter="transform transition ease-in-out duration-300"
                         x-transition:enter-start="translate-x-full"
                         x-transition:enter-end="translate-x-0"
                         x-transition:leave="transform transition ease-in-out duration-300"
                         x-transition:leave-start="translate-x-0"
                         x-transition:leave-end="translate-x-full">
                        <div class="h-full flex flex-col">
                            <div class="px-6 py-4 bg-gray-50 dark:bg-gray-900 border-b border-gray-200 dark:border-gray-700">
                                <div class="flex items-center justify-between">
                                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Drawer Title</h3>
                                    <button @click="open = false" class="text-gray-400 hover:text-gray-500">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <div class="flex-1 overflow-y-auto p-6">
                                <p class="text-gray-600 dark:text-gray-400">Drawer content goes here. This panel slides in from the right side of the screen.</p>
                            </div>
                            <div class="px-6 py-4 bg-gray-50 dark:bg-gray-900 border-t border-gray-200 dark:border-gray-700">
                                <div class="flex justify-end space-x-2">
                                    <button @click="open = false" class="px-4 py-2 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 rounded">Cancel</button>
                                    <button class="px-4 py-2 bg-indigo-600 text-white rounded hover:bg-indigo-700">Save</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endslot
    @endcomponent

    <!-- Slide-over Drawer (Left) -->
    @component('showcase::components.showcase-item', [
        'title' => 'Slide-over Drawer (Left)',
        'description' => 'Panel that slides in from the left side',
        'code' => '<div x-data="{ open: false }">
    <button &#64;click="open = true" class="px-4 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700">
        Open Left Drawer
    </button>
    <div x-show="open" class="fixed inset-0 z-50 overflow-hidden" x-cloak>
        <div &#64;click="open = false" class="absolute inset-0 bg-black bg-opacity-50"></div>
        <div class="absolute inset-y-0 left-0 max-w-md w-full bg-white dark:bg-gray-800 shadow-xl"
             x-show="open"
             x-transition:enter="transform transition ease-in-out duration-300"
             x-transition:enter-start="-translate-x-full"
             x-transition:enter-end="translate-x-0"
             x-transition:leave="transform transition ease-in-out duration-300"
             x-transition:leave-start="translate-x-0"
             x-transition:leave-end="-translate-x-full">
            <div class="h-full flex flex-col p-6">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Navigation</h3>
                    <button &#64;click="open = false" class="text-gray-400 hover:text-gray-500">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
                <nav class="space-y-2">
                    <a href="#" class="block px-4 py-2 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 rounded">Dashboard</a>
                    <a href="#" class="block px-4 py-2 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 rounded">Projects</a>
                    <a href="#" class="block px-4 py-2 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 rounded">Team</a>
                    <a href="#" class="block px-4 py-2 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 rounded">Settings</a>
                </nav>
            </div>
        </div>
    </div>
</div>'
    ])
        @slot('preview')
            <div x-data="{ open: false }">
                <button @click="open = true" class="px-4 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700">
                    Open Left Drawer
                </button>
                <div x-show="open" class="fixed inset-0 z-50 overflow-hidden" x-cloak>
                    <div @click="open = false" class="absolute inset-0 bg-black bg-opacity-50"></div>
                    <div class="absolute inset-y-0 left-0 max-w-md w-full bg-white dark:bg-gray-800 shadow-xl"
                         x-show="open"
                         x-transition:enter="transform transition ease-in-out duration-300"
                         x-transition:enter-start="-translate-x-full"
                         x-transition:enter-end="translate-x-0"
                         x-transition:leave="transform transition ease-in-out duration-300"
                         x-transition:leave-start="translate-x-0"
                         x-transition:leave-end="-translate-x-full">
                        <div class="h-full flex flex-col p-6">
                            <div class="flex items-center justify-between mb-4">
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Navigation</h3>
                                <button @click="open = false" class="text-gray-400 hover:text-gray-500">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                    </svg>
                                </button>
                            </div>
                            <nav class="space-y-2">
                                <a href="#" class="block px-4 py-2 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 rounded">Dashboard</a>
                                <a href="#" class="block px-4 py-2 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 rounded">Projects</a>
                                <a href="#" class="block px-4 py-2 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 rounded">Team</a>
                                <a href="#" class="block px-4 py-2 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 rounded">Settings</a>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        @endslot
    @endcomponent

    <!-- Drawer (Bottom) -->
    @component('showcase::components.showcase-item', [
        'title' => 'Bottom Drawer',
        'description' => 'Panel that slides up from the bottom',
        'code' => '<div x-data="{ open: false }">
    <button &#64;click="open = true" class="px-4 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700">
        Open Bottom Drawer
    </button>
    <div x-show="open" class="fixed inset-0 z-50 overflow-hidden" x-cloak>
        <div &#64;click="open = false" class="absolute inset-0 bg-black bg-opacity-50"></div>
        <div class="absolute inset-x-0 bottom-0 bg-white dark:bg-gray-800 shadow-xl rounded-t-2xl"
             x-show="open"
             x-transition:enter="transform transition ease-in-out duration-300"
             x-transition:enter-start="translate-y-full"
             x-transition:enter-end="translate-y-0"
             x-transition:leave="transform transition ease-in-out duration-300"
             x-transition:leave-start="translate-y-0"
             x-transition:leave-end="translate-y-full">
            <div class="p-6">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Quick Actions</h3>
                    <button &#64;click="open = false" class="text-gray-400 hover:text-gray-500">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
                <div class="grid grid-cols-3 gap-4">
                    <button class="flex flex-col items-center p-4 hover:bg-gray-50 dark:hover:bg-gray-700 rounded-lg">
                        <svg class="w-8 h-8 text-blue-600 dark:text-blue-400 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        <span class="text-sm text-gray-700 dark:text-gray-300">Camera</span>
                    </button>
                    <button class="flex flex-col items-center p-4 hover:bg-gray-50 dark:hover:bg-gray-700 rounded-lg">
                        <svg class="w-8 h-8 text-green-600 dark:text-green-400 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                        <span class="text-sm text-gray-700 dark:text-gray-300">Gallery</span>
                    </button>
                    <button class="flex flex-col items-center p-4 hover:bg-gray-50 dark:hover:bg-gray-700 rounded-lg">
                        <svg class="w-8 h-8 text-purple-600 dark:text-purple-400 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                        <span class="text-sm text-gray-700 dark:text-gray-300">Document</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>'
    ])
        @slot('preview')
            <div x-data="{ open: false }">
                <button @click="open = true" class="px-4 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700">
                    Open Bottom Drawer
                </button>
                <div x-show="open" class="fixed inset-0 z-50 overflow-hidden" x-cloak>
                    <div @click="open = false" class="absolute inset-0 bg-black bg-opacity-50"></div>
                    <div class="absolute inset-x-0 bottom-0 bg-white dark:bg-gray-800 shadow-xl rounded-t-2xl"
                         x-show="open"
                         x-transition:enter="transform transition ease-in-out duration-300"
                         x-transition:enter-start="translate-y-full"
                         x-transition:enter-end="translate-y-0"
                         x-transition:leave="transform transition ease-in-out duration-300"
                         x-transition:leave-start="translate-y-0"
                         x-transition:leave-end="translate-y-full">
                        <div class="p-6">
                            <div class="flex items-center justify-between mb-4">
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Quick Actions</h3>
                                <button @click="open = false" class="text-gray-400 hover:text-gray-500">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                    </svg>
                                </button>
                            </div>
                            <div class="grid grid-cols-3 gap-4">
                                <button class="flex flex-col items-center p-4 hover:bg-gray-50 dark:hover:bg-gray-700 rounded-lg">
                                    <svg class="w-8 h-8 text-blue-600 dark:text-blue-400 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                    <span class="text-sm text-gray-700 dark:text-gray-300">Camera</span>
                                </button>
                                <button class="flex flex-col items-center p-4 hover:bg-gray-50 dark:hover:bg-gray-700 rounded-lg">
                                    <svg class="w-8 h-8 text-green-600 dark:text-green-400 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                    </svg>
                                    <span class="text-sm text-gray-700 dark:text-gray-300">Gallery</span>
                                </button>
                                <button class="flex flex-col items-center p-4 hover:bg-gray-50 dark:hover:bg-gray-700 rounded-lg">
                                    <svg class="w-8 h-8 text-purple-600 dark:text-purple-400 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                    </svg>
                                    <span class="text-sm text-gray-700 dark:text-gray-300">Document</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endslot
    @endcomponent

    <!-- Tooltip Component -->
    @component('showcase::components.showcase-item', [
        'title' => 'Tooltip',
        'description' => 'Hover tooltip with positioning',
        'code' => '<div x-data="{ show: false }" class="relative inline-block">
    <button &#64;mouseenter="show = true" &#64;mouseleave="show = false" class="px-4 py-2 bg-gray-200 dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded">
        Hover me
    </button>
    <div x-show="show" x-cloak class="absolute bottom-full left-1/2 transform -translate-x-1/2 mb-2 px-3 py-2 bg-gray-900 dark:bg-gray-700 text-white text-sm rounded whitespace-nowrap">
        This is a tooltip
        <div class="absolute top-full left-1/2 transform -translate-x-1/2 border-4 border-transparent border-t-gray-900 dark:border-t-gray-700"></div>
    </div>
</div>'
    ])
        @slot('preview')
            <div x-data="{ show: false }" class="relative inline-block">
                <button @mouseenter="show = true" @mouseleave="show = false" class="px-4 py-2 bg-gray-200 dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded">
                    Hover me
                </button>
                <div x-show="show" x-cloak class="absolute bottom-full left-1/2 transform -translate-x-1/2 mb-2 px-3 py-2 bg-gray-900 dark:bg-gray-700 text-white text-sm rounded whitespace-nowrap">
                    This is a tooltip
                    <div class="absolute top-full left-1/2 transform -translate-x-1/2 border-4 border-transparent border-t-gray-900 dark:border-t-gray-700"></div>
                </div>
            </div>
        @endslot
    @endcomponent

    <!-- Popover Component -->
    @component('showcase::components.showcase-item', [
        'title' => 'Popover',
        'description' => 'Click-triggered popover with content',
        'code' => '<div x-data="{ open: false }" &#64;click.away="open = false" class="relative inline-block">
    <button &#64;click="open = !open" class="px-4 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700">
        Open Popover
    </button>
    <div x-show="open" x-cloak class="absolute z-10 mt-2 w-64 bg-white dark:bg-gray-800 rounded-lg shadow-lg border border-gray-200 dark:border-gray-700"
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 scale-95"
         x-transition:enter-end="opacity-100 scale-100"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 scale-100"
         x-transition:leave-end="opacity-0 scale-95">
        <div class="p-4">
            <h4 class="text-sm font-semibold text-gray-900 dark:text-white mb-2">Popover Title</h4>
            <p class="text-sm text-gray-600 dark:text-gray-400">This is the popover content. Click outside to close.</p>
        </div>
    </div>
</div>'
    ])
        @slot('preview')
            <div x-data="{ open: false }" @click.away="open = false" class="relative inline-block">
                <button @click="open = !open" class="px-4 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700">
                    Open Popover
                </button>
                <div x-show="open" x-cloak class="absolute z-10 mt-2 w-64 bg-white dark:bg-gray-800 rounded-lg shadow-lg border border-gray-200 dark:border-gray-700"
                     x-transition:enter="transition ease-out duration-200"
                     x-transition:enter-start="opacity-0 scale-95"
                     x-transition:enter-end="opacity-100 scale-100"
                     x-transition:leave="transition ease-in duration-150"
                     x-transition:leave-start="opacity-100 scale-100"
                     x-transition:leave-end="opacity-0 scale-95">
                    <div class="p-4">
                        <h4 class="text-sm font-semibold text-gray-900 dark:text-white mb-2">Popover Title</h4>
                        <p class="text-sm text-gray-600 dark:text-gray-400">This is the popover content. Click outside to close.</p>
                    </div>
                </div>
            </div>
        @endslot
    @endcomponent

    <!-- Circular Progress -->
    @component('showcase::components.showcase-item', [
        'title' => 'Circular Progress Indicator',
        'description' => 'Animated circular progress bar',
        'code' => '<div x-data="{ progress: 75 }" class="flex items-center space-x-4">
    <div class="relative w-24 h-24">
        <svg class="transform -rotate-90 w-24 h-24">
            <circle cx="48" cy="48" r="40" stroke="currentColor" stroke-width="8" fill="none" class="text-gray-200 dark:text-gray-700"></circle>
            <circle cx="48" cy="48" r="40" stroke="currentColor" stroke-width="8" fill="none" class="text-indigo-600 dark:text-indigo-400"
                    :style="`stroke-dasharray: ${2 * Math.PI * 40}; stroke-dashoffset: ${2 * Math.PI * 40 * (1 - progress / 100)};`"
                    style="transition: stroke-dashoffset 0.5s ease;"></circle>
        </svg>
        <div class="absolute inset-0 flex items-center justify-center">
            <span class="text-xl font-semibold text-gray-900 dark:text-white" x-text="progress + \'%\'"></span>
        </div>
    </div>
    <div class="space-y-2">
        <button &#64;click="progress = Math.min(100, progress + 10)" class="px-3 py-1 bg-green-600 text-white text-sm rounded hover:bg-green-700">+10%</button>
        <button &#64;click="progress = Math.max(0, progress - 10)" class="px-3 py-1 bg-red-600 text-white text-sm rounded hover:bg-red-700">-10%</button>
    </div>
</div>'
    ])
        @slot('preview')
            <div x-data="{ progress: 75 }" class="flex items-center space-x-4">
                <div class="relative w-24 h-24">
                    <svg class="transform -rotate-90 w-24 h-24">
                        <circle cx="48" cy="48" r="40" stroke="currentColor" stroke-width="8" fill="none" class="text-gray-200 dark:text-gray-700"></circle>
                        <circle cx="48" cy="48" r="40" stroke="currentColor" stroke-width="8" fill="none" class="text-indigo-600 dark:text-indigo-400"
                                :style="`stroke-dasharray: ${2 * Math.PI * 40}; stroke-dashoffset: ${2 * Math.PI * 40 * (1 - progress / 100)};`"
                                style="transition: stroke-dashoffset 0.5s ease;"></circle>
                    </svg>
                    <div class="absolute inset-0 flex items-center justify-center">
                        <span class="text-xl font-semibold text-gray-900 dark:text-white" x-text="progress + '%'"></span>
                    </div>
                </div>
                <div class="space-y-2">
                    <button @click="progress = Math.min(100, progress + 10)" class="px-3 py-1 bg-green-600 text-white text-sm rounded hover:bg-green-700">+10%</button>
                    <button @click="progress = Math.max(0, progress - 10)" class="px-3 py-1 bg-red-600 text-white text-sm rounded hover:bg-red-700">-10%</button>
                </div>
            </div>
        @endslot
    @endcomponent

    <!-- Steps Indicator -->
    @component('showcase::components.showcase-item', [
        'title' => 'Steps Indicator',
        'description' => 'Multi-step progress indicator',
        'code' => '<div x-data="{ currentStep: 2 }">
    <div class="flex items-center justify-between">
        <template x-for="step in 4" :key="step">
            <div class="flex items-center">
                <div class="flex items-center justify-center w-10 h-10 rounded-full border-2 transition-all"
                     :class="step <= currentStep ? \'border-indigo-600 dark:border-indigo-400 bg-indigo-600 dark:bg-indigo-400 text-white\' : \'border-gray-300 dark:border-gray-600 text-gray-500 dark:text-gray-400\'">
                    <span x-text="step" class="text-sm font-semibold"></span>
                </div>
                <div x-show="step < 4" class="w-12 h-1 mx-2"
                     :class="step < currentStep ? \'bg-indigo-600 dark:bg-indigo-400\' : \'bg-gray-300 dark:bg-gray-600\'"></div>
            </div>
        </template>
    </div>
    <div class="flex justify-center mt-4 space-x-2">
        <button &#64;click="currentStep = Math.max(1, currentStep - 1)" class="px-3 py-1 bg-gray-600 text-white text-sm rounded hover:bg-gray-700">Previous</button>
        <button &#64;click="currentStep = Math.min(4, currentStep + 1)" class="px-3 py-1 bg-indigo-600 text-white text-sm rounded hover:bg-indigo-700">Next</button>
    </div>
</div>'
    ])
        @slot('preview')
            <div x-data="{ currentStep: 2 }">
                <div class="flex items-center justify-between">
                    <template x-for="step in 4" :key="step">
                        <div class="flex items-center">
                            <div class="flex items-center justify-center w-10 h-10 rounded-full border-2 transition-all"
                                 :class="step <= currentStep ? 'border-indigo-600 dark:border-indigo-400 bg-indigo-600 dark:bg-indigo-400 text-white' : 'border-gray-300 dark:border-gray-600 text-gray-500 dark:text-gray-400'">
                                <span x-text="step" class="text-sm font-semibold"></span>
                            </div>
                            <div x-show="step < 4" class="w-12 h-1 mx-2"
                                 :class="step < currentStep ? 'bg-indigo-600 dark:bg-indigo-400' : 'bg-gray-300 dark:bg-gray-600'"></div>
                        </div>
                    </template>
                </div>
                <div class="flex justify-center mt-4 space-x-2">
                    <button @click="currentStep = Math.max(1, currentStep - 1)" class="px-3 py-1 bg-gray-600 text-white text-sm rounded hover:bg-gray-700">Previous</button>
                    <button @click="currentStep = Math.min(4, currentStep + 1)" class="px-3 py-1 bg-indigo-600 text-white text-sm rounded hover:bg-indigo-700">Next</button>
                </div>
            </div>
        @endslot
    @endcomponent

    <!-- Banner Notification -->
    @component('showcase::components.showcase-item', [
        'title' => 'Banner Notification',
        'description' => 'Sticky top banner notification',
        'code' => '<div x-data="{ show: true }" x-show="show" x-cloak class="bg-indigo-600 dark:bg-indigo-700 text-white">
    <div class="max-w-7xl mx-auto px-4 py-3">
        <div class="flex items-center justify-between">
            <div class="flex items-center">
                <svg class="w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
                </svg>
                <p class="text-sm font-medium">New version available! Update now for the latest features.</p>
            </div>
            <button &#64;click="show = false" class="ml-4 text-white hover:text-gray-200">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>
    </div>
</div>'
    ])
        @slot('preview')
            <div x-data="{ show: true }" x-show="show" x-cloak class="bg-indigo-600 dark:bg-indigo-700 text-white">
                <div class="max-w-7xl mx-auto px-4 py-3">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <svg class="w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
                            </svg>
                            <p class="text-sm font-medium">New version available! Update now for the latest features.</p>
                        </div>
                        <button @click="show = false" class="ml-4 text-white hover:text-gray-200">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        @endslot
    @endcomponent

    <!-- Skeleton Card -->
    @component('showcase::components.showcase-item', [
        'title' => 'Skeleton Card',
        'description' => 'Loading placeholder for card content',
        'code' => '<div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6 space-y-4 animate-pulse">
    <div class="h-48 bg-gray-200 dark:bg-gray-700 rounded"></div>
    <div class="space-y-3">
        <div class="h-4 bg-gray-200 dark:bg-gray-700 rounded w-3/4"></div>
        <div class="h-4 bg-gray-200 dark:bg-gray-700 rounded"></div>
        <div class="h-4 bg-gray-200 dark:bg-gray-700 rounded w-5/6"></div>
    </div>
</div>'
    ])
        @slot('preview')
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6 space-y-4 animate-pulse">
                <div class="h-48 bg-gray-200 dark:bg-gray-700 rounded"></div>
                <div class="space-y-3">
                    <div class="h-4 bg-gray-200 dark:bg-gray-700 rounded w-3/4"></div>
                    <div class="h-4 bg-gray-200 dark:bg-gray-700 rounded"></div>
                    <div class="h-4 bg-gray-200 dark:bg-gray-700 rounded w-5/6"></div>
                </div>
            </div>
        @endslot
    @endcomponent

    <!-- Skeleton Table -->
    @component('showcase::components.showcase-item', [
        'title' => 'Skeleton Table',
        'description' => 'Loading placeholder for table data',
        'code' => '<div class="bg-white dark:bg-gray-800 rounded-lg shadow overflow-hidden animate-pulse">
    <div class="px-6 py-4 border-b border-gray-200 dark:border-gray-700">
        <div class="h-4 bg-gray-200 dark:bg-gray-700 rounded w-1/4"></div>
    </div>
    <div class="divide-y divide-gray-200 dark:divide-gray-700">
        <div class="px-6 py-4 flex space-x-4">
            <div class="h-4 bg-gray-200 dark:bg-gray-700 rounded flex-1"></div>
            <div class="h-4 bg-gray-200 dark:bg-gray-700 rounded flex-1"></div>
            <div class="h-4 bg-gray-200 dark:bg-gray-700 rounded flex-1"></div>
        </div>
        <div class="px-6 py-4 flex space-x-4">
            <div class="h-4 bg-gray-200 dark:bg-gray-700 rounded flex-1"></div>
            <div class="h-4 bg-gray-200 dark:bg-gray-700 rounded flex-1"></div>
            <div class="h-4 bg-gray-200 dark:bg-gray-700 rounded flex-1"></div>
        </div>
        <div class="px-6 py-4 flex space-x-4">
            <div class="h-4 bg-gray-200 dark:bg-gray-700 rounded flex-1"></div>
            <div class="h-4 bg-gray-200 dark:bg-gray-700 rounded flex-1"></div>
            <div class="h-4 bg-gray-200 dark:bg-gray-700 rounded flex-1"></div>
        </div>
    </div>
</div>'
    ])
        @slot('preview')
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow overflow-hidden animate-pulse">
                <div class="px-6 py-4 border-b border-gray-200 dark:border-gray-700">
                    <div class="h-4 bg-gray-200 dark:bg-gray-700 rounded w-1/4"></div>
                </div>
                <div class="divide-y divide-gray-200 dark:divide-gray-700">
                    <div class="px-6 py-4 flex space-x-4">
                        <div class="h-4 bg-gray-200 dark:bg-gray-700 rounded flex-1"></div>
                        <div class="h-4 bg-gray-200 dark:bg-gray-700 rounded flex-1"></div>
                        <div class="h-4 bg-gray-200 dark:bg-gray-700 rounded flex-1"></div>
                    </div>
                    <div class="px-6 py-4 flex space-x-4">
                        <div class="h-4 bg-gray-200 dark:bg-gray-700 rounded flex-1"></div>
                        <div class="h-4 bg-gray-200 dark:bg-gray-700 rounded flex-1"></div>
                        <div class="h-4 bg-gray-200 dark:bg-gray-700 rounded flex-1"></div>
                    </div>
                    <div class="px-6 py-4 flex space-x-4">
                        <div class="h-4 bg-gray-200 dark:bg-gray-700 rounded flex-1"></div>
                        <div class="h-4 bg-gray-200 dark:bg-gray-700 rounded flex-1"></div>
                        <div class="h-4 bg-gray-200 dark:bg-gray-700 rounded flex-1"></div>
                    </div>
                </div>
            </div>
        @endslot
    @endcomponent

</div>
@endsection
