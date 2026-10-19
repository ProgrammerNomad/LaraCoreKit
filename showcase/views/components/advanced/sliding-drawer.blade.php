@extends('showcase::components.component-layout')

@section('demo')
<div x-data="{ 
    open: false,
    placement: 'right',
    transition: { enter: 'transform transition ease-in-out duration-300', enterFrom: '-translate-x-full', enterTo: 'translate-x-0', leave: 'transform transition ease-in-out duration-300', leaveFrom: 'translate-x-0', leaveTo: '-translate-x-full' }
}">
    <button @click="open = true" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">
        Open Drawer
    </button>

    <div x-show="open" class="fixed inset-0 z-50" x-cloak>
        <div @click="open = false" class="fixed inset-0 bg-black/50 backdrop-blur-sm" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"></div>
        
        <div class="fixed inset-y-0 left-0 w-80 bg-white dark:bg-gray-900 shadow-2xl flex flex-col"
             x-transition:enter="transform transition ease-in-out duration-300"
             x-transition:enter-start="-translate-x-full"
             x-transition:enter-end="translate-x-0"
             x-transition:leave="transform transition ease-in-out duration-300"
             x-transition:leave-start="translate-x-0"
             x-transition:leave-end="-translate-x-full">
            <div class="flex items-center justify-between p-6 border-b border-gray-200 dark:border-gray-700">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Drawer Title</h3>
                <button @click="open = false" class="text-gray-400 hover:text-gray-600 dark:hover:text-gray-200 transition">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                </button>
            </div>
            <div class="flex-1 p-6 overflow-y-auto">
                <p class="text-gray-600 dark:text-gray-400">Drawer content goes here. This is a left side drawer that slides in from the left edge of the screen.</p>
                <div class="mt-6 space-y-3">
                    <a href="#" class="block px-4 py-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-800 text-gray-700 dark:text-gray-300 transition">Menu Item 1</a>
                    <a href="#" class="block px-4 py-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-800 text-gray-700 dark:text-gray-300 transition">Menu Item 2</a>
                    <a href="#" class="block px-4 py-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-800 text-gray-700 dark:text-gray-300 transition">Menu Item 3</a>
                </div>
            </div>
            <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                <button @click="open = false" class="w-full py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">Close Drawer</button>
            </div>
        </div>
    </div>
</div>
@endsection

@section('code')
<div x-data="{ open: false }">
    <button @click="open = true" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">Open Drawer</button>

    <div x-show="open" class="fixed inset-0 z-50" x-cloak>
        <div @click="open = false" class="fixed inset-0 bg-black/50"></div>
        
        <div class="fixed inset-y-0 left-0 w-80 bg-white dark:bg-gray-900 shadow-2xl"
             x-transition:enter="transform transition ease-in-out duration-300"
             x-transition:enter-start="-translate-x-full"
             x-transition:enter-end="translate-x-0"
             x-transition:leave="transform transition ease-in-out duration-300"
             x-transition:leave-start="translate-x-0"
             x-transition:leave-end="-translate-x-full">
            <div class="p-6">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Drawer Title</h3>
                <p class="mt-2 text-gray-600 dark:text-gray-400">Drawer content</p>
            </div>
        </div>
    </div>
</div>
@endsection
