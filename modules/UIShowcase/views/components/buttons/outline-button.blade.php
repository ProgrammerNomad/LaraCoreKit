@extends('showcase::components.component-layout')

@section('component-title', 'Outline Button')
@section('component-description', 'Buttons with border only')

@section('demo')
<button class="px-4 py-2 border-2 border-blue-600 text-blue-600 dark:text-blue-400 rounded-lg hover:bg-blue-50 dark:hover:bg-blue-900/20 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition">
    Outline Button
</button>
@endsection

@section('code')
<button class="px-4 py-2 border-2 border-blue-600 text-blue-600 dark:text-blue-400 rounded-lg hover:bg-blue-50 dark:hover:bg-blue-900/20 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition">
    Outline Button
</button>
@endsection
