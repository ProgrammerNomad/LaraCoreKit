<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>

<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">

    <!-- Home -->
    <url>
        <loc>{{ url('/') }}</loc>
        <changefreq>daily</changefreq>
        <priority>1.0</priority>
    </url>

    @foreach($docs as $slug)
    <url><loc>{{ url('/docs/'.$slug) }}</loc></url>
    @endforeach

    <!-- Blog index -->
    <url>
        <loc>{{ url('/blog') }}</loc>
        <changefreq>daily</changefreq>
        <priority>0.9</priority>
    </url>

    <!-- Blog posts (dynamic) -->
    @foreach($blogs as $blog)
    <url>
        <loc>{{ url('/blog/' . $blog->slug) }}</loc>
        <lastmod>{{ ($blog->updated_at ?? $blog->published_at)?->toDateString() }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.8</priority>
    </url>
    @endforeach

    <!-- Changelog -->
    <url>
        <loc>{{ url('/changelog') }}</loc>
        <changefreq>monthly</changefreq>
        <priority>0.5</priority>
    </url>

</urlset>
