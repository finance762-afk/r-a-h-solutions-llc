<?php
/**
 * sitemap.php — dynamic XML sitemap (served at /sitemap.xml via .htaccess).
 * Pages come from this page registry + config.php ($services, $serviceAreas);
 * blog posts come ONLY from includes/blog-data.php. Each URL carries its key
 * images (image sitemap extension) — this replaces the old static sitemap files.
 */
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/blog-data.php';

header('Content-Type: application/xml; charset=utf-8');
header('X-Robots-Tag: noindex');

// lastmod = the page file's own modification date (never "today" for every URL)
$mod = function ($path) {
    $f = $_SERVER['DOCUMENT_ROOT'] . rtrim($path, '/') . '/index.php';
    return date('Y-m-d', is_file($f) ? filemtime($f) : time());
};
$imgSrc = fn($base) => '/assets/images/' . $base . '.jpg';
$img = fn($base, $caption) => ['src' => $imgSrc($base), 'caption' => $caption];

$pages = [
    ['/', '1.0', 'weekly', [
        $img($heroImage, 'Large residential lawn mowed in even stripes under mature shade trees, RAH Solutions LLC, Edgerton, WI'),
        $img('concrete-patio-steps-stone-ranch', 'New concrete patio with a rounded corner and steps'),
        $img('mulched-bed-steel-edging-driveway', 'Mulched planting bed with metal edging beside a lawn'),
        $img('plow-truck-driveway-dusk', 'Plow truck clearing a residential driveway at dusk'),
        $img('excavator-skid-steer-culvert', 'Skid steer and excavator grading beside a culvert pipe'),
    ]],
    ['/services/', '0.9', 'monthly', []],
];
foreach ($services as $s) {
    $path = '/services/' . $s['slug'] . '/';
    if (is_dir($_SERVER['DOCUMENT_ROOT'] . $path)) {
        $pages[] = [$path, '0.9', 'monthly', $s['image'] !== '' ? [$img($s['image'], $s['alt'])] : []];
    }
}
$pages[] = ['/service-area/', '0.8', 'monthly', []];
foreach ($serviceAreas as $a) {
    $path = '/areas/' . $a['slug'] . '/';
    if (is_dir($_SERVER['DOCUMENT_ROOT'] . $path)) {
        $pages[] = [$path, '0.8', 'monthly', []];
    }
}
$pages[] = ['/about/', '0.7', 'yearly', [$img('rah-truck-dump-trailer', 'RAH Solutions LLC pickup truck towing a dump trailer')]];
$pages[] = ['/contact/', '0.7', 'yearly', []];
$pages[] = ['/faq/', '0.6', 'monthly', []];
$pages[] = ['/blog/', '0.6', 'weekly', []];
foreach (['privacy-policy', 'terms', 'cookie-policy', 'accessibility'] as $legal) {
    if (is_dir($_SERVER['DOCUMENT_ROOT'] . '/' . $legal)) $pages[] = ['/' . $legal . '/', '0.3', 'yearly', []];
}

echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:image="http://www.google.com/schemas/sitemap-image/1.1">
<?php foreach ($pages as [$path, $priority, $freq, $images]): ?>
  <url>
    <loc><?php echo htmlspecialchars($siteUrl . $path); ?></loc>
    <lastmod><?php echo $mod($path); ?></lastmod>
    <changefreq><?php echo $freq; ?></changefreq>
    <priority><?php echo $priority; ?></priority>
<?php foreach ($images as $im): ?>
    <image:image>
      <image:loc><?php echo htmlspecialchars($siteUrl . $im['src']); ?></image:loc>
      <image:caption><?php echo htmlspecialchars($im['caption']); ?></image:caption>
    </image:image>
<?php endforeach; ?>
  </url>
<?php endforeach; ?>
<?php foreach ($blogPosts as $post): if (!is_dir($_SERVER['DOCUMENT_ROOT'] . '/blog/' . $post['slug'])) continue; ?>
  <url>
    <loc><?php echo htmlspecialchars($siteUrl . '/blog/' . $post['slug'] . '/'); ?></loc>
    <lastmod><?php echo htmlspecialchars($post['dateISO']); ?></lastmod>
    <changefreq>monthly</changefreq>
    <priority>0.6</priority>
    <image:image>
      <image:loc><?php echo htmlspecialchars($siteUrl . $imgSrc($post['image'])); ?></image:loc>
      <image:caption><?php echo htmlspecialchars($post['alt']); ?></image:caption>
    </image:image>
  </url>
<?php endforeach; ?>
</urlset>
