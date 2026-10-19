<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use Modules\Blog\Models\Blog;
use Modules\Docs\Http\Controllers\DocsController;

class SitemapController extends Controller
{
    public function index(): Response
    {
        $blogs = collect();

        try {
            $blogs = Blog::query()
                ->published()
                ->whereNotNull('published_at')
                ->orderByDesc('published_at')
                ->get(['slug', 'updated_at', 'published_at']);
        } catch (\Throwable) {
            // Table may not exist yet during install
        }

        $docs = app(DocsController::class)->publishedPages();

        return response()
            ->view('sitemap', compact('blogs', 'docs'))
            ->header('Content-Type', 'application/xml; charset=utf-8');
    }
}
