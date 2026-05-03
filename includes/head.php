<?php
require_once __DIR__ . '/site-config.php';
// ============================================================
// R.A.H. Solutions, LLC — head.php
// Outputs: <!DOCTYPE html> through </head>
//
// Required page vars (set before including this file):
//   $pageTitle       — string  — page-specific title (excludes site name)
//   $pageDescription — string  — meta description (150-160 chars)
//   $canonicalUrl    — string  — full canonical URL for this page
//   $ogImage         — string  — absolute URL to OG image (defaults to logo)
//   $currentPage     — string  — nav active-state slug (e.g. "home", "services")
//
// Optional page vars:
//   $schemaMarkup    — string  — additional JSON-LD for this page (page-specific schema)
//   $noindex         — bool    — true to noindex (e.g. thank-you page)
//   $useSwiper       — bool    — true to preload Swiper CSS in <head>
//   $heroPreload     — string  — URL of hero image to preload (for LCP)
// ============================================================

include_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

// ── Build <title> ──────────────────────────────────────────────
if (!empty($pageTitle)) {
    $metaTitle = $pageTitle . ' | ' . $siteName;
} else {
    $metaTitle = $defaultTitle;
}

// ── Build meta description ────────────────────────────────────
$metaDescription = !empty($pageDescription) ? $pageDescription : $defaultDescription;

// ── Build canonical ───────────────────────────────────────────
$metaCanonical = !empty($canonicalUrl) ? $canonicalUrl : $canonicalBase;

// ── Build OG image ────────────────────────────────────────────
$metaOgImage = !empty($ogImage) ? $ogImage : $logoUrl;

// ── Robots directive ─────────────────────────────────────────
$metaRobots = (!empty($noindex) && $noindex) ? 'noindex,nofollow' : 'index,follow';

// ── Build LocalBusiness JSON-LD ───────────────────────────────
$servicesOffered = [];
foreach ($services as $svc) {
    $servicesOffered[] = [
        '@type'       => 'Offer',
        'itemOffered' => [
            '@type' => 'Service',
            'name'  => $svc['name'],
        ],
    ];
}

$localBusinessSchema = [
    '@context'    => 'https://schema.org',
    '@type'       => 'LocalBusiness',
    '@id'         => $canonicalBase . '/#business',
    'name'        => $companyName,
    'legalName'   => $companyName,
    'url'         => $canonicalBase,
    'telephone'   => $phoneFormatted,
    'email'       => $email,
    'description' => $description,
    'image'       => $logoUrl,
    'logo'        => [
        '@type' => 'ImageObject',
        'url'   => $logoUrl,
    ],
    'address'     => [
        '@type'           => 'PostalAddress',
        'streetAddress'   => $address['street'],
        'addressLocality' => $address['city'],
        'addressRegion'   => $address['state'],
        'postalCode'      => $address['zip'],
        'addressCountry'  => 'US',
    ],
    'geo' => [
        '@type'     => 'GeoCoordinates',
        'latitude'  => 42.836,
        'longitude' => -89.078,
    ],
    'openingHours' => [
        'Mo-Fr 07:00-17:00',
        'Sa 07:00-12:00',
    ],
    'openingHoursSpecification' => [
        [
            '@type'     => 'OpeningHoursSpecification',
            'dayOfWeek' => ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'],
            'opens'     => '07:00',
            'closes'    => '17:00',
        ],
        [
            '@type'     => 'OpeningHoursSpecification',
            'dayOfWeek' => ['Saturday'],
            'opens'     => '07:00',
            'closes'    => '12:00',
        ],
    ],
    'areaServed' => [
        ['@type' => 'City', 'name' => 'Edgerton',  'containedInPlace' => ['@type' => 'State', 'name' => 'Wisconsin']],
        ['@type' => 'City', 'name' => 'Stoughton', 'containedInPlace' => ['@type' => 'State', 'name' => 'Wisconsin']],
        ['@type' => 'City', 'name' => 'Janesville', 'containedInPlace' => ['@type' => 'State', 'name' => 'Wisconsin']],
        ['@type' => 'City', 'name' => 'Madison',   'containedInPlace' => ['@type' => 'State', 'name' => 'Wisconsin']],
    ],
    'hasOfferCatalog' => [
        '@type'          => 'OfferCatalog',
        'name'           => 'Landscaping Services',
        'itemListElement' => $servicesOffered,
    ],
    'sameAs' => array_values(array_filter([
        $socialLinks['facebook'],
        $socialLinks['instagram'],
        $socialLinks['google'],
    ])),
];

$localBusinessJson = json_encode($localBusinessSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!-- Robots -->
  <meta name="robots" content="<?php echo $metaRobots; ?>">

  <!-- Primary SEO -->
  <title><?php echo htmlspecialchars($metaTitle, ENT_QUOTES, 'UTF-8'); ?></title>
  <meta name="description" content="<?php echo htmlspecialchars($metaDescription, ENT_QUOTES, 'UTF-8'); ?>">
  <link rel="canonical" href="<?php echo htmlspecialchars($metaCanonical, ENT_QUOTES, 'UTF-8'); ?>">

  <!-- Open Graph -->
  <meta property="og:type"        content="website">
  <meta property="og:title"       content="<?php echo htmlspecialchars($metaTitle, ENT_QUOTES, 'UTF-8'); ?>">
  <meta property="og:description" content="<?php echo htmlspecialchars($metaDescription, ENT_QUOTES, 'UTF-8'); ?>">
  <meta property="og:url"         content="<?php echo htmlspecialchars($metaCanonical, ENT_QUOTES, 'UTF-8'); ?>">
  <meta property="og:image"       content="<?php echo htmlspecialchars($metaOgImage, ENT_QUOTES, 'UTF-8'); ?>">
  <meta property="og:site_name"   content="<?php echo htmlspecialchars($companyName, ENT_QUOTES, 'UTF-8'); ?>">
  <meta property="og:locale"      content="en_US">

  <!-- Preconnect / DNS prefetch -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="dns-prefetch" href="https://fonts.googleapis.com">
  <link rel="dns-prefetch" href="https://db.pageone.cloud">

  <!-- Google Fonts: Oswald (headings) + Lato (body) — font-display: swap -->
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Lato:ital,wght@0,300;0,400;0,700;1,400&display=swap" rel="stylesheet">

<?php if (!empty($heroPreload)): ?>
  <!-- LCP hero image preload -->
  <link rel="preload" as="image" href="<?php echo htmlspecialchars($heroPreload, ENT_QUOTES, 'UTF-8'); ?>">
<?php endif; ?>

<?php if (!empty($useSwiper)): ?>
  <!-- Swiper CSS (preloaded when carousel exists on page) -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
<?php endif; ?>

  <!-- Shared stylesheet -->
  <link rel="stylesheet" href="/assets/css/framework.css">

  <!-- Favicons -->
  <link rel="icon" type="image/svg+xml" href="/assets/images/favicon.svg">
  <link rel="icon" type="image/png"     href="/assets/images/favicon.png">
  <link rel="apple-touch-icon"          href="/assets/images/apple-touch-icon.png">

  <!-- Google Analytics (activate by adding GA4 Measurement ID to config.php) -->
  <?php if (!empty($googleAnalyticsId)): ?>
  <script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo htmlspecialchars($googleAnalyticsId, ENT_QUOTES, 'UTF-8'); ?>"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', '<?php echo htmlspecialchars($googleAnalyticsId, ENT_QUOTES, 'UTF-8'); ?>');
  </script>
  <?php endif; ?>

  <!-- LocalBusiness Schema -->
  <script type="application/ld+json">
<?php echo $localBusinessJson; ?>
  </script>

<?php if (!empty($metaOgImage)): ?>
  <!-- ImageObject Schema (primary page image) -->
  <script type="application/ld+json">
<?php echo json_encode([
    '@context'   => 'https://schema.org',
    '@type'      => 'ImageObject',
    'url'        => $metaOgImage,
    'contentUrl' => $metaOgImage,
    'name'       => $metaTitle,
    'description'=> $metaDescription,
    'isPartOf'   => ['@type' => 'WebPage', 'url' => $metaCanonical],
], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT); ?>
  </script>
<?php endif; ?>

<?php if (!empty($schemaMarkup)): ?>
  <!-- Page-specific Schema -->
  <script type="application/ld+json">
<?php echo $schemaMarkup; ?>
  </script>
<?php endif; ?>

</head>
