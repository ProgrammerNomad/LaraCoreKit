@extends('showcase::components.component-layout')

@section('component-title', 'Unordered List')
@section('component-description', 'Bullet point lists')

@section('demo')
<ul class="space-y-2 text-gray-700 dark:text-gray-300 list-disc list-inside">
    <li>First item in the list</li>
    <li>Second item in the list</li>
    <li>Third item in the list</li>
    <li>Fourth item in the list</li>
</ul>
@endsection

@section('code')
<ul class="space-y-2 text-gray-700 dark:text-gray-300 list-disc list-inside">
    <li>First item in the list</li>
    <li>Second item in the list</li>
    <li>Third item in the list</li>
    <li>Fourth item in the list</li>
</ul>
@endsection
