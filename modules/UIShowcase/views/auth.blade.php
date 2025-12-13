@extends('showcase::layouts.showcase')

@section('page-title', 'Authentication Flows')
@section('page-description', 'Login, registration, 2FA, profile settings, and session management')

@section('content')
<div class="max-w-7xl mx-auto space-y-8">

    <!-- Enhanced Login Form -->
    @component('showcase::components.showcase-item', [
        'title' => 'Enhanced Login Form',
        'description' => 'Login form with validation states, remember me, and forgot password',
        'code' => '<form x-data="{ email: &#39;&#39;, password: &#39;&#39;, remember: false, loading: false }" 
    &#64;submit.prevent="loading = true; setTimeout(() => loading = false, 2000)"
    class="max-w-md mx-auto bg-white dark:bg-gray-800 rounded-lg shadow p-8">
    <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">Sign In</h2>
    
    <div class="mb-4">
        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Email</label>
        <input type="email" x-model="email" required
            class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 dark:bg-gray-700">
    </div>
    
    <div class="mb-4">
        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Password</label>
        <input type="password" x-model="password" required
            class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 dark:bg-gray-700">
    </div>
    
    <div class="flex items-center justify-between mb-6">
        <label class="flex items-center">
            <input type="checkbox" x-model="remember" class="rounded border-gray-300 text-blue-600 focus:ring-blue-500">
            <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">Remember me</span>
        </label>
        <a href="#" class="text-sm text-blue-600 hover:text-blue-500">Forgot password?</a>
    </div>
    
    <button type="submit" :disabled="loading"
        class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 disabled:opacity-50">
        <span x-show="!loading">Sign In</span>
        <span x-show="loading">Signing in...</span>
    </button>
</form>'
    ])
        @slot('preview', null, [])
            <form x-data="{ email: '', password: '', remember: false, loading: false }" 
                @submit.prevent="loading = true; setTimeout(() => loading = false, 2000)"
                class="max-w-md mx-auto bg-white dark:bg-gray-800 rounded-lg shadow p-8">
                <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">Sign In</h2>
                
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Email</label>
                    <input type="email" x-model="email" required
                        class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:text-white">
                </div>
                
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Password</label>
                    <input type="password" x-model="password" required
                        class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:text-white">
                </div>
                
                <div class="flex items-center justify-between mb-6">
                    <label class="flex items-center cursor-pointer">
                        <input type="checkbox" x-model="remember" class="rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                        <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">Remember me</span>
                    </label>
                    <a href="#" class="text-sm text-blue-600 hover:text-blue-500">Forgot password?</a>
                </div>
                
                <button type="submit" :disabled="loading"
                    class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 disabled:opacity-50 transition">
                    <span x-show="!loading">Sign In</span>
                    <span x-show="loading" style="display: none;">Signing in...</span>
                </button>
            </form>
        @endslot
    @endcomponent

    <!-- Enhanced Register Form -->
    @component('showcase::components.showcase-item', [
        'title' => 'Enhanced Register Form',
        'description' => 'Registration form with password strength indicator and terms checkbox',
        'code' => '<form x-data="{ 
    password: &#39;&#39;, 
    confirmPassword: &#39;&#39;,
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
        <input type="text" class="w-full px-4 py-2 border rounded-lg dark:bg-gray-700">
    </div>
    
    <div class="mb-4">
        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Email</label>
        <input type="email" class="w-full px-4 py-2 border rounded-lg dark:bg-gray-700">
    </div>
    
    <div class="mb-4">
        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Password</label>
        <input type="password" x-model="password" &#64;input="calculateStrength()"
            class="w-full px-4 py-2 border rounded-lg dark:bg-gray-700">
        <div class="mt-2 flex gap-1">
            <div class="h-1 flex-1 rounded" :class="strength >= 1 ? &#39;bg-red-500&#39; : &#39;bg-gray-200&#39;"></div>
            <div class="h-1 flex-1 rounded" :class="strength >= 2 ? &#39;bg-yellow-500&#39; : &#39;bg-gray-200&#39;"></div>
            <div class="h-1 flex-1 rounded" :class="strength >= 3 ? &#39;bg-blue-500&#39; : &#39;bg-gray-200&#39;"></div>
            <div class="h-1 flex-1 rounded" :class="strength >= 4 ? &#39;bg-green-500&#39; : &#39;bg-gray-200&#39;"></div>
        </div>
    </div>
    
    <div class="mb-4">
        <label class="flex items-start">
            <input type="checkbox" x-model="terms" class="mt-1 rounded">
            <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">
                I agree to the <a href="#" class="text-blue-600">Terms and Conditions</a>
            </span>
        </label>
    </div>
    
    <button type="submit" :disabled="!terms" class="w-full bg-blue-600 text-white py-2 rounded-lg disabled:opacity-50">
        Create Account
    </button>
</form>'
    ])
        @slot('preview', null, [])
            <form x-data="{ 
                password: '', 
                confirmPassword: '',
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
                    <input type="password" x-model="password" @input="calculateStrength()"
                        class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg dark:bg-gray-700 dark:text-white">
                    <div class="mt-2 flex gap-1">
                        <div class="h-1 flex-1 rounded transition" :class="strength >= 1 ? 'bg-red-500' : 'bg-gray-200 dark:bg-gray-600'"></div>
                        <div class="h-1 flex-1 rounded transition" :class="strength >= 2 ? 'bg-yellow-500' : 'bg-gray-200 dark:bg-gray-600'"></div>
                        <div class="h-1 flex-1 rounded transition" :class="strength >= 3 ? 'bg-blue-500' : 'bg-gray-200 dark:bg-gray-600'"></div>
                        <div class="h-1 flex-1 rounded transition" :class="strength >= 4 ? 'bg-green-500' : 'bg-gray-200 dark:bg-gray-600'"></div>
                    </div>
                    <p class="text-xs text-gray-500 mt-1" x-show="strength > 0">
                        <span x-show="strength === 1">Weak</span>
                        <span x-show="strength === 2">Fair</span>
                        <span x-show="strength === 3">Good</span>
                        <span x-show="strength === 4">Strong</span>
                    </p>
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
        @endslot
    @endcomponent

    <!-- OTP Verification -->
    @component('showcase::components.showcase-item', [
        'title' => 'OTP Verification',
        'description' => 'One-time password verification with resend timer',
        'code' => '<div x-data="{ 
    otp: [&#39;&#39;, &#39;&#39;, &#39;&#39;, &#39;&#39;, &#39;&#39;, &#39;&#39;],
    timer: 60,
    canResend: false,
    startTimer() {
        this.timer = 60;
        this.canResend = false;
        const interval = setInterval(() => {
            this.timer--;
            if (this.timer === 0) {
                this.canResend = true;
                clearInterval(interval);
            }
        }, 1000);
    }
}" x-init="startTimer()" class="max-w-md mx-auto bg-white dark:bg-gray-800 rounded-lg shadow p-8">
    <h2 class="text-2xl font-bold text-center mb-2">Verify Your Email</h2>
    <p class="text-sm text-gray-600 dark:text-gray-400 text-center mb-6">
        Enter the 6-digit code sent to your email
    </p>
    
    <div class="flex gap-2 justify-center mb-6">
        <template x-for="(digit, index) in otp" :key="index">
            <input type="text" maxlength="1" x-model="otp[index]"
                &#64;input="if ($event.target.value && index < 5) $refs[&#39;input&#39; + (index + 1)].focus()"
                :x-ref="&#39;input&#39; + index"
                class="w-12 h-12 text-center text-lg font-bold border-2 rounded-lg focus:border-blue-500">
        </template>
    </div>
    
    <button class="w-full bg-blue-600 text-white py-2 rounded-lg mb-4">Verify</button>
    
    <div class="text-center text-sm">
        <span class="text-gray-600 dark:text-gray-400">Didn&#39;t receive code?</span>
        <button &#64;click="startTimer()" :disabled="!canResend" 
            :class="canResend ? &#39;text-blue-600&#39; : &#39;text-gray-400&#39;"
            class="ml-1 font-medium">
            <span x-show="!canResend" x-text="&#39;Resend in &#39; + timer + &#39;s&#39;"></span>
            <span x-show="canResend">Resend Code</span>
        </button>
    </div>
</div>'
    ])
        @slot('preview', null, [])
            <div x-data="{ 
                otp: ['', '', '', '', '', ''],
                timer: 60,
                canResend: false,
                startTimer() {
                    this.timer = 60;
                    this.canResend = false;
                    const interval = setInterval(() => {
                        this.timer--;
                        if (this.timer === 0) {
                            this.canResend = true;
                            clearInterval(interval);
                        }
                    }, 1000);
                }
            }" x-init="startTimer()" class="max-w-md mx-auto bg-white dark:bg-gray-800 rounded-lg shadow p-8">
                <h2 class="text-2xl font-bold text-center text-gray-900 dark:text-white mb-2">Verify Your Email</h2>
                <p class="text-sm text-gray-600 dark:text-gray-400 text-center mb-6">
                    Enter the 6-digit code sent to your email
                </p>
                
                <div class="flex gap-2 justify-center mb-6">
                    <template x-for="(digit, index) in otp" :key="index">
                        <input type="text" maxlength="1" x-model="otp[index]"
                            @input="if ($event.target.value && index < 5) $el.nextElementSibling?.focus()"
                            @keydown.backspace="if (!$event.target.value && index > 0) $el.previousElementSibling?.focus()"
                            class="w-12 h-12 text-center text-lg font-bold border-2 border-gray-300 dark:border-gray-600 rounded-lg focus:border-blue-500 dark:bg-gray-700 dark:text-white">
                    </template>
                </div>
                
                <button class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition mb-4">Verify</button>
                
                <div class="text-center text-sm">
                    <span class="text-gray-600 dark:text-gray-400">Didn't receive code?</span>
                    <button @click="startTimer()" :disabled="!canResend" 
                        :class="canResend ? 'text-blue-600 hover:text-blue-500' : 'text-gray-400 cursor-not-allowed'"
                        class="ml-1 font-medium transition">
                        <span x-show="!canResend" x-text="'Resend in ' + timer + 's'"></span>
                        <span x-show="canResend" style="display: none;">Resend Code</span>
                    </button>
                </div>
            </div>
        @endslot
    @endcomponent

    <!-- 2FA Setup Wizard -->
    @component('showcase::components.showcase-item', [
        'title' => '2FA Setup Wizard',
        'description' => 'Two-factor authentication setup with QR code and backup codes',
        'code' => '<div x-data="{ step: 1 }" class="max-w-2xl mx-auto bg-white dark:bg-gray-800 rounded-lg shadow p-8">
    <div class="mb-8">
        <div class="flex items-center justify-between mb-4">
            <div class="flex items-center" :class="step >= 1 ? &#39;text-blue-600&#39; : &#39;text-gray-400&#39;">
                <div class="w-8 h-8 rounded-full flex items-center justify-center" 
                    :class="step >= 1 ? &#39;bg-blue-600 text-white&#39; : &#39;bg-gray-300&#39;">1</div>
                <span class="ml-2 font-medium">Scan QR Code</span>
            </div>
            <div class="flex items-center" :class="step >= 2 ? &#39;text-blue-600&#39; : &#39;text-gray-400&#39;">
                <div class="w-8 h-8 rounded-full flex items-center justify-center"
                    :class="step >= 2 ? &#39;bg-blue-600 text-white&#39; : &#39;bg-gray-300&#39;">2</div>
                <span class="ml-2 font-medium">Backup Codes</span>
            </div>
        </div>
    </div>
    
    <div x-show="step === 1">
        <h3 class="text-lg font-semibold mb-4">Scan QR Code</h3>
        <div class="flex flex-col items-center">
            <div class="w-48 h-48 bg-gray-200 dark:bg-gray-700 rounded-lg flex items-center justify-center mb-4">
                <span class="text-gray-500">QR Code Here</span>
            </div>
            <p class="text-sm text-gray-600 dark:text-gray-400 text-center mb-6">
                Scan this QR code with your authenticator app
            </p>
            <button &#64;click="step = 2" class="bg-blue-600 text-white px-6 py-2 rounded-lg">
                Continue
            </button>
        </div>
    </div>
    
    <div x-show="step === 2">
        <h3 class="text-lg font-semibold mb-4">Save Backup Codes</h3>
        <p class="text-sm text-gray-600 dark:text-gray-400 mb-4">
            Store these codes safely. Each can only be used once.
        </p>
        <div class="grid grid-cols-2 gap-2 mb-6">
            <div class="p-3 bg-gray-100 dark:bg-gray-700 rounded font-mono text-sm">ABCD-1234</div>
            <div class="p-3 bg-gray-100 dark:bg-gray-700 rounded font-mono text-sm">EFGH-5678</div>
            <div class="p-3 bg-gray-100 dark:bg-gray-700 rounded font-mono text-sm">IJKL-9012</div>
            <div class="p-3 bg-gray-100 dark:bg-gray-700 rounded font-mono text-sm">MNOP-3456</div>
        </div>
        <button class="w-full bg-blue-600 text-white py-2 rounded-lg">Complete Setup</button>
    </div>
</div>'
    ])
        @slot('preview', null, [])
            <div x-data="{ step: 1 }" class="max-w-2xl mx-auto bg-white dark:bg-gray-800 rounded-lg shadow p-8">
                <div class="mb-8">
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center" :class="step >= 1 ? 'text-blue-600' : 'text-gray-400'">
                            <div class="w-8 h-8 rounded-full flex items-center justify-center transition" 
                                :class="step >= 1 ? 'bg-blue-600 text-white' : 'bg-gray-300 dark:bg-gray-600'">1</div>
                            <span class="ml-2 font-medium">Scan QR Code</span>
                        </div>
                        <div class="flex-1 h-0.5 mx-4 bg-gray-300 dark:bg-gray-600"></div>
                        <div class="flex items-center" :class="step >= 2 ? 'text-blue-600' : 'text-gray-400'">
                            <div class="w-8 h-8 rounded-full flex items-center justify-center transition"
                                :class="step >= 2 ? 'bg-blue-600 text-white' : 'bg-gray-300 dark:bg-gray-600'">2</div>
                            <span class="ml-2 font-medium">Backup Codes</span>
                        </div>
                    </div>
                </div>
                
                <div x-show="step === 1">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Scan QR Code</h3>
                    <div class="flex flex-col items-center">
                        <div class="w-48 h-48 bg-gray-200 dark:bg-gray-700 rounded-lg flex items-center justify-center mb-4">
                            <span class="text-gray-500">QR Code Here</span>
                        </div>
                        <p class="text-sm text-gray-600 dark:text-gray-400 text-center mb-6">
                            Scan this QR code with your authenticator app
                        </p>
                        <button @click="step = 2" class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition">
                            Continue
                        </button>
                    </div>
                </div>
                
                <div x-show="step === 2" style="display: none;">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Save Backup Codes</h3>
                    <p class="text-sm text-gray-600 dark:text-gray-400 mb-4">
                        Store these codes safely. Each can only be used once.
                    </p>
                    <div class="grid grid-cols-2 gap-2 mb-6">
                        <div class="p-3 bg-gray-100 dark:bg-gray-700 rounded font-mono text-sm text-gray-900 dark:text-white">ABCD-1234</div>
                        <div class="p-3 bg-gray-100 dark:bg-gray-700 rounded font-mono text-sm text-gray-900 dark:text-white">EFGH-5678</div>
                        <div class="p-3 bg-gray-100 dark:bg-gray-700 rounded font-mono text-sm text-gray-900 dark:text-white">IJKL-9012</div>
                        <div class="p-3 bg-gray-100 dark:bg-gray-700 rounded font-mono text-sm text-gray-900 dark:text-white">MNOP-3456</div>
                    </div>
                    <button class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition">Complete Setup</button>
                </div>
            </div>
        @endslot
    @endcomponent

    <!-- Profile Settings Page -->
    @component('showcase::components.showcase-item', [
        'title' => 'Profile Settings Page',
        'description' => 'Editable profile form with save states and validation',
        'code' => '<div x-data="{ saving: false, saved: false }" class="max-w-3xl mx-auto bg-white dark:bg-gray-800 rounded-lg shadow p-8">
    <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">Profile Settings</h2>
    
    <form &#64;submit.prevent="saving = true; setTimeout(() => { saving = false; saved = true; setTimeout(() => saved = false, 3000); }, 1500)">
        <div class="grid grid-cols-2 gap-6 mb-6">
            <div>
                <label class="block text-sm font-medium mb-2">First Name</label>
                <input type="text" value="John" class="w-full px-4 py-2 border rounded-lg dark:bg-gray-700">
            </div>
            <div>
                <label class="block text-sm font-medium mb-2">Last Name</label>
                <input type="text" value="Doe" class="w-full px-4 py-2 border rounded-lg dark:bg-gray-700">
            </div>
        </div>
        
        <div class="mb-6">
            <label class="block text-sm font-medium mb-2">Email</label>
            <input type="email" value="john@example.com" class="w-full px-4 py-2 border rounded-lg dark:bg-gray-700">
        </div>
        
        <div class="mb-6">
            <label class="block text-sm font-medium mb-2">Bio</label>
            <textarea rows="4" class="w-full px-4 py-2 border rounded-lg dark:bg-gray-700"></textarea>
        </div>
        
        <div class="flex items-center gap-4">
            <button type="submit" :disabled="saving" 
                class="px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 disabled:opacity-50">
                <span x-show="!saving">Save Changes</span>
                <span x-show="saving">Saving...</span>
            </button>
            <span x-show="saved" class="text-green-600 text-sm">Changes saved successfully!</span>
        </div>
    </form>
</div>'
    ])
        @slot('preview', null, [])
            <div x-data="{ saving: false, saved: false }" class="max-w-3xl mx-auto bg-white dark:bg-gray-800 rounded-lg shadow p-8">
                <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">Profile Settings</h2>
                
                <form @submit.prevent="saving = true; setTimeout(() => { saving = false; saved = true; setTimeout(() => saved = false, 3000); }, 1500)">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">First Name</label>
                            <input type="text" value="John" class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg dark:bg-gray-700 dark:text-white">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Last Name</label>
                            <input type="text" value="Doe" class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg dark:bg-gray-700 dark:text-white">
                        </div>
                    </div>
                    
                    <div class="mb-6">
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Email</label>
                        <input type="email" value="john@example.com" class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg dark:bg-gray-700 dark:text-white">
                    </div>
                    
                    <div class="mb-6">
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Bio</label>
                        <textarea rows="4" class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg dark:bg-gray-700 dark:text-white" placeholder="Tell us about yourself..."></textarea>
                    </div>
                    
                    <div class="flex items-center gap-4">
                        <button type="submit" :disabled="saving" 
                            class="px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 disabled:opacity-50 transition">
                            <span x-show="!saving">Save Changes</span>
                            <span x-show="saving" style="display: none;">Saving...</span>
                        </button>
                        <span x-show="saved" x-transition class="text-green-600 dark:text-green-400 text-sm" style="display: none;">Changes saved successfully!</span>
                    </div>
                </form>
            </div>
        @endslot
    @endcomponent

    <!-- Password Change Form -->
    @component('showcase::components.showcase-item', [
        'title' => 'Password Change Form',
        'description' => 'Change password with strength meter and validation',
        'code' => '<div x-data="{ 
    current: &#39;&#39;, 
    newPassword: &#39;&#39;, 
    confirm: &#39;&#39;,
    strength: 0,
    showCurrent: false,
    showNew: false,
    calculateStrength() {
        let score = 0;
        if (this.newPassword.length > 8) score++;
        if (/[a-z]/.test(this.newPassword) && /[A-Z]/.test(this.newPassword)) score++;
        if (/[0-9]/.test(this.newPassword)) score++;
        if (/[^a-zA-Z0-9]/.test(this.newPassword)) score++;
        this.strength = score;
    }
}" class="max-w-md mx-auto bg-white dark:bg-gray-800 rounded-lg shadow p-8">
    <h2 class="text-2xl font-bold mb-6">Change Password</h2>
    
    <div class="mb-4">
        <label class="block text-sm font-medium mb-2">Current Password</label>
        <div class="relative">
            <input :type="showCurrent ? &#39;text&#39; : &#39;password&#39;" x-model="current" 
                class="w-full px-4 py-2 border rounded-lg dark:bg-gray-700 pr-10">
            <button type="button" &#64;click="showCurrent = !showCurrent" class="absolute right-3 top-3">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path x-show="!showCurrent" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                    <path x-show="!showCurrent" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                </svg>
            </button>
        </div>
    </div>
    
    <div class="mb-4">
        <label class="block text-sm font-medium mb-2">New Password</label>
        <input type="password" x-model="newPassword" &#64;input="calculateStrength()"
            class="w-full px-4 py-2 border rounded-lg dark:bg-gray-700">
        <div class="mt-2 flex gap-1">
            <div class="h-1 flex-1 rounded" :class="strength >= 1 ? &#39;bg-red-500&#39; : &#39;bg-gray-200&#39;"></div>
            <div class="h-1 flex-1 rounded" :class="strength >= 2 ? &#39;bg-yellow-500&#39; : &#39;bg-gray-200&#39;"></div>
            <div class="h-1 flex-1 rounded" :class="strength >= 3 ? &#39;bg-blue-500&#39; : &#39;bg-gray-200&#39;"></div>
            <div class="h-1 flex-1 rounded" :class="strength >= 4 ? &#39;bg-green-500&#39; : &#39;bg-gray-200&#39;"></div>
        </div>
    </div>
    
    <div class="mb-6">
        <label class="block text-sm font-medium mb-2">Confirm New Password</label>
        <input type="password" x-model="confirm" class="w-full px-4 py-2 border rounded-lg dark:bg-gray-700">
        <p x-show="confirm && newPassword !== confirm" class="text-xs text-red-500 mt-1">
            Passwords do not match
        </p>
    </div>
    
    <button class="w-full bg-blue-600 text-white py-2 rounded-lg">Update Password</button>
</div>'
    ])
        @slot('preview', null, [])
            <div x-data="{ 
                current: '', 
                newPassword: '', 
                confirm: '',
                strength: 0,
                showCurrent: false,
                showNew: false,
                calculateStrength() {
                    let score = 0;
                    if (this.newPassword.length > 8) score++;
                    if (/[a-z]/.test(this.newPassword) && /[A-Z]/.test(this.newPassword)) score++;
                    if (/[0-9]/.test(this.newPassword)) score++;
                    if (/[^a-zA-Z0-9]/.test(this.newPassword)) score++;
                    this.strength = score;
                }
            }" class="max-w-md mx-auto bg-white dark:bg-gray-800 rounded-lg shadow p-8">
                <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">Change Password</h2>
                
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Current Password</label>
                    <div class="relative">
                        <input :type="showCurrent ? 'text' : 'password'" x-model="current" 
                            class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg dark:bg-gray-700 dark:text-white pr-10">
                        <button type="button" @click="showCurrent = !showCurrent" class="absolute right-3 top-3 text-gray-400 hover:text-gray-600 dark:hover:text-gray-300">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path x-show="!showCurrent" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                <path x-show="!showCurrent" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                <path x-show="showCurrent" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21" style="display: none;"/>
                            </svg>
                        </button>
                    </div>
                </div>
                
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">New Password</label>
                    <input type="password" x-model="newPassword" @input="calculateStrength()"
                        class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg dark:bg-gray-700 dark:text-white">
                    <div class="mt-2 flex gap-1">
                        <div class="h-1 flex-1 rounded transition" :class="strength >= 1 ? 'bg-red-500' : 'bg-gray-200 dark:bg-gray-600'"></div>
                        <div class="h-1 flex-1 rounded transition" :class="strength >= 2 ? 'bg-yellow-500' : 'bg-gray-200 dark:bg-gray-600'"></div>
                        <div class="h-1 flex-1 rounded transition" :class="strength >= 3 ? 'bg-blue-500' : 'bg-gray-200 dark:bg-gray-600'"></div>
                        <div class="h-1 flex-1 rounded transition" :class="strength >= 4 ? 'bg-green-500' : 'bg-gray-200 dark:bg-gray-600'"></div>
                    </div>
                </div>
                
                <div class="mb-6">
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Confirm New Password</label>
                    <input type="password" x-model="confirm" class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg dark:bg-gray-700 dark:text-white">
                    <p x-show="confirm && newPassword !== confirm" class="text-xs text-red-500 dark:text-red-400 mt-1" style="display: none;">
                        Passwords do not match
                    </p>
                </div>
                
                <button class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition">Update Password</button>
            </div>
        @endslot
    @endcomponent

    <!-- Active Sessions Management -->
    @component('showcase::components.showcase-item', [
        'title' => 'Active Sessions Management',
        'description' => 'View and manage active sessions with device info and revoke actions',
        'code' => '<div x-data="{ 
    sessions: [
        { id: 1, device: &#39;Chrome on Windows&#39;, location: &#39;New York, USA&#39;, current: true, lastActive: &#39;Just now&#39; },
        { id: 2, device: &#39;Safari on iPhone&#39;, location: &#39;San Francisco, USA&#39;, current: false, lastActive: &#39;2 hours ago&#39; },
        { id: 3, device: &#39;Firefox on Ubuntu&#39;, location: &#39;London, UK&#39;, current: false, lastActive: &#39;1 day ago&#39; }
    ],
    revokeSession(id) {
        this.sessions = this.sessions.filter(s => s.id !== id);
    }
}" class="bg-white dark:bg-gray-800 rounded-lg shadow">
    <div class="p-6 border-b dark:border-gray-700">
        <h3 class="text-lg font-semibold">Active Sessions</h3>
        <p class="text-sm text-gray-600 dark:text-gray-400">Manage devices where you&#39;re currently signed in</p>
    </div>
    
    <div class="divide-y dark:divide-gray-700">
        <template x-for="session in sessions" :key="session.id">
            <div class="p-6 flex items-center justify-between">
                <div class="flex items-center gap-4">
                    <svg class="w-10 h-10 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zm0 6a1 1 0 011-1h12a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6z"/>
                    </svg>
                    <div>
                        <div class="flex items-center gap-2">
                            <p class="font-medium" x-text="session.device"></p>
                            <span x-show="session.current" class="px-2 py-0.5 bg-green-100 text-green-800 text-xs rounded">Current</span>
                        </div>
                        <p class="text-sm text-gray-500" x-text="session.location"></p>
                        <p class="text-xs text-gray-400" x-text="session.lastActive"></p>
                    </div>
                </div>
                <button x-show="!session.current" &#64;click="revokeSession(session.id)"
                    class="text-red-600 hover:text-red-700 text-sm font-medium">
                    Revoke
                </button>
            </div>
        </template>
    </div>
</div>'
    ])
        @slot('preview', null, [])
            <div x-data="{ 
                sessions: [
                    { id: 1, device: 'Chrome on Windows', location: 'New York, USA', current: true, lastActive: 'Just now' },
                    { id: 2, device: 'Safari on iPhone', location: 'San Francisco, USA', current: false, lastActive: '2 hours ago' },
                    { id: 3, device: 'Firefox on Ubuntu', location: 'London, UK', current: false, lastActive: '1 day ago' }
                ],
                revokeSession(id) {
                    this.sessions = this.sessions.filter(s => s.id !== id);
                }
            }" class="bg-white dark:bg-gray-800 rounded-lg shadow">
                <div class="p-6 border-b border-gray-200 dark:border-gray-700">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Active Sessions</h3>
                    <p class="text-sm text-gray-600 dark:text-gray-400 mt-1">Manage devices where you're currently signed in</p>
                </div>
                
                <div class="divide-y divide-gray-200 dark:divide-gray-700">
                    <template x-for="session in sessions" :key="session.id">
                        <div class="p-6 flex items-center justify-between">
                            <div class="flex items-center gap-4">
                                <svg class="w-10 h-10 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zm0 6a1 1 0 011-1h12a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6z"/>
                                </svg>
                                <div>
                                    <div class="flex items-center gap-2">
                                        <p class="font-medium text-gray-900 dark:text-white" x-text="session.device"></p>
                                        <span x-show="session.current" class="px-2 py-0.5 bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-200 text-xs rounded" style="display: none;">Current</span>
                                    </div>
                                    <p class="text-sm text-gray-500 dark:text-gray-400" x-text="session.location"></p>
                                    <p class="text-xs text-gray-400 dark:text-gray-500" x-text="session.lastActive"></p>
                                </div>
                            </div>
                            <button x-show="!session.current" @click="revokeSession(session.id)"
                                class="text-red-600 hover:text-red-700 dark:text-red-400 dark:hover:text-red-300 text-sm font-medium transition">
                                Revoke
                            </button>
                        </div>
                    </template>
                </div>
            </div>
        @endslot
    @endcomponent

    <!-- API Tokens Management -->
    @component('showcase::components.showcase-item', [
        'title' => 'API Tokens Management',
        'description' => 'Generate, copy, and revoke API tokens with last used timestamp',
        'code' => '<div x-data="{ 
    tokens: [
        { id: 1, name: &#39;Production API&#39;, token: &#39;sk_live_***************&#39;, lastUsed: &#39;2 hours ago&#39; },
        { id: 2, name: &#39;Development API&#39;, token: &#39;sk_test_***************&#39;, lastUsed: &#39;Never&#39; }
    ],
    showModal: false,
    newToken: &#39;&#39;,
    generateToken() {
        const token = &#39;sk_live_&#39; + Math.random().toString(36).substring(2, 15);
        this.newToken = token;
        this.showModal = true;
    },
    copyToken(token) {
        navigator.clipboard.writeText(token);
        alert(&#39;Token copied to clipboard!&#39;);
    }
}" class="bg-white dark:bg-gray-800 rounded-lg shadow">
    <div class="p-6 border-b dark:border-gray-700 flex justify-between items-center">
        <div>
            <h3 class="text-lg font-semibold">API Tokens</h3>
            <p class="text-sm text-gray-600 dark:text-gray-400">Manage your API access tokens</p>
        </div>
        <button &#64;click="generateToken()" class="px-4 py-2 bg-blue-600 text-white rounded-lg">
            Generate Token
        </button>
    </div>
    
    <div class="divide-y dark:divide-gray-700">
        <template x-for="token in tokens" :key="token.id">
            <div class="p-6 flex items-center justify-between">
                <div class="flex-1">
                    <p class="font-medium" x-text="token.name"></p>
                    <p class="text-sm text-gray-500 font-mono" x-text="token.token"></p>
                    <p class="text-xs text-gray-400">Last used <span x-text="token.lastUsed"></span></p>
                </div>
                <div class="flex gap-2">
                    <button &#64;click="copyToken(token.token)" class="text-blue-600 text-sm">Copy</button>
                    <button class="text-red-600 text-sm">Revoke</button>
                </div>
            </div>
        </template>
    </div>
    
    <div x-show="showModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
        <div class="bg-white dark:bg-gray-800 rounded-lg p-6 max-w-md">
            <h3 class="text-lg font-semibold mb-4">Token Generated</h3>
            <p class="text-sm text-gray-600 dark:text-gray-400 mb-4">
                Copy this token now. You won&#39;t be able to see it again!
            </p>
            <div class="p-3 bg-gray-100 dark:bg-gray-700 rounded font-mono text-sm mb-4" x-text="newToken"></div>
            <div class="flex gap-2">
                <button &#64;click="copyToken(newToken)" class="flex-1 bg-blue-600 text-white py-2 rounded">
                    Copy Token
                </button>
                <button &#64;click="showModal = false" class="px-4 py-2 border rounded">Close</button>
            </div>
        </div>
    </div>
</div>'
    ])
        @slot('preview', null, [])
            <div x-data="{ 
                tokens: [
                    { id: 1, name: 'Production API', token: 'sk_live_4A8f9Kx2mN3pQ5rS', lastUsed: '2 hours ago' },
                    { id: 2, name: 'Development API', token: 'sk_test_7B2d3Ey4nC6vW9xZ', lastUsed: 'Never' }
                ],
                showModal: false,
                newToken: '',
                generateToken() {
                    const token = 'sk_live_' + Math.random().toString(36).substring(2, 15);
                    this.newToken = token;
                    this.showModal = true;
                },
                copyToken(token) {
                    navigator.clipboard.writeText(token);
                    alert('Token copied to clipboard!');
                }
            }" class="bg-white dark:bg-gray-800 rounded-lg shadow">
                <div class="p-6 border-b border-gray-200 dark:border-gray-700 flex justify-between items-center">
                    <div>
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">API Tokens</h3>
                        <p class="text-sm text-gray-600 dark:text-gray-400 mt-1">Manage your API access tokens</p>
                    </div>
                    <button @click="generateToken()" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">
                        Generate Token
                    </button>
                </div>
                
                <div class="divide-y divide-gray-200 dark:divide-gray-700">
                    <template x-for="token in tokens" :key="token.id">
                        <div class="p-6 flex items-center justify-between">
                            <div class="flex-1">
                                <p class="font-medium text-gray-900 dark:text-white" x-text="token.name"></p>
                                <p class="text-sm text-gray-500 dark:text-gray-400 font-mono mt-1" x-text="token.token"></p>
                                <p class="text-xs text-gray-400 dark:text-gray-500 mt-1">Last used <span x-text="token.lastUsed"></span></p>
                            </div>
                            <div class="flex gap-2">
                                <button @click="copyToken(token.token)" class="text-blue-600 hover:text-blue-500 text-sm font-medium">Copy</button>
                                <button class="text-red-600 hover:text-red-500 text-sm font-medium">Revoke</button>
                            </div>
                        </div>
                    </template>
                </div>
                
                <div x-show="showModal" @click.self="showModal = false" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50" style="display: none;">
                    <div class="bg-white dark:bg-gray-800 rounded-lg p-6 max-w-md mx-4">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Token Generated</h3>
                        <p class="text-sm text-gray-600 dark:text-gray-400 mb-4">
                            Copy this token now. You won't be able to see it again!
                        </p>
                        <div class="p-3 bg-gray-100 dark:bg-gray-700 rounded font-mono text-sm text-gray-900 dark:text-white mb-4 break-all" x-text="newToken"></div>
                        <div class="flex gap-2">
                            <button @click="copyToken(newToken)" class="flex-1 bg-blue-600 text-white py-2 rounded hover:bg-blue-700 transition">
                                Copy Token
                            </button>
                            <button @click="showModal = false" class="px-4 py-2 border border-gray-300 dark:border-gray-600 rounded hover:bg-gray-50 dark:hover:bg-gray-700 transition">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        @endslot
    @endcomponent

</div>
@endsection
