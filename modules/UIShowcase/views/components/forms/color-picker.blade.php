@extends('showcase::components.component-layout')

@section('component-title', 'Color Picker')
@section('component-description', 'Color selection input with hex value display using Alpine.js.')

@section('demo')
<div class="max-w-md">
    <div x-data="{ color: '#3B82F6' }">
        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
            Brand Color
        </label>
        <div class="flex gap-3">
            <input x-model="color" type="color" class="w-16 h-10 rounded border-2 border-gray-300 dark:border-gray-600 cursor-pointer">
            <input x-model="color" type="text" class="flex-1 px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 bg-white dark:bg-gray-700 text-gray-900 dark:text-white">
        </div>
    </div>
</div>
@endsection

@section('code')
<div x-data="{ color: '#3B82F6' }">
    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
        Brand Color
    </label>
    <div class="flex gap-3">
        <input x-model="color" type="color" class="w-16 h-10 rounded border-2 border-gray-300 dark:border-gray-600 cursor-pointer">
        <input x-model="color" type="text" class="flex-1 px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 bg-white dark:bg-gray-700 text-gray-900 dark:text-white">
    </div>
</div>
@endsection
