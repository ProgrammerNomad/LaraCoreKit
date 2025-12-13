@extends('showcase::layouts.showcase')

@section('page-title', 'Landing Page - Content & Footer')
@section('page-description', 'FAQ, newsletter, contact forms, team cards, and footer sections')

@section('content')
<div class="max-w-7xl mx-auto space-y-8">

    <!-- FAQ Accordion -->
    @component('showcase::components.showcase-item', [
        'title' => 'FAQ Accordion',
        'description' => 'Expandable frequently asked questions with smooth transitions',
        'code' => '<div x-data="{ open: null }" class="bg-white dark:bg-gray-900 py-20">
    <div class="max-w-3xl mx-auto px-6">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold text-gray-900 dark:text-white mb-4">Frequently Asked Questions</h2>
            <p class="text-xl text-gray-600 dark:text-gray-400">Everything you need to know</p>
        </div>
        
        <div class="space-y-4">
            <div class="border border-gray-200 dark:border-gray-700 rounded-lg">
                <button &#64;click="open = open === 1 ? null : 1" 
                    class="w-full px-6 py-4 text-left flex justify-between items-center hover:bg-gray-50 dark:hover:bg-gray-800">
                    <span class="font-semibold text-gray-900 dark:text-white">How does the pricing work?</span>
                    <svg class="w-5 h-5 transition-transform" :class="open === 1 ? &#39;rotate-180&#39; : &#39;&#39;" 
                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div x-show="open === 1" x-collapse class="px-6 pb-4">
                    <p class="text-gray-600 dark:text-gray-400">
                        We offer flexible monthly and yearly plans. You can start with our free tier and upgrade anytime.
                    </p>
                </div>
            </div>
            
            <div class="border border-gray-200 dark:border-gray-700 rounded-lg">
                <button &#64;click="open = open === 2 ? null : 2" 
                    class="w-full px-6 py-4 text-left flex justify-between items-center hover:bg-gray-50 dark:hover:bg-gray-800">
                    <span class="font-semibold text-gray-900 dark:text-white">Can I cancel anytime?</span>
                    <svg class="w-5 h-5 transition-transform" :class="open === 2 ? &#39;rotate-180&#39; : &#39;&#39;" 
                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div x-show="open === 2" x-collapse class="px-6 pb-4">
                    <p class="text-gray-600 dark:text-gray-400">
                        Yes! You can cancel your subscription at any time with no penalties or fees.
                    </p>
                </div>
            </div>
            
            <div class="border border-gray-200 dark:border-gray-700 rounded-lg">
                <button &#64;click="open = open === 3 ? null : 3" 
                    class="w-full px-6 py-4 text-left flex justify-between items-center hover:bg-gray-50 dark:hover:bg-gray-800">
                    <span class="font-semibold text-gray-900 dark:text-white">What kind of support do you offer?</span>
                    <svg class="w-5 h-5 transition-transform" :class="open === 3 ? &#39;rotate-180&#39; : &#39;&#39;" 
                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div x-show="open === 3" x-collapse class="px-6 pb-4">
                    <p class="text-gray-600 dark:text-gray-400">
                        All plans include email support. Pro and Enterprise plans get priority support and dedicated account managers.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>'
    ])
        @slot('preview')
            <div x-data="{ open: null }" class="bg-white dark:bg-gray-900 py-12 rounded-lg">
                <div class="max-w-3xl mx-auto px-6">
                    <div class="text-center mb-12">
                        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-white mb-4">Frequently Asked Questions</h2>
                        <p class="text-lg md:text-xl text-gray-600 dark:text-gray-400">Everything you need to know</p>
                    </div>
                    
                    <div class="space-y-4">
                        <div class="border border-gray-200 dark:border-gray-700 rounded-lg overflow-hidden">
                            <button @click="open = open === 1 ? null : 1" 
                                class="w-full px-6 py-4 text-left flex justify-between items-center hover:bg-gray-50 dark:hover:bg-gray-800 transition">
                                <span class="font-semibold text-gray-900 dark:text-white">How does the pricing work?</span>
                                <svg class="w-5 h-5 transition-transform text-gray-600 dark:text-gray-400" :class="open === 1 ? 'rotate-180' : ''" 
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                                </svg>
                            </button>
                            <div x-show="open === 1" x-collapse class="px-6 pb-4">
                                <p class="text-gray-600 dark:text-gray-400">
                                    We offer flexible monthly and yearly plans. You can start with our free tier and upgrade anytime.
                                </p>
                            </div>
                        </div>
                        
                        <div class="border border-gray-200 dark:border-gray-700 rounded-lg overflow-hidden">
                            <button @click="open = open === 2 ? null : 2" 
                                class="w-full px-6 py-4 text-left flex justify-between items-center hover:bg-gray-50 dark:hover:bg-gray-800 transition">
                                <span class="font-semibold text-gray-900 dark:text-white">Can I cancel anytime?</span>
                                <svg class="w-5 h-5 transition-transform text-gray-600 dark:text-gray-400" :class="open === 2 ? 'rotate-180' : ''" 
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                                </svg>
                            </button>
                            <div x-show="open === 2" x-collapse class="px-6 pb-4" style="display: none;">
                                <p class="text-gray-600 dark:text-gray-400">
                                    Yes! You can cancel your subscription at any time with no penalties or fees.
                                </p>
                            </div>
                        </div>
                        
                        <div class="border border-gray-200 dark:border-gray-700 rounded-lg overflow-hidden">
                            <button @click="open = open === 3 ? null : 3" 
                                class="w-full px-6 py-4 text-left flex justify-between items-center hover:bg-gray-50 dark:hover:bg-gray-800 transition">
                                <span class="font-semibold text-gray-900 dark:text-white">What kind of support do you offer?</span>
                                <svg class="w-5 h-5 transition-transform text-gray-600 dark:text-gray-400" :class="open === 3 ? 'rotate-180' : ''" 
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                                </svg>
                            </button>
                            <div x-show="open === 3" x-collapse class="px-6 pb-4" style="display: none;">
                                <p class="text-gray-600 dark:text-gray-400">
                                    All plans include email support. Pro and Enterprise plans get priority support and dedicated account managers.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endslot
    @endcomponent

    <!-- Newsletter Signup -->
    @component('showcase::components.showcase-item', [
        'title' => 'Newsletter Signup',
        'description' => 'Email capture form with validation and success state',
        'code' => '<div class="bg-gradient-to-r from-blue-600 to-purple-600 py-16">
    <div class="max-w-3xl mx-auto px-6 text-center">
        <h2 class="text-3xl font-bold text-white mb-4">Subscribe to Our Newsletter</h2>
        <p class="text-xl text-blue-100 mb-8">
            Get the latest updates, articles, and resources delivered weekly to your inbox.
        </p>
        
        <form x-data="{ email: &#39;&#39;, subscribed: false }" 
            &#64;submit.prevent="subscribed = true" 
            class="flex flex-col sm:flex-row gap-4 max-w-md mx-auto">
            <input type="email" x-model="email" required 
                placeholder="Enter your email"
                class="flex-1 px-4 py-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-white">
            <button type="submit" 
                class="px-6 py-3 bg-white text-blue-600 font-semibold rounded-lg hover:bg-gray-100">
                Subscribe
            </button>
        </form>
        
        <p class="text-sm text-blue-100 mt-4">
            We respect your privacy. Unsubscribe at any time.
        </p>
    </div>
</div>'
    ])
        @slot('preview')
            <div class="bg-gradient-to-r from-blue-600 to-purple-600 py-12 rounded-lg">
                <div class="max-w-3xl mx-auto px-6 text-center">
                    <h2 class="text-2xl md:text-3xl font-bold text-white mb-4">Subscribe to Our Newsletter</h2>
                    <p class="text-lg md:text-xl text-blue-100 mb-8">
                        Get the latest updates, articles, and resources delivered weekly to your inbox.
                    </p>
                    
                    <form x-data="{ email: '', subscribed: false }" 
                        @submit.prevent="subscribed = true; setTimeout(() => subscribed = false, 3000)" 
                        class="flex flex-col sm:flex-row gap-4 max-w-md mx-auto">
                        <input type="email" x-model="email" required 
                            placeholder="Enter your email"
                            class="flex-1 px-4 py-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-white text-gray-900">
                        <button type="submit" 
                            class="px-6 py-3 bg-white text-blue-600 font-semibold rounded-lg hover:bg-gray-100 transition">
                            <span x-show="!subscribed">Subscribe</span>
                            <span x-show="subscribed" style="display: none;">Subscribed! ✓</span>
                        </button>
                    </form>
                    
                    <p class="text-sm text-blue-100 mt-4">
                        We respect your privacy. Unsubscribe at any time.
                    </p>
                </div>
            </div>
        @endslot
    @endcomponent

    <!-- Contact Form -->
    @component('showcase::components.showcase-item', [
        'title' => 'Contact Form',
        'description' => 'Full contact form with validation and submit state',
        'code' => '<div class="bg-white dark:bg-gray-900 py-20">
    <div class="max-w-2xl mx-auto px-6">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold text-gray-900 dark:text-white mb-4">Get in Touch</h2>
            <p class="text-xl text-gray-600 dark:text-gray-400">We&#39;d love to hear from you</p>
        </div>
        
        <form x-data="{ sending: false }" 
            &#64;submit.prevent="sending = true; setTimeout(() => sending = false, 2000)"
            class="space-y-6">
            <div class="grid md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Name</label>
                    <input type="text" required
                        class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 dark:bg-gray-800">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Email</label>
                    <input type="email" required
                        class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 dark:bg-gray-800">
                </div>
            </div>
            
            <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Subject</label>
                <input type="text" required
                    class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 dark:bg-gray-800">
            </div>
            
            <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Message</label>
                <textarea rows="6" required
                    class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 dark:bg-gray-800"></textarea>
            </div>
            
            <button type="submit" :disabled="sending"
                class="w-full bg-blue-600 text-white py-3 rounded-lg font-semibold hover:bg-blue-700 disabled:opacity-50">
                <span x-show="!sending">Send Message</span>
                <span x-show="sending">Sending...</span>
            </button>
        </form>
    </div>
</div>'
    ])
        @slot('preview')
            <div class="bg-white dark:bg-gray-900 py-12 rounded-lg">
                <div class="max-w-2xl mx-auto px-6">
                    <div class="text-center mb-12">
                        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-white mb-4">Get in Touch</h2>
                        <p class="text-lg md:text-xl text-gray-600 dark:text-gray-400">We'd love to hear from you</p>
                    </div>
                    
                    <form x-data="{ sending: false }" 
                        @submit.prevent="sending = true; setTimeout(() => sending = false, 2000)"
                        class="space-y-6">
                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Name</label>
                                <input type="text" required
                                    class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 dark:bg-gray-800 dark:text-white">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Email</label>
                                <input type="email" required
                                    class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 dark:bg-gray-800 dark:text-white">
                            </div>
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Subject</label>
                            <input type="text" required
                                class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 dark:bg-gray-800 dark:text-white">
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Message</label>
                            <textarea rows="6" required
                                class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 dark:bg-gray-800 dark:text-white"></textarea>
                        </div>
                        
                        <button type="submit" :disabled="sending"
                            class="w-full bg-blue-600 text-white py-3 rounded-lg font-semibold hover:bg-blue-700 disabled:opacity-50 transition">
                            <span x-show="!sending">Send Message</span>
                            <span x-show="sending" style="display: none;">Sending...</span>
                        </button>
                    </form>
                </div>
            </div>
        @endslot
    @endcomponent

    <!-- Team Member Cards -->
    @component('showcase::components.showcase-item', [
        'title' => 'Team Member Cards',
        'description' => 'Team grid with profile photos, names, roles, and social links',
        'code' => '<div class="bg-gray-50 dark:bg-gray-900 py-20">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-900 dark:text-white mb-4">Meet Our Team</h2>
            <p class="text-xl text-gray-600 dark:text-gray-400">The people behind our success</p>
        </div>
        
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white dark:bg-gray-800 rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition">
                <div class="h-64 bg-gradient-to-br from-blue-500 to-purple-600 flex items-center justify-center text-white text-6xl font-bold">
                    SJ
                </div>
                <div class="p-6 text-center">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-1">Sarah Johnson</h3>
                    <p class="text-gray-600 dark:text-gray-400 mb-4">CEO & Founder</p>
                    <div class="flex justify-center gap-3">
                        <a href="#" class="text-gray-400 hover:text-blue-600">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/></svg>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-blue-600">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="bg-white dark:bg-gray-800 rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition">
                <div class="h-64 bg-gradient-to-br from-green-500 to-teal-600 flex items-center justify-center text-white text-6xl font-bold">
                    MC
                </div>
                <div class="p-6 text-center">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-1">Mike Chen</h3>
                    <p class="text-gray-600 dark:text-gray-400 mb-4">CTO</p>
                    <div class="flex justify-center gap-3">
                        <a href="#" class="text-gray-400 hover:text-blue-600">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/></svg>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-blue-600">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="bg-white dark:bg-gray-800 rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition">
                <div class="h-64 bg-gradient-to-br from-pink-500 to-rose-600 flex items-center justify-center text-white text-6xl font-bold">
                    ED
                </div>
                <div class="p-6 text-center">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-1">Emma Davis</h3>
                    <p class="text-gray-600 dark:text-gray-400 mb-4">Head of Design</p>
                    <div class="flex justify-center gap-3">
                        <a href="#" class="text-gray-400 hover:text-blue-600">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/></svg>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-blue-600">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>'
    ])
        @slot('preview')
            <div class="bg-gray-50 dark:bg-gray-900 py-12 rounded-lg">
                <div class="max-w-7xl mx-auto px-6">
                    <div class="text-center mb-12">
                        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-white mb-4">Meet Our Team</h2>
                        <p class="text-lg md:text-xl text-gray-600 dark:text-gray-400">The people behind our success</p>
                    </div>
                    
                    <div class="grid md:grid-cols-3 gap-6">
                        <div class="bg-white dark:bg-gray-800 rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition">
                            <div class="h-48 bg-gradient-to-br from-blue-500 to-purple-600 flex items-center justify-center text-white text-5xl font-bold">
                                SJ
                            </div>
                            <div class="p-6 text-center">
                                <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-1">Sarah Johnson</h3>
                                <p class="text-gray-600 dark:text-gray-400 mb-4">CEO & Founder</p>
                                <div class="flex justify-center gap-3">
                                    <a href="#" class="text-gray-400 hover:text-blue-600 transition">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/></svg>
                                    </a>
                                    <a href="#" class="text-gray-400 hover:text-blue-600 transition">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="bg-white dark:bg-gray-800 rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition">
                            <div class="h-48 bg-gradient-to-br from-green-500 to-teal-600 flex items-center justify-center text-white text-5xl font-bold">
                                MC
                            </div>
                            <div class="p-6 text-center">
                                <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-1">Mike Chen</h3>
                                <p class="text-gray-600 dark:text-gray-400 mb-4">CTO</p>
                                <div class="flex justify-center gap-3">
                                    <a href="#" class="text-gray-400 hover:text-blue-600 transition">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/></svg>
                                    </a>
                                    <a href="#" class="text-gray-400 hover:text-blue-600 transition">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="bg-white dark:bg-gray-800 rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition">
                            <div class="h-48 bg-gradient-to-br from-pink-500 to-rose-600 flex items-center justify-center text-white text-5xl font-bold">
                                ED
                            </div>
                            <div class="p-6 text-center">
                                <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-1">Emma Davis</h3>
                                <p class="text-gray-600 dark:text-gray-400 mb-4">Head of Design</p>
                                <div class="flex justify-center gap-3">
                                    <a href="#" class="text-gray-400 hover:text-blue-600 transition">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/></svg>
                                    </a>
                                    <a href="#" class="text-gray-400 hover:text-blue-600 transition">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endslot
    @endcomponent

    <!-- Footer Section -->
    @component('showcase::components.showcase-item', [
        'title' => 'Footer - Multi-Column',
        'description' => 'Comprehensive footer with links, newsletter, and social media',
        'code' => '<footer class="bg-gray-900 text-white py-12">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid md:grid-cols-4 gap-8 mb-8">
            <div>
                <h3 class="text-xl font-bold mb-4">Company</h3>
                <ul class="space-y-2">
                    <li><a href="#" class="text-gray-400 hover:text-white">About Us</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white">Careers</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white">Press</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white">Blog</a></li>
                </ul>
            </div>
            
            <div>
                <h3 class="text-xl font-bold mb-4">Product</h3>
                <ul class="space-y-2">
                    <li><a href="#" class="text-gray-400 hover:text-white">Features</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white">Pricing</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white">Security</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white">Roadmap</a></li>
                </ul>
            </div>
            
            <div>
                <h3 class="text-xl font-bold mb-4">Resources</h3>
                <ul class="space-y-2">
                    <li><a href="#" class="text-gray-400 hover:text-white">Documentation</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white">API Reference</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white">Guides</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white">Community</a></li>
                </ul>
            </div>
            
            <div>
                <h3 class="text-xl font-bold mb-4">Stay Updated</h3>
                <p class="text-gray-400 mb-4">Subscribe to our newsletter</p>
                <form class="flex gap-2">
                    <input type="email" placeholder="Your email" 
                        class="flex-1 px-4 py-2 rounded bg-gray-800 border border-gray-700 focus:ring-2 focus:ring-blue-500">
                    <button class="px-4 py-2 bg-blue-600 rounded hover:bg-blue-700">Subscribe</button>
                </form>
            </div>
        </div>
        
        <div class="border-t border-gray-800 pt-8 flex flex-col md:flex-row justify-between items-center">
            <p class="text-gray-400 text-sm mb-4 md:mb-0">© 2025 YourCompany. All rights reserved.</p>
            <div class="flex gap-6">
                <a href="#" class="text-gray-400 hover:text-white">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/></svg>
                </a>
                <a href="#" class="text-gray-400 hover:text-white">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
                </a>
            </div>
        </div>
    </div>
</footer>'
    ])
        @slot('preview')
            <footer class="bg-gray-900 text-white py-12 rounded-lg">
                <div class="max-w-7xl mx-auto px-6">
                    <div class="grid md:grid-cols-4 gap-8 mb-8">
                        <div>
                            <h3 class="text-xl font-bold mb-4">Company</h3>
                            <ul class="space-y-2">
                                <li><a href="#" class="text-gray-400 hover:text-white transition">About Us</a></li>
                                <li><a href="#" class="text-gray-400 hover:text-white transition">Careers</a></li>
                                <li><a href="#" class="text-gray-400 hover:text-white transition">Press</a></li>
                                <li><a href="#" class="text-gray-400 hover:text-white transition">Blog</a></li>
                            </ul>
                        </div>
                        
                        <div>
                            <h3 class="text-xl font-bold mb-4">Product</h3>
                            <ul class="space-y-2">
                                <li><a href="#" class="text-gray-400 hover:text-white transition">Features</a></li>
                                <li><a href="#" class="text-gray-400 hover:text-white transition">Pricing</a></li>
                                <li><a href="#" class="text-gray-400 hover:text-white transition">Security</a></li>
                                <li><a href="#" class="text-gray-400 hover:text-white transition">Roadmap</a></li>
                            </ul>
                        </div>
                        
                        <div>
                            <h3 class="text-xl font-bold mb-4">Resources</h3>
                            <ul class="space-y-2">
                                <li><a href="#" class="text-gray-400 hover:text-white transition">Documentation</a></li>
                                <li><a href="#" class="text-gray-400 hover:text-white transition">API Reference</a></li>
                                <li><a href="#" class="text-gray-400 hover:text-white transition">Guides</a></li>
                                <li><a href="#" class="text-gray-400 hover:text-white transition">Community</a></li>
                            </ul>
                        </div>
                        
                        <div>
                            <h3 class="text-xl font-bold mb-4">Stay Updated</h3>
                            <p class="text-gray-400 mb-4 text-sm">Subscribe to our newsletter</p>
                            <form class="flex flex-col sm:flex-row gap-2">
                                <input type="email" placeholder="Your email" 
                                    class="flex-1 px-4 py-2 rounded bg-gray-800 border border-gray-700 focus:ring-2 focus:ring-blue-500 text-white">
                                <button class="px-4 py-2 bg-blue-600 rounded hover:bg-blue-700 transition whitespace-nowrap">Subscribe</button>
                            </form>
                        </div>
                    </div>
                    
                    <div class="border-t border-gray-800 pt-8 flex flex-col md:flex-row justify-between items-center gap-4">
                        <p class="text-gray-400 text-sm">© 2025 YourCompany. All rights reserved.</p>
                        <div class="flex gap-6">
                            <a href="#" class="text-gray-400 hover:text-white transition">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/></svg>
                            </a>
                            <a href="#" class="text-gray-400 hover:text-white transition">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
                            </a>
                        </div>
                    </div>
                </div>
            </footer>
        @endslot
    @endcomponent

</div>
@endsection
