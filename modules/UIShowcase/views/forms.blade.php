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
        @slot('preview')
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
        @slot('preview')
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
        @slot('preview')
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
        @slot('preview')
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
        @slot('preview')
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
        @slot('preview')
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
        @slot('preview')
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
        @slot('preview')
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
        @slot('preview')
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
        @slot('preview')
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
        @slot('preview')
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
        @slot('preview')
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
        @slot('preview')
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
        @slot('preview')
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
        @slot('preview')
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
        @slot('preview')
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
        @slot('preview')
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
        @slot('preview')
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
        @slot('preview')
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
        @slot('preview')
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
        @slot('preview')
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
        @slot('preview')
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
        @slot('preview')
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
        @slot('preview')
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
        @slot('preview')
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
        @slot('preview')
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

    <!-- Slug Generator Input -->
    @component('showcase::components.showcase-item', [
        'title' => 'Slug Generator Input',
        'description' => 'Automatically generate URL-friendly slugs from text input',
        'code' => '<div x-data="{ title: \'\', slug: \'\' }">
    <div class="mb-4">
        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Title</label>
        <input type="text" x-model="title" @input="slug = title.toLowerCase().replace(/[^a-z0-9]+/g, \'-\').replace(/^-|-$/g, \'\')" placeholder="Enter title" class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 bg-white dark:bg-gray-700 text-gray-900 dark:text-white">
    </div>
    <div>
        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Slug</label>
        <input type="text" x-model="slug" placeholder="url-friendly-slug" class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 bg-white dark:bg-gray-700 text-gray-900 dark:text-white">
    </div>
</div>'
    ])
        @slot('preview')
            <div x-data="{ title: '', slug: '' }">
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Title</label>
                    <input type="text" x-model="title" @input="slug = title.toLowerCase().replace(/[^a-z0-9]+/g, '-').replace(/^-|-$/g, '')" placeholder="Enter title" class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent bg-white dark:bg-gray-700 text-gray-900 dark:text-white">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Slug (Auto-generated)</label>
                    <div class="relative">
                        <input type="text" x-model="slug" placeholder="url-friendly-slug" class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent bg-white dark:bg-gray-700 text-gray-900 dark:text-white">
                        <div class="absolute right-3 top-2.5 text-xs text-gray-500 dark:text-gray-400">
                            <span x-show="slug" x-text="slug.length + ' chars'"></span>
                        </div>
                    </div>
                    <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">URL: <span class="text-blue-600 dark:text-blue-400" x-text="slug ? '/blog/' + slug : '/blog/your-slug'"></span></p>
                </div>
            </div>
        @endslot
    @endcomponent

    <!-- Input with Character Counter -->
    @component('showcase::components.showcase-item', [
        'title' => 'Input with Character Counter',
        'description' => 'Text input with live character count and limit',
        'code' => '<div x-data="{ text: \'\', maxLength: 100 }">
    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Bio</label>
    <div class="relative">
        <textarea x-model="text" :maxlength="maxLength" rows="3" placeholder="Write a short bio..." class="w-full px-4 py-2 pr-16 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 bg-white dark:bg-gray-700 text-gray-900 dark:text-white"></textarea>
        <div class="absolute bottom-2 right-2 text-xs" :class="text.length >= maxLength ? \'text-red-500\' : \'text-gray-500 dark:text-gray-400\'">
            <span x-text="text.length"></span>/<span x-text="maxLength"></span>
        </div>
    </div>
</div>'
    ])
        @slot('preview')
            <div class="space-y-4">
                <!-- Textarea with counter -->
                <div x-data="{ text: '', maxLength: 160 }">
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                        Bio <span class="text-gray-500 text-xs">(max 160 characters)</span>
                    </label>
                    <div class="relative">
                        <textarea x-model="text" :maxlength="maxLength" rows="3" placeholder="Write a short bio about yourself..." class="w-full px-4 py-2 pr-20 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent bg-white dark:bg-gray-700 text-gray-900 dark:text-white resize-none"></textarea>
                        <div class="absolute bottom-2 right-2 text-xs font-medium px-2 py-1 rounded" :class="text.length >= maxLength ? 'text-red-600 dark:text-red-400 bg-red-50 dark:bg-red-900/20' : 'text-gray-500 dark:text-gray-400'">
                            <span x-text="text.length"></span>/<span x-text="maxLength"></span>
                        </div>
                    </div>
                </div>

                <!-- Input with counter -->
                <div x-data="{ title: '', maxLength: 60 }">
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                        Page Title
                    </label>
                    <div class="relative">
                        <input type="text" x-model="title" :maxlength="maxLength" placeholder="Enter page title..." class="w-full px-4 py-2 pr-16 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent bg-white dark:bg-gray-700 text-gray-900 dark:text-white">
                        <div class="absolute right-3 top-2.5 text-xs" :class="title.length >= maxLength ? 'text-red-500' : 'text-gray-500 dark:text-gray-400'">
                            <span x-text="title.length"></span>/<span x-text="maxLength"></span>
                        </div>
                    </div>
                    <p class="mt-1 text-xs text-gray-500 dark:text-gray-400">
                        <span x-show="title.length < 50">Add more characters for better SEO</span>
                        <span x-show="title.length >= 50 && title.length < maxLength" class="text-green-600 dark:text-green-400">✓ Good length for SEO</span>
                        <span x-show="title.length >= maxLength" class="text-red-600 dark:text-red-400">⚠ Maximum length reached</span>
                    </p>
                </div>

                <!-- Tweet-style counter -->
                <div x-data="{ tweet: '', maxLength: 280 }">
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                        Tweet
                    </label>
                    <div class="relative">
                        <textarea x-model="tweet" :maxlength="maxLength" rows="4" placeholder="What's happening?" class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent bg-white dark:bg-gray-700 text-gray-900 dark:text-white resize-none"></textarea>
                        <div class="absolute bottom-2 right-2 flex items-center gap-2">
                            <div class="relative w-8 h-8">
                                <svg class="w-8 h-8 transform -rotate-90" viewBox="0 0 36 36">
                                    <circle cx="18" cy="18" r="16" fill="none" class="stroke-current text-gray-200 dark:text-gray-600" stroke-width="3"></circle>
                                    <circle cx="18" cy="18" r="16" fill="none" :class="tweet.length >= maxLength ? 'text-red-500' : tweet.length >= maxLength * 0.9 ? 'text-yellow-500' : 'text-blue-500'" class="stroke-current" stroke-width="3" :stroke-dasharray="100" :stroke-dashoffset="100 - (tweet.length / maxLength * 100)"></circle>
                                </svg>
                                <span class="absolute inset-0 flex items-center justify-center text-xs font-medium" :class="tweet.length >= maxLength ? 'text-red-500' : 'text-gray-600 dark:text-gray-400'" x-text="maxLength - tweet.length"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endslot
    @endcomponent

    <!-- Country Select -->
    @component('showcase::components.showcase-item', [
        'title' => 'Country Select',
        'description' => 'Dropdown with list of countries',
        'code' => '<div>
    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Country</label>
    <select class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 bg-white dark:bg-gray-700 text-gray-900 dark:text-white">
        <option value="">Select country</option>
        <option value="us">United States</option>
        <option value="uk">United Kingdom</option>
        <option value="ca">Canada</option>
    </select>
</div>'
    ])
        @slot('preview')
            <div class="space-y-4">
                <!-- Country Select -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Country</label>
                    <select class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent bg-white dark:bg-gray-700 text-gray-900 dark:text-white">
                        <option value="">Select country</option>
                        <option value="us">🇺🇸 United States</option>
                        <option value="uk">🇬🇧 United Kingdom</option>
                        <option value="ca">🇨🇦 Canada</option>
                        <option value="au">🇦🇺 Australia</option>
                        <option value="de">🇩🇪 Germany</option>
                        <option value="fr">🇫🇷 France</option>
                        <option value="es">🇪🇸 Spain</option>
                        <option value="it">🇮🇹 Italy</option>
                        <option value="jp">🇯🇵 Japan</option>
                        <option value="cn">🇨🇳 China</option>
                        <option value="in">🇮🇳 India</option>
                        <option value="br">🇧🇷 Brazil</option>
                        <option value="mx">🇲🇽 Mexico</option>
                        <option value="ru">🇷🇺 Russia</option>
                        <option value="za">🇿🇦 South Africa</option>
                    </select>
                </div>

                <!-- Country with Search (Alpine.js) -->
                <div x-data="{ 
                    open: false, 
                    search: '', 
                    selected: '',
                    countries: [
                        {code: 'us', name: 'United States', flag: '🇺🇸'},
                        {code: 'uk', name: 'United Kingdom', flag: '🇬🇧'},
                        {code: 'ca', name: 'Canada', flag: '🇨🇦'},
                        {code: 'au', name: 'Australia', flag: '🇦🇺'},
                        {code: 'de', name: 'Germany', flag: '🇩🇪'},
                        {code: 'fr', name: 'France', flag: '🇫🇷'},
                        {code: 'es', name: 'Spain', flag: '🇪🇸'},
                        {code: 'it', name: 'Italy', flag: '🇮🇹'},
                        {code: 'jp', name: 'Japan', flag: '🇯🇵'},
                        {code: 'in', name: 'India', flag: '🇮🇳'}
                    ],
                    get filteredCountries() {
                        return this.countries.filter(c => 
                            c.name.toLowerCase().includes(this.search.toLowerCase())
                        );
                    },
                    selectCountry(country) {
                        this.selected = country.name;
                        this.search = country.name;
                        this.open = false;
                    }
                }" @click.away="open = false" class="relative">
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Country (Searchable)</label>
                    <div class="relative">
                        <input type="text" x-model="search" @click="open = true" @input="open = true" placeholder="Search country..." class="w-full px-4 py-2 pr-10 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent bg-white dark:bg-gray-700 text-gray-900 dark:text-white">
                        <button @click="open = !open" class="absolute right-3 top-1/2 transform -translate-y-1/2">
                            <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                    </div>
                    <div x-show="open" x-cloak class="absolute z-10 w-full mt-1 bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-600 rounded-lg shadow-lg max-h-60 overflow-auto">
                        <template x-for="country in filteredCountries" :key="country.code">
                            <div @click="selectCountry(country)" class="px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-700 cursor-pointer flex items-center gap-2">
                                <span x-text="country.flag"></span>
                                <span x-text="country.name" class="text-gray-900 dark:text-white"></span>
                            </div>
                        </template>
                        <div x-show="filteredCountries.length === 0" class="px-4 py-2 text-gray-500 dark:text-gray-400 text-sm">
                            No countries found
                        </div>
                    </div>
                </div>
            </div>
        @endslot
    @endcomponent

    <!-- Language Select -->
    @component('showcase::components.showcase-item', [
        'title' => 'Language Select',
        'description' => 'Dropdown with list of languages',
        'code' => '<div>
    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Language</label>
    <select class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 bg-white dark:bg-gray-700 text-gray-900 dark:text-white">
        <option value="">Select language</option>
        <option value="en">English</option>
        <option value="es">Spanish</option>
        <option value="fr">French</option>
    </select>
</div>'
    ])
        @slot('preview')
            <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Preferred Language</label>
                <select class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent bg-white dark:bg-gray-700 text-gray-900 dark:text-white">
                    <option value="">Select language</option>
                    <optgroup label="Popular Languages">
                        <option value="en">English</option>
                        <option value="es">Spanish (Español)</option>
                        <option value="fr">French (Français)</option>
                        <option value="de">German (Deutsch)</option>
                        <option value="zh">Chinese (中文)</option>
                        <option value="ja">Japanese (日本語)</option>
                        <option value="ar">Arabic (العربية)</option>
                        <option value="hi">Hindi (हिन्दी)</option>
                    </optgroup>
                    <optgroup label="Other Languages">
                        <option value="pt">Portuguese (Português)</option>
                        <option value="ru">Russian (Русский)</option>
                        <option value="it">Italian (Italiano)</option>
                        <option value="ko">Korean (한국어)</option>
                        <option value="nl">Dutch (Nederlands)</option>
                        <option value="pl">Polish (Polski)</option>
                        <option value="tr">Turkish (Türkçe)</option>
                        <option value="sv">Swedish (Svenska)</option>
                        <option value="da">Danish (Dansk)</option>
                        <option value="fi">Finnish (Suomi)</option>
                    </optgroup>
                </select>
            </div>
        @endslot
    @endcomponent

    <!-- Timezone Select -->
    @component('showcase::components.showcase-item', [
        'title' => 'Timezone Select',
        'description' => 'Dropdown with list of timezones',
        'code' => '<div>
    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Timezone</label>
    <select class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 bg-white dark:bg-gray-700 text-gray-900 dark:text-white">
        <option value="">Select timezone</option>
        <option value="America/New_York">Eastern Time (ET)</option>
        <option value="America/Chicago">Central Time (CT)</option>
        <option value="America/Denver">Mountain Time (MT)</option>
        <option value="America/Los_Angeles">Pacific Time (PT)</option>
    </select>
</div>'
    ])
        @slot('preview')
            <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Timezone</label>
                <select class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent bg-white dark:bg-gray-700 text-gray-900 dark:text-white">
                    <option value="">Select timezone</option>
                    <optgroup label="North America">
                        <option value="America/New_York">Eastern Time (ET) - UTC-5</option>
                        <option value="America/Chicago">Central Time (CT) - UTC-6</option>
                        <option value="America/Denver">Mountain Time (MT) - UTC-7</option>
                        <option value="America/Los_Angeles">Pacific Time (PT) - UTC-8</option>
                        <option value="America/Anchorage">Alaska Time (AKT) - UTC-9</option>
                        <option value="Pacific/Honolulu">Hawaii Time (HST) - UTC-10</option>
                    </optgroup>
                    <optgroup label="Europe">
                        <option value="Europe/London">London (GMT) - UTC+0</option>
                        <option value="Europe/Paris">Paris (CET) - UTC+1</option>
                        <option value="Europe/Athens">Athens (EET) - UTC+2</option>
                        <option value="Europe/Moscow">Moscow (MSK) - UTC+3</option>
                    </optgroup>
                    <optgroup label="Asia">
                        <option value="Asia/Dubai">Dubai (GST) - UTC+4</option>
                        <option value="Asia/Kolkata">India (IST) - UTC+5:30</option>
                        <option value="Asia/Shanghai">China (CST) - UTC+8</option>
                        <option value="Asia/Tokyo">Japan (JST) - UTC+9</option>
                    </optgroup>
                    <optgroup label="Australia & Pacific">
                        <option value="Australia/Sydney">Sydney (AEDT) - UTC+11</option>
                        <option value="Pacific/Auckland">Auckland (NZDT) - UTC+13</option>
                    </optgroup>
                </select>
            </div>
        @endslot
    @endcomponent

    <!-- Category Select with Search -->
    @component('showcase::components.showcase-item', [
        'title' => 'Category Select with Search',
        'description' => 'Searchable dropdown with hierarchical categories',
        'code' => '<div x-data="{ open: false, search: \'\', selected: \'\', categories: [...] }">
    <input type="text" x-model="search" @click="open = true" placeholder="Search categories..." class="w-full px-4 py-2 border rounded-lg">
    <div x-show="open" class="absolute z-10 w-full mt-1 bg-white border rounded-lg shadow-lg">
        <template x-for="cat in filteredCategories">
            <div @click="selectCategory(cat)" class="px-4 py-2 hover:bg-gray-100 cursor-pointer">
                <span x-text="cat.name"></span>
            </div>
        </template>
    </div>
</div>'
    ])
        @slot('preview')
            <div x-data="{ 
                open: false, 
                search: '', 
                selected: '',
                categories: [
                    {id: 1, name: 'Technology', icon: '💻', parent: null},
                    {id: 2, name: 'Web Development', icon: '🌐', parent: 1},
                    {id: 3, name: 'Mobile Apps', icon: '📱', parent: 1},
                    {id: 4, name: 'Design', icon: '🎨', parent: null},
                    {id: 5, name: 'UI/UX Design', icon: '✨', parent: 4},
                    {id: 6, name: 'Graphic Design', icon: '🖼️', parent: 4},
                    {id: 7, name: 'Business', icon: '💼', parent: null},
                    {id: 8, name: 'Marketing', icon: '📊', parent: 7},
                    {id: 9, name: 'Finance', icon: '💰', parent: 7},
                    {id: 10, name: 'Education', icon: '📚', parent: null}
                ],
                get filteredCategories() {
                    if (!this.search) return this.categories;
                    return this.categories.filter(c => 
                        c.name.toLowerCase().includes(this.search.toLowerCase())
                    );
                },
                selectCategory(cat) {
                    this.selected = cat.name;
                    this.search = cat.name;
                    this.open = false;
                }
            }" @click.away="open = false" class="relative">
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Category</label>
                <div class="relative">
                    <input type="text" x-model="search" @click="open = true" @input="open = true" placeholder="Search categories..." class="w-full px-4 py-2 pr-10 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent bg-white dark:bg-gray-700 text-gray-900 dark:text-white">
                    <button @click="open = !open" class="absolute right-3 top-1/2 transform -translate-y-1/2">
                        <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </button>
                </div>
                <div x-show="open" x-cloak class="absolute z-10 w-full mt-1 bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-600 rounded-lg shadow-lg max-h-72 overflow-auto">
                    <template x-for="cat in filteredCategories" :key="cat.id">
                        <div @click="selectCategory(cat)" class="px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-700 cursor-pointer flex items-center gap-3" :class="cat.parent ? 'pl-8 text-sm' : 'font-medium'">
                            <span x-text="cat.icon"></span>
                            <span x-text="cat.name" class="text-gray-900 dark:text-white"></span>
                        </div>
                    </template>
                    <div x-show="filteredCategories.length === 0" class="px-4 py-3 text-gray-500 dark:text-gray-400 text-sm text-center">
                        No categories found
                    </div>
                </div>
            </div>
        @endslot
    @endcomponent

    <!-- Async/Searchable Select -->
    @component('showcase::components.showcase-item', [
        'title' => 'Async/Searchable Select',
        'description' => 'Select with async data loading and search',
        'code' => '<div x-data="{ 
    open: false, 
    search: \'\', 
    loading: false,
    items: [],
    async fetchData() {
        this.loading = true;
        // Simulate API call
        setTimeout(() => {
            this.items = [...filtered data];
            this.loading = false;
        }, 500);
    }
}">
    <input @input.debounce.300ms="fetchData()" placeholder="Search users..." />
    <div x-show="loading">Loading...</div>
</div>'
    ])
        @slot('preview')
            <div x-data="{ 
                open: false, 
                search: '', 
                selected: null,
                loading: false,
                users: [],
                allUsers: [
                    {id: 1, name: 'John Doe', email: 'john@example.com', avatar: 'https://picsum.photos/40/40?random=1'},
                    {id: 2, name: 'Jane Smith', email: 'jane@example.com', avatar: 'https://picsum.photos/40/40?random=2'},
                    {id: 3, name: 'Bob Johnson', email: 'bob@example.com', avatar: 'https://picsum.photos/40/40?random=3'},
                    {id: 4, name: 'Alice Williams', email: 'alice@example.com', avatar: 'https://picsum.photos/40/40?random=4'},
                    {id: 5, name: 'Charlie Brown', email: 'charlie@example.com', avatar: 'https://picsum.photos/40/40?random=5'},
                    {id: 6, name: 'Diana Davis', email: 'diana@example.com', avatar: 'https://picsum.photos/40/40?random=6'},
                    {id: 7, name: 'Eve Martinez', email: 'eve@example.com', avatar: 'https://picsum.photos/40/40?random=7'},
                    {id: 8, name: 'Frank Wilson', email: 'frank@example.com', avatar: 'https://picsum.photos/40/40?random=8'}
                ],
                async fetchUsers() {
                    this.loading = true;
                    // Simulate API delay
                    setTimeout(() => {
                        this.users = this.allUsers.filter(u => 
                            u.name.toLowerCase().includes(this.search.toLowerCase()) ||
                            u.email.toLowerCase().includes(this.search.toLowerCase())
                        );
                        this.loading = false;
                    }, 300);
                },
                selectUser(user) {
                    this.selected = user;
                    this.search = user.name;
                    this.open = false;
                }
            }" @click.away="open = false" x-init="users = allUsers" class="relative">
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Assign to User (Async Search)</label>
                <div class="relative">
                    <input type="text" x-model="search" @click="open = true; fetchUsers()" @input.debounce.300ms="fetchUsers()" placeholder="Search by name or email..." class="w-full px-4 py-2 pr-10 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent bg-white dark:bg-gray-700 text-gray-900 dark:text-white">
                    <div class="absolute right-3 top-1/2 transform -translate-y-1/2">
                        <svg x-show="loading" class="animate-spin h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                        </svg>
                        <svg x-show="!loading" class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </div>
                </div>
                <div x-show="open" x-cloak class="absolute z-10 w-full mt-1 bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-600 rounded-lg shadow-lg max-h-64 overflow-auto">
                    <template x-for="user in users" :key="user.id">
                        <div @click="selectUser(user)" class="px-4 py-3 hover:bg-gray-100 dark:hover:bg-gray-700 cursor-pointer flex items-center gap-3">
                            <img :src="user.avatar" :alt="user.name" class="w-10 h-10 rounded-full">
                            <div class="flex-1">
                                <div x-text="user.name" class="text-sm font-medium text-gray-900 dark:text-white"></div>
                                <div x-text="user.email" class="text-xs text-gray-500 dark:text-gray-400"></div>
                            </div>
                        </div>
                    </template>
                    <div x-show="!loading && users.length === 0" class="px-4 py-3 text-gray-500 dark:text-gray-400 text-sm text-center">
                        No users found
                    </div>
                </div>
                <div x-show="selected" x-cloak class="mt-2 flex items-center gap-2 p-2 bg-blue-50 dark:bg-blue-900/20 rounded-lg">
                    <img x-show="selected" :src="selected?.avatar" :alt="selected?.name" class="w-8 h-8 rounded-full">
                    <div class="flex-1">
                        <div x-text="selected?.name" class="text-sm font-medium text-gray-900 dark:text-white"></div>
                        <div x-text="selected?.email" class="text-xs text-gray-500 dark:text-gray-400"></div>
                    </div>
                    <button @click="selected = null; search = ''" class="text-gray-400 hover:text-gray-600">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
            </div>
        @endslot
    @endcomponent

    <!-- Grouped Select -->
    @component('showcase::components.showcase-item', [
        'title' => 'Grouped Select',
        'description' => 'Select with optgroup for categorized options',
        'code' => '<select class="w-full px-4 py-2 border rounded-lg">
    <optgroup label="Popular">
        <option value="1">Option 1</option>
    </optgroup>
    <optgroup label="Others">
        <option value="2">Option 2</option>
    </optgroup>
</select>'
    ])
        @slot('preview')
            <div class="space-y-4">
                <!-- Basic Grouped Select -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Skills</label>
                    <select class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent bg-white dark:bg-gray-700 text-gray-900 dark:text-white">
                        <option value="">Select a skill</option>
                        <optgroup label="Frontend Development">
                            <option value="html">HTML</option>
                            <option value="css">CSS</option>
                            <option value="js">JavaScript</option>
                            <option value="react">React</option>
                            <option value="vue">Vue.js</option>
                            <option value="angular">Angular</option>
                        </optgroup>
                        <optgroup label="Backend Development">
                            <option value="php">PHP</option>
                            <option value="laravel">Laravel</option>
                            <option value="nodejs">Node.js</option>
                            <option value="python">Python</option>
                            <option value="ruby">Ruby</option>
                        </optgroup>
                        <optgroup label="Database">
                            <option value="mysql">MySQL</option>
                            <option value="postgresql">PostgreSQL</option>
                            <option value="mongodb">MongoDB</option>
                            <option value="redis">Redis</option>
                        </optgroup>
                        <optgroup label="DevOps">
                            <option value="docker">Docker</option>
                            <option value="kubernetes">Kubernetes</option>
                            <option value="aws">AWS</option>
                            <option value="ci-cd">CI/CD</option>
                        </optgroup>
                    </select>
                </div>

                <!-- Styled Grouped Select with Icons (simulated) -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Project Type</label>
                    <select class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent bg-white dark:bg-gray-700 text-gray-900 dark:text-white">
                        <option value="">Choose project type</option>
                        <optgroup label="Web Applications">
                            <option value="spa">📱 Single Page Application</option>
                            <option value="multi">🌐 Multi-page Website</option>
                            <option value="ecommerce">🛒 E-commerce Platform</option>
                            <option value="blog">📝 Blog / CMS</option>
                        </optgroup>
                        <optgroup label="Mobile Applications">
                            <option value="ios">🍎 iOS App</option>
                            <option value="android">🤖 Android App</option>
                            <option value="hybrid">📲 Hybrid App</option>
                        </optgroup>
                        <optgroup label="Desktop Applications">
                            <option value="electron">💻 Electron App</option>
                            <option value="native">🖥️ Native Desktop</option>
                        </optgroup>
                        <optgroup label="Other">
                            <option value="api">🔌 API / Backend</option>
                            <option value="cli">⌨️ CLI Tool</option>
                            <option value="library">📦 Library / Package</option>
                        </optgroup>
                    </select>
                </div>
            </div>
        @endslot
    @endcomponent

    {{-- Dual Range Slider --}}
    @component('showcase::components.showcase-item', [
        'title' => 'Dual Range Slider',
        'description' => 'Two-thumb range slider for selecting min/max values like price ranges, age ranges, etc.',
        'code' => <<<'HTML'
<!-- Price Range Slider -->
<div x-data="{
    minPrice: 100,
    maxPrice: 800,
    minLimit: 0,
    maxLimit: 1000,
    updateMin(value) {
        if (parseInt(value) < this.maxPrice) {
            this.minPrice = parseInt(value);
        }
    },
    updateMax(value) {
        if (parseInt(value) > this.minPrice) {
            this.maxPrice = parseInt(value);
        }
    }
}" class="space-y-4">
    <div>
        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Price Range</label>
        <div class="relative pt-1">
            <div class="flex justify-between mb-2">
                <span class="text-sm font-medium text-blue-600 dark:text-blue-400">$<span x-text="minPrice"></span></span>
                <span class="text-sm font-medium text-blue-600 dark:text-blue-400">$<span x-text="maxPrice"></span></span>
            </div>
            <div class="relative h-2 bg-gray-200 dark:bg-gray-700 rounded-full">
                <div class="absolute h-2 bg-blue-500 rounded-full" 
                     :style="`left: ${(minPrice / maxLimit) * 100}%; right: ${100 - (maxPrice / maxLimit) * 100}%`"></div>
                <input type="range" :min="minLimit" :max="maxLimit" x-model="minPrice" @input="updateMin($event.target.value)"
                       class="absolute w-full h-2 bg-transparent appearance-none pointer-events-none [&::-webkit-slider-thumb]:pointer-events-auto [&::-webkit-slider-thumb]:appearance-none [&::-webkit-slider-thumb]:w-4 [&::-webkit-slider-thumb]:h-4 [&::-webkit-slider-thumb]:bg-blue-600 [&::-webkit-slider-thumb]:rounded-full [&::-webkit-slider-thumb]:cursor-pointer [&::-moz-range-thumb]:pointer-events-auto [&::-moz-range-thumb]:appearance-none [&::-moz-range-thumb]:w-4 [&::-moz-range-thumb]:h-4 [&::-moz-range-thumb]:bg-blue-600 [&::-moz-range-thumb]:rounded-full [&::-moz-range-thumb]:border-0 [&::-moz-range-thumb]:cursor-pointer">
                <input type="range" :min="minLimit" :max="maxLimit" x-model="maxPrice" @input="updateMax($event.target.value)"
                       class="absolute w-full h-2 bg-transparent appearance-none pointer-events-none [&::-webkit-slider-thumb]:pointer-events-auto [&::-webkit-slider-thumb]:appearance-none [&::-webkit-slider-thumb]:w-4 [&::-webkit-slider-thumb]:h-4 [&::-webkit-slider-thumb]:bg-blue-600 [&::-webkit-slider-thumb]:rounded-full [&::-webkit-slider-thumb]:cursor-pointer [&::-moz-range-thumb]:pointer-events-auto [&::-moz-range-thumb]:appearance-none [&::-moz-range-thumb]:w-4 [&::-moz-range-thumb]:h-4 [&::-moz-range-thumb]:bg-blue-600 [&::-moz-range-thumb]:rounded-full [&::-moz-range-thumb]:border-0 [&::-moz-range-thumb]:cursor-pointer">
            </div>
        </div>
    </div>
</div>

<!-- Age Range Slider -->
<div x-data="{
    minAge: 18,
    maxAge: 65,
    minLimit: 0,
    maxLimit: 100
}" class="space-y-4">
    <div>
        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Age Range</label>
        <div class="relative pt-1">
            <div class="flex justify-between mb-2">
                <span class="text-sm font-medium text-green-600 dark:text-green-400"><span x-text="minAge"></span> years</span>
                <span class="text-sm font-medium text-green-600 dark:text-green-400"><span x-text="maxAge"></span> years</span>
            </div>
            <div class="relative h-2 bg-gray-200 dark:bg-gray-700 rounded-full">
                <div class="absolute h-2 bg-green-500 rounded-full" 
                     :style="`left: ${(minAge / maxLimit) * 100}%; right: ${100 - (maxAge / maxLimit) * 100}%`"></div>
                <input type="range" :min="minLimit" :max="maxLimit" x-model="minAge"
                       class="absolute w-full h-2 bg-transparent appearance-none pointer-events-none [&::-webkit-slider-thumb]:pointer-events-auto [&::-webkit-slider-thumb]:appearance-none [&::-webkit-slider-thumb]:w-4 [&::-webkit-slider-thumb]:h-4 [&::-webkit-slider-thumb]:bg-green-600 [&::-webkit-slider-thumb]:rounded-full [&::-webkit-slider-thumb]:cursor-pointer [&::-moz-range-thumb]:pointer-events-auto [&::-moz-range-thumb]:appearance-none [&::-moz-range-thumb]:w-4 [&::-moz-range-thumb]:h-4 [&::-moz-range-thumb]:bg-green-600 [&::-moz-range-thumb]:rounded-full [&::-moz-range-thumb]:border-0 [&::-moz-range-thumb]:cursor-pointer">
                <input type="range" :min="minLimit" :max="maxLimit" x-model="maxAge"
                       class="absolute w-full h-2 bg-transparent appearance-none pointer-events-none [&::-webkit-slider-thumb]:pointer-events-auto [&::-webkit-slider-thumb]:appearance-none [&::-webkit-slider-thumb]:w-4 [&::-webkit-slider-thumb]:h-4 [&::-webkit-slider-thumb]:bg-green-600 [&::-webkit-slider-thumb]:rounded-full [&::-webkit-slider-thumb]:cursor-pointer [&::-moz-range-thumb]:pointer-events-auto [&::-moz-range-thumb]:appearance-none [&::-moz-range-thumb]:w-4 [&::-moz-range-thumb]:h-4 [&::-moz-range-thumb]:bg-green-600 [&::-moz-range-thumb]:rounded-full [&::-moz-range-thumb]:border-0 [&::-moz-range-thumb]:cursor-pointer">
            </div>
        </div>
    </div>
</div>

<!-- Size Range with Input Display -->
<div x-data="{
    minSize: 20,
    maxSize: 50,
    minLimit: 10,
    maxLimit: 100
}" class="space-y-4">
    <div>
        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Size Range (MB)</label>
        <div class="flex gap-4 mb-3">
            <div class="flex-1">
                <input type="number" x-model="minSize" :min="minLimit" :max="maxSize"
                       class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md focus:ring-2 focus:ring-purple-500 focus:border-transparent dark:bg-gray-700 dark:text-white">
                <span class="text-xs text-gray-500 dark:text-gray-400">Min</span>
            </div>
            <div class="flex-1">
                <input type="number" x-model="maxSize" :min="minSize" :max="maxLimit"
                       class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md focus:ring-2 focus:ring-purple-500 focus:border-transparent dark:bg-gray-700 dark:text-white">
                <span class="text-xs text-gray-500 dark:text-gray-400">Max</span>
            </div>
        </div>
        <div class="relative h-2 bg-gray-200 dark:bg-gray-700 rounded-full">
            <div class="absolute h-2 bg-purple-500 rounded-full" 
                 :style="`left: ${((minSize - minLimit) / (maxLimit - minLimit)) * 100}%; right: ${100 - ((maxSize - minLimit) / (maxLimit - minLimit)) * 100}%`"></div>
            <input type="range" :min="minLimit" :max="maxLimit" x-model="minSize"
                   class="absolute w-full h-2 bg-transparent appearance-none pointer-events-none [&::-webkit-slider-thumb]:pointer-events-auto [&::-webkit-slider-thumb]:appearance-none [&::-webkit-slider-thumb]:w-4 [&::-webkit-slider-thumb]:h-4 [&::-webkit-slider-thumb]:bg-purple-600 [&::-webkit-slider-thumb]:rounded-full [&::-webkit-slider-thumb]:cursor-pointer [&::-moz-range-thumb]:pointer-events-auto [&::-moz-range-thumb]:appearance-none [&::-moz-range-thumb]:w-4 [&::-moz-range-thumb]:h-4 [&::-moz-range-thumb]:bg-purple-600 [&::-moz-range-thumb]:rounded-full [&::-moz-range-thumb]:border-0 [&::-moz-range-thumb]:cursor-pointer">
            <input type="range" :min="minLimit" :max="maxLimit" x-model="maxSize"
                   class="absolute w-full h-2 bg-transparent appearance-none pointer-events-none [&::-webkit-slider-thumb]:pointer-events-auto [&::-webkit-slider-thumb]:appearance-none [&::-webkit-slider-thumb]:w-4 [&::-webkit-slider-thumb]:h-4 [&::-webkit-slider-thumb]:bg-purple-600 [&::-webkit-slider-thumb]:rounded-full [&::-webkit-slider-thumb]:cursor-pointer [&::-moz-range-thumb]:pointer-events-auto [&::-moz-range-thumb]:appearance-none [&::-moz-range-thumb]:w-4 [&::-moz-range-thumb]:h-4 [&::-moz-range-thumb]:bg-purple-600 [&::-moz-range-thumb]:rounded-full [&::-moz-range-thumb]:border-0 [&::-moz-range-thumb]:cursor-pointer">
        </div>
    </div>
</div>
HTML
    ])
        @slot('preview')
            {{-- Price Range Slider --}}
            <div x-data="{
                minPrice: 100,
                maxPrice: 800,
                minLimit: 0,
                maxLimit: 1000,
                updateMin(value) {
                    if (parseInt(value) < this.maxPrice) {
                        this.minPrice = parseInt(value);
                    }
                },
                updateMax(value) {
                    if (parseInt(value) > this.minPrice) {
                        this.maxPrice = parseInt(value);
                    }
                }
            }" class="space-y-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Price Range</label>
                    <div class="relative pt-1">
                        <div class="flex justify-between mb-2">
                            <span class="text-sm font-medium text-blue-600 dark:text-blue-400">$<span x-text="minPrice"></span></span>
                            <span class="text-sm font-medium text-blue-600 dark:text-blue-400">$<span x-text="maxPrice"></span></span>
                        </div>
                        <div class="relative h-2 bg-gray-200 dark:bg-gray-700 rounded-full">
                            <div class="absolute h-2 bg-blue-500 rounded-full" 
                                 :style="`left: ${(minPrice / maxLimit) * 100}%; right: ${100 - (maxPrice / maxLimit) * 100}%`"></div>
                            <input type="range" :min="minLimit" :max="maxLimit" x-model="minPrice" @input="updateMin($event.target.value)"
                                   class="absolute w-full h-2 bg-transparent appearance-none pointer-events-none [&::-webkit-slider-thumb]:pointer-events-auto [&::-webkit-slider-thumb]:appearance-none [&::-webkit-slider-thumb]:w-4 [&::-webkit-slider-thumb]:h-4 [&::-webkit-slider-thumb]:bg-blue-600 [&::-webkit-slider-thumb]:rounded-full [&::-webkit-slider-thumb]:cursor-pointer [&::-moz-range-thumb]:pointer-events-auto [&::-moz-range-thumb]:appearance-none [&::-moz-range-thumb]:w-4 [&::-moz-range-thumb]:h-4 [&::-moz-range-thumb]:bg-blue-600 [&::-moz-range-thumb]:rounded-full [&::-moz-range-thumb]:border-0 [&::-moz-range-thumb]:cursor-pointer">
                            <input type="range" :min="minLimit" :max="maxLimit" x-model="maxPrice" @input="updateMax($event.target.value)"
                                   class="absolute w-full h-2 bg-transparent appearance-none pointer-events-none [&::-webkit-slider-thumb]:pointer-events-auto [&::-webkit-slider-thumb]:appearance-none [&::-webkit-slider-thumb]:w-4 [&::-webkit-slider-thumb]:h-4 [&::-webkit-slider-thumb]:bg-blue-600 [&::-webkit-slider-thumb]:rounded-full [&::-webkit-slider-thumb]:cursor-pointer [&::-moz-range-thumb]:pointer-events-auto [&::-moz-range-thumb]:appearance-none [&::-moz-range-thumb]:w-4 [&::-moz-range-thumb]:h-4 [&::-moz-range-thumb]:bg-blue-600 [&::-moz-range-thumb]:rounded-full [&::-moz-range-thumb]:border-0 [&::-moz-range-thumb]:cursor-pointer">
                        </div>
                    </div>
                </div>
            </div>

            {{-- Age Range Slider --}}
            <div x-data="{
                minAge: 18,
                maxAge: 65,
                minLimit: 0,
                maxLimit: 100
            }" class="space-y-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Age Range</label>
                    <div class="relative pt-1">
                        <div class="flex justify-between mb-2">
                            <span class="text-sm font-medium text-green-600 dark:text-green-400"><span x-text="minAge"></span> years</span>
                            <span class="text-sm font-medium text-green-600 dark:text-green-400"><span x-text="maxAge"></span> years</span>
                        </div>
                        <div class="relative h-2 bg-gray-200 dark:bg-gray-700 rounded-full">
                            <div class="absolute h-2 bg-green-500 rounded-full" 
                                 :style="`left: ${(minAge / maxLimit) * 100}%; right: ${100 - (maxAge / maxLimit) * 100}%`"></div>
                            <input type="range" :min="minLimit" :max="maxLimit" x-model="minAge"
                                   class="absolute w-full h-2 bg-transparent appearance-none pointer-events-none [&::-webkit-slider-thumb]:pointer-events-auto [&::-webkit-slider-thumb]:appearance-none [&::-webkit-slider-thumb]:w-4 [&::-webkit-slider-thumb]:h-4 [&::-webkit-slider-thumb]:bg-green-600 [&::-webkit-slider-thumb]:rounded-full [&::-webkit-slider-thumb]:cursor-pointer [&::-moz-range-thumb]:pointer-events-auto [&::-moz-range-thumb]:appearance-none [&::-moz-range-thumb]:w-4 [&::-moz-range-thumb]:h-4 [&::-moz-range-thumb]:bg-green-600 [&::-moz-range-thumb]:rounded-full [&::-moz-range-thumb]:border-0 [&::-moz-range-thumb]:cursor-pointer">
                            <input type="range" :min="minLimit" :max="maxLimit" x-model="maxAge"
                                   class="absolute w-full h-2 bg-transparent appearance-none pointer-events-none [&::-webkit-slider-thumb]:pointer-events-auto [&::-webkit-slider-thumb]:appearance-none [&::-webkit-slider-thumb]:w-4 [&::-webkit-slider-thumb]:h-4 [&::-webkit-slider-thumb]:bg-green-600 [&::-webkit-slider-thumb]:rounded-full [&::-webkit-slider-thumb]:cursor-pointer [&::-moz-range-thumb]:pointer-events-auto [&::-moz-range-thumb]:appearance-none [&::-moz-range-thumb]:w-4 [&::-moz-range-thumb]:h-4 [&::-moz-range-thumb]:bg-green-600 [&::-moz-range-thumb]:rounded-full [&::-moz-range-thumb]:border-0 [&::-moz-range-thumb]:cursor-pointer">
                        </div>
                    </div>
                </div>
            </div>

            {{-- Size Range with Input Display --}}
            <div x-data="{
                minSize: 20,
                maxSize: 50,
                minLimit: 10,
                maxLimit: 100
            }" class="space-y-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Size Range (MB)</label>
                    <div class="flex gap-4 mb-3">
                        <div class="flex-1">
                            <input type="number" x-model="minSize" :min="minLimit" :max="maxSize"
                                   class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md focus:ring-2 focus:ring-purple-500 focus:border-transparent dark:bg-gray-700 dark:text-white">
                            <span class="text-xs text-gray-500 dark:text-gray-400">Min</span>
                        </div>
                        <div class="flex-1">
                            <input type="number" x-model="maxSize" :min="minSize" :max="maxLimit"
                                   class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md focus:ring-2 focus:ring-purple-500 focus:border-transparent dark:bg-gray-700 dark:text-white">
                            <span class="text-xs text-gray-500 dark:text-gray-400">Max</span>
                        </div>
                    </div>
                    <div class="relative h-2 bg-gray-200 dark:bg-gray-700 rounded-full">
                        <div class="absolute h-2 bg-purple-500 rounded-full" 
                             :style="`left: ${((minSize - minLimit) / (maxLimit - minLimit)) * 100}%; right: ${100 - ((maxSize - minLimit) / (maxLimit - minLimit)) * 100}%`"></div>
                        <input type="range" :min="minLimit" :max="maxLimit" x-model="minSize"
                               class="absolute w-full h-2 bg-transparent appearance-none pointer-events-none [&::-webkit-slider-thumb]:pointer-events-auto [&::-webkit-slider-thumb]:appearance-none [&::-webkit-slider-thumb]:w-4 [&::-webkit-slider-thumb]:h-4 [&::-webkit-slider-thumb]:bg-purple-600 [&::-webkit-slider-thumb]:rounded-full [&::-webkit-slider-thumb]:cursor-pointer [&::-moz-range-thumb]:pointer-events-auto [&::-moz-range-thumb]:appearance-none [&::-moz-range-thumb]:w-4 [&::-moz-range-thumb]:h-4 [&::-moz-range-thumb]:bg-purple-600 [&::-moz-range-thumb]:rounded-full [&::-moz-range-thumb]:border-0 [&::-moz-range-thumb]:cursor-pointer">
                        <input type="range" :min="minLimit" :max="maxLimit" x-model="maxSize"
                               class="absolute w-full h-2 bg-transparent appearance-none pointer-events-none [&::-webkit-slider-thumb]:pointer-events-auto [&::-webkit-slider-thumb]:appearance-none [&::-webkit-slider-thumb]:w-4 [&::-webkit-slider-thumb]:h-4 [&::-webkit-slider-thumb]:bg-purple-600 [&::-webkit-slider-thumb]:rounded-full [&::-webkit-slider-thumb]:cursor-pointer [&::-moz-range-thumb]:pointer-events-auto [&::-moz-range-thumb]:appearance-none [&::-moz-range-thumb]:w-4 [&::-moz-range-thumb]:h-4 [&::-moz-range-thumb]:bg-purple-600 [&::-moz-range-thumb]:rounded-full [&::-moz-range-thumb]:border-0 [&::-moz-range-thumb]:cursor-pointer">
                    </div>
                </div>
            </div>
        @endslot
    @endcomponent

    {{-- Date-range Picker --}}
    @component('showcase::components.showcase-item', [
        'title' => 'Date-range Picker',
        'description' => 'Select start and end dates with calendar interface for date range selection.',
        'code' => <<<'HTML'
<!-- Simple Date Range Picker -->
<div x-data="{
    startDate: '',
    endDate: '',
    currentMonth: new Date().getMonth(),
    currentYear: new Date().getFullYear(),
    months: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
    getDaysInMonth() {
        return new Date(this.currentYear, this.currentMonth + 1, 0).getDate();
    },
    getFirstDayOfMonth() {
        return new Date(this.currentYear, this.currentMonth, 1).getDay();
    }
}" class="space-y-4">
    <div>
        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Date Range</label>
        <div class="flex gap-3">
            <input type="date" x-model="startDate"
                   class="flex-1 px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-transparent dark:bg-gray-700 dark:text-white">
            <span class="flex items-center text-gray-500 dark:text-gray-400">to</span>
            <input type="date" x-model="endDate" :min="startDate"
                   class="flex-1 px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-transparent dark:bg-gray-700 dark:text-white">
        </div>
        <p x-show="startDate && endDate" class="mt-2 text-sm text-gray-600 dark:text-gray-400">
            Selected: <span x-text="startDate"></span> - <span x-text="endDate"></span>
        </p>
    </div>
</div>

<!-- Preset Date Ranges -->
<div x-data="{
    startDate: '',
    endDate: '',
    setRange(days) {
        const end = new Date();
        const start = new Date();
        start.setDate(end.getDate() - days);
        this.startDate = start.toISOString().split('T')[0];
        this.endDate = end.toISOString().split('T')[0];
    }
}" class="space-y-4">
    <div>
        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Quick Date Ranges</label>
        <div class="flex flex-wrap gap-2 mb-3">
            <button @click="setRange(7)" type="button"
                    class="px-3 py-1.5 text-sm bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-md hover:bg-gray-200 dark:hover:bg-gray-600">
                Last 7 days
            </button>
            <button @click="setRange(30)" type="button"
                    class="px-3 py-1.5 text-sm bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-md hover:bg-gray-200 dark:hover:bg-gray-600">
                Last 30 days
            </button>
            <button @click="setRange(90)" type="button"
                    class="px-3 py-1.5 text-sm bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-md hover:bg-gray-200 dark:hover:bg-gray-600">
                Last 90 days
            </button>
        </div>
        <div class="flex gap-3">
            <input type="date" x-model="startDate"
                   class="flex-1 px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md focus:ring-2 focus:ring-green-500 focus:border-transparent dark:bg-gray-700 dark:text-white">
            <input type="date" x-model="endDate" :min="startDate"
                   class="flex-1 px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md focus:ring-2 focus:ring-green-500 focus:border-transparent dark:bg-gray-700 dark:text-white">
        </div>
    </div>
</div>
HTML
    ])
        @slot('preview')
            {{-- Simple Date Range Picker --}}
            <div x-data="{
                startDate: '',
                endDate: ''
            }" class="space-y-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Date Range</label>
                    <div class="flex gap-3">
                        <input type="date" x-model="startDate"
                               class="flex-1 px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-transparent dark:bg-gray-700 dark:text-white">
                        <span class="flex items-center text-gray-500 dark:text-gray-400">to</span>
                        <input type="date" x-model="endDate" :min="startDate"
                               class="flex-1 px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-transparent dark:bg-gray-700 dark:text-white">
                    </div>
                    <p x-show="startDate && endDate" class="mt-2 text-sm text-gray-600 dark:text-gray-400">
                        Selected: <span x-text="startDate"></span> - <span x-text="endDate"></span>
                    </p>
                </div>
            </div>

            {{-- Preset Date Ranges --}}
            <div x-data="{
                startDate: '',
                endDate: '',
                setRange(days) {
                    const end = new Date();
                    const start = new Date();
                    start.setDate(end.getDate() - days);
                    this.startDate = start.toISOString().split('T')[0];
                    this.endDate = end.toISOString().split('T')[0];
                }
            }" class="space-y-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Quick Date Ranges</label>
                    <div class="flex flex-wrap gap-2 mb-3">
                        <button @click="setRange(7)" type="button"
                                class="px-3 py-1.5 text-sm bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-md hover:bg-gray-200 dark:hover:bg-gray-600">
                            Last 7 days
                        </button>
                        <button @click="setRange(30)" type="button"
                                class="px-3 py-1.5 text-sm bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-md hover:bg-gray-200 dark:hover:bg-gray-600">
                            Last 30 days
                        </button>
                        <button @click="setRange(90)" type="button"
                                class="px-3 py-1.5 text-sm bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-md hover:bg-gray-200 dark:hover:bg-gray-600">
                            Last 90 days
                        </button>
                    </div>
                    <div class="flex gap-3">
                        <input type="date" x-model="startDate"
                               class="flex-1 px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md focus:ring-2 focus:ring-green-500 focus:border-transparent dark:bg-gray-700 dark:text-white">
                        <input type="date" x-model="endDate" :min="startDate"
                               class="flex-1 px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md focus:ring-2 focus:ring-green-500 focus:border-transparent dark:bg-gray-700 dark:text-white">
                    </div>
                </div>
            </div>
        @endslot
    @endcomponent

</div>
@endsection
