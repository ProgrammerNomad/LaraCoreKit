@extends('showcase::components.component-layout')

@section('demo')
<div x-data="{ saving: false, saved: false }" class="max-w-3xl mx-auto bg-white dark:bg-gray-800 rounded-lg shadow p-8">
    <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">Profile Settings</h2>
    
    <form @submit.prevent="saving = true; setTimeout(() => { saving = false; saved = true; setTimeout(() => saved = false, 3000); }, 1500)">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
            <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">First Name</label>
                <input type="text" value="John" class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg dark:bg-gray-700 dark:text-white">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Last Name</label>
                <input type="text" value="Doe" class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg dark:bg-gray-700 dark:text-white">
            </div>
        </div>
        
        <div class="mb-6">
            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Email</label>
            <input type="email" value="john@laracorekit.com" class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg dark:bg-gray-700 dark:text-white">
        </div>
        
        <div class="mb-6">
            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Bio</label>
            <textarea rows="4" class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg dark:bg-gray-700 dark:text-white" placeholder="Tell us about yourself..."></textarea>
        </div>
        
        <div class="flex items-center gap-4">
            <button type="submit" :disabled="saving" class="px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 disabled:opacity-50 transition">
                <span x-show="!saving">Save Changes</span>
                <span x-show="saving" style="display:none">Saving...</span>
            </button>
            <span x-show="saved" x-transition class="text-green-600 dark:text-green-400 text-sm" style="display:none">Changes saved successfully!</span>
        </div>
    </form>
</div>
@endsection

@section('code')
<div x-data="{ saving: false, saved: false }" class="max-w-3xl mx-auto bg-white dark:bg-gray-800 rounded-lg shadow p-8">
    <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">Profile Settings</h2>
    <form @submit.prevent="saving = true; setTimeout(() => { saving = false; saved = true; setTimeout(() => saved = false, 3000); }, 1500)">
        <div class="grid grid-cols-2 gap-6 mb-6">
            <div><label class="block text-sm font-medium mb-2">First Name</label><input type="text" value="John" class="w-full px-4 py-2 border rounded-lg dark:bg-gray-700"></div>
            <div><label class="block text-sm font-medium mb-2">Last Name</label><input type="text" value="Doe" class="w-full px-4 py-2 border rounded-lg dark:bg-gray-700"></div>
        </div>
        <div class="flex items-center gap-4">
            <button type="submit" :disabled="saving" class="px-6 py-2 bg-blue-600 text-white rounded-lg disabled:opacity-50">
                <span x-show="!saving">Save Changes</span>
                <span x-show="saving">Saving...</span>
            </button>
            <span x-show="saved" class="text-green-600 text-sm">Changes saved!</span>
        </div>
    </form>
</div>
@endsection
