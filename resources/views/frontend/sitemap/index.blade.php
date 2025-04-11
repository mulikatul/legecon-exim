<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
 
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
xmlns:image="http://www.google.com/schemas/sitemap-image/1.1">
	<url>
        <loc>{{ $base_url }}</loc>       		
        <changefreq>Always</changefreq>
        <priority>1.0</priority>
    </url>
	@foreach ($pages as $page)
        <url>
            <loc>{{ $base_url . $page['url'] }}</loc>       		
            <changefreq>{{ $page['frequency'] }}</changefreq>
            <priority>{{ $page['priority'] }}</priority>          
        </url>
    @endforeach 
</urlset>
