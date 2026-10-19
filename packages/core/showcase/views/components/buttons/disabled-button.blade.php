@extends('showcase::components.component-layout')

@section('component-title', 'Disabled Button')
@section('component-description', 'Non-interactive button state')

@section('demo')
<button class="px-4 py-2 bg-gray-300 dark:bg-gray-700 text-gray-500 dark:text-gray-500 rounded-lg cursor-not-allowed" disabled>
    Disabled
</button>
@endsection

@section('code')
<button class="px-4 py-2 bg-gray-300 dark:bg-gray-700 text-gray-500 dark:text-gray-500 rounded-lg cursor-not-allowed" disabled>
    Disabled
</button>
@endsection
