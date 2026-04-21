@extends('showcase::components.component-layout')

@section('component-title', 'Tabs')
@section('component-description', 'Tabbed navigation for switching between content sections using Alpine.js.')

@section('demo')
<div x-data="{ activeTab: 'profile' }">
    <div class="border-b border-gray-200 dark:border-gray-700">
        <nav class="-mb-px flex space-x-8">
            <button @click="activeTab = 'profile'" :class="activeTab === 'profile' ? 'border-blue-500 text-blue-600 dark:text-blue-400' : 'border-transparent text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300 hover:border-gray-300'" class="whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm">
                Profile
            </button>
            <button @click="activeTab = 'settings'" :class="activeTab === 'settings' ? 'border-blue-500 text-blue-600 dark:text-blue-400' : 'border-transparent text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300 hover:border-gray-300'" class="whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm">
                Settings
            </button>
            <button @click="activeTab = 'notifications'" :class="activeTab === 'notifications' ? 'border-blue-500 text-blue-600 dark:text-blue-400' : 'border-transparent text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300 hover:border-gray-300'" class="whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm">
                Notifications
            </button>
        </nav>
    </div>
    <div class="mt-4">
        <div x-show="activeTab === 'profile'" class="text-gray-700 dark:text-gray-300">Profile content here...</div>
        <div x-show="activeTab === 'settings'" class="text-gray-700 dark:text-gray-300">Settings content here...</div>
        <div x-show="activeTab === 'notifications'" class="text-gray-700 dark:text-gray-300">Notifications content here...</div>
    </div>
</div>
@endsection

@section('code')
<div x-data="{ activeTab: 'profile' }">
    <div class="border-b border-gray-200 dark:border-gray-700">
        <nav class="-mb-px flex space-x-8">
            <button @click="activeTab = 'profile'" 
                    :class="activeTab === 'profile' ? 'border-blue-500 text-blue-600 dark:text-blue-400' : 'border-transparent text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300 hover:border-gray-300'" 
                    class="whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm">
                Profile
            </button>
            <button @click="activeTab = 'settings'" 
                    :class="activeTab === 'settings' ? 'border-blue-500 text-blue-600 dark:text-blue-400' : 'border-transparent text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300 hover:border-gray-300'" 
                    class="whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm">
                Settings
            </button>
            <button @click="activeTab = 'notifications'" 
                    :class="activeTab === 'notifications' ? 'border-blue-500 text-blue-600 dark:text-blue-400' : 'border-transparent text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300 hover:border-gray-300'" 
                    class="whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm">
                Notifications
            </button>
        </nav>
    </div>
    <div class="mt-4">
        <div x-show="activeTab === 'profile'" class="text-gray-700 dark:text-gray-300">Profile content here...</div>
        <div x-show="activeTab === 'settings'" class="text-gray-700 dark:text-gray-300">Settings content here...</div>
        <div x-show="activeTab === 'notifications'" class="text-gray-700 dark:text-gray-300">Notifications content here...</div>
    </div>
</div>
@endsection
