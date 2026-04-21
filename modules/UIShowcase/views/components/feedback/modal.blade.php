@extends('showcase::components.component-layout')

@section('demo')
<div x-data="{ open: false }">
    <button @click="open = true" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
        Open Modal
    </button>
    <div x-show="open" class="fixed inset-0 z-50 overflow-y-auto" x-cloak>
        <div class="flex items-center justify-center min-h-screen px-4">
            <div @click="open = false" class="fixed inset-0 bg-black opacity-50"></div>
            <div class="relative bg-white dark:bg-gray-800 rounded-lg max-w-md w-full p-6 shadow-xl">
                <h3 class="text-lg font-medium text-gray-900 dark:text-white mb-4">Modal Title</h3>
                <p class="text-gray-600 dark:text-gray-400 mb-6">This is the modal content. You can put any content here including forms, images, and more.</p>
                <div class="flex justify-end space-x-2">
                    <button @click="open = false" class="px-4 py-2 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 rounded">Cancel</button>
                    <button @click="open = false" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Confirm</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('code')
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
@endsection
