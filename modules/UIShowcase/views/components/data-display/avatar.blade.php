@extends('showcase::components.component-layout')

@section('demo')
<div class="space-y-6">
    <div>
        <h4 class="text-sm font-medium text-gray-700 dark:text-gray-300 mb-3">Initials Avatars</h4>
        <div class="flex items-center space-x-4">
            <div class="w-10 h-10 rounded-full bg-blue-500 flex items-center justify-center text-white font-medium">JD</div>
            <div class="w-12 h-12 rounded-full bg-green-500 flex items-center justify-center text-white font-medium">AB</div>
            <div class="w-14 h-14 rounded-full bg-purple-500 flex items-center justify-center text-white font-medium">XY</div>
        </div>
    </div>
    <div>
        <h4 class="text-sm font-medium text-gray-700 dark:text-gray-300 mb-3">Avatar with Status</h4>
        <div class="flex items-center space-x-6">
            <div class="relative">
                <div class="w-12 h-12 rounded-full bg-blue-500 flex items-center justify-center text-white font-medium">JD</div>
                <span class="absolute bottom-0 right-0 w-3.5 h-3.5 bg-green-500 border-2 border-white dark:border-gray-800 rounded-full"></span>
            </div>
            <div class="relative">
                <div class="w-12 h-12 rounded-full bg-purple-500 flex items-center justify-center text-white font-medium">AB</div>
                <span class="absolute bottom-0 right-0 w-3.5 h-3.5 bg-gray-400 border-2 border-white dark:border-gray-800 rounded-full"></span>
            </div>
        </div>
    </div>
    <div>
        <h4 class="text-sm font-medium text-gray-700 dark:text-gray-300 mb-3">Avatar Group</h4>
        <div class="flex -space-x-2">
            <div class="w-10 h-10 rounded-full bg-blue-500 flex items-center justify-center text-white font-medium border-2 border-white dark:border-gray-800">JD</div>
            <div class="w-10 h-10 rounded-full bg-green-500 flex items-center justify-center text-white font-medium border-2 border-white dark:border-gray-800">AB</div>
            <div class="w-10 h-10 rounded-full bg-purple-500 flex items-center justify-center text-white font-medium border-2 border-white dark:border-gray-800">XY</div>
            <div class="w-10 h-10 rounded-full bg-gray-500 flex items-center justify-center text-white font-medium border-2 border-white dark:border-gray-800 text-xs">+5</div>
        </div>
    </div>
</div>
@endsection

@section('code')
{{-- Initials Avatar --}}
<div class="w-10 h-10 rounded-full bg-blue-500 flex items-center justify-center text-white font-medium">JD</div>

{{-- Avatar with Status --}}
<div class="relative">
    <div class="w-12 h-12 rounded-full bg-blue-500 flex items-center justify-center text-white font-medium">JD</div>
    <span class="absolute bottom-0 right-0 w-3.5 h-3.5 bg-green-500 border-2 border-white dark:border-gray-800 rounded-full"></span>
</div>

{{-- Avatar Group --}}
<div class="flex -space-x-2">
    <div class="w-10 h-10 rounded-full bg-blue-500 flex items-center justify-center text-white font-medium border-2 border-white dark:border-gray-800">JD</div>
    <div class="w-10 h-10 rounded-full bg-gray-500 flex items-center justify-center text-white font-medium border-2 border-white dark:border-gray-800 text-xs">+5</div>
</div>
@endsection
