@extends('showcase::layouts.showcase')

@section('page-title', 'Data Display')
@section('page-description', 'Tables, badges, avatars, and data presentation')

@section('content')
<div class="max-w-7xl mx-auto space-y-8">

    <!-- Badge Variants -->
    @component('showcase::components.showcase-item', [
        'title' => 'Badges',
        'description' => 'Status and label badges',
        'code' => '<div class="flex flex-wrap gap-2">
    <span class="px-3 py-1 text-xs font-medium rounded-full bg-blue-100 text-blue-800 dark:bg-blue-900/30 dark:text-blue-400">Primary</span>
    <span class="px-3 py-1 text-xs font-medium rounded-full bg-green-100 text-green-800 dark:bg-green-900/30 dark:text-green-400">Success</span>
    <span class="px-3 py-1 text-xs font-medium rounded-full bg-yellow-100 text-yellow-800 dark:bg-yellow-900/30 dark:text-yellow-400">Warning</span>
    <span class="px-3 py-1 text-xs font-medium rounded-full bg-red-100 text-red-800 dark:bg-red-900/30 dark:text-red-400">Danger</span>
    <span class="px-3 py-1 text-xs font-medium rounded-full bg-gray-100 text-gray-800 dark:bg-gray-700 dark:text-gray-300">Default</span>
</div>'
    ])
        @slot('preview')
            <div class="flex flex-wrap gap-2">
                <span class="px-3 py-1 text-xs font-medium rounded-full bg-blue-100 text-blue-800 dark:bg-blue-900/30 dark:text-blue-400">Primary</span>
                <span class="px-3 py-1 text-xs font-medium rounded-full bg-green-100 text-green-800 dark:bg-green-900/30 dark:text-green-400">Success</span>
                <span class="px-3 py-1 text-xs font-medium rounded-full bg-yellow-100 text-yellow-800 dark:bg-yellow-900/30 dark:text-yellow-400">Warning</span>
                <span class="px-3 py-1 text-xs font-medium rounded-full bg-red-100 text-red-800 dark:bg-red-900/30 dark:text-red-400">Danger</span>
                <span class="px-3 py-1 text-xs font-medium rounded-full bg-gray-100 text-gray-800 dark:bg-gray-700 dark:text-gray-300">Default</span>
            </div>
        @endslot
    @endcomponent

    <!-- Avatar -->
    @component('showcase::components.showcase-item', [
        'title' => 'Avatar',
        'description' => 'User profile avatars',
        'code' => '<div class="flex items-center space-x-4">
    <div class="w-10 h-10 rounded-full bg-blue-500 flex items-center justify-center text-white font-medium">JD</div>
    <div class="w-12 h-12 rounded-full bg-green-500 flex items-center justify-center text-white font-medium">AB</div>
    <div class="w-14 h-14 rounded-full bg-purple-500 flex items-center justify-center text-white font-medium">XY</div>
</div>'
    ])
        @slot('preview')
            <div class="flex items-center space-x-4">
                <div class="w-10 h-10 rounded-full bg-blue-500 flex items-center justify-center text-white font-medium">JD</div>
                <div class="w-12 h-12 rounded-full bg-green-500 flex items-center justify-center text-white font-medium">AB</div>
                <div class="w-14 h-14 rounded-full bg-purple-500 flex items-center justify-center text-white font-medium">XY</div>
            </div>
        @endslot
    @endcomponent

    <!-- Avatar Group -->
    @component('showcase::components.showcase-item', [
        'title' => 'Avatar Group',
        'description' => 'Stacked avatars for groups',
        'code' => '<div class="flex -space-x-2">
    <div class="w-10 h-10 rounded-full bg-blue-500 flex items-center justify-center text-white font-medium border-2 border-white dark:border-gray-800">JD</div>
    <div class="w-10 h-10 rounded-full bg-green-500 flex items-center justify-center text-white font-medium border-2 border-white dark:border-gray-800">AB</div>
    <div class="w-10 h-10 rounded-full bg-purple-500 flex items-center justify-center text-white font-medium border-2 border-white dark:border-gray-800">XY</div>
    <div class="w-10 h-10 rounded-full bg-gray-500 flex items-center justify-center text-white font-medium border-2 border-white dark:border-gray-800 text-xs">+5</div>
</div>'
    ])
        @slot('preview')
            <div class="flex -space-x-2">
                <div class="w-10 h-10 rounded-full bg-blue-500 flex items-center justify-center text-white font-medium border-2 border-white dark:border-gray-800">JD</div>
                <div class="w-10 h-10 rounded-full bg-green-500 flex items-center justify-center text-white font-medium border-2 border-white dark:border-gray-800">AB</div>
                <div class="w-10 h-10 rounded-full bg-purple-500 flex items-center justify-center text-white font-medium border-2 border-white dark:border-gray-800">XY</div>
                <div class="w-10 h-10 rounded-full bg-gray-500 flex items-center justify-center text-white font-medium border-2 border-white dark:border-gray-800 text-xs">+5</div>
            </div>
        @endslot
    @endcomponent

    <!-- Simple Table -->
    @component('showcase::components.showcase-item', [
        'title' => 'Simple Table',
        'description' => 'Basic data table',
        'code' => '<div class="overflow-x-auto">
    <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
        <thead class="bg-gray-50 dark:bg-gray-800">
            <tr>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">Name</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">Email</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">Role</th>
            </tr>
        </thead>
        <tbody class="bg-white dark:bg-gray-900 divide-y divide-gray-200 dark:divide-gray-700">
            <tr>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-white">John Doe</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">john&#64;example.com</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">Admin</td>
            </tr>
            <tr>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-white">Jane Smith</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">jane&#64;example.com</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">Editor</td>
            </tr>
        </tbody>
    </table>
</div>'
    ])
        @slot('preview')
            <div class="overflow-x-auto bg-white dark:bg-gray-900 rounded-lg shadow">
                <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                    <thead class="bg-gray-50 dark:bg-gray-800">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">Name</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">Email</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">Role</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white dark:bg-gray-900 divide-y divide-gray-200 dark:divide-gray-700">
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-white">John Doe</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">john@example.com</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">Admin</td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-white">Jane Smith</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">jane@example.com</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">Editor</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        @endslot
    @endcomponent

    <!-- Table with Actions -->
    @component('showcase::components.showcase-item', [
        'title' => 'Table with Actions',
        'description' => 'Data table with row actions',
        'code' => '<div class="overflow-x-auto">
    <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
        <thead class="bg-gray-50 dark:bg-gray-800">
            <tr>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase">Product</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase">Price</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase">Status</th>
                <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 dark:text-gray-400 uppercase">Actions</th>
            </tr>
        </thead>
        <tbody class="bg-white dark:bg-gray-900 divide-y divide-gray-200 dark:divide-gray-700">
            <tr>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-white">Product A</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">$29.99</td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <span class="px-2 py-1 text-xs rounded-full bg-green-100 text-green-800 dark:bg-green-900/30 dark:text-green-400">Active</span>
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-right text-sm">
                    <button class="text-blue-600 dark:text-blue-400 hover:text-blue-900 dark:hover:text-blue-300 mr-3">Edit</button>
                    <button class="text-red-600 dark:text-red-400 hover:text-red-900 dark:hover:text-red-300">Delete</button>
                </td>
            </tr>
        </tbody>
    </table>
</div>'
    ])
        @slot('preview')
            <div class="overflow-x-auto bg-white dark:bg-gray-900 rounded-lg shadow">
                <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                    <thead class="bg-gray-50 dark:bg-gray-800">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase">Product</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase">Price</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase">Status</th>
                            <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 dark:text-gray-400 uppercase">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white dark:bg-gray-900 divide-y divide-gray-200 dark:divide-gray-700">
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-white">Product A</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">$29.99</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 py-1 text-xs rounded-full bg-green-100 text-green-800 dark:bg-green-900/30 dark:text-green-400">Active</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm">
                                <button class="text-blue-600 dark:text-blue-400 hover:text-blue-900 dark:hover:text-blue-300 mr-3">Edit</button>
                                <button class="text-red-600 dark:text-red-400 hover:text-red-900 dark:hover:text-red-300">Delete</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        @endslot
    @endcomponent

    <!-- Timeline -->
    @component('showcase::components.showcase-item', [
        'title' => 'Timeline',
        'description' => 'Vertical activity timeline',
        'code' => '<div class="flow-root">
    <ul class="-mb-8">
        <li>
            <div class="relative pb-8">
                <span class="absolute top-4 left-4 -ml-px h-full w-0.5 bg-gray-200 dark:bg-gray-700"></span>
                <div class="relative flex space-x-3">
                    <div>
                        <span class="h-8 w-8 rounded-full bg-blue-500 flex items-center justify-center">
                            <svg class="h-5 w-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </span>
                    </div>
                    <div class="min-w-0 flex-1 pt-1.5">
                        <p class="text-sm text-gray-900 dark:text-white">Order completed</p>
                        <p class="text-sm text-gray-500 dark:text-gray-400">2 hours ago</p>
                    </div>
                </div>
            </div>
        </li>
        <li>
            <div class="relative pb-8">
                <div class="relative flex space-x-3">
                    <div>
                        <span class="h-8 w-8 rounded-full bg-green-500 flex items-center justify-center">
                            <svg class="h-5 w-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path>
                                <path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd"></path>
                            </svg>
                        </span>
                    </div>
                    <div class="min-w-0 flex-1 pt-1.5">
                        <p class="text-sm text-gray-900 dark:text-white">Order shipped</p>
                        <p class="text-sm text-gray-500 dark:text-gray-400">1 day ago</p>
                    </div>
                </div>
            </div>
        </li>
    </ul>
</div>'
    ])
        @slot('preview')
            <div class="flow-root">
                <ul class="-mb-8">
                    <li>
                        <div class="relative pb-8">
                            <span class="absolute top-4 left-4 -ml-px h-full w-0.5 bg-gray-200 dark:bg-gray-700"></span>
                            <div class="relative flex space-x-3">
                                <div>
                                    <span class="h-8 w-8 rounded-full bg-blue-500 flex items-center justify-center">
                                        <svg class="h-5 w-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                        </svg>
                                    </span>
                                </div>
                                <div class="min-w-0 flex-1 pt-1.5">
                                    <p class="text-sm text-gray-900 dark:text-white">Order completed</p>
                                    <p class="text-sm text-gray-500 dark:text-gray-400">2 hours ago</p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="relative pb-8">
                            <div class="relative flex space-x-3">
                                <div>
                                    <span class="h-8 w-8 rounded-full bg-green-500 flex items-center justify-center">
                                        <svg class="h-5 w-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path>
                                            <path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd"></path>
                                        </svg>
                                    </span>
                                </div>
                                <div class="min-w-0 flex-1 pt-1.5">
                                    <p class="text-sm text-gray-900 dark:text-white">Order shipped</p>
                                    <p class="text-sm text-gray-500 dark:text-gray-400">1 day ago</p>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        @endslot
    @endcomponent

    <!-- Progress Bar -->
    @component('showcase::components.showcase-item', [
        'title' => 'Progress Bar',
        'description' => 'Progress indicator',
        'code' => '<div>
    <div class="flex justify-between mb-1">
        <span class="text-sm font-medium text-gray-700 dark:text-gray-300">Progress</span>
        <span class="text-sm font-medium text-gray-700 dark:text-gray-300">75%</span>
    </div>
    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2.5">
        <div class="bg-blue-600 h-2.5 rounded-full" style="width: 75%"></div>
    </div>
</div>'
    ])
        @slot('preview')
            <div>
                <div class="flex justify-between mb-1">
                    <span class="text-sm font-medium text-gray-700 dark:text-gray-300">Progress</span>
                    <span class="text-sm font-medium text-gray-700 dark:text-gray-300">75%</span>
                </div>
                <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2.5">
                    <div class="bg-blue-600 h-2.5 rounded-full" style="width: 75%"></div>
                </div>
            </div>
        @endslot
    @endcomponent

    <!-- Stat Card -->
    @component('showcase::components.showcase-item', [
        'title' => 'Stat Card',
        'description' => 'Statistical display card',
        'code' => '<div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6">
    <div class="flex items-center justify-between">
        <div>
            <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Total Revenue</p>
            <p class="text-3xl font-bold text-gray-900 dark:text-white mt-2">$45,231</p>
        </div>
        <div class="p-3 bg-blue-100 dark:bg-blue-900/30 rounded-full">
            <svg class="w-8 h-8 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
        </div>
    </div>
    <div class="mt-4 flex items-center text-sm">
        <span class="text-green-600 dark:text-green-400 font-medium">+12.5%</span>
        <span class="text-gray-500 dark:text-gray-400 ml-2">from last month</span>
    </div>
</div>'
    ])
        @slot('preview')
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Total Revenue</p>
                        <p class="text-3xl font-bold text-gray-900 dark:text-white mt-2">$45,231</p>
                    </div>
                    <div class="p-3 bg-blue-100 dark:bg-blue-900/30 rounded-full">
                        <svg class="w-8 h-8 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                </div>
                <div class="mt-4 flex items-center text-sm">
                    <span class="text-green-600 dark:text-green-400 font-medium">+12.5%</span>
                    <span class="text-gray-500 dark:text-gray-400 ml-2">from last month</span>
                </div>
            </div>
        @endslot
    @endcomponent

    <!-- Description List -->
    @component('showcase::components.showcase-item', [
        'title' => 'Description List',
        'description' => 'Key-value pair display',
        'code' => '<div class="bg-white dark:bg-gray-800 rounded-lg shadow overflow-hidden">
    <div class="px-6 py-5 border-b border-gray-200 dark:border-gray-700">
        <h3 class="text-lg font-medium text-gray-900 dark:text-white">User Information</h3>
    </div>
    <dl class="divide-y divide-gray-200 dark:divide-gray-700">
        <div class="px-6 py-4 grid grid-cols-3 gap-4">
            <dt class="text-sm font-medium text-gray-500 dark:text-gray-400">Name</dt>
            <dd class="text-sm text-gray-900 dark:text-white col-span-2">John Doe</dd>
        </div>
        <div class="px-6 py-4 grid grid-cols-3 gap-4">
            <dt class="text-sm font-medium text-gray-500 dark:text-gray-400">Email</dt>
            <dd class="text-sm text-gray-900 dark:text-white col-span-2">john&#64;example.com</dd>
        </div>
        <div class="px-6 py-4 grid grid-cols-3 gap-4">
            <dt class="text-sm font-medium text-gray-500 dark:text-gray-400">Role</dt>
            <dd class="text-sm text-gray-900 dark:text-white col-span-2">Administrator</dd>
        </div>
    </dl>
</div>'
    ])
        @slot('preview')
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow overflow-hidden">
                <div class="px-6 py-5 border-b border-gray-200 dark:border-gray-700">
                    <h3 class="text-lg font-medium text-gray-900 dark:text-white">User Information</h3>
                </div>
                <dl class="divide-y divide-gray-200 dark:divide-gray-700">
                    <div class="px-6 py-4 grid grid-cols-3 gap-4">
                        <dt class="text-sm font-medium text-gray-500 dark:text-gray-400">Name</dt>
                        <dd class="text-sm text-gray-900 dark:text-white col-span-2">John Doe</dd>
                    </div>
                    <div class="px-6 py-4 grid grid-cols-3 gap-4">
                        <dt class="text-sm font-medium text-gray-500 dark:text-gray-400">Email</dt>
                        <dd class="text-sm text-gray-900 dark:text-white col-span-2">john@example.com</dd>
                    </div>
                    <div class="px-6 py-4 grid grid-cols-3 gap-4">
                        <dt class="text-sm font-medium text-gray-500 dark:text-gray-400">Role</dt>
                        <dd class="text-sm text-gray-900 dark:text-white col-span-2">Administrator</dd>
                    </div>
                </dl>
            </div>
        @endslot
    @endcomponent

    <!-- Empty State -->
    @component('showcase::components.showcase-item', [
        'title' => 'Empty State',
        'description' => 'Display when no data is available',
        'code' => '<div class="bg-white dark:bg-gray-800 rounded-lg shadow p-12 text-center">
    <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path>
    </svg>
    <h3 class="mt-2 text-sm font-medium text-gray-900 dark:text-white">No data</h3>
    <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">Get started by creating a new item.</p>
    <div class="mt-6">
        <button class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
            Create New
        </button>
    </div>
</div>'
    ])
        @slot('preview')
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow p-12 text-center">
                <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path>
                </svg>
                <h3 class="mt-2 text-sm font-medium text-gray-900 dark:text-white">No data</h3>
                <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">Get started by creating a new item.</p>
                <div class="mt-6">
                    <button class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
                        Create New
                    </button>
                </div>
            </div>
        @endslot
    @endcomponent

    <!-- Striped Table -->
    @component('showcase::components.showcase-item', [
        'title' => 'Striped Table',
        'description' => 'Table with alternating row colors',
        'code' => '<div class="overflow-x-auto bg-white dark:bg-gray-900 rounded-lg shadow">
    <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
        <thead class="bg-gray-50 dark:bg-gray-800">
            <tr>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase">Name</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase">Email</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase">Status</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
            <tr class="bg-white dark:bg-gray-900">
                <td class="px-6 py-4 text-sm text-gray-900 dark:text-white">John Doe</td>
                <td class="px-6 py-4 text-sm text-gray-500 dark:text-gray-400">john&#64;example.com</td>
                <td class="px-6 py-4"><span class="px-2 py-1 text-xs rounded-full bg-green-100 text-green-800 dark:bg-green-900/30 dark:text-green-400">Active</span></td>
            </tr>
            <tr class="bg-gray-50 dark:bg-gray-800">
                <td class="px-6 py-4 text-sm text-gray-900 dark:text-white">Jane Smith</td>
                <td class="px-6 py-4 text-sm text-gray-500 dark:text-gray-400">jane&#64;example.com</td>
                <td class="px-6 py-4"><span class="px-2 py-1 text-xs rounded-full bg-green-100 text-green-800 dark:bg-green-900/30 dark:text-green-400">Active</span></td>
            </tr>
            <tr class="bg-white dark:bg-gray-900">
                <td class="px-6 py-4 text-sm text-gray-900 dark:text-white">Bob Johnson</td>
                <td class="px-6 py-4 text-sm text-gray-500 dark:text-gray-400">bob&#64;example.com</td>
                <td class="px-6 py-4"><span class="px-2 py-1 text-xs rounded-full bg-gray-100 text-gray-800 dark:bg-gray-700 dark:text-gray-300">Inactive</span></td>
            </tr>
        </tbody>
    </table>
</div>'
    ])
        @slot('preview')
            <div class="overflow-x-auto bg-white dark:bg-gray-900 rounded-lg shadow">
                <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                    <thead class="bg-gray-50 dark:bg-gray-800">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase">Name</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase">Email</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase">Status</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                        <tr class="bg-white dark:bg-gray-900">
                            <td class="px-6 py-4 text-sm text-gray-900 dark:text-white">John Doe</td>
                            <td class="px-6 py-4 text-sm text-gray-500 dark:text-gray-400">john@example.com</td>
                            <td class="px-6 py-4"><span class="px-2 py-1 text-xs rounded-full bg-green-100 text-green-800 dark:bg-green-900/30 dark:text-green-400">Active</span></td>
                        </tr>
                        <tr class="bg-gray-50 dark:bg-gray-800">
                            <td class="px-6 py-4 text-sm text-gray-900 dark:text-white">Jane Smith</td>
                            <td class="px-6 py-4 text-sm text-gray-500 dark:text-gray-400">jane@example.com</td>
                            <td class="px-6 py-4"><span class="px-2 py-1 text-xs rounded-full bg-green-100 text-green-800 dark:bg-green-900/30 dark:text-green-400">Active</span></td>
                        </tr>
                        <tr class="bg-white dark:bg-gray-900">
                            <td class="px-6 py-4 text-sm text-gray-900 dark:text-white">Bob Johnson</td>
                            <td class="px-6 py-4 text-sm text-gray-500 dark:text-gray-400">bob@example.com</td>
                            <td class="px-6 py-4"><span class="px-2 py-1 text-xs rounded-full bg-gray-100 text-gray-800 dark:bg-gray-700 dark:text-gray-300">Inactive</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        @endslot
    @endcomponent

    <!-- Table with Sorting -->
    @component('showcase::components.showcase-item', [
        'title' => 'Table with Sorting',
        'description' => 'Sortable table columns',
        'code' => '<div x-data="{ 
    items: [
        { name: \'John Doe\', email: \'john&#64;example.com\', role: \'Admin\' },
        { name: \'Jane Smith\', email: \'jane&#64;example.com\', role: \'Editor\' },
        { name: \'Bob Johnson\', email: \'bob&#64;example.com\', role: \'User\' }
    ],
    sortBy: \'name\',
    sortDir: \'asc\',
    sort(field) {
        if(this.sortBy === field) {
            this.sortDir = this.sortDir === \'asc\' ? \'desc\' : \'asc\';
        } else {
            this.sortBy = field;
            this.sortDir = \'asc\';
        }
        this.items.sort((a, b) => {
            let modifier = this.sortDir === \'asc\' ? 1 : -1;
            if(a[field] < b[field]) return -1 * modifier;
            if(a[field] > b[field]) return 1 * modifier;
            return 0;
        });
    }
}">
    <div class="overflow-x-auto bg-white dark:bg-gray-900 rounded-lg shadow">
        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
            <thead class="bg-gray-50 dark:bg-gray-800">
                <tr>
                    <th &#64;click="sort(\'name\')" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase cursor-pointer hover:bg-gray-100 dark:hover:bg-gray-700">
                        <div class="flex items-center">
                            Name
                            <svg class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M5 12l5-5 5 5H5z"/>
                            </svg>
                        </div>
                    </th>
                    <th &#64;click="sort(\'email\')" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase cursor-pointer hover:bg-gray-100 dark:hover:bg-gray-700">
                        <div class="flex items-center">
                            Email
                            <svg class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M5 12l5-5 5 5H5z"/>
                            </svg>
                        </div>
                    </th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase">Role</th>
                </tr>
            </thead>
            <tbody class="bg-white dark:bg-gray-900 divide-y divide-gray-200 dark:divide-gray-700">
                <template x-for="item in items" :key="item.email">
                    <tr>
                        <td class="px-6 py-4 text-sm text-gray-900 dark:text-white" x-text="item.name"></td>
                        <td class="px-6 py-4 text-sm text-gray-500 dark:text-gray-400" x-text="item.email"></td>
                        <td class="px-6 py-4 text-sm text-gray-500 dark:text-gray-400" x-text="item.role"></td>
                    </tr>
                </template>
            </tbody>
        </table>
    </div>
</div>'
    ])
        @slot('preview')
            <div x-data="{ 
                items: [
                    { name: 'John Doe', email: 'john@example.com', role: 'Admin' },
                    { name: 'Jane Smith', email: 'jane@example.com', role: 'Editor' },
                    { name: 'Bob Johnson', email: 'bob@example.com', role: 'User' }
                ],
                sortBy: 'name',
                sortDir: 'asc',
                sort(field) {
                    if(this.sortBy === field) {
                        this.sortDir = this.sortDir === 'asc' ? 'desc' : 'asc';
                    } else {
                        this.sortBy = field;
                        this.sortDir = 'asc';
                    }
                    this.items.sort((a, b) => {
                        let modifier = this.sortDir === 'asc' ? 1 : -1;
                        if(a[field] < b[field]) return -1 * modifier;
                        if(a[field] > b[field]) return 1 * modifier;
                        return 0;
                    });
                }
            }">
                <div class="overflow-x-auto bg-white dark:bg-gray-900 rounded-lg shadow">
                    <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                        <thead class="bg-gray-50 dark:bg-gray-800">
                            <tr>
                                <th @click="sort('name')" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase cursor-pointer hover:bg-gray-100 dark:hover:bg-gray-700">
                                    <div class="flex items-center">
                                        Name
                                        <svg class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M5 12l5-5 5 5H5z"/>
                                        </svg>
                                    </div>
                                </th>
                                <th @click="sort('email')" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase cursor-pointer hover:bg-gray-100 dark:hover:bg-gray-700">
                                    <div class="flex items-center">
                                        Email
                                        <svg class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M5 12l5-5 5 5H5z"/>
                                        </svg>
                                    </div>
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase">Role</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white dark:bg-gray-900 divide-y divide-gray-200 dark:divide-gray-700">
                            <template x-for="item in items" :key="item.email">
                                <tr>
                                    <td class="px-6 py-4 text-sm text-gray-900 dark:text-white" x-text="item.name"></td>
                                    <td class="px-6 py-4 text-sm text-gray-500 dark:text-gray-400" x-text="item.email"></td>
                                    <td class="px-6 py-4 text-sm text-gray-500 dark:text-gray-400" x-text="item.role"></td>
                                </tr>
                            </template>
                        </tbody>
                    </table>
                </div>
            </div>
        @endslot
    @endcomponent

    <!-- Table with Search -->
    @component('showcase::components.showcase-item', [
        'title' => 'Table with Search',
        'description' => 'Filter table rows by search query',
        'code' => '<div x-data="{ 
    search: \'\',
    users: [
        { name: \'John Doe\', email: \'john&#64;example.com\', dept: \'Engineering\' },
        { name: \'Jane Smith\', email: \'jane&#64;example.com\', dept: \'Marketing\' },
        { name: \'Bob Johnson\', email: \'bob&#64;example.com\', dept: \'Sales\' },
        { name: \'Alice Brown\', email: \'alice&#64;example.com\', dept: \'Engineering\' }
    ],
    get filteredUsers() {
        if(!this.search) return this.users;
        return this.users.filter(user => 
            user.name.toLowerCase().includes(this.search.toLowerCase()) ||
            user.email.toLowerCase().includes(this.search.toLowerCase()) ||
            user.dept.toLowerCase().includes(this.search.toLowerCase())
        );
    }
}">
    <div class="mb-4">
        <input x-model="search" 
               type="text" 
               placeholder="Search users..." 
               class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg bg-white dark:bg-gray-700 text-gray-900 dark:text-white">
    </div>
    <div class="overflow-x-auto bg-white dark:bg-gray-900 rounded-lg shadow">
        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
            <thead class="bg-gray-50 dark:bg-gray-800">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase">Name</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase">Email</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase">Department</th>
                </tr>
            </thead>
            <tbody class="bg-white dark:bg-gray-900 divide-y divide-gray-200 dark:divide-gray-700">
                <template x-for="user in filteredUsers" :key="user.email">
                    <tr>
                        <td class="px-6 py-4 text-sm text-gray-900 dark:text-white" x-text="user.name"></td>
                        <td class="px-6 py-4 text-sm text-gray-500 dark:text-gray-400" x-text="user.email"></td>
                        <td class="px-6 py-4 text-sm text-gray-500 dark:text-gray-400" x-text="user.dept"></td>
                    </tr>
                </template>
                <tr x-show="filteredUsers.length === 0">
                    <td colspan="3" class="px-6 py-4 text-sm text-center text-gray-500 dark:text-gray-400">No results found</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>'
    ])
        @slot('preview')
            <div x-data="{ 
                search: '',
                users: [
                    { name: 'John Doe', email: 'john@example.com', dept: 'Engineering' },
                    { name: 'Jane Smith', email: 'jane@example.com', dept: 'Marketing' },
                    { name: 'Bob Johnson', email: 'bob@example.com', dept: 'Sales' },
                    { name: 'Alice Brown', email: 'alice@example.com', dept: 'Engineering' }
                ],
                get filteredUsers() {
                    if(!this.search) return this.users;
                    return this.users.filter(user => 
                        user.name.toLowerCase().includes(this.search.toLowerCase()) ||
                        user.email.toLowerCase().includes(this.search.toLowerCase()) ||
                        user.dept.toLowerCase().includes(this.search.toLowerCase())
                    );
                }
            }">
                <div class="mb-4">
                    <input x-model="search" 
                           type="text" 
                           placeholder="Search users..." 
                           class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg bg-white dark:bg-gray-700 text-gray-900 dark:text-white">
                </div>
                <div class="overflow-x-auto bg-white dark:bg-gray-900 rounded-lg shadow">
                    <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                        <thead class="bg-gray-50 dark:bg-gray-800">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase">Name</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase">Email</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase">Department</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white dark:bg-gray-900 divide-y divide-gray-200 dark:divide-gray-700">
                            <template x-for="user in filteredUsers" :key="user.email">
                                <tr>
                                    <td class="px-6 py-4 text-sm text-gray-900 dark:text-white" x-text="user.name"></td>
                                    <td class="px-6 py-4 text-sm text-gray-500 dark:text-gray-400" x-text="user.email"></td>
                                    <td class="px-6 py-4 text-sm text-gray-500 dark:text-gray-400" x-text="user.dept"></td>
                                </tr>
                            </template>
                            <tr x-show="filteredUsers.length === 0">
                                <td colspan="3" class="px-6 py-4 text-sm text-center text-gray-500 dark:text-gray-400">No results found</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        @endslot
    @endcomponent

    <!-- Table with Pagination -->
    @component('showcase::components.showcase-item', [
        'title' => 'Table with Pagination',
        'description' => 'Paginated table data',
        'code' => '<div x-data="{ 
    currentPage: 1,
    perPage: 3,
    items: [
        { id: 1, name: \'Item 1\', status: \'Active\' },
        { id: 2, name: \'Item 2\', status: \'Active\' },
        { id: 3, name: \'Item 3\', status: \'Inactive\' },
        { id: 4, name: \'Item 4\', status: \'Active\' },
        { id: 5, name: \'Item 5\', status: \'Inactive\' },
        { id: 6, name: \'Item 6\', status: \'Active\' },
        { id: 7, name: \'Item 7\', status: \'Active\' }
    ],
    get paginatedItems() {
        let start = (this.currentPage - 1) * this.perPage;
        let end = start + this.perPage;
        return this.items.slice(start, end);
    },
    get totalPages() {
        return Math.ceil(this.items.length / this.perPage);
    }
}">
    <div class="overflow-x-auto bg-white dark:bg-gray-900 rounded-lg shadow">
        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
            <thead class="bg-gray-50 dark:bg-gray-800">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase">ID</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase">Name</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase">Status</th>
                </tr>
            </thead>
            <tbody class="bg-white dark:bg-gray-900 divide-y divide-gray-200 dark:divide-gray-700">
                <template x-for="item in paginatedItems" :key="item.id">
                    <tr>
                        <td class="px-6 py-4 text-sm text-gray-900 dark:text-white" x-text="item.id"></td>
                        <td class="px-6 py-4 text-sm text-gray-900 dark:text-white" x-text="item.name"></td>
                        <td class="px-6 py-4 text-sm text-gray-500 dark:text-gray-400" x-text="item.status"></td>
                    </tr>
                </template>
            </tbody>
        </table>
    </div>
    <div class="mt-4 flex items-center justify-between">
        <div class="text-sm text-gray-500 dark:text-gray-400">
            Showing <span x-text="(currentPage - 1) * perPage + 1"></span> to <span x-text="Math.min(currentPage * perPage, items.length)"></span> of <span x-text="items.length"></span>
        </div>
        <div class="flex gap-2">
            <button &#64;click="currentPage > 1 && currentPage--" 
                    :disabled="currentPage === 1"
                    class="px-3 py-1 border border-gray-300 dark:border-gray-600 rounded disabled:opacity-50 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700">
                Previous
            </button>
            <button &#64;click="currentPage < totalPages && currentPage++" 
                    :disabled="currentPage === totalPages"
                    class="px-3 py-1 border border-gray-300 dark:border-gray-600 rounded disabled:opacity-50 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700">
                Next
            </button>
        </div>
    </div>
</div>'
    ])
        @slot('preview')
            <div x-data="{ 
                currentPage: 1,
                perPage: 3,
                items: [
                    { id: 1, name: 'Item 1', status: 'Active' },
                    { id: 2, name: 'Item 2', status: 'Active' },
                    { id: 3, name: 'Item 3', status: 'Inactive' },
                    { id: 4, name: 'Item 4', status: 'Active' },
                    { id: 5, name: 'Item 5', status: 'Inactive' },
                    { id: 6, name: 'Item 6', status: 'Active' },
                    { id: 7, name: 'Item 7', status: 'Active' }
                ],
                get paginatedItems() {
                    let start = (this.currentPage - 1) * this.perPage;
                    let end = start + this.perPage;
                    return this.items.slice(start, end);
                },
                get totalPages() {
                    return Math.ceil(this.items.length / this.perPage);
                }
            }">
                <div class="overflow-x-auto bg-white dark:bg-gray-900 rounded-lg shadow">
                    <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                        <thead class="bg-gray-50 dark:bg-gray-800">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase">ID</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase">Name</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase">Status</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white dark:bg-gray-900 divide-y divide-gray-200 dark:divide-gray-700">
                            <template x-for="item in paginatedItems" :key="item.id">
                                <tr>
                                    <td class="px-6 py-4 text-sm text-gray-900 dark:text-white" x-text="item.id"></td>
                                    <td class="px-6 py-4 text-sm text-gray-900 dark:text-white" x-text="item.name"></td>
                                    <td class="px-6 py-4 text-sm text-gray-500 dark:text-gray-400" x-text="item.status"></td>
                                </tr>
                            </template>
                        </tbody>
                    </table>
                </div>
                <div class="mt-4 flex items-center justify-between">
                    <div class="text-sm text-gray-500 dark:text-gray-400">
                        Showing <span x-text="(currentPage - 1) * perPage + 1"></span> to <span x-text="Math.min(currentPage * perPage, items.length)"></span> of <span x-text="items.length"></span>
                    </div>
                    <div class="flex gap-2">
                        <button @click="currentPage > 1 && currentPage--" 
                                :disabled="currentPage === 1"
                                class="px-3 py-1 border border-gray-300 dark:border-gray-600 rounded disabled:opacity-50 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700">
                            Previous
                        </button>
                        <button @click="currentPage < totalPages && currentPage++" 
                                :disabled="currentPage === totalPages"
                                class="px-3 py-1 border border-gray-300 dark:border-gray-600 rounded disabled:opacity-50 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700">
                            Next
                        </button>
                    </div>
                </div>
            </div>
        @endslot
    @endcomponent

    <!-- Chip Component -->
    @component('showcase::components.showcase-item', [
        'title' => 'Chip Component',
        'description' => 'Compact elements with remove action',
        'code' => '<div x-data="{ chips: [\'React\', \'Vue\', \'Angular\', \'Svelte\'] }">
    <div class="flex flex-wrap gap-2">
        <template x-for="(chip, index) in chips" :key="chip">
            <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-full text-sm font-medium bg-indigo-100 dark:bg-indigo-900/30 text-indigo-800 dark:text-indigo-300">
                <span x-text="chip"></span>
                <button &#64;click="chips.splice(index, 1)" class="hover:bg-indigo-200 dark:hover:bg-indigo-800 rounded-full p-0.5">
                    <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </button>
            </span>
        </template>
    </div>
</div>'
    ])
        @slot('preview')
            <div x-data="{ chips: ['React', 'Vue', 'Angular', 'Svelte'] }">
                <div class="flex flex-wrap gap-2">
                    <template x-for="(chip, index) in chips" :key="chip">
                        <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-full text-sm font-medium bg-indigo-100 dark:bg-indigo-900/30 text-indigo-800 dark:text-indigo-300">
                            <span x-text="chip"></span>
                            <button @click="chips.splice(index, 1)" class="hover:bg-indigo-200 dark:hover:bg-indigo-800 rounded-full p-0.5">
                                <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                </svg>
                            </button>
                        </span>
                    </template>
                </div>
            </div>
        @endslot
    @endcomponent

    <!-- Avatar with Status -->
    @component('showcase::components.showcase-item', [
        'title' => 'Avatar with Status',
        'description' => 'Avatar with online/offline indicator',
        'code' => '<div class="flex items-center space-x-6">
    <div class="relative">
        <div class="w-12 h-12 rounded-full bg-blue-500 flex items-center justify-center text-white font-medium">JD</div>
        <span class="absolute bottom-0 right-0 w-3.5 h-3.5 bg-green-500 border-2 border-white dark:border-gray-800 rounded-full"></span>
    </div>
    <div class="relative">
        <div class="w-12 h-12 rounded-full bg-purple-500 flex items-center justify-center text-white font-medium">AB</div>
        <span class="absolute bottom-0 right-0 w-3.5 h-3.5 bg-gray-400 border-2 border-white dark:border-gray-800 rounded-full"></span>
    </div>
    <div class="relative">
        <div class="w-12 h-12 rounded-full bg-pink-500 flex items-center justify-center text-white font-medium">XY</div>
        <span class="absolute bottom-0 right-0 w-3.5 h-3.5 bg-yellow-500 border-2 border-white dark:border-gray-800 rounded-full"></span>
    </div>
</div>'
    ])
        @slot('preview')
            <div class="flex items-center space-x-6">
                <div class="relative">
                    <div class="w-12 h-12 rounded-full bg-blue-500 flex items-center justify-center text-white font-medium">JD</div>
                    <span class="absolute bottom-0 right-0 w-3.5 h-3.5 bg-green-500 border-2 border-white dark:border-gray-800 rounded-full"></span>
                </div>
                <div class="relative">
                    <div class="w-12 h-12 rounded-full bg-purple-500 flex items-center justify-center text-white font-medium">AB</div>
                    <span class="absolute bottom-0 right-0 w-3.5 h-3.5 bg-gray-400 border-2 border-white dark:border-gray-800 rounded-full"></span>
                </div>
                <div class="relative">
                    <div class="w-12 h-12 rounded-full bg-pink-500 flex items-center justify-center text-white font-medium">XY</div>
                    <span class="absolute bottom-0 right-0 w-3.5 h-3.5 bg-yellow-500 border-2 border-white dark:border-gray-800 rounded-full"></span>
                </div>
            </div>
        @endslot
    @endcomponent

    <!-- KPI Cards -->
    @component('showcase::components.showcase-item', [
        'title' => 'KPI Cards',
        'description' => 'Key performance indicator cards',
        'code' => '<div class="grid grid-cols-1 md:grid-cols-3 gap-4">
    <div class="bg-gradient-to-br from-blue-500 to-blue-600 rounded-lg p-6 text-white">
        <div class="text-sm opacity-90 mb-1">Total Sales</div>
        <div class="text-3xl font-bold">$127,500</div>
        <div class="mt-3 flex items-center text-sm">
            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M12 7a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0V8.414l-4.293 4.293a1 1 0 01-1.414 0L8 10.414l-4.293 4.293a1 1 0 01-1.414-1.414l5-5a1 1 0 011.414 0L11 10.586 14.586 7H12z" clip-rule="evenodd"></path>
            </svg>
            <span>+23.5% from last month</span>
        </div>
    </div>
    <div class="bg-gradient-to-br from-green-500 to-green-600 rounded-lg p-6 text-white">
        <div class="text-sm opacity-90 mb-1">New Customers</div>
        <div class="text-3xl font-bold">1,429</div>
        <div class="mt-3 flex items-center text-sm">
            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M12 7a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0V8.414l-4.293 4.293a1 1 0 01-1.414 0L8 10.414l-4.293 4.293a1 1 0 01-1.414-1.414l5-5a1 1 0 011.414 0L11 10.586 14.586 7H12z" clip-rule="evenodd"></path>
            </svg>
            <span>+12.3% from last month</span>
        </div>
    </div>
    <div class="bg-gradient-to-br from-purple-500 to-purple-600 rounded-lg p-6 text-white">
        <div class="text-sm opacity-90 mb-1">Conversion Rate</div>
        <div class="text-3xl font-bold">3.2%</div>
        <div class="mt-3 flex items-center text-sm">
            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M12 13a1 1 0 100 2h5a1 1 0 001-1V9a1 1 0 10-2 0v2.586l-4.293-4.293a1 1 0 00-1.414 0L8 9.586 3.707 5.293a1 1 0 00-1.414 1.414l5 5a1 1 0 001.414 0L11 9.414 14.586 13H12z" clip-rule="evenodd"></path>
            </svg>
            <span>-0.5% from last month</span>
        </div>
    </div>
</div>'
    ])
        @slot('preview')
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div class="bg-gradient-to-br from-blue-500 to-blue-600 rounded-lg p-6 text-white">
                    <div class="text-sm opacity-90 mb-1">Total Sales</div>
                    <div class="text-3xl font-bold">$127,500</div>
                    <div class="mt-3 flex items-center text-sm">
                        <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M12 7a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0V8.414l-4.293 4.293a1 1 0 01-1.414 0L8 10.414l-4.293 4.293a1 1 0 01-1.414-1.414l5-5a1 1 0 011.414 0L11 10.586 14.586 7H12z" clip-rule="evenodd"></path>
                        </svg>
                        <span>+23.5% from last month</span>
                    </div>
                </div>
                <div class="bg-gradient-to-br from-green-500 to-green-600 rounded-lg p-6 text-white">
                    <div class="text-sm opacity-90 mb-1">New Customers</div>
                    <div class="text-3xl font-bold">1,429</div>
                    <div class="mt-3 flex items-center text-sm">
                        <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M12 7a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0V8.414l-4.293 4.293a1 1 0 01-1.414 0L8 10.414l-4.293 4.293a1 1 0 01-1.414-1.414l5-5a1 1 0 011.414 0L11 10.586 14.586 7H12z" clip-rule="evenodd"></path>
                        </svg>
                        <span>+12.3% from last month</span>
                    </div>
                </div>
                <div class="bg-gradient-to-br from-purple-500 to-purple-600 rounded-lg p-6 text-white">
                    <div class="text-sm opacity-90 mb-1">Conversion Rate</div>
                    <div class="text-3xl font-bold">3.2%</div>
                    <div class="mt-3 flex items-center text-sm">
                        <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M12 13a1 1 0 100 2h5a1 1 0 001-1V9a1 1 0 10-2 0v2.586l-4.293-4.293a1 1 0 00-1.414 0L8 9.586 3.707 5.293a1 1 0 00-1.414 1.414l5 5a1 1 0 001.414 0L11 9.414 14.586 13H12z" clip-rule="evenodd"></path>
                        </svg>
                        <span>-0.5% from last month</span>
                    </div>
                </div>
            </div>
        @endslot
    @endcomponent

    <!-- Code Block Viewer -->
    @component('showcase::components.showcase-item', [
        'title' => 'Code Block Viewer',
        'description' => 'Display code with copy button',
        'code' => '<div x-data="{ copied: false, copyCode() { 
    navigator.clipboard.writeText(\$refs.codeBlock.textContent); 
    this.copied = true; 
    setTimeout(() => this.copied = false, 2000); 
}}">
    <div class="relative bg-gray-900 dark:bg-gray-950 rounded-lg overflow-hidden">
        <div class="flex items-center justify-between px-4 py-2 bg-gray-800 dark:bg-gray-900 border-b border-gray-700">
            <span class="text-sm text-gray-400">JavaScript</span>
            <button &#64;click="copyCode()" class="text-gray-400 hover:text-white">
                <svg x-show="!copied" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                </svg>
                <svg x-show="copied" class="w-5 h-5 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
        <pre class="p-4 overflow-x-auto"><code x-ref="codeBlock" class="text-sm text-gray-300 font-mono">function greet(name) {
  return "Hello, " + name + "!";
}

console.log(greet(\'World\'));</code></pre>
    </div>
</div>'
    ])
        @slot('preview')
            <div x-data="{ copied: false, copyCode() { 
                navigator.clipboard.writeText($refs.codeBlock.textContent); 
                this.copied = true; 
                setTimeout(() => this.copied = false, 2000); 
            }}">
                <div class="relative bg-gray-900 dark:bg-gray-950 rounded-lg overflow-hidden">
                    <div class="flex items-center justify-between px-4 py-2 bg-gray-800 dark:bg-gray-900 border-b border-gray-700">
                        <span class="text-sm text-gray-400">JavaScript</span>
                        <button @click="copyCode()" class="text-gray-400 hover:text-white">
                            <svg x-show="!copied" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                            </svg>
                            <svg x-show="copied" class="w-5 h-5 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>
                    <pre class="p-4 overflow-x-auto"><code x-ref="codeBlock" class="text-sm text-gray-300 font-mono">function greet(name) {
  return "Hello, " + name + "!";
}

console.log(greet('World'));</code></pre>
                </div>
            </div>
        @endslot
    @endcomponent

    {{-- Vertical Timeline --}}
    @component('showcase::components.showcase-item', [
        'title' => 'Vertical Timeline',
        'description' => 'Chronological event display with vertical layout',
        'code' => <<<'HTML'
<!-- Vertical Timeline -->
<div class="space-y-6">
    <div class="flex">
        <div class="flex flex-col items-center mr-4">
            <div class="w-10 h-10 rounded-full bg-blue-600 flex items-center justify-center text-white">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                </svg>
            </div>
            <div class="w-0.5 h-full bg-gray-300 dark:bg-gray-600"></div>
        </div>
        <div class="flex-1 pb-8">
            <p class="text-xs text-gray-500 dark:text-gray-400 mb-1">2 hours ago</p>
            <h4 class="text-sm font-semibold text-gray-900 dark:text-white mb-1">Project Created</h4>
            <p class="text-sm text-gray-600 dark:text-gray-400">New project "Website Redesign" was created by John Doe</p>
        </div>
    </div>
    
    <div class="flex">
        <div class="flex flex-col items-center mr-4">
            <div class="w-10 h-10 rounded-full bg-green-600 flex items-center justify-center text-white">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                </svg>
            </div>
            <div class="w-0.5 h-full bg-gray-300 dark:bg-gray-600"></div>
        </div>
        <div class="flex-1 pb-8">
            <p class="text-xs text-gray-500 dark:text-gray-400 mb-1">5 hours ago</p>
            <h4 class="text-sm font-semibold text-gray-900 dark:text-white mb-1">Task Completed</h4>
            <p class="text-sm text-gray-600 dark:text-gray-400">Design mockups approved by client</p>
        </div>
    </div>
    
    <div class="flex">
        <div class="flex flex-col items-center mr-4">
            <div class="w-10 h-10 rounded-full bg-yellow-600 flex items-center justify-center text-white">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M8.707 7.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l2-2a1 1 0 00-1.414-1.414L11 7.586V3a1 1 0 10-2 0v4.586l-.293-.293z"></path>
                    <path d="M3 5a2 2 0 012-2h1a1 1 0 010 2H5v7h2l1 2h4l1-2h2V5h-1a1 1 0 110-2h1a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V5z"></path>
                </svg>
            </div>
            <div class="w-0.5 h-full bg-gray-300 dark:bg-gray-600"></div>
        </div>
        <div class="flex-1 pb-8">
            <p class="text-xs text-gray-500 dark:text-gray-400 mb-1">1 day ago</p>
            <h4 class="text-sm font-semibold text-gray-900 dark:text-white mb-1">Files Uploaded</h4>
            <p class="text-sm text-gray-600 dark:text-gray-400">3 new design files added to repository</p>
        </div>
    </div>
    
    <div class="flex">
        <div class="flex flex-col items-center mr-4">
            <div class="w-10 h-10 rounded-full bg-purple-600 flex items-center justify-center text-white">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"></path>
                </svg>
            </div>
        </div>
        <div class="flex-1">
            <p class="text-xs text-gray-500 dark:text-gray-400 mb-1">2 days ago</p>
            <h4 class="text-sm font-semibold text-gray-900 dark:text-white mb-1">Team Member Added</h4>
            <p class="text-sm text-gray-600 dark:text-gray-400">Sarah joined the project team</p>
        </div>
    </div>
</div>
HTML
    ])
        @slot('preview')
            <div class="space-y-6">
                <div class="flex">
                    <div class="flex flex-col items-center mr-4">
                        <div class="w-10 h-10 rounded-full bg-blue-600 flex items-center justify-center text-white">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <div class="w-0.5 h-full bg-gray-300 dark:bg-gray-600"></div>
                    </div>
                    <div class="flex-1 pb-8">
                        <p class="text-xs text-gray-500 dark:text-gray-400 mb-1">2 hours ago</p>
                        <h4 class="text-sm font-semibold text-gray-900 dark:text-white mb-1">Project Created</h4>
                        <p class="text-sm text-gray-600 dark:text-gray-400">New project "Website Redesign" was created by John Doe</p>
                    </div>
                </div>
                
                <div class="flex">
                    <div class="flex flex-col items-center mr-4">
                        <div class="w-10 h-10 rounded-full bg-green-600 flex items-center justify-center text-white">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <div class="w-0.5 h-full bg-gray-300 dark:bg-gray-600"></div>
                    </div>
                    <div class="flex-1 pb-8">
                        <p class="text-xs text-gray-500 dark:text-gray-400 mb-1">5 hours ago</p>
                        <h4 class="text-sm font-semibold text-gray-900 dark:text-white mb-1">Task Completed</h4>
                        <p class="text-sm text-gray-600 dark:text-gray-400">Design mockups approved by client</p>
                    </div>
                </div>
                
                <div class="flex">
                    <div class="flex flex-col items-center mr-4">
                        <div class="w-10 h-10 rounded-full bg-yellow-600 flex items-center justify-center text-white">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M8.707 7.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l2-2a1 1 0 00-1.414-1.414L11 7.586V3a1 1 0 10-2 0v4.586l-.293-.293z"></path>
                                <path d="M3 5a2 2 0 012-2h1a1 1 0 010 2H5v7h2l1 2h4l1-2h2V5h-1a1 1 0 110-2h1a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V5z"></path>
                            </svg>
                        </div>
                        <div class="w-0.5 h-full bg-gray-300 dark:bg-gray-600"></div>
                    </div>
                    <div class="flex-1 pb-8">
                        <p class="text-xs text-gray-500 dark:text-gray-400 mb-1">1 day ago</p>
                        <h4 class="text-sm font-semibold text-gray-900 dark:text-white mb-1">Files Uploaded</h4>
                        <p class="text-sm text-gray-600 dark:text-gray-400">3 new design files added to repository</p>
                    </div>
                </div>
                
                <div class="flex">
                    <div class="flex flex-col items-center mr-4">
                        <div class="w-10 h-10 rounded-full bg-purple-600 flex items-center justify-center text-white">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="flex-1">
                        <p class="text-xs text-gray-500 dark:text-gray-400 mb-1">2 days ago</p>
                        <h4 class="text-sm font-semibold text-gray-900 dark:text-white mb-1">Team Member Added</h4>
                        <p class="text-sm text-gray-600 dark:text-gray-400">Sarah joined the project team</p>
                    </div>
                </div>
            </div>
        @endslot
    @endcomponent

    {{-- Horizontal Timeline --}}
    @component('showcase::components.showcase-item', [
        'title' => 'Horizontal Timeline',
        'description' => 'Timeline with horizontal layout for process steps',
        'code' => <<<'HTML'
<!-- Horizontal Timeline -->
<div class="relative">
    <div class="absolute top-5 left-0 right-0 h-0.5 bg-gray-300 dark:bg-gray-600"></div>
    
    <div class="relative flex justify-between">
        <div class="flex flex-col items-center">
            <div class="w-10 h-10 rounded-full bg-green-600 flex items-center justify-center text-white mb-2 relative z-10">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                </svg>
            </div>
            <p class="text-xs font-medium text-gray-900 dark:text-white">Order Placed</p>
            <p class="text-xs text-gray-500 dark:text-gray-400">Jan 1</p>
        </div>
        
        <div class="flex flex-col items-center">
            <div class="w-10 h-10 rounded-full bg-green-600 flex items-center justify-center text-white mb-2 relative z-10">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                </svg>
            </div>
            <p class="text-xs font-medium text-gray-900 dark:text-white">Processing</p>
            <p class="text-xs text-gray-500 dark:text-gray-400">Jan 2</p>
        </div>
        
        <div class="flex flex-col items-center">
            <div class="w-10 h-10 rounded-full bg-blue-600 flex items-center justify-center text-white mb-2 relative z-10 border-4 border-white dark:border-gray-900">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M8 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM15 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z"></path>
                    <path d="M3 4a1 1 0 00-1 1v10a1 1 0 001 1h1.05a2.5 2.5 0 014.9 0H10a1 1 0 001-1V5a1 1 0 00-1-1H3zM14 7a1 1 0 00-1 1v6.05A2.5 2.5 0 0115.95 16H17a1 1 0 001-1v-5a1 1 0 00-.293-.707l-2-2A1 1 0 0015 7h-1z"></path>
                </svg>
            </div>
            <p class="text-xs font-medium text-blue-600 dark:text-blue-400">Shipping</p>
            <p class="text-xs text-gray-500 dark:text-gray-400">Jan 3</p>
        </div>
        
        <div class="flex flex-col items-center">
            <div class="w-10 h-10 rounded-full bg-gray-300 dark:bg-gray-600 flex items-center justify-center text-gray-600 dark:text-gray-400 mb-2 relative z-10">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path>
                </svg>
            </div>
            <p class="text-xs font-medium text-gray-500 dark:text-gray-400">Delivered</p>
            <p class="text-xs text-gray-500 dark:text-gray-400">Pending</p>
        </div>
    </div>
</div>
HTML
    ])
        @slot('preview')
            <div class="relative">
                <div class="absolute top-5 left-0 right-0 h-0.5 bg-gray-300 dark:bg-gray-600"></div>
                
                <div class="relative flex justify-between">
                    <div class="flex flex-col items-center">
                        <div class="w-10 h-10 rounded-full bg-green-600 flex items-center justify-center text-white mb-2 relative z-10">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <p class="text-xs font-medium text-gray-900 dark:text-white">Order Placed</p>
                        <p class="text-xs text-gray-500 dark:text-gray-400">Jan 1</p>
                    </div>
                    
                    <div class="flex flex-col items-center">
                        <div class="w-10 h-10 rounded-full bg-green-600 flex items-center justify-center text-white mb-2 relative z-10">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <p class="text-xs font-medium text-gray-900 dark:text-white">Processing</p>
                        <p class="text-xs text-gray-500 dark:text-gray-400">Jan 2</p>
                    </div>
                    
                    <div class="flex flex-col items-center">
                        <div class="w-10 h-10 rounded-full bg-blue-600 flex items-center justify-center text-white mb-2 relative z-10 border-4 border-white dark:border-gray-900">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M8 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM15 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z"></path>
                                <path d="M3 4a1 1 0 00-1 1v10a1 1 0 001 1h1.05a2.5 2.5 0 014.9 0H10a1 1 0 001-1V5a1 1 0 00-1-1H3zM14 7a1 1 0 00-1 1v6.05A2.5 2.5 0 0115.95 16H17a1 1 0 001-1v-5a1 1 0 00-.293-.707l-2-2A1 1 0 0015 7h-1z"></path>
                            </svg>
                        </div>
                        <p class="text-xs font-medium text-blue-600 dark:text-blue-400">Shipping</p>
                        <p class="text-xs text-gray-500 dark:text-gray-400">Jan 3</p>
                    </div>
                    
                    <div class="flex flex-col items-center">
                        <div class="w-10 h-10 rounded-full bg-gray-300 dark:bg-gray-600 flex items-center justify-center text-gray-600 dark:text-gray-400 mb-2 relative z-10">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path>
                            </svg>
                        </div>
                        <p class="text-xs font-medium text-gray-500 dark:text-gray-400">Delivered</p>
                        <p class="text-xs text-gray-500 dark:text-gray-400">Pending</p>
                    </div>
                </div>
            </div>
        @endslot
    @endcomponent

    {{-- Nested Accordion --}}
    @component('showcase::components.showcase-item', [
        'title' => 'Nested Accordion',
        'description' => 'Accordion with nested collapsible sections',
        'code' => <<<'HTML'
<!-- Nested Accordion -->
<div x-data="{ open: null, nested: null }" class="space-y-2">
    <div class="border border-gray-200 dark:border-gray-700 rounded-lg overflow-hidden">
        <button @click="open = open === 1 ? null : 1" class="w-full px-4 py-3 text-left bg-gray-50 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-700 flex justify-between items-center">
            <span class="font-medium text-gray-900 dark:text-white">Account Settings</span>
            <svg :class="open === 1 ? 'rotate-180' : ''" class="w-5 h-5 transform transition-transform" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
            </svg>
        </button>
        <div x-show="open === 1" x-cloak class="bg-white dark:bg-gray-900">
            <div class="border-t border-gray-200 dark:border-gray-700">
                <button @click="nested = nested === 1 ? null : 1" class="w-full px-6 py-2 text-left hover:bg-gray-50 dark:hover:bg-gray-800 flex justify-between items-center text-sm">
                    <span class="text-gray-700 dark:text-gray-300">Profile Information</span>
                    <svg :class="nested === 1 ? 'rotate-180' : ''" class="w-4 h-4 transform transition-transform" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </button>
                <div x-show="nested === 1" x-cloak class="px-6 py-3 bg-gray-50 dark:bg-gray-800 text-sm text-gray-600 dark:text-gray-400">
                    Update your name, email, and profile picture settings.
                </div>
            </div>
            <div class="border-t border-gray-200 dark:border-gray-700">
                <button @click="nested = nested === 2 ? null : 2" class="w-full px-6 py-2 text-left hover:bg-gray-50 dark:hover:bg-gray-800 flex justify-between items-center text-sm">
                    <span class="text-gray-700 dark:text-gray-300">Security</span>
                    <svg :class="nested === 2 ? 'rotate-180' : ''" class="w-4 h-4 transform transition-transform" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </button>
                <div x-show="nested === 2" x-cloak class="px-6 py-3 bg-gray-50 dark:bg-gray-800 text-sm text-gray-600 dark:text-gray-400">
                    Manage password, two-factor authentication, and security settings.
                </div>
            </div>
        </div>
    </div>
    
    <div class="border border-gray-200 dark:border-gray-700 rounded-lg overflow-hidden">
        <button @click="open = open === 2 ? null : 2" class="w-full px-4 py-3 text-left bg-gray-50 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-700 flex justify-between items-center">
            <span class="font-medium text-gray-900 dark:text-white">Notifications</span>
            <svg :class="open === 2 ? 'rotate-180' : ''" class="w-5 h-5 transform transition-transform" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
            </svg>
        </button>
        <div x-show="open === 2" x-cloak class="bg-white dark:bg-gray-900 px-6 py-3 text-sm text-gray-600 dark:text-gray-400">
            Configure email, push, and SMS notification preferences.
        </div>
    </div>
</div>
HTML
    ])
        @slot('preview')
            <div x-data="{ open: null, nested: null }" class="space-y-2">
                <div class="border border-gray-200 dark:border-gray-700 rounded-lg overflow-hidden">
                    <button @click="open = open === 1 ? null : 1" class="w-full px-4 py-3 text-left bg-gray-50 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-700 flex justify-between items-center">
                        <span class="font-medium text-gray-900 dark:text-white">Account Settings</span>
                        <svg :class="open === 1 ? 'rotate-180' : ''" class="w-5 h-5 transform transition-transform" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <div x-show="open === 1" x-cloak class="bg-white dark:bg-gray-900">
                        <div class="border-t border-gray-200 dark:border-gray-700">
                            <button @click="nested = nested === 1 ? null : 1" class="w-full px-6 py-2 text-left hover:bg-gray-50 dark:hover:bg-gray-800 flex justify-between items-center text-sm">
                                <span class="text-gray-700 dark:text-gray-300">Profile Information</span>
                                <svg :class="nested === 1 ? 'rotate-180' : ''" class="w-4 h-4 transform transition-transform" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                </svg>
                            </button>
                            <div x-show="nested === 1" x-cloak class="px-6 py-3 bg-gray-50 dark:bg-gray-800 text-sm text-gray-600 dark:text-gray-400">
                                Update your name, email, and profile picture settings.
                            </div>
                        </div>
                        <div class="border-t border-gray-200 dark:border-gray-700">
                            <button @click="nested = nested === 2 ? null : 2" class="w-full px-6 py-2 text-left hover:bg-gray-50 dark:hover:bg-gray-800 flex justify-between items-center text-sm">
                                <span class="text-gray-700 dark:text-gray-300">Security</span>
                                <svg :class="nested === 2 ? 'rotate-180' : ''" class="w-4 h-4 transform transition-transform" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                </svg>
                            </button>
                            <div x-show="nested === 2" x-cloak class="px-6 py-3 bg-gray-50 dark:bg-gray-800 text-sm text-gray-600 dark:text-gray-400">
                                Manage password, two-factor authentication, and security settings.
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="border border-gray-200 dark:border-gray-700 rounded-lg overflow-hidden">
                    <button @click="open = open === 2 ? null : 2" class="w-full px-4 py-3 text-left bg-gray-50 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-700 flex justify-between items-center">
                        <span class="font-medium text-gray-900 dark:text-white">Notifications</span>
                        <svg :class="open === 2 ? 'rotate-180' : ''" class="w-5 h-5 transform transition-transform" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <div x-show="open === 2" x-cloak class="bg-white dark:bg-gray-900 px-6 py-3 text-sm text-gray-600 dark:text-gray-400">
                        Configure email, push, and SMS notification preferences.
                    </div>
                </div>
            </div>
        @endslot
    @endcomponent

</div>
@endsection
