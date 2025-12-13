@extends('showcase::layouts.showcase')

@section('page-title', 'Landing Page - Hero & Features')
@section('page-description', 'Hero sections, feature displays, and CTAs for landing pages')

@section('content')
<div class="max-w-7xl mx-auto space-y-8">

    <!-- Hero Section - Centered with CTA -->
    @component('showcase::components.showcase-item', [
        'title' => 'Hero Section - Centered',
        'description' => 'Full-height hero with centered content and primary/secondary CTAs',
        'code' => '<div class="relative bg-gradient-to-br from-blue-600 to-purple-700 text-white">
    <div class="max-w-7xl mx-auto px-6 py-24 md:py-32 text-center">
        <h1 class="text-4xl md:text-6xl font-bold mb-6">
            Build Better Products Faster
        </h1>
        <p class="text-xl md:text-2xl text-blue-100 mb-8 max-w-3xl mx-auto">
            The complete toolkit for modern web development. Ship production-ready apps in half the time.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <button class="px-8 py-3 bg-white text-blue-600 rounded-lg font-semibold hover:bg-gray-100">
                Get Started Free
            </button>
            <button class="px-8 py-3 bg-blue-500 bg-opacity-20 backdrop-blur border border-white border-opacity-20 rounded-lg font-semibold hover:bg-opacity-30">
                Watch Demo
            </button>
        </div>
    </div>
</div>'
    ])
        @slot('preview')
            <div class="relative bg-gradient-to-br from-blue-600 to-purple-700 text-white rounded-lg overflow-hidden">
                <div class="max-w-7xl mx-auto px-6 py-24 md:py-32 text-center">
                    <h1 class="text-4xl md:text-6xl font-bold mb-6">
                        Build Better Products Faster
                    </h1>
                    <p class="text-xl md:text-2xl text-blue-100 mb-8 max-w-3xl mx-auto">
                        The complete toolkit for modern web development. Ship production-ready apps in half the time.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <button class="px-8 py-3 bg-white text-blue-600 rounded-lg font-semibold hover:bg-gray-100 transition">
                            Get Started Free
                        </button>
                        <button class="px-8 py-3 bg-blue-500 bg-opacity-20 backdrop-blur border border-white border-opacity-20 rounded-lg font-semibold hover:bg-opacity-30 transition">
                            Watch Demo
                        </button>
                    </div>
                </div>
            </div>
        @endslot
    @endcomponent

    <!-- Hero Section - Split with Image -->
    @component('showcase::components.showcase-item', [
        'title' => 'Hero Section - Split Layout',
        'description' => 'Two-column hero with content left and image/graphic right',
        'code' => '<div class="bg-white dark:bg-gray-900">
    <div class="max-w-7xl mx-auto px-6 py-20">
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div>
                <span class="px-3 py-1 bg-blue-100 text-blue-600 rounded-full text-sm font-semibold">
                    New Release
                </span>
                <h1 class="text-5xl font-bold text-gray-900 dark:text-white mt-4 mb-6">
                    Transform Your Workflow
                </h1>
                <p class="text-xl text-gray-600 dark:text-gray-400 mb-8">
                    Streamline your development process with our powerful suite of tools designed for modern teams.
                </p>
                <div class="flex gap-4">
                    <button class="px-6 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
                        Start Free Trial
                    </button>
                    <button class="px-6 py-3 border border-gray-300 dark:border-gray-600 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-800">
                        Learn More
                    </button>
                </div>
            </div>
            <div class="bg-gradient-to-br from-blue-500 to-purple-600 rounded-2xl h-96 flex items-center justify-center text-white">
                <span class="text-xl">Hero Image / Graphic</span>
            </div>
        </div>
    </div>
</div>'
    ])
        @slot('preview')
            <div class="bg-white dark:bg-gray-900 rounded-lg p-6">
                <div class="max-w-7xl mx-auto">
                    <div class="grid md:grid-cols-2 gap-12 items-center">
                        <div>
                            <span class="px-3 py-1 bg-blue-100 dark:bg-blue-900 text-blue-600 dark:text-blue-400 rounded-full text-sm font-semibold">
                                New Release
                            </span>
                            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 dark:text-white mt-4 mb-6">
                                Transform Your Workflow
                            </h1>
                            <p class="text-lg md:text-xl text-gray-600 dark:text-gray-400 mb-8">
                                Streamline your development process with our powerful suite of tools designed for modern teams.
                            </p>
                            <div class="flex flex-col sm:flex-row gap-4">
                                <button class="px-6 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">
                                    Start Free Trial
                                </button>
                                <button class="px-6 py-3 border border-gray-300 dark:border-gray-600 text-gray-700 dark:text-gray-300 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-800 transition">
                                    Learn More
                                </button>
                            </div>
                        </div>
                        <div class="bg-gradient-to-br from-blue-500 to-purple-600 rounded-2xl h-64 md:h-96 flex items-center justify-center text-white">
                            <span class="text-xl">Hero Image / Graphic</span>
                        </div>
                    </div>
                </div>
            </div>
        @endslot
    @endcomponent

    <!-- Features Grid - 3 Columns -->
    @component('showcase::components.showcase-item', [
        'title' => 'Features Grid - Icon Cards',
        'description' => 'Three-column feature grid with icons and descriptions',
        'code' => '<div class="bg-gray-50 dark:bg-gray-900 py-20">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-white mb-4">
                Everything You Need
            </h2>
            <p class="text-xl text-gray-600 dark:text-gray-400 max-w-2xl mx-auto">
                Powerful features to help you build, deploy, and scale your applications.
            </p>
        </div>
        
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white dark:bg-gray-800 p-8 rounded-xl">
                <div class="w-12 h-12 bg-blue-100 dark:bg-blue-900 rounded-lg flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M13 7H7v6h6V7z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-2">Lightning Fast</h3>
                <p class="text-gray-600 dark:text-gray-400">
                    Optimized for speed and performance. Your users will love the experience.
                </p>
            </div>
            
            <div class="bg-white dark:bg-gray-800 p-8 rounded-xl">
                <div class="w-12 h-12 bg-green-100 dark:bg-green-900 rounded-lg flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-2">Secure by Default</h3>
                <p class="text-gray-600 dark:text-gray-400">
                    Enterprise-grade security built into every layer of the stack.
                </p>
            </div>
            
            <div class="bg-white dark:bg-gray-800 p-8 rounded-xl">
                <div class="w-12 h-12 bg-purple-100 dark:bg-purple-900 rounded-lg flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 3.5a1.5 1.5 0 013 0V4a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-.5a1.5 1.5 0 000 3h.5a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-.5a1.5 1.5 0 00-3 0v.5a1 1 0 01-1 1H6a1 1 0 01-1-1v-3a1 1 0 00-1-1h-.5a1.5 1.5 0 010-3H4a1 1 0 001-1V6a1 1 0 011-1h3a1 1 0 001-1v-.5z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-2">Fully Customizable</h3>
                <p class="text-gray-600 dark:text-gray-400">
                    Adapt every component to match your brand and requirements.
                </p>
            </div>
        </div>
    </div>
</div>'
    ])
        @slot('preview')
            <div class="bg-gray-50 dark:bg-gray-900 py-20 rounded-lg">
                <div class="max-w-7xl mx-auto px-6">
                    <div class="text-center mb-16">
                        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-white mb-4">
                            Everything You Need
                        </h2>
                        <p class="text-xl text-gray-600 dark:text-gray-400 max-w-2xl mx-auto">
                            Powerful features to help you build, deploy, and scale your applications.
                        </p>
                    </div>
                    
                    <div class="grid md:grid-cols-3 gap-8">
                        <div class="bg-white dark:bg-gray-800 p-8 rounded-xl shadow-sm">
                            <div class="w-12 h-12 bg-blue-100 dark:bg-blue-900 rounded-lg flex items-center justify-center mb-4">
                                <svg class="w-6 h-6 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M13 7H7v6h6V7z"/>
                                    <path fill-rule="evenodd" d="M7 2a1 1 0 012 0v1h2V2a1 1 0 112 0v1h2a2 2 0 012 2v2h1a1 1 0 110 2h-1v2h1a1 1 0 110 2h-1v2a2 2 0 01-2 2h-2v1a1 1 0 11-2 0v-1H9v1a1 1 0 11-2 0v-1H5a2 2 0 01-2-2v-2H2a1 1 0 110-2h1V9H2a1 1 0 010-2h1V5a2 2 0 012-2h2V2zM5 5h10v10H5V5z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-2">Lightning Fast</h3>
                            <p class="text-gray-600 dark:text-gray-400">
                                Optimized for speed and performance. Your users will love the experience.
                            </p>
                        </div>
                        
                        <div class="bg-white dark:bg-gray-800 p-8 rounded-xl shadow-sm">
                            <div class="w-12 h-12 bg-green-100 dark:bg-green-900 rounded-lg flex items-center justify-center mb-4">
                                <svg class="w-6 h-6 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/>
                                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/>
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-2">Secure by Default</h3>
                            <p class="text-gray-600 dark:text-gray-400">
                                Enterprise-grade security built into every layer of the stack.
                            </p>
                        </div>
                        
                        <div class="bg-white dark:bg-gray-800 p-8 rounded-xl shadow-sm">
                            <div class="w-12 h-12 bg-purple-100 dark:bg-purple-900 rounded-lg flex items-center justify-center mb-4">
                                <svg class="w-6 h-6 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 3.5a1.5 1.5 0 013 0V4a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-.5a1.5 1.5 0 000 3h.5a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-.5a1.5 1.5 0 00-3 0v.5a1 1 0 01-1 1H6a1 1 0 01-1-1v-3a1 1 0 00-1-1h-.5a1.5 1.5 0 010-3H4a1 1 0 001-1V6a1 1 0 011-1h3a1 1 0 001-1v-.5z"/>
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-2">Fully Customizable</h3>
                            <p class="text-gray-600 dark:text-gray-400">
                                Adapt every component to match your brand and requirements.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        @endslot
    @endcomponent

    <!-- Features - Alternating Layout -->
    @component('showcase::components.showcase-item', [
        'title' => 'Features - Alternating Sections',
        'description' => 'Image-left and image-right alternating feature sections',
        'code' => '<div class="bg-white dark:bg-gray-900 py-20">
    <div class="max-w-7xl mx-auto px-6 space-y-20">
        <!-- Feature 1 - Image Left -->
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div class="bg-gradient-to-br from-blue-500 to-cyan-500 rounded-2xl h-80 flex items-center justify-center text-white">
                <span class="text-xl">Feature Image</span>
            </div>
            <div>
                <h3 class="text-3xl font-bold text-gray-900 dark:text-white mb-4">
                    Collaborate in Real-Time
                </h3>
                <p class="text-lg text-gray-600 dark:text-gray-400 mb-6">
                    Work together with your team seamlessly. See changes as they happen and ship faster.
                </p>
                <ul class="space-y-3">
                    <li class="flex items-start gap-3">
                        <svg class="w-6 h-6 text-green-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/>
                        </svg>
                        <span class="text-gray-700 dark:text-gray-300">Live cursor tracking</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <svg class="w-6 h-6 text-green-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/>
                        </svg>
                        <span class="text-gray-700 dark:text-gray-300">Instant sync across devices</span>
                    </li>
                </ul>
            </div>
        </div>
        
        <!-- Feature 2 - Image Right -->
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div class="md:order-2">
                <div class="bg-gradient-to-br from-purple-500 to-pink-500 rounded-2xl h-80 flex items-center justify-center text-white">
                    <span class="text-xl">Feature Image</span>
                </div>
            </div>
            <div class="md:order-1">
                <h3 class="text-3xl font-bold text-gray-900 dark:text-white mb-4">
                    Powerful Analytics
                </h3>
                <p class="text-lg text-gray-600 dark:text-gray-400 mb-6">
                    Get insights into how your users interact with your product. Make data-driven decisions.
                </p>
                <ul class="space-y-3">
                    <li class="flex items-start gap-3">
                        <svg class="w-6 h-6 text-green-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/>
                        </svg>
                        <span class="text-gray-700 dark:text-gray-300">Custom dashboards</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <svg class="w-6 h-6 text-green-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/>
                        </svg>
                        <span class="text-gray-700 dark:text-gray-300">Export to CSV/PDF</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>'
    ])
        @slot('preview')
            <div class="bg-white dark:bg-gray-900 py-12 rounded-lg">
                <div class="max-w-7xl mx-auto px-6 space-y-16">
                    <!-- Feature 1 - Image Left -->
                    <div class="grid md:grid-cols-2 gap-8 items-center">
                        <div class="bg-gradient-to-br from-blue-500 to-cyan-500 rounded-2xl h-64 flex items-center justify-center text-white">
                            <span class="text-xl">Feature Image</span>
                        </div>
                        <div>
                            <h3 class="text-2xl md:text-3xl font-bold text-gray-900 dark:text-white mb-4">
                                Collaborate in Real-Time
                            </h3>
                            <p class="text-lg text-gray-600 dark:text-gray-400 mb-6">
                                Work together with your team seamlessly. See changes as they happen and ship faster.
                            </p>
                            <ul class="space-y-3">
                                <li class="flex items-start gap-3">
                                    <svg class="w-6 h-6 text-green-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/>
                                    </svg>
                                    <span class="text-gray-700 dark:text-gray-300">Live cursor tracking</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <svg class="w-6 h-6 text-green-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/>
                                    </svg>
                                    <span class="text-gray-700 dark:text-gray-300">Instant sync across devices</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                    <!-- Feature 2 - Image Right -->
                    <div class="grid md:grid-cols-2 gap-8 items-center">
                        <div class="md:order-2">
                            <div class="bg-gradient-to-br from-purple-500 to-pink-500 rounded-2xl h-64 flex items-center justify-center text-white">
                                <span class="text-xl">Feature Image</span>
                            </div>
                        </div>
                        <div class="md:order-1">
                            <h3 class="text-2xl md:text-3xl font-bold text-gray-900 dark:text-white mb-4">
                                Powerful Analytics
                            </h3>
                            <p class="text-lg text-gray-600 dark:text-gray-400 mb-6">
                                Get insights into how your users interact with your product. Make data-driven decisions.
                            </p>
                            <ul class="space-y-3">
                                <li class="flex items-start gap-3">
                                    <svg class="w-6 h-6 text-green-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/>
                                    </svg>
                                    <span class="text-gray-700 dark:text-gray-300">Custom dashboards</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <svg class="w-6 h-6 text-green-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/>
                                    </svg>
                                    <span class="text-gray-700 dark:text-gray-300">Export to CSV/PDF</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        @endslot
    @endcomponent

    <!-- CTA Section - Simple -->
    @component('showcase::components.showcase-item', [
        'title' => 'Call-to-Action Section',
        'description' => 'Simple CTA banner with headline and action button',
        'code' => '<div class="bg-blue-600">
    <div class="max-w-7xl mx-auto px-6 py-16 text-center">
        <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">
            Ready to Get Started?
        </h2>
        <p class="text-xl text-blue-100 mb-8 max-w-2xl mx-auto">
            Join thousands of developers building better products with our platform.
        </p>
        <button class="px-8 py-3 bg-white text-blue-600 rounded-lg font-semibold hover:bg-gray-100">
            Start Your Free Trial
        </button>
    </div>
</div>'
    ])
        @slot('preview')
            <div class="bg-blue-600 rounded-lg">
                <div class="max-w-7xl mx-auto px-6 py-16 text-center">
                    <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">
                        Ready to Get Started?
                    </h2>
                    <p class="text-xl text-blue-100 mb-8 max-w-2xl mx-auto">
                        Join thousands of developers building better products with our platform.
                    </p>
                    <button class="px-8 py-3 bg-white text-blue-600 rounded-lg font-semibold hover:bg-gray-100 transition">
                        Start Your Free Trial
                    </button>
                </div>
            </div>
        @endslot
    @endcomponent

</div>
@endsection
