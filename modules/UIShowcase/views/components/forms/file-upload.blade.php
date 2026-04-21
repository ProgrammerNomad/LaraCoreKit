@extends('showcase::components.component-layout')

@section('component-title', 'File Upload')
@section('component-description', 'File input field with custom styling for file selection.')

@section('demo')
<div class="max-w-md">
    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
        Upload File
    </label>
    <input type="file" 
           class="block w-full text-sm text-gray-500 dark:text-gray-400 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-medium file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100 dark:file:bg-blue-900/20 dark:file:text-blue-400 dark:hover:file:bg-blue-900/30">
</div>
@endsection

@section('code')
<div>
    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
        Upload File
    </label>
    <input type="file" 
           class="block w-full text-sm text-gray-500 dark:text-gray-400 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-medium file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100 dark:file:bg-blue-900/20 dark:file:text-blue-400 dark:hover:file:bg-blue-900/30">
</div>
@endsection
