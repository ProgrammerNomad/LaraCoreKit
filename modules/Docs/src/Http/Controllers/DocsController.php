<?php

namespace Modules\Docs\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
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
                ['title' => 'Package Release',    'slug' => 'package-release'],
                ['title' => 'Upgrade Guide',      'slug' => 'upgrade-guide'],
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
                ['title' => 'Optional API (Sanctum)',  'slug' => 'api/sanctum'],
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
                ['title' => 'Demo Setup',          'slug' => 'deployment/demo-setup'],
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
        abort_unless(preg_match('/\A[a-z0-9]+(?:[\/-][a-z0-9]+)*\z/', $page), 404);
        $filePath = $docsPath.'/'.$page.'.md';

        if (! File::exists($filePath)) {
            // Try index.md fallback
            $filePath = $docsPath.'/'.$page.'/index.md';
            if (! File::exists($filePath)) {
                abort(404, 'Documentation page not found.');
            }
        }

        $markdown = File::get($filePath);

        $parsedown = new Parsedown;
        $parsedown->setSafeMode(false);
        $content = $parsedown->text($markdown);

        // CRITICAL: Escape PHP open/close tags inside code blocks to prevent PHP's parser
        // from interpreting PHP open and close tags in documentation code examples as actual PHP tags.
        // This must be done BEFORE passing content to Blade's {!! $content !!}.
        $content = str_replace('<'.'?php', '&lt;?php', $content);
        $content = str_replace('<'.'?=', '&lt;?=', $content);
        $content = str_replace('?'.'>', '?&gt;', $content);

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
        $prevPage = ($currentIndex !== false && $currentIndex > 0) ? $this->findPageBySlug($allPages[$currentIndex - 1]) : null;
        $nextPage = ($currentIndex !== false && $currentIndex < count($allPages) - 1) ? $this->findPageBySlug($allPages[$currentIndex + 1]) : null;

        // Flat array of all pages for search (pre-computed to avoid Blade arrow-function parsing issues)
        $searchPages = [];
        foreach ($this->sidebar as $group) {
            foreach ($group['items'] as $item) {
                $searchPages[] = $item;
            }
        }

        return view('docs::show', [
            'content' => $content,
            'title' => $title,
            'page' => $page,
            'sidebar' => $this->sidebar,
            'meta' => $meta,
            'breadcrumb' => $breadcrumb,
            'prevPage' => $prevPage,
            'nextPage' => $nextPage,
            'searchPages' => $searchPages,
            'description' => Str::limit(preg_replace('/\s+/', ' ', strip_tags($content)), 155),
        ]);
    }

    public function publishedPages(): array
    {
        return array_values(array_filter($this->getAllPageSlugs(), fn (string $slug): bool => is_file(base_path('docs/'.$slug.'.md')) || is_file(base_path('docs/'.$slug.'/index.md'))
        ));
    }

    public function source(string $page)
    {
        abort_unless(in_array($page, $this->publishedPages(), true), 404);
        $path = base_path('docs/'.$page.'.md');
        if (! is_file($path)) {
            $path = base_path('docs/'.$page.'/index.md');
        }

        return response(file_get_contents($path), 200)
            ->header('Content-Type', 'text/plain; charset=UTF-8')
            ->header('X-Content-Type-Options', 'nosniff');
    }

    public function machineIndex()
    {
        $lines = [
            '# LaraCoreKit', '',
            '> MIT-licensed Laravel 13 foundation for both public frontend and Filament 5 administration.', '',
            'Package: programmernomad/laracorekit. Source: packages/core in the GitHub monorepo.',
            'Status: standalone Packagist release pending. Install directly from the GitHub package repository using the documented Composer VCS setup.',
            'Includes Auth, User, Settings, Blog, Media and shared Core infrastructure.',
            'The demo website, docs viewer, showcase and demo accounts are not part of the package.',
            'API tokens, enforced email verification, billing and tenancy are not bundled.', '',
            '## Documentation', '',
        ];
        foreach ($this->publishedPages() as $slug) {
            $page = $this->findPageBySlug($slug);
            $lines[] = '- ['.$page['title'].']('.url('/docs/'.$slug).'): Markdown source at '.url('/docs-source/'.$slug);
        }
        $lines[] = '';
        $lines[] = 'Source: https://github.com/ProgrammerNomad/LaraCoreKit';

        return response(implode("\n", $lines)."\n", 200)->header('Content-Type', 'text/plain; charset=UTF-8');
    }

    protected function buildBreadcrumb(string $page): array
    {
        $parts = explode('/', $page);
        $crumbs = [];
        if (count($parts) > 1) {
            $crumbs[] = [
                'title' => ucwords($parts[0]),
                'slug' => null,
            ];
        }
        $crumbs[] = [
            'title' => ucwords(str_replace('-', ' ', end($parts))),
            'slug' => $page,
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
