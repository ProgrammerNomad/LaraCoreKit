@extends('showcase::components.component-layout')

@section('demo')
<div x-data="{ 
    items: [
        { id: 1, content: 'Task 1', color: 'blue' },
        { id: 2, content: 'Task 2', color: 'green' },
        { id: 3, content: 'Task 3', color: 'purple' }
    ],
    dragging: null,
    dragOver: null,
    onDragStart(id) { this.dragging = id; },
    onDragOver(id) { this.dragOver = id; },
    onDrop(targetId) {
        if (this.dragging === targetId) return;
        const fromIndex = this.items.findIndex(i => i.id === this.dragging);
        const toIndex = this.items.findIndex(i => i.id === targetId);
        const item = this.items.splice(fromIndex, 1)[0];
        this.items.splice(toIndex, 0, item);
        this.dragging = null;
        this.dragOver = null;
    }
}" class="bg-white dark:bg-gray-800 rounded-xl shadow p-6">
    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Drag to Reorder</h3>
    <div class="space-y-3">
        <template x-for="item in items" :key="item.id">
            <div :draggable="true"
                 @dragstart="onDragStart(item.id)"
                 @dragover.prevent="onDragOver(item.id)"
                 @drop="onDrop(item.id)"
                 :class="dragOver === item.id ? 'border-blue-400 bg-blue-50 dark:bg-blue-900/20 scale-105' : 'border-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-700'"
                 class="flex items-center gap-3 p-4 border-2 rounded-lg cursor-grab active:cursor-grabbing transition-all">
                <svg class="w-5 h-5 text-gray-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8h16M4 16h16"></path>
                </svg>
                <div class="w-3 h-3 rounded-full" :class="{
                    'bg-blue-500': item.color === 'blue',
                    'bg-green-500': item.color === 'green',
                    'bg-purple-500': item.color === 'purple'
                }"></div>
                <span class="text-gray-900 dark:text-white font-medium" x-text="item.content"></span>
            </div>
        </template>
    </div>
</div>
@endsection

@section('code')
<div x-data="{ 
    items: [{ id: 1, content: 'Task 1' }, { id: 2, content: 'Task 2' }, { id: 3, content: 'Task 3' }],
    dragging: null,
    dragOver: null,
    onDragStart(id) { this.dragging = id; },
    onDragOver(id) { this.dragOver = id; },
    onDrop(targetId) {
        if (this.dragging === targetId) return;
        const fromIndex = this.items.findIndex(i => i.id === this.dragging);
        const toIndex = this.items.findIndex(i => i.id === targetId);
        const item = this.items.splice(fromIndex, 1)[0];
        this.items.splice(toIndex, 0, item);
        this.dragging = null;
        this.dragOver = null;
    }
}">
    <template x-for="item in items" :key="item.id">
        <div :draggable="true"
             @dragstart="onDragStart(item.id)"
             @dragover.prevent="onDragOver(item.id)"
             @drop="onDrop(item.id)"
             :class="dragOver === item.id ? 'border-blue-400 bg-blue-50' : 'border-gray-200'"
             class="flex items-center gap-3 p-4 border-2 rounded-lg cursor-grab transition-all">
            <span x-text="item.content"></span>
        </div>
    </template>
</div>
@endsection
