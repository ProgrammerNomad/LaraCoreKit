@extends('showcase::components.component-layout')

@section('demo')
<div class="grid grid-cols-1 lg:grid-cols-4 gap-6">
    <aside class="lg:col-span-1 bg-white dark:bg-gray-800 rounded-lg shadow p-6">
        <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Sidebar</h3>
        <nav class="space-y-2">
            <a href="#" class="block px-3 py-2 rounded text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700">Link 1</a>
            <a href="#" class="block px-3 py-2 rounded text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700">Link 2</a>
            <a href="#" class="block px-3 py-2 rounded text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700">Link 3</a>
        </nav>
    </aside>
    <main class="lg:col-span-3 bg-white dark:bg-gray-800 rounded-lg shadow p-6">
        <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Main Content</h2>
        <p class="text-gray-600 dark:text-gray-400">This is the main content area next to the sidebar.</p>
    </main>
</div>
@endsection

@section('code')
<div class="grid grid-cols-1 lg:grid-cols-4 gap-6">
    <aside class="lg:col-span-1 bg-white dark:bg-gray-800 rounded-lg shadow p-6">
        <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Sidebar</h3>
        <nav class="space-y-2">
            <a href="#" class="block px-3 py-2 rounded text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700">Link 1</a>
            <a href="#" class="block px-3 py-2 rounded text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700">Link 2</a>
            <a href="#" class="block px-3 py-2 rounded text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700">Link 3</a>
        </nav>
    </aside>
    <main class="lg:col-span-3 bg-white dark:bg-gray-800 rounded-lg shadow p-6">
        <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Main Content</h2>
        <p class="text-gray-600 dark:text-gray-400">This is the main content area next to the sidebar.</p>
    </main>
</div>
@endsection
