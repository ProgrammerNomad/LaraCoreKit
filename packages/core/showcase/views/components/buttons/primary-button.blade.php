@extends('showcase::components.component-layout')

@section('component-title', 'Primary Button')
@section('component-description', 'Main call-to-action buttons')

@section('demo')
<button class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition">
    Primary Button
</button>
@endsection

@section('code')
<button class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition">
    Primary Button
</button>
@endsection
