@extends('showcase::components.component-layout')

@section('demo')
<div x-data="{ 
    items: [
        { id: 1, name: 'Wireless Headphones', price: 79.99, qty: 1, image: 'https://picsum.photos/80/80?random=30' },
        { id: 2, name: 'Smart Watch', price: 159.99, qty: 2, image: 'https://picsum.photos/80/80?random=31' }
    ],
    get total() { return this.items.reduce((sum, item) => sum + item.price * item.qty, 0).toFixed(2); },
    removeItem(id) { this.items = this.items.filter(i => i.id !== id); }
}" class="bg-white dark:bg-gray-800 rounded-xl shadow p-6">
    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Shopping Cart (<span x-text="items.length"></span> items)</h3>

    <div class="divide-y divide-gray-200 dark:divide-gray-700">
        <template x-for="item in items" :key="item.id">
            <div class="flex items-center py-4 gap-4">
                <img :src="item.image" class="w-16 h-16 object-cover rounded-lg">
                <div class="flex-1">
                    <p class="font-medium text-gray-900 dark:text-white" x-text="item.name"></p>
                    <p class="text-blue-600 dark:text-blue-400 font-semibold" x-text="'$' + item.price.toFixed(2)"></p>
                </div>
                <div class="flex items-center gap-2">
                    <button @click="item.qty = Math.max(1, item.qty - 1)" class="w-7 h-7 rounded-full border border-gray-300 dark:border-gray-600 flex items-center justify-center text-gray-600 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700">-</button>
                    <span class="w-8 text-center text-gray-900 dark:text-white font-medium" x-text="item.qty"></span>
                    <button @click="item.qty++" class="w-7 h-7 rounded-full border border-gray-300 dark:border-gray-600 flex items-center justify-center text-gray-600 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700">+</button>
                </div>
                <button @click="removeItem(item.id)" class="text-red-500 hover:text-red-700 transition">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                </button>
            </div>
        </template>
    </div>

    <div class="border-t border-gray-200 dark:border-gray-700 pt-4 mt-2">
        <div class="flex justify-between mb-4">
            <span class="text-gray-600 dark:text-gray-400">Total</span>
            <span class="text-xl font-bold text-gray-900 dark:text-white" x-text="'$' + total"></span>
        </div>
        <button class="w-full py-3 bg-blue-600 text-white rounded-xl hover:bg-blue-700 font-semibold transition">Proceed to Checkout</button>
    </div>
</div>
@endsection

@section('code')
<div x-data="{ items: [{ id: 1, name: 'Product', price: 79.99, qty: 1 }], get total() { return this.items.reduce((sum, item) => sum + item.price * item.qty, 0).toFixed(2); } }">
    <template x-for="item in items" :key="item.id">
        <div class="flex items-center py-4 gap-4">
            <div class="flex-1">
                <p class="font-medium" x-text="item.name"></p>
                <p class="text-blue-600 font-semibold" x-text="'$' + item.price"></p>
            </div>
            <div class="flex items-center gap-2">
                <button @click="item.qty = Math.max(1, item.qty - 1)">-</button>
                <span x-text="item.qty"></span>
                <button @click="item.qty++">+</button>
            </div>
        </div>
    </template>
    <div class="flex justify-between font-bold">
        <span>Total</span>
        <span x-text="'$' + total"></span>
    </div>
</div>
@endsection
