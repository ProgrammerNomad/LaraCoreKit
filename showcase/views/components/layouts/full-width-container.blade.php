@extends('showcase::components.component-layout')

@section('demo')
<div class="max-w-4xl mx-auto bg-white dark:bg-gray-800 rounded-lg shadow p-6">
    <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Contained Content</h2>
    <p class="text-gray-600 dark:text-gray-400">This content is centered and has a maximum width of 4xl (896px). Use <code class="bg-gray-100 dark:bg-gray-700 px-1 rounded">max-w-7xl</code> for full-width layouts.</p>
</div>
@endsection

@section('code')
<div class="max-w-4xl mx-auto bg-white dark:bg-gray-800 rounded-lg shadow p-6">
    <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Contained Content</h2>
    <p class="text-gray-600 dark:text-gray-400">This content is centered and has a maximum width of 4xl (896px).</p>
</div>
@endsection
