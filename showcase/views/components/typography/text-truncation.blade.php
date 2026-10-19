@extends('showcase::components.component-layout')

@section('component-title', 'Text Truncation')
@section('component-description', 'Truncated text with hover tooltip')

@section('demo')
<p class="max-w-xs truncate text-gray-700 dark:text-gray-300" title="This is a very long text that will be truncated with ellipsis when it overflows the container">
    This is a very long text that will be truncated with ellipsis when it overflows the container
</p>
@endsection

@section('code')
<p class="max-w-xs truncate text-gray-700 dark:text-gray-300" 
   title="This is a very long text that will be truncated with ellipsis when it overflows the container">
    This is a very long text that will be truncated with ellipsis when it overflows the container
</p>
@endsection
