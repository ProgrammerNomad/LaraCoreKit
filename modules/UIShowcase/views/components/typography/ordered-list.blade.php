@extends('showcase::components.component-layout')

@section('component-title', 'Ordered List')
@section('component-description', 'Numbered lists')

@section('demo')
<ol class="space-y-2 text-gray-700 dark:text-gray-300 list-decimal list-inside">
    <li>First step in the process</li>
    <li>Second step in the process</li>
    <li>Third step in the process</li>
    <li>Fourth step in the process</li>
</ol>
@endsection

@section('code')
<ol class="space-y-2 text-gray-700 dark:text-gray-300 list-decimal list-inside">
    <li>First step in the process</li>
    <li>Second step in the process</li>
    <li>Third step in the process</li>
    <li>Fourth step in the process</li>
</ol>
@endsection
