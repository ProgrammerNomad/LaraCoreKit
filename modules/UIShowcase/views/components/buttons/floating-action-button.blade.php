@extends('showcase::components.component-layout')

@section('component-title', 'Floating Action Button')
@section('component-description', 'Fixed position button for primary actions')

@section('demo')
<div class="relative h-64 bg-gray-100 dark:bg-gray-900 rounded-lg overflow-hidden">
    <p class="p-4 text-gray-600 dark:text-gray-400">Scroll down to see the FAB in the bottom right corner</p>
    
    <button class="absolute bottom-6 right-6 w-14 h-14 bg-blue-600 text-white rounded-full shadow-lg hover:bg-blue-700 hover:shadow-xl transition-all flex items-center justify-center">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
        </svg>
    </button>
</div>
@endsection

@section('code')
<button class="fixed bottom-6 right-6 w-14 h-14 bg-blue-600 text-white rounded-full shadow-lg hover:bg-blue-700 hover:shadow-xl transition-all flex items-center justify-center z-50">
    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
    </svg>
</button>
@endsection
