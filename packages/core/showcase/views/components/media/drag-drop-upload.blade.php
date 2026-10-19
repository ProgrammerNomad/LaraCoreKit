@extends('showcase::components.component-layout')

@section('demo')
<div x-data="{ files: [], dragging: false }">
    <div @drop.prevent="dragging = false; const droppedFiles = Array.from($event.dataTransfer.files); files = droppedFiles.map(f => ({ name: f.name, size: (f.size / 1024).toFixed(2) + ' KB' }));"
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
                <span class="text-sm text-gray-900 dark:text-white" x-text="file.name"></span>
                <span class="text-xs text-gray-500 dark:text-gray-400" x-text="file.size"></span>
            </li>
        </template>
    </ul>
</div>
@endsection

@section('code')
<div x-data="{ files: [], dragging: false }">
    <div @drop.prevent="dragging = false; files = Array.from($event.dataTransfer.files).map(f => ({ name: f.name, size: (f.size / 1024).toFixed(2) + ' KB' }));"
         @dragover.prevent="dragging = true"
         @dragleave.prevent="dragging = false"
         :class="dragging ? 'border-blue-500 bg-blue-50 dark:bg-blue-900/20' : 'border-gray-300 dark:border-gray-600'"
         class="border-2 border-dashed rounded-lg p-8 text-center transition">
        <p class="text-sm text-gray-600 dark:text-gray-400">Drag and drop files here, or click to select</p>
    </div>
</div>
@endsection
