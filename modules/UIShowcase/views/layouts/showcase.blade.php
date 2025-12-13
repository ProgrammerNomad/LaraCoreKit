<!DOCTYPE html>
<html lang="en" x-data="{ darkMode: localStorage.getItem('darkMode') === 'true' }" x-init="$watch('darkMode', val => localStorage.setItem('darkMode', val))" :class="{ 'dark': darkMode }">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'UI Showcase') - LaraCoreKit</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        [x-cloak] { display: none !important; }
        html { scroll-behavior: smooth; }
    </style>
</head>
<body class="bg-gray-50 dark:bg-gray-900">
    <div class="flex min-h-screen" x-data="{ 
        openSections: JSON.parse(localStorage.getItem('openSections') || '{}'),
        toggleSection(section) {
            this.openSections[section] = !this.openSections[section];
            localStorage.setItem('openSections', JSON.stringify(this.openSections));
        }
    }">
        <!-- Sidebar -->
        <aside class="w-64 bg-white dark:bg-gray-800 border-r border-gray-200 dark:border-gray-700 fixed h-full overflow-y-auto">
            <div class="p-6">
                <a href="/" class="flex items-center space-x-2 mb-8">
                    <img src="{{ asset('images/logo.svg') }}" alt="LaraCoreKit" class="h-8">
                </a>
                
                <nav class="space-y-1">
                    <a href="{{ route('showcase.index') }}" class="flex items-center px-3 py-2 text-sm font-medium rounded-lg {{ request()->routeIs('showcase.index') ? 'bg-blue-50 dark:bg-blue-900/30 text-blue-600 dark:text-blue-400' : 'text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700' }}">
                        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                        </svg>
                        Overview
                    </a>
                    
                    <!-- Typography Section -->
                    <div>
                        <button @click="toggleSection('typography')" class="w-full flex items-center justify-between px-3 py-2 text-sm font-medium rounded-lg {{ request()->routeIs('showcase.typography') ? 'bg-blue-50 dark:bg-blue-900/30 text-blue-600 dark:text-blue-400' : 'text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700' }}">
                            <div class="flex items-center">
                                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                </svg>
                                Typography
                            </div>
                            <svg class="w-4 h-4 transition-transform" :class="openSections.typography ? 'rotate-90' : ''" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <div x-show="openSections.typography" x-cloak class="ml-8 mt-1 space-y-1">
                            <a href="{{ route('showcase.typography') }}#headings-h1-h6" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Headings</a>
                            <a href="{{ route('showcase.typography') }}#paragraphs" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Paragraphs</a>
                            <a href="{{ route('showcase.typography') }}#lead-text" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Lead Text</a>
                            <a href="{{ route('showcase.typography') }}#muted-text" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Muted Text</a>
                            <a href="{{ route('showcase.typography') }}#inline-code" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Inline Code</a>
                            <a href="{{ route('showcase.typography') }}#blockquote" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Blockquote</a>
                            <a href="{{ route('showcase.typography') }}#unordered-list" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Unordered List</a>
                            <a href="{{ route('showcase.typography') }}#ordered-list" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Ordered List</a>
                            <a href="{{ route('showcase.typography') }}#description-list" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Description List</a>
                            <a href="{{ route('showcase.typography') }}#text-truncation-with-tooltip" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Text Truncation</a>
                            <a href="{{ route('showcase.typography') }}#text-highlight-mark" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Text Highlight</a>
                            <a href="{{ route('showcase.typography') }}#keyboard-shortcut-kbd" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Keyboard Shortcut</a>
                        </div>
                    </div>
                    
                    <!-- Buttons Section -->
                    <div>
                        <button @click="toggleSection('buttons')" class="w-full flex items-center justify-between px-3 py-2 text-sm font-medium rounded-lg {{ request()->routeIs('showcase.buttons') ? 'bg-blue-50 dark:bg-blue-900/30 text-blue-600 dark:text-blue-400' : 'text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700' }}">
                            <div class="flex items-center">
                                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122"></path>
                                </svg>
                                Buttons
                            </div>
                            <svg class="w-4 h-4 transition-transform" :class="openSections.buttons ? 'rotate-90' : ''" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <div x-show="openSections.buttons" x-cloak class="ml-8 mt-1 space-y-1">
                            <a href="{{ route('showcase.buttons') }}#primary-button" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Primary Button</a>
                            <a href="{{ route('showcase.buttons') }}#secondary-button" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Secondary Button</a>
                            <a href="{{ route('showcase.buttons') }}#outline-button" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Outline Button</a>
                            <a href="{{ route('showcase.buttons') }}#ghost-button" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Ghost Button</a>
                            <a href="{{ route('showcase.buttons') }}#danger-button" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Danger Button</a>
                            <a href="{{ route('showcase.buttons') }}#success-button" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Success Button</a>
                            <a href="{{ route('showcase.buttons') }}#icon-button" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Icon Button</a>
                            <a href="{{ route('showcase.buttons') }}#button-with-icon-left" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Button with Icon (Left)</a>
                            <a href="{{ route('showcase.buttons') }}#button-with-icon-right" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Button with Icon (Right)</a>
                            <a href="{{ route('showcase.buttons') }}#loading-button-state" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Loading Button</a>
                            <a href="{{ route('showcase.buttons') }}#disabled-button" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Disabled Button</a>
                            <a href="{{ route('showcase.buttons') }}#full-width-button" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Full Width Button</a>
                            <a href="{{ route('showcase.buttons') }}#button-group" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Button Group</a>
                            <a href="{{ route('showcase.buttons') }}#button-sizes" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Button Sizes</a>
                        </div>
                    </div>
                    
                    <!-- Forms Section -->
                    <div>
                        <button @click="toggleSection('forms')" class="w-full flex items-center justify-between px-3 py-2 text-sm font-medium rounded-lg {{ request()->routeIs('showcase.forms') ? 'bg-blue-50 dark:bg-blue-900/30 text-blue-600 dark:text-blue-400' : 'text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700' }}">
                            <div class="flex items-center">
                                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                </svg>
                                Forms
                            </div>
                            <svg class="w-4 h-4 transition-transform" :class="openSections.forms ? 'rotate-90' : ''" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <div x-show="openSections.forms" x-cloak class="ml-8 mt-1 space-y-1">
                            <a href="{{ route('showcase.forms') }}#text-input" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Text Input</a>
                            <a href="{{ route('showcase.forms') }}#textarea" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Textarea</a>
                            <a href="{{ route('showcase.forms') }}#select-dropdown" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Select Dropdown</a>
                            <a href="{{ route('showcase.forms') }}#checkbox" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Checkbox</a>
                            <a href="{{ route('showcase.forms') }}#radio-button" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Radio Button</a>
                            <a href="{{ route('showcase.forms') }}#toggle-switch" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Toggle Switch</a>
                            <a href="{{ route('showcase.forms') }}#file-upload" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">File Upload</a>
                            <a href="{{ route('showcase.forms') }}#tag-input" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Tag Input</a>
                            <a href="{{ route('showcase.forms') }}#phone-input" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Phone Input</a>
                            <a href="{{ route('showcase.forms') }}#otp-input" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">OTP Input</a>
                            <a href="{{ route('showcase.forms') }}#currency-input" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Currency Input</a>
                            <a href="{{ route('showcase.forms') }}#multi-select" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Multi-Select</a>
                            <a href="{{ route('showcase.forms') }}#date-picker" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Date Picker</a>
                            <a href="{{ route('showcase.forms') }}#time-picker" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Time Picker</a>
                            <a href="{{ route('showcase.forms') }}#datetime-picker" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">DateTime Picker</a>
                            <a href="{{ route('showcase.forms') }}#color-picker" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Color Picker</a>
                            <a href="{{ route('showcase.forms') }}#auto-resize-textarea" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Auto-resize Textarea</a>
                        </div>
                    </div>
                    
                    <!-- Navigation Section -->
                    <div>
                        <button @click="toggleSection('navigation')" class="w-full flex items-center justify-between px-3 py-2 text-sm font-medium rounded-lg {{ request()->routeIs('showcase.navigation') ? 'bg-blue-50 dark:bg-blue-900/30 text-blue-600 dark:text-blue-400' : 'text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700' }}">
                            <div class="flex items-center">
                                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                                </svg>
                                Navigation
                            </div>
                            <svg class="w-4 h-4 transition-transform" :class="openSections.navigation ? 'rotate-90' : ''" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <div x-show="openSections.navigation" x-cloak class="ml-8 mt-1 space-y-1">
                            <a href="{{ route('showcase.navigation') }}#horizontal-navbar" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Horizontal Navbar</a>
                            <a href="{{ route('showcase.navigation') }}#breadcrumbs" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Breadcrumbs</a>
                            <a href="{{ route('showcase.navigation') }}#tabs" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Tabs</a>
                            <a href="{{ route('showcase.navigation') }}#pagination" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Pagination</a>
                            <a href="{{ route('showcase.navigation') }}#vertical-sidebar-menu" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Vertical Sidebar Menu</a>
                            <a href="{{ route('showcase.navigation') }}#dropdown-menu" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Dropdown Menu</a>
                            <a href="{{ route('showcase.navigation') }}#mobile-menu-hamburger" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Mobile Menu</a>
                        </div>
                    </div>
                    
                    <!-- Layouts Section -->
                    <div>
                        <button @click="toggleSection('layouts')" class="w-full flex items-center justify-between px-3 py-2 text-sm font-medium rounded-lg {{ request()->routeIs('showcase.layouts') ? 'bg-blue-50 dark:bg-blue-900/30 text-blue-600 dark:text-blue-400' : 'text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700' }}">
                            <div class="flex items-center">
                                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h4a1 1 0 011 1v7a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM14 5a1 1 0 011-1h4a1 1 0 011 1v7a1 1 0 01-1 1h-4a1 1 0 01-1-1V5zM4 16a1 1 0 011-1h4a1 1 0 011 1v3a1 1 0 01-1 1H5a1 1 0 01-1-1v-3zM14 16a1 1 0 011-1h4a1 1 0 011 1v3a1 1 0 01-1 1h-4a1 1 0 01-1-1v-3z"></path>
                                </svg>
                                Layouts
                            </div>
                            <svg class="w-4 h-4 transition-transform" :class="openSections.layouts ? 'rotate-90' : ''" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <div x-show="openSections.layouts" x-cloak class="ml-8 mt-1 space-y-1">
                            <a href="{{ route('showcase.layouts') }}#basic-card" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Basic Card</a>
                            <a href="{{ route('showcase.layouts') }}#card-with-header-footer" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Card with Header & Footer</a>
                            <a href="{{ route('showcase.layouts') }}#card-with-image" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Card with Image</a>
                            <a href="{{ route('showcase.layouts') }}#two-column-grid" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Two Column Grid</a>
                            <a href="{{ route('showcase.layouts') }}#three-column-grid" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Three Column Grid</a>
                            <a href="{{ route('showcase.layouts') }}#container-max-width" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Container</a>
                            <a href="{{ route('showcase.layouts') }}#sidebar-layout" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Sidebar Layout</a>
                            <a href="{{ route('showcase.layouts') }}#split-panel" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Split Panel</a>
                            <a href="{{ route('showcase.layouts') }}#stats-grid" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Stats Grid</a>
                            <a href="{{ route('showcase.layouts') }}#hero-section" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Hero Section</a>
                            <a href="{{ route('showcase.layouts') }}#list-with-dividers" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">List with Dividers</a>
                            <a href="{{ route('showcase.layouts') }}#accordion-panel" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Accordion Panel</a>
                        </div>
                    </div>
                    
                    <!-- Data Display Section -->
                    <div>
                        <button @click="toggleSection('data-display')" class="w-full flex items-center justify-between px-3 py-2 text-sm font-medium rounded-lg {{ request()->routeIs('showcase.data-display') ? 'bg-blue-50 dark:bg-blue-900/30 text-blue-600 dark:text-blue-400' : 'text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700' }}">
                            <div class="flex items-center">
                                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M3 14h18m-9-4v8m-7 0h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                                </svg>
                                Data Display
                            </div>
                            <svg class="w-4 h-4 transition-transform" :class="openSections['data-display'] ? 'rotate-90' : ''" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <div x-show="openSections['data-display']" x-cloak class="ml-8 mt-1 space-y-1">
                            <a href="{{ route('showcase.data-display') }}#simple-table" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Simple Table</a>
                            <a href="{{ route('showcase.data-display') }}#striped-table" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Striped Table</a>
                            <a href="{{ route('showcase.data-display') }}#sortable-table" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Sortable Table</a>
                            <a href="{{ route('showcase.data-display') }}#search-table" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Table with Search</a>
                            <a href="{{ route('showcase.data-display') }}#paginated-table" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Paginated Table</a>
                            <a href="{{ route('showcase.data-display') }}#chip-component" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Chip Component</a>
                            <a href="{{ route('showcase.data-display') }}#avatar-status" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Avatar with Status</a>
                            <a href="{{ route('showcase.data-display') }}#kpi-cards" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">KPI Cards</a>
                            <a href="{{ route('showcase.data-display') }}#code-block" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Code Block Viewer</a>
                            <a href="{{ route('showcase.data-display') }}#badge" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Badge</a>
                            <a href="{{ route('showcase.data-display') }}#card" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Card</a>
                            <a href="{{ route('showcase.data-display') }}#stat-card" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Stat Card</a>
                            <a href="{{ route('showcase.data-display') }}#list-group" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">List Group</a>
                            <a href="{{ route('showcase.data-display') }}#description-list" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Description List</a>
                        </div>
                    </div>
                    
                    <!-- Feedback Section -->
                    <div>
                        <button @click="toggleSection('feedback')" class="w-full flex items-center justify-between px-3 py-2 text-sm font-medium rounded-lg {{ request()->routeIs('showcase.feedback') ? 'bg-blue-50 dark:bg-blue-900/30 text-blue-600 dark:text-blue-400' : 'text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700' }}">
                            <div class="flex items-center">
                                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
                                </svg>
                                Feedback
                            </div>
                            <svg class="w-4 h-4 transition-transform" :class="openSections.feedback ? 'rotate-90' : ''" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <div x-show="openSections.feedback" x-cloak class="ml-8 mt-1 space-y-1">
                            <a href="{{ route('showcase.feedback') }}#alert-info" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Alert - Info</a>
                            <a href="{{ route('showcase.feedback') }}#alert-success" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Alert - Success</a>
                            <a href="{{ route('showcase.feedback') }}#alert-warning" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Alert - Warning</a>
                            <a href="{{ route('showcase.feedback') }}#alert-error" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Alert - Error</a>
                            <a href="{{ route('showcase.feedback') }}#toast" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Toast Notification</a>
                            <a href="{{ route('showcase.feedback') }}#modal" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Modal</a>
                            <a href="{{ route('showcase.feedback') }}#drawer-right" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Drawer - Right</a>
                            <a href="{{ route('showcase.feedback') }}#drawer-left" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Drawer - Left</a>
                            <a href="{{ route('showcase.feedback') }}#drawer-bottom" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Drawer - Bottom</a>
                            <a href="{{ route('showcase.feedback') }}#tooltip" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Tooltip</a>
                            <a href="{{ route('showcase.feedback') }}#popover" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Popover</a>
                            <a href="{{ route('showcase.feedback') }}#circular-progress" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Circular Progress</a>
                            <a href="{{ route('showcase.feedback') }}#steps-indicator" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Steps Indicator</a>
                            <a href="{{ route('showcase.feedback') }}#banner" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Banner Notification</a>
                            <a href="{{ route('showcase.feedback') }}#skeleton-card" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Skeleton Card</a>
                            <a href="{{ route('showcase.feedback') }}#skeleton-table" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Skeleton Table</a>
                        </div>
                    </div>
                    
                    <!-- Charts Section -->
                    <div>
                        <button @click="toggleSection('charts')" class="w-full flex items-center justify-between px-3 py-2 text-sm font-medium rounded-lg {{ request()->routeIs('showcase.charts') ? 'bg-blue-50 dark:bg-blue-900/30 text-blue-600 dark:text-blue-400' : 'text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700' }}">
                            <div class="flex items-center">
                                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                                </svg>
                                Charts
                            </div>
                            <svg class="w-4 h-4 transition-transform" :class="openSections.charts ? 'rotate-90' : ''" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <div x-show="openSections.charts" x-cloak class="ml-8 mt-1 space-y-1">
                            <a href="{{ route('showcase.charts') }}#line-chart" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Line Chart</a>
                            <a href="{{ route('showcase.charts') }}#bar-chart" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Bar Chart</a>
                            <a href="{{ route('showcase.charts') }}#pie-chart" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Pie Chart</a>
                            <a href="{{ route('showcase.charts') }}#donut-chart" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Donut Chart</a>
                            <a href="{{ route('showcase.charts') }}#area-chart" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Area Chart</a>
                            <a href="{{ route('showcase.charts') }}#multi-line-chart" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Multi-line Chart</a>
                            <a href="{{ route('showcase.charts') }}#horizontal-bar-chart" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Horizontal Bar Chart</a>
                            <a href="{{ route('showcase.charts') }}#radar-chart" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Radar Chart</a>
                            <a href="{{ route('showcase.charts') }}#sparklines" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Sparklines</a>
                        </div>
                    </div>
                    
                    <!-- Media Section -->
                    <div>
                        <button @click="toggleSection('media')" class="w-full flex items-center justify-between px-3 py-2 text-sm font-medium rounded-lg {{ request()->routeIs('showcase.media') ? 'bg-blue-50 dark:bg-blue-900/30 text-blue-600 dark:text-blue-400' : 'text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700' }}">
                            <div class="flex items-center">
                                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                                Media
                            </div>
                            <svg class="w-4 h-4 transition-transform" :class="openSections.media ? 'rotate-90' : ''" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <div x-show="openSections.media" x-cloak class="ml-8 mt-1 space-y-1">
                            <a href="{{ route('showcase.media') }}#image-upload-with-preview" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Image Upload with Preview</a>
                            <a href="{{ route('showcase.media') }}#drag-drop-file-uploader" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Drag & Drop Uploader</a>
                            <a href="{{ route('showcase.media') }}#multiple-file-upload-with-progress" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Multiple Upload with Progress</a>
                            <a href="{{ route('showcase.media') }}#image-gallery-with-lightbox" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Image Gallery with Lightbox</a>
                            <a href="{{ route('showcase.media') }}#image-carousel-slider" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Image Carousel/Slider</a>
                            <a href="{{ route('showcase.media') }}#video-player-with-controls" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Video Player</a>
                            <a href="{{ route('showcase.media') }}#audio-player" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Audio Player</a>
                            <a href="{{ route('showcase.media') }}#pdf-viewer" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">PDF Viewer</a>
                            <a href="{{ route('showcase.media') }}#avatar-upload-with-crop-preview" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Avatar Upload</a>
                        </div>
                    </div>
                    
                    <!-- Auth Flows -->
                    <div>
                        <button @click="toggleSection('auth')" class="w-full flex items-center justify-between px-3 py-2 text-sm font-medium rounded-lg {{ request()->routeIs('showcase.auth') ? 'bg-blue-50 dark:bg-blue-900/30 text-blue-600 dark:text-blue-400' : 'text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700' }}">
                            <div class="flex items-center">
                                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                                </svg>
                                Auth Flows
                            </div>
                            <svg class="w-4 h-4 transition-transform" :class="openSections.auth ? 'rotate-90' : ''" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <div x-show="openSections.auth" x-cloak class="ml-8 mt-1 space-y-1">
                            <a href="{{ route('showcase.auth') }}#enhanced-login-form" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Enhanced Login Form</a>
                            <a href="{{ route('showcase.auth') }}#enhanced-register-form" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Enhanced Register Form</a>
                            <a href="{{ route('showcase.auth') }}#otp-verification" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">OTP Verification</a>
                            <a href="{{ route('showcase.auth') }}#2fa-setup-wizard" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">2FA Setup Wizard</a>
                            <a href="{{ route('showcase.auth') }}#profile-settings-page" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Profile Settings Page</a>
                            <a href="{{ route('showcase.auth') }}#password-change-form" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Password Change Form</a>
                            <a href="{{ route('showcase.auth') }}#active-sessions-management" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Active Sessions Management</a>
                            <a href="{{ route('showcase.auth') }}#api-tokens-management" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">API Tokens Management</a>
                        </div>
                    </div>
                    
                    <!-- Landing - Hero & Features -->
                    <div>
                        <button @click="toggleSection('landing-hero')" class="w-full flex items-center justify-between px-3 py-2 text-sm font-medium rounded-lg {{ request()->routeIs('showcase.landing-hero') ? 'bg-blue-50 dark:bg-blue-900/30 text-blue-600 dark:text-blue-400' : 'text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700' }}">
                            <div class="flex items-center">
                                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"></path>
                                </svg>
                                Landing - Hero
                            </div>
                            <svg class="w-4 h-4 transition-transform" :class="openSections['landing-hero'] ? 'rotate-90' : ''" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <div x-show="openSections['landing-hero']" x-cloak class="ml-8 mt-1 space-y-1">
                            <a href="{{ route('showcase.landing-hero') }}#hero-section-centered" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Hero Section - Centered</a>
                            <a href="{{ route('showcase.landing-hero') }}#hero-section-split-layout" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Hero Section - Split</a>
                            <a href="{{ route('showcase.landing-hero') }}#features-grid-icon-cards" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Features Grid</a>
                            <a href="{{ route('showcase.landing-hero') }}#features-alternating-sections" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Alternating Features</a>
                            <a href="{{ route('showcase.landing-hero') }}#call-to-action-section" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">CTA Section</a>
                        </div>
                    </div>
                    
                    <!-- Landing - Pricing & Social Proof -->
                    <div>
                        <button @click="toggleSection('landing-pricing')" class="w-full flex items-center justify-between px-3 py-2 text-sm font-medium rounded-lg {{ request()->routeIs('showcase.landing-pricing') ? 'bg-blue-50 dark:bg-blue-900/30 text-blue-600 dark:text-blue-400' : 'text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700' }}">
                            <div class="flex items-center">
                                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                Landing - Pricing
                            </div>
                            <svg class="w-4 h-4 transition-transform" :class="openSections['landing-pricing'] ? 'rotate-90' : ''" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <div x-show="openSections['landing-pricing']" x-cloak class="ml-8 mt-1 space-y-1">
                            <a href="{{ route('showcase.landing-pricing') }}#pricing-table-with-toggle" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Pricing Table</a>
                            <a href="{{ route('showcase.landing-pricing') }}#testimonials-carousel" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Testimonials Carousel</a>
                            <a href="{{ route('showcase.landing-pricing') }}#logo-cloud-trusted-by" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Logo Cloud</a>
                            <a href="{{ route('showcase.landing-pricing') }}#stats-metrics-section" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Stats/Metrics</a>
                        </div>
                    </div>
                    
                    <!-- Landing - Content & Footer -->
                    <div>
                        <button @click="toggleSection('landing-content')" class="w-full flex items-center justify-between px-3 py-2 text-sm font-medium rounded-lg {{ request()->routeIs('showcase.landing-content') ? 'bg-blue-50 dark:bg-blue-900/30 text-blue-600 dark:text-blue-400' : 'text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700' }}">
                            <div class="flex items-center">
                                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path>
                                </svg>
                                Landing - Content
                            </div>
                            <svg class="w-4 h-4 transition-transform" :class="openSections['landing-content'] ? 'rotate-90' : ''" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <div x-show="openSections['landing-content']" x-cloak class="ml-8 mt-1 space-y-1">
                            <a href="{{ route('showcase.landing-content') }}#faq-accordion" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">FAQ Accordion</a>
                            <a href="{{ route('showcase.landing-content') }}#newsletter-signup" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Newsletter Signup</a>
                            <a href="{{ route('showcase.landing-content') }}#contact-form" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Contact Form</a>
                            <a href="{{ route('showcase.landing-content') }}#team-member-cards" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Team Member Cards</a>
                            <a href="{{ route('showcase.landing-content') }}#footer-multi-column" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Footer</a>
                        </div>
                    </div>
                    
                    <!-- E-commerce -->
                    <div>
                        <button @click="toggleSection('ecommerce')" class="w-full flex items-center justify-between px-3 py-2 text-sm font-medium rounded-lg {{ request()->routeIs(['showcase.ecommerce-products', 'showcase.ecommerce-cart', 'showcase.ecommerce-reviews']) ? 'bg-blue-50 dark:bg-blue-900/30 text-blue-600 dark:text-blue-400' : 'text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700' }}">
                            <div class="flex items-center">
                                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                </svg>
                                E-commerce
                            </div>
                            <svg class="w-4 h-4 transition-transform" :class="openSections['ecommerce'] ? 'rotate-90' : ''" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <div x-show="openSections['ecommerce']" x-cloak class="ml-8 mt-1 space-y-1">
                            <a href="{{ route('showcase.ecommerce-products') }}#product-card-grid" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Product Card - Grid</a>
                            <a href="{{ route('showcase.ecommerce-products') }}#product-filters" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Product Filters</a>
                            <a href="{{ route('showcase.ecommerce-products') }}#product-detail-page" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Product Detail Page</a>
                            <a href="{{ route('showcase.ecommerce-cart') }}#shopping-cart" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Shopping Cart</a>
                            <a href="{{ route('showcase.ecommerce-cart') }}#checkout-flow" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Checkout Flow</a>
                            <a href="{{ route('showcase.ecommerce-cart') }}#order-confirmation" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Order Confirmation</a>
                            <a href="{{ route('showcase.ecommerce-reviews') }}#product-reviews" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Product Reviews</a>
                            <a href="{{ route('showcase.ecommerce-reviews') }}#wishlist" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Wishlist</a>
                        </div>
                    </div>
                    
                    <!-- Advanced Features -->
                    <div>
                        <button @click="toggleSection('advanced')" class="w-full flex items-center justify-between px-3 py-2 text-sm font-medium rounded-lg {{ request()->routeIs(['showcase.advanced-drag-drop', 'showcase.advanced-ui']) ? 'bg-blue-50 dark:bg-blue-900/30 text-blue-600 dark:text-blue-400' : 'text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700' }}">
                            <div class="flex items-center">
                                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                                Advanced
                            </div>
                            <svg class="w-4 h-4 transition-transform" :class="openSections['advanced'] ? 'rotate-90' : ''" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <div x-show="openSections['advanced']" x-cloak class="ml-8 mt-1 space-y-1">
                            <a href="{{ route('showcase.advanced-drag-drop') }}#sortable-list" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Sortable List</a>
                            <a href="{{ route('showcase.advanced-drag-drop') }}#kanban-board" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Kanban Board</a>
                            <a href="{{ route('showcase.advanced-drag-drop') }}#drag-drop-file-upload" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Drag & Drop Upload</a>
                            <a href="{{ route('showcase.advanced-ui') }}#mini-calendar" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Mini Calendar</a>
                            <a href="{{ route('showcase.advanced-ui') }}#tree-view" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Tree View</a>
                            <a href="{{ route('showcase.advanced-ui') }}#command-palette" class="block px-3 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Command Palette</a>
                        </div>
                    </div>
                </nav>
            </div>
        </aside>

        <!-- Main Content -->
        <div class="ml-64 flex-1">
            <!-- Top Bar -->
            <header class="bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700 sticky top-0 z-10">
                <div class="px-6 py-4 flex justify-between items-center">
                    <div>
                        <h1 class="text-2xl font-bold text-gray-900 dark:text-white">@yield('page-title', 'UI Showcase')</h1>
                        <p class="text-sm text-gray-500 dark:text-gray-400 mt-1">@yield('page-description', 'Component library and design system')</p>
                    </div>
                    <div class="flex items-center space-x-4">
                        <!-- Theme Toggle -->
                        <button @click="darkMode = !darkMode" class="p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 transition">
                            <svg x-show="!darkMode" class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path>
                            </svg>
                            <svg x-show="darkMode" class="w-5 h-5 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path>
                            </svg>
                        </button>
                        <a href="/" class="text-sm text-gray-700 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white">Back to Site</a>
                    </div>
                </div>
            </header>

            <!-- Page Content -->
            <main class="p-6">
                @yield('content')
            </main>
        </div>
    </div>
</body>
</html>
