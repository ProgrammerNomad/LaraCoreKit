<div>
    <section class="relative overflow-hidden border-b border-slate-200 dark:border-slate-800">
        <div aria-hidden="true" class="pointer-events-none absolute -top-40 end-0 h-[600px] w-[600px] rounded-full bg-indigo-100/60 blur-3xl dark:bg-indigo-950/40"></div>
        <div class="relative mx-auto grid grid-cols-1 max-w-7xl items-center gap-14 px-5 py-20 sm:px-8 lg:grid-cols-2 lg:py-28">
            <div>
                <p class="mb-6 inline-flex items-center gap-2 rounded-full border border-indigo-200 bg-indigo-50 px-3 py-1.5 text-xs font-semibold text-indigo-700 dark:border-indigo-900 dark:bg-indigo-950 dark:text-indigo-300"><span class="h-1.5 w-1.5 rounded-full bg-indigo-500"></span> {{ __('Open source. Public frontend + admin.') }}</p>
                <h1 class="max-w-xl text-5xl font-bold leading-[1.08] tracking-tight sm:text-6xl">{{ __('Your next Laravel app.') }} <span class="text-indigo-600 dark:text-indigo-400">{{ __('Already connected.') }}</span></h1>
                <p class="mt-7 max-w-lg text-lg leading-8 text-slate-600 dark:text-slate-400">{{ __('Start with a public website and an admin workspace that work together. Authentication, roles, multilingual content, settings, and media, organized into reusable modules.') }}</p>
                <div class="mt-9 flex flex-wrap gap-3"><a href="/docs/installation" class="rounded-xl bg-indigo-600 px-6 py-3.5 text-sm font-semibold text-white transition hover:bg-indigo-700">{{ __('Install with Composer') }} <span aria-hidden="true">↗</span></a><a href="https://github.com/ProgrammerNomad/LaraCoreKit" class="rounded-xl border border-slate-300 px-6 py-3.5 text-sm font-semibold transition hover:bg-slate-50 dark:border-slate-700 dark:hover:bg-slate-900">{{ __('Explore the source') }}</a></div>
                <p class="mt-6 text-xs text-slate-500">MIT licensed · PHP 8.3+ · Laravel 13 · Filament 5 · Livewire 4</p>
            </div>
            <div class="relative">
                <div class="overflow-hidden rounded-2xl border border-slate-700 bg-slate-950 text-slate-100 shadow-2xl">
                    <div class="flex items-center gap-2 border-b border-slate-800 px-5 py-4"><span class="h-2.5 w-2.5 rounded-full bg-rose-400"></span><span class="h-2.5 w-2.5 rounded-full bg-amber-300"></span><span class="h-2.5 w-2.5 rounded-full bg-emerald-400"></span><span class="ms-4 font-mono text-xs text-slate-400">your-app / architecture</span></div>
                    <div class="space-y-7 p-7 font-mono text-sm leading-7 sm:p-9">
                        <div><p class="text-slate-500">// Your application, your decisions</p><p><span class="text-violet-300">app/</span> <span class="text-slate-400">your business logic</span></p><p><span class="text-violet-300">resources/views/</span> <span class="text-slate-400">your experience</span></p></div>
                        <div><p class="text-slate-500">// Reusable Composer package</p><p class="text-emerald-300">programmernomad/laracorekit</p><p class="text-slate-300">├── Public frontend & authentication</p><p class="text-slate-300">├── Filament admin & permissions</p><p class="text-slate-300">└── Blog, settings & media</p></div>
                        <div class="rounded-lg border border-slate-800 bg-slate-900 p-4 text-xs text-slate-300">{{ __('Editable frontend and components included. Demo reset controls stay separate.') }}</div>
                    </div>
                </div>
                <p class="mt-4 text-center text-xs text-slate-500">{{ __('One foundation. Two sides of your application.') }}</p>
            </div>
        </div>
    </section>

    <section class="mx-auto max-w-7xl px-5 py-20 sm:px-8">
        <div class="mb-10 flex flex-wrap items-end justify-between gap-5"><div><p class="text-xs font-bold uppercase tracking-widest text-indigo-600 dark:text-indigo-400">{{ __('Inside the kit') }}</p><h2 class="mt-3 text-3xl font-bold tracking-tight sm:text-4xl">{{ __('Less wiring. More building.') }}</h2></div><a href="/docs/core/architecture" class="text-sm font-semibold text-indigo-600 dark:text-indigo-400">{{ __('Understand the architecture') }} →</a></div>
        <div class="grid gap-5 md:grid-cols-3">
            @foreach([
                ['01', 'A public experience', 'Livewire authentication, an account dashboard, public blog pages, language switching, and right-to-left layouts.', '/blog', 'Explore the public site'],
                ['02', 'An admin workspace', 'Filament resources for users, roles, permissions, blog content, and site settings. Access is controlled by permissions.', '/admin', 'Open the admin demo'],
                ['03', 'A modular foundation', 'Package-owned providers, routes, migrations, and views. Override views in your application and keep reusable code in Composer.', '/docs/core/modules-system', 'See how modules work'],
            ] as [$number, $heading, $copy, $href, $label])
                <article class="rounded-2xl border border-slate-200 p-7 dark:border-slate-800"><span class="font-mono text-xs text-slate-400">{{ $number }}</span><h3 class="mt-7 text-xl font-semibold">{{ __($heading) }}</h3><p class="mt-3 text-sm leading-7 text-slate-600 dark:text-slate-400">{{ __($copy) }}</p><a href="{{ $href }}" class="mt-6 inline-block text-sm font-semibold text-indigo-600 dark:text-indigo-400">{{ __($label) }} →</a></article>
            @endforeach
        </div>
    </section>

    <section id="quick-start" class="border-y border-slate-200 bg-slate-50 dark:border-slate-800 dark:bg-slate-900/40">
        <div class="mx-auto grid grid-cols-1 max-w-7xl gap-10 px-5 py-20 sm:px-8 lg:grid-cols-2">
            <div><p class="text-xs font-bold uppercase tracking-widest text-indigo-600 dark:text-indigo-400">{{ __('Install with Composer') }}</p><h2 class="mt-3 text-3xl font-bold tracking-tight sm:text-4xl">{{ __('Start with the package.') }}</h2><p class="mt-5 max-w-md text-base leading-8 text-slate-600 dark:text-slate-400">{{ __('Install the public frontend and admin bundle from Packagist in a fresh Laravel 13 application. The starter homepage and component showcase are included. Clone the main repository for the project marketing site, documentation viewer or contributions.') }}</p><a href="/docs/installation" class="mt-6 inline-block text-sm font-semibold text-indigo-600 dark:text-indigo-400">{{ __('Read the complete installation guide') }} →</a></div>
            <div class="min-w-0 space-y-4">
                <article class="rounded-xl border border-slate-200 bg-white p-6 dark:border-slate-700 dark:bg-slate-950"><div class="flex flex-wrap items-center justify-between gap-2"><h3 class="font-semibold"><a href="https://packagist.org/packages/programmernomad/laracorekit" class="hover:underline">{{ __('Composer package') }}</a></h3><span class="rounded-full bg-emerald-50 px-3 py-1 text-xs font-medium text-emerald-800 dark:bg-emerald-950 dark:text-emerald-300">{{ __('Available on Packagist') }}</span></div><pre class="mt-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-xs leading-6 text-emerald-300"><code>composer create-project laravel/laravel my-app &quot;~13.0&quot;
cd my-app
composer require programmernomad/laracorekit:&quot;~0.2.0&quot;
php artisan laracorekit:install
# Configure .env and your database before continuing
php artisan migrate
php artisan laracorekit:admin
php artisan storage:link
php artisan serve</code></pre><p class="mt-3 text-xs leading-6 text-slate-500">{{ __('Requires PHP 8.3+ and Composer 2. Creates Laravel first, then adds the core. Open / for your editable starter homepage, /ui-showcase for components, and /admin for administration. Custom homepage routes and edited views are preserved. Sample accounts and reset controls are not installed. No npm build is needed for default package views.') }}</p></article>
                <article class="rounded-xl border border-slate-200 bg-white p-6 dark:border-slate-700 dark:bg-slate-950"><h3 class="font-semibold">{{ __('GitHub demo and development host') }}</h3><pre class="mt-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-xs leading-6 text-slate-200"><code>git clone https://github.com/ProgrammerNomad/LaraCoreKit.git
cd LaraCoreKit
php -r &quot;copy('.env.example', '.env');&quot;
composer install
php artisan key:generate
# Configure .env; for the default SQLite database:
php -r &quot;file_exists('database/database.sqlite') || touch('database/database.sqlite');&quot;
php artisan migrate --seed
php artisan laracorekit:admin
php artisan storage:link
npm ci
npm run build:core
npm run build
php artisan serve</code></pre><p class="mt-3 text-xs leading-6 text-slate-500">{{ __('Laravel is already included in this checkout. Requires PHP 8.3+, Composer 2, Git and Node 22.12+. Open / for the website and /admin for administration. Normal seeding creates roles only; sample demo data is a separate, opt-in setup. These commands are for a new local checkout; follow the guide for production deployment.') }}</p></article>
            </div>
        </div>
    </section>

    <section class="mx-auto max-w-7xl px-5 py-20 sm:px-8">
        <p class="text-xs font-bold uppercase tracking-widest text-indigo-600 dark:text-indigo-400">{{ __('See it working') }}</p><h2 class="mt-3 text-3xl font-bold tracking-tight sm:text-4xl">{{ __('Explore before you install.') }}</h2>
        <div class="mt-10 grid gap-6 md:grid-cols-2">
            @foreach([['admin-dashboard.png', 'Administration', 'Manage your content and application access.', '/admin'], ['ui-showcase.png', 'Component showcase', 'Explore interface examples for your next project.', '/ui-showcase']] as [$image, $heading, $copy, $href])
                <a href="{{ $href }}" class="group overflow-hidden rounded-2xl border border-slate-200 dark:border-slate-800">
                    @if(file_exists(public_path('images/screenshots/'.$image)))<img src="{{ asset('images/screenshots/'.$image) }}" alt="{{ __($heading) }} in the LaraCoreKit demo" width="1440" height="1000" loading="lazy" decoding="async" class="aspect-[8/5] w-full border-b border-slate-200 object-cover object-top dark:border-slate-800">@endif
                    <div class="p-6"><h3 class="text-lg font-semibold group-hover:text-indigo-600">{{ __($heading) }} ↗</h3><p class="mt-2 text-sm text-slate-600 dark:text-slate-400">{{ __($copy) }}</p></div>
                </a>
            @endforeach
        </div>
    </section>

    <section class="mx-auto max-w-7xl px-5 pb-20 sm:px-8"><div class="grid gap-10 rounded-2xl bg-indigo-600 p-8 text-white sm:p-12 lg:grid-cols-2"><div><h2 class="text-3xl font-bold tracking-tight">{{ __('Built in the open. Better together.') }}</h2><p class="mt-4 max-w-md leading-7 text-indigo-100">{{ __('Read the code, report a problem, improve a translation, or contribute a module. No mandatory registration or installation tracking.') }}</p></div><div class="flex flex-wrap items-center gap-4 lg:justify-end"><a href="https://github.com/ProgrammerNomad/LaraCoreKit" class="rounded-xl bg-white px-6 py-3 text-sm font-semibold text-indigo-700">{{ __('Contribute on GitHub') }}</a><a href="/docs/faq" class="rounded-xl border border-indigo-300 px-6 py-3 text-sm font-semibold">{{ __('Read the FAQ') }}</a></div></div></section>
</div>
