@extends('showcase::components.component-layout')

@section('demo')
<form x-data="{ 
    password: '', 
    strength: 0,
    terms: false,
    calculateStrength() {
        let score = 0;
        if (this.password.length > 8) score++;
        if (/[a-z]/.test(this.password) && /[A-Z]/.test(this.password)) score++;
        if (/[0-9]/.test(this.password)) score++;
        if (/[^a-zA-Z0-9]/.test(this.password)) score++;
        this.strength = score;
    }
}" class="max-w-md mx-auto bg-white dark:bg-gray-800 rounded-lg shadow p-8">
    <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">Create Account</h2>
    
    <div class="mb-4">
        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Full Name</label>
        <input type="text" class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg dark:bg-gray-700 dark:text-white">
    </div>
    
    <div class="mb-4">
        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Email</label>
        <input type="email" class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg dark:bg-gray-700 dark:text-white">
    </div>
    
    <div class="mb-4">
        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Password</label>
        <input type="password" x-model="password" @input="calculateStrength()" class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg dark:bg-gray-700 dark:text-white">
        <div class="mt-2 flex gap-1">
            <div class="h-1 flex-1 rounded transition" :class="strength >= 1 ? 'bg-red-500' : 'bg-gray-200 dark:bg-gray-600'"></div>
            <div class="h-1 flex-1 rounded transition" :class="strength >= 2 ? 'bg-yellow-500' : 'bg-gray-200 dark:bg-gray-600'"></div>
            <div class="h-1 flex-1 rounded transition" :class="strength >= 3 ? 'bg-blue-500' : 'bg-gray-200 dark:bg-gray-600'"></div>
            <div class="h-1 flex-1 rounded transition" :class="strength >= 4 ? 'bg-green-500' : 'bg-gray-200 dark:bg-gray-600'"></div>
        </div>
    </div>
    
    <div class="mb-6">
        <label class="flex items-start cursor-pointer">
            <input type="checkbox" x-model="terms" class="mt-1 rounded border-gray-300 text-blue-600 focus:ring-blue-500">
            <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">
                I agree to the <a href="#" class="text-blue-600 hover:text-blue-500">Terms and Conditions</a>
            </span>
        </label>
    </div>
    
    <button type="submit" :disabled="!terms" class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 disabled:opacity-50 disabled:cursor-not-allowed transition">
        Create Account
    </button>
</form>
@endsection

@section('code')
<form x-data="{ password: '', strength: 0, terms: false, calculateStrength() { let score = 0; if (this.password.length > 8) score++; if (/[a-z]/.test(this.password) && /[A-Z]/.test(this.password)) score++; if (/[0-9]/.test(this.password)) score++; if (/[^a-zA-Z0-9]/.test(this.password)) score++; this.strength = score; } }" class="max-w-md mx-auto bg-white dark:bg-gray-800 rounded-lg shadow p-8">
    <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">Create Account</h2>
    {{-- Form fields --}}
    <div class="mb-4">
        <input type="password" x-model="password" @input="calculateStrength()" class="w-full px-4 py-2 border rounded-lg dark:bg-gray-700">
        <div class="mt-2 flex gap-1">
            <div class="h-1 flex-1 rounded" :class="strength >= 1 ? 'bg-red-500' : 'bg-gray-200'"></div>
            <div class="h-1 flex-1 rounded" :class="strength >= 2 ? 'bg-yellow-500' : 'bg-gray-200'"></div>
            <div class="h-1 flex-1 rounded" :class="strength >= 3 ? 'bg-blue-500' : 'bg-gray-200'"></div>
            <div class="h-1 flex-1 rounded" :class="strength >= 4 ? 'bg-green-500' : 'bg-gray-200'"></div>
        </div>
    </div>
    <button type="submit" :disabled="!terms" class="w-full bg-blue-600 text-white py-2 rounded-lg disabled:opacity-50">Create Account</button>
</form>
@endsection
