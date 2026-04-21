@extends('showcase::components.component-layout')

@section('component-title', 'Multi-Select')
@section('component-description', 'Select multiple options from a dropdown using Alpine.js.')

@section('demo')
<div class="max-w-md">
    <div x-data="{ open: false, selected: ['JavaScript', 'Python'], options: ['JavaScript', 'Python', 'PHP', 'Ruby', 'Go', 'Rust'] }">
        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
            Programming Languages
        </label>
        <div class="relative">
            <button @click="open = !open" type="button" class="w-full px-4 py-2 text-left border border-gray-300 dark:border-gray-600 rounded-lg bg-white dark:bg-gray-700 focus:ring-2 focus:ring-blue-500">
                <div class="flex flex-wrap gap-1">
                    <template x-for="item in selected" :key="item">
                        <span class="inline-flex items-center px-2 py-0.5 rounded text-xs bg-blue-100 dark:bg-blue-900/30 text-blue-800 dark:text-blue-300">
                            <span x-text="item"></span>
                            <button @click.stop="selected = selected.filter(i => i !== item)" class="ml-1">×</button>
                        </span>
                    </template>
                    <span x-show="selected.length === 0" class="text-gray-500 dark:text-gray-400">Select languages...</span>
                </div>
            </button>
            <div x-show="open" @click.away="open = false" class="absolute z-10 w-full mt-1 bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-600 rounded-lg shadow-lg max-h-60 overflow-auto">
                <template x-for="option in options" :key="option">
                    <label class="flex items-center px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-700 cursor-pointer">
                        <input type="checkbox" 
                               :checked="selected.includes(option)"
                               @change="selected.includes(option) ? selected = selected.filter(i => i !== option) : selected.push(option)"
                               class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                        <span class="ml-2 text-sm text-gray-900 dark:text-white" x-text="option"></span>
                    </label>
                </template>
            </div>
        </div>
    </div>
</div>
@endsection

@section('code')
<div x-data="{ open: false, selected: ['JavaScript', 'Python'], options: ['JavaScript', 'Python', 'PHP', 'Ruby', 'Go', 'Rust'] }">
    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
        Programming Languages
    </label>
    <div class="relative">
        <button @click="open = !open" type="button" class="w-full px-4 py-2 text-left border border-gray-300 dark:border-gray-600 rounded-lg bg-white dark:bg-gray-700 focus:ring-2 focus:ring-blue-500">
            <div class="flex flex-wrap gap-1">
                <template x-for="item in selected" :key="item">
                    <span class="inline-flex items-center px-2 py-0.5 rounded text-xs bg-blue-100 dark:bg-blue-900/30 text-blue-800 dark:text-blue-300">
                        <span x-text="item"></span>
                        <button @click.stop="selected = selected.filter(i => i !== item)" class="ml-1">×</button>
                    </span>
                </template>
                <span x-show="selected.length === 0" class="text-gray-500 dark:text-gray-400">Select languages...</span>
            </div>
        </button>
        <div x-show="open" @click.away="open = false" class="absolute z-10 w-full mt-1 bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-600 rounded-lg shadow-lg max-h-60 overflow-auto">
            <template x-for="option in options" :key="option">
                <label class="flex items-center px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-700 cursor-pointer">
                    <input type="checkbox" 
                           :checked="selected.includes(option)"
                           @change="selected.includes(option) ? selected = selected.filter(i => i !== option) : selected.push(option)"
                           class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                    <span class="ml-2 text-sm text-gray-900 dark:text-white" x-text="option"></span>
                </label>
            </template>
        </div>
    </div>
</div>
@endsection
