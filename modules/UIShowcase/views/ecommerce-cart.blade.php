@extends('showcase::layouts.showcase')

@section('page-title', 'E-commerce - Cart & Checkout')
@section('page-description', 'Shopping cart, checkout flows, and order summaries')

@section('content')
<div class="max-w-7xl mx-auto space-y-8">

    <!-- Shopping Cart -->
    @component('showcase::components.showcase-item', [
        'title' => 'Shopping Cart',
        'description' => 'Full shopping cart with item management and order summary',
        'code' => '<div x-data="{ 
    cartItems: [
        { id: 1, name: &#39;Wireless Headphones&#39;, price: 299.99, quantity: 1, image: &#39;https://picsum.photos/100/100?random=20&#39; },
        { id: 2, name: &#39;Smart Watch&#39;, price: 399.99, quantity: 2, image: &#39;https://picsum.photos/100/100?random=21&#39; }
    ],
    get subtotal() {
        return this.cartItems.reduce((sum, item) => sum + (item.price * item.quantity), 0);
    },
    get tax() {
        return this.subtotal * 0.1;
    },
    get total() {
        return this.subtotal + this.tax;
    },
    removeItem(id) {
        this.cartItems = this.cartItems.filter(item => item.id !== id);
    }
}" class="bg-gray-50 dark:bg-gray-900 p-6 rounded-lg">
    <div class="grid lg:grid-cols-3 gap-6">
        <!-- Cart Items -->
        <div class="lg:col-span-2 space-y-4">
            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Shopping Cart</h2>
            
            <template x-for="item in cartItems" :key="item.id">
                <div class="bg-white dark:bg-gray-800 rounded-lg p-4 shadow">
                    <div class="flex gap-4">
                        <img :src="item.image" :alt="item.name" class="w-24 h-24 object-cover rounded">
                        <div class="flex-1">
                            <h3 class="font-semibold text-gray-900 dark:text-white" x-text="item.name"></h3>
                            <p class="text-gray-600 dark:text-gray-400 text-sm">In Stock</p>
                            <div class="flex items-center gap-3 mt-2">
                                <button &#64;click="item.quantity = Math.max(1, item.quantity - 1)" 
                                    class="px-2 py-1 border rounded">-</button>
                                <span x-text="item.quantity"></span>
                                <button &#64;click="item.quantity++" 
                                    class="px-2 py-1 border rounded">+</button>
                            </div>
                        </div>
                        <div class="text-right">
                            <p class="text-lg font-bold text-gray-900 dark:text-white" 
                               x-text="&#39;$&#39; + (item.price * item.quantity).toFixed(2)"></p>
                            <button &#64;click="removeItem(item.id)" 
                                class="text-red-600 hover:text-red-700 text-sm mt-2">Remove</button>
                        </div>
                    </div>
                </div>
            </template>
        </div>
        
        <!-- Order Summary -->
        <div class="lg:col-span-1">
            <div class="bg-white dark:bg-gray-800 rounded-lg p-6 shadow sticky top-4">
                <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-4">Order Summary</h3>
                
                <div class="space-y-3 mb-4">
                    <div class="flex justify-between">
                        <span class="text-gray-600 dark:text-gray-400">Subtotal</span>
                        <span class="font-semibold" x-text="&#39;$&#39; + subtotal.toFixed(2)"></span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-gray-600 dark:text-gray-400">Tax (10%)</span>
                        <span class="font-semibold" x-text="&#39;$&#39; + tax.toFixed(2)"></span>
                    </div>
                    <div class="border-t pt-3 flex justify-between text-lg font-bold">
                        <span>Total</span>
                        <span x-text="&#39;$&#39; + total.toFixed(2)"></span>
                    </div>
                </div>
                
                <button class="w-full bg-blue-600 text-white py-3 rounded-lg hover:bg-blue-700">
                    Proceed to Checkout
                </button>
            </div>
        </div>
    </div>
</div>'
    ])
        @slot('preview')
            <div x-data="{ 
                cartItems: [
                    { id: 1, name: 'Wireless Headphones', price: 299.99, quantity: 1, image: 'https://picsum.photos/100/100?random=20' },
                    { id: 2, name: 'Smart Watch', price: 399.99, quantity: 2, image: 'https://picsum.photos/100/100?random=21' }
                ],
                get subtotal() {
                    return this.cartItems.reduce((sum, item) => sum + (item.price * item.quantity), 0);
                },
                get tax() {
                    return this.subtotal * 0.1;
                },
                get total() {
                    return this.subtotal + this.tax;
                },
                removeItem(id) {
                    this.cartItems = this.cartItems.filter(item => item.id !== id);
                }
            }" class="bg-gray-50 dark:bg-gray-900 p-4 md:p-6 rounded-lg">
                <div class="grid lg:grid-cols-3 gap-6">
                    <!-- Cart Items -->
                    <div class="lg:col-span-2 space-y-4">
                        <h2 class="text-xl md:text-2xl font-bold text-gray-900 dark:text-white mb-4">Shopping Cart</h2>
                        
                        <template x-for="item in cartItems" :key="item.id">
                            <div class="bg-white dark:bg-gray-800 rounded-lg p-4 shadow">
                                <div class="flex gap-4">
                                    <img :src="item.image" :alt="item.name" class="w-20 h-20 md:w-24 md:h-24 object-cover rounded">
                                    <div class="flex-1">
                                        <h3 class="font-semibold text-gray-900 dark:text-white" x-text="item.name"></h3>
                                        <p class="text-gray-600 dark:text-gray-400 text-sm">In Stock</p>
                                        <div class="flex items-center gap-3 mt-2">
                                            <button @click="item.quantity = Math.max(1, item.quantity - 1)" 
                                                class="px-2 py-1 border border-gray-300 dark:border-gray-600 rounded hover:bg-gray-50 dark:hover:bg-gray-700 transition">-</button>
                                            <span class="text-gray-900 dark:text-white font-medium min-w-[1.5rem] text-center" x-text="item.quantity"></span>
                                            <button @click="item.quantity++" 
                                                class="px-2 py-1 border border-gray-300 dark:border-gray-600 rounded hover:bg-gray-50 dark:hover:bg-gray-700 transition">+</button>
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <p class="text-lg font-bold text-gray-900 dark:text-white" 
                                           x-text="'$' + (item.price * item.quantity).toFixed(2)"></p>
                                        <button @click="removeItem(item.id)" 
                                            class="text-red-600 dark:text-red-400 hover:text-red-700 dark:hover:text-red-300 text-sm mt-2 transition">Remove</button>
                                    </div>
                                </div>
                            </div>
                        </template>
                        
                        <div x-show="cartItems.length === 0" class="bg-white dark:bg-gray-800 rounded-lg p-8 text-center">
                            <p class="text-gray-600 dark:text-gray-400">Your cart is empty</p>
                        </div>
                    </div>
                    
                    <!-- Order Summary -->
                    <div class="lg:col-span-1">
                        <div class="bg-white dark:bg-gray-800 rounded-lg p-6 shadow sticky top-4">
                            <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-4">Order Summary</h3>
                            
                            <div class="space-y-3 mb-4 text-gray-900 dark:text-white">
                                <div class="flex justify-between">
                                    <span class="text-gray-600 dark:text-gray-400">Subtotal</span>
                                    <span class="font-semibold" x-text="'$' + subtotal.toFixed(2)"></span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-gray-600 dark:text-gray-400">Tax (10%)</span>
                                    <span class="font-semibold" x-text="'$' + tax.toFixed(2)"></span>
                                </div>
                                <div class="border-t border-gray-200 dark:border-gray-700 pt-3 flex justify-between text-lg font-bold">
                                    <span>Total</span>
                                    <span x-text="'$' + total.toFixed(2)"></span>
                                </div>
                            </div>
                            
                            <button class="w-full bg-blue-600 text-white py-3 rounded-lg hover:bg-blue-700 transition font-semibold">
                                Proceed to Checkout
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        @endslot
    @endcomponent

    <!-- Checkout Flow -->
    @component('showcase::components.showcase-item', [
        'title' => 'Checkout Flow',
        'description' => 'Multi-step checkout with shipping info, payment, and review',
        'code' => '<div x-data="{ 
    step: 1,
    shippingInfo: {},
    paymentInfo: {},
    nextStep() {
        if (this.step < 3) this.step++;
    },
    prevStep() {
        if (this.step > 1) this.step--;
    }
}" class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-8">
    <!-- Progress Steps -->
    <div class="flex items-center justify-between mb-8">
        <template x-for="i in 3" :key="i">
            <div class="flex items-center flex-1">
                <div class="flex items-center justify-center w-10 h-10 rounded-full font-semibold"
                     :class="step >= i ? &#39;bg-blue-600 text-white&#39; : &#39;bg-gray-200 text-gray-600&#39;">
                    <span x-text="i"></span>
                </div>
                <div class="flex-1 h-1 mx-2" 
                     :class="step > i ? &#39;bg-blue-600&#39; : &#39;bg-gray-200&#39;"
                     x-show="i < 3"></div>
            </div>
        </template>
    </div>
    
    <!-- Step 1: Shipping -->
    <div x-show="step === 1">
        <h2 class="text-2xl font-bold mb-6">Shipping Information</h2>
        <div class="grid md:grid-cols-2 gap-4">
            <input type="text" placeholder="First Name" 
                class="px-4 py-2 border rounded-lg dark:bg-gray-700 dark:border-gray-600">
            <input type="text" placeholder="Last Name" 
                class="px-4 py-2 border rounded-lg dark:bg-gray-700 dark:border-gray-600">
            <input type="email" placeholder="Email" 
                class="md:col-span-2 px-4 py-2 border rounded-lg dark:bg-gray-700 dark:border-gray-600">
            <input type="text" placeholder="Address" 
                class="md:col-span-2 px-4 py-2 border rounded-lg dark:bg-gray-700 dark:border-gray-600">
            <input type="text" placeholder="City" 
                class="px-4 py-2 border rounded-lg dark:bg-gray-700 dark:border-gray-600">
            <input type="text" placeholder="ZIP Code" 
                class="px-4 py-2 border rounded-lg dark:bg-gray-700 dark:border-gray-600">
        </div>
    </div>
    
    <!-- Step 2: Payment -->
    <div x-show="step === 2">
        <h2 class="text-2xl font-bold mb-6">Payment Method</h2>
        <div class="space-y-4">
            <div class="border rounded-lg p-4">
                <label class="flex items-center cursor-pointer">
                    <input type="radio" name="payment" class="mr-3">
                    <span>Credit Card</span>
                </label>
            </div>
            <div class="grid gap-4">
                <input type="text" placeholder="Card Number" 
                    class="px-4 py-2 border rounded-lg dark:bg-gray-700 dark:border-gray-600">
                <div class="grid md:grid-cols-2 gap-4">
                    <input type="text" placeholder="MM/YY" 
                        class="px-4 py-2 border rounded-lg dark:bg-gray-700 dark:border-gray-600">
                    <input type="text" placeholder="CVV" 
                        class="px-4 py-2 border rounded-lg dark:bg-gray-700 dark:border-gray-600">
                </div>
            </div>
        </div>
    </div>
    
    <!-- Step 3: Review -->
    <div x-show="step === 3">
        <h2 class="text-2xl font-bold mb-6">Review Order</h2>
        <div class="bg-gray-50 dark:bg-gray-700 rounded-lg p-6">
            <p class="text-gray-600 dark:text-gray-400">Order total: <span class="font-bold text-2xl text-gray-900 dark:text-white">$1,099.97</span></p>
        </div>
    </div>
    
    <!-- Navigation Buttons -->
    <div class="flex justify-between mt-8">
        <button &#64;click="prevStep()" x-show="step > 1"
            class="px-6 py-2 border border-gray-300 dark:border-gray-600 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-700">
            Back
        </button>
        <button &#64;click="nextStep()" x-show="step < 3"
            class="ml-auto px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
            Continue
        </button>
        <button x-show="step === 3"
            class="ml-auto px-6 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700">
            Place Order
        </button>
    </div>
</div>'
    ])
        @slot('preview')
            <div x-data="{ 
                step: 1,
                shippingInfo: {},
                paymentInfo: {},
                nextStep() {
                    if (this.step < 3) this.step++;
                },
                prevStep() {
                    if (this.step > 1) this.step--;
                }
            }" class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-4 md:p-8">
                <!-- Progress Steps -->
                <div class="flex items-center justify-between mb-8">
                    <template x-for="i in 3" :key="i">
                        <div class="flex items-center flex-1">
                            <div class="flex items-center justify-center w-8 h-8 md:w-10 md:h-10 rounded-full font-semibold transition"
                                 :class="step >= i ? 'bg-blue-600 text-white' : 'bg-gray-200 dark:bg-gray-700 text-gray-600 dark:text-gray-400'">
                                <span x-text="i"></span>
                            </div>
                            <div class="flex-1 h-1 mx-2 transition" 
                                 :class="step > i ? 'bg-blue-600' : 'bg-gray-200 dark:bg-gray-700'"
                                 x-show="i < 3"></div>
                        </div>
                    </template>
                </div>
                
                <!-- Step 1: Shipping -->
                <div x-show="step === 1">
                    <h2 class="text-xl md:text-2xl font-bold text-gray-900 dark:text-white mb-6">Shipping Information</h2>
                    <div class="grid md:grid-cols-2 gap-4">
                        <input type="text" placeholder="First Name" 
                            class="px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg dark:bg-gray-700 dark:text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        <input type="text" placeholder="Last Name" 
                            class="px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg dark:bg-gray-700 dark:text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        <input type="email" placeholder="Email" 
                            class="md:col-span-2 px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg dark:bg-gray-700 dark:text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        <input type="text" placeholder="Address" 
                            class="md:col-span-2 px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg dark:bg-gray-700 dark:text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        <input type="text" placeholder="City" 
                            class="px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg dark:bg-gray-700 dark:text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        <input type="text" placeholder="ZIP Code" 
                            class="px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg dark:bg-gray-700 dark:text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    </div>
                </div>
                
                <!-- Step 2: Payment -->
                <div x-show="step === 2">
                    <h2 class="text-xl md:text-2xl font-bold text-gray-900 dark:text-white mb-6">Payment Method</h2>
                    <div class="space-y-4">
                        <div class="border border-gray-300 dark:border-gray-600 rounded-lg p-4">
                            <label class="flex items-center cursor-pointer">
                                <input type="radio" name="payment" class="mr-3 text-blue-600 focus:ring-blue-500">
                                <span class="text-gray-900 dark:text-white">Credit Card</span>
                            </label>
                        </div>
                        <div class="grid gap-4">
                            <input type="text" placeholder="Card Number" 
                                class="px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg dark:bg-gray-700 dark:text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            <div class="grid md:grid-cols-2 gap-4">
                                <input type="text" placeholder="MM/YY" 
                                    class="px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg dark:bg-gray-700 dark:text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                <input type="text" placeholder="CVV" 
                                    class="px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg dark:bg-gray-700 dark:text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Step 3: Review -->
                <div x-show="step === 3">
                    <h2 class="text-xl md:text-2xl font-bold text-gray-900 dark:text-white mb-6">Review Order</h2>
                    <div class="bg-gray-50 dark:bg-gray-700 rounded-lg p-6">
                        <p class="text-gray-600 dark:text-gray-400">Order total: <span class="font-bold text-2xl text-gray-900 dark:text-white">$1,099.97</span></p>
                    </div>
                </div>
                
                <!-- Navigation Buttons -->
                <div class="flex justify-between mt-8">
                    <button @click="prevStep()" x-show="step > 1"
                        class="px-6 py-2 border border-gray-300 dark:border-gray-600 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-700 transition text-gray-900 dark:text-white">
                        Back
                    </button>
                    <button @click="nextStep()" x-show="step < 3"
                        class="ml-auto px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition font-semibold">
                        Continue
                    </button>
                    <button x-show="step === 3"
                        class="ml-auto px-6 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 transition font-semibold">
                        Place Order
                    </button>
                </div>
            </div>
        @endslot
    @endcomponent

    <!-- Order Confirmation -->
    @component('showcase::components.showcase-item', [
        'title' => 'Order Confirmation',
        'description' => 'Order success page with order details and tracking info',
        'code' => '<div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-8 text-center">
    <div class="w-16 h-16 bg-green-100 dark:bg-green-900/20 rounded-full flex items-center justify-center mx-auto mb-4">
        <svg class="w-8 h-8 text-green-600 dark:text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
        </svg>
    </div>
    
    <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-2">Order Confirmed!</h2>
    <p class="text-gray-600 dark:text-gray-400 mb-6">Thank you for your purchase</p>
    
    <div class="bg-gray-50 dark:bg-gray-700 rounded-lg p-6 mb-6">
        <div class="flex justify-between items-center mb-3">
            <span class="text-gray-600 dark:text-gray-400">Order Number</span>
            <span class="font-semibold text-gray-900 dark:text-white">#ORD-2024-1234</span>
        </div>
        <div class="flex justify-between items-center mb-3">
            <span class="text-gray-600 dark:text-gray-400">Estimated Delivery</span>
            <span class="font-semibold text-gray-900 dark:text-white">Dec 20, 2024</span>
        </div>
        <div class="flex justify-between items-center">
            <span class="text-gray-600 dark:text-gray-400">Total Amount</span>
            <span class="font-bold text-xl text-gray-900 dark:text-white">$1,099.97</span>
        </div>
    </div>
    
    <div class="flex gap-4 justify-center">
        <button class="px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
            Track Order
        </button>
        <button class="px-6 py-2 border border-gray-300 dark:border-gray-600 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-700">
            Continue Shopping
        </button>
    </div>
</div>'
    ])
        @slot('preview')
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6 md:p-8 text-center max-w-2xl mx-auto">
                <div class="w-16 h-16 bg-green-100 dark:bg-green-900/20 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-green-600 dark:text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                    </svg>
                </div>
                
                <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-2">Order Confirmed!</h2>
                <p class="text-gray-600 dark:text-gray-400 mb-6">Thank you for your purchase</p>
                
                <div class="bg-gray-50 dark:bg-gray-700 rounded-lg p-6 mb-6">
                    <div class="flex justify-between items-center mb-3">
                        <span class="text-gray-600 dark:text-gray-400">Order Number</span>
                        <span class="font-semibold text-gray-900 dark:text-white">#ORD-2024-1234</span>
                    </div>
                    <div class="flex justify-between items-center mb-3">
                        <span class="text-gray-600 dark:text-gray-400">Estimated Delivery</span>
                        <span class="font-semibold text-gray-900 dark:text-white">Dec 20, 2024</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="text-gray-600 dark:text-gray-400">Total Amount</span>
                        <span class="font-bold text-xl text-gray-900 dark:text-white">$1,099.97</span>
                    </div>
                </div>
                
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <button class="px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition font-semibold">
                        Track Order
                    </button>
                    <button class="px-6 py-2 border border-gray-300 dark:border-gray-600 text-gray-900 dark:text-white rounded-lg hover:bg-gray-50 dark:hover:bg-gray-700 transition">
                        Continue Shopping
                    </button>
                </div>
            </div>
        @endslot
    @endcomponent

</div>
@endsection
