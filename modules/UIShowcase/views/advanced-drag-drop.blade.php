@extends('showcase::layouts.showcase')

@section('page-title', 'Advanced - Drag & Drop')
@section('page-description', 'Sortable lists, kanban boards, and drag-drop file uploads')

@section('content')
<div class="max-w-7xl mx-auto space-y-8">

    <!-- Sortable List -->
    @component('showcase::components.showcase-item', [
        'title' => 'Sortable List',
        'description' => 'Drag and drop to reorder items with handles',
        'code' => '<div x-data="{ 
    tasks: [
        { id: 1, title: &#39;Design homepage mockup&#39;, completed: false },
        { id: 2, title: &#39;Implement user authentication&#39;, completed: true },
        { id: 3, title: &#39;Write API documentation&#39;, completed: false },
        { id: 4, title: &#39;Set up CI/CD pipeline&#39;, completed: false }
    ],
    saveOrder() {
        console.log(&#39;Saving order:&#39;, this.tasks.map(t => t.id));
    }
}" class="bg-white dark:bg-gray-800 rounded-lg shadow p-6">
    <div class="flex justify-between items-center mb-4">
        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">My Tasks</h3>
        <button &#64;click="saveOrder()" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 text-sm">
            Save Order
        </button>
    </div>
    
    <div id="sortable-list" class="space-y-2">
        <template x-for="task in tasks" :key="task.id">
            <div class="flex items-center gap-3 p-3 bg-gray-50 dark:bg-gray-700 rounded-lg border border-gray-200 dark:border-gray-600 cursor-move hover:border-blue-500 transition">
                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8h16M4 16h16"/>
                </svg>
                <input type="checkbox" :checked="task.completed" class="rounded text-blue-600">
                <span class="flex-1 text-gray-900 dark:text-white" :class="task.completed ? &#39;line-through text-gray-500&#39; : &#39;&#39;" x-text="task.title"></span>
                <button class="text-red-600 hover:text-red-700">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                    </svg>
                </button>
            </div>
        </template>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/sortablejs@latest/Sortable.min.js"></script>
<script>
document.addEventListener(&#39;DOMContentLoaded&#39;, function() {
    const el = document.getElementById(&#39;sortable-list&#39;);
    if (el) {
        new Sortable(el, {
            animation: 150,
            handle: &#39;svg&#39;,
            ghostClass: &#39;opacity-50&#39;
        });
    }
});
</script>'
    ])
        @slot('preview', null, [])
            <div x-data="{ 
                tasks: [
                    { id: 1, title: 'Design homepage mockup', completed: false },
                    { id: 2, title: 'Implement user authentication', completed: true },
                    { id: 3, title: 'Write API documentation', completed: false },
                    { id: 4, title: 'Set up CI/CD pipeline', completed: false }
                ],
                saveOrder() {
                    alert('Order saved! Check console for details.');
                    console.log('Saving order:', this.tasks.map(t => t.id));
                }
            }" class="bg-white dark:bg-gray-800 rounded-lg shadow p-6">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">My Tasks</h3>
                    <button @click="saveOrder()" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 text-sm transition">
                        Save Order
                    </button>
                </div>
                
                <div id="sortable-list-preview" class="space-y-2">
                    <template x-for="task in tasks" :key="task.id">
                        <div class="flex items-center gap-3 p-3 bg-gray-50 dark:bg-gray-700 rounded-lg border border-gray-200 dark:border-gray-600 cursor-move hover:border-blue-500 transition">
                            <svg class="w-5 h-5 text-gray-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8h16M4 16h16"/>
                            </svg>
                            <input type="checkbox" :checked="task.completed" class="rounded text-blue-600 focus:ring-blue-500">
                            <span class="flex-1 text-gray-900 dark:text-white" :class="task.completed ? 'line-through text-gray-500 dark:text-gray-500' : ''" x-text="task.title"></span>
                            <button class="text-red-600 hover:text-red-700 transition">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                </svg>
                            </button>
                        </div>
                    </template>
                </div>
            </div>
            
            <script src="https://cdn.jsdelivr.net/npm/sortablejs@latest/Sortable.min.js"></script>
            <script>
            document.addEventListener('alpine:init', () => {
                setTimeout(() => {
                    const el = document.getElementById('sortable-list-preview');
                    if (el && !el.classList.contains('sortable-initialized')) {
                        new Sortable(el, {
                            animation: 150,
                            handle: 'svg',
                            ghostClass: 'opacity-50'
                        });
                        el.classList.add('sortable-initialized');
                    }
                }, 100);
            });
            </script>
        @endslot
    @endcomponent

    <!-- Kanban Board -->
    @component('showcase::components.showcase-item', [
        'title' => 'Kanban Board',
        'description' => 'Drag cards between columns to update status',
        'code' => '<div x-data="{ 
    columns: {
        todo: [
            { id: 1, title: &#39;Update documentation&#39;, assignee: &#39;JD&#39;, tags: [&#39;docs&#39;] },
            { id: 2, title: &#39;Fix bug in login&#39;, assignee: &#39;SM&#39;, tags: [&#39;bug&#39;] }
        ],
        inProgress: [
            { id: 3, title: &#39;Design new feature&#39;, assignee: &#39;AB&#39;, tags: [&#39;design&#39;] }
        ],
        done: [
            { id: 4, title: &#39;Deploy to staging&#39;, assignee: &#39;JD&#39;, tags: [&#39;deploy&#39;] }
        ]
    }
}" class="bg-gray-50 dark:bg-gray-900 p-6 rounded-lg">
    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Project Board</h3>
    
    <div class="grid md:grid-cols-3 gap-4">
        <!-- To Do Column -->
        <div class="bg-white dark:bg-gray-800 rounded-lg p-4">
            <div class="flex items-center justify-between mb-4">
                <h4 class="font-semibold text-gray-900 dark:text-white">To Do</h4>
                <span class="text-xs bg-gray-200 dark:bg-gray-700 px-2 py-1 rounded" x-text="columns.todo.length"></span>
            </div>
            <div id="kanban-todo" class="space-y-2 min-h-[200px]">
                <template x-for="card in columns.todo" :key="card.id">
                    <div class="p-3 bg-gray-50 dark:bg-gray-700 rounded border border-gray-200 dark:border-gray-600 cursor-move hover:shadow-md transition">
                        <p class="text-sm font-medium text-gray-900 dark:text-white mb-2" x-text="card.title"></p>
                        <div class="flex items-center justify-between">
                            <div class="flex gap-1">
                                <template x-for="tag in card.tags">
                                    <span class="text-xs bg-blue-100 dark:bg-blue-900/20 text-blue-700 dark:text-blue-400 px-2 py-1 rounded" x-text="tag"></span>
                                </template>
                            </div>
                            <div class="w-6 h-6 bg-blue-500 rounded-full flex items-center justify-center text-white text-xs" x-text="card.assignee"></div>
                        </div>
                    </div>
                </template>
            </div>
        </div>
        
        <!-- In Progress Column -->
        <div class="bg-white dark:bg-gray-800 rounded-lg p-4">
            <div class="flex items-center justify-between mb-4">
                <h4 class="font-semibold text-gray-900 dark:text-white">In Progress</h4>
                <span class="text-xs bg-gray-200 dark:bg-gray-700 px-2 py-1 rounded" x-text="columns.inProgress.length"></span>
            </div>
            <div id="kanban-progress" class="space-y-2 min-h-[200px]">
                <template x-for="card in columns.inProgress" :key="card.id">
                    <div class="p-3 bg-gray-50 dark:bg-gray-700 rounded border border-gray-200 dark:border-gray-600 cursor-move hover:shadow-md transition">
                        <p class="text-sm font-medium text-gray-900 dark:text-white mb-2" x-text="card.title"></p>
                        <div class="flex items-center justify-between">
                            <div class="flex gap-1">
                                <template x-for="tag in card.tags">
                                    <span class="text-xs bg-green-100 dark:bg-green-900/20 text-green-700 dark:text-green-400 px-2 py-1 rounded" x-text="tag"></span>
                                </template>
                            </div>
                            <div class="w-6 h-6 bg-green-500 rounded-full flex items-center justify-center text-white text-xs" x-text="card.assignee"></div>
                        </div>
                    </div>
                </template>
            </div>
        </div>
        
        <!-- Done Column -->
        <div class="bg-white dark:bg-gray-800 rounded-lg p-4">
            <div class="flex items-center justify-between mb-4">
                <h4 class="font-semibold text-gray-900 dark:text-white">Done</h4>
                <span class="text-xs bg-gray-200 dark:bg-gray-700 px-2 py-1 rounded" x-text="columns.done.length"></span>
            </div>
            <div id="kanban-done" class="space-y-2 min-h-[200px]">
                <template x-for="card in columns.done" :key="card.id">
                    <div class="p-3 bg-gray-50 dark:bg-gray-700 rounded border border-gray-200 dark:border-gray-600 cursor-move hover:shadow-md transition">
                        <p class="text-sm font-medium text-gray-900 dark:text-white mb-2" x-text="card.title"></p>
                        <div class="flex items-center justify-between">
                            <div class="flex gap-1">
                                <template x-for="tag in card.tags">
                                    <span class="text-xs bg-purple-100 dark:bg-purple-900/20 text-purple-700 dark:text-purple-400 px-2 py-1 rounded" x-text="tag"></span>
                                </template>
                            </div>
                            <div class="w-6 h-6 bg-purple-500 rounded-full flex items-center justify-center text-white text-xs" x-text="card.assignee"></div>
                        </div>
                    </div>
                </template>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/sortablejs@latest/Sortable.min.js"></script>
<script>
document.addEventListener(&#39;DOMContentLoaded&#39;, function() {
    [&#39;kanban-todo&#39;, &#39;kanban-progress&#39;, &#39;kanban-done&#39;].forEach(id => {
        const el = document.getElementById(id);
        if (el) {
            new Sortable(el, {
                group: &#39;kanban&#39;,
                animation: 150,
                ghostClass: &#39;opacity-50&#39;
            });
        }
    });
});
</script>'
    ])
        @slot('preview', null, [])
            <div x-data="{ 
                columns: {
                    todo: [
                        { id: 1, title: 'Update documentation', assignee: 'JD', tags: ['docs'] },
                        { id: 2, title: 'Fix bug in login', assignee: 'SM', tags: ['bug'] }
                    ],
                    inProgress: [
                        { id: 3, title: 'Design new feature', assignee: 'AB', tags: ['design'] }
                    ],
                    done: [
                        { id: 4, title: 'Deploy to staging', assignee: 'JD', tags: ['deploy'] }
                    ]
                }
            }" class="bg-gray-50 dark:bg-gray-900 p-4 md:p-6 rounded-lg">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Project Board</h3>
                
                <div class="grid md:grid-cols-3 gap-4">
                    <!-- To Do Column -->
                    <div class="bg-white dark:bg-gray-800 rounded-lg p-4">
                        <div class="flex items-center justify-between mb-4">
                            <h4 class="font-semibold text-gray-900 dark:text-white">To Do</h4>
                            <span class="text-xs bg-gray-200 dark:bg-gray-700 text-gray-700 dark:text-gray-300 px-2 py-1 rounded" x-text="columns.todo.length"></span>
                        </div>
                        <div id="kanban-todo-preview" class="space-y-2 min-h-[200px]">
                            <template x-for="card in columns.todo" :key="card.id">
                                <div class="p-3 bg-gray-50 dark:bg-gray-700 rounded border border-gray-200 dark:border-gray-600 cursor-move hover:shadow-md transition">
                                    <p class="text-sm font-medium text-gray-900 dark:text-white mb-2" x-text="card.title"></p>
                                    <div class="flex items-center justify-between">
                                        <div class="flex gap-1 flex-wrap">
                                            <template x-for="tag in card.tags">
                                                <span class="text-xs bg-blue-100 dark:bg-blue-900/20 text-blue-700 dark:text-blue-400 px-2 py-1 rounded" x-text="tag"></span>
                                            </template>
                                        </div>
                                        <div class="w-6 h-6 bg-blue-500 rounded-full flex items-center justify-center text-white text-xs font-semibold" x-text="card.assignee"></div>
                                    </div>
                                </div>
                            </template>
                        </div>
                    </div>
                    
                    <!-- In Progress Column -->
                    <div class="bg-white dark:bg-gray-800 rounded-lg p-4">
                        <div class="flex items-center justify-between mb-4">
                            <h4 class="font-semibold text-gray-900 dark:text-white">In Progress</h4>
                            <span class="text-xs bg-gray-200 dark:bg-gray-700 text-gray-700 dark:text-gray-300 px-2 py-1 rounded" x-text="columns.inProgress.length"></span>
                        </div>
                        <div id="kanban-progress-preview" class="space-y-2 min-h-[200px]">
                            <template x-for="card in columns.inProgress" :key="card.id">
                                <div class="p-3 bg-gray-50 dark:bg-gray-700 rounded border border-gray-200 dark:border-gray-600 cursor-move hover:shadow-md transition">
                                    <p class="text-sm font-medium text-gray-900 dark:text-white mb-2" x-text="card.title"></p>
                                    <div class="flex items-center justify-between">
                                        <div class="flex gap-1 flex-wrap">
                                            <template x-for="tag in card.tags">
                                                <span class="text-xs bg-green-100 dark:bg-green-900/20 text-green-700 dark:text-green-400 px-2 py-1 rounded" x-text="tag"></span>
                                            </template>
                                        </div>
                                        <div class="w-6 h-6 bg-green-500 rounded-full flex items-center justify-center text-white text-xs font-semibold" x-text="card.assignee"></div>
                                    </div>
                                </div>
                            </template>
                        </div>
                    </div>
                    
                    <!-- Done Column -->
                    <div class="bg-white dark:bg-gray-800 rounded-lg p-4">
                        <div class="flex items-center justify-between mb-4">
                            <h4 class="font-semibold text-gray-900 dark:text-white">Done</h4>
                            <span class="text-xs bg-gray-200 dark:bg-gray-700 text-gray-700 dark:text-gray-300 px-2 py-1 rounded" x-text="columns.done.length"></span>
                        </div>
                        <div id="kanban-done-preview" class="space-y-2 min-h-[200px]">
                            <template x-for="card in columns.done" :key="card.id">
                                <div class="p-3 bg-gray-50 dark:bg-gray-700 rounded border border-gray-200 dark:border-gray-600 cursor-move hover:shadow-md transition">
                                    <p class="text-sm font-medium text-gray-900 dark:text-white mb-2" x-text="card.title"></p>
                                    <div class="flex items-center justify-between">
                                        <div class="flex gap-1 flex-wrap">
                                            <template x-for="tag in card.tags">
                                                <span class="text-xs bg-purple-100 dark:bg-purple-900/20 text-purple-700 dark:text-purple-400 px-2 py-1 rounded" x-text="tag"></span>
                                            </template>
                                        </div>
                                        <div class="w-6 h-6 bg-purple-500 rounded-full flex items-center justify-center text-white text-xs font-semibold" x-text="card.assignee"></div>
                                    </div>
                                </div>
                            </template>
                        </div>
                    </div>
                </div>
            </div>
            
            <script>
            document.addEventListener('alpine:init', () => {
                setTimeout(() => {
                    ['kanban-todo-preview', 'kanban-progress-preview', 'kanban-done-preview'].forEach(id => {
                        const el = document.getElementById(id);
                        if (el && !el.classList.contains('sortable-initialized')) {
                            new Sortable(el, {
                                group: 'kanban-preview',
                                animation: 150,
                                ghostClass: 'opacity-50'
                            });
                            el.classList.add('sortable-initialized');
                        }
                    });
                }, 100);
            });
            </script>
        @endslot
    @endcomponent

    <!-- Drag & Drop File Upload -->
    @component('showcase::components.showcase-item', [
        'title' => 'Drag & Drop File Upload',
        'description' => 'Drag files or click to upload with preview',
        'code' => '<div x-data="{ 
    files: [],
    isDragging: false,
    handleDrop(event) {
        this.isDragging = false;
        const droppedFiles = Array.from(event.dataTransfer.files);
        droppedFiles.forEach(file => {
            this.files.push({
                name: file.name,
                size: this.formatFileSize(file.size),
                type: file.type,
                url: URL.createObjectURL(file)
            });
        });
    },
    handleFileSelect(event) {
        const selectedFiles = Array.from(event.target.files);
        selectedFiles.forEach(file => {
            this.files.push({
                name: file.name,
                size: this.formatFileSize(file.size),
                type: file.type,
                url: URL.createObjectURL(file)
            });
        });
    },
    removeFile(index) {
        this.files.splice(index, 1);
    },
    formatFileSize(bytes) {
        if (bytes < 1024) return bytes + &#39; B&#39;;
        if (bytes < 1048576) return (bytes / 1024).toFixed(1) + &#39; KB&#39;;
        return (bytes / 1048576).toFixed(1) + &#39; MB&#39;;
    }
}" class="bg-white dark:bg-gray-800 rounded-lg shadow p-6">
    
    <!-- Drop Zone -->
    <div &#64;drop.prevent="handleDrop($event)"
         &#64;dragover.prevent="isDragging = true"
         &#64;dragleave.prevent="isDragging = false"
         :class="isDragging ? &#39;border-blue-500 bg-blue-50 dark:bg-blue-900/20&#39; : &#39;border-gray-300 dark:border-gray-600&#39;"
         class="border-2 border-dashed rounded-lg p-12 text-center transition">
        
        <svg class="w-16 h-16 mx-auto mb-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"/>
        </svg>
        
        <p class="text-lg font-medium text-gray-900 dark:text-white mb-2">
            Drop files here or click to upload
        </p>
        <p class="text-sm text-gray-500 dark:text-gray-400 mb-4">
            PNG, JPG, PDF up to 10MB
        </p>
        
        <input type="file" 
               &#64;change="handleFileSelect($event)" 
               multiple 
               accept="image/*,.pdf"
               class="hidden" 
               id="file-upload">
        <label for="file-upload" class="inline-block px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 cursor-pointer">
            Select Files
        </label>
    </div>
    
    <!-- File List -->
    <div x-show="files.length > 0" class="mt-6">
        <h4 class="font-semibold text-gray-900 dark:text-white mb-3">Uploaded Files</h4>
        <div class="space-y-2">
            <template x-for="(file, index) in files" :key="index">
                <div class="flex items-center gap-3 p-3 bg-gray-50 dark:bg-gray-700 rounded-lg">
                    <img x-show="file.type.startsWith(&#39;image/&#39;)" 
                         :src="file.url" 
                         class="w-12 h-12 object-cover rounded">
                    <div x-show="!file.type.startsWith(&#39;image/&#39;)" 
                         class="w-12 h-12 bg-gray-200 dark:bg-gray-600 rounded flex items-center justify-center">
                        <svg class="w-6 h-6 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                        </svg>
                    </div>
                    <div class="flex-1">
                        <p class="text-sm font-medium text-gray-900 dark:text-white" x-text="file.name"></p>
                        <p class="text-xs text-gray-500 dark:text-gray-400" x-text="file.size"></p>
                    </div>
                    <button &#64;click="removeFile(index)" class="text-red-600 hover:text-red-700">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>
                </div>
            </template>
        </div>
    </div>
</div>'
    ])
        @slot('preview', null, [])
            <div x-data="{ 
                files: [],
                isDragging: false,
                handleDrop(event) {
                    this.isDragging = false;
                    const droppedFiles = Array.from(event.dataTransfer.files);
                    droppedFiles.forEach(file => {
                        this.files.push({
                            name: file.name,
                            size: this.formatFileSize(file.size),
                            type: file.type,
                            url: URL.createObjectURL(file)
                        });
                    });
                },
                handleFileSelect(event) {
                    const selectedFiles = Array.from(event.target.files);
                    selectedFiles.forEach(file => {
                        this.files.push({
                            name: file.name,
                            size: this.formatFileSize(file.size),
                            type: file.type,
                            url: URL.createObjectURL(file)
                        });
                    });
                },
                removeFile(index) {
                    this.files.splice(index, 1);
                },
                formatFileSize(bytes) {
                    if (bytes < 1024) return bytes + ' B';
                    if (bytes < 1048576) return (bytes / 1024).toFixed(1) + ' KB';
                    return (bytes / 1048576).toFixed(1) + ' MB';
                }
            }" class="bg-white dark:bg-gray-800 rounded-lg shadow p-6">
                
                <!-- Drop Zone -->
                <div @drop.prevent="handleDrop($event)"
                     @dragover.prevent="isDragging = true"
                     @dragleave.prevent="isDragging = false"
                     :class="isDragging ? 'border-blue-500 bg-blue-50 dark:bg-blue-900/20' : 'border-gray-300 dark:border-gray-600'"
                     class="border-2 border-dashed rounded-lg p-8 md:p-12 text-center transition">
                    
                    <svg class="w-12 h-12 md:w-16 md:h-16 mx-auto mb-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"/>
                    </svg>
                    
                    <p class="text-base md:text-lg font-medium text-gray-900 dark:text-white mb-2">
                        Drop files here or click to upload
                    </p>
                    <p class="text-sm text-gray-500 dark:text-gray-400 mb-4">
                        PNG, JPG, PDF up to 10MB
                    </p>
                    
                    <input type="file" 
                           @change="handleFileSelect($event)" 
                           multiple 
                           accept="image/*,.pdf"
                           class="hidden" 
                           id="file-upload-preview">
                    <label for="file-upload-preview" class="inline-block px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 cursor-pointer transition">
                        Select Files
                    </label>
                </div>
                
                <!-- File List -->
                <div x-show="files.length > 0" class="mt-6">
                    <h4 class="font-semibold text-gray-900 dark:text-white mb-3">Uploaded Files</h4>
                    <div class="space-y-2">
                        <template x-for="(file, index) in files" :key="index">
                            <div class="flex items-center gap-3 p-3 bg-gray-50 dark:bg-gray-700 rounded-lg">
                                <img x-show="file.type.startsWith('image/')" 
                                     :src="file.url" 
                                     class="w-12 h-12 object-cover rounded">
                                <div x-show="!file.type.startsWith('image/')" 
                                     class="w-12 h-12 bg-gray-200 dark:bg-gray-600 rounded flex items-center justify-center flex-shrink-0">
                                    <svg class="w-6 h-6 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                                    </svg>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <p class="text-sm font-medium text-gray-900 dark:text-white truncate" x-text="file.name"></p>
                                    <p class="text-xs text-gray-500 dark:text-gray-400" x-text="file.size"></p>
                                </div>
                                <button @click="removeFile(index)" class="text-red-600 hover:text-red-700 transition flex-shrink-0">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                                    </svg>
                                </button>
                            </div>
                        </template>
                    </div>
                </div>
            </div>
        @endslot
    @endcomponent

</div>
@endsection
