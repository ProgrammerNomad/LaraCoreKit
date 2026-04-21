@php
    $codeHtml = $code;
@endphp
<style>
    pre[class*="language-"], code[class*="language-"] {
        white-space: pre-wrap !important;
        word-break: break-word !important;
        overflow-x: hidden !important;
    }
</style>
<div class="bg-white dark:bg-gray-800 rounded-lg shadow-sm border border-gray-200 dark:border-gray-700 overflow-hidden"
     wire:ignore
     x-data="{ codeVisible: false, copied: false }">

    {{-- Toggle Bar --}}
    <div @click="codeVisible = !codeVisible; if (codeVisible && window.Prism && $refs.codeEl) { $nextTick(() => { window.Prism.highlightElement($refs.codeEl) }) }"
            class="w-full flex items-center justify-between px-6 py-4 text-left bg-gray-50 dark:bg-gray-900 hover:bg-gray-100 dark:hover:bg-gray-800 transition-colors cursor-pointer">
        <div class="flex items-center gap-2">
            <svg class="w-5 h-5 text-gray-600 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
            </svg>
            <span class="text-lg font-semibold text-gray-900 dark:text-white">View Code</span>
        </div>
        <div class="flex items-center gap-3">
            {{-- Copy Button --}}
            <button @click.stop="navigator.clipboard.writeText($refs.codeEl ? $refs.codeEl.textContent : '').then(() => { copied = true; setTimeout(() => copied = false, 2000) })"
                    type="button"
                    class="px-3 py-1.5 text-sm rounded-md transition-colors flex items-center gap-1.5"
                    :class="copied
                        ? 'bg-green-600 text-white'
                        : 'bg-blue-600 hover:bg-blue-700 text-white'">
                <svg x-show="!copied" class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                </svg>
                <svg x-show="copied" class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
                <span x-text="copied ? 'Copied!' : 'Copy'"></span>
            </button>
            {{-- Chevron --}}
            <svg class="w-5 h-5 text-gray-600 dark:text-gray-400 transition-transform duration-200"
                 :class="{ 'rotate-180': codeVisible }"
                 fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
            </svg>
        </div>
    </div>

    {{-- Code Panel --}}
    <div x-show="codeVisible"
         x-cloak
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 -translate-y-1"
         x-transition:enter-end="opacity-100 translate-y-0"
         class="border-t border-gray-700">
        <pre class="!m-0 !rounded-none !whitespace-pre-wrap break-words text-sm max-h-[500px]" wire:ignore><code x-ref="codeEl" class="language-html !whitespace-pre-wrap">{{ $codeHtml }}</code></pre>
    </div>
</div>
