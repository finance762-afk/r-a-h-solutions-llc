<?php
/**
 * includes/functions.php — helpers shared by every page (icons, pictures, schema,
 * breadcrumbs, FAQ lists, service cards). Loaded right after config.php.
 * No output happens at include time.
 */

/** Inline Lucide SVG (build-time markup — no runtime icon JS). */
function icon(string $name, int $size = 20, string $class = ''): string {
    global $LUCIDE_ICONS;
    $inner = $LUCIDE_ICONS[$name] ?? '';
    if ($inner === '') return '';
    $cls = $class !== '' ? ' class="' . htmlspecialchars($class) . '"' : '';
    return '<svg' . $cls . ' xmlns="http://www.w3.org/2000/svg" width="' . $size . '" height="' . $size
        . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false">'
        . $inner . '</svg>';
}

function e($s): string { return htmlspecialchars((string) $s, ENT_QUOTES, 'UTF-8'); }

/** tel: href from the config phone. */
function telHref(): string { global $phoneRaw; return 'tel:' . $phoneRaw; }

/** Is $path the current page (or a parent section of it)? */
function isActivePage(string $path): bool {
    $cur = strtok($_SERVER['REQUEST_URI'] ?? '/', '?') ?: '/';
    if ($path === '/') return $cur === '/' || $cur === '/index.php';
    return strpos($cur, $path) === 0;
}
function ariaCurrent(string $path): string { return isActivePage($path) ? ' aria-current="page"' : ''; }

/** Intrinsic size of an /assets/images/{base}.jpg (cached per request). */
function imageSize(string $base): array {
    static $cache = [];
    if (isset($cache[$base])) return $cache[$base];
    $f = $_SERVER['DOCUMENT_ROOT'] . '/assets/images/' . $base . '.jpg';
    $s = is_file($f) ? @getimagesize($f) : false;
    return $cache[$base] = $s ? [$s[0], $s[1]] : [1600, 1200];
}

/** srcset for one format — lists only the variant files that exist on disk. */
function pictureSrcset(string $base, string $fmt): string {
    static $cache = [];
    $key = $base . '|' . $fmt;
    if (isset($cache[$key])) return $cache[$key];
    $parts = [];
    foreach ([480, 960, 1600] as $w) {
        $file = '/assets/images/' . $base . '-' . $w . '.' . $fmt;
        if (is_file($_SERVER['DOCUMENT_ROOT'] . $file)) $parts[] = $file . ' ' . $w . 'w';
    }
    return $cache[$key] = implode(', ', $parts);
}

/**
 * Responsive <picture>: AVIF source, WebP srcset on the <img>, JPEG src fallback.
 * $opts: eager (hero/LCP → eager + fetchpriority=high), class (on <img>), w/h override.
 */
function picture(string $base, string $alt, string $sizes, array $opts = []): string {
    [$w, $h] = imageSize($base);
    if (!empty($opts['w'])) { $h = (int) round($h * $opts['w'] / $w); $w = (int) $opts['w']; }
    $eager = !empty($opts['eager']);
    $avif = pictureSrcset($base, 'avif');
    $webp = pictureSrcset($base, 'webp');
    $cls = !empty($opts['class']) ? ' class="' . e($opts['class']) . '"' : '';
    $out = '<picture>';
    if ($avif !== '') $out .= '<source type="image/avif" srcset="' . $avif . '" sizes="' . e($sizes) . '">';
    $srcset = $webp !== '' ? $webp : '/assets/images/' . $base . '.jpg ' . $w . 'w';
    $out .= $eager
        ? sprintf('<img%s src="/assets/images/%s.jpg" srcset="%s" sizes="%s" alt="%s" width="%d" height="%d" loading="eager" fetchpriority="high">', $cls, $base, $srcset, e($sizes), e($alt), $w, $h)
        : sprintf('<img%s src="/assets/images/%s.jpg" srcset="%s" sizes="%s" alt="%s" width="%d" height="%d" loading="lazy" decoding="async">', $cls, $base, $srcset, e($sizes), e($alt), $w, $h);
    return $out . '</picture>';
}

/** Hero preload descriptor for head.php (AVIF srcset of the LCP photo). */
function heroPreload(string $base, string $sizes): array {
    return ['srcset' => pictureSrcset($base, 'avif'), 'sizes' => $sizes];
}

function serviceBySlug(string $slug): ?array {
    global $services;
    foreach ($services as $s) if ($s['slug'] === $slug) return $s;
    return null;
}
function areaBySlug(string $slug): ?array {
    global $serviceAreas;
    foreach ($serviceAreas as $a) if ($a['slug'] === $slug) return $a;
    return null;
}
/** Link to an area page only when it exists on disk (link-integrity rule). */
function areaHref(array $a): string {
    $p = '/areas/' . $a['slug'] . '/';
    return is_dir($_SERVER['DOCUMENT_ROOT'] . $p) ? $p : '/service-area/#' . $a['slug'];
}

/* ── Schema (JSON-LD @graph) ─────────────────────────────────────────────── */

/**
 * The business node. schema.org has no landscaping subtype (LandscapingBusiness is not a
 * real type), so per seo-aeo-2026.md the node is LocalBusiness with the trade in
 * description/knowsAbout. Service-area business: no streetAddress and no geo.
 */
function orgNode(): array {
    global $siteName, $siteUrl, $phone, $email, $address, $googleBusinessProfile, $serviceAreas,
           $services, $hoursSpec, $socialLinks, $ownerName, $yearEstablished, $logoPng, $heroImage;
    $areas = array_map(fn($a) => ['@type' => 'City', 'name' => $a['name'] . ', ' . $a['state']], $serviceAreas);
    return [
        '@type' => 'LocalBusiness',
        '@id' => $siteUrl . '/#organization',
        'name' => $siteName,
        'url' => $siteUrl . '/',
        'telephone' => $phone,
        'email' => $email,
        'image' => $siteUrl . '/assets/images/' . $heroImage . '-1600.webp',
        'logo' => $siteUrl . $logoPng,
        'description' => 'Family-owned landscaper based in Edgerton, Wisconsin since ' . $yearEstablished
            . ': lawn care, landscape installation, hardscaping, concrete, excavating, seasonal yard cleanups and snow removal for homes and businesses in Rock and Dane counties.',
        'foundingDate' => (string) $yearEstablished,
        'founder' => ['@type' => 'Person', 'name' => $ownerName],
        'address' => ['@type' => 'PostalAddress', 'addressLocality' => $address['city'], 'addressRegion' => $address['state'],
                      'postalCode' => $address['zip'], 'addressCountry' => 'US'],
        'hasMap' => $googleBusinessProfile,
        'openingHoursSpecification' => [[
            '@type' => 'OpeningHoursSpecification', 'dayOfWeek' => $hoursSpec['days'],
            'opens' => $hoursSpec['opens'], 'closes' => $hoursSpec['closes'],
        ]],
        'areaServed' => $areas,
        'knowsAbout' => array_merge(['Landscaping', 'Lawn care', 'Snow removal'], array_map(fn($s) => $s['name'], $services)),
        'sameAs' => array_values($socialLinks),
    ];
}

function breadcrumbNode(array $crumbs): array {
    global $siteUrl;
    $items = [];
    foreach ($crumbs as $i => $c) {
        $items[] = ['@type' => 'ListItem', 'position' => $i + 1, 'name' => $c[0], 'item' => $siteUrl . $c[1]];
    }
    return ['@type' => 'BreadcrumbList', 'itemListElement' => $items];
}

/** FAQPage node mirroring the visible FAQ exactly (AI comprehension aid). */
function faqSchemaNode(array $faqs): array {
    return ['@type' => 'FAQPage', 'mainEntity' => array_map(fn($f) => [
        '@type' => 'Question', 'name' => $f[0],
        'acceptedAnswer' => ['@type' => 'Answer', 'text' => strip_tags($f[1])],
    ], $faqs)];
}

function serviceSchemaNode(string $name, string $description, string $url, $areaServed = null): array {
    global $siteUrl, $serviceAreas;
    $area = $areaServed ?? array_map(fn($a) => ['@type' => 'City', 'name' => $a['name'] . ', ' . $a['state']], $serviceAreas);
    return [
        '@type' => 'Service', '@id' => $url . '#service', 'name' => $name, 'serviceType' => $name,
        'description' => $description, 'url' => $url,
        'provider' => ['@id' => $siteUrl . '/#organization'], 'areaServed' => $area,
    ];
}

function webPageNode(string $type = 'WebPage'): array {
    global $canonicalUrl, $pageTitle, $pageDescription, $siteUrl;
    return ['@type' => $type, '@id' => $canonicalUrl . '#webpage', 'url' => $canonicalUrl, 'name' => $pageTitle,
        'description' => $pageDescription, 'isPartOf' => ['@id' => $siteUrl . '/#website'],
        'about' => ['@id' => $siteUrl . '/#organization'], 'inLanguage' => 'en-US'];
}

/** JSON for the page's single @graph (org node + WebSite + $nodes); head.php wraps it in <script type="application/ld+json">. */
function schemaJson(array $nodes): string {
    global $siteUrl, $siteName;
    $graph = array_merge([orgNode(), ['@type' => 'WebSite', '@id' => $siteUrl . '/#website', 'url' => $siteUrl . '/', 'name' => $siteName]], $nodes);
    return json_encode(['@context' => 'https://schema.org', '@graph' => $graph], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_HEX_TAG);
}

/* ── Markup helpers ─────────────────────────────────────────────────────── */

/** Visible breadcrumb; $crumbs = [[label, path], …] — last one is the current page. */
function breadcrumbs(array $crumbs): string {
    $out = '<nav class="breadcrumb" aria-label="Breadcrumb"><ol>';
    $n = count($crumbs);
    foreach ($crumbs as $i => $c) {
        if ($i < $n - 1) {
            $out .= '<li><a href="' . e($c[1]) . '">' . e($c[0]) . '</a></li><li class="breadcrumb-sep" aria-hidden="true">/</li>';
        } else {
            $out .= '<li aria-current="page">' . e($c[0]) . '</li>';
        }
    }
    return $out . '</ol></nav>';
}

/** Native <details> FAQ list; answers may contain inline links (schema strips tags). */
function faqList(array $faqs, int $open = 1): string {
    $out = '';
    foreach ($faqs as $i => $f) {
        $out .= '<details class="faq"' . ($i < $open ? ' open' : '') . '><summary>' . e($f[0]) . '</summary><p class="faq-answer">' . $f[1] . '</p></details>';
    }
    return $out;
}

/** Decorative facet panel (the logo's diamond geometry) for services with no client photo yet. */
function facetPanel(string $iconName): string {
    return '<div class="facet-panel" aria-hidden="true"><svg class="facet-panel__lines" viewBox="0 0 300 180" preserveAspectRatio="xMidYMid slice" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round">'
        . '<path d="M-20 60H320M70 0 110 60 150 0 190 60 230 0M-20 60 150 240 320 60M110 60 150 240 190 60"/></svg>'
        . '<span class="facet-panel__icon">' . icon($iconName, 30) . '</span></div>';
}

/** Required-component service cards (tints rotate 1-2-3, exactly 3 bullets). Services without a
 *  client photo get the facet panel instead of a mismatched picture. */
function serviceCards(array $list, string $sizes = '(max-width: 440px) 100vw, (max-width: 1000px) 45vw, 300px'): string {
    $out = '';
    foreach (array_values(array_filter($list)) as $i => $s) {
        $t = ($i % 3) + 1;
        $hasPhoto = $s['image'] !== '';
        $out .= '<article class="service-card-with-image card-tint-' . $t . ($hasPhoto ? '' : ' service-card--nophoto') . ' reveal-up reveal-delay-' . $t . '">'
            . '<div class="service-card__image">' . ($hasPhoto ? picture($s['image'], $s['alt'], $sizes) : facetPanel($s['icon'])) . '</div>'
            . '<div class="service-card__body"><div class="service-card__icon">' . icon($s['icon'], 22) . '</div>'
            . '<h3>' . e($s['name']) . '</h3><p class="service-card__desc">' . e($s['short']) . '</p><ul>';
        foreach ($s['bullets'] as $b) $out .= '<li>' . e($b) . '</li>';
        $out .= '</ul><a href="/services/' . $s['slug'] . '/" class="service-card__cta">' . e($s['name']) . ' details</a></div></article>';
    }
    return $out;
}

/** Services in one nav/menu group, in config order. */
function servicesInGroup(string $group): array {
    global $services;
    return array_values(array_filter($services, fn($s) => $s['group'] === $group));
}

/** Three related services: explicit slugs, photo-backed first so the grid never shows three blanks. */
function relatedServices(array $slugs): array {
    return array_values(array_filter(array_map('serviceBySlug', $slugs)));
}

/** Stars row (visual only) for the rating badge. */
function stars(int $n = 5): string {
    $o = '<span class="rating-stars" aria-hidden="true">';
    for ($i = 0; $i < $n; $i++) $o .= icon('star', 16);
    return $o . '</span>';
}

/* ── Blog helpers (read the $blogPosts registry — never hardcode post lists) ── */

function postBySlug(string $slug): ?array {
    global $blogPosts;
    foreach ($blogPosts as $p) if ($p['slug'] === $slug) return $p;
    return null;
}

/** Link to a post only when its page exists on disk (link-integrity rule). */
function postHref(array $p): string {
    $path = '/blog/' . $p['slug'] . '/';
    return is_dir($_SERVER['DOCUMENT_ROOT'] . $path) ? $path : '/blog/';
}

/** Up to $n other posts: same category first, then the rest in registry order. */
function relatedPosts(string $slug, int $n = 3): array {
    global $blogPosts;
    $self = postBySlug($slug);
    $same = []; $rest = [];
    foreach ($blogPosts as $p) {
        if ($p['slug'] === $slug) continue;
        if ($self && $p['category'] === $self['category']) $same[] = $p; else $rest[] = $p;
    }
    return array_slice(array_merge($same, $rest), 0, $n);
}

/** Editorial blog card (index + related articles). */
function blogCard(array $p, int $i = 0): string {
    $t = ($i % 3) + 1;
    return '<a class="blog-card reveal-up reveal-delay-' . $t . '" href="' . postHref($p) . '">'
        . '<div class="blog-card__image">' . picture($p['image'], $p['alt'], '(max-width: 600px) 100vw, (max-width: 900px) 50vw, 380px') . '</div>'
        . '<div class="blog-card__body"><span class="blog-card__category">' . e($p['category']) . '</span>'
        . '<h3 class="blog-card__title">' . e($p['title']) . '</h3><p class="blog-card__excerpt">' . e($p['excerpt']) . '</p>'
        . '<span class="blog-card__meta">' . e($p['date']) . ' · ' . e($p['readtime']) . '</span>'
        . '<span class="blog-card__cta">Read article →</span></div></a>';
}

/** BlogPosting node for a registry post (author/publisher = the organization). */
function blogPostingNode(array $p, array $keywords): array {
    global $siteUrl;
    $url = $siteUrl . '/blog/' . $p['slug'] . '/';
    return ['@type' => 'BlogPosting', '@id' => $url . '#article', 'headline' => $p['title'], 'description' => $p['excerpt'],
        'image' => $siteUrl . '/assets/images/' . $p['image'] . '.jpg', 'datePublished' => $p['dateISO'], 'dateModified' => $p['dateISO'],
        'author' => ['@id' => $siteUrl . '/#organization'], 'publisher' => ['@id' => $siteUrl . '/#organization'],
        'mainEntityOfPage' => $url, 'keywords' => implode(', ', $keywords), 'articleSection' => $p['category'], 'inLanguage' => 'en-US'];
}
