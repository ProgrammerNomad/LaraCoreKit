# LaraCoreKit - UI Component Usage Guide

**Complete Guide to Using UI Showcase Components in Your Projects**

## Table of Contents

1. [Quick Start](#quick-start)
2. [Feedback Components](#feedback-components)
3. [Integration Guide](#integration-guide)
4. [Dependencies & Setup](#dependencies--setup)
5. [Customization](#customization)
6. [Best Practices](#best-practices)
7. [Troubleshooting](#troubleshooting)

---

## Quick Start

### Step 1: View Components
Visit the UI Showcase to see all available components:
- **Main Showcase**: https://laracorekit.mobrilz.digital/ui-showcase/
- **Feedback Components**: https://laracorekit.mobrilz.digital/ui-showcase/feedback

### Step 2: Copy Code
Each component has a "Copy" button - click it to copy the HTML code to your clipboard.

### Step 3: Paste in Your Project
Paste the code directly into your Blade templates or HTML files.

### Step 4: Ensure Dependencies
Make sure you have:
- TailwindCSS configured
- Alpine.js loaded (included with Livewire 3)

---

## Feedback Components

The feedback showcase includes 22+ components for user notifications and interactions:

### 1. Alerts

**Success Alert**
```html
<div class="bg-green-50 dark:bg-green-900/20 border border-green-200 dark:border-green-800 rounded-lg p-4">
    <div class="flex">
        <svg class="w-5 h-5 text-green-600 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
        </svg>
        <div class="ml-3">
            <h3 class="text-sm font-medium text-green-800 dark:text-green-300">Success</h3>
            <p class="mt-1 text-sm text-green-700 dark:text-green-400">Your action was completed successfully.</p>
        </div>
    </div>
</div>
```

**Usage in Laravel Controller:**
```php
public function store(Request $request)
{
    // Your logic here
    
    return back()->with('success', 'Item created successfully!');
}
```

**Display in Blade:**
```blade
@if(session('success'))
    <div class="bg-green-50 dark:bg-green-900/20 border border-green-200 dark:border-green-800 rounded-lg p-4 mb-4">
        <div class="flex">
            <svg class="w-5 h-5 text-green-600 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
            </svg>
            <div class="ml-3">
                <h3 class="text-sm font-medium text-green-800 dark:text-green-300">Success</h3>
                <p class="mt-1 text-sm text-green-700 dark:text-green-400">{{ session('success') }}</p>
            </div>
        </div>
    </div>
@endif
```

### 2. Toast Notifications

**Basic Toast**
```html
<div x-data="{ show: false, message: '' }" 
     @notify.window="show = true; message = $event.detail; setTimeout(() => show = false, 3000)">
    <div x-show="show" 
         x-transition
         class="fixed top-4 right-4 bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg shadow-lg p-4 max-w-sm z-50">
        <div class="flex items-center">
            <svg class="w-5 h-5 text-green-600 dark:text-green-400 mr-3" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
            </svg>
            <p class="text-sm text-gray-900 dark:text-white" x-text="message"></p>
        </div>
    </div>
</div>
```

**Trigger from JavaScript:**
```javascript
window.dispatchEvent(new CustomEvent('notify', { 
    detail: 'Action completed successfully!' 
}));
```

**Trigger from Livewire:**
```php
$this->dispatch('notify', message: 'Data saved!');
```

### 3. Modals

**Confirmation Modal**
```html
<div x-data="{ open: false }">
    <button @click="open = true" class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700">
        Delete Item
    </button>
    
    <div x-show="open" class="fixed inset-0 z-50 overflow-y-auto" x-cloak>
        <div @click="open = false" class="fixed inset-0 bg-black bg-opacity-50"></div>
        
        <div class="relative min-h-screen flex items-center justify-center p-4">
            <div @click.stop class="relative bg-white dark:bg-gray-800 rounded-lg shadow-xl max-w-md w-full p-6">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">
                    Confirm Deletion
                </h3>
                <p class="text-gray-600 dark:text-gray-400 mb-6">
                    Are you sure you want to delete this item? This action cannot be undone.
                </p>
                <div class="flex space-x-3">
                    <button @click="open = false" class="flex-1 px-4 py-2 bg-gray-200 dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded-lg hover:bg-gray-300 dark:hover:bg-gray-600">
                        Cancel
                    </button>
                    <button @click="open = false" class="flex-1 px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700">
                        Delete
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
```

### 4. Loading States

**Spinner**
```html
<div class="flex items-center justify-center">
    <div class="animate-spin rounded-full h-8 w-8 border-b-2 border-blue-600"></div>
</div>
```

**Button with Loading**
```html
<button x-data="{ loading: false }" 
        @click="loading = true; setTimeout(() => loading = false, 2000)"
        :disabled="loading"
        class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 disabled:opacity-50">
    <span x-show="!loading">Submit</span>
    <span x-show="loading" class="flex items-center">
        <svg class="animate-spin h-4 w-4 mr-2" viewBox="0 0 24 24">
            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4" fill="none"></circle>
            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
        </svg>
        Processing...
    </span>
</button>
```

### 5. Progress Bars

**Simple Progress Bar**
```html
<div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
    <div class="bg-blue-600 h-2 rounded-full" style="width: 45%"></div>
</div>
```

**Dynamic Progress with Alpine.js**
```html
<div x-data="{ progress: 0 }" x-init="setInterval(() => { if (progress < 100) progress += 10 }, 500)">
    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
        <div class="bg-blue-600 h-2 rounded-full transition-all duration-300" :style="`width: ${progress}%`"></div>
    </div>
    <p class="text-sm text-gray-600 dark:text-gray-400 mt-2" x-text="`${progress}% complete`"></p>
</div>
```

---

## Integration Guide

### For New Laravel Projects

1. **Install LaraCoreKit**
```bash
git clone https://github.com/ProgrammerNomad/LaraCoreKit.git
cd LaraCoreKit
composer install
npm install
```

2. **Copy Components**
- Browse to `/ui-showcase/feedback`
- Click "Copy" on desired component
- Paste into your Blade templates

3. **Create Reusable Components**
```bash
php artisan make:component Alert
```

**resources/views/components/alert.blade.php:**
```blade
@props(['type' => 'info', 'message'])

@php
    $colors = [
        'info' => 'bg-blue-50 dark:bg-blue-900/20 border-blue-200 dark:border-blue-800 text-blue-600 dark:text-blue-400',
        'success' => 'bg-green-50 dark:bg-green-900/20 border-green-200 dark:border-green-800 text-green-600 dark:text-green-400',
        'warning' => 'bg-yellow-50 dark:bg-yellow-900/20 border-yellow-200 dark:border-yellow-800 text-yellow-600 dark:text-yellow-400',
        'error' => 'bg-red-50 dark:bg-red-900/20 border-red-200 dark:border-red-800 text-red-600 dark:text-red-400',
    ];
@endphp

<div class="{{ $colors[$type] }} border rounded-lg p-4">
    <div class="flex">
        <svg class="w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20">
            <!-- Icon based on type -->
        </svg>
        <p class="text-sm">{{ $message }}</p>
    </div>
</div>
```

**Usage:**
```blade
<x-alert type="success" message="Data saved successfully!" />
```

### For Existing Projects

1. **Ensure TailwindCSS is configured**
2. **Add Alpine.js** (if not using Livewire 3):
```html
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
```

3. **Copy component code** from showcase
4. **Adjust classes** to match your design system if needed

---

## Dependencies & Setup

### Required Dependencies

**TailwindCSS 4 (or 3.x)**
```bash
npm install -D tailwindcss
npx tailwindcss init
```

**Alpine.js 3.x**
- Already included if using Livewire 3
- Otherwise, add to your layout:
```html
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
```

### TailwindCSS Configuration

Add to `tailwind.config.js`:
```javascript
module.exports = {
  darkMode: 'class',
  content: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
  ],
  theme: {
    extend: {},
  },
  plugins: [],
}
```

### Dark Mode Setup

Add to your main layout:
```html
<html x-data="{ darkMode: localStorage.getItem('darkMode') === 'true' }" 
      x-init="$watch('darkMode', val => localStorage.setItem('darkMode', val))" 
      :class="{ 'dark': darkMode }">
```

Add dark mode toggle button:
```html
<button @click="darkMode = !darkMode" 
        class="px-3 py-2 rounded-lg bg-gray-200 dark:bg-gray-700">
    <svg x-show="!darkMode" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
        <!-- Moon icon -->
    </svg>
    <svg x-show="darkMode" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
        <!-- Sun icon -->
    </svg>
</button>
```

---

## Customization

### Changing Colors

Replace Tailwind color classes:
```html
<!-- Original -->
<div class="bg-blue-600 text-white">...</div>

<!-- Custom -->
<div class="bg-purple-600 text-white">...</div>
```

### Adjusting Sizes

```html
<!-- Small -->
<div class="p-2 text-xs">...</div>

<!-- Medium (default) -->
<div class="p-4 text-sm">...</div>

<!-- Large -->
<div class="p-6 text-base">...</div>
```

### Custom Animations

Add to your CSS:
```css
@keyframes slideIn {
    from { transform: translateX(-100%); }
    to { transform: translateX(0); }
}

.animate-slideIn {
    animation: slideIn 0.3s ease-out;
}
```

---

## Best Practices

### 1. Component Organization
```
resources/views/components/
├── alerts/
│   ├── info.blade.php
│   ├── success.blade.php
│   ├── warning.blade.php
│   └── error.blade.php
├── modals/
│   ├── confirmation.blade.php
│   └── form.blade.php
└── loading/
    ├── spinner.blade.php
    └── skeleton.blade.php
```

### 2. Reusability
Create generic components with props:
```blade
<x-modal :title="$title" :show="$show">
    {{ $slot }}
</x-modal>
```

### 3. Accessibility
Always include:
- ARIA labels
- Keyboard navigation
- Focus states
- Screen reader text

Example:
```html
<button aria-label="Close modal" @click="open = false">
    <svg aria-hidden="true">...</svg>
</button>
```

### 4. Performance
- Use `x-cloak` to hide elements before Alpine.js loads
- Minimize Alpine.js state in large lists
- Use CSS transitions instead of JavaScript when possible

### 5. Dark Mode
- Test all components in both light and dark modes
- Use `dark:` classes consistently
- Ensure sufficient contrast ratios

---

## Troubleshooting

### Alpine.js not working

**Problem:** Components don't respond to clicks
**Solution:** Ensure Alpine.js is loaded:
```html
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
```

### Dark mode classes not applying

**Problem:** `dark:` classes not working
**Solution:** Add `darkMode: 'class'` to `tailwind.config.js`

### Styles not appearing

**Problem:** TailwindCSS classes not rendering
**Solution:** Add paths to `tailwind.config.js` content array:
```javascript
content: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
]
```

### Modal backdrop not covering full screen

**Problem:** Modal backdrop doesn't cover viewport
**Solution:** Ensure parent elements don't have `overflow-hidden`

### Transitions not smooth

**Problem:** Alpine.js transitions are jumpy
**Solution:** Add transition classes:
```html
x-transition:enter="transition ease-out duration-300"
x-transition:enter-start="opacity-0"
x-transition:enter-end="opacity-100"
```

---

## Additional Resources

- **Live Demo:** https://laracorekit.mobrilz.digital/ui-showcase/
- **GitHub Repository:** https://github.com/ProgrammerNomad/LaraCoreKit
- **TailwindCSS Docs:** https://tailwindcss.com/docs
- **Alpine.js Docs:** https://alpinejs.dev/
- **Livewire Docs:** https://livewire.laravel.com/

---

## Support

For issues or questions:
1. Check this guide and the troubleshooting section
2. Visit the UI Showcase for working examples
3. Open an issue on GitHub
4. Join our community discussions

---

**Happy Coding! 🚀**

*Built with ❤️ by the LaraCoreKit Team*
