@extends('showcase::components.component-layout')

@section('component-title', 'Inline Code')
@section('component-description', 'Code snippets within text')

@section('demo')
<p class="text-gray-700 dark:text-gray-300">
    Use the <code class="px-2 py-1 bg-gray-100 dark:bg-gray-700 text-red-600 dark:text-red-400 rounded text-sm font-mono">npm install</code> command to install packages.
</p>
@endsection

@section('code')
<p class="text-gray-700 dark:text-gray-300">
    Use the <code class="px-2 py-1 bg-gray-100 dark:bg-gray-700 text-red-600 dark:text-red-400 rounded text-sm font-mono">npm install</code> command to install packages.
</p>
@endsection
