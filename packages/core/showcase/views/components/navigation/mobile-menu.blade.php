@extends('showcase::components.component-layout')

@section('component-title', 'Mobile Menu (Hamburger)')
@section('component-description', 'Responsive mobile navigation menu with hamburger toggle icon.')

@section('demo')
<div x-data="{ mobileMenuOpen: false }" class="bg-white dark:bg-gray-800 shadow rounded-lg">
    <div class="px-4 py-3 flex justify-between items-center">
        <span class="text-xl font-bold text-gray-900 dark:text-white">Logo</span>
        <button @click="mobileMenuOpen = !mobileMenuOpen" class="text-gray-700 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path x-show="!mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                <path x-show="mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
    </div>
    <div x-show="mobileMenuOpen" class="border-t border-gray-200 dark:border-gray-700 px-2 pt-2 pb-3 space-y-1">
        <a href="#" class="block px-3 py-2 rounded-md text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700">Home</a>
        <a href="#" class="block px-3 py-2 rounded-md text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700">About</a>
        <a href="#" class="block px-3 py-2 rounded-md text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700">Services</a>
        <a href="#" class="block px-3 py-2 rounded-md text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700">Contact</a>
    </div>
</div>
@endsection

@section('code')
<div x-data="{ mobileMenuOpen: false }" class="bg-white dark:bg-gray-800 shadow rounded-lg">
    <div class="px-4 py-3 flex justify-between items-center">
        <span class="text-xl font-bold text-gray-900 dark:text-white">Logo</span>
        <button @click="mobileMenuOpen = !mobileMenuOpen" 
                class="text-gray-700 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path x-show="!mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                <path x-show="mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
    </div>
    <div x-show="mobileMenuOpen" class="border-t border-gray-200 dark:border-gray-700 px-2 pt-2 pb-3 space-y-1">
        <a href="#" class="block px-3 py-2 rounded-md text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700">Home</a>
        <a href="#" class="block px-3 py-2 rounded-md text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700">About</a>
        <a href="#" class="block px-3 py-2 rounded-md text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700">Services</a>
        <a href="#" class="block px-3 py-2 rounded-md text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700">Contact</a>
    </div>
</div>
@endsection
