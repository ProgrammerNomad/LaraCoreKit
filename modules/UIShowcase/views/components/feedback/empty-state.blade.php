@extends('showcase::components.component-layout')

@section('demo')
<div class="bg-white dark:bg-gray-800 rounded-lg shadow p-12 text-center">
    <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path>
    </svg>
    <h3 class="mt-2 text-sm font-medium text-gray-900 dark:text-white">No data</h3>
    <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">Get started by creating a new item.</p>
    <div class="mt-6">
        <button class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
            Create New
        </button>
    </div>
</div>
@endsection

@section('code')
<div class="bg-white dark:bg-gray-800 rounded-lg shadow p-12 text-center">
    <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path>
    </svg>
    <h3 class="mt-2 text-sm font-medium text-gray-900 dark:text-white">No data</h3>
    <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">Get started by creating a new item.</p>
    <div class="mt-6">
        <button class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">Create New</button>
    </div>
</div>
@endsection
