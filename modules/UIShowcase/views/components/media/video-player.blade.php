@extends('showcase::components.component-layout')

@section('demo')
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
                    <svg x-show="playing" class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20" style="display:none">
                        <path d="M5 4a2 2 0 012-2h2a2 2 0 012 2v12a2 2 0 01-2 2H7a2 2 0 01-2-2V4zm8 0a2 2 0 012-2h2a2 2 0 012 2v12a2 2 0 01-2 2h-2a2 2 0 01-2-2V4z"/>
                    </svg>
                </button>
                <input type="range" min="0" max="100" x-model="volume" @input="$refs.video.volume = volume / 100" class="w-24">
                <span class="text-white text-sm" x-text="volume + '%'"></span>
            </div>
        </div>
    </div>
</div>
@endsection

@section('code')
<div x-data="{ playing: false, volume: 50 }">
    <div class="relative bg-black rounded-lg overflow-hidden">
        <video x-ref="video" class="w-full" src="your-video.mp4" @click="playing = !playing; playing ? $refs.video.play() : $refs.video.pause()"></video>
        <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/80 p-4">
            <div class="flex items-center gap-4">
                <button @click="playing = !playing; playing ? $refs.video.play() : $refs.video.pause()" class="text-white">
                    <span x-show="!playing">&#9654;</span>
                    <span x-show="playing">&#9646;&#9646;</span>
                </button>
                <input type="range" min="0" max="100" x-model="volume" @input="$refs.video.volume = volume / 100" class="w-24">
            </div>
        </div>
    </div>
</div>
@endsection
