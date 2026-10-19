@extends('showcase::components.component-layout')

@section('demo')
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
@endsection

@section('code')
<div class="bg-white dark:bg-gray-800 rounded-lg shadow overflow-hidden">
    <div class="bg-gray-50 dark:bg-gray-700 px-6 py-4 border-b border-gray-200 dark:border-gray-600">
        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Card Header</h3>
    </div>
    <div class="px-6 py-4">
        <p class="text-gray-600 dark:text-gray-400">Main content of the card goes here.</p>
    </div>
    <div class="bg-gray-50 dark:bg-gray-700 px-6 py-4 border-t border-gray-200 dark:border-gray-600">
        <div class="flex justify-end space-x-2">
            <button class="px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-200 dark:hover:bg-gray-600 rounded">Cancel</button>
            <button class="px-4 py-2 text-sm bg-blue-600 text-white rounded hover:bg-blue-700">Save</button>
        </div>
    </div>
</div>
@endsection
