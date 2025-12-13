@extends('showcase::layouts.showcase')

@section('page-title', 'E-commerce - Reviews & Wishlist')
@section('page-description', 'Product reviews, ratings, wishlist, and comparison features')

@section('content')
<div class="max-w-7xl mx-auto space-y-8">

    <!-- Product Reviews -->
    @component('showcase::components.showcase-item', [
        'title' => 'Product Reviews',
        'description' => 'Product reviews with ratings, helpful votes, and review form',
        'code' => '<div x-data="{ 
    sortBy: &#39;recent&#39;,
    reviews: [
        { id: 1, author: &#39;John Doe&#39;, rating: 5, date: &#39;Dec 10, 2024&#39;, text: &#39;Amazing product! Highly recommend.&#39;, helpful: 12, verified: true },
        { id: 2, author: &#39;Jane Smith&#39;, rating: 4, date: &#39;Dec 8, 2024&#39;, text: &#39;Great quality, fast shipping.&#39;, helpful: 8, verified: true }
    ]
}" class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold text-gray-900 dark:text-white">Customer Reviews</h2>
        <select x-model="sortBy" class="px-4 py-2 border rounded-lg dark:bg-gray-700 dark:border-gray-600">
            <option value="recent">Most Recent</option>
            <option value="helpful">Most Helpful</option>
            <option value="highest">Highest Rating</option>
        </select>
    </div>
    
    <!-- Overall Rating -->
    <div class="flex items-center gap-8 mb-8 pb-8 border-b dark:border-gray-700">
        <div class="text-center">
            <div class="text-5xl font-bold text-gray-900 dark:text-white mb-2">4.8</div>
            <div class="flex text-yellow-400 mb-1">
                <template x-for="i in 5">
                    <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                </template>
            </div>
            <p class="text-sm text-gray-600 dark:text-gray-400">Based on 256 reviews</p>
        </div>
        
        <div class="flex-1">
            <template x-for="stars in [5,4,3,2,1]">
                <div class="flex items-center gap-2 mb-1">
                    <span class="text-sm w-8" x-text="stars + &#39; ★&#39;"></span>
                    <div class="flex-1 h-2 bg-gray-200 dark:bg-gray-700 rounded-full overflow-hidden">
                        <div class="h-full bg-yellow-400" :style="&#39;width: &#39; + (stars === 5 ? 75 : stars === 4 ? 20 : 5) + &#39;%&#39;"></div>
                    </div>
                    <span class="text-sm text-gray-600 dark:text-gray-400 w-12 text-right" 
                          x-text="(stars === 5 ? 192 : stars === 4 ? 51 : 13)"></span>
                </div>
            </template>
        </div>
    </div>
    
    <!-- Review List -->
    <div class="space-y-6">
        <template x-for="review in reviews" :key="review.id">
            <div class="border-b dark:border-gray-700 pb-6">
                <div class="flex items-start justify-between mb-3">
                    <div>
                        <div class="flex items-center gap-2 mb-1">
                            <span class="font-semibold text-gray-900 dark:text-white" x-text="review.author"></span>
                            <span x-show="review.verified" 
                                class="text-xs bg-green-100 dark:bg-green-900/20 text-green-700 dark:text-green-400 px-2 py-1 rounded">
                                Verified Purchase
                            </span>
                        </div>
                        <div class="flex items-center gap-2">
                            <div class="flex text-yellow-400">
                                <template x-for="i in review.rating">
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                </template>
                            </div>
                            <span class="text-sm text-gray-600 dark:text-gray-400" x-text="review.date"></span>
                        </div>
                    </div>
                </div>
                <p class="text-gray-700 dark:text-gray-300 mb-3" x-text="review.text"></p>
                <div class="flex items-center gap-4">
                    <button class="text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">
                        Helpful (<span x-text="review.helpful"></span>)
                    </button>
                    <button class="text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">
                        Report
                    </button>
                </div>
            </div>
        </template>
    </div>
    
    <!-- Write Review Button -->
    <div class="mt-6 text-center">
        <button class="px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
            Write a Review
        </button>
    </div>
</div>'
    ])
        @slot('preview')
            <div x-data="{ 
                sortBy: 'recent',
                reviews: [
                    { id: 1, author: 'John Doe', rating: 5, date: 'Dec 10, 2024', text: 'Amazing product! Highly recommend.', helpful: 12, verified: true },
                    { id: 2, author: 'Jane Smith', rating: 4, date: 'Dec 8, 2024', text: 'Great quality, fast shipping.', helpful: 8, verified: true }
                ]
            }" class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-4 md:p-6">
                <div class="flex flex-col md:flex-row justify-between md:items-center gap-4 mb-6">
                    <h2 class="text-xl md:text-2xl font-bold text-gray-900 dark:text-white">Customer Reviews</h2>
                    <select x-model="sortBy" class="px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg dark:bg-gray-700 dark:text-white focus:ring-2 focus:ring-blue-500">
                        <option value="recent">Most Recent</option>
                        <option value="helpful">Most Helpful</option>
                        <option value="highest">Highest Rating</option>
                    </select>
                </div>
                
                <!-- Overall Rating -->
                <div class="flex flex-col md:flex-row items-start md:items-center gap-6 md:gap-8 mb-8 pb-8 border-b border-gray-200 dark:border-gray-700">
                    <div class="text-center md:text-left">
                        <div class="text-4xl md:text-5xl font-bold text-gray-900 dark:text-white mb-2">4.8</div>
                        <div class="flex text-yellow-400 mb-1 justify-center md:justify-start">
                            <template x-for="i in 5">
                                <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                            </template>
                        </div>
                        <p class="text-sm text-gray-600 dark:text-gray-400">Based on 256 reviews</p>
                    </div>
                    
                    <div class="flex-1 w-full">
                        <template x-for="stars in [5,4,3,2,1]">
                            <div class="flex items-center gap-2 mb-1">
                                <span class="text-sm w-8 text-gray-700 dark:text-gray-300" x-text="stars + ' ★'"></span>
                                <div class="flex-1 h-2 bg-gray-200 dark:bg-gray-700 rounded-full overflow-hidden">
                                    <div class="h-full bg-yellow-400 transition-all" :style="'width: ' + (stars === 5 ? 75 : stars === 4 ? 20 : 5) + '%'"></div>
                                </div>
                                <span class="text-sm text-gray-600 dark:text-gray-400 w-12 text-right" 
                                      x-text="(stars === 5 ? 192 : stars === 4 ? 51 : 13)"></span>
                            </div>
                        </template>
                    </div>
                </div>
                
                <!-- Review List -->
                <div class="space-y-6">
                    <template x-for="review in reviews" :key="review.id">
                        <div class="border-b border-gray-200 dark:border-gray-700 pb-6 last:border-0">
                            <div class="flex items-start justify-between mb-3">
                                <div>
                                    <div class="flex flex-wrap items-center gap-2 mb-1">
                                        <span class="font-semibold text-gray-900 dark:text-white" x-text="review.author"></span>
                                        <span x-show="review.verified" 
                                            class="text-xs bg-green-100 dark:bg-green-900/20 text-green-700 dark:text-green-400 px-2 py-1 rounded">
                                            Verified Purchase
                                        </span>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <div class="flex text-yellow-400">
                                            <template x-for="i in review.rating">
                                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                            </template>
                                        </div>
                                        <span class="text-sm text-gray-600 dark:text-gray-400" x-text="review.date"></span>
                                    </div>
                                </div>
                            </div>
                            <p class="text-gray-700 dark:text-gray-300 mb-3" x-text="review.text"></p>
                            <div class="flex items-center gap-4">
                                <button class="text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white transition">
                                    Helpful (<span x-text="review.helpful"></span>)
                                </button>
                                <button class="text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white transition">
                                    Report
                                </button>
                            </div>
                        </div>
                    </template>
                </div>
                
                <!-- Write Review Button -->
                <div class="mt-6 text-center">
                    <button class="px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition font-semibold">
                        Write a Review
                    </button>
                </div>
            </div>
        @endslot
    @endcomponent

    <!-- Wishlist -->
    @component('showcase::components.showcase-item', [
        'title' => 'Wishlist',
        'description' => 'User wishlist with saved products and quick actions',
        'code' => '<div x-data="{ 
    wishlistItems: [
        { id: 1, name: &#39;Modern Desk Lamp&#39;, price: 79.99, image: &#39;https://picsum.photos/100/100?random=30&#39;, inStock: true },
        { id: 2, name: &#39;Ergonomic Chair&#39;, price: 299.99, image: &#39;https://picsum.photos/100/100?random=31&#39;, inStock: false }
    ],
    removeFromWishlist(id) {
        this.wishlistItems = this.wishlistItems.filter(item => item.id !== id);
    }
}" class="bg-white dark:bg-gray-800 rounded-lg shadow p-6">
    <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">My Wishlist</h2>
    
    <div class="space-y-4">
        <template x-for="item in wishlistItems" :key="item.id">
            <div class="flex gap-4 p-4 border dark:border-gray-700 rounded-lg">
                <img :src="item.image" :alt="item.name" class="w-24 h-24 object-cover rounded">
                <div class="flex-1">
                    <h3 class="font-semibold text-gray-900 dark:text-white mb-1" x-text="item.name"></h3>
                    <p class="text-lg font-bold text-gray-900 dark:text-white mb-2" 
                       x-text="&#39;$&#39; + item.price.toFixed(2)"></p>
                    <p class="text-sm mb-3" 
                       :class="item.inStock ? &#39;text-green-600&#39; : &#39;text-red-600&#39;"
                       x-text="item.inStock ? &#39;In Stock&#39; : &#39;Out of Stock&#39;"></p>
                    <div class="flex gap-2">
                        <button class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700"
                                :disabled="!item.inStock">
                            Add to Cart
                        </button>
                        <button &#64;click="removeFromWishlist(item.id)"
                                class="px-4 py-2 border border-gray-300 dark:border-gray-600 rounded hover:bg-gray-50 dark:hover:bg-gray-700">
                            Remove
                        </button>
                    </div>
                </div>
            </div>
        </template>
        
        <div x-show="wishlistItems.length === 0" class="text-center py-12">
            <svg class="w-16 h-16 text-gray-400 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
            </svg>
            <p class="text-gray-600 dark:text-gray-400">Your wishlist is empty</p>
        </div>
    </div>
</div>'
    ])
        @slot('preview')
            <div x-data="{ 
                wishlistItems: [
                    { id: 1, name: 'Modern Desk Lamp', price: 79.99, image: 'https://picsum.photos/100/100?random=30', inStock: true },
                    { id: 2, name: 'Ergonomic Chair', price: 299.99, image: 'https://picsum.photos/100/100?random=31', inStock: false }
                ],
                removeFromWishlist(id) {
                    this.wishlistItems = this.wishlistItems.filter(item => item.id !== id);
                }
            }" class="bg-white dark:bg-gray-800 rounded-lg shadow p-4 md:p-6">
                <h2 class="text-xl md:text-2xl font-bold text-gray-900 dark:text-white mb-6">My Wishlist</h2>
                
                <div class="space-y-4">
                    <template x-for="item in wishlistItems" :key="item.id">
                        <div class="flex gap-4 p-4 border border-gray-200 dark:border-gray-700 rounded-lg">
                            <img :src="item.image" :alt="item.name" class="w-20 h-20 md:w-24 md:h-24 object-cover rounded">
                            <div class="flex-1">
                                <h3 class="font-semibold text-gray-900 dark:text-white mb-1" x-text="item.name"></h3>
                                <p class="text-lg font-bold text-gray-900 dark:text-white mb-2" 
                                   x-text="'$' + item.price.toFixed(2)"></p>
                                <p class="text-sm mb-3" 
                                   :class="item.inStock ? 'text-green-600 dark:text-green-400' : 'text-red-600 dark:text-red-400'"
                                   x-text="item.inStock ? 'In Stock' : 'Out of Stock'"></p>
                                <div class="flex flex-col sm:flex-row gap-2">
                                    <button class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition font-semibold disabled:opacity-50 disabled:cursor-not-allowed"
                                            :disabled="!item.inStock">
                                        Add to Cart
                                    </button>
                                    <button @click="removeFromWishlist(item.id)"
                                            class="px-4 py-2 border border-gray-300 dark:border-gray-600 text-gray-700 dark:text-gray-300 rounded hover:bg-gray-50 dark:hover:bg-gray-700 transition">
                                        Remove
                                    </button>
                                </div>
                            </div>
                        </div>
                    </template>
                    
                    <div x-show="wishlistItems.length === 0" class="text-center py-12">
                        <svg class="w-16 h-16 text-gray-400 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                        </svg>
                        <p class="text-gray-600 dark:text-gray-400">Your wishlist is empty</p>
                    </div>
                </div>
            </div>
        @endslot
    @endcomponent

</div>
@endsection
