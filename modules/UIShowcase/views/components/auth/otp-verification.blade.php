@extends('showcase::components.component-layout')

@section('demo')
<div x-data="{ 
    otp: ['', '', '', '', '', ''],
    timer: 60,
    canResend: false,
    startTimer() {
        this.timer = 60;
        this.canResend = false;
        const interval = setInterval(() => {
            this.timer--;
            if (this.timer === 0) { this.canResend = true; clearInterval(interval); }
        }, 1000);
    }
}" x-init="startTimer()" class="max-w-md mx-auto bg-white dark:bg-gray-800 rounded-lg shadow p-8">
    <h2 class="text-2xl font-bold text-center text-gray-900 dark:text-white mb-2">Verify Your Email</h2>
    <p class="text-sm text-gray-600 dark:text-gray-400 text-center mb-6">Enter the 6-digit code sent to your email</p>
    
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
            <span x-show="canResend" style="display:none">Resend Code</span>
        </button>
    </div>
</div>
@endsection

@section('code')
<div x-data="{ otp: ['','','','','',''], timer: 60, canResend: false, startTimer() { this.timer = 60; this.canResend = false; const interval = setInterval(() => { this.timer--; if (this.timer === 0) { this.canResend = true; clearInterval(interval); } }, 1000); } }" x-init="startTimer()" class="max-w-md mx-auto bg-white dark:bg-gray-800 rounded-lg shadow p-8">
    <div class="flex gap-2 justify-center mb-6">
        <template x-for="(digit, index) in otp" :key="index">
            <input type="text" maxlength="1" x-model="otp[index]" @input="if ($event.target.value && index < 5) $el.nextElementSibling?.focus()" class="w-12 h-12 text-center text-lg font-bold border-2 rounded-lg">
        </template>
    </div>
    <button class="w-full bg-blue-600 text-white py-2 rounded-lg mb-4">Verify</button>
</div>
@endsection
