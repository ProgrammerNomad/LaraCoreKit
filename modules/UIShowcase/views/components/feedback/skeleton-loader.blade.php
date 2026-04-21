@extends('showcase::components.component-layout')

@section('demo')
<div class="space-y-4">
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
</div>
@endsection

@section('code')
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
@endsection
