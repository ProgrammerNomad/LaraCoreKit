<?php

return [
    'categories' => [
        'typography' => [
            'name' => 'Typography',
            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>',
            'description' => 'Headings, paragraphs, lists, and text formatting',
            'components' => [
                'headings' => [
                    'title' => 'Headings (H1-H6)',
                    'description' => 'Different heading sizes with semantic HTML',
                    'seo_title' => 'Headings H1-H6 Component - LaraCoreKit',
                    'seo_description' => 'Responsive heading components (H1-H6) built with Tailwind CSS. Semantic HTML with dark mode support for Laravel applications.',
                ],
                'paragraphs' => [
                    'title' => 'Paragraphs',
                    'description' => 'Standard paragraph text with proper spacing',
                    'seo_title' => 'Paragraph Component - LaraCoreKit',
                    'seo_description' => 'Typography paragraph components with optimal line height and spacing. Tailwind CSS styled for Laravel projects.',
                ],
                'lead-text' => [
                    'title' => 'Lead Text',
                    'description' => 'Larger text for introductions and emphasis',
                    'seo_title' => 'Lead Text Component - LaraCoreKit',
                    'seo_description' => 'Lead text component for introductions and emphasis. Larger, attention-grabbing typography for Laravel applications.',
                ],
                'muted-text' => [
                    'title' => 'Muted Text',
                    'description' => 'Secondary text with reduced emphasis',
                    'seo_title' => 'Muted Text Component - LaraCoreKit',
                    'seo_description' => 'Muted text component for secondary information, captions, and helper text in Laravel applications.',
                ],
                'inline-code' => [
                    'title' => 'Inline Code',
                    'description' => 'Code snippets within text',
                    'seo_title' => 'Inline Code Component - LaraCoreKit',
                    'seo_description' => 'Inline code component for code snippets within text. Monospace font with syntax highlighting support.',
                ],
                'blockquote' => [
                    'title' => 'Blockquote',
                    'description' => 'Quoted text with citation',
                    'seo_title' => 'Blockquote Component - LaraCoreKit',
                    'seo_description' => 'Blockquote component for quoted text with optional citations. Styled with Tailwind CSS for Laravel projects.',
                ],
                'unordered-list' => [
                    'title' => 'Unordered List',
                    'description' => 'Bulleted list component',
                    'seo_title' => 'Unordered List Component - LaraCoreKit',
                    'seo_description' => 'Unordered bulleted list component with proper spacing and dark mode support for Laravel applications.',
                ],
                'ordered-list' => [
                    'title' => 'Ordered List',
                    'description' => 'Numbered list component',
                    'seo_title' => 'Ordered List Component - LaraCoreKit',
                    'seo_description' => 'Ordered numbered list component with semantic HTML and Tailwind CSS styling for Laravel projects.',
                ],
                'description-list' => [
                    'title' => 'Description List',
                    'description' => 'Key-value list component',
                    'seo_title' => 'Description List Component - LaraCoreKit',
                    'seo_description' => 'Description list component for key-value pairs. Semantic dl/dt/dd elements styled with Tailwind CSS.',
                ],
                'text-truncation' => [
                    'title' => 'Text Truncation',
                    'description' => 'Truncate long text with ellipsis and tooltip',
                    'seo_title' => 'Text Truncation Component - LaraCoreKit',
                    'seo_description' => 'Text truncation component with ellipsis and optional tooltip. Responsive overflow handling for Laravel apps.',
                ],
                'text-highlight' => [
                    'title' => 'Text Highlight',
                    'description' => 'Highlighted/marked text component',
                    'seo_title' => 'Text Highlight Component - LaraCoreKit',
                    'seo_description' => 'Text highlight component using mark element. Search result highlighting and emphasis for Laravel applications.',
                ],
                'keyboard-shortcut' => [
                    'title' => 'Keyboard Shortcut',
                    'description' => 'Display keyboard shortcuts with kbd element',
                    'seo_title' => 'Keyboard Shortcut Component - LaraCoreKit',
                    'seo_description' => 'Keyboard shortcut component using kbd element. Display keyboard combinations in documentation and UI.',
                ],
            ],
        ],
        
        'buttons' => [
            'name' => 'Buttons',
            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122"></path>',
            'description' => 'Buttons, links, and interactive elements',
            'components' => [
                'primary-button' => [
                    'title' => 'Primary Button',
                    'description' => 'Main call-to-action button',
                    'seo_title' => 'Primary Button Component - LaraCoreKit',
                    'seo_description' => 'Primary button component for main CTAs. Multiple sizes, states, and dark mode support for Laravel applications.',
                ],
                'secondary-button' => [
                    'title' => 'Secondary Button',
                    'description' => 'Secondary action button',
                    'seo_title' => 'Secondary Button Component - LaraCoreKit',
                    'seo_description' => 'Secondary button component for alternative actions. Styled with Tailwind CSS for Laravel projects.',
                ],
                'outline-button' => [
                    'title' => 'Outline Button',
                    'description' => 'Button with outline style',
                    'seo_title' => 'Outline Button Component - LaraCoreKit',
                    'seo_description' => 'Outline button component with border styling. Lightweight design for Laravel applications.',
                ],
                'ghost-button' => [
                    'title' => 'Ghost Button',
                    'description' => 'Minimal button without background',
                    'seo_title' => 'Ghost Button Component - LaraCoreKit',
                    'seo_description' => 'Ghost button component with transparent background. Minimal design for subtle actions in Laravel apps.',
                ],
                'danger-button' => [
                    'title' => 'Danger Button',
                    'description' => 'Destructive action button',
                    'seo_title' => 'Danger Button Component - LaraCoreKit',
                    'seo_description' => 'Danger button component for destructive actions like delete, remove. Red color scheme with confirmations.',
                ],
                'success-button' => [
                    'title' => 'Success Button',
                    'description' => 'Success/confirmation button',
                    'seo_title' => 'Success Button Component - LaraCoreKit',
                    'seo_description' => 'Success button component for positive actions. Green color scheme for confirmations in Laravel apps.',
                ],
                'icon-button' => [
                    'title' => 'Icon Button',
                    'description' => 'Button with only icon',
                    'seo_title' => 'Icon Button Component - LaraCoreKit',
                    'seo_description' => 'Icon-only button component for compact UIs. Circular and square variants with tooltips.',
                ],
                'button-icon-left' => [
                    'title' => 'Button with Icon (Left)',
                    'description' => 'Button with icon on the left',
                    'seo_title' => 'Button with Left Icon - LaraCoreKit',
                    'seo_description' => 'Button component with icon positioned on the left side. Perfect spacing for Laravel applications.',
                ],
                'button-icon-right' => [
                    'title' => 'Button with Icon (Right)',
                    'description' => 'Button with icon on the right',
                    'seo_title' => 'Button with Right Icon - LaraCoreKit',
                    'seo_description' => 'Button component with icon positioned on the right side. Ideal for action indicators in Laravel apps.',
                ],
                'loading-button' => [
                    'title' => 'Loading Button',
                    'description' => 'Button with loading state',
                    'seo_title' => 'Loading Button Component - LaraCoreKit',
                    'seo_description' => 'Loading button component with spinner. Async action feedback for form submissions in Laravel.',
                ],
                'disabled-button' => [
                    'title' => 'Disabled Button',
                    'description' => 'Disabled button state',
                    'seo_title' => 'Disabled Button Component - LaraCoreKit',
                    'seo_description' => 'Disabled button state styling. Reduced opacity and cursor changes for Laravel applications.',
                ],
                'full-width-button' => [
                    'title' => 'Full Width Button',
                    'description' => 'Button that spans full width',
                    'seo_title' => 'Full Width Button - LaraCoreKit',
                    'seo_description' => 'Full width button component for mobile-friendly forms. Responsive button sizing for Laravel apps.',
                ],
                'button-group' => [
                    'title' => 'Button Group',
                    'description' => 'Multiple buttons grouped together',
                    'seo_title' => 'Button Group Component - LaraCoreKit',
                    'seo_description' => 'Button group component for related actions. Segmented controls and toolbars for Laravel applications.',
                ],
                'button-dropdown' => [
                    'title' => 'Button with Dropdown',
                    'description' => 'Button that opens dropdown menu',
                    'seo_title' => 'Button Dropdown Component - LaraCoreKit',
                    'seo_description' => 'Button with dropdown menu component. Split buttons and action menus using Alpine.js.',
                ],
                'floating-action-button' => [
                    'title' => 'Floating Action Button (FAB)',
                    'description' => 'Floating button for primary actions',
                    'seo_title' => 'Floating Action Button - LaraCoreKit',
                    'seo_description' => 'FAB component for primary actions. Fixed position circular button for mobile-first Laravel apps.',
                ],
                'link-button' => [
                    'title' => 'Link Button',
                    'description' => 'Link styled as button',
                    'seo_title' => 'Link Button Component - LaraCoreKit',
                    'seo_description' => 'Link styled as button component. Semantic anchor element with button appearance for Laravel apps.',
                ],
                'button-sizes' => [
                    'title' => 'Button Sizes',
                    'description' => 'Different button size variants',
                    'seo_title' => 'Button Sizes - LaraCoreKit',
                    'seo_description' => 'Button size variants from extra small to extra large. Responsive sizing utilities for Laravel projects.',
                ],
            ],
        ],
        
        'forms' => [
            'name' => 'Forms',
            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>',
            'description' => 'Inputs, selects, checkboxes, and all form controls',
            'components' => [
                'text-input' => [
                    'title' => 'Text Input',
                    'description' => 'Standard text input field',
                    'seo_title' => 'Text Input Component - LaraCoreKit',
                    'seo_description' => 'Text input component with label and validation. Form field styling with Tailwind CSS for Laravel.',
                ],
                'textarea' => [
                    'title' => 'Textarea',
                    'description' => 'Multi-line text input',
                    'seo_title' => 'Textarea Component - LaraCoreKit',
                    'seo_description' => 'Textarea component for multi-line text input. Resizable text area with character count for Laravel apps.',
                ],
                'select-dropdown' => [
                    'title' => 'Select Dropdown',
                    'description' => 'Standard select input',
                    'seo_title' => 'Select Dropdown Component - LaraCoreKit',
                    'seo_description' => 'Select dropdown component for option selection. Styled native select element for Laravel forms.',
                ],
                'checkbox' => [
                    'title' => 'Checkbox',
                    'description' => 'Single checkbox with label',
                    'seo_title' => 'Checkbox Component - LaraCoreKit',
                    'seo_description' => 'Checkbox component for boolean inputs. Custom styled checkboxes with labels for Laravel forms.',
                ],
                'radio-button' => [
                    'title' => 'Radio Buttons',
                    'description' => 'Single selection radio group',
                    'seo_title' => 'Radio Button Component - LaraCoreKit',
                    'seo_description' => 'Radio button component for single selection. Radio groups with custom styling for Laravel applications.',
                ],
                'toggle-switch' => [
                    'title' => 'Toggle Switch',
                    'description' => 'On/off toggle switch',
                    'seo_title' => 'Toggle Switch Component - LaraCoreKit',
                    'seo_description' => 'Toggle switch component for boolean inputs. iOS-style switches using Alpine.js for Laravel apps.',
                ],
                'file-upload' => [
                    'title' => 'File Upload',
                    'description' => 'File input field',
                    'seo_title' => 'File Upload Component - LaraCoreKit',
                    'seo_description' => 'File upload component with drag and drop. Multiple file support for Laravel applications.',
                ],
                'tag-input' => [
                    'title' => 'Tags Input',
                    'description' => 'Add and remove tags',
                    'seo_title' => 'Tag Input Component - LaraCoreKit',
                    'seo_description' => 'Tag input component for multiple keywords. Dynamic tag management using Alpine.js for Laravel.',
                ],
                'phone-input' => [
                    'title' => 'Phone Input',
                    'description' => 'Phone number with formatting',
                    'seo_title' => 'Phone Input Component - LaraCoreKit',
                    'seo_description' => 'Phone input component with country code selector. International phone number formatting for Laravel.',
                ],
                'otp-input' => [
                    'title' => 'OTP Input',
                    'description' => 'One-time password input boxes',
                    'seo_title' => 'OTP Input Component - LaraCoreKit',
                    'seo_description' => 'OTP input component for verification codes. Auto-focus and paste support for Laravel authentication.',
                ],
                'currency-input' => [
                    'title' => 'Currency Input',
                    'description' => 'Money input with prefix',
                    'seo_title' => 'Currency Input Component - LaraCoreKit',
                    'seo_description' => 'Currency input component with symbol prefix. Number formatting for monetary values in Laravel.',
                ],
                'multi-select' => [
                    'title' => 'Multi-Select',
                    'description' => 'Select multiple options',
                    'seo_title' => 'Multi-Select Component - LaraCoreKit',
                    'seo_description' => 'Multi-select component for multiple option selection. Checkbox dropdown using Alpine.js for Laravel.',
                ],
                'date-picker' => [
                    'title' => 'Date Picker',
                    'description' => 'Simple date input',
                    'seo_title' => 'Date Picker Component - LaraCoreKit',
                    'seo_description' => 'Date picker component for date selection. Native date input with calendar interface for Laravel forms.',
                ],
                'time-picker' => [
                    'title' => 'Time Picker',
                    'description' => 'Time selection input',
                    'seo_title' => 'Time Picker Component - LaraCoreKit',
                    'seo_description' => 'Time picker component for time selection. Hour and minute input for Laravel applications.',
                ],
                'datetime-picker' => [
                    'title' => 'DateTime Picker',
                    'description' => 'Date and time combined',
                    'seo_title' => 'DateTime Picker Component - LaraCoreKit',
                    'seo_description' => 'DateTime picker component for combined date and time. Event scheduling for Laravel applications.',
                ],
                'color-picker' => [
                    'title' => 'Color Picker',
                    'description' => 'Color selection input',
                    'seo_title' => 'Color Picker Component - LaraCoreKit',
                    'seo_description' => 'Color picker component for color selection. Native color input with hex value display for Laravel.',
                ],
                'auto-resize-textarea' => [
                    'title' => 'Auto-resizing Textarea',
                    'description' => 'Textarea that grows with content',
                    'seo_title' => 'Auto-resize Textarea - LaraCoreKit',
                    'seo_description' => 'Auto-resizing textarea component. Dynamic height adjustment based on content for Laravel forms.',
                ],
            ],
        ],
        
        'navigation' => [
            'name' => 'Navigation',
            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>',
            'description' => 'Headers, menus, breadcrumbs, and navigation patterns',
            'components' => [
                'horizontal-navbar' => [
                    'title' => 'Horizontal Navbar',
                    'description' => 'Top navigation bar with logo and menu items',
                    'seo_title' => 'Horizontal Navbar Component - LaraCoreKit',
                    'seo_description' => 'Responsive horizontal navbar with logo and menu items. Top navigation bar for Laravel applications.',
                ],
                'breadcrumbs' => [
                    'title' => 'Breadcrumbs',
                    'description' => 'Navigation trail showing current location',
                    'seo_title' => 'Breadcrumbs Component - LaraCoreKit',
                    'seo_description' => 'Breadcrumb navigation trail component. Show user location hierarchy in Laravel applications.',
                ],
                'tabs' => [
                    'title' => 'Tabs',
                    'description' => 'Tabbed navigation for content sections',
                    'seo_title' => 'Tabs Component - LaraCoreKit',
                    'seo_description' => 'Tabbed navigation component using Alpine.js. Switch between content sections in Laravel apps.',
                ],
                'pagination' => [
                    'title' => 'Pagination',
                    'description' => 'Page navigation controls',
                    'seo_title' => 'Pagination Component - LaraCoreKit',
                    'seo_description' => 'Pagination component for navigating pages. Responsive page controls for Laravel applications.',
                ],
                'vertical-sidebar' => [
                    'title' => 'Vertical Sidebar Menu',
                    'description' => 'Side navigation with icons',
                    'seo_title' => 'Vertical Sidebar Menu - LaraCoreKit',
                    'seo_description' => 'Vertical sidebar navigation with icons. Side menu component for Laravel admin panels.',
                ],
                'dropdown-menu' => [
                    'title' => 'Dropdown Menu',
                    'description' => 'User profile dropdown',
                    'seo_title' => 'Dropdown Menu Component - LaraCoreKit',
                    'seo_description' => 'Dropdown menu component using Alpine.js. User profile and action menus for Laravel apps.',
                ],
                'mobile-menu' => [
                    'title' => 'Mobile Menu (Hamburger)',
                    'description' => 'Responsive mobile navigation menu',
                    'seo_title' => 'Mobile Hamburger Menu - LaraCoreKit',
                    'seo_description' => 'Mobile hamburger menu component. Responsive navigation toggle for Laravel mobile views.',
                ],
            ],
        ],
        
        'layouts' => [
            'name' => 'Layouts',
            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"></path>',
            'description' => 'Cards, grids, containers, and layout patterns',
            'components' => [
                'basic-card' => [
                    'title' => 'Basic Card',
                    'description' => 'Simple card with shadow and rounded corners',
                    'seo_title' => 'Basic Card Component - LaraCoreKit',
                    'seo_description' => 'Basic card component with shadow and rounded corners. Clean content container for Laravel applications.',
                ],
                'card-with-header-footer' => [
                    'title' => 'Card with Header & Footer',
                    'description' => 'Card with distinct header and footer sections',
                    'seo_title' => 'Card with Header Footer - LaraCoreKit',
                    'seo_description' => 'Card component with header and footer sections. Structured content layout for Laravel applications.',
                ],
                'card-with-image' => [
                    'title' => 'Card with Image',
                    'description' => 'Media card with image header',
                    'seo_title' => 'Card with Image Component - LaraCoreKit',
                    'seo_description' => 'Card with image component for media content. Image header with text content for Laravel apps.',
                ],
                'two-column-grid' => [
                    'title' => 'Two Column Grid',
                    'description' => 'Responsive two-column grid layout',
                    'seo_title' => 'Two Column Grid Layout - LaraCoreKit',
                    'seo_description' => 'Responsive two-column grid layout with Tailwind CSS. Flexible grid system for Laravel applications.',
                ],
                'three-column-grid' => [
                    'title' => 'Three Column Grid',
                    'description' => 'Responsive three-column grid layout',
                    'seo_title' => 'Three Column Grid Layout - LaraCoreKit',
                    'seo_description' => 'Responsive three-column grid layout. Perfect for dashboards and feature listings in Laravel apps.',
                ],
                'sidebar-layout' => [
                    'title' => 'Sidebar Layout',
                    'description' => 'Page layout with sidebar and main content',
                    'seo_title' => 'Sidebar Layout Component - LaraCoreKit',
                    'seo_description' => 'Sidebar layout with main content area. Responsive admin panel layout for Laravel applications.',
                ],
                'full-width-container' => [
                    'title' => 'Full Width Container',
                    'description' => 'Full width section with max-width container',
                    'seo_title' => 'Full Width Container - LaraCoreKit',
                    'seo_description' => 'Full width container component with centered max-width. Page section layout for Laravel apps.',
                ],
            ],
        ],

        'data-display' => [
            'name' => 'Data Display',
            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M3 14h18m-9-4v8m-7 0h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path>',
            'description' => 'Tables, badges, avatars, accordions, and data components',
            'components' => [
                'basic-table' => [
                    'title' => 'Basic Table',
                    'description' => 'Simple HTML table with proper styling',
                    'seo_title' => 'Basic Table Component - LaraCoreKit',
                    'seo_description' => 'Basic table component with proper styling and dark mode. Data display table for Laravel applications.',
                ],
                'striped-table' => [
                    'title' => 'Striped Table',
                    'description' => 'Alternating row color table',
                    'seo_title' => 'Striped Table Component - LaraCoreKit',
                    'seo_description' => 'Striped table with alternating row colors. Improved readability for data-heavy Laravel apps.',
                ],
                'table-with-actions' => [
                    'title' => 'Table with Actions',
                    'description' => 'Table rows with edit and delete buttons',
                    'seo_title' => 'Table with Actions - LaraCoreKit',
                    'seo_description' => 'Data table with edit and delete action buttons. CRUD table component for Laravel applications.',
                ],
                'badge' => [
                    'title' => 'Badges',
                    'description' => 'Status badges and labels',
                    'seo_title' => 'Badge Component - LaraCoreKit',
                    'seo_description' => 'Status badge components in multiple colors. Label and tag components for Laravel applications.',
                ],
                'avatar' => [
                    'title' => 'Avatars',
                    'description' => 'User avatar components',
                    'seo_title' => 'Avatar Component - LaraCoreKit',
                    'seo_description' => 'User avatar components with image fallbacks and initials. Stacked avatars for Laravel apps.',
                ],
                'tooltip' => [
                    'title' => 'Tooltip',
                    'description' => 'Hover tooltip component',
                    'seo_title' => 'Tooltip Component - LaraCoreKit',
                    'seo_description' => 'Tooltip component using Alpine.js. Contextual help text for interactive elements in Laravel apps.',
                ],
                'accordion' => [
                    'title' => 'Accordion',
                    'description' => 'Expandable accordion sections',
                    'seo_title' => 'Accordion Component - LaraCoreKit',
                    'seo_description' => 'Accordion component with expand/collapse using Alpine.js. FAQ and content sections for Laravel.',
                ],
                'stat-card' => [
                    'title' => 'Stat Card',
                    'description' => 'Statistics and metrics card',
                    'seo_title' => 'Stat Card Component - LaraCoreKit',
                    'seo_description' => 'Statistics card component for metrics and KPIs. Dashboard stat card for Laravel applications.',
                ],
                'progress-bar' => [
                    'title' => 'Progress Bar',
                    'description' => 'Progress indicator bar',
                    'seo_title' => 'Progress Bar Component - LaraCoreKit',
                    'seo_description' => 'Progress bar component for completion indicators. Multiple styles and colors for Laravel apps.',
                ],
            ],
        ],

        'feedback' => [
            'name' => 'Feedback',
            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>',
            'description' => 'Alerts, toasts, modals, and user feedback components',
            'components' => [
                'alert-success' => [
                    'title' => 'Alert Success',
                    'description' => 'Green success alert message',
                    'seo_title' => 'Success Alert Component - LaraCoreKit',
                    'seo_description' => 'Success alert component with green styling. Positive feedback messages for Laravel applications.',
                ],
                'alert-error' => [
                    'title' => 'Alert Error',
                    'description' => 'Red error alert message',
                    'seo_title' => 'Error Alert Component - LaraCoreKit',
                    'seo_description' => 'Error alert component with red styling. Error feedback messages for Laravel applications.',
                ],
                'alert-warning' => [
                    'title' => 'Alert Warning',
                    'description' => 'Yellow warning alert message',
                    'seo_title' => 'Warning Alert Component - LaraCoreKit',
                    'seo_description' => 'Warning alert component with yellow styling. Caution messages for Laravel applications.',
                ],
                'alert-info' => [
                    'title' => 'Alert Info',
                    'description' => 'Blue informational alert message',
                    'seo_title' => 'Info Alert Component - LaraCoreKit',
                    'seo_description' => 'Informational alert component with blue styling. Info messages for Laravel applications.',
                ],
                'toast-notification' => [
                    'title' => 'Toast Notification',
                    'description' => 'Auto-dismissing notification toast',
                    'seo_title' => 'Toast Notification Component - LaraCoreKit',
                    'seo_description' => 'Toast notification component using Alpine.js. Auto-dismissing popups for Laravel applications.',
                ],
                'modal' => [
                    'title' => 'Modal Dialog',
                    'description' => 'Accessible modal overlay dialog',
                    'seo_title' => 'Modal Component - LaraCoreKit',
                    'seo_description' => 'Modal dialog component using Alpine.js. Accessible overlay dialogs for Laravel applications.',
                ],
                'confirmation-dialog' => [
                    'title' => 'Confirmation Dialog',
                    'description' => 'Delete/action confirmation modal',
                    'seo_title' => 'Confirmation Dialog - LaraCoreKit',
                    'seo_description' => 'Confirmation dialog component for destructive actions. Delete confirm modal for Laravel apps.',
                ],
                'loading-spinner' => [
                    'title' => 'Loading Spinner',
                    'description' => 'Animated loading spinner',
                    'seo_title' => 'Loading Spinner Component - LaraCoreKit',
                    'seo_description' => 'Loading spinner component in multiple sizes and colors. Async loading indicator for Laravel apps.',
                ],
                'skeleton-loader' => [
                    'title' => 'Skeleton Loader',
                    'description' => 'Content placeholder skeleton animation',
                    'seo_title' => 'Skeleton Loader Component - LaraCoreKit',
                    'seo_description' => 'Skeleton loader component for content placeholders. Loading state animation for Laravel apps.',
                ],
                'empty-state' => [
                    'title' => 'Empty State',
                    'description' => 'Empty data placeholder with CTA',
                    'seo_title' => 'Empty State Component - LaraCoreKit',
                    'seo_description' => 'Empty state component for no-data views. Illustrated empty states with CTA for Laravel apps.',
                ],
            ],
        ],

        'charts' => [
            'name' => 'Charts',
            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>',
            'description' => 'Line, bar, pie, donut, area, radar charts and sparklines',
            'components' => [
                'line-chart' => [
                    'title' => 'Line Chart',
                    'description' => 'Smooth line chart with Chart.js',
                    'seo_title' => 'Line Chart Component - LaraCoreKit',
                    'seo_description' => 'Line chart component using Chart.js. Trend visualization for Laravel admin dashboards.',
                ],
                'bar-chart' => [
                    'title' => 'Bar Chart',
                    'description' => 'Vertical bar chart with Chart.js',
                    'seo_title' => 'Bar Chart Component - LaraCoreKit',
                    'seo_description' => 'Bar chart component using Chart.js. Comparison data visualization for Laravel applications.',
                ],
                'pie-chart' => [
                    'title' => 'Pie Chart',
                    'description' => 'Pie chart for proportional data',
                    'seo_title' => 'Pie Chart Component - LaraCoreKit',
                    'seo_description' => 'Pie chart component using Chart.js. Proportional data visualization for Laravel dashboards.',
                ],
                'donut-chart' => [
                    'title' => 'Donut Chart',
                    'description' => 'Ring chart with center space',
                    'seo_title' => 'Donut Chart Component - LaraCoreKit',
                    'seo_description' => 'Donut chart component using Chart.js. Proportion visualization with legend for Laravel apps.',
                ],
                'area-chart' => [
                    'title' => 'Area Chart',
                    'description' => 'Filled area chart',
                    'seo_title' => 'Area Chart Component - LaraCoreKit',
                    'seo_description' => 'Area chart component with filled region. Time series data visualization for Laravel apps.',
                ],
                'radar-chart' => [
                    'title' => 'Radar Chart',
                    'description' => 'Spider web radar chart',
                    'seo_title' => 'Radar Chart Component - LaraCoreKit',
                    'seo_description' => 'Radar chart component for multi-variable comparison. Skills and performance charts for Laravel.',
                ],
                'sparklines' => [
                    'title' => 'Sparklines',
                    'description' => 'Mini inline trend charts',
                    'seo_title' => 'Sparklines Component - LaraCoreKit',
                    'seo_description' => 'Sparkline mini chart components for dashboard KPIs. Inline trend indicators for Laravel apps.',
                ],
            ],
        ],

        'utilities' => [
            'name' => 'Utilities',
            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>',
            'description' => 'Clipboard, QR codes, export, and download utilities',
            'components' => [
                'copy-to-clipboard' => [
                    'title' => 'Copy to Clipboard',
                    'description' => 'One-click copy with visual feedback',
                    'seo_title' => 'Copy to Clipboard Component - LaraCoreKit',
                    'seo_description' => 'Copy to clipboard component using Alpine.js. One-click copy with visual feedback for Laravel apps.',
                ],
                'qr-code-generator' => [
                    'title' => 'QR Code Generator',
                    'description' => 'Dynamic QR code from URL input',
                    'seo_title' => 'QR Code Generator - LaraCoreKit',
                    'seo_description' => 'QR code generator component for URLs and text. Dynamic QR code display for Laravel applications.',
                ],
                'export-to-csv' => [
                    'title' => 'Export to CSV',
                    'description' => 'Download table data as CSV file',
                    'seo_title' => 'Export to CSV Component - LaraCoreKit',
                    'seo_description' => 'Export data to CSV component using JavaScript. Table data download for Laravel applications.',
                ],
                'download-button' => [
                    'title' => 'Download Button',
                    'description' => 'Trigger file downloads from browser',
                    'seo_title' => 'Download Button Component - LaraCoreKit',
                    'seo_description' => 'Download button component for file downloads. Blob-based file export for Laravel applications.',
                ],
            ],
        ],

        'media' => [
            'name' => 'Media',
            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>',
            'description' => 'File uploaders, image galleries, carousels, and media players',
            'components' => [
                'drag-drop-upload' => [
                    'title' => 'Drag & Drop Upload',
                    'description' => 'Drag and drop file upload area',
                    'seo_title' => 'Drag Drop Upload Component - LaraCoreKit',
                    'seo_description' => 'Drag and drop file upload component using Alpine.js. File picker with visual feedback for Laravel.',
                ],
                'image-gallery' => [
                    'title' => 'Image Gallery with Lightbox',
                    'description' => 'Grid gallery with lightbox modal',
                    'seo_title' => 'Image Gallery Lightbox - LaraCoreKit',
                    'seo_description' => 'Image gallery component with lightbox modal. Fullscreen photo viewer using Alpine.js for Laravel.',
                ],
                'image-carousel' => [
                    'title' => 'Image Carousel',
                    'description' => 'Auto-playing image slider with controls',
                    'seo_title' => 'Image Carousel Component - LaraCoreKit',
                    'seo_description' => 'Auto-playing image carousel with navigation and indicators. Slider component for Laravel apps.',
                ],
                'video-player' => [
                    'title' => 'Video Player',
                    'description' => 'Custom video player with controls',
                    'seo_title' => 'Video Player Component - LaraCoreKit',
                    'seo_description' => 'Custom HTML5 video player with play/pause and volume. Media player component for Laravel apps.',
                ],
                'avatar-upload' => [
                    'title' => 'Avatar Upload',
                    'description' => 'Circular avatar image upload with preview',
                    'seo_title' => 'Avatar Upload Component - LaraCoreKit',
                    'seo_description' => 'Avatar upload component with circular preview. Profile picture management for Laravel applications.',
                ],
            ],
        ],

        'auth' => [
            'name' => 'Auth',
            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>',
            'description' => 'Login, registration, OTP, and profile management forms',
            'components' => [
                'login-form' => [
                    'title' => 'Login Form',
                    'description' => 'Email/password login with remember me',
                    'seo_title' => 'Login Form Component - LaraCoreKit',
                    'seo_description' => 'Login form component with email, password, remember me, and loading state for Laravel apps.',
                ],
                'register-form' => [
                    'title' => 'Register Form',
                    'description' => 'Registration with password strength indicator',
                    'seo_title' => 'Register Form Component - LaraCoreKit',
                    'seo_description' => 'Registration form with password strength meter and terms checkbox. Signup form for Laravel apps.',
                ],
                'otp-verification' => [
                    'title' => 'OTP Verification',
                    'description' => 'One-time password with resend timer',
                    'seo_title' => 'OTP Verification Component - LaraCoreKit',
                    'seo_description' => 'OTP verification form with 6-digit input and resend timer. Two-factor auth for Laravel apps.',
                ],
                'profile-settings' => [
                    'title' => 'Profile Settings',
                    'description' => 'Editable profile form with save states',
                    'seo_title' => 'Profile Settings Component - LaraCoreKit',
                    'seo_description' => 'Profile settings form with save state feedback. User account management for Laravel applications.',
                ],
            ],
        ],

        'landing' => [
            'name' => 'Landing',
            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>',
            'description' => 'Hero sections, pricing tables, and feature grids',
            'components' => [
                'hero-section' => [
                    'title' => 'Hero Section',
                    'description' => 'Gradient hero with CTA buttons',
                    'seo_title' => 'Hero Section Component - LaraCoreKit',
                    'seo_description' => 'Landing page hero section with gradient background and CTA buttons. Page header for Laravel apps.',
                ],
                'pricing-table' => [
                    'title' => 'Pricing Table',
                    'description' => 'Three-tier pricing with featured plan',
                    'seo_title' => 'Pricing Table Component - LaraCoreKit',
                    'seo_description' => 'Pricing table component with three tiers and featured plan highlight. SaaS pricing for Laravel apps.',
                ],
                'feature-grid' => [
                    'title' => 'Feature Grid',
                    'description' => 'Features with icons in grid layout',
                    'seo_title' => 'Feature Grid Component - LaraCoreKit',
                    'seo_description' => 'Feature grid component with icons and descriptions. Marketing feature section for Laravel apps.',
                ],
            ],
        ],

        'ecommerce' => [
            'name' => 'E-Commerce',
            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>',
            'description' => 'Product cards, shopping cart, and review components',
            'components' => [
                'product-card' => [
                    'title' => 'Product Card',
                    'description' => 'Product card with image, price, and actions',
                    'seo_title' => 'Product Card Component - LaraCoreKit',
                    'seo_description' => 'Product card component with image, price, sale badge and add to cart. E-commerce for Laravel.',
                ],
                'shopping-cart' => [
                    'title' => 'Shopping Cart',
                    'description' => 'Cart with quantity controls and totals',
                    'seo_title' => 'Shopping Cart Component - LaraCoreKit',
                    'seo_description' => 'Shopping cart component with quantity adjustment and total calculation using Alpine.js for Laravel.',
                ],
                'product-review' => [
                    'title' => 'Product Review',
                    'description' => 'Star ratings and review display',
                    'seo_title' => 'Product Review Component - LaraCoreKit',
                    'seo_description' => 'Product review component with star ratings and helpful votes. Customer feedback for Laravel apps.',
                ],
            ],
        ],

        'advanced' => [
            'name' => 'Advanced',
            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path>',
            'description' => 'Drag and drop, live search, and advanced interaction components',
            'components' => [
                'drag-drop-list' => [
                    'title' => 'Drag & Drop List',
                    'description' => 'Reorderable list with drag and drop',
                    'seo_title' => 'Drag Drop List Component - LaraCoreKit',
                    'seo_description' => 'Drag and drop sortable list using Alpine.js. Reorderable items with visual feedback for Laravel apps.',
                ],
                'live-search' => [
                    'title' => 'Live Search',
                    'description' => 'Real-time search with dropdown results',
                    'seo_title' => 'Live Search Component - LaraCoreKit',
                    'seo_description' => 'Live search component with instant results using Alpine.js. Autocomplete search for Laravel apps.',
                ],
                'sliding-drawer' => [
                    'title' => 'Sliding Drawer',
                    'description' => 'Side panel that slides in from the edge',
                    'seo_title' => 'Sliding Drawer Component - LaraCoreKit',
                    'seo_description' => 'Sliding drawer component with overlay and animation. Side panels for navigation in Laravel apps.',
                ],
            ],
        ],
    ],
];
