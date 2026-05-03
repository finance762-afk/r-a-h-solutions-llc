<?php
// ============================================================
// R.A.H. Solutions, LLC — Helper Functions
// Phase 2: nav_footer_head
// ============================================================

/**
 * Check if a given page slug matches the current page context.
 *
 * @param  string $page  The slug to compare against $currentPage
 * @return bool
 */
function isActivePage(string $page): bool {
    global $currentPage;
    return isset($currentPage) && $currentPage === $page;
}

/**
 * Format a raw phone number string for display.
 * Accepts 10-digit strings like "6085015123" and returns "(608) 501-5123".
 *
 * @param  string $phone  Raw digits (10 chars) or already-formatted string
 * @return string
 */
function formatPhone(string $phone): string {
    $digits = preg_replace('/\D/', '', $phone);
    if (strlen($digits) === 10) {
        return '(' . substr($digits, 0, 3) . ') ' . substr($digits, 3, 3) . '-' . substr($digits, 6);
    }
    if (strlen($digits) === 11 && $digits[0] === '1') {
        return '(' . substr($digits, 1, 3) . ') ' . substr($digits, 4, 3) . '-' . substr($digits, 7);
    }
    return $phone; // return as-is if pattern unrecognized
}

/**
 * Convert a service name to a URL slug.
 * e.g. "Lawn Maintenance" → "lawn-maintenance"
 *
 * @param  string $name
 * @return string
 */
function getServiceSlug(string $name): string {
    $slug = strtolower(trim($name));
    $slug = preg_replace('/[^a-z0-9\s-]/', '', $slug);
    $slug = preg_replace('/[\s]+/', '-', $slug);
    $slug = trim($slug, '-');
    return $slug;
}

/**
 * Convert a city name to a URL slug.
 * e.g. "Edgerton" → "edgerton", "New Berlin" → "new-berlin"
 *
 * @param  string $city
 * @return string
 */
function getAreaSlug(string $city): string {
    $slug = strtolower(trim($city));
    $slug = preg_replace('/[^a-z0-9\s-]/', '', $slug);
    $slug = preg_replace('/[\s]+/', '-', $slug);
    $slug = trim($slug, '-');
    return $slug;
}

/**
 * Generate a Service schema JSON-LD object for a single service.
 *
 * @param  array  $service  Service array with 'name', 'slug', 'description', 'keywords'
 * @param  string $baseUrl  Canonical base URL (e.g. "https://rahsolutionsllc.com")
 * @return array            Schema.org Service object (not encoded)
 */
function generateServiceSchema(array $service, string $baseUrl = 'https://rahsolutionsllc.com'): array {
    return [
        '@type'       => 'Service',
        'name'        => $service['name'],
        'description' => $service['description'],
        'url'         => $baseUrl . '/services/' . $service['slug'],
        'provider'    => [
            '@type' => 'LocalBusiness',
            'name'  => 'R.A.H. Solutions, LLC',
            'url'   => $baseUrl,
        ],
        'areaServed' => [
            '@type'       => 'City',
            'name'        => 'Edgerton',
            'addressRegion' => 'WI',
        ],
    ];
}

/**
 * Generate a FAQPage schema JSON-LD string from an array of Q&A pairs.
 *
 * @param  array  $faqs  Array of ['q' => '...', 'a' => '...'] pairs
 * @return string        JSON-encoded FAQPage schema ready for <script type="application/ld+json">
 */
function generateFAQSchema(array $faqs): string {
    $items = [];
    foreach ($faqs as $faq) {
        $items[] = [
            '@type'          => 'Question',
            'name'           => $faq['q'],
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text'  => $faq['a'],
            ],
        ];
    }
    $schema = [
        '@context'   => 'https://schema.org',
        '@type'      => 'FAQPage',
        'mainEntity' => $items,
    ];
    return json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
}

/**
 * Generate standard meta tag HTML for a page.
 * Outputs title, description, and canonical. Does NOT produce robots meta (handled in head.php).
 *
 * @param  string $title       The full <title> string
 * @param  string $description Meta description (target 150-160 chars)
 * @param  string $canonical   The page's canonical URL
 * @return string              HTML string ready for output inside <head>
 */
function generateMetaTags(string $title, string $description, string $canonical): string {
    $t = htmlspecialchars($title,       ENT_QUOTES, 'UTF-8');
    $d = htmlspecialchars($description, ENT_QUOTES, 'UTF-8');
    $c = htmlspecialchars($canonical,   ENT_QUOTES, 'UTF-8');

    return <<<HTML
    <title>{$t}</title>
    <meta name="description" content="{$d}">
    <link rel="canonical" href="{$c}">
HTML;
}

/**
 * Build the full HowTo schema for a service page process section.
 *
 * @param  string $name   Service name
 * @param  array  $steps  Array of ['name' => '...', 'text' => '...'] step objects
 * @return string         JSON-encoded HowTo schema
 */
function generateHowToSchema(string $name, array $steps): string {
    $schemaSteps = [];
    foreach ($steps as $i => $step) {
        $schemaSteps[] = [
            '@type'    => 'HowToStep',
            'position' => $i + 1,
            'name'     => $step['name'],
            'text'     => $step['text'],
        ];
    }
    $schema = [
        '@context' => 'https://schema.org',
        '@type'    => 'HowTo',
        'name'     => 'How ' . $name . ' Works',
        'step'     => $schemaSteps,
    ];
    return json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
}

/**
 * Build a BreadcrumbList schema from an array of crumbs.
 *
 * @param  array  $crumbs  Array of ['name' => '...', 'url' => '...'] items
 * @return string          JSON-encoded BreadcrumbList schema
 */
function generateBreadcrumbSchema(array $crumbs): string {
    $items = [];
    foreach ($crumbs as $i => $crumb) {
        $items[] = [
            '@type'    => 'ListItem',
            'position' => $i + 1,
            'name'     => $crumb['name'],
            'item'     => $crumb['url'],
        ];
    }
    $schema = [
        '@context'        => 'https://schema.org',
        '@type'           => 'BreadcrumbList',
        'itemListElement' => $items,
    ];
    return json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
}
