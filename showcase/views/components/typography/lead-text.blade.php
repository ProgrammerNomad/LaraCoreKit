@extends('showcase::components.component-layout')

@section('component-title', 'Lead Text')
@section('component-description', 'Larger text for introductions and emphasis')

@section('demo')
<p class="text-xl text-gray-600 dark:text-gray-400 leading-relaxed">
    This is lead text, typically used for introductions or to emphasize important content. It draws more attention than regular paragraphs.
</p>
@endsection

@section('code')
<p class="text-xl text-gray-600 dark:text-gray-400 leading-relaxed">
    This is lead text, typically used for introductions or to emphasize important content.
</p>
@endsection
