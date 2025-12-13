@extends('showcase::layouts.showcase')

@section('page-title', 'Utility Components')
@section('page-description', 'Helper components for common actions like copy, export, download, and more')

@section('content')
<div class="max-w-7xl mx-auto space-y-8">

    <!-- Copy to Clipboard -->
    @component('showcase::components.showcase-item', [
        'title' => 'Copy to Clipboard',
        'description' => 'Click to copy text to clipboard with visual feedback',
        'code' => '<div x-data="{ copied: false }">
    <div class="flex items-center gap-2">
        <input type="text" value="https://example.com/share/abc123" readonly class="flex-1 px-3 py-2 border rounded-lg">
        <button @click="
            navigator.clipboard.writeText($el.previousElementSibling.value);
            copied = true;
            setTimeout(() => copied = false, 2000);
        " class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">
            <span x-show="!copied">Copy</span>
            <span x-show="copied" x-cloak>Copied!</span>
        </button>
    </div>
</div>'
    ])
        @slot('preview', null, [])
            <div class="space-y-4">
                <!-- Simple Copy Button -->
                <div x-data="{ copied: false }">
                    <div class="flex items-center gap-2">
                        <input type="text" value="https://example.com/share/abc123" readonly class="flex-1 px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-lg bg-gray-50 dark:bg-gray-700 text-gray-900 dark:text-white">
                        <button @click="
                            navigator.clipboard.writeText($el.previousElementSibling.value);
                            copied = true;
                            setTimeout(() => copied = false, 2000);
                        " class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition flex items-center gap-2">
                            <svg x-show="!copied" class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                            </svg>
                            <svg x-show="copied" x-cloak class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span x-show="!copied">Copy</span>
                            <span x-show="copied" x-cloak>Copied!</span>
                        </button>
                    </div>
                </div>

                <!-- Copy Code Block -->
                <div x-data="{ copied: false }" class="relative">
                    <pre class="bg-gray-900 text-gray-100 p-4 rounded-lg overflow-x-auto"><code>npm install laravel-corekit
php artisan migrate
npm run dev</code></pre>
                    <button @click="
                        navigator.clipboard.writeText($el.previousElementSibling.textContent);
                        copied = true;
                        setTimeout(() => copied = false, 2000);
                    " class="absolute top-2 right-2 px-3 py-1.5 bg-gray-700 hover:bg-gray-600 text-white text-sm rounded transition">
                        <span x-show="!copied">Copy</span>
                        <span x-show="copied" x-cloak>✓ Copied</span>
                    </button>
                </div>

                <!-- Copy with Icon Only -->
                <div x-data="{ copied: false }" class="flex items-center gap-2">
                    <code class="px-3 py-2 bg-gray-100 dark:bg-gray-800 rounded text-sm">git clone https://github.com/user/repo.git</code>
                    <button @click="
                        navigator.clipboard.writeText($el.previousElementSibling.textContent);
                        copied = true;
                        setTimeout(() => copied = false, 2000);
                    " class="p-2 hover:bg-gray-100 dark:hover:bg-gray-700 rounded transition" :class="copied ? 'text-green-600' : 'text-gray-600 dark:text-gray-400'">
                        <svg x-show="!copied" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                        </svg>
                        <svg x-show="copied" x-cloak class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                    </button>
                </div>
            </div>
        @endslot
    @endcomponent

    <!-- QR Code Generator -->
    @component('showcase::components.showcase-item', [
        'title' => 'QR Code Generator',
        'description' => 'Generate QR codes using external API',
        'code' => '<div x-data="{ url: \'https://example.com\', qrUrl: \'\' }" x-init="qrUrl = `https://api.qrserver.com/v1/create-qr-code/?size=200x200&data=${encodeURIComponent(url)}`">
    <input type="text" x-model="url" @input="qrUrl = `https://api.qrserver.com/v1/create-qr-code/?size=200x200&data=${encodeURIComponent(url)}`" placeholder="Enter URL" class="w-full px-3 py-2 border rounded-lg mb-4">
    <div class="flex justify-center">
        <img :src="qrUrl" alt="QR Code" class="border rounded-lg p-2 bg-white">
    </div>
</div>'
    ])
        @slot('preview', null, [])
            <div x-data="{ 
                url: 'https://github.com/laravel/laravel', 
                qrUrl: '',
                size: 200
            }" x-init="qrUrl = `https://api.qrserver.com/v1/create-qr-code/?size=${size}x${size}&data=${encodeURIComponent(url)}`">
                <div class="space-y-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Enter URL or Text</label>
                        <input type="text" x-model="url" @input="qrUrl = `https://api.qrserver.com/v1/create-qr-code/?size=${size}x${size}&data=${encodeURIComponent(url)}`" placeholder="Enter URL or text" class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-lg bg-white dark:bg-gray-800 text-gray-900 dark:text-white">
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Size: <span x-text="size"></span>px</label>
                        <input type="range" x-model="size" @input="qrUrl = `https://api.qrserver.com/v1/create-qr-code/?size=${size}x${size}&data=${encodeURIComponent(url)}`" min="100" max="400" step="50" class="w-full">
                    </div>
                    
                    <div class="flex justify-center p-6 bg-gray-50 dark:bg-gray-900 rounded-lg">
                        <img :src="qrUrl" alt="QR Code" class="border-4 border-white dark:border-gray-700 rounded-lg shadow-lg bg-white">
                    </div>
                    
                    <div class="flex gap-2">
                        <a :href="qrUrl" :download="`qrcode-${size}x${size}.png`" class="flex-1 px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 text-center transition">
                            Download QR Code
                        </a>
                        <button @click="window.print()" class="px-4 py-2 border border-gray-300 dark:border-gray-600 text-gray-700 dark:text-gray-300 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-700 transition">
                            Print
                        </button>
                    </div>
                </div>
            </div>
        @endslot
    @endcomponent

    <!-- Export to CSV -->
    @component('showcase::components.showcase-item', [
        'title' => 'Export to CSV',
        'description' => 'Export data to CSV file for download',
        'code' => '<button @click="
    const data = [
        [\'Name\', \'Email\', \'Role\'],
        [\'John Doe\', \'john@example.com\', \'Admin\'],
        [\'Jane Smith\', \'jane@example.com\', \'User\']
    ];
    const csv = data.map(row => row.join(\',\')).join(\'\\n\');
    const blob = new Blob([csv], { type: \'text/csv\' });
    const url = URL.createObjectURL(blob);
    const a = document.createElement(\'a\');
    a.href = url;
    a.download = \'export.csv\';
    a.click();
" class="px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700">
    Export to CSV
</button>'
    ])
        @slot('preview', null, [])
            <div class="space-y-4">
                <!-- Sample Data Table -->
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                        <thead class="bg-gray-50 dark:bg-gray-800">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase">Name</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase">Email</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase">Role</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase">Status</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white dark:bg-gray-900 divide-y divide-gray-200 dark:divide-gray-700">
                            <tr>
                                <td class="px-6 py-4 text-sm text-gray-900 dark:text-white">John Doe</td>
                                <td class="px-6 py-4 text-sm text-gray-600 dark:text-gray-400">john@example.com</td>
                                <td class="px-6 py-4 text-sm text-gray-600 dark:text-gray-400">Admin</td>
                                <td class="px-6 py-4 text-sm"><span class="px-2 py-1 bg-green-100 dark:bg-green-900/30 text-green-800 dark:text-green-400 rounded">Active</span></td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 text-sm text-gray-900 dark:text-white">Jane Smith</td>
                                <td class="px-6 py-4 text-sm text-gray-600 dark:text-gray-400">jane@example.com</td>
                                <td class="px-6 py-4 text-sm text-gray-600 dark:text-gray-400">User</td>
                                <td class="px-6 py-4 text-sm"><span class="px-2 py-1 bg-green-100 dark:bg-green-900/30 text-green-800 dark:text-green-400 rounded">Active</span></td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 text-sm text-gray-900 dark:text-white">Bob Johnson</td>
                                <td class="px-6 py-4 text-sm text-gray-600 dark:text-gray-400">bob@example.com</td>
                                <td class="px-6 py-4 text-sm text-gray-600 dark:text-gray-400">Editor</td>
                                <td class="px-6 py-4 text-sm"><span class="px-2 py-1 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-800 dark:text-yellow-400 rounded">Pending</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Export Buttons -->
                <div class="flex gap-3 flex-wrap">
                    <button @click="
                        const data = [
                            ['Name', 'Email', 'Role', 'Status'],
                            ['John Doe', 'john@example.com', 'Admin', 'Active'],
                            ['Jane Smith', 'jane@example.com', 'User', 'Active'],
                            ['Bob Johnson', 'bob@example.com', 'Editor', 'Pending']
                        ];
                        const csv = data.map(row => row.join(',')).join('\\n');
                        const blob = new Blob([csv], { type: 'text/csv' });
                        const url = URL.createObjectURL(blob);
                        const a = document.createElement('a');
                        a.href = url;
                        a.download = 'users-export.csv';
                        a.click();
                        URL.revokeObjectURL(url);
                    " class="px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 transition flex items-center gap-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                        Export to CSV
                    </button>

                    <button @click="
                        const data = [
                            ['Name', 'Email', 'Role', 'Status'],
                            ['John Doe', 'john@example.com', 'Admin', 'Active'],
                            ['Jane Smith', 'jane@example.com', 'User', 'Active'],
                            ['Bob Johnson', 'bob@example.com', 'Editor', 'Pending']
                        ];
                        const json = JSON.stringify(data.slice(1).map(row => ({
                            name: row[0],
                            email: row[1],
                            role: row[2],
                            status: row[3]
                        })), null, 2);
                        const blob = new Blob([json], { type: 'application/json' });
                        const url = URL.createObjectURL(blob);
                        const a = document.createElement('a');
                        a.href = url;
                        a.download = 'users-export.json';
                        a.click();
                        URL.revokeObjectURL(url);
                    " class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition flex items-center gap-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                        Export to JSON
                    </button>

                    <button @click="window.print()" class="px-4 py-2 border border-gray-300 dark:border-gray-600 text-gray-700 dark:text-gray-300 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-700 transition flex items-center gap-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z"></path>
                        </svg>
                        Print Table
                    </button>
                </div>
            </div>
        @endslot
    @endcomponent

    <!-- Back to Top Button -->
    @component('showcase::components.showcase-item', [
        'title' => 'Back to Top Button',
        'description' => 'Scroll to top button that appears when scrolling down',
        'code' => '<div x-data="{ showButton: false }" @scroll.window="showButton = window.pageYOffset > 300">
    <button x-show="showButton" @click="window.scrollTo({ top: 0, behavior: \'smooth\' })" class="fixed bottom-8 right-8 p-3 bg-blue-600 text-white rounded-full shadow-lg hover:bg-blue-700 transition z-50">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"/>
        </svg>
    </button>
</div>'
    ])
        @slot('preview', null, [])
            <div class="space-y-4">
                <p class="text-sm text-gray-600 dark:text-gray-400">Scroll down this page to see the "Back to Top" button appear in the bottom right corner.</p>
                
                <div x-data="{ showButton: false }" @scroll.window="showButton = window.pageYOffset > 300" class="relative h-64 overflow-y-auto border border-gray-300 dark:border-gray-600 rounded-lg p-4">
                    <div class="space-y-4">
                        <p class="text-gray-700 dark:text-gray-300">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <p class="text-gray-700 dark:text-gray-300">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <p class="text-gray-700 dark:text-gray-300">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                        <p class="text-gray-700 dark:text-gray-300">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <p class="text-gray-700 dark:text-gray-300">Scroll down to see more content and trigger the back to top button...</p>
                        <p class="text-gray-700 dark:text-gray-300">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <p class="text-gray-700 dark:text-gray-300">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <p class="text-gray-700 dark:text-gray-300">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                        <p class="text-gray-700 dark:text-gray-300">Keep scrolling...</p>
                        <p class="text-gray-700 dark:text-gray-300">Almost there...</p>
                        <p class="text-gray-700 dark:text-gray-300">You made it to the bottom! Now click the back to top button.</p>
                    </div>
                    
                    <button x-show="showButton" x-cloak @click="$el.closest('.overflow-y-auto').scrollTo({ top: 0, behavior: 'smooth' })" class="fixed bottom-4 right-4 p-3 bg-blue-600 text-white rounded-full shadow-lg hover:bg-blue-700 hover:scale-110 transition-all z-10">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"/>
                        </svg>
                    </button>
                </div>
            </div>
        @endslot
    @endcomponent

    <!-- Download Button -->
    @component('showcase::components.showcase-item', [
        'title' => 'Download Button',
        'description' => 'Trigger file downloads with different formats',
        'code' => '<button @click="
    const content = \'Sample file content\';
    const blob = new Blob([content], { type: \'text/plain\' });
    const url = URL.createObjectURL(blob);
    const a = document.createElement(\'a\');
    a.href = url;
    a.download = \'sample.txt\';
    a.click();
    URL.revokeObjectURL(url);
" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
    Download File
</button>'
    ])
        @slot('preview', null, [])
            <div class="flex gap-3 flex-wrap">
                <button @click="
                    const content = 'This is a sample text file generated by LaraCoreKit UI Showcase.\\n\\nYou can download any type of file using JavaScript Blob API.';
                    const blob = new Blob([content], { type: 'text/plain' });
                    const url = URL.createObjectURL(blob);
                    const a = document.createElement('a');
                    a.href = url;
                    a.download = 'sample.txt';
                    a.click();
                    URL.revokeObjectURL(url);
                " class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition flex items-center gap-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                    Download TXT
                </button>

                <button @click="
                    const content = JSON.stringify({ name: 'LaraCoreKit', version: '1.0.0', description: 'Laravel Starter Kit' }, null, 2);
                    const blob = new Blob([content], { type: 'application/json' });
                    const url = URL.createObjectURL(blob);
                    const a = document.createElement('a');
                    a.href = url;
                    a.download = 'data.json';
                    a.click();
                    URL.revokeObjectURL(url);
                " class="px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 transition flex items-center gap-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                    Download JSON
                </button>

                <button @click="
                    const content = '<?xml version=\\'1.0\\' encoding=\\'UTF-8\\'?>\\n<data>\\n  <item>Sample XML</item>\\n</data>';
                    const blob = new Blob([content], { type: 'application/xml' });
                    const url = URL.createObjectURL(blob);
                    const a = document.createElement('a');
                    a.href = url;
                    a.download = 'data.xml';
                    a.click();
                    URL.revokeObjectURL(url);
                " class="px-4 py-2 bg-purple-600 text-white rounded-lg hover:bg-purple-700 transition flex items-center gap-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                    Download XML
                </button>
            </div>
        @endslot
    @endcomponent

</div>
@endsection
