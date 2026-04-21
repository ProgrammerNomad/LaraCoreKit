@extends('showcase::components.component-layout')

@section('demo')
<div class="bg-green-50 dark:bg-green-900/20 border border-green-200 dark:border-green-800 rounded-lg p-4">
    <div class="flex">
        <svg class="w-5 h-5 text-green-600 dark:text-green-400 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
        </svg>
        <div class="ml-3">
            <h3 class="text-sm font-medium text-green-800 dark:text-green-300">Success</h3>
            <p class="mt-1 text-sm text-green-700 dark:text-green-400">Your action was completed successfully.</p>
        </div>
    </div>
</div>
@endsection

@section('code')
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
@endsection
