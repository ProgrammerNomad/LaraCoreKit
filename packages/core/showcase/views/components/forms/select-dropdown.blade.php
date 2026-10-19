@extends('showcase::components.component-layout')

@section('component-title', 'Select Dropdown')
@section('component-description', 'Standard select input for choosing one option from a list.')

@section('demo')
<div class="max-w-md">
    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
        Country
    </label>
    <select class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent bg-white dark:bg-gray-700 text-gray-900 dark:text-white">
        <option>Select a country</option>
        <option>United States</option>
        <option>United Kingdom</option>
        <option>Canada</option>
        <option>Australia</option>
    </select>
</div>
@endsection

@section('code')
<div>
    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
        Country
    </label>
    <select class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent bg-white dark:bg-gray-700 text-gray-900 dark:text-white">
        <option>Select a country</option>
        <option>United States</option>
        <option>United Kingdom</option>
        <option>Canada</option>
        <option>Australia</option>
    </select>
</div>
@endsection
