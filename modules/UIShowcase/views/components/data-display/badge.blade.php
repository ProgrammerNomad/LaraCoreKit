@extends('showcase::components.component-layout')

@section('demo')
<div class="space-y-4">
    <div>
        <h4 class="text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Pill Badges</h4>
        <div class="flex flex-wrap gap-2">
            <span class="px-3 py-1 text-xs font-medium rounded-full bg-blue-100 text-blue-800 dark:bg-blue-900/30 dark:text-blue-400">Primary</span>
            <span class="px-3 py-1 text-xs font-medium rounded-full bg-green-100 text-green-800 dark:bg-green-900/30 dark:text-green-400">Success</span>
            <span class="px-3 py-1 text-xs font-medium rounded-full bg-yellow-100 text-yellow-800 dark:bg-yellow-900/30 dark:text-yellow-400">Warning</span>
            <span class="px-3 py-1 text-xs font-medium rounded-full bg-red-100 text-red-800 dark:bg-red-900/30 dark:text-red-400">Danger</span>
            <span class="px-3 py-1 text-xs font-medium rounded-full bg-gray-100 text-gray-800 dark:bg-gray-700 dark:text-gray-300">Default</span>
        </div>
    </div>
    <div>
        <h4 class="text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Notification Badges</h4>
        <div class="flex items-center gap-4">
            <div class="relative inline-flex">
                <button class="px-4 py-2 bg-gray-200 dark:bg-gray-700 text-gray-800 dark:text-white rounded-lg">Inbox</button>
                <span class="absolute -top-2 -right-2 flex h-5 w-5 items-center justify-center rounded-full bg-red-500 text-white text-xs font-bold">3</span>
            </div>
            <div class="relative inline-flex">
                <button class="px-4 py-2 bg-gray-200 dark:bg-gray-700 text-gray-800 dark:text-white rounded-lg">Notifications</button>
                <span class="absolute -top-2 -right-2 flex h-5 w-5 items-center justify-center rounded-full bg-blue-500 text-white text-xs font-bold">12</span>
            </div>
        </div>
    </div>
</div>
@endsection

@section('code')
<div class="flex flex-wrap gap-2">
    <span class="px-3 py-1 text-xs font-medium rounded-full bg-blue-100 text-blue-800 dark:bg-blue-900/30 dark:text-blue-400">Primary</span>
    <span class="px-3 py-1 text-xs font-medium rounded-full bg-green-100 text-green-800 dark:bg-green-900/30 dark:text-green-400">Success</span>
    <span class="px-3 py-1 text-xs font-medium rounded-full bg-yellow-100 text-yellow-800 dark:bg-yellow-900/30 dark:text-yellow-400">Warning</span>
    <span class="px-3 py-1 text-xs font-medium rounded-full bg-red-100 text-red-800 dark:bg-red-900/30 dark:text-red-400">Danger</span>
    <span class="px-3 py-1 text-xs font-medium rounded-full bg-gray-100 text-gray-800 dark:bg-gray-700 dark:text-gray-300">Default</span>
</div>
@endsection
