@extends('showcase::layouts.showcase')

@section('page-title', 'Advanced - Interactive UI')
@section('page-description', 'Calendar, tree view, command palette, and rich text editor')

@section('content')
<div class="max-w-7xl mx-auto space-y-8">

    <!-- Mini Calendar -->
    @component('showcase::components.showcase-item', [
        'title' => 'Mini Calendar',
        'description' => 'Simple monthly calendar with event indicators',
        'code' => '<div x-data="{ 
    currentDate: new Date(),
    selectedDate: null,
    events: [13, 15, 20],
    get currentMonth() {
        return this.currentDate.toLocaleString(&#39;default&#39;, { month: &#39;long&#39;, year: &#39;numeric&#39; });
    },
    get daysInMonth() {
        const year = this.currentDate.getFullYear();
        const month = this.currentDate.getMonth();
        const firstDay = new Date(year, month, 1).getDay();
        const daysInMonth = new Date(year, month + 1, 0).getDate();
        const days = [];
        for (let i = 0; i < firstDay; i++) days.push(null);
        for (let i = 1; i <= daysInMonth; i++) days.push(i);
        return days;
    },
    prevMonth() {
        this.currentDate = new Date(this.currentDate.getFullYear(), this.currentDate.getMonth() - 1);
    },
    nextMonth() {
        this.currentDate = new Date(this.currentDate.getFullYear(), this.currentDate.getMonth() + 1);
    },
    isToday(day) {
        const today = new Date();
        return day === today.getDate() && 
               this.currentDate.getMonth() === today.getMonth() &&
               this.currentDate.getFullYear() === today.getFullYear();
    }
}" class="bg-white dark:bg-gray-800 rounded-lg shadow p-6 max-w-md">
    
    <!-- Header -->
    <div class="flex items-center justify-between mb-4">
        <button &#64;click="prevMonth()" class="p-2 hover:bg-gray-100 dark:hover:bg-gray-700 rounded">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
            </svg>
        </button>
        <h3 class="font-semibold text-gray-900 dark:text-white" x-text="currentMonth"></h3>
        <button &#64;click="nextMonth()" class="p-2 hover:bg-gray-100 dark:hover:bg-gray-700 rounded">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
            </svg>
        </button>
    </div>
    
    <!-- Days of Week -->
    <div class="grid grid-cols-7 gap-1 mb-2">
        <template x-for="day in [&#39;Su&#39;, &#39;Mo&#39;, &#39;Tu&#39;, &#39;We&#39;, &#39;Th&#39;, &#39;Fr&#39;, &#39;Sa&#39;]">
            <div class="text-center text-xs font-semibold text-gray-600 dark:text-gray-400 py-2" x-text="day"></div>
        </template>
    </div>
    
    <!-- Calendar Days -->
    <div class="grid grid-cols-7 gap-1">
        <template x-for="day in daysInMonth" :key="day">
            <button &#64;click="selectedDate = day"
                    :class="{
                        &#39;bg-blue-600 text-white&#39;: isToday(day),
                        &#39;bg-blue-50 dark:bg-blue-900/20 text-blue-600 dark:text-blue-400&#39;: selectedDate === day && !isToday(day),
                        &#39;hover:bg-gray-100 dark:hover:bg-gray-700&#39;: day && !isToday(day)
                    }"
                    class="aspect-square p-2 rounded text-sm relative"
                    :disabled="!day">
                <span x-text="day || &#39;&#39;" class="text-gray-900 dark:text-white"></span>
                <div x-show="day && events.includes(day)" 
                     class="absolute bottom-1 left-1/2 transform -translate-x-1/2 w-1 h-1 bg-red-500 rounded-full"></div>
            </button>
        </template>
    </div>
</div>'
    ])
        @slot('preview', null, [])
            <div x-data="{ 
                currentDate: new Date(),
                selectedDate: null,
                events: [13, 15, 20],
                get currentMonth() {
                    return this.currentDate.toLocaleString('default', { month: 'long', year: 'numeric' });
                },
                get daysInMonth() {
                    const year = this.currentDate.getFullYear();
                    const month = this.currentDate.getMonth();
                    const firstDay = new Date(year, month, 1).getDay();
                    const daysInMonth = new Date(year, month + 1, 0).getDate();
                    const days = [];
                    for (let i = 0; i < firstDay; i++) days.push(null);
                    for (let i = 1; i <= daysInMonth; i++) days.push(i);
                    return days;
                },
                prevMonth() {
                    this.currentDate = new Date(this.currentDate.getFullYear(), this.currentDate.getMonth() - 1);
                },
                nextMonth() {
                    this.currentDate = new Date(this.currentDate.getFullYear(), this.currentDate.getMonth() + 1);
                },
                isToday(day) {
                    const today = new Date();
                    return day === today.getDate() && 
                           this.currentDate.getMonth() === today.getMonth() &&
                           this.currentDate.getFullYear() === today.getFullYear();
                }
            }" class="bg-white dark:bg-gray-800 rounded-lg shadow p-4 md:p-6 max-w-md mx-auto">
                
                <!-- Header -->
                <div class="flex items-center justify-between mb-4">
                    <button @click="prevMonth()" class="p-2 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 rounded transition">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                        </svg>
                    </button>
                    <h3 class="font-semibold text-gray-900 dark:text-white" x-text="currentMonth"></h3>
                    <button @click="nextMonth()" class="p-2 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 rounded transition">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </button>
                </div>
                
                <!-- Days of Week -->
                <div class="grid grid-cols-7 gap-1 mb-2">
                    <template x-for="day in ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa']">
                        <div class="text-center text-xs font-semibold text-gray-600 dark:text-gray-400 py-2" x-text="day"></div>
                    </template>
                </div>
                
                <!-- Calendar Days -->
                <div class="grid grid-cols-7 gap-1">
                    <template x-for="(day, index) in daysInMonth" :key="index">
                        <button @click="selectedDate = day"
                                :class="{
                                    'bg-blue-600 text-white': isToday(day),
                                    'bg-blue-50 dark:bg-blue-900/20 text-blue-600 dark:text-blue-400': selectedDate === day && !isToday(day),
                                    'hover:bg-gray-100 dark:hover:bg-gray-700 text-gray-900 dark:text-white': day && !isToday(day) && selectedDate !== day,
                                    'cursor-default': !day
                                }"
                                class="aspect-square p-2 rounded text-sm relative transition"
                                :disabled="!day">
                            <span x-text="day || ''" :class="!day ? 'invisible' : ''"></span>
                            <div x-show="day && events.includes(day)" 
                                 class="absolute bottom-1 left-1/2 transform -translate-x-1/2 w-1 h-1 bg-red-500 rounded-full"></div>
                        </button>
                    </template>
                </div>
            </div>
        @endslot
    @endcomponent

    <!-- Tree View -->
    @component('showcase::components.showcase-item', [
        'title' => 'Tree View',
        'description' => 'Expandable hierarchical file/folder structure',
        'code' => '<div x-data="{ 
    tree: {
        name: &#39;Project&#39;,
        type: &#39;folder&#39;,
        expanded: true,
        children: [
            {
                name: &#39;src&#39;,
                type: &#39;folder&#39;,
                expanded: false,
                children: [
                    { name: &#39;components&#39;, type: &#39;folder&#39;, children: [
                        { name: &#39;Button.tsx&#39;, type: &#39;file&#39; },
                        { name: &#39;Input.tsx&#39;, type: &#39;file&#39; }
                    ]},
                    { name: &#39;utils&#39;, type: &#39;folder&#39;, children: [
                        { name: &#39;helpers.ts&#39;, type: &#39;file&#39; }
                    ]},
                    { name: &#39;App.tsx&#39;, type: &#39;file&#39; }
                ]
            },
            {
                name: &#39;public&#39;,
                type: &#39;folder&#39;,
                expanded: false,
                children: [
                    { name: &#39;index.html&#39;, type: &#39;file&#39; },
                    { name: &#39;favicon.ico&#39;, type: &#39;file&#39; }
                ]
            },
            { name: &#39;package.json&#39;, type: &#39;file&#39; },
            { name: &#39;README.md&#39;, type: &#39;file&#39; }
        ]
    },
    toggleNode(node) {
        if (node.type === &#39;folder&#39;) {
            node.expanded = !node.expanded;
        }
    }
}" class="bg-white dark:bg-gray-800 rounded-lg shadow p-6">
    
    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">File Explorer</h3>
    
    <div class="space-y-1">
        <div @click="toggleNode(tree)" class="flex items-center gap-2 px-2 py-1.5 hover:bg-gray-100 dark:hover:bg-gray-700 rounded cursor-pointer">
            <svg x-show="tree.type === 'folder' && tree.expanded" class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                    <svg x-show="tree.type === &#39;folder&#39; && !tree.expanded" class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                    <svg class="w-4 h-4 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"/>
                    </svg>
                    <span class="text-sm font-medium text-gray-900 dark:text-white" x-text="tree.name"></span>
                </div>
                
                <template x-if="tree.expanded && tree.children">
                    <div class="ml-6 space-y-1">
                        <template x-for="child in tree.children" :key="child.name">
                            <div>
                                <div &#64;click="toggleNode(child)" class="flex items-center gap-2 px-2 py-1.5 hover:bg-gray-100 dark:hover:bg-gray-700 rounded cursor-pointer">
                                    <svg x-show="child.type === &#39;folder&#39; && child.expanded" class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                                    </svg>
                                    <svg x-show="child.type === &#39;folder&#39; && !child.expanded" class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                    </svg>
                                    <svg x-show="child.type === &#39;folder&#39;" class="w-4 h-4 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"/>
                                    </svg>
                                    <svg x-show="child.type === &#39;file&#39;" class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                                    </svg>
                                    <span class="text-sm text-gray-700 dark:text-gray-300" x-text="child.name"></span>
                                </div>
                                
                                <template x-if="child.type === &#39;folder&#39; && child.expanded && child.children">
                                    <div class="ml-6 space-y-1">
                                        <template x-for="subchild in child.children" :key="subchild.name">
                                            <div class="flex items-center gap-2 px-2 py-1.5 hover:bg-gray-100 dark:hover:bg-gray-700 rounded cursor-pointer">
                                                <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                                                </svg>
                                                <span class="text-sm text-gray-700 dark:text-gray-300" x-text="subchild.name"></span>
                                            </div>
                                        </template>
                                    </div>
                                </template>
                            </div>
                        </template>
                    </div>
                </template>
            </div>
        </template>
    </div>
</div>'
    ])
        @slot('preview', null, [])
            <div x-data="{ 
                tree: {
                    name: 'Project',
                    type: 'folder',
                    expanded: true,
                    children: [
                        {
                            name: 'src',
                            type: 'folder',
                            expanded: false,
                            children: [
                                { name: 'components', type: 'folder', children: [
                                    { name: 'Button.tsx', type: 'file' },
                                    { name: 'Input.tsx', type: 'file' }
                                ]},
                                { name: 'utils', type: 'folder', children: [
                                    { name: 'helpers.ts', type: 'file' }
                                ]},
                                { name: 'App.tsx', type: 'file' }
                            ]
                        },
                        {
                            name: 'public',
                            type: 'folder',
                            expanded: false,
                            children: [
                                { name: 'index.html', type: 'file' },
                                { name: 'favicon.ico', type: 'file' }
                            ]
                        },
                        { name: 'package.json', type: 'file' },
                        { name: 'README.md', type: 'file' }
                    ]
                },
                toggleNode(node) {
                    if (node.type === 'folder') {
                        node.expanded = !node.expanded;
                    }
                }
            }" class="bg-white dark:bg-gray-800 rounded-lg shadow p-4 md:p-6">
                
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">File Explorer</h3>
                
                <div x-ref="treeRoot">
                    <template x-teleport="$refs.treeRoot">
                        <div class="space-y-1">
                            <div @click="toggleNode(tree)" class="flex items-center gap-2 px-2 py-1.5 hover:bg-gray-100 dark:hover:bg-gray-700 rounded cursor-pointer transition">
                                <svg x-show="tree.type === 'folder' && tree.expanded" class="w-4 h-4 text-gray-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                                </svg>
                                <svg x-show="tree.type === 'folder' && !tree.expanded" class="w-4 h-4 text-gray-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                                <svg class="w-4 h-4 text-blue-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"/>
                                </svg>
                                <span class="text-sm font-medium text-gray-900 dark:text-white" x-text="tree.name"></span>
                            </div>
                            
                            <template x-if="tree.expanded && tree.children">
                                <div class="ml-6 space-y-1">
                                    <template x-for="child in tree.children" :key="child.name">
                                        <div>
                                            <div @click="toggleNode(child)" class="flex items-center gap-2 px-2 py-1.5 hover:bg-gray-100 dark:hover:bg-gray-700 rounded cursor-pointer transition">
                                                <svg x-show="child.type === 'folder' && child.expanded" class="w-4 h-4 text-gray-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                                                </svg>
                                                <svg x-show="child.type === 'folder' && !child.expanded" class="w-4 h-4 text-gray-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                                </svg>
                                                <svg x-show="child.type === 'folder'" class="w-4 h-4 text-blue-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"/>
                                                </svg>
                                                <svg x-show="child.type === 'file'" class="w-4 h-4 text-gray-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                                                </svg>
                                                <span class="text-sm text-gray-700 dark:text-gray-300" x-text="child.name"></span>
                                            </div>
                                            
                                            <template x-if="child.type === 'folder' && child.expanded && child.children">
                                                <div class="ml-6 space-y-1">
                                                    <template x-for="subchild in child.children" :key="subchild.name">
                                                        <div class="flex items-center gap-2 px-2 py-1.5 hover:bg-gray-100 dark:hover:bg-gray-700 rounded cursor-pointer transition">
                                                            <svg class="w-4 h-4 text-gray-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                                                            </svg>
                                                            <span class="text-sm text-gray-700 dark:text-gray-300" x-text="subchild.name"></span>
                                                        </div>
                                                    </template>
                                                </div>
                                            </template>
                                        </div>
                                    </template>
                                </div>
                            </template>
                        </div>
                    </template>
                </div>
            </div>
        @endslot
    @endcomponent

    <!-- Command Palette -->
    @component('showcase::components.showcase-item', [
        'title' => 'Command Palette',
        'description' => 'Keyboard-driven command search (Press Ctrl+K)',
        'code' => '<div x-data="{ 
    open: false,
    search: &#39;&#39;,
    commands: [
        { name: &#39;Create new project&#39;, icon: &#39;plus&#39;, category: &#39;Actions&#39; },
        { name: &#39;Open settings&#39;, icon: &#39;cog&#39;, category: &#39;Navigation&#39; },
        { name: &#39;Search files&#39;, icon: &#39;search&#39;, category: &#39;Navigation&#39; },
        { name: &#39;Toggle theme&#39;, icon: &#39;moon&#39;, category: &#39;Settings&#39; },
        { name: &#39;View help&#39;, icon: &#39;help&#39;, category: &#39;Help&#39; }
    ],
    get filteredCommands() {
        if (!this.search) return this.commands;
        return this.commands.filter(cmd => 
            cmd.name.toLowerCase().includes(this.search.toLowerCase())
        );
    }
}" 
&#64;keydown.window.ctrl.k.prevent="open = !open"
&#64;keydown.window.escape="open = false">
    
    <button &#64;click="open = true" class="w-full px-4 py-2 bg-gray-100 dark:bg-gray-700 rounded-lg flex items-center justify-between text-left hover:bg-gray-200 dark:hover:bg-gray-600">
        <span class="text-gray-600 dark:text-gray-400">Search commands...</span>
        <kbd class="px-2 py-1 text-xs bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-600 rounded">Ctrl K</kbd>
    </button>
    
    <!-- Modal -->
    <div x-show="open" 
         x-cloak
         class="fixed inset-0 z-50 flex items-start justify-center pt-20 px-4"
         &#64;click.self="open = false">
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-2xl max-w-2xl w-full border border-gray-200 dark:border-gray-700">
            <div class="p-4 border-b border-gray-200 dark:border-gray-700">
                <input x-model="search"
                       x-ref="searchInput"
                       type="text"
                       placeholder="Type a command or search..."
                       class="w-full px-0 py-0 border-0 focus:ring-0 bg-transparent text-lg text-gray-900 dark:text-white"
                       x-init="$watch(&#39;open&#39;, value => value && setTimeout(() => $refs.searchInput.focus(), 50))">
            </div>
            
            <div class="max-h-96 overflow-y-auto">
                <template x-for="command in filteredCommands" :key="command.name">
                    <button class="w-full px-4 py-3 flex items-center gap-3 hover:bg-gray-100 dark:hover:bg-gray-700 text-left">
                        <div class="w-8 h-8 bg-gray-200 dark:bg-gray-600 rounded flex items-center justify-center">
                            <svg class="w-4 h-4 text-gray-600 dark:text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                            </svg>
                        </div>
                        <div class="flex-1">
                            <p class="text-sm font-medium text-gray-900 dark:text-white" x-text="command.name"></p>
                            <p class="text-xs text-gray-500 dark:text-gray-400" x-text="command.category"></p>
                        </div>
                    </button>
                </template>
                
                <div x-show="filteredCommands.length === 0" class="px-4 py-12 text-center text-gray-500 dark:text-gray-400">
                    No results found
                </div>
            </div>
        </div>
    </div>
    
    <div x-show="open" x-cloak class="fixed inset-0 bg-black bg-opacity-50 z-40"></div>
</div>'
    ])
        @slot('preview', null, [])
            <div x-data="{ 
                open: false,
                search: '',
                commands: [
                    { name: 'Create new project', icon: 'plus', category: 'Actions' },
                    { name: 'Open settings', icon: 'cog', category: 'Navigation' },
                    { name: 'Search files', icon: 'search', category: 'Navigation' },
                    { name: 'Toggle theme', icon: 'moon', category: 'Settings' },
                    { name: 'View help', icon: 'help', category: 'Help' }
                ],
                get filteredCommands() {
                    if (!this.search) return this.commands;
                    return this.commands.filter(cmd => 
                        cmd.name.toLowerCase().includes(this.search.toLowerCase())
                    );
                }
            }" 
            @keydown.window.ctrl.k.prevent="open = !open"
            @keydown.window.escape="open = false">
                
                <button @click="open = true" class="w-full px-4 py-2 bg-gray-100 dark:bg-gray-700 rounded-lg flex items-center justify-between text-left hover:bg-gray-200 dark:hover:bg-gray-600 transition">
                    <span class="text-gray-600 dark:text-gray-400">Search commands...</span>
                    <kbd class="px-2 py-1 text-xs bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-600 rounded">Ctrl K</kbd>
                </button>
                
                <!-- Modal -->
                <div x-show="open" 
                     x-cloak
                     class="fixed inset-0 z-50 flex items-start justify-center pt-20 px-4"
                     @click.self="open = false">
                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-2xl max-w-2xl w-full border border-gray-200 dark:border-gray-700">
                        <div class="p-4 border-b border-gray-200 dark:border-gray-700">
                            <input x-model="search"
                                   x-ref="searchInput"
                                   type="text"
                                   placeholder="Type a command or search..."
                                   class="w-full px-0 py-0 border-0 focus:ring-0 bg-transparent text-lg text-gray-900 dark:text-white placeholder-gray-400 dark:placeholder-gray-500"
                                   x-init="$watch('open', value => value && setTimeout(() => $refs.searchInput.focus(), 50))">
                        </div>
                        
                        <div class="max-h-96 overflow-y-auto">
                            <template x-for="command in filteredCommands" :key="command.name">
                                <button @click="open = false" class="w-full px-4 py-3 flex items-center gap-3 hover:bg-gray-100 dark:hover:bg-gray-700 text-left transition">
                                    <div class="w-8 h-8 bg-gray-200 dark:bg-gray-600 rounded flex items-center justify-center flex-shrink-0">
                                        <svg class="w-4 h-4 text-gray-600 dark:text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <p class="text-sm font-medium text-gray-900 dark:text-white" x-text="command.name"></p>
                                        <p class="text-xs text-gray-500 dark:text-gray-400" x-text="command.category"></p>
                                    </div>
                                </button>
                            </template>
                            
                            <div x-show="filteredCommands.length === 0" class="px-4 py-12 text-center text-gray-500 dark:text-gray-400">
                                No results found
                            </div>
                        </div>
                    </div>
                </div>
                
                <div x-show="open" x-cloak class="fixed inset-0 bg-black bg-opacity-50 z-40" @click="open = false"></div>
            </div>
        @endslot
    @endcomponent

</div>
@endsection
