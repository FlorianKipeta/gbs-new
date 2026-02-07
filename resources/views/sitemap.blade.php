{!! '<' . '?xml version="1.0" encoding="UTF-8"?' . '>' !!}
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    @foreach($staticPages as $page)
        <url>
            <loc>{{ route($page) }}</loc>
            <lastmod>{{ now()->startOfMonth()->toAtomString() }}</lastmod>
            <changefreq>monthly</changefreq>
            <priority>{{ $page === 'welcome' ? '1.0' : '0.8' }}</priority>
        </url>
    @endforeach

    @foreach($projects as $slug)
        <url>
            <loc>{{ route('projects.show', $slug) }}</loc>
            <lastmod>{{ now()->startOfMonth()->toAtomString() }}</lastmod>
            <changefreq>monthly</changefreq>
            <priority>0.7</priority>
        </url>
    @endforeach
</urlset>
