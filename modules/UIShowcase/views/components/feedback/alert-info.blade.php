@extends('showcase::components.component-layout')

@section('demo')
<div class="bg-blue-50 dark:bg-blue-900/20 border border-blue-200 dark:border-blue-800 rounded-lg p-4">
    <div class="flex">
        <svg class="w-5 h-5 text-blue-600 dark:text-blue-400 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
        </svg>
        <div class="ml-3">
            <h3 class="text-sm font-medium text-blue-800 dark:text-blue-300">Information</h3>
            <p class="mt-1 text-sm text-blue-700 dark:text-blue-400">This is an informational message.</p>
        </div>
    </div>
</div>
@endsection

@section('code')
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
@endsection
