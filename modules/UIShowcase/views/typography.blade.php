@extends('showcase::layouts.showcase')

@section('page-title', 'Typography')
@section('page-description', 'Headings, paragraphs, lists, and text formatting components')

@section('content')
<div class="max-w-7xl mx-auto space-y-8">
    
    <!-- Headings -->
    @component('showcase::components.showcase-item', [
        'title' => 'Headings (H1-H6)',
        'description' => 'Different heading sizes with semantic HTML',
        'code' => '<h1 class="text-4xl font-bold text-gray-900 dark:text-white">Heading 1</h1>
<h2 class="text-3xl font-bold text-gray-900 dark:text-white">Heading 2</h2>
<h3 class="text-2xl font-semibold text-gray-900 dark:text-white">Heading 3</h3>
<h4 class="text-xl font-semibold text-gray-900 dark:text-white">Heading 4</h4>
<h5 class="text-lg font-medium text-gray-900 dark:text-white">Heading 5</h5>
<h6 class="text-base font-medium text-gray-900 dark:text-white">Heading 6</h6>'
    ])
        @slot('preview', null, [])
            <h1 class="text-4xl font-bold text-gray-900 dark:text-white">Heading 1</h1>
            <h2 class="text-3xl font-bold text-gray-900 dark:text-white">Heading 2</h2>
            <h3 class="text-2xl font-semibold text-gray-900 dark:text-white">Heading 3</h3>
            <h4 class="text-xl font-semibold text-gray-900 dark:text-white">Heading 4</h4>
            <h5 class="text-lg font-medium text-gray-900 dark:text-white">Heading 5</h5>
            <h6 class="text-base font-medium text-gray-900 dark:text-white">Heading 6</h6>
        @endslot
    @endcomponent

    <!-- Paragraphs -->
    @component('showcase::components.showcase-item', [
        'title' => 'Paragraphs',
        'description' => 'Standard paragraph text with proper spacing',
        'code' => '<p class="text-base text-gray-700 dark:text-gray-300 leading-relaxed">
    This is a standard paragraph with normal text. Lorem ipsum dolor sit amet, 
    consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et 
    dolore magna aliqua.
</p>'
    ])
        @slot('preview', null, [])
            <p class="text-base text-gray-700 dark:text-gray-300 leading-relaxed">
                This is a standard paragraph with normal text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.
            </p>
        @endslot
    @endcomponent

    <!-- Lead Text -->
    @component('showcase::components.showcase-item', [
        'title' => 'Lead Text',
        'description' => 'Larger text for introductions and emphasis',
        'code' => '<p class="text-xl text-gray-600 dark:text-gray-400 leading-relaxed">
    This is lead text, typically used for introductions or to emphasize important content.
</p>'
    ])
        @slot('preview', null, [])
            <p class="text-xl text-gray-600 dark:text-gray-400 leading-relaxed">
                This is lead text, typically used for introductions or to emphasize important content. It draws more attention than regular paragraphs.
            </p>
        @endslot
    @endcomponent

    <!-- Muted Text -->
    @component('showcase::components.showcase-item', [
        'title' => 'Muted Text',
        'description' => 'Secondary text with reduced emphasis',
        'code' => '<p class="text-sm text-gray-500 dark:text-gray-400">
    This is muted text for less important information, captions, or helper text.
</p>'
    ])
        @slot('preview', null, [])
            <p class="text-sm text-gray-500 dark:text-gray-400">
                This is muted text for less important information, captions, or helper text.
            </p>
        @endslot
    @endcomponent

    <!-- Inline Code -->
    @component('showcase::components.showcase-item', [
        'title' => 'Inline Code',
        'description' => 'Code snippets within text',
        'code' => '<p class="text-gray-700 dark:text-gray-300">
    Use the <code class="px-2 py-1 bg-gray-100 dark:bg-gray-700 text-red-600 dark:text-red-400 rounded text-sm font-mono">npm install</code> command to install packages.
</p>'
    ])
        @slot('preview', null, [])
            <p class="text-gray-700 dark:text-gray-300">
                Use the <code class="px-2 py-1 bg-gray-100 dark:bg-gray-700 text-red-600 dark:text-red-400 rounded text-sm font-mono">npm install</code> command to install packages.
            </p>
        @endslot
    @endcomponent

    <!-- Blockquote -->
    @component('showcase::components.showcase-item', [
        'title' => 'Blockquote',
        'description' => 'Quoted text with citation',
        'code' => '<blockquote class="border-l-4 border-blue-500 pl-4 py-2 bg-blue-50 dark:bg-blue-900/20 rounded">
    <p class="text-gray-700 dark:text-gray-300 italic">
        "The best way to predict the future is to invent it."
    </p>
    <footer class="text-sm text-gray-500 dark:text-gray-400 mt-2">— Alan Kay</footer>
</blockquote>'
    ])
        @slot('preview', null, [])
            <blockquote class="border-l-4 border-blue-500 pl-4 py-2 bg-blue-50 dark:bg-blue-900/20 rounded">
                <p class="text-gray-700 dark:text-gray-300 italic">
                    "The best way to predict the future is to invent it."
                </p>
                <footer class="text-sm text-gray-500 dark:text-gray-400 mt-2">— Alan Kay</footer>
            </blockquote>
        @endslot
    @endcomponent

    <!-- Unordered List -->
    @component('showcase::components.showcase-item', [
        'title' => 'Unordered List',
        'description' => 'Bullet point lists',
        'code' => '<ul class="space-y-2 text-gray-700 dark:text-gray-300 list-disc list-inside">
    <li>First item in the list</li>
    <li>Second item in the list</li>
    <li>Third item in the list</li>
    <li>Fourth item in the list</li>
</ul>'
    ])
        @slot('preview', null, [])
            <ul class="space-y-2 text-gray-700 dark:text-gray-300 list-disc list-inside">
                <li>First item in the list</li>
                <li>Second item in the list</li>
                <li>Third item in the list</li>
                <li>Fourth item in the list</li>
            </ul>
        @endslot
    @endcomponent

    <!-- Ordered List -->
    @component('showcase::components.showcase-item', [
        'title' => 'Ordered List',
        'description' => 'Numbered lists',
        'code' => '<ol class="space-y-2 text-gray-700 dark:text-gray-300 list-decimal list-inside">
    <li>First step in the process</li>
    <li>Second step in the process</li>
    <li>Third step in the process</li>
    <li>Fourth step in the process</li>
</ol>'
    ])
        @slot('preview', null, [])
            <ol class="space-y-2 text-gray-700 dark:text-gray-300 list-decimal list-inside">
                <li>First step in the process</li>
                <li>Second step in the process</li>
                <li>Third step in the process</li>
                <li>Fourth step in the process</li>
            </ol>
        @endslot
    @endcomponent

    <!-- Description List -->
    @component('showcase::components.showcase-item', [
        'title' => 'Description List',
        'description' => 'Key-value pairs for definitions',
        'code' => '<dl class="space-y-4">
    <div>
        <dt class="text-sm font-semibold text-gray-900 dark:text-white">Name</dt>
        <dd class="text-sm text-gray-600 dark:text-gray-400">John Doe</dd>
    </div>
    <div>
        <dt class="text-sm font-semibold text-gray-900 dark:text-white">Email</dt>
        <dd class="text-sm text-gray-600 dark:text-gray-400">john@example.com</dd>
    </div>
    <div>
        <dt class="text-sm font-semibold text-gray-900 dark:text-white">Role</dt>
        <dd class="text-sm text-gray-600 dark:text-gray-400">Administrator</dd>
    </div>
</dl>'
    ])
        @slot('preview', null, [])
            <dl class="space-y-4">
                <div>
                    <dt class="text-sm font-semibold text-gray-900 dark:text-white">Name</dt>
                    <dd class="text-sm text-gray-600 dark:text-gray-400">John Doe</dd>
                </div>
                <div>
                    <dt class="text-sm font-semibold text-gray-900 dark:text-white">Email</dt>
                    <dd class="text-sm text-gray-600 dark:text-gray-400">john@example.com</dd>
                </div>
                <div>
                    <dt class="text-sm font-semibold text-gray-900 dark:text-white">Role</dt>
                    <dd class="text-sm text-gray-600 dark:text-gray-400">Administrator</dd>
                </div>
            </dl>
        @endslot
    @endcomponent

    <!-- Text Truncation -->
    @component('showcase::components.showcase-item', [
        'title' => 'Text Truncation with Tooltip',
        'description' => 'Truncated text with hover tooltip',
        'code' => '<p class="max-w-xs truncate text-gray-700 dark:text-gray-300" 
   title="This is a very long text that will be truncated with ellipsis when it overflows the container">
    This is a very long text that will be truncated with ellipsis when it overflows the container
</p>'
    ])
        @slot('preview', null, [])
            <p class="max-w-xs truncate text-gray-700 dark:text-gray-300" title="This is a very long text that will be truncated with ellipsis when it overflows the container">
                This is a very long text that will be truncated with ellipsis when it overflows the container
            </p>
        @endslot
    @endcomponent

    <!-- Text Highlight -->
    @component('showcase::components.showcase-item', [
        'title' => 'Text Highlight / Mark',
        'description' => 'Highlighted text for emphasis',
        'code' => '<p class="text-gray-700 dark:text-gray-300">
    This text has a <mark class="bg-yellow-200 dark:bg-yellow-700 px-1 rounded">highlighted portion</mark> in the middle.
</p>'
    ])
        @slot('preview', null, [])
            <p class="text-gray-700 dark:text-gray-300">
                This text has a <mark class="bg-yellow-200 dark:bg-yellow-700 px-1 rounded">highlighted portion</mark> in the middle.
            </p>
        @endslot
    @endcomponent

    <!-- Keyboard Shortcut -->
    @component('showcase::components.showcase-item', [
        'title' => 'Keyboard Shortcut (KBD)',
        'description' => 'Display keyboard shortcuts',
        'code' => '<p class="text-gray-700 dark:text-gray-300">
    Press <kbd class="px-2 py-1.5 text-xs font-semibold text-gray-800 dark:text-gray-200 bg-gray-100 dark:bg-gray-700 border border-gray-300 dark:border-gray-600 rounded shadow-sm">Ctrl</kbd> 
    + <kbd class="px-2 py-1.5 text-xs font-semibold text-gray-800 dark:text-gray-200 bg-gray-100 dark:bg-gray-700 border border-gray-300 dark:border-gray-600 rounded shadow-sm">K</kbd> 
    to open command palette
</p>'
    ])
        @slot('preview', null, [])
            <p class="text-gray-700 dark:text-gray-300">
                Press <kbd class="px-2 py-1.5 text-xs font-semibold text-gray-800 dark:text-gray-200 bg-gray-100 dark:bg-gray-700 border border-gray-300 dark:border-gray-600 rounded shadow-sm">Ctrl</kbd> 
                + <kbd class="px-2 py-1.5 text-xs font-semibold text-gray-800 dark:text-gray-200 bg-gray-100 dark:bg-gray-700 border border-gray-300 dark:border-gray-600 rounded shadow-sm">K</kbd> 
                to open command palette
            </p>
        @endslot
    @endcomponent

</div>
@endsection
