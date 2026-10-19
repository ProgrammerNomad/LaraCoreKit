@extends('showcase::components.component-layout')

@section('component-title', 'Description List')
@section('component-description', 'Key-value pairs for definitions')

@section('demo')
<dl class="space-y-4">
    <div>
        <dt class="text-sm font-semibold text-gray-900 dark:text-white">Name</dt>
        <dd class="text-sm text-gray-600 dark:text-gray-400">John Doe</dd>
    </div>
    <div>
        <dt class="text-sm font-semibold text-gray-900 dark:text-white">Email</dt>
        <dd class="text-sm text-gray-600 dark:text-gray-400">john@laracorekit.com</dd>
    </div>
    <div>
        <dt class="text-sm font-semibold text-gray-900 dark:text-white">Role</dt>
        <dd class="text-sm text-gray-600 dark:text-gray-400">Administrator</dd>
    </div>
</dl>
@endsection

@section('code')
<dl class="space-y-4">
    <div>
        <dt class="text-sm font-semibold text-gray-900 dark:text-white">Name</dt>
        <dd class="text-sm text-gray-600 dark:text-gray-400">John Doe</dd>
    </div>
    <div>
        <dt class="text-sm font-semibold text-gray-900 dark:text-white">Email</dt>
        <dd class="text-sm text-gray-600 dark:text-gray-400">john@laracorekit.com</dd>
    </div>
    <div>
        <dt class="text-sm font-semibold text-gray-900 dark:text-white">Role</dt>
        <dd class="text-sm text-gray-600 dark:text-gray-400">Administrator</dd>
    </div>
</dl>
@endsection
