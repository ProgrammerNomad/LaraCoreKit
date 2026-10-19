@extends('showcase::components.component-layout')

@section('demo')
<div class="space-y-4">
    <div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
            <thead class="bg-gray-50 dark:bg-gray-800">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase">Name</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase">Email</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase">Role</th>
                </tr>
            </thead>
            <tbody class="bg-white dark:bg-gray-900 divide-y divide-gray-200 dark:divide-gray-700">
                <tr><td class="px-6 py-4 text-sm text-gray-900 dark:text-white">John Doe</td><td class="px-6 py-4 text-sm text-gray-500 dark:text-gray-400">john@laracorekit.com</td><td class="px-6 py-4 text-sm text-gray-500 dark:text-gray-400">Admin</td></tr>
                <tr><td class="px-6 py-4 text-sm text-gray-900 dark:text-white">Jane Smith</td><td class="px-6 py-4 text-sm text-gray-500 dark:text-gray-400">jane@laracorekit.com</td><td class="px-6 py-4 text-sm text-gray-500 dark:text-gray-400">User</td></tr>
            </tbody>
        </table>
    </div>
    <div class="flex gap-3 flex-wrap">
        <button @click="
            const data = [['Name','Email','Role'],['John Doe','john@laracorekit.com','Admin'],['Jane Smith','jane@laracorekit.com','User']];
            const csv = data.map(row => row.join(',')).join('\n');
            const blob = new Blob([csv], { type: 'text/csv' });
            const url = URL.createObjectURL(blob);
            const a = document.createElement('a');
            a.href = url; a.download = 'export.csv'; a.click(); URL.revokeObjectURL(url);
        " class="px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 transition flex items-center gap-2">
            Export to CSV
        </button>
        <button @click="
            const data = [{name:'John Doe',email:'john@laracorekit.com',role:'Admin'},{name:'Jane Smith',email:'jane@laracorekit.com',role:'User'}];
            const blob = new Blob([JSON.stringify(data, null, 2)], { type: 'application/json' });
            const url = URL.createObjectURL(blob);
            const a = document.createElement('a');
            a.href = url; a.download = 'export.json'; a.click(); URL.revokeObjectURL(url);
        " class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition flex items-center gap-2">
            Export to JSON
        </button>
    </div>
</div>
@endsection

@section('code')
<button @click="
    const data = [['Name', 'Email', 'Role'], ['John Doe', 'john@laracorekit.com', 'Admin']];
    const csv = data.map(row => row.join(',')).join('\n');
    const blob = new Blob([csv], { type: 'text/csv' });
    const url = URL.createObjectURL(blob);
    const a = document.createElement('a');
    a.href = url;
    a.download = 'export.csv';
    a.click();
" class="px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700">
    Export to CSV
</button>
@endsection
