@extends('showcase::layouts.showcase')

@section('page-title', 'E-commerce - Products')
@section('page-description', 'Product cards, grids, filters, and detail pages for online stores')

@section('content')
<div class="max-w-7xl mx-auto space-y-8">

    <!-- Product Card - Grid View -->
    @component('showcase::components.showcase-item', [
        'title' => 'Product Card - Grid',
        'description' => 'Product card with image, title, price, rating, and quick actions',
        'code' => '<div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition">
    <div class="relative group">
        <img src="https://picsum.photos/400/400?random=1" alt="Product" class="w-full h-64 object-cover">
        <div class="absolute top-2 right-2 bg-red-500 text-white px-2 py-1 rounded text-sm font-semibold">
            -20%
        </div>
        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-10 transition flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100">
            <button class="p-2 bg-white rounded-full hover:bg-gray-100">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                </svg>
            </button>
            <button class="p-2 bg-white rounded-full hover:bg-gray-100">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                </svg>
            </button>
        </div>
    </div>
    <div class="p-4">
        <h3 class="font-semibold text-gray-900 dark:text-white mb-1">Modern Desk Lamp</h3>
        <div class="flex items-center gap-1 mb-2">
            <div class="flex text-yellow-400">
                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
            </div>
            <span class="text-sm text-gray-600 dark:text-gray-400">(128)</span>
        </div>
        <div class="flex items-center gap-2 mb-3">
            <span class="text-2xl font-bold text-gray-900 dark:text-white">$79.99</span>
            <span class="text-sm text-gray-500 line-through">$99.99</span>
        </div>
        <button class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700">
            Add to Cart
        </button>
    </div>
</div>'
    ])
        @slot('preview', null, [])
            <div class="grid md:grid-cols-3 gap-6">
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition">
                    <div class="relative group">
                        <img src="https://picsum.photos/400/400?random=1" alt="Product" class="w-full h-64 object-cover">
                        <div class="absolute top-2 right-2 bg-red-500 text-white px-2 py-1 rounded text-sm font-semibold">
                            -20%
                        </div>
                        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-10 transition flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100">
                            <button class="p-2 bg-white rounded-full hover:bg-gray-100 transition">
                                <svg class="w-5 h-5 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                </svg>
                            </button>
                            <button class="p-2 bg-white rounded-full hover:bg-gray-100 transition">
                                <svg class="w-5 h-5 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="font-semibold text-gray-900 dark:text-white mb-1">Modern Desk Lamp</h3>
                        <div class="flex items-center gap-1 mb-2">
                            <div class="flex text-yellow-400">
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                            </div>
                            <span class="text-sm text-gray-600 dark:text-gray-400">(128)</span>
                        </div>
                        <div class="flex items-center gap-2 mb-3">
                            <span class="text-2xl font-bold text-gray-900 dark:text-white">$79.99</span>
                            <span class="text-sm text-gray-500 dark:text-gray-600 line-through">$99.99</span>
                        </div>
                        <button class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition">
                            Add to Cart
                        </button>
                    </div>
                </div>
            </div>
        @endslot
    @endcomponent

    <!-- Product Filters Sidebar -->
    @component('showcase::components.showcase-item', [
        'title' => 'Product Filters',
        'description' => 'Sidebar with category, price range, color, and size filters',
        'code' => '<div x-data="{ 
    priceRange: [0, 1000],
    selectedColors: [],
    selectedSizes: []
}" class="bg-white dark:bg-gray-800 rounded-lg shadow p-6">
    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Filters</h3>
    
    <!-- Categories -->
    <div class="mb-6">
        <h4 class="font-medium text-gray-900 dark:text-white mb-3">Categories</h4>
        <div class="space-y-2">
            <label class="flex items-center cursor-pointer">
                <input type="checkbox" class="rounded border-gray-300 text-blue-600">
                <span class="ml-2 text-gray-700 dark:text-gray-300">Electronics (45)</span>
            </label>
            <label class="flex items-center cursor-pointer">
                <input type="checkbox" class="rounded border-gray-300 text-blue-600">
                <span class="ml-2 text-gray-700 dark:text-gray-300">Furniture (32)</span>
            </label>
            <label class="flex items-center cursor-pointer">
                <input type="checkbox" class="rounded border-gray-300 text-blue-600">
                <span class="ml-2 text-gray-700 dark:text-gray-300">Clothing (89)</span>
            </label>
        </div>
    </div>
    
    <!-- Price Range -->
    <div class="mb-6">
        <h4 class="font-medium text-gray-900 dark:text-white mb-3">Price Range</h4>
        <input type="range" min="0" max="1000" x-model="priceRange[1]" 
            class="w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer">
        <div class="flex justify-between text-sm text-gray-600 dark:text-gray-400 mt-2">
            <span>$0</span>
            <span x-text="&#39;$&#39; + priceRange[1]"></span>
        </div>
    </div>
    
    <!-- Colors -->
    <div class="mb-6">
        <h4 class="font-medium text-gray-900 dark:text-white mb-3">Colors</h4>
        <div class="flex gap-2 flex-wrap">
            <button class="w-8 h-8 rounded-full bg-red-500 border-2 border-gray-200 hover:border-gray-400"></button>
            <button class="w-8 h-8 rounded-full bg-blue-500 border-2 border-gray-200 hover:border-gray-400"></button>
            <button class="w-8 h-8 rounded-full bg-green-500 border-2 border-gray-200 hover:border-gray-400"></button>
            <button class="w-8 h-8 rounded-full bg-yellow-500 border-2 border-gray-200 hover:border-gray-400"></button>
            <button class="w-8 h-8 rounded-full bg-black border-2 border-gray-200 hover:border-gray-400"></button>
        </div>
    </div>
    
    <!-- Sizes -->
    <div class="mb-6">
        <h4 class="font-medium text-gray-900 dark:text-white mb-3">Sizes</h4>
        <div class="flex gap-2 flex-wrap">
            <button class="px-3 py-1 border border-gray-300 dark:border-gray-600 rounded hover:border-blue-500 hover:text-blue-600">XS</button>
            <button class="px-3 py-1 border border-gray-300 dark:border-gray-600 rounded hover:border-blue-500 hover:text-blue-600">S</button>
            <button class="px-3 py-1 border border-gray-300 dark:border-gray-600 rounded hover:border-blue-500 hover:text-blue-600">M</button>
            <button class="px-3 py-1 border border-gray-300 dark:border-gray-600 rounded hover:border-blue-500 hover:text-blue-600">L</button>
            <button class="px-3 py-1 border border-gray-300 dark:border-gray-600 rounded hover:border-blue-500 hover:text-blue-600">XL</button>
        </div>
    </div>
    
    <button class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700">
        Apply Filters
    </button>
</div>'
    ])
        @slot('preview', null, [])
            <div x-data="{ 
                priceRange: [0, 1000],
                selectedColors: [],
                selectedSizes: []
            }" class="bg-white dark:bg-gray-800 rounded-lg shadow p-6 max-w-xs">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Filters</h3>
                
                <!-- Categories -->
                <div class="mb-6">
                    <h4 class="font-medium text-gray-900 dark:text-white mb-3">Categories</h4>
                    <div class="space-y-2">
                        <label class="flex items-center cursor-pointer">
                            <input type="checkbox" class="rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                            <span class="ml-2 text-gray-700 dark:text-gray-300">Electronics (45)</span>
                        </label>
                        <label class="flex items-center cursor-pointer">
                            <input type="checkbox" class="rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                            <span class="ml-2 text-gray-700 dark:text-gray-300">Furniture (32)</span>
                        </label>
                        <label class="flex items-center cursor-pointer">
                            <input type="checkbox" class="rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                            <span class="ml-2 text-gray-700 dark:text-gray-300">Clothing (89)</span>
                        </label>
                    </div>
                </div>
                
                <!-- Price Range -->
                <div class="mb-6">
                    <h4 class="font-medium text-gray-900 dark:text-white mb-3">Price Range</h4>
                    <input type="range" min="0" max="1000" x-model="priceRange[1]" 
                        class="w-full h-2 bg-gray-200 dark:bg-gray-700 rounded-lg appearance-none cursor-pointer">
                    <div class="flex justify-between text-sm text-gray-600 dark:text-gray-400 mt-2">
                        <span>$0</span>
                        <span x-text="'$' + priceRange[1]"></span>
                    </div>
                </div>
                
                <!-- Colors -->
                <div class="mb-6">
                    <h4 class="font-medium text-gray-900 dark:text-white mb-3">Colors</h4>
                    <div class="flex gap-2 flex-wrap">
                        <button class="w-8 h-8 rounded-full bg-red-500 border-2 border-gray-200 dark:border-gray-600 hover:border-gray-400 transition"></button>
                        <button class="w-8 h-8 rounded-full bg-blue-500 border-2 border-gray-200 dark:border-gray-600 hover:border-gray-400 transition"></button>
                        <button class="w-8 h-8 rounded-full bg-green-500 border-2 border-gray-200 dark:border-gray-600 hover:border-gray-400 transition"></button>
                        <button class="w-8 h-8 rounded-full bg-yellow-500 border-2 border-gray-200 dark:border-gray-600 hover:border-gray-400 transition"></button>
                        <button class="w-8 h-8 rounded-full bg-black border-2 border-gray-200 dark:border-gray-600 hover:border-gray-400 transition"></button>
                    </div>
                </div>
                
                <!-- Sizes -->
                <div class="mb-6">
                    <h4 class="font-medium text-gray-900 dark:text-white mb-3">Sizes</h4>
                    <div class="flex gap-2 flex-wrap">
                        <button class="px-3 py-1 border border-gray-300 dark:border-gray-600 text-gray-700 dark:text-gray-300 rounded hover:border-blue-500 hover:text-blue-600 dark:hover:text-blue-400 transition">XS</button>
                        <button class="px-3 py-1 border border-gray-300 dark:border-gray-600 text-gray-700 dark:text-gray-300 rounded hover:border-blue-500 hover:text-blue-600 dark:hover:text-blue-400 transition">S</button>
                        <button class="px-3 py-1 border border-gray-300 dark:border-gray-600 text-gray-700 dark:text-gray-300 rounded hover:border-blue-500 hover:text-blue-600 dark:hover:text-blue-400 transition">M</button>
                        <button class="px-3 py-1 border border-gray-300 dark:border-gray-600 text-gray-700 dark:text-gray-300 rounded hover:border-blue-500 hover:text-blue-600 dark:hover:text-blue-400 transition">L</button>
                        <button class="px-3 py-1 border border-gray-300 dark:border-gray-600 text-gray-700 dark:text-gray-300 rounded hover:border-blue-500 hover:text-blue-600 dark:hover:text-blue-400 transition">XL</button>
                    </div>
                </div>
                
                <button class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition">
                    Apply Filters
                </button>
            </div>
        @endslot
    @endcomponent

    <!-- Product Detail Page -->
    @component('showcase::components.showcase-item', [
        'title' => 'Product Detail Page',
        'description' => 'Full product detail with image gallery, variants, and add to cart',
        'code' => '<div x-data="{ 
    currentImage: 0,
    images: [&#39;https://picsum.photos/600/600?random=10&#39;, &#39;https://picsum.photos/600/600?random=11&#39;, &#39;https://picsum.photos/600/600?random=12&#39;],
    selectedColor: &#39;black&#39;,
    selectedSize: &#39;M&#39;,
    quantity: 1
}" class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-8">
    <div class="grid md:grid-cols-2 gap-12">
        <!-- Images -->
        <div>
            <div class="mb-4">
                <img :src="images[currentImage]" alt="Product" class="w-full h-96 object-cover rounded-lg">
            </div>
            <div class="flex gap-2">
                <template x-for="(image, index) in images" :key="index">
                    <button &#64;click="currentImage = index"
                        class="w-24 h-24 rounded border-2 overflow-hidden"
                        :class="currentImage === index ? &#39;border-blue-500&#39; : &#39;border-gray-200&#39;">
                        <img :src="image" alt="Thumbnail" class="w-full h-full object-cover">
                    </button>
                </template>
            </div>
        </div>
        
        <!-- Details -->
        <div>
            <h1 class="text-3xl font-bold text-gray-900 dark:text-white mb-2">Premium Wireless Headphones</h1>
            <div class="flex items-center gap-2 mb-4">
                <div class="flex text-yellow-400">
                    <template x-for="i in 5">
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                    </template>
                </div>
                <span class="text-gray-600 dark:text-gray-400">(256 reviews)</span>
            </div>
            
            <div class="text-3xl font-bold text-gray-900 dark:text-white mb-6">$299.99</div>
            
            <p class="text-gray-600 dark:text-gray-400 mb-6">
                Premium noise-cancelling headphones with exceptional sound quality and all-day comfort.
            </p>
            
            <!-- Color Selection -->
            <div class="mb-6">
                <h3 class="font-medium mb-2">Color</h3>
                <div class="flex gap-2">
                    <button &#64;click="selectedColor = &#39;black&#39;" 
                        class="w-10 h-10 rounded-full bg-black border-2"
                        :class="selectedColor === &#39;black&#39; ? &#39;border-blue-500&#39; : &#39;border-gray-200&#39;"></button>
                    <button &#64;click="selectedColor = &#39;silver&#39;" 
                        class="w-10 h-10 rounded-full bg-gray-400 border-2"
                        :class="selectedColor === &#39;silver&#39; ? &#39;border-blue-500&#39; : &#39;border-gray-200&#39;"></button>
                </div>
            </div>
            
            <!-- Size Selection -->
            <div class="mb-6">
                <h3 class="font-medium mb-2">Size</h3>
                <div class="flex gap-2">
                    <template x-for="size in [&#39;S&#39;, &#39;M&#39;, &#39;L&#39;]">
                        <button &#64;click="selectedSize = size"
                            class="px-4 py-2 border rounded"
                            :class="selectedSize === size ? &#39;border-blue-500 bg-blue-50&#39; : &#39;border-gray-300&#39;"
                            x-text="size"></button>
                    </template>
                </div>
            </div>
            
            <!-- Quantity -->
            <div class="mb-6">
                <h3 class="font-medium mb-2">Quantity</h3>
                <div class="flex items-center gap-3">
                    <button &#64;click="quantity = Math.max(1, quantity - 1)" 
                        class="px-3 py-1 border rounded">-</button>
                    <span x-text="quantity" class="text-lg font-semibold"></span>
                    <button &#64;click="quantity++" 
                        class="px-3 py-1 border rounded">+</button>
                </div>
            </div>
            
            <div class="flex gap-4">
                <button class="flex-1 bg-blue-600 text-white py-3 rounded-lg hover:bg-blue-700">
                    Add to Cart
                </button>
                <button class="px-6 py-3 border border-gray-300 dark:border-gray-600 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-700">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</div>'
    ])
        @slot('preview', null, [])
            <div x-data="{ 
                currentImage: 0,
                images: ['https://picsum.photos/600/600?random=10', 'https://picsum.photos/600/600?random=11', 'https://picsum.photos/600/600?random=12'],
                selectedColor: 'black',
                selectedSize: 'M',
                quantity: 1
            }" class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6 md:p-8">
                <div class="grid md:grid-cols-2 gap-8">
                    <!-- Images -->
                    <div>
                        <div class="mb-4">
                            <img :src="images[currentImage]" alt="Product" class="w-full h-64 md:h-96 object-cover rounded-lg">
                        </div>
                        <div class="flex gap-2">
                            <template x-for="(image, index) in images" :key="index">
                                <button @click="currentImage = index"
                                    class="w-20 h-20 rounded border-2 overflow-hidden transition"
                                    :class="currentImage === index ? 'border-blue-500' : 'border-gray-200 dark:border-gray-600'">
                                    <img :src="image" alt="Thumbnail" class="w-full h-full object-cover">
                                </button>
                            </template>
                        </div>
                    </div>
                    
                    <!-- Details -->
                    <div>
                        <h1 class="text-2xl md:text-3xl font-bold text-gray-900 dark:text-white mb-2">Premium Wireless Headphones</h1>
                        <div class="flex items-center gap-2 mb-4">
                            <div class="flex text-yellow-400">
                                <template x-for="i in 5">
                                    <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                </template>
                            </div>
                            <span class="text-gray-600 dark:text-gray-400 text-sm">(256 reviews)</span>
                        </div>
                        
                        <div class="text-2xl md:text-3xl font-bold text-gray-900 dark:text-white mb-4">$299.99</div>
                        
                        <p class="text-gray-600 dark:text-gray-400 mb-6">
                            Premium noise-cancelling headphones with exceptional sound quality and all-day comfort.
                        </p>
                        
                        <!-- Color Selection -->
                        <div class="mb-4">
                            <h3 class="font-medium text-gray-900 dark:text-white mb-2">Color</h3>
                            <div class="flex gap-2">
                                <button @click="selectedColor = 'black'" 
                                    class="w-10 h-10 rounded-full bg-black border-2 transition"
                                    :class="selectedColor === 'black' ? 'border-blue-500' : 'border-gray-200 dark:border-gray-600'"></button>
                                <button @click="selectedColor = 'silver'" 
                                    class="w-10 h-10 rounded-full bg-gray-400 border-2 transition"
                                    :class="selectedColor === 'silver' ? 'border-blue-500' : 'border-gray-200 dark:border-gray-600'"></button>
                            </div>
                        </div>
                        
                        <!-- Size Selection -->
                        <div class="mb-4">
                            <h3 class="font-medium text-gray-900 dark:text-white mb-2">Size</h3>
                            <div class="flex gap-2">
                                <template x-for="size in ['S', 'M', 'L']">
                                    <button @click="selectedSize = size"
                                        class="px-4 py-2 border rounded transition"
                                        :class="selectedSize === size ? 'border-blue-500 bg-blue-50 dark:bg-blue-900/20 text-blue-600 dark:text-blue-400' : 'border-gray-300 dark:border-gray-600 text-gray-700 dark:text-gray-300'"
                                        x-text="size"></button>
                                </template>
                            </div>
                        </div>
                        
                        <!-- Quantity -->
                        <div class="mb-6">
                            <h3 class="font-medium text-gray-900 dark:text-white mb-2">Quantity</h3>
                            <div class="flex items-center gap-3">
                                <button @click="quantity = Math.max(1, quantity - 1)" 
                                    class="px-3 py-1 border border-gray-300 dark:border-gray-600 rounded hover:bg-gray-50 dark:hover:bg-gray-700 transition">-</button>
                                <span x-text="quantity" class="text-lg font-semibold text-gray-900 dark:text-white min-w-[2rem] text-center"></span>
                                <button @click="quantity++" 
                                    class="px-3 py-1 border border-gray-300 dark:border-gray-600 rounded hover:bg-gray-50 dark:hover:bg-gray-700 transition">+</button>
                            </div>
                        </div>
                        
                        <div class="flex gap-4">
                            <button class="flex-1 bg-blue-600 text-white py-3 rounded-lg hover:bg-blue-700 transition font-semibold">
                                Add to Cart
                            </button>
                            <button class="px-6 py-3 border border-gray-300 dark:border-gray-600 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-700 transition">
                                <svg class="w-6 h-6 text-gray-700 dark:text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        @endslot
    @endcomponent

</div>
@endsection
