@extends('showcase::components.component-layout')

@section('demo')
<div x-data="{ 
    lightbox: false, 
    currentImage: '',
    images: [
        'https://picsum.photos/400/300?random=1',
        'https://picsum.photos/400/300?random=2',
        'https://picsum.photos/400/300?random=3',
        'https://picsum.photos/400/300?random=4',
        'https://picsum.photos/400/300?random=5',
        'https://picsum.photos/400/300?random=6'
    ]
}">
    <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
        <template x-for="(image, index) in images" :key="index">
            <img :src="image" @click="lightbox = true; currentImage = image" 
                class="w-full h-32 object-cover rounded-lg cursor-pointer hover:opacity-75 transition">
        </template>
    </div>
    
    <div x-show="lightbox" @click.self="lightbox = false" x-transition
        class="fixed inset-0 bg-black bg-opacity-90 flex items-center justify-center z-50" x-cloak>
        <button @click="lightbox = false" class="absolute top-4 right-4 text-white text-3xl hover:text-gray-300">&times;</button>
        <img :src="currentImage" class="max-w-4xl max-h-screen rounded-lg">
    </div>
</div>
@endsection

@section('code')
<div x-data="{ lightbox: false, currentImage: '', images: ['https://picsum.photos/400/300?random=1', 'https://picsum.photos/400/300?random=2', 'https://picsum.photos/400/300?random=3', 'https://picsum.photos/400/300?random=4'] }">
    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
        <template x-for="(image, index) in images" :key="index">
            <img :src="image" @click="lightbox = true; currentImage = image" class="w-full h-32 object-cover rounded-lg cursor-pointer hover:opacity-75 transition">
        </template>
    </div>
    <div x-show="lightbox" @click.self="lightbox = false" class="fixed inset-0 bg-black bg-opacity-90 flex items-center justify-center z-50" x-cloak>
        <button @click="lightbox = false" class="absolute top-4 right-4 text-white text-3xl">&times;</button>
        <img :src="currentImage" class="max-w-4xl max-h-screen">
    </div>
</div>
@endsection
