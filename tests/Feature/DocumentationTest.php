<?php

namespace Tests\Feature;

use Tests\TestCase;

class DocumentationTest extends TestCase
{
    public function test_primary_documentation_and_machine_readable_index_are_available(): void
    {
        foreach (['/docs', '/docs/installation', '/docs/core/architecture', '/docs/package-release', '/llms.txt'] as $path) {
            $this->get($path)->assertOk()->assertSee('LaraCoreKit');
        }
    }

    public function test_markdown_source_is_served_as_text(): void
    {
        $this->get('/docs-source/installation')->assertOk()
            ->assertHeader('Content-Type', 'text/plain; charset=UTF-8')->assertSee('# Installation');
    }

    public function test_documentation_rejects_traversal_and_missing_pages(): void
    {
        $this->get('/docs-source/../composer')->assertNotFound();
        $this->get('/docs-source/nonexistent')->assertNotFound();
        $this->get('/docs/not-a-real-page')->assertNotFound();
    }

    public function test_homepage_describes_both_frontend_and_admin_and_release_status(): void
    {
        $this->get('/')->assertOk()->assertSee('Public frontend + admin.')
            ->assertSee('Available on Packagist')->assertSee('Install with Composer')
            ->assertDontSee('Release preparation')->assertSee('SoftwareSourceCode', false);
    }

    public function test_sitemap_includes_current_documentation_and_excludes_auth_pages(): void
    {
        $this->get('/sitemap.xml')->assertOk()->assertSee('/docs/package-release')
            ->assertDontSee('<loc>'.url('/login').'</loc>', false)
            ->assertDontSee('<loc>'.url('/admin').'</loc>', false);
    }
}
