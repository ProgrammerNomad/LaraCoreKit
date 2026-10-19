@extends('showcase::components.component-layout')

@section('demo')
<div class="overflow-x-auto bg-white dark:bg-gray-900 rounded-lg shadow">
    <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
        <thead class="bg-gray-50 dark:bg-gray-800">
            <tr>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase">Name</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase">Email</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase">Status</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
            <tr class="bg-white dark:bg-gray-900">
                <td class="px-6 py-4 text-sm text-gray-900 dark:text-white">John Doe</td>
                <td class="px-6 py-4 text-sm text-gray-500 dark:text-gray-400">john@laracorekit.com</td>
                <td class="px-6 py-4"><span class="px-2 py-1 text-xs rounded-full bg-green-100 text-green-800 dark:bg-green-900/30 dark:text-green-400">Active</span></td>
            </tr>
            <tr class="bg-gray-50 dark:bg-gray-800">
                <td class="px-6 py-4 text-sm text-gray-900 dark:text-white">Jane Smith</td>
                <td class="px-6 py-4 text-sm text-gray-500 dark:text-gray-400">jane@laracorekit.com</td>
                <td class="px-6 py-4"><span class="px-2 py-1 text-xs rounded-full bg-green-100 text-green-800 dark:bg-green-900/30 dark:text-green-400">Active</span></td>
            </tr>
            <tr class="bg-white dark:bg-gray-900">
                <td class="px-6 py-4 text-sm text-gray-900 dark:text-white">Bob Johnson</td>
                <td class="px-6 py-4 text-sm text-gray-500 dark:text-gray-400">bob@laracorekit.com</td>
                <td class="px-6 py-4"><span class="px-2 py-1 text-xs rounded-full bg-gray-100 text-gray-800 dark:bg-gray-700 dark:text-gray-300">Inactive</span></td>
            </tr>
        </tbody>
    </table>
</div>
@endsection

@section('code')
<div class="overflow-x-auto bg-white dark:bg-gray-900 rounded-lg shadow">
    <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
        <thead class="bg-gray-50 dark:bg-gray-800">
            <tr>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase">Name</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase">Email</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase">Status</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
            <tr class="bg-white dark:bg-gray-900">
                <td class="px-6 py-4 text-sm text-gray-900 dark:text-white">John Doe</td>
                <td class="px-6 py-4 text-sm text-gray-500 dark:text-gray-400">john@laracorekit.com</td>
                <td class="px-6 py-4"><span class="px-2 py-1 text-xs rounded-full bg-green-100 text-green-800">Active</span></td>
            </tr>
            <tr class="bg-gray-50 dark:bg-gray-800">
                <td class="px-6 py-4 text-sm text-gray-900 dark:text-white">Jane Smith</td>
                <td class="px-6 py-4 text-sm text-gray-500 dark:text-gray-400">jane@laracorekit.com</td>
                <td class="px-6 py-4"><span class="px-2 py-1 text-xs rounded-full bg-green-100 text-green-800">Active</span></td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
