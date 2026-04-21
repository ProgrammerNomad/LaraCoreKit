@extends('showcase::components.component-layout')

@section('demo')
<section class="relative bg-gradient-to-br from-indigo-900 via-blue-900 to-purple-900 rounded-xl overflow-hidden py-16 px-8 text-center">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-10 left-10 w-32 h-32 bg-white rounded-full blur-3xl"></div>
        <div class="absolute bottom-10 right-10 w-48 h-48 bg-purple-300 rounded-full blur-3xl"></div>
    </div>
    <div class="relative">
        <span class="inline-block px-4 py-1.5 mb-6 text-xs font-semibold text-blue-300 bg-blue-900/50 border border-blue-700 rounded-full uppercase tracking-wider">🚀 New Release</span>
        <h1 class="text-4xl md:text-5xl font-bold text-white mb-6 leading-tight">
            Build Faster with<br><span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-purple-400">LaraCoreKit</span>
        </h1>
        <p class="text-lg text-blue-200 mb-8 max-w-xl mx-auto">The ultimate Laravel starter kit with 100+ pre-built Tailwind CSS components, dark mode, and Alpine.js interactivity.</p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="#" class="px-8 py-3 bg-blue-600 hover:bg-blue-500 text-white font-semibold rounded-full transition shadow-lg shadow-blue-900/50">Get Started Free</a>
            <a href="#" class="px-8 py-3 border border-white/30 hover:border-white/60 text-white font-semibold rounded-full transition backdrop-blur-sm">View Demo →</a>
        </div>
        <p class="mt-6 text-sm text-blue-300/70">No credit card required • Free forever plan</p>
    </div>
</section>
@endsection

@section('code')
<section class="relative bg-gradient-to-br from-indigo-900 via-blue-900 to-purple-900 py-16 px-8 text-center">
    <h1 class="text-4xl font-bold text-white mb-6">Your Hero Headline</h1>
    <p class="text-lg text-blue-200 mb-8 max-w-xl mx-auto">Your compelling hero description goes here.</p>
    <div class="flex gap-4 justify-center">
        <a href="#" class="px-8 py-3 bg-blue-600 hover:bg-blue-500 text-white font-semibold rounded-full transition">Get Started</a>
        <a href="#" class="px-8 py-3 border border-white/30 hover:border-white/60 text-white font-semibold rounded-full transition">Learn More</a>
    </div>
</section>
@endsection
