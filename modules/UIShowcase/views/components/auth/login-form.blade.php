@extends('showcase::components.component-layout')

@section('demo')
<form x-data="{ email: '', password: '', remember: false, loading: false }" 
    @submit.prevent="loading = true; setTimeout(() => loading = false, 2000)"
    class="max-w-md mx-auto bg-white dark:bg-gray-800 rounded-lg shadow p-8">
    <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">Sign In</h2>
    
    <div class="mb-4">
        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Email</label>
        <input type="email" x-model="email" required class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:text-white">
    </div>
    
    <div class="mb-4">
        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Password</label>
        <input type="password" x-model="password" required class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:text-white">
    </div>
    
    <div class="flex items-center justify-between mb-6">
        <label class="flex items-center cursor-pointer">
            <input type="checkbox" x-model="remember" class="rounded border-gray-300 text-blue-600 focus:ring-blue-500">
            <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">Remember me</span>
        </label>
        <a href="#" class="text-sm text-blue-600 hover:text-blue-500">Forgot password?</a>
    </div>
    
    <button type="submit" :disabled="loading" class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 disabled:opacity-50 transition">
        <span x-show="!loading">Sign In</span>
        <span x-show="loading" style="display:none">Signing in...</span>
    </button>
</form>
@endsection

@section('code')
<form x-data="{ email: '', password: '', remember: false, loading: false }" 
    @submit.prevent="loading = true; setTimeout(() => loading = false, 2000)"
    class="max-w-md mx-auto bg-white dark:bg-gray-800 rounded-lg shadow p-8">
    <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">Sign In</h2>
    
    <div class="mb-4">
        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Email</label>
        <input type="email" x-model="email" required class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 dark:bg-gray-700">
    </div>
    
    <div class="mb-4">
        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Password</label>
        <input type="password" x-model="password" required class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 dark:bg-gray-700">
    </div>
    
    <button type="submit" :disabled="loading" class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 disabled:opacity-50">
        <span x-show="!loading">Sign In</span>
        <span x-show="loading">Signing in...</span>
    </button>
</form>
@endsection
