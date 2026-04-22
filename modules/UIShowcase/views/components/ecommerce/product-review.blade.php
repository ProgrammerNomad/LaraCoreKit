@extends('showcase::components.component-layout')

@section('demo')
<div class="bg-white dark:bg-gray-800 rounded-xl shadow p-6 max-w-2xl">
    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">Wireless Headphones Pro</h3>
    
    <div class="flex items-center gap-2 mb-4">
        <div class="flex text-yellow-400">
            @for($i = 0; $i < 5; $i++)
            <svg class="w-5 h-5 {{ $i < 4 ? 'text-yellow-400' : 'text-gray-300 dark:text-gray-600' }}" fill="currentColor" viewBox="0 0 20 20">
                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
            </svg>
            @endfor
        </div>
        <span class="text-sm text-gray-500 dark:text-gray-400">(128 reviews)</span>
    </div>

    <div class="space-y-3">
        <div x-data="{ helpful: 45, notHelpful: 3 }" class="bg-gray-50 dark:bg-gray-700 rounded-lg p-4">
            <div class="flex items-start gap-3">
                <div class="w-10 h-10 rounded-full bg-blue-500 flex items-center justify-center text-white text-sm font-medium flex-shrink-0">JD</div>
                <div class="flex-1">
                    <div class="flex items-center justify-between mb-1">
                        <span class="font-medium text-gray-900 dark:text-white text-sm">John Doe</span>
                        <div class="flex text-yellow-400">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                            <svg class="w-4 h-4 text-gray-300 dark:text-gray-600" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        </div>
                    </div>
                    <p class="text-gray-600 dark:text-gray-400 text-sm">Amazing sound quality! The noise cancellation is top-notch. Battery life easily lasts 30+ hours.</p>
                    <div class="flex items-center gap-4 mt-3 text-xs text-gray-500">
                        <span>April 15, 2026</span>
                        <button @click="helpful++" class="flex items-center gap-1 hover:text-green-600 transition">👍 <span x-text="helpful"></span></button>
                        <button @click="notHelpful++" class="flex items-center gap-1 hover:text-red-600 transition">👎 <span x-text="notHelpful"></span></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('code')
<div class="bg-gray-50 dark:bg-gray-700 rounded-lg p-4">
    <div class="flex items-start gap-3">
        <div class="w-10 h-10 rounded-full bg-blue-500 flex items-center justify-center text-white text-sm font-medium">JD</div>
        <div>
            <div class="flex items-center gap-2 mb-1">
                <span class="font-medium text-gray-900 dark:text-white">John Doe</span>
                {{-- Star rating --}}
            </div>
            <p class="text-gray-600 dark:text-gray-400 text-sm">Amazing sound quality!</p>
        </div>
    </div>
</div>
@endsection
