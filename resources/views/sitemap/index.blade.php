<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
  <sitemapindex xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <sitemap>
      <loc>{{ url('sitemap/tren-warna') }}</loc>
      <lastmod>{{ $post->created_at->toAtomString() }}</lastmod>
    </sitemap>
    <sitemap>
      <loc>{{ url('sitemap/kartu-warna') }}</loc>
      <lastmod>{{ $post->created_at->toAtomString() }}</lastmod>
    </sitemap>
    <sitemap>
      <loc>{{ url('sitemap/palet-warna') }}</loc>
      <lastmod>{{ $post->created_at->toAtomString() }}</lastmod>
    </sitemap>
  </sitemapindex>