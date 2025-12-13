@extends('showcase::layouts.showcase')

@section('page-title', 'Media Components')
@section('page-description', 'File uploads, image galleries, carousels, video and audio players')

@section('content')
<div class="max-w-7xl mx-auto space-y-8">

    <!-- Drag & Drop File Uploader -->
    @php
        $code = <<<'HTML'
<div x-data="{ files: [], dragging: false }">
    <div @drop.prevent="
            dragging = false;
            const droppedFiles = Array.from($event.dataTransfer.files);
            files = droppedFiles.map(f => ({ name: f.name, size: (f.size / 1024).toFixed(2) + ' KB' }));
        "
        @dragover.prevent="dragging = true"
        @dragleave.prevent="dragging = false"
        :class="dragging ? 'border-blue-500 bg-blue-50 dark:bg-blue-900/20' : 'border-gray-300 dark:border-gray-600'"
        class="border-2 border-dashed rounded-lg p-8 text-center transition">
        <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48">
            <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">Drag and drop files here, or click to select</p>
    </div>
    <ul x-show="files.length > 0" class="mt-4 space-y-2">
        <template x-for="file in files" :key="file.name">
            <li class="flex justify-between items-center p-3 bg-gray-50 dark:bg-gray-700 rounded">
                <span class="text-sm" x-text="file.name"></span>
                <span class="text-xs text-gray-500" x-text="file.size"></span>
            </li>
        </template>
    </ul>
</div>
HTML;
    @endphp

    <x-showcase::showcase-item
        title="Drag & Drop File Uploader"
        description="Drag and drop files with visual feedback and validation"
        :code="$code"
    >
        <div x-data="{ files: [], dragging: false }">
            <div @drop.prevent="
                    dragging = false;
                    const droppedFiles = Array.from($event.dataTransfer.files);
                    files = droppedFiles.map(f => ({ name: f.name, size: (f.size / 1024).toFixed(2) + ' KB' }));
                "
                @dragover.prevent="dragging = true"
                @dragleave.prevent="dragging = false"
                :class="dragging ? 'border-blue-500 bg-blue-50 dark:bg-blue-900/20' : 'border-gray-300 dark:border-gray-600'"
                class="border-2 border-dashed rounded-lg p-8 text-center transition cursor-pointer">
                <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48">
                    <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">Drag and drop files here, or click to select</p>
            </div>
            <ul x-show="files.length > 0" class="mt-4 space-y-2">
                <template x-for="file in files" :key="file.name">
                    <li class="flex justify-between items-center p-3 bg-gray-50 dark:bg-gray-700 rounded">
                        <span class="text-sm" x-text="file.name"></span>
                        <span class="text-xs text-gray-500" x-text="file.size"></span>
                    </li>
                </template>
            </ul>
        </div>
    </x-showcase::showcase-item>
    @component('showcase::components.showcase-item', [
        'title' => 'Drag & Drop File Uploader',
        'description' => 'Drag and drop files with visual feedback and validation',
        'code' => '<div x-data="{ files: [], dragging: false }">
    <div &#64;drop.prevent="
            dragging = false;
            const droppedFiles = Array.from($event.dataTransfer.files);
            files = droppedFiles.map(f => ({ name: f.name, size: (f.size / 1024).toFixed(2) + &#39; KB&#39; }));
        "
        &#64;dragover.prevent="dragging = true"
        &#64;dragleave.prevent="dragging = false"
        :class="dragging ? &#39;border-blue-500 bg-blue-50 dark:bg-blue-900/20&#39; : &#39;border-gray-300 dark:border-gray-600&#39;"
        class="border-2 border-dashed rounded-lg p-8 text-center transition">
        <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48">
            <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">Drag and drop files here, or click to select</p>
    </div>
    <ul x-show="files.length > 0" class="mt-4 space-y-2">
        <template x-for="file in files" :key="file.name">
            <li class="flex justify-between items-center p-3 bg-gray-50 dark:bg-gray-700 rounded">
                <span class="text-sm" x-text="file.name"></span>
                <span class="text-xs text-gray-500" x-text="file.size"></span>
            </li>
        </template>
    </ul>
</div>'
    ])
        @slot('preview', null, [])
            <div x-data="{ files: [], dragging: false }">
                <div @drop.prevent="
                        dragging = false;
                        const droppedFiles = Array.from($event.dataTransfer.files);
                        files = droppedFiles.map(f => ({ name: f.name, size: (f.size / 1024).toFixed(2) + ' KB' }));
                    "
                    @dragover.prevent="dragging = true"
                    @dragleave.prevent="dragging = false"
                    :class="dragging ? 'border-blue-500 bg-blue-50 dark:bg-blue-900/20' : 'border-gray-300 dark:border-gray-600'"
                    class="border-2 border-dashed rounded-lg p-8 text-center transition cursor-pointer">
                    <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48">
                        <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">Drag and drop files here, or click to select</p>
                </div>
                <ul x-show="files.length > 0" class="mt-4 space-y-2">
                    <template x-for="file in files" :key="file.name">
                        <li class="flex justify-between items-center p-3 bg-gray-50 dark:bg-gray-700 rounded">
                            <span class="text-sm" x-text="file.name"></span>
                            <span class="text-xs text-gray-500" x-text="file.size"></span>
                        </li>
                    </template>
                </ul>
            </div>
        @endslot
    @endcomponent

    <!-- Multiple File Upload with Progress -->
    @php
        $code = <<<'HTML'
<div x-data="{ 
    files: [],
    addFiles(event) {
        const newFiles = Array.from(event.target.files).map(f => ({
            name: f.name,
            size: (f.size / 1024).toFixed(2) + ' KB',
            progress: 0
        }));
        this.files = [...this.files, ...newFiles];
        this.uploadFiles();
    },
    uploadFiles() {
        this.files.forEach((file, index) => {
            const interval = setInterval(() => {
                if (file.progress < 100) {
                    file.progress += 10;
                } else {
                    clearInterval(interval);
                }
            }, 200);
        });
    }
}">
    <input type="file" multiple @change="addFiles($event)" class="block w-full text-sm">
    <div x-show="files.length > 0" class="mt-4 space-y-3">
        <template x-for="(file, index) in files" :key="index">
            <div class="p-3 bg-gray-50 dark:bg-gray-700 rounded">
                <div class="flex justify-between mb-2">
                    <span class="text-sm font-medium" x-text="file.name"></span>
                    <span class="text-xs text-gray-500" x-text="file.size"></span>
                </div>
                <div class="w-full bg-gray-200 dark:bg-gray-600 rounded-full h-2">
                    <div class="bg-blue-600 h-2 rounded-full transition-all" :style="`width: ${file.progress}%`"></div>
                </div>
            </div>
        </template>
    </div>
</div>
HTML;
    @endphp

    <x-showcase::showcase-item
        title="Multiple File Upload with Progress"
        description="Upload multiple files with individual progress bars"
        :code="$code"
    >
        <div x-data="{ 
            files: [],
            addFiles(event) {
                const newFiles = Array.from(event.target.files).map(f => ({
                    name: f.name,
                    size: (f.size / 1024).toFixed(2) + ' KB',
                    progress: 0
                }));
                this.files = [...this.files, ...newFiles];
                this.uploadFiles();
            },
            uploadFiles() {
                this.files.forEach((file, index) => {
                    const interval = setInterval(() => {
                        if (file.progress < 100) {
                            file.progress += 10;
                        } else {
                            clearInterval(interval);
                        }
                    }, 200);
                });
            }
        }">
            <input type="file" multiple @change="addFiles($event)" class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100 dark:file:bg-blue-900 dark:file:text-blue-300">
            <div x-show="files.length > 0" class="mt-4 space-y-3">
                <template x-for="(file, index) in files" :key="index">
                    <div class="p-3 bg-gray-50 dark:bg-gray-700 rounded">
                        <div class="flex justify-between mb-2">
                            <span class="text-sm font-medium" x-text="file.name"></span>
                            <span class="text-xs text-gray-500" x-text="file.size"></span>
                        </div>
                        <div class="w-full bg-gray-200 dark:bg-gray-600 rounded-full h-2">
                            <div class="bg-blue-600 h-2 rounded-full transition-all" :style="`width: ${file.progress}%`"></div>
                        </div>
                    </div>
                </template>
            </div>
        </div>
    </x-showcase::showcase-item>

    <!-- Image Gallery with Lightbox -->
    @component('showcase::components.showcase-item', [
        'title' => 'Image Gallery with Lightbox',
        'description' => 'Grid gallery with modal lightbox for viewing images',
        'code' => '<div x-data="{ 
    lightbox: false, 
    currentImage: &#39;&#39;,
    images: [
        &#39;https://picsum.photos/400/300?random=1&#39;,
        &#39;https://picsum.photos/400/300?random=2&#39;,
        &#39;https://picsum.photos/400/300?random=3&#39;,
        &#39;https://picsum.photos/400/300?random=4&#39;
    ]
}">
    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
        <template x-for="(image, index) in images" :key="index">
            <img :src="image" &#64;click="lightbox = true; currentImage = image" 
                class="w-full h-32 object-cover rounded-lg cursor-pointer hover:opacity-75 transition">
        </template>
    </div>
    
    <div x-show="lightbox" &#64;click.self="lightbox = false"
        class="fixed inset-0 bg-black bg-opacity-90 flex items-center justify-center z-50">
        <button &#64;click="lightbox = false" class="absolute top-4 right-4 text-white text-3xl">&times;</button>
        <img :src="currentImage" class="max-w-4xl max-h-screen">
    </div>
</div>'
    ])
        @slot('preview', null, [])
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
                    class="fixed inset-0 bg-black bg-opacity-90 flex items-center justify-center z-50" style="display: none;">
                    <button @click="lightbox = false" class="absolute top-4 right-4 text-white text-3xl hover:text-gray-300">&times;</button>
                    <img :src="currentImage" class="max-w-4xl max-h-screen rounded-lg">
                </div>
            </div>
        @endslot
    @endcomponent

    <!-- Image Carousel/Slider -->
    @component('showcase::components.showcase-item', [
        'title' => 'Image Carousel/Slider',
        'description' => 'Auto-playing carousel with navigation controls and indicators',
        'code' => '<div x-data="{
    current: 0,
    images: [
        &#39;https://picsum.photos/800/400?random=1&#39;,
        &#39;https://picsum.photos/800/400?random=2&#39;,
        &#39;https://picsum.photos/800/400?random=3&#39;
    ],
    next() { this.current = (this.current + 1) % this.images.length; },
    prev() { this.current = this.current === 0 ? this.images.length - 1 : this.current - 1; }
}" x-init="setInterval(() => next(), 5000)">
    <div class="relative overflow-hidden rounded-lg">
        <img :src="images[current]" class="w-full h-64 object-cover">
        
        <button &#64;click="prev()" class="absolute left-2 top-1/2 -translate-y-1/2 bg-white/80 p-2 rounded-full">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
            </svg>
        </button>
        
        <button &#64;click="next()" class="absolute right-2 top-1/2 -translate-y-1/2 bg-white/80 p-2 rounded-full">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
            </svg>
        </button>
        
        <div class="absolute bottom-4 left-1/2 -translate-x-1/2 flex gap-2">
            <template x-for="(img, index) in images" :key="index">
                <button &#64;click="current = index" 
                    :class="current === index ? &#39;bg-white&#39; : &#39;bg-white/50&#39;"
                    class="w-2 h-2 rounded-full"></button>
            </template>
        </div>
    </div>
</div>'
    ])
        @slot('preview', null, [])
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
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                        </svg>
                    </button>
                    
                    <button @click="next()" class="absolute right-2 top-1/2 -translate-y-1/2 bg-white/80 hover:bg-white p-2 rounded-full shadow transition">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </button>
                    
                    <div class="absolute bottom-4 left-1/2 -translate-x-1/2 flex gap-2">
                        <template x-for="(img, index) in images" :key="index">
                            <button @click="current = index" 
                                :class="current === index ? 'bg-white' : 'bg-white/50'"
                                class="w-2 h-2 rounded-full transition"></button>
                        </template>
                    </div>
                </div>
            </div>
        @endslot
    @endcomponent

    <!-- Video Player with Controls -->
    @component('showcase::components.showcase-item', [
        'title' => 'Video Player with Controls',
        'description' => 'Custom video player with play/pause and volume controls',
        'code' => '<div x-data="{ playing: false, volume: 50 }">
    <div class="relative bg-black rounded-lg overflow-hidden">
        <video x-ref="video" class="w-full" 
            src="https://www.w3schools.com/html/mov_bbb.mp4"
            &#64;click="playing = !playing; playing ? $refs.video.play() : $refs.video.pause()">
        </video>
        
        <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/80 p-4">
            <div class="flex items-center gap-4">
                <button &#64;click="playing = !playing; playing ? $refs.video.play() : $refs.video.pause()" 
                    class="text-white">
                    <svg x-show="!playing" class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M6.3 2.841A1.5 1.5 0 004 4.11V15.89a1.5 1.5 0 002.3 1.269l9.344-5.89a1.5 1.5 0 000-2.538L6.3 2.84z"/>
                    </svg>
                    <svg x-show="playing" class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M5 4a2 2 0 012-2h2a2 2 0 012 2v12a2 2 0 01-2 2H7a2 2 0 01-2-2V4zm8 0a2 2 0 012-2h2a2 2 0 012 2v12a2 2 0 01-2 2h-2a2 2 0 01-2-2V4z"/>
                    </svg>
                </button>
                
                <input type="range" min="0" max="100" x-model="volume" 
                    &#64;input="$refs.video.volume = volume / 100"
                    class="w-24">
                <span class="text-white text-sm" x-text="volume + &#39;%&#39;"></span>
            </div>
        </div>
    </div>
</div>'
    ])
        @slot('preview', null, [])
            <div x-data="{ playing: false, volume: 50 }">
                <div class="relative bg-black rounded-lg overflow-hidden">
                    <video x-ref="video" class="w-full" 
                        src="https://www.w3schools.com/html/mov_bbb.mp4"
                        @click="playing = !playing; playing ? $refs.video.play() : $refs.video.pause()">
                    </video>
                    
                    <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/80 p-4">
                        <div class="flex items-center gap-4">
                            <button @click="playing = !playing; playing ? $refs.video.play() : $refs.video.pause()" 
                                class="text-white hover:text-gray-300 transition">
                                <svg x-show="!playing" class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M6.3 2.841A1.5 1.5 0 004 4.11V15.89a1.5 1.5 0 002.3 1.269l9.344-5.89a1.5 1.5 0 000-2.538L6.3 2.84z"/>
                                </svg>
                                <svg x-show="playing" class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20" style="display: none;">
                                    <path d="M5 4a2 2 0 012-2h2a2 2 0 012 2v12a2 2 0 01-2 2H7a2 2 0 01-2-2V4zm8 0a2 2 0 012-2h2a2 2 0 012 2v12a2 2 0 01-2 2h-2a2 2 0 01-2-2V4z"/>
                                </svg>
                            </button>
                            
                            <input type="range" min="0" max="100" x-model="volume" 
                                @input="$refs.video.volume = volume / 100"
                                class="w-24">
                            <span class="text-white text-sm" x-text="volume + '%'"></span>
                        </div>
                    </div>
                </div>
            </div>
        @endslot
    @endcomponent

    <!-- Audio Player -->
    @component('showcase::components.showcase-item', [
        'title' => 'Audio Player',
        'description' => 'Custom audio player with progress bar and time display',
        'code' => '<div x-data="{ 
    playing: false, 
    currentTime: &#39;0:00&#39;, 
    duration: &#39;0:00&#39;,
    progress: 0
}" x-init="
    $refs.audio.addEventListener(&#39;loadedmetadata&#39;, () => {
        duration = Math.floor($refs.audio.duration / 60) + &#39;:&#39; + (Math.floor($refs.audio.duration % 60)).toString().padStart(2, &#39;0&#39;);
    });
    $refs.audio.addEventListener(&#39;timeupdate&#39;, () => {
        currentTime = Math.floor($refs.audio.currentTime / 60) + &#39;:&#39; + (Math.floor($refs.audio.currentTime % 60)).toString().padStart(2, &#39;0&#39;);
        progress = ($refs.audio.currentTime / $refs.audio.duration) * 100;
    });
">
    <div class="bg-gradient-to-r from-purple-500 to-pink-500 rounded-lg p-6 text-white">
        <audio x-ref="audio" src="https://www.soundhelix.com/examples/mp3/SoundHelix-Song-1.mp3"></audio>
        
        <div class="flex items-center gap-4">
            <button &#64;click="playing = !playing; playing ? $refs.audio.play() : $refs.audio.pause()"
                class="bg-white text-purple-600 p-3 rounded-full">
                <svg x-show="!playing" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M6.3 2.841A1.5 1.5 0 004 4.11V15.89a1.5 1.5 0 002.3 1.269l9.344-5.89a1.5 1.5 0 000-2.538L6.3 2.84z"/>
                </svg>
                <svg x-show="playing" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M5 4a2 2 0 012-2h2a2 2 0 012 2v12a2 2 0 01-2 2H7a2 2 0 01-2-2V4zm8 0a2 2 0 012-2h2a2 2 0 012 2v12a2 2 0 01-2 2h-2a2 2 0 01-2-2V4z"/>
                </svg>
            </button>
            
            <div class="flex-1">
                <div class="flex justify-between text-sm mb-2">
                    <span x-text="currentTime"></span>
                    <span x-text="duration"></span>
                </div>
                <div class="w-full bg-white/30 rounded-full h-2">
                    <div class="bg-white h-2 rounded-full transition-all" :style="`width: ${progress}%`"></div>
                </div>
            </div>
        </div>
    </div>
</div>'
    ])
        @slot('preview', null, [])
            <div x-data="{ 
                playing: false, 
                currentTime: '0:00', 
                duration: '0:00',
                progress: 0
            }" x-init="
                $refs.audio.addEventListener('loadedmetadata', () => {
                    duration = Math.floor($refs.audio.duration / 60) + ':' + (Math.floor($refs.audio.duration % 60)).toString().padStart(2, '0');
                });
                $refs.audio.addEventListener('timeupdate', () => {
                    currentTime = Math.floor($refs.audio.currentTime / 60) + ':' + (Math.floor($refs.audio.currentTime % 60)).toString().padStart(2, '0');
                    progress = ($refs.audio.currentTime / $refs.audio.duration) * 100;
                });
            ">
                <div class="bg-gradient-to-r from-purple-500 to-pink-500 rounded-lg p-6 text-white">
                    <audio x-ref="audio" src="https://www.soundhelix.com/examples/mp3/SoundHelix-Song-1.mp3"></audio>
                    
                    <div class="flex items-center gap-4">
                        <button @click="playing = !playing; playing ? $refs.audio.play() : $refs.audio.pause()"
                            class="bg-white text-purple-600 p-3 rounded-full hover:bg-gray-100 transition">
                            <svg x-show="!playing" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M6.3 2.841A1.5 1.5 0 004 4.11V15.89a1.5 1.5 0 002.3 1.269l9.344-5.89a1.5 1.5 0 000-2.538L6.3 2.84z"/>
                            </svg>
                            <svg x-show="playing" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" style="display: none;">
                                <path d="M5 4a2 2 0 012-2h2a2 2 0 012 2v12a2 2 0 01-2 2H7a2 2 0 01-2-2V4zm8 0a2 2 0 012-2h2a2 2 0 012 2v12a2 2 0 01-2 2h-2a2 2 0 01-2-2V4z"/>
                            </svg>
                        </button>
                        
                        <div class="flex-1">
                            <div class="flex justify-between text-sm mb-2">
                                <span x-text="currentTime"></span>
                                <span x-text="duration"></span>
                            </div>
                            <div class="w-full bg-white/30 rounded-full h-2 cursor-pointer">
                                <div class="bg-white h-2 rounded-full transition-all" :style="`width: ${progress}%`"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endslot
    @endcomponent

    <!-- PDF Viewer -->
    @component('showcase::components.showcase-item', [
        'title' => 'PDF Viewer',
        'description' => 'Embedded PDF viewer with iframe',
        'code' => '<div class="border dark:border-gray-600 rounded-lg overflow-hidden">
    <iframe src="https://www.w3.org/WAI/ER/tests/xhtml/testfiles/resources/pdf/dummy.pdf" 
        class="w-full h-96"></iframe>
</div>'
    ])
        @slot('preview', null, [])
            <div class="border dark:border-gray-600 rounded-lg overflow-hidden bg-gray-100 dark:bg-gray-800">
                <iframe src="https://www.w3.org/WAI/ER/tests/xhtml/testfiles/resources/pdf/dummy.pdf" 
                    class="w-full h-96"></iframe>
            </div>
        @endslot
    @endcomponent

    <!-- Avatar Upload with Crop Preview -->
    @component('showcase::components.showcase-item', [
        'title' => 'Avatar Upload with Crop Preview',
        'description' => 'Avatar upload with circular crop preview',
        'code' => '<div x-data="{ avatar: null }">
    <div class="flex items-center gap-6">
        <div class="relative">
            <div class="w-32 h-32 rounded-full bg-gray-200 dark:bg-gray-700 flex items-center justify-center overflow-hidden">
                <img x-show="avatar" :src="avatar" class="w-full h-full object-cover">
                <svg x-show="!avatar" class="w-16 h-16 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"/>
                </svg>
            </div>
            <label class="absolute bottom-0 right-0 bg-blue-600 text-white p-2 rounded-full cursor-pointer hover:bg-blue-700">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"/>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"/>
                </svg>
                <input type="file" class="hidden" accept="image/*" &#64;change="
                    const file = $event.target.files[0];
                    if (file) {
                        const reader = new FileReader();
                        reader.onload = (e) => avatar = e.target.result;
                        reader.readAsDataURL(file);
                    }
                ">
            </label>
        </div>
        <div>
            <h4 class="font-semibold text-gray-900 dark:text-white">Profile Picture</h4>
            <p class="text-sm text-gray-500 dark:text-gray-400">JPG, PNG or GIF. Max 2MB.</p>
        </div>
    </div>
</div>'
    ])
        @slot('preview', null, [])
            <div x-data="{ avatar: null }">
                <div class="flex items-center gap-6">
                    <div class="relative">
                        <div class="w-32 h-32 rounded-full bg-gray-200 dark:bg-gray-700 flex items-center justify-center overflow-hidden border-4 border-white dark:border-gray-800 shadow-lg">
                            <img x-show="avatar" :src="avatar" class="w-full h-full object-cover" style="display: none;">
                            <svg x-show="!avatar" class="w-16 h-16 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <label class="absolute bottom-0 right-0 bg-blue-600 text-white p-2 rounded-full cursor-pointer hover:bg-blue-700 transition shadow-lg">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                            <input type="file" class="hidden" accept="image/*" @change="
                                const file = $event.target.files[0];
                                if (file) {
                                    const reader = new FileReader();
                                    reader.onload = (e) => avatar = e.target.result;
                                    reader.readAsDataURL(file);
                                }
                            ">
                        </label>
                    </div>
                    <div>
                        <h4 class="font-semibold text-gray-900 dark:text-white">Profile Picture</h4>
                        <p class="text-sm text-gray-500 dark:text-gray-400">JPG, PNG or GIF. Max 2MB.</p>
                        <p class="text-xs text-gray-400 dark:text-gray-500 mt-1">Click the camera icon to upload</p>
                    </div>
                </div>
            </div>
        @endslot
    @endcomponent

    <!-- Image Gallery Grid -->
    @php
        $code = <<<'HTML'
<div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
    <div class="aspect-square overflow-hidden rounded-lg">
        <img src="https://picsum.photos/300/300?random=1" class="w-full h-full object-cover hover:scale-110 transition-transform duration-300 cursor-pointer" alt="Gallery image 1">
    </div>
    <div class="aspect-square overflow-hidden rounded-lg">
        <img src="https://picsum.photos/300/300?random=2" class="w-full h-full object-cover hover:scale-110 transition-transform duration-300 cursor-pointer" alt="Gallery image 2">
    </div>
    <div class="aspect-square overflow-hidden rounded-lg">
        <img src="https://picsum.photos/300/300?random=3" class="w-full h-full object-cover hover:scale-110 transition-transform duration-300 cursor-pointer" alt="Gallery image 3">
    </div>
    <div class="aspect-square overflow-hidden rounded-lg">
        <img src="https://picsum.photos/300/300?random=4" class="w-full h-full object-cover hover:scale-110 transition-transform duration-300 cursor-pointer" alt="Gallery image 4">
    </div>
</div>
HTML;
    @endphp

    <x-showcase::showcase-item
        title="Image Gallery Grid"
        description="Responsive grid layout for image galleries"
        :code="$code"
    >
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
            @foreach (range(1, 8) as $index)
                <div class="aspect-square overflow-hidden rounded-lg bg-gray-200 dark:bg-gray-700">
                    <img src="https://picsum.photos/300/300?random={{ $index }}" class="w-full h-full object-cover hover:scale-110 transition-transform duration-300 cursor-pointer" alt="Gallery image {{ $index }}">
                </div>
            @endforeach
        </div>
    </x-showcase::showcase-item>

    <!-- Gallery Lightbox -->
    @php
        $code = <<<'HTML'
<div x-data="{
    lightboxOpen: false,
    currentImage: 0,
    images: [
        'https://picsum.photos/800/600?random=11',
        'https://picsum.photos/800/600?random=12',
        'https://picsum.photos/800/600?random=13',
        'https://picsum.photos/800/600?random=14',
        'https://picsum.photos/800/600?random=15',
        'https://picsum.photos/800/600?random=16'
    ]
}">
    <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
        <template x-for="(image, index) in images" :key="image">
            <img :src="image" @click="lightboxOpen = true; currentImage = index" class="w-full aspect-square object-cover rounded-lg cursor-pointer hover:opacity-80 transition">
        </template>
    </div>

    <div x-show="lightboxOpen" @click.self="lightboxOpen = false" class="fixed inset-0 bg-black bg-opacity-90 z-50 flex items-center justify-center">
        <button @click.stop="currentImage = (currentImage + images.length - 1) % images.length" class="absolute left-4 text-white hover:text-gray-300 transition">
            <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
            </svg>
        </button>

        <img :src="images[currentImage]" class="max-w-4xl max-h-[90vh] rounded-lg" alt="Selected image">

        <button @click.stop="currentImage = (currentImage + 1) % images.length" class="absolute right-4 text-white hover:text-gray-300 transition">
            <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
            </svg>
        </button>

        <button @click="lightboxOpen = false" class="absolute top-4 right-4 text-white hover:text-gray-300 transition">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
            </svg>
        </button>
    </div>
</div>
HTML;
    @endphp

    <x-showcase::showcase-item
        title="Gallery Lightbox"
        description="Click images to view in fullscreen modal with navigation"
        :code="$code"
    >
        <div x-data="{
            lightboxOpen: false,
            currentImage: 0,
            images: [
                'https://picsum.photos/800/600?random=11',
                'https://picsum.photos/800/600?random=12',
                'https://picsum.photos/800/600?random=13',
                'https://picsum.photos/800/600?random=14',
                'https://picsum.photos/800/600?random=15',
                'https://picsum.photos/800/600?random=16'
            ]
        }">
            <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                <template x-for="(image, index) in images" :key="image">
                    <img :src="image" @click="lightboxOpen = true; currentImage = index" class="w-full aspect-square object-cover rounded-lg cursor-pointer hover:opacity-80 transition" alt="Gallery lightbox image">
                </template>
            </div>

            <div x-show="lightboxOpen" x-cloak @click.self="lightboxOpen = false" class="fixed inset-0 bg-black bg-opacity-95 z-50 flex items-center justify-center p-4">
                <button @click.stop="currentImage = (currentImage + images.length - 1) % images.length" class="absolute left-4 text-white hover:text-gray-300 transition">
                    <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                    </svg>
                </button>

                <img :src="images[currentImage]" class="max-w-4xl max-h-[90vh] rounded-lg" alt="Selected gallery image">

                <button @click.stop="currentImage = (currentImage + 1) % images.length" class="absolute right-4 text-white hover:text-gray-300 transition">
                    <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                </button>

                <button @click="lightboxOpen = false" class="absolute top-4 right-4 text-white hover:text-gray-300 transition">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
        </div>
    </x-showcase::showcase-item>

</div>
@endsection
