@extends('showcase::components.component-layout')

@section('demo')
<div class="grid grid-cols-1 md:grid-cols-3 gap-8">
    <div class="relative bg-white dark:bg-gray-800 rounded-2xl shadow-lg p-8 border border-gray-200 dark:border-gray-700">
        <div class="text-sm font-semibold text-gray-500 dark:text-gray-400 uppercase tracking-wider mb-4">Starter</div>
        <div class="flex items-baseline mb-6">
            <span class="text-5xl font-bold text-gray-900 dark:text-white">$0</span>
            <span class="ml-2 text-gray-500 dark:text-gray-400">/mo</span>
        </div>
        <ul class="space-y-3 mb-8">
            <li class="flex items-center text-gray-600 dark:text-gray-300 text-sm"><svg class="w-5 h-5 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> 5 Projects</li>
            <li class="flex items-center text-gray-600 dark:text-gray-300 text-sm"><svg class="w-5 h-5 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> Basic Components</li>
            <li class="flex items-center text-gray-400 dark:text-gray-500 text-sm"><svg class="w-5 h-5 text-gray-300 dark:text-gray-600 mr-2" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg> Priority Support</li>
        </ul>
        <a href="#" class="block w-full py-2.5 text-center border border-gray-300 dark:border-gray-600 text-gray-700 dark:text-gray-300 rounded-xl hover:bg-gray-50 dark:hover:bg-gray-700 transition font-medium">Get Started</a>
    </div>

    <div class="relative bg-gradient-to-br from-blue-600 to-indigo-700 rounded-2xl shadow-xl p-8 border border-blue-500 ring-2 ring-blue-500 ring-offset-2 dark:ring-offset-gray-900">
        <div class="absolute -top-3 left-1/2 -translate-x-1/2">
            <span class="px-4 py-1 bg-yellow-400 text-yellow-900 text-xs font-bold rounded-full">MOST POPULAR</span>
        </div>
        <div class="text-sm font-semibold text-blue-200 uppercase tracking-wider mb-4">Pro</div>
        <div class="flex items-baseline mb-6">
            <span class="text-5xl font-bold text-white">$29</span>
            <span class="ml-2 text-blue-200">/mo</span>
        </div>
        <ul class="space-y-3 mb-8">
            <li class="flex items-center text-blue-100 text-sm"><svg class="w-5 h-5 text-blue-300 mr-2" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> Unlimited Projects</li>
            <li class="flex items-center text-blue-100 text-sm"><svg class="w-5 h-5 text-blue-300 mr-2" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> 100+ Components</li>
            <li class="flex items-center text-blue-100 text-sm"><svg class="w-5 h-5 text-blue-300 mr-2" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> Priority Support</li>
        </ul>
        <a href="#" class="block w-full py-2.5 text-center bg-white text-blue-700 font-semibold rounded-xl hover:bg-blue-50 transition">Get Started</a>
    </div>

    <div class="relative bg-white dark:bg-gray-800 rounded-2xl shadow-lg p-8 border border-gray-200 dark:border-gray-700">
        <div class="text-sm font-semibold text-gray-500 dark:text-gray-400 uppercase tracking-wider mb-4">Enterprise</div>
        <div class="flex items-baseline mb-6">
            <span class="text-5xl font-bold text-gray-900 dark:text-white">$99</span>
            <span class="ml-2 text-gray-500 dark:text-gray-400">/mo</span>
        </div>
        <ul class="space-y-3 mb-8">
            <li class="flex items-center text-gray-600 dark:text-gray-300 text-sm"><svg class="w-5 h-5 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> Everything in Pro</li>
            <li class="flex items-center text-gray-600 dark:text-gray-300 text-sm"><svg class="w-5 h-5 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> Custom Branding</li>
            <li class="flex items-center text-gray-600 dark:text-gray-300 text-sm"><svg class="w-5 h-5 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> Dedicated Support</li>
        </ul>
        <a href="#" class="block w-full py-2.5 text-center bg-gray-900 dark:bg-white text-white dark:text-gray-900 rounded-xl hover:bg-gray-700 dark:hover:bg-gray-100 transition font-medium">Contact Sales</a>
    </div>
</div>
@endsection

@section('code')
<div class="grid grid-cols-1 md:grid-cols-3 gap-8">
    {{-- Starter Plan --}}
    <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-lg p-8 border border-gray-200 dark:border-gray-700">
        <div class="text-sm font-semibold text-gray-500 uppercase mb-4">Starter</div>
        <div class="text-5xl font-bold text-gray-900 dark:text-white mb-6">$0<span class="text-base font-normal text-gray-500">/mo</span></div>
        <a href="#" class="block w-full py-2.5 text-center border rounded-xl hover:bg-gray-50 transition">Get Started</a>
    </div>

    {{-- Pro Plan (Featured) --}}
    <div class="bg-gradient-to-br from-blue-600 to-indigo-700 rounded-2xl shadow-xl p-8 ring-2 ring-blue-500">
        <div class="text-sm font-semibold text-blue-200 uppercase mb-4">Pro</div>
        <div class="text-5xl font-bold text-white mb-6">$29<span class="text-base font-normal text-blue-200">/mo</span></div>
        <a href="#" class="block w-full py-2.5 text-center bg-white text-blue-700 font-semibold rounded-xl">Get Started</a>
    </div>
</div>
@endsection
