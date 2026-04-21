@extends('showcase::components.component-layout')

@section('component-title', 'Button Sizes')
@section('component-description', 'Different button sizes (Small, Medium, Large)')

@section('demo')
<div class="flex items-center space-x-4">
    <button class="px-3 py-1.5 text-sm bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">
        Small
    </button>
    <button class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">
        Medium
    </button>
    <button class="px-6 py-3 text-lg bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">
        Large
    </button>
</div>
@endsection

@section('code')
<!-- Small -->
<button class="px-3 py-1.5 text-sm bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">
    Small
</button>

<!-- Medium (Default) -->
<button class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">
    Medium
</button>

<!-- Large -->
<button class="px-6 py-3 text-lg bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">
    Large
</button>
@endsection
