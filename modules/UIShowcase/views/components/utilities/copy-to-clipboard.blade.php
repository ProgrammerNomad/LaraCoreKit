@extends('showcase::components.component-layout')

@section('demo')
<div class="space-y-4">
    <div x-data="{ copied: false }">
        <div class="flex items-center gap-2">
            <input type="text" value="https://github.com/ProgrammerNomad/LaraCoreKit" readonly class="flex-1 px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-lg bg-gray-50 dark:bg-gray-700 text-gray-900 dark:text-white text-sm">
            <button @click="navigator.clipboard.writeText($el.previousElementSibling.value); copied = true; setTimeout(() => copied = false, 2000);" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition flex items-center gap-2 text-sm">
                <svg x-show="!copied" class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path></svg>
                <svg x-show="copied" x-cloak class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                <span x-show="!copied">Copy</span>
                <span x-show="copied" x-cloak>Copied!</span>
            </button>
        </div>
    </div>

    <div x-data="{ copied: false }" class="relative">
        <pre class="bg-gray-900 text-gray-100 p-4 rounded-lg overflow-x-auto text-sm"><code>npm install laravel-corekit
php artisan migrate
npm run dev</code></pre>
        <button @click="navigator.clipboard.writeText($el.previousElementSibling.textContent); copied = true; setTimeout(() => copied = false, 2000);" class="absolute top-2 right-2 px-3 py-1.5 bg-gray-700 hover:bg-gray-600 text-white text-sm rounded transition">
            <span x-show="!copied">Copy</span>
            <span x-show="copied" x-cloak>✓ Copied</span>
        </button>
    </div>
</div>
@endsection

@section('code')
<div x-data="{ copied: false }">
    <div class="flex items-center gap-2">
        <input type="text" value="https://www.laracorekit.com/share/abc123" readonly class="flex-1 px-3 py-2 border rounded-lg">
        <button @click="
            navigator.clipboard.writeText($el.previousElementSibling.value);
            copied = true;
            setTimeout(() => copied = false, 2000);
        " class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">
            <span x-show="!copied">Copy</span>
            <span x-show="copied" x-cloak>Copied!</span>
        </button>
    </div>
</div>
@endsection
