@extends('showcase::components.component-layout')

@section('demo')
<div class="space-y-4">
    <div x-data="{ show: false }" class="relative inline-block">
        <button @mouseenter="show = true" @mouseleave="show = false" class="px-4 py-2 bg-gray-200 dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded">
            Hover me (Top)
        </button>
        <div x-show="show" x-cloak class="absolute bottom-full left-1/2 transform -translate-x-1/2 mb-2 px-3 py-2 bg-gray-900 dark:bg-gray-700 text-white text-sm rounded whitespace-nowrap z-10">
            This is a tooltip
            <div class="absolute top-full left-1/2 transform -translate-x-1/2 border-4 border-transparent border-t-gray-900 dark:border-t-gray-700"></div>
        </div>
    </div>

    <div x-data="{ show: false }" class="relative inline-block ml-4">
        <button @mouseenter="show = true" @mouseleave="show = false" class="px-4 py-2 bg-gray-200 dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded">
            Hover me (Bottom)
        </button>
        <div x-show="show" x-cloak class="absolute top-full left-1/2 transform -translate-x-1/2 mt-2 px-3 py-2 bg-gray-900 dark:bg-gray-700 text-white text-sm rounded whitespace-nowrap z-10">
            Bottom tooltip
            <div class="absolute bottom-full left-1/2 transform -translate-x-1/2 border-4 border-transparent border-b-gray-900 dark:border-b-gray-700"></div>
        </div>
    </div>
</div>
@endsection

@section('code')
<div x-data="{ show: false }" class="relative inline-block">
    <button @mouseenter="show = true" @mouseleave="show = false" class="px-4 py-2 bg-gray-200 dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded">
        Hover me
    </button>
    <div x-show="show" x-cloak class="absolute bottom-full left-1/2 transform -translate-x-1/2 mb-2 px-3 py-2 bg-gray-900 dark:bg-gray-700 text-white text-sm rounded whitespace-nowrap">
        This is a tooltip
        <div class="absolute top-full left-1/2 transform -translate-x-1/2 border-4 border-transparent border-t-gray-900 dark:border-t-gray-700"></div>
    </div>
</div>
@endsection
