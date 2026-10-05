<?php
/**
 * includes/head.php — <head> for every page.
 * Pages set before including: $pageTitle, $pageDescription, $canonicalUrl (required),
 * optional $noindex, $ogImage, $heroPreload, $pageCss (list of includes/css/*.css type
 * sheets), $pageStyle (page-specific CSS string), $schemaNodes (extra @graph nodes).
 */
$canonical  = isset($canonicalUrl) ? $canonicalUrl : $siteUrl . (strtok($_SERVER['REQUEST_URI'] ?? '/', '?') ?: '/');
$ogImageUrl = $siteUrl . '/assets/images/' . ($ogImage ?? 'rah-social-v2.jpg');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo e($pageTitle); ?></title>
<meta name="description" content="<?php echo e($pageDescription); ?>">
<link rel="canonical" href="<?php echo e($canonical); ?>">
<?php if (!empty($noindex)): ?>
<meta name="robots" content="noindex, nofollow">
<?php else: ?>
<meta name="robots" content="index, follow, max-image-preview:large">
<?php endif; ?>
<?php if (!empty($gscVerification)): ?>
<meta name="google-site-verification" content="<?php echo e($gscVerification); ?>">
<?php endif; ?>
<meta name="theme-color" content="#0C171C">
<meta property="og:type" content="<?php echo e($ogType ?? 'website'); ?>">
<meta property="og:title" content="<?php echo e($pageTitle); ?>">
<meta property="og:description" content="<?php echo e($pageDescription); ?>">
<meta property="og:url" content="<?php echo e($canonical); ?>">
<meta property="og:image" content="<?php echo e($ogImageUrl); ?>">
<meta property="og:site_name" content="<?php echo e($siteName); ?>">
<meta property="og:locale" content="en_US">
<link rel="icon" type="image/svg+xml" href="/assets/images/favicon-v2.svg">
<link rel="icon" type="image/png" sizes="48x48" href="/assets/images/favicon-v2.png">
<link rel="apple-touch-icon" href="/assets/images/apple-touch-icon-v2.png">
<link rel="manifest" href="/site.webmanifest">
<!-- Self-hosted fonts (no font CDN) — preload only the heading face -->
<link rel="preload" href="/assets/fonts/plus-jakarta-sans.woff2" as="font" type="font/woff2" crossorigin>
<?php if (!empty($heroPreload['srcset'])): ?>
<link rel="preload" as="image" type="image/avif" imagesrcset="<?php echo e($heroPreload['srcset']); ?>" imagesizes="<?php echo e($heroPreload['sizes']); ?>" fetchpriority="high">
<?php endif; ?>
<!-- Critical CSS inline (above-the-fold subset of framework.css) + framework.css non-blocking -->
<style><?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/critical.css'; ?></style>
<link rel="preload" href="/assets/css/framework.css?v=<?php echo $cssVersion; ?>" as="style" onload="this.onload=null;this.rel='stylesheet'">
<noscript><link rel="stylesheet" href="/assets/css/framework.css?v=<?php echo $cssVersion; ?>"></noscript>
<style id="page-css">
<?php foreach (array_merge(['site'], $pageCss ?? []) as $__css) { include $_SERVER['DOCUMENT_ROOT'] . '/includes/css/' . $__css . '.css'; echo "\n"; } ?>
<?php echo $pageStyle ?? ''; ?>
</style>
<script type="application/ld+json"><?php echo schemaJson($schemaNodes ?? [webPageNode()]); ?></script>
<?php if (!empty($googleAnalyticsId) && preg_match('/^G-[A-Z0-9]{6,}$/', $googleAnalyticsId) && strpos($googleAnalyticsId, 'XXXX') === false): ?>
<!-- Google Analytics 4 (ga4-fleet) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo e($googleAnalyticsId); ?>"></script>
<script>window.dataLayer=window.dataLayer||[];function gtag(){dataLayer.push(arguments);}gtag('js',new Date());gtag('config','<?php echo e($googleAnalyticsId); ?>');</script>
<?php endif; ?>
<?php require_once __DIR__ . '/edit-mode.php'; ?>
</head>
<body<?php echo !empty($bodyClass) ? ' class="' . e($bodyClass) . '"' : ''; ?>>
