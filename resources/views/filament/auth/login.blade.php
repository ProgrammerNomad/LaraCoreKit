@extends('filament::layouts.auth')

@section('title', 'Admin Login')

<div class="flex items-center justify-center min-h-screen bg-gradient-to-br from-neutral-50 to-neutral-100 dark:from-neutral-900 dark:to-neutral-800">
    <div class="w-full max-w-md px-6">
        <div class="bg-white dark:bg-neutral-800 rounded-2xl shadow-lg dark:shadow-2xl p-8 border border-neutral-200 dark:border-neutral-700">
            <!-- Logo Section -->
            <div class="flex flex-col items-center mb-8">
                @if($logo = filament()->getBrandLogo())
                    <div class="mb-4">
                        <img src="{{ $logo }}" alt="LaraCoreKit" class="h-16 w-auto">
                    </div>
                @endif
                <h1 class="text-3xl font-bold text-neutral-900 dark:text-white text-center">{{ config('app.name', 'LaraCoreKit') }}</h1>
                <p class="text-neutral-600 dark:text-neutral-400 text-center mt-1 text-sm">Admin Dashboard</p>
            </div>

            <!-- Divider -->
            <div class="h-px bg-gradient-to-r from-transparent via-neutral-300 to-transparent dark:via-neutral-600 mb-8"></div>

            <!-- Login Form -->
            <form method="POST" action="{{ route('filament.admin.auth.login') }}" class="space-y-6">
                @csrf

                <!-- Email Input -->
                <div class="space-y-2">
                    <label for="email" class="block text-sm font-semibold text-neutral-900 dark:text-white">Email Address</label>
                    <input
                        type="email"
                        id="email"
                        name="email"
                        placeholder="admin@laracorekit.com"
                        value="{{ old('email') }}"
                        required
                        autofocus
                        autocomplete="email"
                        class="w-full px-4 py-3 rounded-lg border border-neutral-300 dark:border-neutral-600 bg-white dark:bg-neutral-700 text-neutral-900 dark:text-white placeholder-neutral-500 dark:placeholder-neutral-400 focus:ring-2 focus:ring-primary-500 focus:border-transparent dark:focus:ring-primary-400 transition"
                    >
                    @error('email')
                        <p class="text-sm text-danger-600 dark:text-danger-400 font-medium">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Password Input -->
                <div class="space-y-2">
                    <label for="password" class="block text-sm font-semibold text-neutral-900 dark:text-white">Password</label>
                    <div class="relative">
                        <input
                            type="password"
                            id="password"
                            name="password"
                            placeholder="••••••••"
                            required
                            autocomplete="current-password"
                            class="w-full px-4 py-3 rounded-lg border border-neutral-300 dark:border-neutral-600 bg-white dark:bg-neutral-700 text-neutral-900 dark:text-white placeholder-neutral-500 dark:placeholder-neutral-400 focus:ring-2 focus:ring-primary-500 focus:border-transparent dark:focus:ring-primary-400 transition"
                        >
                        <button type="button" onclick="togglePassword()" class="absolute right-4 top-1/2 -translate-y-1/2 text-neutral-600 dark:text-neutral-400 hover:text-neutral-900 dark:hover:text-white transition">
                            <svg id="eyeIcon" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                            </svg>
                        </button>
                    </div>
                    @error('password')
                        <p class="text-sm text-danger-600 dark:text-danger-400 font-medium">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Remember Me -->
                <div class="flex items-center">
                    <input
                        type="checkbox"
                        id="remember"
                        name="remember"
                        {{ old('remember') ? 'checked' : '' }}
                        class="w-4 h-4 rounded border-neutral-300 dark:border-neutral-600 text-primary-600 dark:text-primary-500 focus:ring-2 focus:ring-primary-500 dark:focus:ring-primary-400 cursor-pointer"
                    >
                    <label for="remember" class="ml-2 text-sm text-neutral-700 dark:text-neutral-300 cursor-pointer">Remember me</label>
                </div>

                <!-- Sign In Button -->
                <button
                    type="submit"
                    class="w-full py-3 px-4 bg-gradient-to-r from-primary-600 to-primary-700 dark:from-primary-500 dark:to-primary-600 hover:from-primary-700 hover:to-primary-800 dark:hover:from-primary-600 dark:hover:to-primary-700 text-white font-semibold rounded-lg transition duration-200 ease-in-out transform hover:scale-105 shadow-md hover:shadow-lg"
                >
                    Sign In
                </button>

                @if ($this->canResetPassword())
                    <div class="text-center">
                        <a href="{{ route('password.request') }}" class="text-sm text-primary-600 dark:text-primary-400 hover:text-primary-700 dark:hover:text-primary-300 font-medium transition">
                            Forgot password?
                        </a>
                    </div>
                @endif
            </form>
        </div>

        <!-- Footer Info -->
        <div class="mt-8 text-center text-xs text-neutral-600 dark:text-neutral-400">
            <p>LaraCoreKit Admin Panel &copy; {{ now()->year }}</p>
        </div>
    </div>
</div>

<script>
function togglePassword() {
    const passwordInput = document.getElementById('password');
    const eyeIcon = document.getElementById('eyeIcon');
    
    if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
        eyeIcon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-4.803m5.596-3.856a3.375 3.375 0 11-4.753 4.753m4.753-4.753L15.75 15.75m0 0l-4.753-4.753"></path>';
    } else {
        passwordInput.type = 'password';
        eyeIcon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>';
    }
}
</script>
