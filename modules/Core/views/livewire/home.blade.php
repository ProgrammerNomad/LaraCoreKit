<div>
        <!-- Hero Section -->
        <div class="bg-gradient-to-br from-blue-600 via-purple-600 to-pink-600 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24">
            <div class="text-center">
                <h1 class="text-5xl md:text-6xl font-bold mb-6">
                    {{ __('LaraCoreKit') }}
                </h1>
                <p class="text-xl md:text-2xl mb-8 text-blue-100">
                    {{ __('Build Production-Ready Laravel Apps in Minutes with Modular Architecture') }}
                </p>
                <p class="text-lg mb-10 text-blue-50 max-w-3xl mx-auto">
                    {{ __('Production-ready Laravel 13 starter with Filament Admin, Livewire, Multilingual Support (EN/HI/AR), Role-Based Permissions, and Modern UI') }}
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center flex-wrap">
                    <a href="#quick-start" class="inline-flex items-center px-8 py-3 bg-white text-blue-600 font-semibold rounded-lg hover:bg-blue-50 transition-colors">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                        <span>{{ __('Get Started') }}</span>
                    </a>
                    <a href="/ui-showcase" wire:navigate class="inline-flex items-center px-8 py-3 bg-purple-700 text-white font-semibold rounded-lg hover:bg-purple-800 transition-colors">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h4a1 1 0 011 1v4a1 1 0 01-1 1H5a1 1 0 01-1-1V5zm10 0a1 1 0 011-1h4a1 1 0 011 1v4a1 1 0 01-1 1h-4a1 1 0 01-1-1V5zM4 15a1 1 0 011-1h4a1 1 0 011 1v4a1 1 0 01-1 1H5a1 1 0 01-1-1v-4zm10 0a1 1 0 011-1h4a1 1 0 011 1v4a1 1 0 01-1 1h-4a1 1 0 01-1-1v-4z"></path>
                        </svg>
                        <span>{{ __('Live Demo') }}</span>
                    </a>
                    <a href="https://github.com/ProgrammerNomad/LaraCoreKit" target="_blank" rel="noopener" class="inline-flex items-center px-8 py-3 bg-blue-800 text-white font-semibold rounded-lg hover:bg-blue-900 transition-colors">
                        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"></path></svg>
                        <span>GitHub</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Tech Stack Strip -->
    <div class="bg-gray-100 dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-5">
            <div class="flex flex-wrap items-center justify-center gap-4 text-sm">
                <span class="font-semibold text-gray-700 dark:text-gray-300 mr-2">{{ __('Built with') }}:</span>

                {{-- Laravel --}}
                <span class="inline-flex items-center gap-2 px-3 py-1.5 bg-red-50 dark:bg-red-900/30 text-red-700 dark:text-red-400 rounded-full font-medium border border-red-200 dark:border-red-800">
                    <img src="https://cdn.simpleicons.org/laravel/FF2D20" class="w-4 h-4" alt="Laravel" loading="lazy">
                    Laravel 13
                </span>

                {{-- Livewire --}}
                <span class="inline-flex items-center gap-2 px-3 py-1.5 bg-purple-50 dark:bg-purple-900/30 text-purple-700 dark:text-purple-400 rounded-full font-medium border border-purple-200 dark:border-purple-800">
                    <img src="https://cdn.simpleicons.org/livewire/4E56A6" class="w-4 h-4" alt="Livewire" loading="lazy">
                    Livewire 4
                </span>

                {{-- Filament (no simpleicon â€” use custom SVG) --}}
                <span class="inline-flex items-center gap-2 px-3 py-1.5 bg-amber-50 dark:bg-amber-900/30 text-amber-700 dark:text-amber-400 rounded-full font-medium border border-amber-200 dark:border-amber-800">
                    <svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M12 2C6.477 2 2 6.477 2 12s4.477 10 10 10 10-4.477 10-10S17.523 2 12 2zm0 3a1 1 0 110 2 1 1 0 010-2zm-1 4h2v8h-2V9z"/>
                    </svg>
                    Filament 5
                </span>

                {{-- TailwindCSS --}}
                <span class="inline-flex items-center gap-2 px-3 py-1.5 bg-cyan-50 dark:bg-cyan-900/30 text-cyan-700 dark:text-cyan-400 rounded-full font-medium border border-cyan-200 dark:border-cyan-800">
                    <img src="https://cdn.simpleicons.org/tailwindcss/06B6D4" class="w-4 h-4" alt="TailwindCSS" loading="lazy">
                    TailwindCSS 4
                </span>

                {{-- Alpine.js --}}
                <span class="inline-flex items-center gap-2 px-3 py-1.5 bg-slate-100 dark:bg-slate-700/60 text-slate-700 dark:text-slate-300 rounded-full font-medium border border-slate-200 dark:border-slate-600">
                    <img src="https://cdn.simpleicons.org/alpinedotjs/77C1D2" class="w-4 h-4" alt="Alpine.js" loading="lazy">
                    Alpine.js 3
                </span>

                {{-- PHP --}}
                <span class="inline-flex items-center gap-2 px-3 py-1.5 bg-indigo-50 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-400 rounded-full font-medium border border-indigo-200 dark:border-indigo-800">
                    <img src="https://cdn.simpleicons.org/php/777BB4" class="w-4 h-4" alt="PHP" loading="lazy">
                    PHP 8.3
                </span>

                {{-- Open Source badge --}}
                <span class="inline-flex items-center gap-2 px-3 py-1.5 bg-emerald-50 dark:bg-emerald-900/30 text-emerald-700 dark:text-emerald-400 rounded-full font-medium border border-emerald-200 dark:border-emerald-800">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2C6.477 2 2 6.477 2 12c0 4.418 2.865 8.166 6.839 9.489.5.092.682-.217.682-.482 0-.237-.008-.866-.013-1.7-2.782.603-3.369-1.342-3.369-1.342-.454-1.155-1.11-1.462-1.11-1.462-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.919.678 1.852 0 1.336-.012 2.415-.012 2.743 0 .267.18.578.688.48C19.138 20.161 22 16.418 22 12c0-5.523-4.477-10-10-10z"/>
                    </svg>
                    {{ __('Open Source & Free') }}
                </span>
            </div>
        </div>
    </div>

    <!-- Social Proof Section -->
    <div class="py-8 bg-white dark:bg-gray-900 border-b border-gray-200 dark:border-gray-800">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-wrap items-center justify-center gap-8 text-center">
                <div class="flex items-center gap-2">
                    <svg class="w-6 h-6 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                    </svg>
                    <div class="text-left">
                        <div class="text-2xl font-bold text-gray-900 dark:text-white">250+</div>
                        <div class="text-sm text-gray-500 dark:text-gray-400">{{ __('GitHub Stars') }}</div>
                    </div>
                </div>

                <div class="hidden sm:block w-px h-12 bg-gray-200 dark:bg-gray-700"></div>

                <div class="flex items-center gap-2">
                    <svg class="w-6 h-6 text-blue-500" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"></path>
                    </svg>
                    <div class="text-left">
                        <div class="text-2xl font-bold text-gray-900 dark:text-white">15+</div>
                        <div class="text-sm text-gray-500 dark:text-gray-400">{{ __('Contributors') }}</div>
                    </div>
                </div>

                <div class="hidden sm:block w-px h-12 bg-gray-200 dark:bg-gray-700"></div>

                <div class="flex items-center gap-2">
                    <svg class="w-6 h-6 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                    </svg>
                    <div class="text-left">
                        <div class="text-2xl font-bold text-gray-900 dark:text-white">{{ __('Production Ready') }}</div>
                        <div class="text-sm text-gray-500 dark:text-gray-400">{{ __('Battle-Tested') }}</div>
                    </div>
                </div>

                <div class="hidden lg:block w-px h-12 bg-gray-200 dark:bg-gray-700"></div>

                <div class="flex items-center gap-2">
                    <svg class="w-6 h-6 text-purple-500" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM4.332 8.027a6.012 6.012 0 011.912-2.706C6.512 5.73 6.974 6 7.5 6A1.5 1.5 0 019 7.5V8a2 2 0 004 0 2 2 0 011.523-1.943A5.977 5.977 0 0116 10c0 .34-.028.675-.083 1H15a2 2 0 00-2 2v2.197A5.973 5.973 0 0110 16v-2a2 2 0 00-2-2 2 2 0 01-2-2 2 2 0 00-1.668-1.973z" clip-rule="evenodd"></path>
                    </svg>
                    <div class="text-left">
                        <div class="text-2xl font-bold text-gray-900 dark:text-white">{{ __('Global') }}</div>
                        <div class="text-sm text-gray-500 dark:text-gray-400">{{ __('Used Worldwide') }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Quick Start Section -->
    <div id="quick-start" class="py-20 bg-white dark:bg-gray-900">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-10">
                <span class="inline-block px-4 py-1 text-xs font-bold uppercase tracking-widest bg-green-100 dark:bg-green-900/40 text-green-700 dark:text-green-400 rounded-full mb-4">{{ __('Quick Start') }}</span>
                <h2 class="text-4xl font-bold text-gray-900 dark:text-white mb-3">
                    {{ __('Up and Running in 5 Minutes') }}
                </h2>
                <p class="text-lg text-gray-600 dark:text-gray-400 mb-2">
                    {{ __('No complex setup. Works out of the box.') }}
                </p>
                <p class="text-sm text-gray-500 dark:text-gray-500 flex items-center justify-center gap-2">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                    {{ __('Works on Windows, Mac & Linux') }}
                </p>
            </div>

            <div class="relative bg-gray-900 dark:bg-gray-950 rounded-xl overflow-hidden shadow-xl border border-gray-700">
                <!-- Terminal title bar -->
                <div class="flex items-center gap-1.5 px-4 py-3 border-b border-gray-700 bg-gray-800 dark:bg-gray-900">
                    <span class="w-3 h-3 rounded-full bg-red-500"></span>
                    <span class="w-3 h-3 rounded-full bg-yellow-400"></span>
                    <span class="w-3 h-3 rounded-full bg-green-500"></span>
                    <span class="ml-3 text-xs text-gray-400 font-mono">bash</span>
                    <!-- Copy button -->
                    <button
                        x-data="{ copied: false }"
                        @click="
                            navigator.clipboard.writeText(document.getElementById('quickstart-code').innerText);
                            copied = true;
                            setTimeout(() => copied = false, 2000);
                        "
                        class="ml-auto flex items-center gap-1.5 text-xs text-gray-400 hover:text-white transition px-2 py-1 rounded hover:bg-gray-700"
                    >
                        <svg x-show="!copied" class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path></svg>
                        <svg x-show="copied" class="w-4 h-4 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        <span x-text="copied ? '{{ __('Copied!') }}' : '{{ __('Copy') }}'"></span>
                    </button>
                </div>
                <!-- Code block -->
                <pre id="quickstart-code" class="p-6 text-sm font-mono text-green-400 leading-relaxed overflow-x-auto"><span class="text-gray-500"># Clone the repository</span>
git clone https://github.com/ProgrammerNomad/LaraCoreKit.git
cd LaraCoreKit

<span class="text-gray-500"># Install dependencies</span>
composer install
npm install

<span class="text-gray-500"># Setup environment</span>
cp .env.example .env
php artisan key:generate

<span class="text-gray-500"># Setup database &amp; seed demo data</span>
php artisan migrate --seed

<span class="text-gray-500"># Build frontend assets</span>
npm run build

<span class="text-gray-500"># Start development server</span>
php artisan serve</pre>
            </div>

            <div class="flex flex-wrap gap-3 justify-center mt-8">
                <a href="/admin" class="inline-flex items-center gap-2 px-5 py-2.5 bg-blue-600 text-white font-medium rounded-lg hover:bg-blue-700 transition text-sm">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path></svg>
                    {{ __('Admin Panel') }} - /admin
                </a>
                <a href="/ui-showcase" wire:navigate class="inline-flex items-center gap-2 px-5 py-2.5 bg-purple-600 text-white font-medium rounded-lg hover:bg-purple-700 transition text-sm">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h4a1 1 0 011 1v4a1 1 0 01-1 1H5a1 1 0 01-1-1V5zm10 0a1 1 0 011-1h4a1 1 0 011 1v4a1 1 0 01-1 1h-4a1 1 0 01-1-1V5zM4 15a1 1 0 011-1h4a1 1 0 011 1v4a1 1 0 01-1 1H5a1 1 0 01-1-1v-4zm10 0a1 1 0 011-1h4a1 1 0 011 1v4a1 1 0 01-1 1h-4a1 1 0 01-1-1v-4z"></path></svg>
                    {{ __('UI Showcase') }} - /ui-showcase
                </a>
            </div>
        </div>
    </div>

    <!-- What is LaraCoreKit Section (LLM-friendly) -->
    <div class="py-16 bg-gradient-to-b from-gray-50 to-white dark:from-gray-900 dark:to-gray-900/50">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-10">
                <h2 class="text-3xl font-bold text-gray-900 dark:text-white mb-4">
                    {{ __('What is LaraCoreKit?') }}
                </h2>
            </div>
            <div class="prose prose-lg dark:prose-invert mx-auto">
                <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">
                    {{ __('LaraCoreKit is a production-ready Laravel 13 starter kit designed for developers who want to build modern web applications quickly without reinventing the wheel.') }}
                </p>
                <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">
                    {{ __('It includes everything you need: Filament admin panel, Livewire components, multilingual support (English, Hindi, Arabic with RTL), role-based permissions, 175+ UI components, and a modular architecture that scales with your project.') }}
                </p>
                <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed">
                    <strong>{{ __('Who is it for?') }}</strong> {{ __('Developers building SaaS applications, admin dashboards, multilingual websites, e-commerce platforms, or any Laravel project that needs a solid foundation.') }}
                </p>
            </div>
        </div>
    </div>

    <!-- Features Section -->
    <div class="py-20 bg-white dark:bg-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 dark:text-white mb-4">
                    {{ __('Powerful Features') }}
                </h2>
                <p class="text-lg text-gray-600 dark:text-gray-400">
                    {{ __('Everything you need to build modern web applications') }}
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="bg-gray-50 dark:bg-gray-800 rounded-lg p-6 hover:shadow-lg transition-shadow">
                    <div class="w-12 h-12 bg-blue-100 dark:bg-blue-900 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-2">{{ __('Enterprise-Grade Role & Permission System') }}</h3>
                    <p class="text-gray-600 dark:text-gray-400">{{ __('Complete RBAC with Spatie Permission package integrated with Filament') }}</p>
                </div>

                <!-- Feature 2 -->
                <div class="bg-gray-50 dark:bg-gray-800 rounded-lg p-6 hover:shadow-lg transition-shadow">
                    <div class="w-12 h-12 bg-purple-100 dark:bg-purple-900 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-purple-600 dark:text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-2">{{ __('Multilingual Support') }}</h3>
                    <p class="text-gray-600 dark:text-gray-400">{{ __('JSON-based translations in English, Hindi, and Arabic with RTL support') }}</p>
                </div>

                <!-- Feature 3 -->
                <div class="bg-gray-50 dark:bg-gray-800 rounded-lg p-6 hover:shadow-lg transition-shadow">
                    <div class="w-12 h-12 bg-pink-100 dark:bg-pink-900 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-pink-600 dark:text-pink-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-2">{{ __('Filament Admin Panel') }}</h3>
                    <p class="text-gray-600 dark:text-gray-400">{{ __('Beautiful admin interface with dark mode, resources, and custom pages') }}</p>
                </div>

                <!-- Feature 4 -->
                <div class="bg-gray-50 dark:bg-gray-800 rounded-lg p-6 hover:shadow-lg transition-shadow">
                    <div class="w-12 h-12 bg-green-100 dark:bg-green-900 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-green-600 dark:text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-2">{{ __('Livewire 4 + Alpine.js') }}</h3>
                    <p class="text-gray-600 dark:text-gray-400">{{ __('Reactive frontend components without writing JavaScript') }}</p>
                </div>

                <!-- Feature 5 -->
                <div class="bg-gray-50 dark:bg-gray-800 rounded-lg p-6 hover:shadow-lg transition-shadow">
                    <div class="w-12 h-12 bg-yellow-100 dark:bg-yellow-900 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-yellow-600 dark:text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-2">{{ __('TailwindCSS 4') }}</h3>
                    <p class="text-gray-600 dark:text-gray-400">{{ __('Modern utility-first CSS framework with custom design tokens') }}</p>
                </div>

                <!-- Feature 6 -->
                <div class="bg-gray-50 dark:bg-gray-800 rounded-lg p-6 hover:shadow-lg transition-shadow">
                    <div class="w-12 h-12 bg-indigo-100 dark:bg-indigo-900 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-indigo-600 dark:text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-2">{{ __('Launch Faster with Pre-Built Architecture') }}</h3>
                    <p class="text-gray-600 dark:text-gray-400">{{ __('SQLite for local dev, MySQL/PostgreSQL for production, with seeded data') }}</p>
                </div>
            </div>
        </div>
    </div>

    <!-- What Can You Build Section -->
    <div class="py-20 bg-gradient-to-br from-blue-50 via-purple-50 to-pink-50 dark:from-gray-900 dark:via-gray-800 dark:to-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-gray-900 dark:text-white mb-4">
                    {{ __('What Can You Build?') }}
                </h2>
                <p class="text-lg text-gray-600 dark:text-gray-400">
                    {{ __('LaraCoreKit adapts to your vision') }}
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                {{-- SaaS Dashboard --}}
                <div class="bg-white dark:bg-gray-800 rounded-xl p-6 shadow-lg hover:shadow-xl transition border border-gray-200 dark:border-gray-700">
                    <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-blue-600 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">{{ __('SaaS Dashboard') }}</h3>
                    <p class="text-gray-600 dark:text-gray-400 text-sm">{{ __('Multi-tenant SaaS with admin panel, user management, and subscription billing') }}</p>
                </div>

                {{-- Admin Panel --}}
                <div class="bg-white dark:bg-gray-800 rounded-xl p-6 shadow-lg hover:shadow-xl transition border border-gray-200 dark:border-gray-700">
                    <div class="w-12 h-12 bg-gradient-to-br from-purple-500 to-purple-600 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">{{ __('Admin Panel') }}</h3>
                    <p class="text-gray-600 dark:text-gray-400 text-sm">{{ __('Content management system with Filament, CRUD operations, and advanced filters') }}</p>
                </div>

                {{-- Multilingual Website --}}
                <div class="bg-white dark:bg-gray-800 rounded-xl p-6 shadow-lg hover:shadow-xl transition border border-gray-200 dark:border-gray-700">
                    <div class="w-12 h-12 bg-gradient-to-br from-green-500 to-green-600 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">{{ __('Multilingual Website') }}</h3>
                    <p class="text-gray-600 dark:text-gray-400 text-sm">{{ __('International websites with EN/HI/AR support, RTL layout, and locale switching') }}</p>
                </div>

                {{-- Blog Platform --}}
                <div class="bg-white dark:bg-gray-800 rounded-xl p-6 shadow-lg hover:shadow-xl transition border border-gray-200 dark:border-gray-700">
                    <div class="w-12 h-12 bg-gradient-to-br from-pink-500 to-pink-600 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">{{ __('Blog Platform') }}</h3>
                    <p class="text-gray-600 dark:text-gray-400 text-sm">{{ __('SEO-optimized blog with categories, tags, rich text editor, and social sharing') }}</p>
                </div>

                {{-- Portfolio Website --}}
                <div class="bg-white dark:bg-gray-800 rounded-xl p-6 shadow-lg hover:shadow-xl transition border border-gray-200 dark:border-gray-700">
                    <div class="w-12 h-12 bg-gradient-to-br from-yellow-500 to-yellow-600 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">{{ __('Portfolio Website') }}</h3>
                    <p class="text-gray-600 dark:text-gray-400 text-sm">{{ __('Showcase projects with media library, contact forms, and dynamic components') }}</p>
                </div>

                {{-- E-commerce (Coming Soon) --}}
                <div class="bg-white dark:bg-gray-800 rounded-xl p-6 shadow-lg hover:shadow-xl transition border border-gray-200 dark:border-gray-700 relative overflow-hidden">
                    <div class="absolute top-2 right-2">
                        <span class="inline-block px-2 py-1 text-xs font-semibold bg-gradient-to-r from-purple-500 to-pink-500 text-white rounded-full">{{ __('Coming Soon') }}</span>
                    </div>
                    <div class="w-12 h-12 bg-gradient-to-br from-indigo-500 to-indigo-600 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">{{ __('E-commerce Platform') }}</h3>
                    <p class="text-gray-600 dark:text-gray-400 text-sm">{{ __('Full online store with product management, cart, checkout, and payment gateways') }}</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Why Not Plain Laravel - Comparison Table -->
    <div class="py-20 bg-white dark:bg-gray-900">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-gray-900 dark:text-white mb-4">
                    {{ __('Why Not Plain Laravel?') }}
                </h2>
                <p class="text-lg text-gray-600 dark:text-gray-400">
                    {{ __('See what you get out of the box') }}
                </p>
            </div>

            <div class="overflow-x-auto rounded-xl border border-gray-200 dark:border-gray-700">
                <table class="w-full">
                    <thead class="bg-gray-50 dark:bg-gray-800">
                        <tr>
                            <th class="px-6 py-4 text-left text-sm font-semibold text-gray-700 dark:text-gray-300">{{ __('Feature') }}</th>
                            <th class="px-6 py-4 text-center text-sm font-semibold text-gray-700 dark:text-gray-300">{{ __('Plain Laravel') }}</th>
                            <th class="px-6 py-4 text-center text-sm font-semibold text-blue-600 dark:text-blue-400">{{ __('LaraCoreKit') }}</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                        <tr class="bg-white dark:bg-gray-900">
                            <td class="px-6 py-4 text-sm text-gray-900 dark:text-white">{{ __('Authentication System') }}</td>
                            <td class="px-6 py-4 text-center text-gray-500 dark:text-gray-400 text-xs">{{ __('Manual setup') }}</td>
                            <td class="px-6 py-4 text-center"><span class="inline-flex items-center justify-center w-6 h-6 bg-green-100 dark:bg-green-900/40 rounded-full"><svg class="w-4 h-4 text-green-600 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg></span></td>
                        </tr>
                        <tr class="bg-gray-50 dark:bg-gray-800/50">
                            <td class="px-6 py-4 text-sm text-gray-900 dark:text-white">{{ __('Admin Panel') }}</td>
                            <td class="px-6 py-4 text-center text-gray-500 dark:text-gray-400 text-xs">{{ __('Build from scratch') }}</td>
                            <td class="px-6 py-4 text-center"><span class="inline-flex items-center px-2 py-1 text-xs font-semibold bg-blue-100 dark:bg-blue-900/40 text-blue-700 dark:text-blue-400 rounded-full">Filament 5</span></td>
                        </tr>
                        <tr class="bg-white dark:bg-gray-900">
                            <td class="px-6 py-4 text-sm text-gray-900 dark:text-white">{{ __('Multilingual Support') }}</td>
                            <td class="px-6 py-4 text-center text-gray-500 dark:text-gray-400 text-xs">{{ __('Manual implementation') }}</td>
                            <td class="px-6 py-4 text-center"><span class="inline-flex items-center px-2 py-1 text-xs font-semibold bg-purple-100 dark:bg-purple-900/40 text-purple-700 dark:text-purple-400 rounded-full">EN/HI/AR + RTL</span></td>
                        </tr>
                        <tr class="bg-gray-50 dark:bg-gray-800/50">
                            <td class="px-6 py-4 text-sm text-gray-900 dark:text-white">{{ __('UI Components') }}</td>
                            <td class="px-6 py-4 text-center text-gray-500 dark:text-gray-400 text-xs">{{ __('From scratch') }}</td>
                            <td class="px-6 py-4 text-center"><span class="inline-flex items-center px-2 py-1 text-xs font-semibold bg-green-100 dark:bg-green-900/40 text-green-700 dark:text-green-400 rounded-full">175+ Components</span></td>
                        </tr>
                        <tr class="bg-white dark:bg-gray-900">
                            <td class="px-6 py-4 text-sm text-gray-900 dark:text-white">{{ __('Role & Permissions') }}</td>
                            <td class="px-6 py-4 text-center text-gray-500 dark:text-gray-400 text-xs">{{ __('Complex setup') }}</td>
                            <td class="px-6 py-4 text-center"><span class="inline-flex items-center justify-center w-6 h-6 bg-green-100 dark:bg-green-900/40 rounded-full"><svg class="w-4 h-4 text-green-600 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg></span></td>
                        </tr>
                        <tr class="bg-gray-50 dark:bg-gray-800/50">
                            <td class="px-6 py-4 text-sm text-gray-900 dark:text-white">{{ __('Dark Mode') }}</td>
                            <td class="px-6 py-4 text-center text-gray-500 dark:text-gray-400 text-xs">{{ __('Manual CSS') }}</td>
                            <td class="px-6 py-4 text-center"><span class="inline-flex items-center justify-center w-6 h-6 bg-green-100 dark:bg-green-900/40 rounded-full"><svg class="w-4 h-4 text-green-600 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg></span></td>
                        </tr>
                        <tr class="bg-white dark:bg-gray-900">
                            <td class="px-6 py-4 text-sm text-gray-900 dark:text-white">{{ __('Time to Production') }}</td>
                            <td class="px-6 py-4 text-center text-sm font-semibold text-red-600 dark:text-red-400">2-4 {{ __('weeks') }}</td>
                            <td class="px-6 py-4 text-center text-sm font-semibold text-green-600 dark:text-green-400">5 {{ __('minutes') }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- What Can You Build Section -->
    <div class="py-20 bg-gradient-to-br from-blue-50 via-purple-50 to-pink-50 dark:from-gray-900 dark:via-gray-800 dark:to-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-gray-900 dark:text-white mb-4">
                    {{ __('What Can You Build?') }}
                </h2>
                <p class="text-lg text-gray-600 dark:text-gray-400">
                    {{ __('LaraCoreKit adapts to your vision') }}
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                {{-- SaaS Dashboard --}}
                <div class="bg-white dark:bg-gray-800 rounded-xl p-6 shadow-lg hover:shadow-xl transition border border-gray-200 dark:border-gray-700">
                    <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-blue-600 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">{{ __('SaaS Dashboard') }}</h3>
                    <p class="text-gray-600 dark:text-gray-400 text-sm">{{ __('Multi-tenant SaaS with admin panel, user management, and subscription billing') }}</p>
                </div>

                {{-- Admin Panel --}}
                <div class="bg-white dark:bg-gray-800 rounded-xl p-6 shadow-lg hover:shadow-xl transition border border-gray-200 dark:border-gray-700">
                    <div class="w-12 h-12 bg-gradient-to-br from-purple-500 to-purple-600 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">{{ __('Admin Panel') }}</h3>
                    <p class="text-gray-600 dark:text-gray-400 text-sm">{{ __('Content management system with Filament, CRUD operations, and advanced filters') }}</p>
                </div>

                {{-- Multilingual Website --}}
                <div class="bg-white dark:bg-gray-800 rounded-xl p-6 shadow-lg hover:shadow-xl transition border border-gray-200 dark:border-gray-700">
                    <div class="w-12 h-12 bg-gradient-to-br from-green-500 to-green-600 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">{{ __('Multilingual Website') }}</h3>
                    <p class="text-gray-600 dark:text-gray-400 text-sm">{{ __('International websites with EN/HI/AR support, RTL layout, and locale switching') }}</p>
                </div>

                {{-- Blog Platform --}}
                <div class="bg-white dark:bg-gray-800 rounded-xl p-6 shadow-lg hover:shadow-xl transition border border-gray-200 dark:border-gray-700">
                    <div class="w-12 h-12 bg-gradient-to-br from-pink-500 to-pink-600 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">{{ __('Blog Platform') }}</h3>
                    <p class="text-gray-600 dark:text-gray-400 text-sm">{{ __('SEO-optimized blog with categories, tags, rich text editor, and social sharing') }}</p>
                </div>

                {{-- Portfolio Website --}}
                <div class="bg-white dark:bg-gray-800 rounded-xl p-6 shadow-lg hover:shadow-xl transition border border-gray-200 dark:border-gray-700">
                    <div class="w-12 h-12 bg-gradient-to-br from-yellow-500 to-yellow-600 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">{{ __('Portfolio Website') }}</h3>
                    <p class="text-gray-600 dark:text-gray-400 text-sm">{{ __('Showcase projects with media library, contact forms, and dynamic components') }}</p>
                </div>

                {{-- E-commerce (Coming Soon) --}}
                <div class="bg-white dark:bg-gray-800 rounded-xl p-6 shadow-lg hover:shadow-xl transition border border-gray-200 dark:border-gray-700 relative overflow-hidden">
                    <div class="absolute top-2 right-2">
                        <span class="inline-block px-2 py-1 text-xs font-semibold bg-gradient-to-r from-purple-500 to-pink-500 text-white rounded-full">{{ __('Coming Soon') }}</span>
                    </div>
                    <div class="w-12 h-12 bg-gradient-to-br from-indigo-500 to-indigo-600 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">{{ __('E-commerce Platform') }}</h3>
                    <p class="text-gray-600 dark:text-gray-400 text-sm">{{ __('Full online store with product management, cart, checkout, and payment gateways') }}</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Why Not Plain Laravel - Comparison Table -->
    <div class="py-20 bg-white dark:bg-gray-900">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-gray-900 dark:text-white mb-4">
                    {{ __('Why Not Plain Laravel?') }}
                </h2>
                <p class="text-lg text-gray-600 dark:text-gray-400">
                    {{ __('See what you get out of the box') }}
                </p>
            </div>

            <div class="overflow-x-auto rounded-xl border border-gray-200 dark:border-gray-700">
                <table class="w-full">
                    <thead class="bg-gray-50 dark:bg-gray-800">
                        <tr>
                            <th class="px-6 py-4 text-left text-sm font-semibold text-gray-700 dark:text-gray-300">{{ __('Feature') }}</th>
                            <th class="px-6 py-4 text-center text-sm font-semibold text-gray-700 dark:text-gray-300">{{ __('Plain Laravel') }}</th>
                            <th class="px-6 py-4 text-center text-sm font-semibold text-blue-600 dark:text-blue-400">{{ __('LaraCoreKit') }}</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                        <tr class="bg-white dark:bg-gray-900">
                            <td class="px-6 py-4 text-sm text-gray-900 dark:text-white">{{ __('Authentication System') }}</td>
                            <td class="px-6 py-4 text-center text-gray-500 dark:text-gray-400 text-xs">{{ __('Manual setup') }}</td>
                            <td class="px-6 py-4 text-center"><span class="inline-flex items-center justify-center w-6 h-6 bg-green-100 dark:bg-green-900/40 rounded-full"><svg class="w-4 h-4 text-green-600 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg></span></td>
                        </tr>
                        <tr class="bg-gray-50 dark:bg-gray-800/50">
                            <td class="px-6 py-4 text-sm text-gray-900 dark:text-white">{{ __('Admin Panel') }}</td>
                            <td class="px-6 py-4 text-center text-gray-500 dark:text-gray-400 text-xs">{{ __('Build from scratch') }}</td>
                            <td class="px-6 py-4 text-center"><span class="inline-flex items-center px-2 py-1 text-xs font-semibold bg-blue-100 dark:bg-blue-900/40 text-blue-700 dark:text-blue-400 rounded-full">Filament 5</span></td>
                        </tr>
                        <tr class="bg-white dark:bg-gray-900">
                            <td class="px-6 py-4 text-sm text-gray-900 dark:text-white">{{ __('Multilingual Support') }}</td>
                            <td class="px-6 py-4 text-center text-gray-500 dark:text-gray-400 text-xs">{{ __('Manual implementation') }}</td>
                            <td class="px-6 py-4 text-center"><span class="inline-flex items-center px-2 py-1 text-xs font-semibold bg-purple-100 dark:bg-purple-900/40 text-purple-700 dark:text-purple-400 rounded-full">EN/HI/AR + RTL</span></td>
                        </tr>
                        <tr class="bg-gray-50 dark:bg-gray-800/50">
                            <td class="px-6 py-4 text-sm text-gray-900 dark:text-white">{{ __('UI Components') }}</td>
                            <td class="px-6 py-4 text-center text-gray-500 dark:text-gray-400 text-xs">{{ __('From scratch') }}</td>
                            <td class="px-6 py-4 text-center"><span class="inline-flex items-center px-2 py-1 text-xs font-semibold bg-green-100 dark:bg-green-900/40 text-green-700 dark:text-green-400 rounded-full">175+ Components</span></td>
                        </tr>
                        <tr class="bg-white dark:bg-gray-900">
                            <td class="px-6 py-4 text-sm text-gray-900 dark:text-white">{{ __('Role & Permissions') }}</td>
                            <td class="px-6 py-4 text-center text-gray-500 dark:text-gray-400 text-xs">{{ __('Complex setup') }}</td>
                            <td class="px-6 py-4 text-center"><span class="inline-flex items-center justify-center w-6 h-6 bg-green-100 dark:bg-green-900/40 rounded-full"><svg class="w-4 h-4 text-green-600 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg></span></td>
                        </tr>
                        <tr class="bg-gray-50 dark:bg-gray-800/50">
                            <td class="px-6 py-4 text-sm text-gray-900 dark:text-white">{{ __('Dark Mode') }}</td>
                            <td class="px-6 py-4 text-center text-gray-500 dark:text-gray-400 text-xs">{{ __('Manual CSS') }}</td>
                            <td class="px-6 py-4 text-center"><span class="inline-flex items-center justify-center w-6 h-6 bg-green-100 dark:bg-green-900/40 rounded-full"><svg class="w-4 h-4 text-green-600 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg></span></td>
                        </tr>
                        <tr class="bg-white dark:bg-gray-900">
                            <td class="px-6 py-4 text-sm text-gray-900 dark:text-white">{{ __('Time to Production') }}</td>
                            <td class="px-6 py-4 text-center text-sm font-semibold text-red-600 dark:text-red-400">2-4 {{ __('weeks') }}</td>
                            <td class="px-6 py-4 text-center text-sm font-semibold text-green-600 dark:text-green-400">5 {{ __('minutes') }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- UI Component Library Section -->
    <div class="py-20 bg-gray-50 dark:bg-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-gray-900 dark:text-white mb-4">
                    {{ __('UI Component Library') }}
                </h2>
                <p class="text-lg text-gray-600 dark:text-gray-400 mb-2">
                    {{ __('175+ ready-to-use components for forms, tables, charts, modals, and more') }}
                </p>
                <p class="text-sm text-gray-500 dark:text-gray-400 mb-6 italic">
                    {{ __('Production-ready UI components built with TailwindCSS 4 + Livewire 4') }}
                </p>
                <a href="/ui-showcase" wire:navigate class="inline-flex items-center px-6 py-3 bg-purple-600 text-white font-semibold rounded-lg hover:bg-purple-700 transition-colors">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h4a1 1 0 011 1v4a1 1 0 01-1 1H5a1 1 0 01-1-1V5zm10 0a1 1 0 011-1h4a1 1 0 011 1v4a1 1 0 01-1 1h-4a1 1 0 01-1-1V5zM4 15a1 1 0 011-1h4a1 1 0 011 1v4a1 1 0 01-1 1H5a1 1 0 01-1-1v-4zm10 0a1 1 0 011-1h4a1 1 0 011 1v4a1 1 0 01-1 1h-4a1 1 0 01-1-1v-4z"></path>
                    </svg>
                    {{ __('Explore UI Showcase') }}
                </a>
            </div>

            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-4">
                <a href="/ui-showcase/buttons" wire:navigate class="group flex flex-col items-center p-4 bg-white dark:bg-gray-900 rounded-lg border border-gray-200 dark:border-gray-700 hover:border-purple-400 dark:hover:border-purple-500 hover:shadow-md transition">
                    <div class="w-10 h-10 bg-blue-100 dark:bg-blue-900 rounded-lg flex items-center justify-center mb-3 group-hover:bg-blue-200 dark:group-hover:bg-blue-800 transition">
                        <svg class="w-5 h-5 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5"></path></svg>
                    </div>
                    <span class="text-sm font-medium text-gray-700 dark:text-gray-300">{{ __('Buttons') }}</span>
                    <span class="text-xs text-gray-400 mt-1">15 {{ __('components') }}</span>
                </a>

                <a href="/ui-showcase/forms" wire:navigate class="group flex flex-col items-center p-4 bg-white dark:bg-gray-900 rounded-lg border border-gray-200 dark:border-gray-700 hover:border-purple-400 dark:hover:border-purple-500 hover:shadow-md transition">
                    <div class="w-10 h-10 bg-green-100 dark:bg-green-900 rounded-lg flex items-center justify-center mb-3 group-hover:bg-green-200 dark:group-hover:bg-green-800 transition">
                        <svg class="w-5 h-5 text-green-600 dark:text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                    </div>
                    <span class="text-sm font-medium text-gray-700 dark:text-gray-300">{{ __('Forms') }}</span>
                    <span class="text-xs text-gray-400 mt-1">24 {{ __('components') }}</span>
                </a>

                <a href="/ui-showcase/data-display" wire:navigate class="group flex flex-col items-center p-4 bg-white dark:bg-gray-900 rounded-lg border border-gray-200 dark:border-gray-700 hover:border-purple-400 dark:hover:border-purple-500 hover:shadow-md transition">
                    <div class="w-10 h-10 bg-yellow-100 dark:bg-yellow-900 rounded-lg flex items-center justify-center mb-3 group-hover:bg-yellow-200 dark:group-hover:bg-yellow-800 transition">
                        <svg class="w-5 h-5 text-yellow-600 dark:text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M3 14h18m-9-4v8m-7 0h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path></svg>
                    </div>
                    <span class="text-sm font-medium text-gray-700 dark:text-gray-300">{{ __('Data Display') }}</span>
                    <span class="text-xs text-gray-400 mt-1">18 {{ __('components') }}</span>
                </a>

                <a href="/ui-showcase/charts" wire:navigate class="group flex flex-col items-center p-4 bg-white dark:bg-gray-900 rounded-lg border border-gray-200 dark:border-gray-700 hover:border-purple-400 dark:hover:border-purple-500 hover:shadow-md transition">
                    <div class="w-10 h-10 bg-pink-100 dark:bg-pink-900 rounded-lg flex items-center justify-center mb-3 group-hover:bg-pink-200 dark:group-hover:bg-pink-800 transition">
                        <svg class="w-5 h-5 text-pink-600 dark:text-pink-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path></svg>
                    </div>
                    <span class="text-sm font-medium text-gray-700 dark:text-gray-300">{{ __('Charts') }}</span>
                    <span class="text-xs text-gray-400 mt-1">9 {{ __('components') }}</span>
                </a>

                <a href="/ui-showcase/feedback" wire:navigate class="group flex flex-col items-center p-4 bg-white dark:bg-gray-900 rounded-lg border border-gray-200 dark:border-gray-700 hover:border-purple-400 dark:hover:border-purple-500 hover:shadow-md transition">
                    <div class="w-10 h-10 bg-indigo-100 dark:bg-indigo-900 rounded-lg flex items-center justify-center mb-3 group-hover:bg-indigo-200 dark:group-hover:bg-indigo-800 transition">
                        <svg class="w-5 h-5 text-indigo-600 dark:text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path></svg>
                    </div>
                    <span class="text-sm font-medium text-gray-700 dark:text-gray-300">{{ __('Feedback') }}</span>
                    <span class="text-xs text-gray-400 mt-1">22 {{ __('components') }}</span>
                </a>
            </div>
            <div class="text-center mt-8">
                <a href="/ui-showcase" wire:navigate class="inline-flex items-center gap-2 text-purple-600 dark:text-purple-400 font-semibold hover:underline">
                    {{ __('View all 175+ components') }} >>
                </a>
            </div>
        </div>
    </div>

    <!-- Latest Blog Posts -->
    @if($latestPosts->isNotEmpty())
    <div class="py-20 bg-gray-50 dark:bg-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center mb-12">
                <div>
                    <h2 class="text-4xl font-bold text-gray-900 dark:text-white mb-2">
                        {{ __('Latest Articles') }}
                    </h2>
                    <p class="text-lg text-gray-600 dark:text-gray-400">
                        {{ __('Discover our latest insights and tutorials') }}
                    </p>
                </div>
                <a href="/blog" wire:navigate class="text-blue-600 dark:text-blue-400 hover:underline font-medium">
                    {{ __('View all') }} >>
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach($latestPosts as $blog)
                    <article class="bg-white dark:bg-gray-900 rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300">
                        <div class="w-full h-48 bg-gradient-to-br from-blue-500 to-purple-600 flex items-center justify-center">
                            <svg class="w-16 h-16 text-white opacity-50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                        </div>

                        <div class="p-6">
                            @if($blog->category)
                                <span class="inline-block px-3 py-1 text-xs font-semibold text-blue-600 dark:text-blue-400 bg-blue-100 dark:bg-blue-900 rounded-full mb-3">
                                    {{ $blog->category[app()->getLocale()] ?? $blog->category['en'] ?? '' }}
                                </span>
                            @endif

                            <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3 line-clamp-2">
                                <a href="{{ route('blog.show', $blog->slug) }}" wire:navigate class="hover:text-blue-600 dark:hover:text-blue-400">
                                    {{ $blog->title[app()->getLocale()] ?? $blog->title['en'] ?? 'Untitled' }}
                                </a>
                            </h3>

                            <p class="text-gray-600 dark:text-gray-400 mb-4 line-clamp-3">
                                {{ $blog->excerpt[app()->getLocale()] ?? $blog->excerpt['en'] ?? '' }}
                            </p>

                            <div class="flex items-center justify-between text-sm text-gray-500 dark:text-gray-500">
                                <span>{{ $blog->author->name ?? 'Admin' }}</span>
                                <time datetime="{{ $blog->published_at?->toDateString() }}">
                                    {{ $blog->published_at?->format('M d, Y') }}
                                </time>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </div>
    @endif

    <!-- FAQ Section -->
    <div class="py-20 bg-gray-50 dark:bg-gray-800">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-gray-900 dark:text-white mb-4">
                    {{ __('Frequently Asked Questions') }}
                </h2>
                <p class="text-lg text-gray-600 dark:text-gray-400">
                    {{ __('Everything you need to know') }}
                </p>
            </div>

            <div class="space-y-4" x-data="{ activeIndex: null }">
                {{-- FAQ 1 --}}
                <div class="bg-white dark:bg-gray-900 rounded-lg border border-gray-200 dark:border-gray-700 overflow-hidden">
                    <button @click="activeIndex = activeIndex === 1 ? null : 1" class="w-full px-6 py-4 text-left flex items-center justify-between hover:bg-gray-50 dark:hover:bg-gray-800 transition">
                        <span class="font-semibold text-gray-900 dark:text-white">{{ __('What is LaraCoreKit?') }}</span>
                        <svg class="w-5 h-5 text-gray-500 transition-transform" :class="{ 'rotate-180': activeIndex === 1 }" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    <div x-show="activeIndex === 1" x-collapse>
                        <div class="px-6 py-4 border-t border-gray-200 dark:border-gray-700 text-gray-600 dark:text-gray-400">
                            {{ __('LaraCoreKit is a production-ready Laravel 13 starter kit with Filament admin panel, Livewire components, multilingual support, 175+ UI components, and role-based permissions. It helps you build modern web applications faster.') }}
                        </div>
                    </div>
                </div>

                {{-- FAQ 2 --}}
                <div class="bg-white dark:bg-gray-900 rounded-lg border border-gray-200 dark:border-gray-700 overflow-hidden">
                    <button @click="activeIndex = activeIndex === 2 ? null : 2" class="w-full px-6 py-4 text-left flex items-center justify-between hover:bg-gray-50 dark:hover:bg-gray-800 transition">
                        <span class="font-semibold text-gray-900 dark:text-white">{{ __('Is it free?') }}</span>
                        <svg class="w-5 h-5 text-gray-500 transition-transform" :class="{ 'rotate-180': activeIndex === 2 }" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    <div x-show="activeIndex === 2" x-collapse>
                        <div class="px-6 py-4 border-t border-gray-200 dark:border-gray-700 text-gray-600 dark:text-gray-400">
                            {{ __('Yes! LaraCoreKit is 100% free and open-source under the MIT License. You can use it for personal or commercial projects without any restrictions.') }}
                        </div>
                    </div>
                </div>

                {{-- FAQ 3 --}}
                <div class="bg-white dark:bg-gray-900 rounded-lg border border-gray-200 dark:border-gray-700 overflow-hidden">
                    <button @click="activeIndex = activeIndex === 3 ? null : 3" class="w-full px-6 py-4 text-left flex items-center justify-between hover:bg-gray-50 dark:hover:bg-gray-800 transition">
                        <span class="font-semibold text-gray-900 dark:text-white">{{ __('Does it support multilingual websites?') }}</span>
                        <svg class="w-5 h-5 text-gray-500 transition-transform" :class="{ 'rotate-180': activeIndex === 3 }" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    <div x-show="activeIndex === 3" x-collapse>
                        <div class="px-6 py-4 border-t border-gray-200 dark:border-gray-700 text-gray-600 dark:text-gray-400">
                            {{ __('Yes! LaraCoreKit includes built-in support for English, Hindi, and Arabic with RTL (right-to-left) layout support. You can easily add more languages using Laravel JSON translation files.') }}
                        </div>
                    </div>
                </div>

                {{-- FAQ 4 --}}
                <div class="bg-white dark:bg-gray-900 rounded-lg border border-gray-200 dark:border-gray-700 overflow-hidden">
                    <button @click="activeIndex = activeIndex === 4 ? null : 4" class="w-full px-6 py-4 text-left flex items-center justify-between hover:bg-gray-50 dark:hover:bg-gray-800 transition">
                        <span class="font-semibold text-gray-900 dark:text-white">{{ __('Can I build a SaaS application with it?') }}</span>
                        <svg class="w-5 h-5 text-gray-500 transition-transform" :class="{ 'rotate-180': activeIndex === 4 }" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    <div x-show="activeIndex === 4" x-collapse>
                        <div class="px-6 py-4 border-t border-gray-200 dark:border-gray-700 text-gray-600 dark:text-gray-400">
                            {{ __('Absolutely! LaraCoreKit includes authentication, authorization with roles & permissions, Filament admin panel, and modular architecture - perfect for SaaS applications. Many developers use it as their SaaS foundation.') }}
                        </div>
                    </div>
                </div>

                {{-- FAQ 5 --}}
                <div class="bg-white dark:bg-gray-900 rounded-lg border border-gray-200 dark:border-gray-700 overflow-hidden">
                    <button @click="activeIndex = activeIndex === 5 ? null : 5" class="w-full px-6 py-4 text-left flex items-center justify-between hover:bg-gray-50 dark:hover:bg-gray-800 transition">
                        <span class="font-semibold text-gray-900 dark:text-white">{{ __('What technologies does it use?') }}</span>
                        <svg class="w-5 h-5 text-gray-500 transition-transform" :class="{ 'rotate-180': activeIndex === 5 }" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    <div x-show="activeIndex === 5" x-collapse>
                        <div class="px-6 py-4 border-t border-gray-200 dark:border-gray-700 text-gray-600 dark:text-gray-400">
                            {{ __('LaraCoreKit is built with Laravel 13, Livewire 4, Filament 5, TailwindCSS 4, Alpine.js 3, and PHP 8.3. All modern, well-maintained technologies.') }}
                        </div>
                    </div>
                </div>

                {{-- FAQ 6 --}}
                <div class="bg-white dark:bg-gray-900 rounded-lg border border-gray-200 dark:border-gray-700 overflow-hidden">
                    <button @click="activeIndex = activeIndex === 6 ? null : 6" class="w-full px-6 py-4 text-left flex items-center justify-between hover:bg-gray-50 dark:hover:bg-gray-800 transition">
                        <span class="font-semibold text-gray-900 dark:text-white">{{ __('How do I get started?') }}</span>
                        <svg class="w-5 h-5 text-gray-500 transition-transform" :class="{ 'rotate-180': activeIndex === 6 }" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    <div x-show="activeIndex === 6" x-collapse>
                        <div class="px-6 py-4 border-t border-gray-200 dark:border-gray-700 text-gray-600 dark:text-gray-400">
                            {{ __('Simply clone the repository, run composer install and npm install, set up your .env file, migrate the database, and start building. Full installation guide is in the Quick Start section above.') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <div class="py-20 bg-gradient-to-r from-blue-600 to-purple-600 text-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-4xl font-bold mb-6">
                {{ __('Start Building Your Laravel App in Minutes') }}
            </h2>
            <p class="text-xl mb-8 text-blue-100">
                {{ __('100% Open Source. MIT Licensed. Free Forever.') }}
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center flex-wrap">
                <a href="#quick-start" class="inline-flex items-center px-8 py-3 bg-white text-blue-600 font-semibold rounded-lg hover:bg-blue-50 transition-colors">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                    {{ __('Get Started') }}
                </a>
                <a href="/ui-showcase" wire:navigate class="inline-flex items-center px-8 py-3 bg-purple-700 text-white font-semibold rounded-lg hover:bg-purple-800 transition-colors">
                    {{ __('UI Showcase') }}
                </a>
                <a href="https://github.com/ProgrammerNomad/LaraCoreKit" target="_blank" rel="noopener" class="inline-flex items-center px-8 py-3 bg-blue-800 text-white font-semibold rounded-lg hover:bg-blue-900 transition-colors">
                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"></path>
                    </svg>
                    GitHub
                </a>
            </div>
        </div>
    </div>

    <!-- Sticky CTA Button -->
    <div
        x-data="{ show: false }"
        x-init="window.addEventListener('scroll', () => { show = window.scrollY > 800 })"
        x-show="show"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 translate-y-4"
        x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 translate-y-4"
        class="fixed bottom-6 right-6 z-50"
        style="display: none;"
    >
        <a href="#quick-start" class="flex items-center gap-2 px-6 py-3 bg-gradient-to-r from-blue-600 to-purple-600 text-white font-semibold rounded-full shadow-2xl hover:shadow-blue-500/50 hover:scale-105 transition-all duration-300">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
            </svg>
            <span>{{ __('Get Started') }}</span>
        </a>
    </div>
</div>


