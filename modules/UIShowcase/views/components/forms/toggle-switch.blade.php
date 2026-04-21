@extends('showcase::components.component-layout')

@section('component-title', 'Toggle Switch')
@section('component-description', 'On/off toggle switch for boolean settings using Alpine.js.')

@section('demo')
<div class="max-w-md">
    <div x-data="{ enabled: false }" class="flex items-center justify-between">
        <span class="text-sm text-gray-700 dark:text-gray-300">Enable notifications</span>
        <button @click="enabled = !enabled" 
                type="button" 
                :class="enabled ? 'bg-blue-600' : 'bg-gray-200 dark:bg-gray-700'" 
                class="relative inline-flex h-6 w-11 flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
            <span :class="enabled ? 'translate-x-5' : 'translate-x-0'" 
                  class="pointer-events-none inline-block h-5 w-5 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out"></span>
        </button>
    </div>
</div>
@endsection

@section('code')
<div x-data="{ enabled: false }" class="flex items-center justify-between">
    <span class="text-sm text-gray-700 dark:text-gray-300">Enable notifications</span>
    <button @click="enabled = !enabled" 
            type="button" 
            :class="enabled ? 'bg-blue-600' : 'bg-gray-200 dark:bg-gray-700'" 
            class="relative inline-flex h-6 w-11 flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
        <span :class="enabled ? 'translate-x-5' : 'translate-x-0'" 
              class="pointer-events-none inline-block h-5 w-5 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out"></span>
    </button>
</div>
@endsection
