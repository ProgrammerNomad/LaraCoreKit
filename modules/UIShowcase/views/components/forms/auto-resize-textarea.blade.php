@extends('showcase::components.component-layout')

@section('component-title', 'Auto-resizing Textarea')
@section('component-description', 'Textarea that automatically grows with content using Alpine.js.')

@section('demo')
<div class="max-w-md">
    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
        Comment
    </label>
    <textarea @input="$el.style.height = 'auto'; $el.style.height = $el.scrollHeight + 'px'"
              rows="3" 
              placeholder="Type your comment..." 
              class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent bg-white dark:bg-gray-700 text-gray-900 dark:text-white resize-none"></textarea>
</div>
@endsection

@section('code')
<div>
    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
        Comment
    </label>
    <textarea @input="$el.style.height = 'auto'; $el.style.height = $el.scrollHeight + 'px'"
              rows="3" 
              placeholder="Type your comment..." 
              class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent bg-white dark:bg-gray-700 text-gray-900 dark:text-white resize-none"></textarea>
</div>
@endsection
