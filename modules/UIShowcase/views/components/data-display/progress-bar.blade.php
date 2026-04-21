@extends('showcase::components.component-layout')

@section('demo')
<div class="space-y-4">
    <div>
        <div class="flex justify-between mb-1">
            <span class="text-sm font-medium text-gray-700 dark:text-gray-300">Progress (75%)</span>
            <span class="text-sm font-medium text-gray-700 dark:text-gray-300">75%</span>
        </div>
        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2.5">
            <div class="bg-blue-600 h-2.5 rounded-full" style="width: 75%"></div>
        </div>
    </div>
    <div>
        <div class="flex justify-between mb-1">
            <span class="text-sm font-medium text-gray-700 dark:text-gray-300">Success (90%)</span>
            <span class="text-sm font-medium text-gray-700 dark:text-gray-300">90%</span>
        </div>
        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2.5">
            <div class="bg-green-600 h-2.5 rounded-full" style="width: 90%"></div>
        </div>
    </div>
    <div>
        <div class="flex justify-between mb-1">
            <span class="text-sm font-medium text-gray-700 dark:text-gray-300">Warning (45%)</span>
            <span class="text-sm font-medium text-gray-700 dark:text-gray-300">45%</span>
        </div>
        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2.5">
            <div class="bg-yellow-500 h-2.5 rounded-full" style="width: 45%"></div>
        </div>
    </div>
    <div>
        <div class="flex justify-between mb-1">
            <span class="text-sm font-medium text-gray-700 dark:text-gray-300">Danger (20%)</span>
            <span class="text-sm font-medium text-gray-700 dark:text-gray-300">20%</span>
        </div>
        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2.5">
            <div class="bg-red-600 h-2.5 rounded-full" style="width: 20%"></div>
        </div>
    </div>
</div>
@endsection

@section('code')
<div>
    <div class="flex justify-between mb-1">
        <span class="text-sm font-medium text-gray-700 dark:text-gray-300">Progress</span>
        <span class="text-sm font-medium text-gray-700 dark:text-gray-300">75%</span>
    </div>
    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2.5">
        <div class="bg-blue-600 h-2.5 rounded-full" style="width: 75%"></div>
    </div>
</div>
@endsection
