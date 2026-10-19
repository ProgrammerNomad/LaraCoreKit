@extends('showcase::components.component-layout')

@section('component-title', 'Button Group')
@section('component-description', 'Multiple buttons grouped together')

@section('demo')
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
@endsection

@section('code')
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
@endsection
