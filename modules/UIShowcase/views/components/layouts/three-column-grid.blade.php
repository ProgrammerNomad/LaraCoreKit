@extends('showcase::components.component-layout')

@section('demo')
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
@endsection

@section('code')
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
@endsection
