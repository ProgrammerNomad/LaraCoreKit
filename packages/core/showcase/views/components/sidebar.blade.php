{{-- Sidebar Navigation Component --}}
@php
    $categories = config('showcase.components.categories', []);
    $currentRoute = request()->route()->getName();
    $currentCategory = null;
    $currentComponent = null;
    
    // Determine current category and component from route
    if (str_contains($currentRoute, 'component.')) {
        $parts = explode('.', str_replace('showcase.component.', '', $currentRoute));
        if (count($parts) >= 2) {
            $currentCategory = $parts[0];
            $currentComponent = $parts[1];
        }
    }
@endphp

<nav class="space-y-1">
    <a href="{{ route('showcase.index') }}" class="flex items-center px-3 py-2 text-sm font-medium rounded-lg {{ request()->routeIs('showcase.index') ? 'bg-blue-50 dark:bg-blue-900/30 text-blue-600 dark:text-blue-400' : 'text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700' }}">
        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
        </svg>
        Overview
    </a>
    
    @foreach($categories as $categorySlug => $category)
    <div>
        <button @click="toggleSection('{{ $categorySlug }}')" 
                class="w-full flex items-center justify-between px-3 py-2 text-sm font-medium rounded-lg {{ $currentCategory === $categorySlug ? 'bg-blue-50 dark:bg-blue-900/30 text-blue-600 dark:text-blue-400' : 'text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700' }}">
            <div class="flex items-center">
                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    {!! $category['icon'] !!}
                </svg>
                {{ $category['name'] }}
            </div>
            <svg class="w-4 h-4 transition-transform" 
                 :class="openSections['{{ $categorySlug }}'] ? 'rotate-90' : ''" 
                 fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
            </svg>
        </button>
        
        @if(isset($category['components']))
        <div x-show="openSections['{{ $categorySlug }}']" x-cloak class="ml-8 mt-1 space-y-1">
            @foreach($category['components'] as $componentSlug => $component)
            <a href="{{ route('showcase.component.' . $categorySlug . '.' . $componentSlug) }}" 
               class="block px-3 py-1.5 text-xs {{ $currentCategory === $categorySlug && $currentComponent === $componentSlug ? 'text-blue-600 dark:text-blue-400 font-medium' : 'text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white' }}">
                {{ $component['title'] }}
            </a>
            @endforeach
        </div>
        @endif
    </div>
    @endforeach
</nav>
