@extends('showcase::components.component-layout')

@section('component-title', 'OTP Input')
@section('component-description', 'One-time password input boxes with auto-focus navigation.')

@section('demo')
<div class="max-w-md">
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
</div>
@endsection

@section('code')
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
@endsection
