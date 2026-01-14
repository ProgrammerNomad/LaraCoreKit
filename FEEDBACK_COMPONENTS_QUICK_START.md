# Feedback Components - Quick Start Guide

**Simple, Copy-Paste Ready Feedback Components**

> 🎯 **Goal:** Get feedback components working in your project in under 5 minutes

---

## Prerequisites Checklist

- ✅ TailwindCSS installed and configured
- ✅ Alpine.js loaded (comes with Livewire 3, or add via CDN)
- ✅ Dark mode configured in `tailwind.config.js` (optional)

---

## 1. Basic Alert Messages

### Copy & Paste This Component

**File:** `resources/views/components/alert.blade.php`

```blade
@props(['type' => 'info'])

@php
$styles = [
    'success' => 'bg-green-50 dark:bg-green-900/20 border-green-200 dark:border-green-800 text-green-800 dark:text-green-300',
    'error' => 'bg-red-50 dark:bg-red-900/20 border-red-200 dark:border-red-800 text-red-800 dark:text-red-300',
    'warning' => 'bg-yellow-50 dark:bg-yellow-900/20 border-yellow-200 dark:border-yellow-800 text-yellow-800 dark:text-yellow-300',
    'info' => 'bg-blue-50 dark:bg-blue-900/20 border-blue-200 dark:border-blue-800 text-blue-800 dark:text-blue-300',
];

$icons = [
    'success' => '<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>',
    'error' => '<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"></path>',
    'warning' => '<path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path>',
    'info' => '<path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>',
];
@endphp

<div class="border rounded-lg p-4 {{ $styles[$type] }}">
    <div class="flex">
        <svg class="w-5 h-5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
            {!! $icons[$type] !!}
        </svg>
        <div class="ml-3">
            {{ $slot }}
        </div>
    </div>
</div>
```

### Use It Like This

```blade
<x-alert type="success">
    <h3 class="text-sm font-medium">Success!</h3>
    <p class="mt-1 text-sm">Your changes have been saved.</p>
</x-alert>

<x-alert type="error">
    <h3 class="text-sm font-medium">Error</h3>
    <p class="mt-1 text-sm">Something went wrong. Please try again.</p>
</x-alert>

<x-alert type="warning">
    <h3 class="text-sm font-medium">Warning</h3>
    <p class="mt-1 text-sm">Please review this information carefully.</p>
</x-alert>

<x-alert type="info">
    <h3 class="text-sm font-medium">Information</h3>
    <p class="mt-1 text-sm">Here's some helpful information.</p>
</x-alert>
```

### With Laravel Session Messages

```blade
@if(session('success'))
    <x-alert type="success">
        <p class="text-sm font-medium">{{ session('success') }}</p>
    </x-alert>
@endif

@if($errors->any())
    <x-alert type="error">
        <h3 class="text-sm font-medium mb-2">Please fix the following errors:</h3>
        <ul class="text-sm list-disc list-inside">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </x-alert>
@endif
```

---

## 2. Toast Notifications

### Copy & Paste This Component

Add this to your main layout (`resources/views/layouts/app.blade.php`):

```blade
<!-- Toast Container -->
<div x-data="toastManager()" @toast.window="showToast($event.detail)">
    <template x-for="(toast, index) in toasts" :key="toast.id">
        <div x-show="toast.visible"
             x-transition:enter="transform ease-out duration-300 transition"
             x-transition:enter-start="translate-y-2 opacity-0"
             x-transition:enter-end="translate-y-0 opacity-100"
             x-transition:leave="transition ease-in duration-200"
             x-transition:leave-start="opacity-100"
             x-transition:leave-end="opacity-0"
             class="fixed top-4 right-4 z-50 max-w-sm w-full bg-white dark:bg-gray-800 rounded-lg shadow-lg border border-gray-200 dark:border-gray-700 p-4"
             :style="`margin-top: ${index * 70}px`">
            <div class="flex items-start">
                <div class="flex-shrink-0" :class="{
                    'text-green-600 dark:text-green-400': toast.type === 'success',
                    'text-red-600 dark:text-red-400': toast.type === 'error',
                    'text-yellow-600 dark:text-yellow-400': toast.type === 'warning',
                    'text-blue-600 dark:text-blue-400': toast.type === 'info'
                }">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                        <template x-if="toast.type === 'success'">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </template>
                        <template x-if="toast.type === 'error'">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"></path>
                        </template>
                        <template x-if="toast.type === 'warning'">
                            <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                        </template>
                        <template x-if="toast.type === 'info'">
                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
                        </template>
                    </svg>
                </div>
                <div class="ml-3 flex-1">
                    <p class="text-sm font-medium text-gray-900 dark:text-white" x-text="toast.title"></p>
                    <p class="mt-1 text-sm text-gray-600 dark:text-gray-400" x-text="toast.message"></p>
                </div>
                <button @click="removeToast(toast.id)" class="ml-4 flex-shrink-0 text-gray-400 hover:text-gray-500 dark:text-gray-500 dark:hover:text-gray-400">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
        </div>
    </template>
</div>

<script>
function toastManager() {
    return {
        toasts: [],
        nextId: 0,
        
        showToast({ type = 'info', title = '', message = '', duration = 3000 }) {
            const id = this.nextId++;
            const toast = { id, type, title, message, visible: true };
            this.toasts.push(toast);
            
            setTimeout(() => {
                this.removeToast(id);
            }, duration);
        },
        
        removeToast(id) {
            const index = this.toasts.findIndex(t => t.id === id);
            if (index !== -1) {
                this.toasts[index].visible = false;
                setTimeout(() => {
                    this.toasts.splice(index, 1);
                }, 300);
            }
        }
    }
}
</script>
```

### Trigger Toasts from Anywhere

**From JavaScript:**
```javascript
window.dispatchEvent(new CustomEvent('toast', {
    detail: {
        type: 'success',
        title: 'Success!',
        message: 'Your action was completed.',
        duration: 3000
    }
}));
```

**From Livewire:**
```php
// In your Livewire component
$this->dispatch('toast', 
    type: 'success',
    title: 'Success!',
    message: 'Data saved successfully.',
    duration: 3000
);
```

**From Blade (inline):**
```blade
<button onclick="window.dispatchEvent(new CustomEvent('toast', { 
    detail: { type: 'success', title: 'Done!', message: 'Action completed.' } 
}))">
    Show Toast
</button>
```

---

## 3. Confirmation Modal

### Copy & Paste This Component

**File:** `resources/views/components/confirm-modal.blade.php`

```blade
@props(['show' => false, 'title' => 'Confirm Action', 'message' => 'Are you sure?'])

<div x-data="{ open: @json($show) }" 
     @open-modal.window="open = true"
     @close-modal.window="open = false"
     x-show="open" 
     class="fixed inset-0 z-50 overflow-y-auto" 
     style="display: none;">
    <!-- Backdrop -->
    <div @click="open = false" 
         class="fixed inset-0 bg-black bg-opacity-50 transition-opacity"
         x-show="open"
         x-transition:enter="ease-out duration-300"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="ease-in duration-200"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0">
    </div>

    <!-- Modal -->
    <div class="relative min-h-screen flex items-center justify-center p-4">
        <div @click.stop 
             class="relative bg-white dark:bg-gray-800 rounded-lg shadow-xl max-w-md w-full p-6"
             x-show="open"
             x-transition:enter="ease-out duration-300"
             x-transition:enter-start="opacity-0 translate-y-4"
             x-transition:enter-end="opacity-100 translate-y-0"
             x-transition:leave="ease-in duration-200"
             x-transition:leave-start="opacity-100 translate-y-0"
             x-transition:leave-end="opacity-0 translate-y-4">
            
            <div class="flex items-start">
                <div class="flex-shrink-0">
                    <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
                    </svg>
                </div>
                <div class="ml-3 flex-1">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                        {{ $title }}
                    </h3>
                    <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">
                        {{ $message }}
                    </p>
                </div>
            </div>

            <div class="mt-6 flex space-x-3">
                <button @click="open = false" 
                        class="flex-1 px-4 py-2 bg-gray-200 dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded-lg hover:bg-gray-300 dark:hover:bg-gray-600 transition">
                    Cancel
                </button>
                <button @click="open = false; {{ $attributes->get('on-confirm', '') }}" 
                        class="flex-1 px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 transition">
                    Confirm
                </button>
            </div>
        </div>
    </div>
</div>
```

### Use It Like This

```blade
<!-- Add to your layout -->
<x-confirm-modal 
    title="Delete Item"
    message="This action cannot be undone. Are you sure?"
    on-confirm="$wire.deleteItem()"
/>

<!-- Trigger it -->
<button @click="$dispatch('open-modal')">
    Delete
</button>
```

**Or with a Livewire method:**
```blade
<button wire:click="confirmDelete" class="px-4 py-2 bg-red-600 text-white rounded-lg">
    Delete
</button>

<!-- In your Livewire component -->
public function confirmDelete()
{
    $this->dispatch('open-modal');
}

public function deleteItem()
{
    // Perform deletion
    $this->dispatch('close-modal');
    $this->dispatch('toast', type: 'success', title: 'Deleted!', message: 'Item has been deleted.');
}
```

---

## 4. Loading States

### Inline Spinner

```blade
<div class="flex items-center justify-center p-8">
    <div class="animate-spin rounded-full h-8 w-8 border-b-2 border-blue-600"></div>
</div>
```

### Button with Loading State

```blade
<button wire:click="saveData" 
        wire:loading.attr="disabled"
        class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 disabled:opacity-50">
    <span wire:loading.remove>Save</span>
    <span wire:loading class="flex items-center">
        <svg class="animate-spin -ml-1 mr-2 h-4 w-4 text-white" fill="none" viewBox="0 0 24 24">
            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
        </svg>
        Saving...
    </span>
</button>
```

### Skeleton Loader

```blade
<div class="animate-pulse space-y-4">
    <div class="h-4 bg-gray-200 dark:bg-gray-700 rounded w-3/4"></div>
    <div class="h-4 bg-gray-200 dark:bg-gray-700 rounded"></div>
    <div class="h-4 bg-gray-200 dark:bg-gray-700 rounded w-5/6"></div>
</div>
```

---

## 5. Progress Bar

### Simple Progress

```blade
<div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2.5">
    <div class="bg-blue-600 h-2.5 rounded-full" style="width: 45%"></div>
</div>
```

### With Percentage Display

```blade
<div class="space-y-2">
    <div class="flex justify-between text-sm">
        <span class="text-gray-700 dark:text-gray-300">Progress</span>
        <span class="text-gray-700 dark:text-gray-300">{{ $percentage }}%</span>
    </div>
    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2.5">
        <div class="bg-blue-600 h-2.5 rounded-full transition-all duration-300" 
             style="width: {{ $percentage }}%"></div>
    </div>
</div>
```

### Dynamic with Alpine.js

```blade
<div x-data="{ progress: 0 }" 
     x-init="const interval = setInterval(() => { 
         if (progress < 100) progress += 10; 
         else clearInterval(interval); 
     }, 500)">
    <div class="flex justify-between text-sm mb-2">
        <span class="text-gray-700 dark:text-gray-300">Processing</span>
        <span class="text-gray-700 dark:text-gray-300" x-text="`${progress}%`"></span>
    </div>
    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2.5">
        <div class="bg-blue-600 h-2.5 rounded-full transition-all duration-300" 
             :style="`width: ${progress}%`"></div>
    </div>
</div>
```

---

## Common Integration Patterns

### Pattern 1: Form Submission with Feedback

```blade
<form wire:submit.prevent="save">
    <!-- Form fields here -->
    
    <button type="submit" 
            wire:loading.attr="disabled"
            class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 disabled:opacity-50">
        <span wire:loading.remove>Save Changes</span>
        <span wire:loading>Saving...</span>
    </button>
</form>

<!-- In your Livewire component -->
public function save()
{
    $this->validate();
    
    // Save data
    
    $this->dispatch('toast', 
        type: 'success',
        title: 'Success!',
        message: 'Your changes have been saved.'
    );
}
```

### Pattern 2: Confirm Before Dangerous Action

```blade
<div x-data="{ confirmOpen: false }">
    <button @click="confirmOpen = true" 
            class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700">
        Delete Account
    </button>
    
    <!-- Confirmation Modal -->
    <div x-show="confirmOpen" class="fixed inset-0 z-50" style="display: none;">
        <div @click="confirmOpen = false" class="fixed inset-0 bg-black bg-opacity-50"></div>
        <div class="relative min-h-screen flex items-center justify-center p-4">
            <div @click.stop class="relative bg-white dark:bg-gray-800 rounded-lg shadow-xl max-w-md w-full p-6">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">
                    Confirm Deletion
                </h3>
                <p class="text-gray-600 dark:text-gray-400 mb-6">
                    This action cannot be undone. Are you absolutely sure?
                </p>
                <div class="flex space-x-3">
                    <button @click="confirmOpen = false" 
                            class="flex-1 px-4 py-2 bg-gray-200 dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded-lg">
                        Cancel
                    </button>
                    <button @click="confirmOpen = false; $wire.deleteAccount()" 
                            class="flex-1 px-4 py-2 bg-red-600 text-white rounded-lg">
                        Delete
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
```

### Pattern 3: Multi-Step Process with Progress

```blade
<div x-data="{ step: 1, maxSteps: 3 }">
    <!-- Progress Bar -->
    <div class="mb-8">
        <div class="flex justify-between text-sm mb-2">
            <span class="text-gray-700 dark:text-gray-300">Step <span x-text="step"></span> of <span x-text="maxSteps"></span></span>
            <span class="text-gray-700 dark:text-gray-300" x-text="`${Math.round((step/maxSteps)*100)}%`"></span>
        </div>
        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
            <div class="bg-blue-600 h-2 rounded-full transition-all duration-300" 
                 :style="`width: ${(step/maxSteps)*100}%`"></div>
        </div>
    </div>
    
    <!-- Step Content -->
    <div x-show="step === 1">
        <h3 class="text-lg font-semibold mb-4">Step 1: Basic Info</h3>
        <!-- Step 1 content -->
        <button @click="step = 2" class="px-4 py-2 bg-blue-600 text-white rounded-lg">
            Next
        </button>
    </div>
    
    <div x-show="step === 2">
        <h3 class="text-lg font-semibold mb-4">Step 2: Details</h3>
        <!-- Step 2 content -->
        <div class="flex space-x-3">
            <button @click="step = 1" class="px-4 py-2 bg-gray-200 dark:bg-gray-700 rounded-lg">
                Back
            </button>
            <button @click="step = 3" class="px-4 py-2 bg-blue-600 text-white rounded-lg">
                Next
            </button>
        </div>
    </div>
    
    <div x-show="step === 3">
        <h3 class="text-lg font-semibold mb-4">Step 3: Confirm</h3>
        <!-- Step 3 content -->
        <div class="flex space-x-3">
            <button @click="step = 2" class="px-4 py-2 bg-gray-200 dark:bg-gray-700 rounded-lg">
                Back
            </button>
            <button @click="$wire.submit()" class="px-4 py-2 bg-green-600 text-white rounded-lg">
                Finish
            </button>
        </div>
    </div>
</div>
```

---

## Quick Setup Checklist

- [ ] TailwindCSS installed (`npm install -D tailwindcss`)
- [ ] Alpine.js loaded (comes with Livewire 3 or via CDN)
- [ ] Dark mode configured in `tailwind.config.js` (`darkMode: 'class'`)
- [ ] Created alert component (`resources/views/components/alert.blade.php`)
- [ ] Added toast manager to layout
- [ ] Tested basic alert message
- [ ] Tested toast notification
- [ ] Tested modal confirmation

---

## Next Steps

1. ✅ Copy components from this guide
2. ✅ Test in your project
3. ✅ Customize colors and styles to match your brand
4. ✅ Explore more components at https://laracorekit.mobrilz.digital/ui-showcase/feedback
5. ✅ Read the full guide: [COMPONENT_USAGE_GUIDE.md](./COMPONENT_USAGE_GUIDE.md)

---

**Need Help?**
- Visit: https://laracorekit.mobrilz.digital/ui-showcase/
- GitHub: https://github.com/ProgrammerNomad/LaraCoreKit
- Documentation: [COMPONENT_USAGE_GUIDE.md](./COMPONENT_USAGE_GUIDE.md)

---

**Happy Coding! 🚀**
