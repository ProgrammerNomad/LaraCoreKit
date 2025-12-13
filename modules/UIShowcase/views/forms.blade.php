@extends('showcase::layouts.showcase')

@section('page-title', 'Form Elements')
@section('page-description', 'Inputs, selects, checkboxes, and all form controls')

@section('content')
<div class="max-w-7xl mx-auto space-y-8">
    
    <!-- Text Input -->
    @component('showcase::components.showcase-item', [
        'title' => 'Text Input',
        'description' => 'Standard text input field',
        'code' => '<div>
    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
        Full Name
    </label>
    <input type="text" 
           placeholder="Enter your name" 
           class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent bg-white dark:bg-gray-700 text-gray-900 dark:text-white">
</div>'
    ])
        @slot('preview', null, [])
            <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                    Full Name
                </label>
                <input type="text" placeholder="Enter your name" class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent bg-white dark:bg-gray-700 text-gray-900 dark:text-white">
            </div>
        @endslot
    @endcomponent

    <!-- Email Input -->
    @component('showcase::components.showcase-item', [
        'title' => 'Email Input',
        'description' => 'Email input with validation',
        'code' => '<div>
    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
        Email Address
    </label>
    <input type="email" 
           placeholder="you@example.com" 
           class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent bg-white dark:bg-gray-700 text-gray-900 dark:text-white">
</div>'
    ])
        @slot('preview', null, [])
            <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                    Email Address
                </label>
                <input type="email" placeholder="you@example.com" class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent bg-white dark:bg-gray-700 text-gray-900 dark:text-white">
            </div>
        @endslot
    @endcomponent

    <!-- Password Input with Show/Hide -->
    @component('showcase::components.showcase-item', [
        'title' => 'Password Input (with show/hide)',
        'description' => 'Password field with toggle visibility',
        'code' => '<div x-data="{ showPassword: false }">
    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
        Password
    </label>
    <div class="relative">
        <input :type="showPassword ? \'text\' : \'password\'" 
               placeholder="Enter password" 
               class="w-full px-4 py-2 pr-10 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent bg-white dark:bg-gray-700 text-gray-900 dark:text-white">
        <button type="button" 
                @click="showPassword = !showPassword"
                class="absolute inset-y-0 right-0 pr-3 flex items-center text-gray-600 dark:text-gray-400">
            <svg x-show="!showPassword" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
            </svg>
            <svg x-show="showPassword" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21"></path>
            </svg>
        </button>
    </div>
</div>'
    ])
        @slot('preview', null, [])
            <div x-data="{ showPassword: false }">
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                    Password
                </label>
                <div class="relative">
                    <input :type="showPassword ? 'text' : 'password'" placeholder="Enter password" class="w-full px-4 py-2 pr-10 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent bg-white dark:bg-gray-700 text-gray-900 dark:text-white">
                    <button type="button" @click="showPassword = !showPassword" class="absolute inset-y-0 right-0 pr-3 flex items-center text-gray-600 dark:text-gray-400">
                        <svg x-show="!showPassword" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                        </svg>
                        <svg x-show="showPassword" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21"></path>
                        </svg>
                    </button>
                </div>
            </div>
        @endslot
    @endcomponent

    <!-- Search Input -->
    @component('showcase::components.showcase-item', [
        'title' => 'Search Input',
        'description' => 'Search field with icon',
        'code' => '<div class="relative">
    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
        <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
        </svg>
    </div>
    <input type="search" 
           placeholder="Search..." 
           class="w-full pl-10 pr-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent bg-white dark:bg-gray-700 text-gray-900 dark:text-white">
</div>'
    ])
        @slot('preview', null, [])
            <div class="relative">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </div>
                <input type="search" placeholder="Search..." class="w-full pl-10 pr-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent bg-white dark:bg-gray-700 text-gray-900 dark:text-white">
            </div>
        @endslot
    @endcomponent

    <!-- Number Input -->
    @component('showcase::components.showcase-item', [
        'title' => 'Number Input',
        'description' => 'Numeric input field',
        'code' => '<div>
    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
        Quantity
    </label>
    <input type="number" 
           min="1" 
           max="100" 
           value="1" 
           class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent bg-white dark:bg-gray-700 text-gray-900 dark:text-white">
</div>'
    ])
        @slot('preview', null, [])
            <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                    Quantity
                </label>
                <input type="number" min="1" max="100" value="1" class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent bg-white dark:bg-gray-700 text-gray-900 dark:text-white">
            </div>
        @endslot
    @endcomponent

    <!-- Textarea -->
    @component('showcase::components.showcase-item', [
        'title' => 'Textarea',
        'description' => 'Multi-line text input',
        'code' => '<div>
    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
        Description
    </label>
    <textarea rows="4" 
              placeholder="Enter description..." 
              class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent bg-white dark:bg-gray-700 text-gray-900 dark:text-white"></textarea>
</div>'
    ])
        @slot('preview', null, [])
            <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                    Description
                </label>
                <textarea rows="4" placeholder="Enter description..." class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent bg-white dark:bg-gray-700 text-gray-900 dark:text-white"></textarea>
            </div>
        @endslot
    @endcomponent

    <!-- Select Dropdown -->
    @component('showcase::components.showcase-item', [
        'title' => 'Select Dropdown',
        'description' => 'Standard select input',
        'code' => '<div>
    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
        Country
    </label>
    <select class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent bg-white dark:bg-gray-700 text-gray-900 dark:text-white">
        <option>Select a country</option>
        <option>United States</option>
        <option>United Kingdom</option>
        <option>Canada</option>
        <option>Australia</option>
    </select>
</div>'
    ])
        @slot('preview', null, [])
            <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                    Country
                </label>
                <select class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent bg-white dark:bg-gray-700 text-gray-900 dark:text-white">
                    <option>Select a country</option>
                    <option>United States</option>
                    <option>United Kingdom</option>
                    <option>Canada</option>
                    <option>Australia</option>
                </select>
            </div>
        @endslot
    @endcomponent

    <!-- Checkbox -->
    @component('showcase::components.showcase-item', [
        'title' => 'Checkbox',
        'description' => 'Single checkbox with label',
        'code' => '<div class="flex items-center">
    <input type="checkbox" 
           id="agree" 
           class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
    <label for="agree" class="ml-2 text-sm text-gray-700 dark:text-gray-300">
        I agree to the terms and conditions
    </label>
</div>'
    ])
        @slot('preview', null, [])
            <div class="flex items-center">
                <input type="checkbox" id="agree" class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                <label for="agree" class="ml-2 text-sm text-gray-700 dark:text-gray-300">
                    I agree to the terms and conditions
                </label>
            </div>
        @endslot
    @endcomponent

    <!-- Checkbox Group -->
    @component('showcase::components.showcase-item', [
        'title' => 'Checkbox Group',
        'description' => 'Multiple checkboxes',
        'code' => '<div>
    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-3">
        Select your interests
    </label>
    <div class="space-y-2">
        <div class="flex items-center">
            <input type="checkbox" id="tech" class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
            <label for="tech" class="ml-2 text-sm text-gray-700 dark:text-gray-300">Technology</label>
        </div>
        <div class="flex items-center">
            <input type="checkbox" id="design" class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
            <label for="design" class="ml-2 text-sm text-gray-700 dark:text-gray-300">Design</label>
        </div>
        <div class="flex items-center">
            <input type="checkbox" id="business" class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
            <label for="business" class="ml-2 text-sm text-gray-700 dark:text-gray-300">Business</label>
        </div>
    </div>
</div>'
    ])
        @slot('preview', null, [])
            <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-3">
                    Select your interests
                </label>
                <div class="space-y-2">
                    <div class="flex items-center">
                        <input type="checkbox" id="tech" class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                        <label for="tech" class="ml-2 text-sm text-gray-700 dark:text-gray-300">Technology</label>
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox" id="design" class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                        <label for="design" class="ml-2 text-sm text-gray-700 dark:text-gray-300">Design</label>
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox" id="business" class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                        <label for="business" class="ml-2 text-sm text-gray-700 dark:text-gray-300">Business</label>
                    </div>
                </div>
            </div>
        @endslot
    @endcomponent

    <!-- Radio Buttons -->
    @component('showcase::components.showcase-item', [
        'title' => 'Radio Buttons',
        'description' => 'Single selection radio group',
        'code' => '<div>
    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-3">
        Shipping Method
    </label>
    <div class="space-y-2">
        <div class="flex items-center">
            <input type="radio" name="shipping" id="standard" class="w-4 h-4 text-blue-600 border-gray-300 focus:ring-blue-500">
            <label for="standard" class="ml-2 text-sm text-gray-700 dark:text-gray-300">Standard (5-7 days)</label>
        </div>
        <div class="flex items-center">
            <input type="radio" name="shipping" id="express" class="w-4 h-4 text-blue-600 border-gray-300 focus:ring-blue-500">
            <label for="express" class="ml-2 text-sm text-gray-700 dark:text-gray-300">Express (2-3 days)</label>
        </div>
        <div class="flex items-center">
            <input type="radio" name="shipping" id="overnight" class="w-4 h-4 text-blue-600 border-gray-300 focus:ring-blue-500">
            <label for="overnight" class="ml-2 text-sm text-gray-700 dark:text-gray-300">Overnight</label>
        </div>
    </div>
</div>'
    ])
        @slot('preview', null, [])
            <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-3">
                    Shipping Method
                </label>
                <div class="space-y-2">
                    <div class="flex items-center">
                        <input type="radio" name="shipping" id="standard" class="w-4 h-4 text-blue-600 border-gray-300 focus:ring-blue-500">
                        <label for="standard" class="ml-2 text-sm text-gray-700 dark:text-gray-300">Standard (5-7 days)</label>
                    </div>
                    <div class="flex items-center">
                        <input type="radio" name="shipping" id="express" class="w-4 h-4 text-blue-600 border-gray-300 focus:ring-blue-500">
                        <label for="express" class="ml-2 text-sm text-gray-700 dark:text-gray-300">Express (2-3 days)</label>
                    </div>
                    <div class="flex items-center">
                        <input type="radio" name="shipping" id="overnight" class="w-4 h-4 text-blue-600 border-gray-300 focus:ring-blue-500">
                        <label for="overnight" class="ml-2 text-sm text-gray-700 dark:text-gray-300">Overnight</label>
                    </div>
                </div>
            </div>
        @endslot
    @endcomponent

    <!-- Toggle Switch -->
    @component('showcase::components.showcase-item', [
        'title' => 'Toggle Switch',
        'description' => 'On/off toggle switch',
        'code' => '<div x-data="{ enabled: false }" class="flex items-center justify-between">
    <span class="text-sm text-gray-700 dark:text-gray-300">Enable notifications</span>
    <button @click="enabled = !enabled" 
            type="button" 
            :class="enabled ? \'bg-blue-600\' : \'bg-gray-200 dark:bg-gray-700\'" 
            class="relative inline-flex h-6 w-11 flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
        <span :class="enabled ? \'translate-x-5\' : \'translate-x-0\'" 
              class="pointer-events-none inline-block h-5 w-5 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out"></span>
    </button>
</div>'
    ])
        @slot('preview', null, [])
            <div x-data="{ enabled: false }" class="flex items-center justify-between">
                <span class="text-sm text-gray-700 dark:text-gray-300">Enable notifications</span>
                <button @click="enabled = !enabled" type="button" :class="enabled ? 'bg-blue-600' : 'bg-gray-200 dark:bg-gray-700'" class="relative inline-flex h-6 w-11 flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                    <span :class="enabled ? 'translate-x-5' : 'translate-x-0'" class="pointer-events-none inline-block h-5 w-5 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out"></span>
                </button>
            </div>
        @endslot
    @endcomponent

    <!-- File Upload -->
    @component('showcase::components.showcase-item', [
        'title' => 'File Upload',
        'description' => 'File input field',
        'code' => '<div>
    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
        Upload File
    </label>
    <input type="file" 
           class="block w-full text-sm text-gray-500 dark:text-gray-400 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-medium file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100 dark:file:bg-blue-900/20 dark:file:text-blue-400 dark:hover:file:bg-blue-900/30">
</div>'
    ])
        @slot('preview', null, [])
            <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                    Upload File
                </label>
                <input type="file" class="block w-full text-sm text-gray-500 dark:text-gray-400 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-medium file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100 dark:file:bg-blue-900/20 dark:file:text-blue-400 dark:hover:file:bg-blue-900/30">
            </div>
        @endslot
    @endcomponent

    <!-- Range Slider -->
    @component('showcase::components.showcase-item', [
        'title' => 'Range Slider',
        'description' => 'Slider for numeric ranges',
        'code' => '<div x-data="{ value: 50 }">
    <div class="flex justify-between mb-2">
        <label class="text-sm font-medium text-gray-700 dark:text-gray-300">Volume</label>
        <span class="text-sm text-gray-500 dark:text-gray-400" x-text="value + \'%\'"></span>
    </div>
    <input type="range" 
           x-model="value" 
           min="0" 
           max="100" 
           class="w-full h-2 bg-gray-200 dark:bg-gray-700 rounded-lg appearance-none cursor-pointer accent-blue-600">
</div>'
    ])
        @slot('preview', null, [])
            <div x-data="{ value: 50 }">
                <div class="flex justify-between mb-2">
                    <label class="text-sm font-medium text-gray-700 dark:text-gray-300">Volume</label>
                    <span class="text-sm text-gray-500 dark:text-gray-400" x-text="value + '%'"></span>
                </div>
                <input type="range" x-model="value" min="0" max="100" class="w-full h-2 bg-gray-200 dark:bg-gray-700 rounded-lg appearance-none cursor-pointer accent-blue-600">
            </div>
        @endslot
    @endcomponent

    <!-- Input with Error -->
    @component('showcase::components.showcase-item', [
        'title' => 'Input with Error State',
        'description' => 'Form validation error display',
        'code' => '<div>
    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
        Email
    </label>
    <input type="email" 
           value="invalid-email" 
           class="w-full px-4 py-2 border-2 border-red-500 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-transparent bg-white dark:bg-gray-700 text-gray-900 dark:text-white">
    <p class="mt-2 text-sm text-red-600 dark:text-red-400">Please enter a valid email address</p>
</div>'
    ])
        @slot('preview', null, [])
            <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                    Email
                </label>
                <input type="email" value="invalid-email" class="w-full px-4 py-2 border-2 border-red-500 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-transparent bg-white dark:bg-gray-700 text-gray-900 dark:text-white">
                <p class="mt-2 text-sm text-red-600 dark:text-red-400">Please enter a valid email address</p>
            </div>
        @endslot
    @endcomponent

    <!-- Input with Success -->
    @component('showcase::components.showcase-item', [
        'title' => 'Input with Success State',
        'description' => 'Validated input with success message',
        'code' => '<div>
    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
        Username
    </label>
    <input type="text" 
           value="johndoe" 
           class="w-full px-4 py-2 border-2 border-green-500 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent bg-white dark:bg-gray-700 text-gray-900 dark:text-white">
    <p class="mt-2 text-sm text-green-600 dark:text-green-400">Username is available!</p>
</div>'
    ])
        @slot('preview', null, [])
            <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                    Username
                </label>
                <input type="text" value="johndoe" class="w-full px-4 py-2 border-2 border-green-500 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent bg-white dark:bg-gray-700 text-gray-900 dark:text-white">
                <p class="mt-2 text-sm text-green-600 dark:text-green-400">Username is available!</p>
            </div>
        @endslot
    @endcomponent

    <!-- Input with Helper Text -->
    @component('showcase::components.showcase-item', [
        'title' => 'Input with Helper Text',
        'description' => 'Input field with descriptive helper text',
        'code' => '<div>
    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
        Website URL
    </label>
    <input type="url" 
           placeholder="https://example.com" 
           class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent bg-white dark:bg-gray-700 text-gray-900 dark:text-white">
    <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">Include https:// at the beginning</p>
</div>'
    ])
        @slot('preview', null, [])
            <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                    Website URL
                </label>
                <input type="url" placeholder="https://example.com" class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent bg-white dark:bg-gray-700 text-gray-900 dark:text-white">
                <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">Include https:// at the beginning</p>
            </div>
        @endslot
    @endcomponent

    <!-- Tags Input -->
    @component('showcase::components.showcase-item', [
        'title' => 'Tags Input',
        'description' => 'Add and remove tags',
        'code' => '<div x-data="{ tags: [\'Laravel\', \'PHP\'], newTag: \'\' }">
    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
        Skills
    </label>
    <div class="flex flex-wrap gap-2 p-2 border border-gray-300 dark:border-gray-600 rounded-lg bg-white dark:bg-gray-700">
        <template x-for="(tag, index) in tags" :key="index">
            <span class="inline-flex items-center px-3 py-1 rounded-full text-sm bg-blue-100 dark:bg-blue-900/30 text-blue-800 dark:text-blue-300">
                <span x-text="tag"></span>
                <button @click="tags.splice(index, 1)" class="ml-2 text-blue-600 dark:text-blue-400 hover:text-blue-800 dark:hover:text-blue-200">
                    <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </button>
            </span>
        </template>
        <input x-model="newTag" 
               @keydown.enter.prevent="if(newTag.trim()) { tags.push(newTag.trim()); newTag = \'\'; }"
               type="text" 
               placeholder="Add tag..." 
               class="flex-1 min-w-[120px] px-2 py-1 border-0 focus:ring-0 bg-transparent text-gray-900 dark:text-white">
    </div>
</div>'
    ])
        @slot('preview', null, [])
            <div x-data="{ tags: ['Laravel', 'PHP'], newTag: '' }">
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                    Skills
                </label>
                <div class="flex flex-wrap gap-2 p-2 border border-gray-300 dark:border-gray-600 rounded-lg bg-white dark:bg-gray-700">
                    <template x-for="(tag, index) in tags" :key="index">
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-sm bg-blue-100 dark:bg-blue-900/30 text-blue-800 dark:text-blue-300">
                            <span x-text="tag"></span>
                            <button @click="tags.splice(index, 1)" class="ml-2 text-blue-600 dark:text-blue-400 hover:text-blue-800 dark:hover:text-blue-200">
                                <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                </svg>
                            </button>
                        </span>
                    </template>
                    <input x-model="newTag" 
                           @keydown.enter.prevent="if(newTag.trim()) { tags.push(newTag.trim()); newTag = ''; }"
                           type="text" 
                           placeholder="Add tag..." 
                           class="flex-1 min-w-[120px] px-2 py-1 border-0 focus:ring-0 bg-transparent text-gray-900 dark:text-white">
                </div>
            </div>
        @endslot
    @endcomponent

    <!-- Phone Input -->
    @component('showcase::components.showcase-item', [
        'title' => 'Phone Input',
        'description' => 'Phone number with formatting',
        'code' => '<div>
    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
        Phone Number
    </label>
    <div class="flex gap-2">
        <select class="w-24 px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-lg bg-white dark:bg-gray-700 text-gray-900 dark:text-white">
            <option>🇺🇸 +1</option>
            <option>🇬🇧 +44</option>
            <option>🇮🇳 +91</option>
            <option>🇦🇺 +61</option>
        </select>
        <input type="tel" 
               placeholder="(555) 123-4567" 
               class="flex-1 px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent bg-white dark:bg-gray-700 text-gray-900 dark:text-white">
    </div>
</div>'
    ])
        @slot('preview', null, [])
            <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                    Phone Number
                </label>
                <div class="flex gap-2">
                    <select class="w-24 px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-lg bg-white dark:bg-gray-700 text-gray-900 dark:text-white">
                        <option>🇺🇸 +1</option>
                        <option>🇬🇧 +44</option>
                        <option>🇮🇳 +91</option>
                        <option>🇦🇺 +61</option>
                    </select>
                    <input type="tel" placeholder="(555) 123-4567" class="flex-1 px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent bg-white dark:bg-gray-700 text-gray-900 dark:text-white">
                </div>
            </div>
        @endslot
    @endcomponent

    <!-- OTP Input -->
    @component('showcase::components.showcase-item', [
        'title' => 'OTP Input',
        'description' => 'One-time password input boxes',
        'code' => '<div x-data="{ otp: [\'\', \'\', \'\', \'\', \'\', \'\'] }">
    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
        Enter OTP Code
    </label>
    <div class="flex gap-2 justify-center">
        <template x-for="(digit, index) in otp" :key="index">
            <input x-model="otp[index]"
                   @input="if($event.target.value && index < 5) $refs[\'otp\' + (index + 1)].focus()"
                   @keydown.backspace="if(!$event.target.value && index > 0) $refs[\'otp\' + (index - 1)].focus()"
                   :x-ref="\'otp\' + index"
                   type="text" 
                   maxlength="1" 
                   class="w-12 h-12 text-center text-lg font-semibold border-2 border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 bg-white dark:bg-gray-700 text-gray-900 dark:text-white">
        </template>
    </div>
</div>'
    ])
        @slot('preview', null, [])
            <div x-data="{ otp: ['', '', '', '', '', ''] }">
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                    Enter OTP Code
                </label>
                <div class="flex gap-2 justify-center">
                    <template x-for="(digit, index) in otp" :key="index">
                        <input x-model="otp[index]"
                               @input="if($event.target.value && index < 5) $refs['otp' + (index + 1)].focus()"
                               @keydown.backspace="if(!$event.target.value && index > 0) $refs['otp' + (index - 1)].focus()"
                               :x-ref="'otp' + index"
                               type="text" 
                               maxlength="1" 
                               class="w-12 h-12 text-center text-lg font-semibold border-2 border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 bg-white dark:bg-gray-700 text-gray-900 dark:text-white">
                    </template>
                </div>
            </div>
        @endslot
    @endcomponent

    <!-- Currency Input -->
    @component('showcase::components.showcase-item', [
        'title' => 'Currency Input',
        'description' => 'Money input with prefix',
        'code' => '<div>
    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
        Price
    </label>
    <div class="relative">
        <span class="absolute inset-y-0 left-0 pl-3 flex items-center text-gray-500 dark:text-gray-400">$</span>
        <input type="number" 
               step="0.01" 
               placeholder="0.00" 
               class="w-full pl-8 pr-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent bg-white dark:bg-gray-700 text-gray-900 dark:text-white">
    </div>
</div>'
    ])
        @slot('preview', null, [])
            <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                    Price
                </label>
                <div class="relative">
                    <span class="absolute inset-y-0 left-0 pl-3 flex items-center text-gray-500 dark:text-gray-400">$</span>
                    <input type="number" step="0.01" placeholder="0.00" class="w-full pl-8 pr-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent bg-white dark:bg-gray-700 text-gray-900 dark:text-white">
                </div>
            </div>
        @endslot
    @endcomponent

    <!-- Multi-Select -->
    @component('showcase::components.showcase-item', [
        'title' => 'Multi-Select',
        'description' => 'Select multiple options',
        'code' => '<div x-data="{ open: false, selected: [\'JavaScript\', \'Python\'], options: [\'JavaScript\', \'Python\', \'PHP\', \'Ruby\', \'Go\', \'Rust\'] }">
    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
        Programming Languages
    </label>
    <div class="relative">
        <button @click="open = !open" type="button" class="w-full px-4 py-2 text-left border border-gray-300 dark:border-gray-600 rounded-lg bg-white dark:bg-gray-700 focus:ring-2 focus:ring-blue-500">
            <div class="flex flex-wrap gap-1">
                <template x-for="item in selected" :key="item">
                    <span class="inline-flex items-center px-2 py-0.5 rounded text-xs bg-blue-100 dark:bg-blue-900/30 text-blue-800 dark:text-blue-300">
                        <span x-text="item"></span>
                        <button @click.stop="selected = selected.filter(i => i !== item)" class="ml-1">×</button>
                    </span>
                </template>
                <span x-show="selected.length === 0" class="text-gray-500 dark:text-gray-400">Select languages...</span>
            </div>
        </button>
        <div x-show="open" @click.away="open = false" class="absolute z-10 w-full mt-1 bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-600 rounded-lg shadow-lg max-h-60 overflow-auto">
            <template x-for="option in options" :key="option">
                <label class="flex items-center px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-700 cursor-pointer">
                    <input type="checkbox" 
                           :checked="selected.includes(option)"
                           @change="selected.includes(option) ? selected = selected.filter(i => i !== option) : selected.push(option)"
                           class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                    <span class="ml-2 text-sm text-gray-900 dark:text-white" x-text="option"></span>
                </label>
            </template>
        </div>
    </div>
</div>'
    ])
        @slot('preview', null, [])
            <div x-data="{ open: false, selected: ['JavaScript', 'Python'], options: ['JavaScript', 'Python', 'PHP', 'Ruby', 'Go', 'Rust'] }">
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                    Programming Languages
                </label>
                <div class="relative">
                    <button @click="open = !open" type="button" class="w-full px-4 py-2 text-left border border-gray-300 dark:border-gray-600 rounded-lg bg-white dark:bg-gray-700 focus:ring-2 focus:ring-blue-500">
                        <div class="flex flex-wrap gap-1">
                            <template x-for="item in selected" :key="item">
                                <span class="inline-flex items-center px-2 py-0.5 rounded text-xs bg-blue-100 dark:bg-blue-900/30 text-blue-800 dark:text-blue-300">
                                    <span x-text="item"></span>
                                    <button @click.stop="selected = selected.filter(i => i !== item)" class="ml-1">×</button>
                                </span>
                            </template>
                            <span x-show="selected.length === 0" class="text-gray-500 dark:text-gray-400">Select languages...</span>
                        </div>
                    </button>
                    <div x-show="open" @click.away="open = false" class="absolute z-10 w-full mt-1 bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-600 rounded-lg shadow-lg max-h-60 overflow-auto">
                        <template x-for="option in options" :key="option">
                            <label class="flex items-center px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-700 cursor-pointer">
                                <input type="checkbox" 
                                       :checked="selected.includes(option)"
                                       @change="selected.includes(option) ? selected = selected.filter(i => i !== option) : selected.push(option)"
                                       class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                                <span class="ml-2 text-sm text-gray-900 dark:text-white" x-text="option"></span>
                            </label>
                        </template>
                    </div>
                </div>
            </div>
        @endslot
    @endcomponent

    <!-- Date Picker -->
    @component('showcase::components.showcase-item', [
        'title' => 'Date Picker',
        'description' => 'Simple date input',
        'code' => '<div>
    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
        Birth Date
    </label>
    <input type="date" 
           class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent bg-white dark:bg-gray-700 text-gray-900 dark:text-white">
</div>'
    ])
        @slot('preview', null, [])
            <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                    Birth Date
                </label>
                <input type="date" class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent bg-white dark:bg-gray-700 text-gray-900 dark:text-white">
            </div>
        @endslot
    @endcomponent

    <!-- Time Picker -->
    @component('showcase::components.showcase-item', [
        'title' => 'Time Picker',
        'description' => 'Time selection input',
        'code' => '<div>
    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
        Appointment Time
    </label>
    <input type="time" 
           class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent bg-white dark:bg-gray-700 text-gray-900 dark:text-white">
</div>'
    ])
        @slot('preview', null, [])
            <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                    Appointment Time
                </label>
                <input type="time" class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent bg-white dark:bg-gray-700 text-gray-900 dark:text-white">
            </div>
        @endslot
    @endcomponent

    <!-- DateTime Picker -->
    @component('showcase::components.showcase-item', [
        'title' => 'DateTime Picker',
        'description' => 'Date and time combined',
        'code' => '<div>
    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
        Event DateTime
    </label>
    <input type="datetime-local" 
           class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent bg-white dark:bg-gray-700 text-gray-900 dark:text-white">
</div>'
    ])
        @slot('preview', null, [])
            <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                    Event DateTime
                </label>
                <input type="datetime-local" class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent bg-white dark:bg-gray-700 text-gray-900 dark:text-white">
            </div>
        @endslot
    @endcomponent

    <!-- Color Picker -->
    @component('showcase::components.showcase-item', [
        'title' => 'Color Picker',
        'description' => 'Color selection input',
        'code' => '<div x-data="{ color: \'#3B82F6\' }">
    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
        Brand Color
    </label>
    <div class="flex gap-3">
        <input x-model="color" type="color" class="w-16 h-10 rounded border-2 border-gray-300 dark:border-gray-600 cursor-pointer">
        <input x-model="color" type="text" class="flex-1 px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 bg-white dark:bg-gray-700 text-gray-900 dark:text-white">
    </div>
</div>'
    ])
        @slot('preview', null, [])
            <div x-data="{ color: '#3B82F6' }">
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                    Brand Color
                </label>
                <div class="flex gap-3">
                    <input x-model="color" type="color" class="w-16 h-10 rounded border-2 border-gray-300 dark:border-gray-600 cursor-pointer">
                    <input x-model="color" type="text" class="flex-1 px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 bg-white dark:bg-gray-700 text-gray-900 dark:text-white">
                </div>
            </div>
        @endslot
    @endcomponent

    <!-- Auto-resizing Textarea -->
    @component('showcase::components.showcase-item', [
        'title' => 'Auto-resizing Textarea',
        'description' => 'Textarea that grows with content',
        'code' => '<div>
    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
        Comment
    </label>
    <textarea @input="$el.style.height = \'auto\'; $el.style.height = $el.scrollHeight + \'px\'"
              rows="3" 
              placeholder="Type your comment..." 
              class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent bg-white dark:bg-gray-700 text-gray-900 dark:text-white resize-none"></textarea>
</div>'
    ])
        @slot('preview', null, [])
            <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                    Comment
                </label>
                <textarea @input="$el.style.height = 'auto'; $el.style.height = $el.scrollHeight + 'px'"
                          rows="3" 
                          placeholder="Type your comment..." 
                          class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent bg-white dark:bg-gray-700 text-gray-900 dark:text-white resize-none"></textarea>
            </div>
        @endslot
    @endcomponent

</div>
@endsection
