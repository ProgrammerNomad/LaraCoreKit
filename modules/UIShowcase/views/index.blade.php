@extends('showcase::layouts.showcase')

@section('page-title', 'UI Showcase Overview')
@section('page-description', 'Complete component library for LaraCoreKit')

@section('content')
@php
    $totalComponents = collect($categories)->sum(fn($c) => isset($c['components']) ? count($c['components']) : 0);
@endphp
<div class="max-w-7xl mx-auto">
    <!-- Hero Section -->
    <div class="bg-gradient-to-r from-blue-600 to-purple-600 rounded-2xl p-12 mb-8 text-white">
        <h2 class="text-4xl font-bold mb-4">LaraCoreKit UI Components</h2>
        <p class="text-xl text-blue-100 mb-6">A comprehensive collection of beautiful, responsive UI components built with Tailwind CSS and Alpine.js</p>
        <div class="flex space-x-4">
            <a href="{{ route('showcase.typography') }}" class="px-6 py-3 bg-white text-blue-600 rounded-lg font-medium hover:bg-blue-50 transition">
                Browse Components
            </a>
            <a href="https://github.com/ProgrammerNomad/LaraCoreKit" target="_blank" class="px-6 py-3 bg-blue-700 text-white rounded-lg font-medium hover:bg-blue-800 transition">
                View on GitHub
            </a>
        </div>
    </div>

    <!-- Stats -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
        <div class="bg-white dark:bg-gray-800 rounded-lg p-6 border border-gray-200 dark:border-gray-700">
            <div class="text-3xl font-bold text-blue-600 dark:text-blue-400 mb-2">{{ $totalComponents }}+</div>
            <div class="text-sm text-gray-600 dark:text-gray-400">UI Components</div>
        </div>
        <div class="bg-white dark:bg-gray-800 rounded-lg p-6 border border-gray-200 dark:border-gray-700">
            <div class="text-3xl font-bold text-purple-600 dark:text-purple-400 mb-2">{{ count($categories) }}</div>
            <div class="text-sm text-gray-600 dark:text-gray-400">Categories</div>
        </div>
        <div class="bg-white dark:bg-gray-800 rounded-lg p-6 border border-gray-200 dark:border-gray-700">
            <div class="text-3xl font-bold text-green-600 dark:text-green-400 mb-2">100%</div>
            <div class="text-sm text-gray-600 dark:text-gray-400">Responsive</div>
        </div>
        <div class="bg-white dark:bg-gray-800 rounded-lg p-6 border border-gray-200 dark:border-gray-700">
            <div class="text-3xl font-bold text-orange-600 dark:text-orange-400 mb-2">Dark</div>
            <div class="text-sm text-gray-600 dark:text-gray-400">Mode Support</div>
        </div>
    </div>

    <!-- Component Categories -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($categories as $categorySlug => $category)
        <a href="{{ route('showcase.' . $categorySlug) }}" class="group">
            <div class="bg-white dark:bg-gray-800 rounded-lg p-6 border border-gray-200 dark:border-gray-700 hover:border-blue-500 dark:hover:border-blue-500 transition h-full flex flex-col">
                <div class="w-12 h-12 bg-blue-100 dark:bg-blue-900/30 rounded-lg flex items-center justify-center mb-4 group-hover:bg-blue-200 dark:group-hover:bg-blue-900/50 transition">
                    <svg class="w-6 h-6 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        {!! $category['icon'] ?? '' !!}
                    </svg>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">{{ $category['name'] ?? Str::title(str_replace('-', ' ', $categorySlug)) }}</h3>
                <p class="text-sm text-gray-600 dark:text-gray-400 flex-grow">{{ $category['description'] ?? 'Explore our ' . strtolower($category['name']) . ' components.' }}</p>
                <div class="mt-4 text-sm text-blue-600 dark:text-blue-400 font-medium">
                    {{ count($category['components'] ?? []) }} components 
                    <span class="inline-block transform group-hover:translate-x-1 transition-transform">→</span>
                </div>
            </div>
        </a>
        @endforeach
    </div>
</div>
@endsection