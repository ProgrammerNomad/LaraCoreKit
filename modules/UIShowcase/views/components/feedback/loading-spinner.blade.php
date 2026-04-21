@extends('showcase::components.component-layout')

@section('demo')
<div class="space-y-4">
    <h4 class="text-sm font-medium text-gray-700 dark:text-gray-300">Spinner Sizes</h4>
    <div class="flex space-x-4 items-center">
        <div class="w-6 h-6 border-4 border-blue-600 border-t-transparent rounded-full animate-spin"></div>
        <div class="w-8 h-8 border-4 border-green-600 border-t-transparent rounded-full animate-spin"></div>
        <div class="w-10 h-10 border-4 border-purple-600 border-t-transparent rounded-full animate-spin"></div>
        <div class="w-12 h-12 border-4 border-red-600 border-t-transparent rounded-full animate-spin"></div>
    </div>
    <h4 class="text-sm font-medium text-gray-700 dark:text-gray-300 mt-4">With Label</h4>
    <div class="flex items-center space-x-3">
        <div class="w-8 h-8 border-4 border-blue-600 border-t-transparent rounded-full animate-spin"></div>
        <span class="text-gray-600 dark:text-gray-400">Loading, please wait...</span>
    </div>
</div>
@endsection

@section('code')
<div class="flex space-x-4">
    <div class="w-8 h-8 border-4 border-blue-600 border-t-transparent rounded-full animate-spin"></div>
    <div class="w-10 h-10 border-4 border-green-600 border-t-transparent rounded-full animate-spin"></div>
    <div class="w-12 h-12 border-4 border-purple-600 border-t-transparent rounded-full animate-spin"></div>
</div>
@endsection
