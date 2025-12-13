@extends('showcase::layouts.showcase')

@section('page-title', 'Landing Page - Pricing & Social Proof')
@section('page-description', 'Pricing tables, testimonials, logos, and trust indicators')

@section('content')
<div class="max-w-7xl mx-auto space-y-8">

    <!-- Pricing Table - 3 Tiers -->
    @component('showcase::components.showcase-item', [
        'title' => 'Pricing Table with Toggle',
        'description' => 'Three-tier pricing with monthly/yearly toggle and highlighted popular plan',
        'code' => '<div x-data="{ billing: &#39;monthly&#39; }" class="bg-gray-50 dark:bg-gray-900 py-20">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold text-gray-900 dark:text-white mb-4">Simple, Transparent Pricing</h2>
            <p class="text-xl text-gray-600 dark:text-gray-400">Choose the plan that fits your needs</p>
            
            <div class="flex items-center justify-center gap-3 mt-8">
                <span :class="billing === &#39;monthly&#39; ? &#39;text-gray-900 dark:text-white&#39; : &#39;text-gray-500&#39;">Monthly</span>
                <button &#64;click="billing = billing === &#39;monthly&#39; ? &#39;yearly&#39; : &#39;monthly&#39;" 
                    class="relative w-14 h-7 bg-blue-600 rounded-full transition">
                    <span class="absolute top-1 left-1 w-5 h-5 bg-white rounded-full transition-transform" 
                        :class="billing === &#39;yearly&#39; ? &#39;translate-x-7&#39; : &#39;&#39;"></span>
                </button>
                <span :class="billing === &#39;yearly&#39; ? &#39;text-gray-900 dark:text-white&#39; : &#39;text-gray-500&#39;">
                    Yearly <span class="text-green-600">Save 20%</span>
                </span>
            </div>
        </div>
        
        <div class="grid md:grid-cols-3 gap-8">
            <!-- Starter Plan -->
            <div class="bg-white dark:bg-gray-800 rounded-2xl p-8 border border-gray-200 dark:border-gray-700">
                <h3 class="text-xl font-semibold mb-2">Starter</h3>
                <p class="text-gray-600 dark:text-gray-400 mb-6">Perfect for side projects</p>
                <div class="mb-6">
                    <span class="text-4xl font-bold" x-text="billing === &#39;monthly&#39; ? &#39;$9&#39; : &#39;$7&#39;"></span>
                    <span class="text-gray-600 dark:text-gray-400">/month</span>
                </div>
                <ul class="space-y-3 mb-8">
                    <li class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/>
                        </svg>
                        <span class="text-gray-700 dark:text-gray-300">5 Projects</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/>
                        </svg>
                        <span class="text-gray-700 dark:text-gray-300">10GB Storage</span>
                    </li>
                </ul>
                <button class="w-full py-3 border border-gray-300 dark:border-gray-600 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-700">
                    Get Started
                </button>
            </div>
            
            <!-- Pro Plan (Popular) -->
            <div class="bg-blue-600 text-white rounded-2xl p-8 shadow-xl relative transform scale-105">
                <div class="absolute -top-4 left-1/2 -translate-x-1/2 bg-yellow-400 text-gray-900 px-4 py-1 rounded-full text-sm font-semibold">
                    Popular
                </div>
                <h3 class="text-xl font-semibold mb-2">Pro</h3>
                <p class="text-blue-100 mb-6">For professional teams</p>
                <div class="mb-6">
                    <span class="text-4xl font-bold" x-text="billing === &#39;monthly&#39; ? &#39;$29&#39; : &#39;$23&#39;"></span>
                    <span class="text-blue-100">/month</span>
                </div>
                <ul class="space-y-3 mb-8">
                    <li class="flex items-center gap-2">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/>
                        </svg>
                        <span>Unlimited Projects</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/>
                        </svg>
                        <span>100GB Storage</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/>
                        </svg>
                        <span>Priority Support</span>
                    </li>
                </ul>
                <button class="w-full py-3 bg-white text-blue-600 rounded-lg font-semibold hover:bg-gray-100">
                    Get Started
                </button>
            </div>
            
            <!-- Enterprise Plan -->
            <div class="bg-white dark:bg-gray-800 rounded-2xl p-8 border border-gray-200 dark:border-gray-700">
                <h3 class="text-xl font-semibold mb-2">Enterprise</h3>
                <p class="text-gray-600 dark:text-gray-400 mb-6">For large organizations</p>
                <div class="mb-6">
                    <span class="text-4xl font-bold">Custom</span>
                </div>
                <ul class="space-y-3 mb-8">
                    <li class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/>
                        </svg>
                        <span class="text-gray-700 dark:text-gray-300">Everything in Pro</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/>
                        </svg>
                        <span class="text-gray-700 dark:text-gray-300">Dedicated Support</span>
                    </li>
                </ul>
                <button class="w-full py-3 border border-gray-300 dark:border-gray-600 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-700">
                    Contact Sales
                </button>
            </div>
        </div>
    </div>
</div>'
    ])
        @slot('preview', null, [])
            <div x-data="{ billing: 'monthly' }" class="bg-gray-50 dark:bg-gray-900 py-12 rounded-lg">
                <div class="max-w-7xl mx-auto px-6">
                    <div class="text-center mb-12">
                        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-white mb-4">Simple, Transparent Pricing</h2>
                        <p class="text-lg md:text-xl text-gray-600 dark:text-gray-400">Choose the plan that fits your needs</p>
                        
                        <div class="flex items-center justify-center gap-3 mt-8">
                            <span :class="billing === 'monthly' ? 'text-gray-900 dark:text-white font-medium' : 'text-gray-500'">Monthly</span>
                            <button @click="billing = billing === 'monthly' ? 'yearly' : 'monthly'" 
                                class="relative w-14 h-7 bg-blue-600 rounded-full transition">
                                <span class="absolute top-1 left-1 w-5 h-5 bg-white rounded-full transition-transform" 
                                    :class="billing === 'yearly' ? 'translate-x-7' : ''"></span>
                            </button>
                            <span :class="billing === 'yearly' ? 'text-gray-900 dark:text-white font-medium' : 'text-gray-500'">
                                Yearly <span class="text-green-600 dark:text-green-400 font-semibold">Save 20%</span>
                            </span>
                        </div>
                    </div>
                    
                    <div class="grid md:grid-cols-3 gap-6">
                        <!-- Starter Plan -->
                        <div class="bg-white dark:bg-gray-800 rounded-2xl p-8 border border-gray-200 dark:border-gray-700">
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-2">Starter</h3>
                            <p class="text-gray-600 dark:text-gray-400 mb-6">Perfect for side projects</p>
                            <div class="mb-6">
                                <span class="text-4xl font-bold text-gray-900 dark:text-white" x-text="billing === 'monthly' ? '$9' : '$7'"></span>
                                <span class="text-gray-600 dark:text-gray-400">/month</span>
                            </div>
                            <ul class="space-y-3 mb-8">
                                <li class="flex items-center gap-2">
                                    <svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/>
                                    </svg>
                                    <span class="text-gray-700 dark:text-gray-300">5 Projects</span>
                                </li>
                                <li class="flex items-center gap-2">
                                    <svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/>
                                    </svg>
                                    <span class="text-gray-700 dark:text-gray-300">10GB Storage</span>
                                </li>
                            </ul>
                            <button class="w-full py-3 border border-gray-300 dark:border-gray-600 text-gray-700 dark:text-gray-300 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-700 transition">
                                Get Started
                            </button>
                        </div>
                        
                        <!-- Pro Plan (Popular) -->
                        <div class="bg-blue-600 text-white rounded-2xl p-8 shadow-xl relative md:scale-105">
                            <div class="absolute -top-4 left-1/2 -translate-x-1/2 bg-yellow-400 text-gray-900 px-4 py-1 rounded-full text-sm font-semibold">
                                Popular
                            </div>
                            <h3 class="text-xl font-semibold mb-2">Pro</h3>
                            <p class="text-blue-100 mb-6">For professional teams</p>
                            <div class="mb-6">
                                <span class="text-4xl font-bold" x-text="billing === 'monthly' ? '$29' : '$23'"></span>
                                <span class="text-blue-100">/month</span>
                            </div>
                            <ul class="space-y-3 mb-8">
                                <li class="flex items-center gap-2">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/>
                                    </svg>
                                    <span>Unlimited Projects</span>
                                </li>
                                <li class="flex items-center gap-2">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/>
                                    </svg>
                                    <span>100GB Storage</span>
                                </li>
                                <li class="flex items-center gap-2">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/>
                                    </svg>
                                    <span>Priority Support</span>
                                </li>
                            </ul>
                            <button class="w-full py-3 bg-white text-blue-600 rounded-lg font-semibold hover:bg-gray-100 transition">
                                Get Started
                            </button>
                        </div>
                        
                        <!-- Enterprise Plan -->
                        <div class="bg-white dark:bg-gray-800 rounded-2xl p-8 border border-gray-200 dark:border-gray-700">
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-2">Enterprise</h3>
                            <p class="text-gray-600 dark:text-gray-400 mb-6">For large organizations</p>
                            <div class="mb-6">
                                <span class="text-4xl font-bold text-gray-900 dark:text-white">Custom</span>
                            </div>
                            <ul class="space-y-3 mb-8">
                                <li class="flex items-center gap-2">
                                    <svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/>
                                    </svg>
                                    <span class="text-gray-700 dark:text-gray-300">Everything in Pro</span>
                                </li>
                                <li class="flex items-center gap-2">
                                    <svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/>
                                    </svg>
                                    <span class="text-gray-700 dark:text-gray-300">Dedicated Support</span>
                                </li>
                            </ul>
                            <button class="w-full py-3 border border-gray-300 dark:border-gray-600 text-gray-700 dark:text-gray-300 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-700 transition">
                                Contact Sales
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        @endslot
    @endcomponent

    <!-- Testimonials Carousel -->
    @component('showcase::components.showcase-item', [
        'title' => 'Testimonials Carousel',
        'description' => 'Auto-rotating customer testimonials with ratings and avatars',
        'code' => '<div x-data="{ 
    current: 0,
    testimonials: [
        { name: &#39;Sarah Johnson&#39;, role: &#39;CEO, TechCorp&#39;, text: &#39;This platform transformed how we build products. Highly recommended!&#39;, rating: 5 },
        { name: &#39;Mike Chen&#39;, role: &#39;Developer, StartupXYZ&#39;, text: &#39;Best development experience I&#39;ve had. Everything just works!&#39;, rating: 5 },
        { name: &#39;Emma Davis&#39;, role: &#39;Designer, CreativeStudio&#39;, text: &#39;Beautiful UI components that save hours of development time.&#39;, rating: 5 }
    ],
    next() { this.current = (this.current + 1) % this.testimonials.length; },
    prev() { this.current = this.current === 0 ? this.testimonials.length - 1 : this.current - 1; }
}" x-init="setInterval(() => next(), 5000)" class="bg-gray-50 dark:bg-gray-900 py-20">
    <div class="max-w-4xl mx-auto px-6 text-center">
        <h2 class="text-3xl font-bold text-gray-900 dark:text-white mb-12">What Our Customers Say</h2>
        
        <div class="relative">
            <template x-for="(testimonial, index) in testimonials" :key="index">
                <div x-show="current === index" x-transition class="bg-white dark:bg-gray-800 rounded-2xl p-12 shadow-lg">
                    <div class="flex justify-center mb-4">
                        <template x-for="i in 5" :key="i">
                            <svg class="w-6 h-6 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                        </template>
                    </div>
                    <p class="text-xl text-gray-700 dark:text-gray-300 mb-6" x-text="testimonial.text"></p>
                    <div class="flex items-center justify-center gap-3">
                        <div class="w-12 h-12 bg-blue-600 rounded-full flex items-center justify-center text-white font-semibold">
                            <span x-text="testimonial.name.charAt(0)"></span>
                        </div>
                        <div class="text-left">
                            <p class="font-semibold text-gray-900 dark:text-white" x-text="testimonial.name"></p>
                            <p class="text-sm text-gray-600 dark:text-gray-400" x-text="testimonial.role"></p>
                        </div>
                    </div>
                </div>
            </template>
            
            <button &#64;click="prev()" class="absolute left-0 top-1/2 -translate-y-1/2 -translate-x-12 w-10 h-10 bg-white dark:bg-gray-800 rounded-full shadow-lg">
                <svg class="w-6 h-6 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                </svg>
            </button>
            <button &#64;click="next()" class="absolute right-0 top-1/2 -translate-y-1/2 translate-x-12 w-10 h-10 bg-white dark:bg-gray-800 rounded-full shadow-lg">
                <svg class="w-6 h-6 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>
            </button>
        </div>
        
        <div class="flex justify-center gap-2 mt-8">
            <template x-for="(testimonial, index) in testimonials" :key="index">
                <button &#64;click="current = index" 
                    class="w-2 h-2 rounded-full transition"
                    :class="current === index ? &#39;bg-blue-600 w-8&#39; : &#39;bg-gray-300&#39;"></button>
            </template>
        </div>
    </div>
</div>'
    ])
        @slot('preview', null, [])
            <div x-data="{ 
                current: 0,
                testimonials: [
                    { name: 'Sarah Johnson', role: 'CEO, TechCorp', text: 'This platform transformed how we build products. Highly recommended!', rating: 5 },
                    { name: 'Mike Chen', role: 'Developer, StartupXYZ', text: 'Best development experience I\'ve had. Everything just works!', rating: 5 },
                    { name: 'Emma Davis', role: 'Designer, CreativeStudio', text: 'Beautiful UI components that save hours of development time.', rating: 5 }
                ],
                next() { this.current = (this.current + 1) % this.testimonials.length; },
                prev() { this.current = this.current === 0 ? this.testimonials.length - 1 : this.current - 1; }
            }" x-init="setInterval(() => next(), 5000)" class="bg-gray-50 dark:bg-gray-900 py-12 rounded-lg">
                <div class="max-w-4xl mx-auto px-6 text-center">
                    <h2 class="text-3xl font-bold text-gray-900 dark:text-white mb-12">What Our Customers Say</h2>
                    
                    <div class="relative px-12">
                        <template x-for="(testimonial, index) in testimonials" :key="index">
                            <div x-show="current === index" x-transition class="bg-white dark:bg-gray-800 rounded-2xl p-8 md:p-12 shadow-lg">
                                <div class="flex justify-center mb-4">
                                    <template x-for="i in 5" :key="i">
                                        <svg class="w-6 h-6 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                        </svg>
                                    </template>
                                </div>
                                <p class="text-lg md:text-xl text-gray-700 dark:text-gray-300 mb-6" x-text="testimonial.text"></p>
                                <div class="flex items-center justify-center gap-3">
                                    <div class="w-12 h-12 bg-blue-600 rounded-full flex items-center justify-center text-white font-semibold text-lg">
                                        <span x-text="testimonial.name.charAt(0)"></span>
                                    </div>
                                    <div class="text-left">
                                        <p class="font-semibold text-gray-900 dark:text-white" x-text="testimonial.name"></p>
                                        <p class="text-sm text-gray-600 dark:text-gray-400" x-text="testimonial.role"></p>
                                    </div>
                                </div>
                            </div>
                        </template>
                        
                        <button @click="prev()" class="absolute left-0 top-1/2 -translate-y-1/2 w-10 h-10 bg-white dark:bg-gray-800 rounded-full shadow-lg hover:bg-gray-50 dark:hover:bg-gray-700 transition">
                            <svg class="w-6 h-6 mx-auto text-gray-600 dark:text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                            </svg>
                        </button>
                        <button @click="next()" class="absolute right-0 top-1/2 -translate-y-1/2 w-10 h-10 bg-white dark:bg-gray-800 rounded-full shadow-lg hover:bg-gray-50 dark:hover:bg-gray-700 transition">
                            <svg class="w-6 h-6 mx-auto text-gray-600 dark:text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </button>
                    </div>
                    
                    <div class="flex justify-center gap-2 mt-8">
                        <template x-for="(testimonial, index) in testimonials" :key="index">
                            <button @click="current = index" 
                                class="h-2 rounded-full transition"
                                :class="current === index ? 'bg-blue-600 w-8' : 'bg-gray-300 dark:bg-gray-600 w-2'"></button>
                        </template>
                    </div>
                </div>
            </div>
        @endslot
    @endcomponent

    <!-- Logo Cloud -->
    @component('showcase::components.showcase-item', [
        'title' => 'Logo Cloud - Trusted By',
        'description' => 'Customer/partner logos in grayscale grid',
        'code' => '<div class="bg-white dark:bg-gray-900 py-16">
    <div class="max-w-7xl mx-auto px-6">
        <p class="text-center text-gray-600 dark:text-gray-400 mb-8">Trusted by leading companies</p>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 items-center opacity-50">
            <div class="h-12 bg-gray-300 dark:bg-gray-700 rounded flex items-center justify-center">
                <span class="text-gray-600 dark:text-gray-400 font-semibold">Company 1</span>
            </div>
            <div class="h-12 bg-gray-300 dark:bg-gray-700 rounded flex items-center justify-center">
                <span class="text-gray-600 dark:text-gray-400 font-semibold">Company 2</span>
            </div>
            <div class="h-12 bg-gray-300 dark:bg-gray-700 rounded flex items-center justify-center">
                <span class="text-gray-600 dark:text-gray-400 font-semibold">Company 3</span>
            </div>
            <div class="h-12 bg-gray-300 dark:bg-gray-700 rounded flex items-center justify-center">
                <span class="text-gray-600 dark:text-gray-400 font-semibold">Company 4</span>
            </div>
        </div>
    </div>
</div>'
    ])
        @slot('preview', null, [])
            <div class="bg-white dark:bg-gray-900 py-12 rounded-lg">
                <div class="max-w-7xl mx-auto px-6">
                    <p class="text-center text-gray-600 dark:text-gray-400 mb-8 font-medium">Trusted by leading companies</p>
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-8 items-center">
                        <div class="h-12 bg-gray-300 dark:bg-gray-700 rounded flex items-center justify-center opacity-60 hover:opacity-100 transition">
                            <span class="text-gray-600 dark:text-gray-400 font-semibold">Company 1</span>
                        </div>
                        <div class="h-12 bg-gray-300 dark:bg-gray-700 rounded flex items-center justify-center opacity-60 hover:opacity-100 transition">
                            <span class="text-gray-600 dark:text-gray-400 font-semibold">Company 2</span>
                        </div>
                        <div class="h-12 bg-gray-300 dark:bg-gray-700 rounded flex items-center justify-center opacity-60 hover:opacity-100 transition">
                            <span class="text-gray-600 dark:text-gray-400 font-semibold">Company 3</span>
                        </div>
                        <div class="h-12 bg-gray-300 dark:bg-gray-700 rounded flex items-center justify-center opacity-60 hover:opacity-100 transition">
                            <span class="text-gray-600 dark:text-gray-400 font-semibold">Company 4</span>
                        </div>
                    </div>
                </div>
            </div>
        @endslot
    @endcomponent

    <!-- Stats Section -->
    @component('showcase::components.showcase-item', [
        'title' => 'Stats/Metrics Section',
        'description' => 'Animated counters showing key metrics and achievements',
        'code' => '<div class="bg-blue-600 py-20">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid md:grid-cols-4 gap-8 text-center text-white">
            <div x-data="{ count: 0 }" x-init="setInterval(() => { if (count < 50) count++; }, 50)">
                <div class="text-5xl font-bold mb-2">
                    <span x-text="count + &#39;K+&#39;"></span>
                </div>
                <p class="text-blue-100">Active Users</p>
            </div>
            
            <div x-data="{ count: 0 }" x-init="setInterval(() => { if (count < 99) count++; }, 30)">
                <div class="text-5xl font-bold mb-2">
                    <span x-text="count + &#39;%&#39;"></span>
                </div>
                <p class="text-blue-100">Customer Satisfaction</p>
            </div>
            
            <div x-data="{ count: 0 }" x-init="setInterval(() => { if (count < 24) count++; }, 100)">
                <div class="text-5xl font-bold mb-2">
                    <span x-text="count + &#39;/7&#39;"></span>
                </div>
                <p class="text-blue-100">Support Available</p>
            </div>
            
            <div x-data="{ count: 0 }" x-init="setInterval(() => { if (count < 200) count += 5; }, 30)">
                <div class="text-5xl font-bold mb-2">
                    <span x-text="count + &#39;+&#39;"></span>
                </div>
                <p class="text-blue-100">Countries Served</p>
            </div>
        </div>
    </div>
</div>'
    ])
        @slot('preview', null, [])
            <div class="bg-blue-600 py-16 rounded-lg">
                <div class="max-w-7xl mx-auto px-6">
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center text-white">
                        <div x-data="{ count: 0 }" x-init="setInterval(() => { if (count < 50) count++; }, 50)">
                            <div class="text-4xl md:text-5xl font-bold mb-2">
                                <span x-text="count + 'K+'"></span>
                            </div>
                            <p class="text-blue-100">Active Users</p>
                        </div>
                        
                        <div x-data="{ count: 0 }" x-init="setInterval(() => { if (count < 99) count++; }, 30)">
                            <div class="text-4xl md:text-5xl font-bold mb-2">
                                <span x-text="count + '%'"></span>
                            </div>
                            <p class="text-blue-100">Customer Satisfaction</p>
                        </div>
                        
                        <div x-data="{ count: 0 }" x-init="setInterval(() => { if (count < 24) count++; }, 100)">
                            <div class="text-4xl md:text-5xl font-bold mb-2">
                                <span x-text="count + '/7'"></span>
                            </div>
                            <p class="text-blue-100">Support Available</p>
                        </div>
                        
                        <div x-data="{ count: 0 }" x-init="setInterval(() => { if (count < 200) count += 5; }, 30)">
                            <div class="text-4xl md:text-5xl font-bold mb-2">
                                <span x-text="count + '+'"></span>
                            </div>
                            <p class="text-blue-100">Countries Served</p>
                        </div>
                    </div>
                </div>
            </div>
        @endslot
    @endcomponent

</div>
@endsection
