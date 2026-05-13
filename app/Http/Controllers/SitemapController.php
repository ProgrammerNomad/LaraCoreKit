<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;

class SitemapController extends Controller
{
    public function index(): Response
    {
        $blogs = collect();

        try {
            $blogs = \Modules\Blog\Models\Blog::query()
                ->where('status', 'published')
                ->whereNotNull('published_at')
                ->orderByDesc('published_at')
                ->get(['slug', 'updated_at', 'published_at']);
        } catch (\Throwable) {
            // Table may not exist yet during install
        }

        return response()
            ->view('sitemap', compact('blogs'))
            ->header('Content-Type', 'application/xml; charset=utf-8');
    }
}
