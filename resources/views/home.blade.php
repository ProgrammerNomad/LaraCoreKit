@component('core::layouts.app')
<section class="border-b border-gray-200 bg-gray-50 dark:border-gray-800 dark:bg-gray-900">
    <div class="mx-auto grid max-w-7xl gap-12 px-5 py-20 sm:px-8 lg:grid-cols-2 lg:py-28">
        <div>
            <p class="mb-6 text-sm font-semibold text-red-600">{{ __('Your next idea starts here.') }}</p>
            <h1 class="text-5xl font-bold leading-tight tracking-tight sm:text-6xl">{{ __('A beautiful start.') }}<br><span class="text-red-600">{{ __('Make it yours.') }}</span></h1>
            <p class="mt-6 max-w-lg text-lg leading-8 text-gray-600 dark:text-gray-300">{{ __('Your public website and administration, connected. Build your next product with reusable components, multilingual pages and a foundation you control.') }}</p>
            <div class="mt-8 flex flex-wrap gap-3">
                @if(Route::has('showcase.index'))<a href="{{ route('showcase.index') }}" class="rounded-xl bg-red-600 px-6 py-3 font-semibold text-white hover:bg-red-700">{{ __('Explore components') }} →</a>@endif
                @if(Route::has('blog.index'))<a href="{{ route('blog.index') }}" class="rounded-xl border border-gray-300 px-6 py-3 font-semibold dark:border-gray-600">{{ __('Read our blog') }}</a>@endif
            </div>
        </div>
        <div class="rounded-2xl border border-gray-200 bg-white p-7 shadow-xl dark:border-gray-700 dark:bg-gray-950 sm:p-10">
            <div class="mb-8 flex items-center justify-between"><span class="font-semibold">{{ config('app.name') }}</span><span class="rounded-full bg-green-50 px-3 py-1 text-xs font-medium text-green-700">{{ __('Ready to build') }}</span></div>
            <div class="space-y-5">
                @foreach(['Public website' => 'An editable homepage, blog and authentication.', 'Your workspace' => 'Administration, roles, content and settings.', 'Your design system' => 'Responsive examples, dark mode and language switching.'] as $heading => $description)
                    <div class="rounded-xl bg-gray-50 p-5 dark:bg-gray-900"><h2 class="font-semibold">{{ __($heading) }}</h2><p class="mt-2 text-sm leading-6 text-gray-600 dark:text-gray-400">{{ __($description) }}</p></div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<section class="mx-auto max-w-7xl px-5 py-20 sm:px-8">
    <h2 class="text-3xl font-bold">{{ __('Everything starts with a strong foundation.') }}</h2>
    <div class="mt-10 grid gap-6 md:grid-cols-3">
        @foreach(['Made for your users' => 'A consistent experience from your homepage to account management.', 'Built for your team' => 'Manage your content and access from one administration workspace.', 'Ready for your ideas' => 'Start with the included examples and create an experience of your own.'] as $heading => $description)
            <article class="rounded-2xl border border-gray-200 p-7 dark:border-gray-800"><h3 class="text-xl font-semibold">{{ __($heading) }}</h3><p class="mt-3 leading-7 text-gray-600 dark:text-gray-400">{{ __($description) }}</p></article>
        @endforeach
    </div>
</section>
@endcomponent
