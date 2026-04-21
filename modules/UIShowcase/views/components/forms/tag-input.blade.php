@extends('showcase::components.component-layout')

@section('component-title', 'Tags Input')
@section('component-description', 'Add and remove tags dynamically using Alpine.js.')

@section('demo')
<div class="max-w-md">
    <div x-data="{ tags: ['Laravel', 'PHP'], newTag: '' }">
        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
            Skills
        </label>
        <div class="flex flex-wrap gap-2 p-2 border border-gray-300 dark:border-gray-600 rounded-lg bg-white dark:bg-gray-700">
            <template x-for="(tag, index) in tags" :key="index">
                <span class="inline-flex items-center px-3 py-1 rounded-full text-sm bg-blue-100 dark:bg-blue-900/30 text-blue-800 dark:text-blue-300">
                    <span x-text="tag"></span>
                    <button @click="tags.splice(index, 1)" class="ml-2 text-blue-600 dark:text-blue-400 hover:text-blue-800 dark:hover:text-blue-200">
                        <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </span>
            </template>
            <input x-model="newTag" 
                   @keydown.enter.prevent="if(newTag.trim()) { tags.push(newTag.trim()); newTag = ''; }"
                   type="text" 
                   placeholder="Add tag..." 
                   class="flex-1 min-w-[120px] px-2 py-1 border-0 focus:ring-0 bg-transparent text-gray-900 dark:text-white">
        </div>
    </div>
</div>
@endsection

@section('code')
<div x-data="{ tags: ['Laravel', 'PHP'], newTag: '' }">
    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
        Skills
    </label>
    <div class="flex flex-wrap gap-2 p-2 border border-gray-300 dark:border-gray-600 rounded-lg bg-white dark:bg-gray-700">
        <template x-for="(tag, index) in tags" :key="index">
            <span class="inline-flex items-center px-3 py-1 rounded-full text-sm bg-blue-100 dark:bg-blue-900/30 text-blue-800 dark:text-blue-300">
                <span x-text="tag"></span>
                <button @click="tags.splice(index, 1)" class="ml-2 text-blue-600 dark:text-blue-400 hover:text-blue-800 dark:hover:text-blue-200">
                    <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </button>
            </span>
        </template>
        <input x-model="newTag" 
               @keydown.enter.prevent="if(newTag.trim()) { tags.push(newTag.trim()); newTag = ''; }"
               type="text" 
               placeholder="Add tag..." 
               class="flex-1 min-w-[120px] px-2 py-1 border-0 focus:ring-0 bg-transparent text-gray-900 dark:text-white">
    </div>
</div>
@endsection
