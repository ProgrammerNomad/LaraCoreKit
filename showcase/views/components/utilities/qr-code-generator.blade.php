@extends('showcase::components.component-layout')

@section('demo')
<div x-data="{ 
    url: 'https://github.com/ProgrammerNomad/LaraCoreKit', 
    qrUrl: '',
    size: 200
}" x-init="qrUrl = `https://api.qrserver.com/v1/create-qr-code/?size=${size}x${size}&data=${encodeURIComponent(url)}`">
    <div class="space-y-4">
        <div>
            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Enter URL or Text</label>
            <input type="text" x-model="url" @input="qrUrl = `https://api.qrserver.com/v1/create-qr-code/?size=${size}x${size}&data=${encodeURIComponent(url)}`" placeholder="Enter URL or text" class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-lg bg-white dark:bg-gray-800 text-gray-900 dark:text-white">
        </div>
        <div class="flex justify-center p-6 bg-gray-50 dark:bg-gray-900 rounded-lg">
            <img :src="qrUrl" alt="QR Code" class="border-4 border-white dark:border-gray-700 rounded-lg shadow-lg bg-white">
        </div>
        <a :href="qrUrl" :download="`qrcode-${size}x${size}.png`" class="block w-full px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 text-center transition">
            Download QR Code
        </a>
    </div>
</div>
@endsection

@section('code')
<div x-data="{ url: 'https://www.laracorekit.com', qrUrl: '' }" x-init="qrUrl = `https://api.qrserver.com/v1/create-qr-code/?size=200x200&data=${encodeURIComponent(url)}`">
    <input type="text" x-model="url" @input="qrUrl = `https://api.qrserver.com/v1/create-qr-code/?size=200x200&data=${encodeURIComponent(url)}`" placeholder="Enter URL" class="w-full px-3 py-2 border rounded-lg mb-4">
    <div class="flex justify-center">
        <img :src="qrUrl" alt="QR Code" class="border rounded-lg p-2 bg-white">
    </div>
</div>
@endsection
