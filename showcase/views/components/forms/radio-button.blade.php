@extends('showcase::components.component-layout')

@section('component-title', 'Radio Buttons')
@section('component-description', 'Radio buttons for single selection from multiple options.')

@section('demo')
<div class="max-w-md">
    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-3">
        Shipping Method
    </label>
    <div class="space-y-2">
        <div class="flex items-center">
            <input type="radio" name="shipping" id="standard" class="w-4 h-4 text-blue-600 border-gray-300 focus:ring-blue-500">
            <label for="standard" class="ml-2 text-sm text-gray-700 dark:text-gray-300">Standard (5-7 days)</label>
        </div>
        <div class="flex items-center">
            <input type="radio" name="shipping" id="express" class="w-4 h-4 text-blue-600 border-gray-300 focus:ring-blue-500">
            <label for="express" class="ml-2 text-sm text-gray-700 dark:text-gray-300">Express (2-3 days)</label>
        </div>
        <div class="flex items-center">
            <input type="radio" name="shipping" id="overnight" class="w-4 h-4 text-blue-600 border-gray-300 focus:ring-blue-500">
            <label for="overnight" class="ml-2 text-sm text-gray-700 dark:text-gray-300">Overnight</label>
        </div>
    </div>
</div>
@endsection

@section('code')
<div>
    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-3">
        Shipping Method
    </label>
    <div class="space-y-2">
        <div class="flex items-center">
            <input type="radio" name="shipping" id="standard" class="w-4 h-4 text-blue-600 border-gray-300 focus:ring-blue-500">
            <label for="standard" class="ml-2 text-sm text-gray-700 dark:text-gray-300">Standard (5-7 days)</label>
        </div>
        <div class="flex items-center">
            <input type="radio" name="shipping" id="express" class="w-4 h-4 text-blue-600 border-gray-300 focus:ring-blue-500">
            <label for="express" class="ml-2 text-sm text-gray-700 dark:text-gray-300">Express (2-3 days)</label>
        </div>
        <div class="flex items-center">
            <input type="radio" name="shipping" id="overnight" class="w-4 h-4 text-blue-600 border-gray-300 focus:ring-blue-500">
            <label for="overnight" class="ml-2 text-sm text-gray-700 dark:text-gray-300">Overnight</label>
        </div>
    </div>
</div>
@endsection
