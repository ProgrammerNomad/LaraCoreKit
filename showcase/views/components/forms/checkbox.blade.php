@extends('showcase::components.component-layout')

@section('component-title', 'Checkbox')
@section('component-description', 'Single checkbox for boolean inputs with label.')

@section('demo')
<div class="max-w-md space-y-4">
    <div class="flex items-center">
        <input type="checkbox" id="agree" class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
        <label for="agree" class="ml-2 text-sm text-gray-700 dark:text-gray-300">
            I agree to the terms and conditions
        </label>
    </div>
    
    <div>
        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-3">
            Select your interests
        </label>
        <div class="space-y-2">
            <div class="flex items-center">
                <input type="checkbox" id="tech" class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                <label for="tech" class="ml-2 text-sm text-gray-700 dark:text-gray-300">Technology</label>
            </div>
            <div class="flex items-center">
                <input type="checkbox" id="design" class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                <label for="design" class="ml-2 text-sm text-gray-700 dark:text-gray-300">Design</label>
            </div>
            <div class="flex items-center">
                <input type="checkbox" id="business" class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                <label for="business" class="ml-2 text-sm text-gray-700 dark:text-gray-300">Business</label>
            </div>
        </div>
    </div>
</div>
@endsection

@section('code')
<!-- Single Checkbox -->
<div class="flex items-center">
    <input type="checkbox" id="agree" class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
    <label for="agree" class="ml-2 text-sm text-gray-700 dark:text-gray-300">
        I agree to the terms and conditions
    </label>
</div>

<!-- Checkbox Group -->
<div>
    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-3">
        Select your interests
    </label>
    <div class="space-y-2">
        <div class="flex items-center">
            <input type="checkbox" id="tech" class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
            <label for="tech" class="ml-2 text-sm text-gray-700 dark:text-gray-300">Technology</label>
        </div>
        <div class="flex items-center">
            <input type="checkbox" id="design" class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
            <label for="design" class="ml-2 text-sm text-gray-700 dark:text-gray-300">Design</label>
        </div>
        <div class="flex items-center">
            <input type="checkbox" id="business" class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
            <label for="business" class="ml-2 text-sm text-gray-700 dark:text-gray-300">Business</label>
        </div>
    </div>
</div>
@endsection
