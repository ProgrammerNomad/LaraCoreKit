@extends('showcase::components.component-layout')

@section('demo')
<div x-data="{ open: 1 }" class="bg-white dark:bg-gray-800 rounded-lg shadow divide-y divide-gray-200 dark:divide-gray-700">
    <div class="px-6 py-4">
        <button @click="open = open === 1 ? 0 : 1" class="flex justify-between items-center w-full text-left">
            <span class="font-medium text-gray-900 dark:text-white">What is LaraCoreKit?</span>
            <svg :class="open === 1 ? 'rotate-180' : ''" class="w-5 h-5 transform transition-transform text-gray-500" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
            </svg>
        </button>
        <div x-show="open === 1" class="mt-2 text-gray-600 dark:text-gray-400 text-sm">LaraCoreKit is a premium Laravel starter kit with pre-built UI components.</div>
    </div>
    <div class="px-6 py-4">
        <button @click="open = open === 2 ? 0 : 2" class="flex justify-between items-center w-full text-left">
            <span class="font-medium text-gray-900 dark:text-white">How do I get started?</span>
            <svg :class="open === 2 ? 'rotate-180' : ''" class="w-5 h-5 transform transition-transform text-gray-500" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
            </svg>
        </button>
        <div x-show="open === 2" class="mt-2 text-gray-600 dark:text-gray-400 text-sm">Install via Composer and follow the quick-start guide in the documentation.</div>
    </div>
    <div class="px-6 py-4">
        <button @click="open = open === 3 ? 0 : 3" class="flex justify-between items-center w-full text-left">
            <span class="font-medium text-gray-900 dark:text-white">Is it free to use?</span>
            <svg :class="open === 3 ? 'rotate-180' : ''" class="w-5 h-5 transform transition-transform text-gray-500" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
            </svg>
        </button>
        <div x-show="open === 3" class="mt-2 text-gray-600 dark:text-gray-400 text-sm">Yes, LaraCoreKit has a free tier with premium options available.</div>
    </div>
</div>
@endsection

@section('code')
<div x-data="{ open: 1 }" class="bg-white dark:bg-gray-800 rounded-lg shadow divide-y divide-gray-200 dark:divide-gray-700">
    <div class="px-6 py-4">
        <button @click="open = open === 1 ? 0 : 1" class="flex justify-between items-center w-full text-left">
            <span class="font-medium text-gray-900 dark:text-white">Section 1</span>
            <svg :class="open === 1 ? 'rotate-180' : ''" class="w-5 h-5 transform transition-transform" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
            </svg>
        </button>
        <div x-show="open === 1" class="mt-2 text-gray-600 dark:text-gray-400">Content for section 1</div>
    </div>
</div>
@endsection
