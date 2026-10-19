@extends('showcase::components.component-layout')

@section('demo')
<div x-data="{ avatar: null }">
    <div class="flex items-center gap-6">
        <div class="relative">
            <div class="w-32 h-32 rounded-full bg-gray-200 dark:bg-gray-700 flex items-center justify-center overflow-hidden border-4 border-white dark:border-gray-800 shadow-lg">
                <img x-show="avatar" :src="avatar" class="w-full h-full object-cover" style="display:none">
                <svg x-show="!avatar" class="w-16 h-16 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"/>
                </svg>
            </div>
            <label class="absolute bottom-0 right-0 bg-blue-600 text-white p-2 rounded-full cursor-pointer hover:bg-blue-700 transition shadow-lg">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"/>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"/>
                </svg>
                <input type="file" class="hidden" accept="image/*" @change="
                    const file = $event.target.files[0];
                    if (file) { const reader = new FileReader(); reader.onload = (e) => avatar = e.target.result; reader.readAsDataURL(file); }
                ">
            </label>
        </div>
        <div>
            <h4 class="font-semibold text-gray-900 dark:text-white">Profile Picture</h4>
            <p class="text-sm text-gray-500 dark:text-gray-400">JPG, PNG or GIF. Max 2MB.</p>
            <p class="text-xs text-gray-400 dark:text-gray-500 mt-1">Click the camera icon to upload</p>
        </div>
    </div>
</div>
@endsection

@section('code')
<div x-data="{ avatar: null }">
    <div class="relative w-32 h-32 rounded-full bg-gray-200 dark:bg-gray-700 overflow-hidden">
        <img x-show="avatar" :src="avatar" class="w-full h-full object-cover">
        <label class="absolute bottom-0 right-0 bg-blue-600 text-white p-2 rounded-full cursor-pointer">
            <input type="file" class="hidden" accept="image/*" @change="
                const file = $event.target.files[0];
                if (file) { const reader = new FileReader(); reader.onload = (e) => avatar = e.target.result; reader.readAsDataURL(file); }
            ">
        </label>
    </div>
</div>
@endsection
