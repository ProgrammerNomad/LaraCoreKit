@extends('showcase::components.component-layout')

@section('component-title', 'Text Highlight')
@section('component-description', 'Highlighted text for emphasis')

@section('demo')
<p class="text-gray-700 dark:text-gray-300">
    This text has a <mark class="bg-yellow-200 dark:bg-yellow-700 px-1 rounded">highlighted portion</mark> in the middle.
</p>
@endsection

@section('code')
<p class="text-gray-700 dark:text-gray-300">
    This text has a <mark class="bg-yellow-200 dark:bg-yellow-700 px-1 rounded">highlighted portion</mark> in the middle.
</p>
@endsection
