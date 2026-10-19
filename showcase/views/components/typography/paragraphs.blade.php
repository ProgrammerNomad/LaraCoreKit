@extends('showcase::components.component-layout')

@section('component-title', 'Paragraphs')
@section('component-description', 'Standard paragraph text with proper spacing')

@section('demo')
<p class="text-base text-gray-700 dark:text-gray-300 leading-relaxed">
    This is a standard paragraph with normal text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.
</p>
@endsection

@section('code')
<p class="text-base text-gray-700 dark:text-gray-300 leading-relaxed">
    This is a standard paragraph with normal text. Lorem ipsum dolor sit amet, 
    consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et 
    dolore magna aliqua.
</p>
@endsection
