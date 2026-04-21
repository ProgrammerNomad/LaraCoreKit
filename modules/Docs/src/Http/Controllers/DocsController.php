<?php

namespace Modules\Docs\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\File;
use Parsedown;

class DocsController extends Controller
{
    protected array $sidebar = [
        'Getting Started' => [
            'icon' => '',
            'items' => [
                ['title' => 'Introduction',       'slug' => 'introduction'],
                ['title' => 'Quick Start',        'slug' => 'quick-start'],
                ['title' => 'Installation',       'slug' => 'installation'],
                ['title' => 'Project Structure',  'slug' => 'project-structure'],
                ['title' => 'Configuration',      'slug' => 'configuration'],
            ],
        ],
        'Core Concepts' => [
            'icon' => '',
            'items' => [
                ['title' => 'Architecture',        'slug' => 'core/architecture'],
                ['title' => 'Module System',       'slug' => 'core/modules-system'],
                ['title' => 'Service Providers',   'slug' => 'core/service-providers'],
                ['title' => 'Routing',             'slug' => 'core/routing'],
                ['title' => 'Middleware',          'slug' => 'core/middleware'],
            ],
        ],
        'Features' => [
            'icon' => '',
            'items' => [
                ['title' => 'Authentication',      'slug' => 'features/authentication'],
                ['title' => 'Users & Profiles',    'slug' => 'features/users'],
                ['title' => 'Roles & Permissions', 'slug' => 'features/roles-permissions'],
                ['title' => 'Blog System',         'slug' => 'features/blog'],
                ['title' => 'Media Management',    'slug' => 'features/media'],
                ['title' => 'Settings',            'slug' => 'features/settings'],
                ['title' => 'Multilingual',        'slug' => 'features/multilingual'],
                ['title' => 'RTL Support',         'slug' => 'features/rtl-support'],
            ],
        ],
        'Admin Panel (Filament)' => [
            'icon' => '',
            'items' => [
                ['title' => 'Overview',            'slug' => 'admin/filament-overview'],
                ['title' => 'Resources',           'slug' => 'admin/resources'],
                ['title' => 'Custom Pages',        'slug' => 'admin/custom-pages'],
                ['title' => 'Forms & Tables',      'slug' => 'admin/forms-tables'],
            ],
        ],
        'Frontend' => [
            'icon' => '',
            'items' => [
                ['title' => 'Livewire Basics',     'slug' => 'frontend/livewire'],
                ['title' => 'Components',          'slug' => 'frontend/components'],
                ['title' => 'Layout System',       'slug' => 'frontend/layouts'],
                ['title' => 'UI Showcase',         'slug' => 'frontend/ui-showcase'],
            ],
        ],
        'API' => [
            'icon' => '',
            'items' => [
                ['title' => 'API Auth (Sanctum)',  'slug' => 'api/sanctum'],
                ['title' => 'Endpoints',           'slug' => 'api/endpoints'],
                ['title' => 'Authentication',      'slug' => 'api/authentication'],
            ],
        ],
        'Modules' => [
            'icon' => '',
            'items' => [
                ['title' => 'Create a Module',     'slug' => 'modules/create-module'],
                ['title' => 'Module Structure',    'slug' => 'modules/module-structure'],
                ['title' => 'Publishing Modules',  'slug' => 'modules/publishing'],
                ['title' => 'Best Practices',      'slug' => 'modules/best-practices'],
            ],
        ],
        'Deployment' => [
            'icon' => '',
            'items' => [
                ['title' => 'Production Setup',    'slug' => 'deployment/production'],
                ['title' => 'Docker',              'slug' => 'deployment/docker'],
                ['title' => 'Hosting Guide',       'slug' => 'deployment/hosting'],
                ['title' => 'Performance',         'slug' => 'deployment/optimization'],
            ],
        ],
        'Advanced' => [
            'icon' => '',
            'items' => [
                ['title' => 'Testing',             'slug' => 'advanced/testing'],
                ['title' => 'Caching',             'slug' => 'advanced/caching'],
                ['title' => 'Queues',              'slug' => 'advanced/queues'],
                ['title' => 'Search',              'slug' => 'advanced/search'],
            ],
        ],
        'Help' => [
            'icon' => '',
            'items' => [
                ['title' => 'FAQ',                 'slug' => 'faq'],
                ['title' => 'Contributing',        'slug' => 'contributing'],
            ],
        ],
    ];

    public function show(Request $request, string $page = 'introduction')
    {
        $docsPath = base_path('docs');
        $filePath = $docsPath . '/' . $page . '.md';

        if (!File::exists($filePath)) {
            // Try index.md fallback
            $filePath = $docsPath . '/' . $page . '/index.md';
            if (!File::exists($filePath)) {
                abort(404, 'Documentation page not found.');
            }
        }

        $markdown = File::get($filePath);

        $parsedown = new Parsedown();
        $parsedown->setSafeMode(false);
        $content = $parsedown->text($markdown);

        // CRITICAL: Escape PHP open/close tags inside code blocks to prevent PHP's parser
        // from interpreting PHP open and close tags in documentation code examples as actual PHP tags.
        // This must be done BEFORE passing content to Blade's {!! $content !!}.
        $content = str_replace('<' . '?php', '&lt;?php', $content);
        $content = str_replace('<' . '?=', '&lt;?=', $content);
        $content = str_replace('?' . '>', '?&gt;', $content);


        // Extract title from H1 or filename
        preg_match('/<h1[^>]*>(.*?)<\/h1>/i', $content, $matches);
        $title = isset($matches[1]) ? strip_tags($matches[1]) : ucwords(str_replace(['-', '/'], [' ', ' › '], $page));

        // Extract "Estimated time" and "Difficulty" from markdown meta
        $meta = [];
        if (preg_match('/\*\*Estimated time:\*\*\s*(.+)/i', $markdown, $m)) {
            $meta['time'] = trim($m[1]);
        }
        if (preg_match('/\*\*Difficulty:\*\*\s*(.+)/i', $markdown, $m)) {
            $meta['difficulty'] = trim($m[1]);
        }

        // Build breadcrumb
        $breadcrumb = $this->buildBreadcrumb($page);

        // Find prev/next pages
        $allPages = $this->getAllPageSlugs();
        $currentIndex = array_search($page, $allPages);
        $prevPage = ($currentIndex > 0) ? $this->findPageBySlug($allPages[$currentIndex - 1]) : null;
        $nextPage = ($currentIndex !== false && $currentIndex < count($allPages) - 1) ? $this->findPageBySlug($allPages[$currentIndex + 1]) : null;

        // Flat array of all pages for search (pre-computed to avoid Blade arrow-function parsing issues)
        $searchPages = [];
        foreach ($this->sidebar as $group) {
            foreach ($group['items'] as $item) {
                $searchPages[] = $item;
            }
        }

        return view('docs::show', [
            'content'     => $content,
            'title'       => $title,
            'page'        => $page,
            'sidebar'     => $this->sidebar,
            'meta'        => $meta,
            'breadcrumb'  => $breadcrumb,
            'prevPage'    => $prevPage,
            'nextPage'    => $nextPage,
            'searchPages' => $searchPages,
        ]);
    }

    protected function buildBreadcrumb(string $page): array
    {
        $parts = explode('/', $page);
        $crumbs = [];
        if (count($parts) > 1) {
            $crumbs[] = [
                'title' => ucwords($parts[0]),
                'slug'  => null,
            ];
        }
        $crumbs[] = [
            'title' => ucwords(str_replace('-', ' ', end($parts))),
            'slug'  => $page,
        ];
        return $crumbs;
    }

    protected function getAllPageSlugs(): array
    {
        $slugs = [];
        foreach ($this->sidebar as $group) {
            foreach ($group['items'] as $item) {
                $slugs[] = $item['slug'];
            }
        }
        return $slugs;
    }

    protected function findPageBySlug(string $slug): ?array
    {
        foreach ($this->sidebar as $group) {
            foreach ($group['items'] as $item) {
                if ($item['slug'] === $slug) {
                    return $item;
                }
            }
        }
        return null;
    }
}
