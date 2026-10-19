@extends('showcase::components.component-layout')

@section('demo')
<div class="grid grid-cols-1 md:grid-cols-3 gap-8">
    <div class="bg-white dark:bg-gray-800 rounded-xl shadow p-8 text-center hover:shadow-lg transition-shadow">
        <div class="w-14 h-14 bg-blue-100 dark:bg-blue-900/30 rounded-xl flex items-center justify-center mx-auto mb-4">
            <svg class="w-7 h-7 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
        </div>
        <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Lightning Fast</h3>
        <p class="text-gray-600 dark:text-gray-400 text-sm">Built with optimized code and best practices for maximum performance.</p>
    </div>
    <div class="bg-white dark:bg-gray-800 rounded-xl shadow p-8 text-center hover:shadow-lg transition-shadow">
        <div class="w-14 h-14 bg-green-100 dark:bg-green-900/30 rounded-xl flex items-center justify-center mx-auto mb-4">
            <svg class="w-7 h-7 text-green-600 dark:text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        </div>
        <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Secure by Default</h3>
        <p class="text-gray-600 dark:text-gray-400 text-sm">Security built into every component with Laravel best practices.</p>
    </div>
    <div class="bg-white dark:bg-gray-800 rounded-xl shadow p-8 text-center hover:shadow-lg transition-shadow">
        <div class="w-14 h-14 bg-purple-100 dark:bg-purple-900/30 rounded-xl flex items-center justify-center mx-auto mb-4">
            <svg class="w-7 h-7 text-purple-600 dark:text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"></path></svg>
        </div>
        <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Fully Customizable</h3>
        <p class="text-gray-600 dark:text-gray-400 text-sm">Every component can be easily customized to match your brand.</p>
    </div>
</div>
@endsection

@section('code')
<div class="grid grid-cols-1 md:grid-cols-3 gap-8">
    <div class="bg-white dark:bg-gray-800 rounded-xl shadow p-8 text-center hover:shadow-lg transition-shadow">
        <div class="w-14 h-14 bg-blue-100 dark:bg-blue-900/30 rounded-xl flex items-center justify-center mx-auto mb-4">
            {{-- Icon SVG --}}
        </div>
        <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Feature Title</h3>
        <p class="text-gray-600 dark:text-gray-400 text-sm">Feature description goes here.</p>
    </div>
    {{-- Repeat for each feature --}}
</div>
@endsection
