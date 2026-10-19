@extends('showcase::components.component-layout')

@section('component-title', 'Muted Text')
@section('component-description', 'Secondary text with reduced emphasis')

@section('demo')
<p class="text-sm text-gray-500 dark:text-gray-400">
    This is muted text for less important information, captions, or helper text.
</p>
@endsection

@section('code')
<p class="text-sm text-gray-500 dark:text-gray-400">
    This is muted text for less important information, captions, or helper text.
</p>
@endsection
