@extends('showcase::components.component-layout')

@section('demo')
<div x-data="{
    current: 0,
    images: [
        'https://picsum.photos/800/400?random=10',
        'https://picsum.photos/800/400?random=11',
        'https://picsum.photos/800/400?random=12',
        'https://picsum.photos/800/400?random=13'
    ],
    next() { this.current = (this.current + 1) % this.images.length; },
    prev() { this.current = this.current === 0 ? this.images.length - 1 : this.current - 1; }
}" x-init="setInterval(() => next(), 5000)">
    <div class="relative overflow-hidden rounded-lg bg-gray-200 dark:bg-gray-700">
        <img :src="images[current]" class="w-full h-64 object-cover">
        
        <button @click="prev()" class="absolute left-2 top-1/2 -translate-y-1/2 bg-white/80 hover:bg-white p-2 rounded-full shadow transition">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
        </button>
        
        <button @click="next()" class="absolute right-2 top-1/2 -translate-y-1/2 bg-white/80 hover:bg-white p-2 rounded-full shadow transition">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
        </button>
        
        <div class="absolute bottom-4 left-1/2 -translate-x-1/2 flex gap-2">
            <template x-for="(img, index) in images" :key="index">
                <button @click="current = index" :class="current === index ? 'bg-white' : 'bg-white/50'" class="w-2 h-2 rounded-full transition"></button>
            </template>
        </div>
    </div>
</div>
@endsection

@section('code')
<div x-data="{
    current: 0,
    images: ['https://picsum.photos/800/400?random=1', 'https://picsum.photos/800/400?random=2', 'https://picsum.photos/800/400?random=3'],
    next() { this.current = (this.current + 1) % this.images.length; },
    prev() { this.current = this.current === 0 ? this.images.length - 1 : this.current - 1; }
}" x-init="setInterval(() => next(), 5000)">
    <div class="relative overflow-hidden rounded-lg">
        <img :src="images[current]" class="w-full h-64 object-cover">
        <button @click="prev()" class="absolute left-2 top-1/2 -translate-y-1/2 bg-white/80 p-2 rounded-full">←</button>
        <button @click="next()" class="absolute right-2 top-1/2 -translate-y-1/2 bg-white/80 p-2 rounded-full">→</button>
    </div>
</div>
@endsection
