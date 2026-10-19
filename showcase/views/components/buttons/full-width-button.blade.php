@extends('showcase::components.component-layout')

@section('component-title', 'Full Width Button')
@section('component-description', 'Button spanning full container width')

@section('demo')
<button class="w-full px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition">
    Full Width Button
</button>
@endsection

@section('code')
<button class="w-full px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition">
    Full Width Button
</button>
@endsection
