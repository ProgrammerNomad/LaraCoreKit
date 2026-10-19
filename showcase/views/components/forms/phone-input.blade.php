@extends('showcase::components.component-layout')

@section('component-title', 'Phone Input')
@section('component-description', 'Phone number input with country code selector.')

@section('demo')
<div class="max-w-md">
    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
        Phone Number
    </label>
    <div class="flex gap-2">
        <select class="w-24 px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-lg bg-white dark:bg-gray-700 text-gray-900 dark:text-white">
            <option>🇺🇸 +1</option>
            <option>🇬🇧 +44</option>
            <option>🇮🇳 +91</option>
            <option>🇦🇺 +61</option>
        </select>
        <input type="tel" 
               placeholder="(555) 123-4567" 
               class="flex-1 px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent bg-white dark:bg-gray-700 text-gray-900 dark:text-white">
    </div>
</div>
@endsection

@section('code')
<div>
    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
        Phone Number
    </label>
    <div class="flex gap-2">
        <select class="w-24 px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-lg bg-white dark:bg-gray-700 text-gray-900 dark:text-white">
            <option>🇺🇸 +1</option>
            <option>🇬🇧 +44</option>
            <option>🇮🇳 +91</option>
            <option>🇦🇺 +61</option>
        </select>
        <input type="tel" 
               placeholder="(555) 123-4567" 
               class="flex-1 px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent bg-white dark:bg-gray-700 text-gray-900 dark:text-white">
    </div>
</div>
@endsection
