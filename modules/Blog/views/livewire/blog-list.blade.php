<div class="min-h-screen bg-gray-50 dark:bg-gray-900 py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold text-gray-900 dark:text-white mb-4">
                {{ __('Blog') }}
            </h1>
            <p class="text-lg text-gray-600 dark:text-gray-400">
                {{ __('Discover our latest articles and insights') }}
            </p>
        </div>

        <!-- Filters -->
        <div class="mb-8 flex flex-col md:flex-row gap-4">
            <div class="flex-1">
                <input 
                    type="text" 
                    wire:model.live.debounce.300ms="search" 
                    placeholder="{{ __('Search articles...') }}"
                    class="w-full px-4 py-2 border border-gray-300 dark:border-gray-700 rounded-lg bg-white dark:bg-gray-800 text-gray-900 dark:text-white focus:ring-2 focus:ring-blue-500"
                >
            </div>
            
            @if($categories->isNotEmpty())
            <div class="md:w-64">
                <select 
                    wire:model.live="category"
                    class="w-full px-4 py-2 border border-gray-300 dark:border-gray-700 rounded-lg bg-white dark:bg-gray-800 text-gray-900 dark:text-white focus:ring-2 focus:ring-blue-500"
                >
                    <option value="">{{ __('All Categories') }}</option>
                    @foreach($categories as $cat)
                        <option value="{{ $cat }}">{{ $cat }}</option>
                    @endforeach
                </select>
            </div>
            @endif
        </div>

        <!-- Blog Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
            @forelse($blogs as $blog)
                <article class="bg-white dark:bg-gray-800 rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300">
                    <!-- Featured Image Placeholder -->
                    <div class="w-full h-48 bg-gradient-to-br from-blue-500 to-purple-600 flex items-center justify-center">
                        <svg class="w-16 h-16 text-white opacity-50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                    </div>

                    <div class="p-6">
                        <!-- Category Badge -->
                        @if($blog->category)
                            <span class="inline-block px-3 py-1 text-xs font-semibold text-blue-600 dark:text-blue-400 bg-blue-100 dark:bg-blue-900 rounded-full mb-3">
                                {{ $blog->category[$locale] ?? $blog->category['en'] ?? '' }}
                            </span>
                        @endif

                        <!-- Title -->
                        <h2 class="text-xl font-bold text-gray-900 dark:text-white mb-3 line-clamp-2">
                            <a href="{{ route('blog.show', $blog->slug) }}" wire:navigate class="hover:text-blue-600 dark:hover:text-blue-400">
                                {{ $blog->title[$locale] ?? $blog->title['en'] ?? 'Untitled' }}
                            </a>
                        </h2>

                        <!-- Excerpt -->
                        <p class="text-gray-600 dark:text-gray-400 mb-4 line-clamp-3">
                            {{ $blog->excerpt[$locale] ?? $blog->excerpt['en'] ?? '' }}
                        </p>

                        <!-- Meta -->
                        <div class="flex items-center justify-between text-sm text-gray-500 dark:text-gray-500">
                            <div class="flex items-center space-x-2">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                                <span>{{ $blog->author->name ?? 'Admin' }}</span>
                            </div>
                            <time datetime="{{ $blog->published_at?->toDateString() }}">
                                {{ $blog->published_at?->format('M d, Y') }}
                            </time>
                        </div>
                    </div>
                </article>
            @empty
                <div class="col-span-full text-center py-12">
                    <svg class="w-16 h-16 mx-auto text-gray-400 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <p class="text-gray-600 dark:text-gray-400 text-lg">{{ __('No articles found') }}</p>
                </div>
            @endforelse
        </div>

        <!-- Pagination -->
        <div class="mt-8">
            {{ $blogs->links() }}
        </div>
    </div>
</div>
