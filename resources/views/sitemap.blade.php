<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>

<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
        xmlns:xhtml="http://www.w3.org/1999/xhtml">
    <url>
        <loc>https://zmeika.pro/</loc>
        <lastmod>
            {{ isset($lastUpdateProduct->updated_at) ?
            $lastUpdateProduct->updated_at->tz('UTC')->toAtomString() : '2024-06-22T12:00:14+01:00' }}
        </lastmod>
        <priority>0.9</priority>
    </url>
    <url>
        <loc>https://zmeika.pro/catalog</loc>
        <lastmod>{{ isset($lastUpdateProduct->updated_at) ?
            $lastUpdateProduct->updated_at->tz('UTC')->toAtomString() : '2024-06-22T12:00:14+01:00' }}
        </lastmod>
        <priority>0.9</priority>
    </url>
    <url>
        <loc>https://zmeika.pro/contacts</loc>
        <lastmod>{{ isset($lastUpdateProduct->updated_at) ?
            $lastUpdateProduct->updated_at->tz('UTC')->toAtomString() : '2024-06-22T12:00:14+01:00' }}
        </lastmod>
        <priority>0.8</priority>
    </url>
    @if(isset($products[0]->name))
        @foreach ($products as $product)
            <url>
                <loc>{{ route('catalog.detail', ['slug' => $product->slug])}}</loc>
                <lastmod>{{ $product->updated_at->tz('UTC')->toAtomString() }}</lastmod>
                <changefreq>weekly</changefreq>
                <priority>0.9</priority>
            </url>
        @endforeach
    @endif
</urlset>
