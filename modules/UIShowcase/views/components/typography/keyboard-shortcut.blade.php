@extends('showcase::components.component-layout')

@section('component-title', 'Keyboard Shortcut')
@section('component-description', 'Display keyboard shortcuts')

@section('demo')
<p class="text-gray-700 dark:text-gray-300">
    Press <kbd class="px-2 py-1.5 text-xs font-semibold text-gray-800 dark:text-gray-200 bg-gray-100 dark:bg-gray-700 border border-gray-300 dark:border-gray-600 rounded shadow-sm">Ctrl</kbd> 
    + <kbd class="px-2 py-1.5 text-xs font-semibold text-gray-800 dark:text-gray-200 bg-gray-100 dark:bg-gray-700 border border-gray-300 dark:border-gray-600 rounded shadow-sm">K</kbd> 
    to open command palette
</p>
@endsection

@section('code')
<p class="text-gray-700 dark:text-gray-300">
    Press <kbd class="px-2 py-1.5 text-xs font-semibold text-gray-800 dark:text-gray-200 bg-gray-100 dark:bg-gray-700 border border-gray-300 dark:border-gray-600 rounded shadow-sm">Ctrl</kbd> 
    + <kbd class="px-2 py-1.5 text-xs font-semibold text-gray-800 dark:text-gray-200 bg-gray-100 dark:bg-gray-700 border border-gray-300 dark:border-gray-600 rounded shadow-sm">K</kbd> 
    to open command palette
</p>
@endsection
