@extends('showcase::components.component-layout')

@section('demo')
<div x-data="{ 
    query: '',
    results: [],
    loading: false,
    allItems: ['Alpine.js', 'Tailwind CSS', 'Laravel', 'Vue.js', 'React', 'Livewire', 'Inertia.js', 'Filament', 'Jetstream', 'Breeze'],
    search() {
        if (this.query.length < 2) { this.results = []; return; }
        this.loading = true;
        setTimeout(() => {
            this.results = this.allItems.filter(i => i.toLowerCase().includes(this.query.toLowerCase()));
            this.loading = false;
        }, 300);
    }
}" class="relative max-w-md">
    <div class="relative">
        <input type="text" x-model="query" @input="search()" placeholder="Search technologies..." 
            class="w-full px-4 py-3 pl-10 border border-gray-300 dark:border-gray-600 rounded-xl bg-white dark:bg-gray-800 text-gray-900 dark:text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none">
        <div class="absolute left-3 top-3.5 text-gray-400">
            <svg x-show="!loading" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
            <div x-show="loading" class="w-5 h-5 border-2 border-blue-500 border-t-transparent rounded-full animate-spin"></div>
        </div>
    </div>
    <div x-show="results.length > 0" class="absolute w-full mt-2 bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-xl shadow-lg z-10">
        <template x-for="result in results" :key="result">
            <div @click="query = result; results = []" class="px-4 py-3 hover:bg-gray-50 dark:hover:bg-gray-700 cursor-pointer first:rounded-t-xl last:rounded-b-xl">
                <p class="text-gray-900 dark:text-white text-sm" x-text="result"></p>
            </div>
        </template>
    </div>
    <div x-show="query.length >= 2 && !loading && results.length === 0" class="absolute w-full mt-2 bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-xl shadow-lg z-10 px-4 py-3 text-gray-500 dark:text-gray-400 text-sm">
        No results found for "<span x-text="query"></span>"
    </div>
</div>
@endsection

@section('code')
<div x-data="{ query: '', results: [], loading: false, search() { /* filter logic */ } }" class="relative max-w-md">
    <div class="relative">
        <input type="text" x-model="query" @input="search()" placeholder="Search..." 
            class="w-full px-4 py-3 pl-10 border border-gray-300 dark:border-gray-600 rounded-xl bg-white dark:bg-gray-800 text-gray-900 dark:text-white focus:ring-2 focus:ring-blue-500 outline-none">
        <svg class="absolute left-3 top-3.5 w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
    </div>
    <div x-show="results.length > 0" class="absolute w-full mt-2 bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-xl shadow-lg z-10">
        <template x-for="result in results" :key="result">
            <div @click="query = result; results = []" class="px-4 py-3 hover:bg-gray-50 dark:hover:bg-gray-700 cursor-pointer text-sm" x-text="result"></div>
        </template>
    </div>
</div>
@endsection
