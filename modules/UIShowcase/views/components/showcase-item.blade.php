@php
    use Illuminate\Support\Str;
@endphp

@props(['title', 'description' => null, 'code', 'id' => null])

<!-- Reusable Component Showcase -->
<div id="{{ $id ?? Str::slug($title) }}" x-data="{ 
    copied: false,
    copyCode(code) {
        navigator.clipboard.writeText(code);
        this.copied = true;
        setTimeout(() => this.copied = false, 2000);
    }
}" class="bg-white dark:bg-gray-800 rounded-lg border border-gray-200 dark:border-gray-700 overflow-hidden mb-8 scroll-mt-20">
    <!-- Component Header -->
    <div class="px-6 py-4 border-b border-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-800/50">
        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">{{ $title }}</h3>
        @if($description)
            <p class="text-sm text-gray-600 dark:text-gray-400 mt-1">{{ $description }}</p>
        @endif
    </div>

    <!-- Live Preview -->
    <div class="p-6 bg-white dark:bg-gray-900">
        <div class="space-y-4">
            {!! $preview ?? $slot ?? '' !!}
        </div>
    </div>

    <!-- Code Section -->
    <div class="border-t border-gray-200 dark:border-gray-700">
        <div class="flex items-center justify-between px-6 py-3 bg-gray-50 dark:bg-gray-800/50">
            <span class="text-sm font-medium text-gray-700 dark:text-gray-300">Code</span>
            <button 
                @click="copyCode(`{{ addslashes($code) }}`)"
                class="flex items-center space-x-2 px-3 py-1.5 text-sm font-medium rounded-lg transition"
                :class="copied ? 'bg-green-100 dark:bg-green-900/30 text-green-600 dark:text-green-400' : 'bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 hover:bg-gray-200 dark:hover:bg-gray-600'"
            >
                <svg x-show="!copied" class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                </svg>
                <svg x-show="copied" class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                </svg>
                <span x-text="copied ? 'Copied!' : 'Copy'"></span>
            </button>
        </div>
        <div class="p-6 bg-gray-900 overflow-x-auto max-w-full">
            <pre class="text-sm text-gray-100 whitespace-pre-wrap break-words"><code>{{ $code }}</code></pre>
        </div>
    </div>
</div>
