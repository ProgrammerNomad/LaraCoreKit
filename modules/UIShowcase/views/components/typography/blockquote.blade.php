@extends('showcase::components.component-layout')

@section('component-title', 'Blockquote')
@section('component-description', 'Quoted text with citation')

@section('demo')
<blockquote class="border-l-4 border-blue-500 pl-4 py-2 bg-blue-50 dark:bg-blue-900/20 rounded">
    <p class="text-gray-700 dark:text-gray-300 italic">
        "The best way to predict the future is to invent it."
    </p>
    <footer class="text-sm text-gray-500 dark:text-gray-400 mt-2">— Alan Kay</footer>
</blockquote>
@endsection

@section('code')
<blockquote class="border-l-4 border-blue-500 pl-4 py-2 bg-blue-50 dark:bg-blue-900/20 rounded">
    <p class="text-gray-700 dark:text-gray-300 italic">
        "The best way to predict the future is to invent it."
    </p>
    <footer class="text-sm text-gray-500 dark:text-gray-400 mt-2">— Alan Kay</footer>
</blockquote>
@endsection
