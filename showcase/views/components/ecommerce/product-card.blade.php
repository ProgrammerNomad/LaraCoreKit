@extends('showcase::components.component-layout')

@section('demo')
<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    <div class="bg-white dark:bg-gray-800 rounded-xl overflow-hidden shadow hover:shadow-lg transition group">
        <div class="h-48 bg-gradient-to-br from-blue-500 to-indigo-600 overflow-hidden">
            <img src="https://picsum.photos/400/200?random=20" alt="Product" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
        </div>
        <div class="p-4">
            <div class="flex justify-between items-start mb-2">
                <h3 class="font-semibold text-gray-900 dark:text-white">Wireless Headphones</h3>
                <span class="text-blue-600 dark:text-blue-400 font-bold">$79.99</span>
            </div>
            <p class="text-gray-500 dark:text-gray-400 text-sm mb-4">Premium sound quality with noise cancellation</p>
            <div class="flex gap-2">
                <button class="flex-1 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 text-sm transition">Add to Cart</button>
                <button class="p-2 border border-gray-200 dark:border-gray-600 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-700 transition">
                    <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
                </button>
            </div>
        </div>
    </div>

    <div class="bg-white dark:bg-gray-800 rounded-xl overflow-hidden shadow hover:shadow-lg transition group">
        <div class="relative h-48 overflow-hidden">
            <img src="https://picsum.photos/400/200?random=21" alt="Product" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
            <span class="absolute top-3 left-3 px-2 py-1 bg-red-500 text-white text-xs font-bold rounded">SALE -20%</span>
        </div>
        <div class="p-4">
            <div class="flex justify-between items-start mb-2">
                <h3 class="font-semibold text-gray-900 dark:text-white">Smart Watch</h3>
                <div class="text-right">
                    <span class="text-blue-600 dark:text-blue-400 font-bold">$159.99</span>
                    <span class="block text-gray-400 text-xs line-through">$199.99</span>
                </div>
            </div>
            <p class="text-gray-500 dark:text-gray-400 text-sm mb-4">Track fitness, calls & notifications</p>
            <div class="flex gap-2">
                <button class="flex-1 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 text-sm transition">Add to Cart</button>
                <button class="p-2 border border-gray-200 dark:border-gray-600 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-700 transition">
                    <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
                </button>
            </div>
        </div>
    </div>

    <div class="bg-white dark:bg-gray-800 rounded-xl overflow-hidden shadow hover:shadow-lg transition group">
        <div class="h-48 overflow-hidden">
            <img src="https://picsum.photos/400/200?random=22" alt="Product" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
        </div>
        <div class="p-4">
            <div class="flex justify-between items-start mb-2">
                <h3 class="font-semibold text-gray-900 dark:text-white">Laptop Stand</h3>
                <span class="text-blue-600 dark:text-blue-400 font-bold">$49.99</span>
            </div>
            <p class="text-gray-500 dark:text-gray-400 text-sm mb-4">Ergonomic adjustable aluminum stand</p>
            <div class="flex gap-2">
                <button class="flex-1 py-2 bg-gray-200 dark:bg-gray-700 text-gray-600 dark:text-gray-300 rounded-lg text-sm cursor-not-allowed" disabled>Out of Stock</button>
                <button class="p-2 border border-gray-200 dark:border-gray-600 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-700 transition">
                    <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
                </button>
            </div>
        </div>
    </div>
</div>
@endsection

@section('code')
<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    <div class="bg-white dark:bg-gray-800 rounded-xl overflow-hidden shadow hover:shadow-lg transition group">
        <div class="h-48 overflow-hidden">
            <img src="image.jpg" alt="Product" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
        </div>
        <div class="p-4">
            <div class="flex justify-between items-start mb-2">
                <h3 class="font-semibold text-gray-900 dark:text-white">Product Name</h3>
                <span class="text-blue-600 dark:text-blue-400 font-bold">$79.99</span>
            </div>
            <p class="text-gray-500 dark:text-gray-400 text-sm mb-4">Product description</p>
            <button class="w-full py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 text-sm transition">Add to Cart</button>
        </div>
    </div>
</div>
@endsection
