@extends('showcase::components.component-layout')

@section('component-title', 'Danger Button')
@section('component-description', 'Destructive action buttons')

@section('demo')
<button class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition">
    Delete
</button>
@endsection

@section('code')
<button class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition">
    Delete
</button>
@endsection
