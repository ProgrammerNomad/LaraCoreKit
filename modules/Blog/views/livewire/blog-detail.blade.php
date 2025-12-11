<div class="min-h-screen bg-gray-50 dark:bg-gray-900 py-12">
    <article class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Back Button -->
        <div class="mb-8">
            <a href="{{ route('blog.index') }}" wire:navigate class="inline-flex items-center text-blue-600 dark:text-blue-400 hover:underline">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                </svg>
                {{ __('Back to Blog') }}
            </a>
        </div>

        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-8">
            <!-- Category Badge -->
            @if($blog->category)
                <span class="inline-block px-3 py-1 text-xs font-semibold text-blue-600 dark:text-blue-400 bg-blue-100 dark:bg-blue-900 rounded-full mb-4">
                    {{ $blog->category[$locale] ?? $blog->category['en'] ?? '' }}
                </span>
            @endif

            <!-- Title -->
            <h1 class="text-4xl font-bold text-gray-900 dark:text-white mb-4">
                {{ $blog->title[$locale] ?? $blog->title['en'] ?? 'Untitled' }}
            </h1>

            <!-- Meta Info -->
            <div class="flex items-center space-x-6 text-sm text-gray-600 dark:text-gray-400 mb-8 pb-8 border-b border-gray-200 dark:border-gray-700">
                <div class="flex items-center space-x-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                    </svg>
                    <span>{{ $blog->author->name ?? 'Admin' }}</span>
                </div>
                <div class="flex items-center space-x-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                    </svg>
                    <time datetime="{{ $blog->published_at?->toDateString() }}">
                        {{ $blog->published_at?->format('F d, Y') }}
                    </time>
                </div>
            </div>

            <!-- Content -->
            <div class="prose prose-lg dark:prose-invert max-w-none mb-12">
                {!! $blog->content[$locale] ?? $blog->content['en'] ?? '' !!}
            </div>

            <!-- Tags/Meta -->
            @if($blog->meta_keywords)
                <div class="mb-8 pb-8 border-b border-gray-200 dark:border-gray-700">
                    <div class="flex flex-wrap gap-2">
                        @foreach(explode(',', $blog->meta_keywords[$locale] ?? $blog->meta_keywords['en'] ?? '') as $tag)
                            @if(trim($tag))
                                <span class="px-3 py-1 text-xs bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-full">
                                    #{{ trim($tag) }}
                                </span>
                            @endif
                        @endforeach
                    </div>
                </div>
            @endif
        </div>

        <!-- Related Articles -->
        @if($relatedBlogs->isNotEmpty())
            <div class="mt-16">
                <h2 class="text-3xl font-bold text-gray-900 dark:text-white mb-8">{{ __('Related Articles') }}</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    @foreach($relatedBlogs as $relatedBlog)
                        <article class="bg-white dark:bg-gray-800 rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300">
                            <div class="p-4">
                                <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2 line-clamp-2">
                                    <a href="{{ route('blog.show', $relatedBlog->slug) }}" wire:navigate class="hover:text-blue-600 dark:hover:text-blue-400">
                                        {{ $relatedBlog->title[$locale] ?? $relatedBlog->title['en'] ?? 'Untitled' }}
                                    </a>
                                </h3>
                                <p class="text-sm text-gray-500 dark:text-gray-500">
                                    {{ $relatedBlog->published_at?->format('M d, Y') }}
                                </p>
                            </div>
                        </article>
                    @endforeach
                </div>
            </div>
        @endif
    </article>
</div>
