<?php
// ============================================================
// R.A.H. Solutions, LLC — services/tree-pruning.php
// Service: Tree Pruning  |  Standard Tier
// ============================================================

$pageTitle       = 'Tree Pruning & Trimming in Edgerton, WI';
$pageDescription = 'Tree pruning in Edgerton, WI — crown thinning, deadwood removal & storm limb cleanup. Timed to Wisconsin seasons. Free estimates. Call (608) 501-5123.';
$canonicalUrl    = 'https://rahsolutionsllc.com/services/tree-pruning';
// SEO: {"@context":"https://schema.org"} — schema and <link rel="canonical"> rendered via head.php
$ogImage         = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963883232-jst9wv-475547624_122211163226208320_5983283941194375535_n.jpg';
$currentPage     = 'service-tree-pruning';
$heroPreload     = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963883232-jst9wv-475547624_122211163226208320_5983283941194375535_n.jpg';

$pageFaqs = [
  [
    'q' => 'When is the best time to prune trees in Wisconsin?',
    'a' => 'Late winter to early spring — February through early April — is the optimal pruning window for most Wisconsin trees. Pruning before bud break minimizes stress on the tree, reduces exposure to disease and insects that are active in warmer months, and allows wounds to begin sealing quickly once spring growth starts. Oaks should specifically be pruned outside of April through July to reduce oak wilt risk.',
  ],
  [
    'q' => "What's the difference between tree pruning and topping?",
    'a' => "Pruning removes specific branches to improve structure, safety, or clearance while preserving the tree's natural form. Topping is a harmful practice that removes the main crown by cutting branches back to stubs, leaving large wounds the tree cannot properly seal. Topped trees become structurally weak, are highly prone to decay, and typically die within 10 years. R.A.H. Solutions never tops trees.",
  ],
  [
    'q' => 'Can you remove storm-damaged limbs in Edgerton?',
    'a' => 'Yes. Storm limb removal is something we handle quickly after major wind or ice events. Damaged limbs hanging over structures, power lines, or high-traffic areas are a genuine safety hazard. We assess the damage, remove hazard limbs safely, and make proper pruning cuts that allow the remaining tree to recover.',
  ],
  [
    'q' => 'How often should trees be pruned?',
    'a' => 'Most established ornamental and shade trees benefit from a pruning cycle every 3–5 years. Younger trees may need annual or biennial structural pruning during their first 10 years to develop a strong branch architecture. Fruit trees typically require annual pruning. Trees near structures, utilities, or frequently used outdoor areas may need more frequent clearance pruning.',
  ],
];

$faqItems = [];
foreach ($pageFaqs as $faq) {
  $faqItems[] = [
    '@type'          => 'Question',
    'name'           => $faq['q'],
    'acceptedAnswer' => ['@type' => 'Answer', 'text' => $faq['a']],
  ];
}

$schemaMarkup = json_encode([
  '@context' => 'https://schema.org',
  '@graph'   => [
    [
      '@type'           => 'BreadcrumbList',
      'itemListElement' => [
        ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home',     'item' => 'https://rahsolutionsllc.com'],
        ['@type' => 'ListItem', 'position' => 2, 'name' => 'Services', 'item' => 'https://rahsolutionsllc.com/services'],
        ['@type' => 'ListItem', 'position' => 3, 'name' => 'Tree Pruning', 'item' => 'https://rahsolutionsllc.com/services/tree-pruning'],
      ],
    ],
    [
      '@type'       => 'Service',
      '@id'         => 'https://rahsolutionsllc.com/services/tree-pruning/#service',
      'name'        => 'Tree Pruning',
      'description' => 'Professional tree pruning, crown thinning, deadwood removal, structural pruning, and storm damage limb removal in Edgerton, WI and Southern Wisconsin.',
      'provider'    => ['@type' => 'LocalBusiness', '@id' => 'https://rahsolutionsllc.com/#business'],
      'areaServed'  => [
        ['@type' => 'City', 'name' => 'Edgerton'],
        ['@type' => 'City', 'name' => 'Stoughton'],
        ['@type' => 'City', 'name' => 'Janesville'],
        ['@type' => 'City', 'name' => 'Madison'],
      ],
      'serviceType' => 'Tree Pruning',
    ],
    [
      '@type'      => 'FAQPage',
      'mainEntity' => $faqItems,
    ],
    [
      '@type'           => 'LocalBusiness',
      '@id'             => 'https://rahsolutionsllc.com/#aggregate',
      'name'            => 'R.A.H. Solutions, LLC',
      'aggregateRating' => [
        '@type'       => 'AggregateRating',
        'ratingValue' => '4.9',
        'reviewCount' => '47',
        'bestRating'  => '5',
        'worstRating' => '1',
      ],
    ],
  ],
], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
?>

<style>
/* ============================================================
   Tree Pruning — Page-Specific Styles
   Standard Tier: 200+ lines, all var() tokens
   Signature: full-bleed forest bg with overlay service cards
   ============================================================ */

/* ── Breadcrumb ─────────────────────────────────────────────── */
.breadcrumb-nav {
  background: var(--color-bg-alt);
  padding: var(--space-sm) 0;
  border-bottom: 1px solid var(--color-light);
  position: relative;
  z-index: 10;
}
.breadcrumb-nav .container {
  display: flex;
  align-items: center;
  gap: var(--space-xs);
  flex-wrap: wrap;
}
.breadcrumb-nav a {
  color: var(--color-accent);
  font-size: var(--font-size-sm);
  font-family: var(--font-body);
  transition: color var(--transition-fast);
}
.breadcrumb-nav a:hover { color: var(--color-primary); }
.breadcrumb-nav span { color: var(--color-text-light); font-size: var(--font-size-sm); }
.breadcrumb-nav .current { color: var(--color-text); font-weight: 600; }

/* ── Hero ────────────────────────────────────────────────────── */
.tree-hero {
  min-height: 60vh;
  position: relative;
  display: flex;
  align-items: center;
  background-image: url('https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963883232-jst9wv-475547624_122211163226208320_5983283941194375535_n.jpg');
  background-size: cover;
  background-position: center 30%;
  overflow: hidden;
}
.tree-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(
    160deg,
    rgba(15, 30, 45, 0.92) 0%,
    rgba(26, 43, 60, 0.70) 50%,
    rgba(6, 182, 212, 0.18) 100%
  );
  z-index: 1;
}
.tree-hero::after {
  content: '';
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noise)' opacity='0.04'/%3E%3C/svg%3E");
  z-index: 2;
}
.tree-hero .hero-inner {
  position: relative;
  z-index: 3;
  width: 100%;
  padding: var(--space-4xl) 0;
}
.tree-hero .eyebrow {
  display: inline-flex;
  align-items: center;
  gap: var(--space-sm);
  background: rgba(var(--color-accent-rgb), 0.15);
  border: 1px solid rgba(var(--color-accent-rgb), 0.4);
  color: var(--color-accent);
  font-family: var(--font-body);
  font-size: var(--font-size-sm);
  font-weight: 700;
  letter-spacing: 0.12em;
  text-transform: uppercase;
  padding: var(--space-xs) var(--space-md);
  border-radius: var(--radius-xl);
  margin-bottom: var(--space-lg);
}
.tree-hero h1 {
  font-family: var(--font-heading);
  font-size: clamp(2.4rem, 5.5vw, 4rem);
  font-weight: 800;
  line-height: 1.1;
  letter-spacing: -0.02em;
  text-wrap: balance;
  color: #fff;
  margin-bottom: var(--space-lg);
  max-width: 700px;
}
.tree-hero h1 em {
  font-style: normal;
  color: var(--color-accent);
}
.tree-hero .hero-sub {
  font-family: var(--font-body);
  font-size: var(--font-size-lg);
  color: rgba(255,255,255,0.82);
  max-width: 54ch;
  line-height: 1.6;
  margin-bottom: var(--space-xl);
}
.tree-hero .hero-ctas {
  display: flex;
  gap: var(--space-md);
  flex-wrap: wrap;
}
.btn-hero-primary {
  display: inline-flex;
  align-items: center;
  gap: var(--space-sm);
  background: var(--color-accent);
  color: var(--color-primary-dark);
  font-family: var(--font-heading);
  font-size: var(--font-size-lg);
  font-weight: 700;
  letter-spacing: 0.04em;
  text-transform: uppercase;
  padding: var(--space-md) var(--space-xl);
  border-radius: var(--radius-md);
  box-shadow: 0 4px 0 var(--color-accent-dark);
  transition: transform var(--transition-fast), box-shadow var(--transition-fast);
  overflow: hidden;
}
.btn-hero-primary:hover {
  transform: translateY(-2px);
  box-shadow: 0 6px 0 var(--color-accent-dark);
  color: var(--color-primary-dark);
}
.btn-hero-secondary {
  display: inline-flex;
  align-items: center;
  gap: var(--space-sm);
  background: rgba(255,255,255,0.08);
  color: #fff;
  font-family: var(--font-heading);
  font-size: var(--font-size-lg);
  font-weight: 700;
  letter-spacing: 0.04em;
  text-transform: uppercase;
  padding: var(--space-md) var(--space-xl);
  border-radius: var(--radius-md);
  border: 2px solid rgba(255,255,255,0.5);
  transition: background var(--transition-fast), border-color var(--transition-fast);
  overflow: hidden;
}
.btn-hero-secondary:hover {
  background: rgba(255,255,255,0.15);
  border-color: #fff;
  color: #fff;
}

/* ── Proof Ticker ─────────────────────────────────────────────── */
.ticker-strip {
  background: var(--color-primary);
  overflow: hidden;
  padding: var(--space-sm) 0;
  border-top: 3px solid var(--color-accent);
}
.ticker-track {
  display: flex;
  width: max-content;
  animation: ticker-scroll 30s linear infinite;
}
.ticker-track:hover { animation-play-state: paused; }
.ticker-item {
  display: flex;
  align-items: center;
  gap: var(--space-lg);
  padding: 0 var(--space-2xl);
  white-space: nowrap;
  color: #fff;
  font-family: var(--font-body);
  font-size: var(--font-size-xs);
  font-weight: 700;
  letter-spacing: 0.12em;
  text-transform: uppercase;
}
.ticker-sep { color: var(--color-accent); font-size: var(--font-size-lg); }
@keyframes ticker-scroll {
  from { transform: translateX(0); }
  to   { transform: translateX(-50%); }
}

/* ── Service Detail Section ──────────────────────────────────── */
.tree-detail {
  padding: var(--space-4xl) 0;
  background: var(--color-bg);
}
.tree-detail .detail-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-3xl);
  align-items: start;
}
.detail-img-wrap {
  position: relative;
}
.detail-img-frame {
  border-radius: var(--radius-lg);
  overflow: hidden;
  box-shadow: var(--shadow-xl);
  position: relative;
}
.detail-img-frame picture img {
  width: 100%;
  object-fit: cover;
  aspect-ratio: 4/5;
  display: block;
}
.detail-img-stat {
  position: absolute;
  bottom: -var(--space-lg);
  right: -var(--space-lg);
  background: var(--color-accent);
  color: var(--color-primary-dark);
  border-radius: var(--radius-md);
  padding: var(--space-md) var(--space-lg);
  text-align: center;
  box-shadow: var(--shadow-lg);
}
.detail-img-stat .stat-num {
  font-family: var(--font-heading);
  font-size: 2rem;
  font-weight: 800;
  line-height: 1;
  display: block;
}
.detail-img-stat .stat-label {
  font-family: var(--font-body);
  font-size: var(--font-size-xs);
  font-weight: 700;
  letter-spacing: 0.08em;
  text-transform: uppercase;
}
.detail-content .section-eyebrow {
  display: inline-block;
  font-family: var(--font-body);
  font-size: var(--font-size-xs);
  font-weight: 700;
  letter-spacing: 0.14em;
  text-transform: uppercase;
  color: var(--color-accent);
  margin-bottom: var(--space-md);
}
.detail-content h2 {
  font-family: var(--font-heading);
  font-size: clamp(1.8rem, 3.5vw, 2.6rem);
  font-weight: 700;
  line-height: 1.15;
  letter-spacing: -0.02em;
  text-wrap: balance;
  color: var(--color-primary);
  margin-bottom: var(--space-lg);
}
.detail-content .detail-price-note {
  display: inline-flex;
  align-items: center;
  gap: var(--space-sm);
  background: var(--color-bg-alt);
  border-left: 4px solid var(--color-accent);
  padding: var(--space-sm) var(--space-md);
  border-radius: 0 var(--radius-md) var(--radius-md) 0;
  margin-bottom: var(--space-xl);
  font-family: var(--font-body);
  font-size: var(--font-size-sm);
  font-weight: 700;
  color: var(--color-primary);
}
.detail-content .prose p {
  font-family: var(--font-body);
  font-size: var(--font-size-base);
  line-height: 1.7;
  color: var(--color-text);
  max-width: 65ch;
  margin-bottom: var(--space-md);
}

/* ── Dividers ────────────────────────────────────────────────── */
.divider-wrap { display: block; overflow: hidden; line-height: 0; }
.divider-wrap svg { display: block; width: 100%; }

/* ── Mid-Page CTA Banner ──────────────────────────────────────── */
.cta-banner-mid {
  position: relative;
  padding: var(--space-3xl) 0;
  background: linear-gradient(135deg, var(--color-primary) 0%, var(--color-primary-dark) 100%);
  overflow: hidden;
}
.cta-banner-mid::before {
  content: '';
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noise)' opacity='0.04'/%3E%3C/svg%3E");
  pointer-events: none;
}
.cta-banner-mid .container {
  position: relative;
  z-index: 1;
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: var(--space-xl);
  flex-wrap: wrap;
}
.cta-banner-mid .cta-text h2 {
  font-family: var(--font-heading);
  font-size: clamp(1.5rem, 3vw, 2.2rem);
  font-weight: 700;
  text-wrap: balance;
  color: #fff;
  margin-bottom: var(--space-sm);
}
.cta-banner-mid .cta-text p {
  font-family: var(--font-body);
  font-size: var(--font-size-base);
  color: rgba(255,255,255,0.8);
  max-width: 50ch;
}
.cta-banner-mid .cta-actions {
  display: flex;
  flex-direction: column;
  align-items: flex-end;
  gap: var(--space-md);
}
.cta-phone-large {
  display: flex;
  align-items: center;
  gap: var(--space-sm);
  color: var(--color-accent);
  font-family: var(--font-heading);
  font-size: clamp(1.4rem, 2.5vw, 1.9rem);
  font-weight: 700;
  transition: color var(--transition-fast);
}
.cta-phone-large:hover { color: #fff; }
.btn-cta-accent {
  display: inline-flex;
  align-items: center;
  gap: var(--space-sm);
  background: var(--color-accent);
  color: var(--color-primary-dark);
  font-family: var(--font-heading);
  font-size: var(--font-size-base);
  font-weight: 700;
  letter-spacing: 0.05em;
  text-transform: uppercase;
  padding: var(--space-md) var(--space-xl);
  border-radius: var(--radius-md);
  box-shadow: 0 4px 0 var(--color-accent-dark);
  transition: transform var(--transition-fast), box-shadow var(--transition-fast);
  overflow: hidden;
}
.btn-cta-accent:hover {
  transform: translateY(-2px);
  box-shadow: 0 6px 0 var(--color-accent-dark);
  color: var(--color-primary-dark);
}

/* ── Why Choose — dark bg cards ─────────────────────────────── */
.why-choose-tree {
  background: var(--color-bg-dark);
  padding: var(--space-4xl) 0;
}
.why-choose-tree .section-header {
  text-align: center;
  margin-bottom: var(--space-3xl);
}
.why-choose-tree .section-header .eyebrow {
  display: inline-block;
  font-family: var(--font-body);
  font-size: var(--font-size-xs);
  font-weight: 700;
  letter-spacing: 0.14em;
  text-transform: uppercase;
  color: var(--color-accent);
  margin-bottom: var(--space-sm);
}
.why-choose-tree .section-header h2 {
  font-family: var(--font-heading);
  font-size: clamp(1.8rem, 3.5vw, 2.6rem);
  font-weight: 700;
  line-height: 1.15;
  letter-spacing: -0.02em;
  text-wrap: balance;
  color: #fff;
}
.benefit-cards-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: var(--space-lg);
}
.benefit-card {
  background: rgba(255,255,255,0.04);
  border: 1px solid rgba(255,255,255,0.08);
  border-radius: var(--radius-lg);
  padding: var(--space-xl);
  text-align: center;
  transition: background var(--transition-base), transform var(--transition-base), box-shadow var(--transition-base);
}
.benefit-card:hover {
  background: rgba(var(--color-accent-rgb), 0.1);
  transform: translateY(-4px);
  box-shadow: var(--shadow-lg);
}
.benefit-icon {
  width: 56px;
  height: 56px;
  background: rgba(var(--color-accent-rgb), 0.15);
  border-radius: var(--radius-md);
  display: flex;
  align-items: center;
  justify-content: center;
  margin: 0 auto var(--space-md);
  color: var(--color-accent);
}
.benefit-card h3 {
  font-family: var(--font-heading);
  font-size: var(--font-size-lg);
  font-weight: 700;
  text-wrap: balance;
  color: #fff;
  margin-bottom: var(--space-sm);
}
.benefit-card p {
  font-family: var(--font-body);
  font-size: var(--font-size-sm);
  line-height: 1.6;
  color: rgba(255,255,255,0.7);
}

/* ── SIGNATURE: Full-Bleed Forest Photo with Overlay Cards ────── */
.tree-signature {
  position: relative;
  min-height: 520px;
  display: flex;
  align-items: center;
  background-image: url('https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963907325-0lw8ac-470717235_122202491672208320_1286182138053082297_n.jpg');
  background-size: cover;
  background-position: center;
  background-attachment: fixed;
  overflow: hidden;
}
.tree-signature::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(
    to right,
    rgba(15, 30, 45, 0.95) 0%,
    rgba(15, 30, 45, 0.80) 50%,
    rgba(15, 30, 45, 0.50) 100%
  );
  z-index: 1;
}
.tree-sig-inner {
  position: relative;
  z-index: 2;
  width: 100%;
  padding: var(--space-4xl) 0;
}
.tree-sig-header {
  max-width: 520px;
  margin-bottom: var(--space-3xl);
}
.tree-sig-header .eyebrow {
  display: inline-block;
  font-family: var(--font-body);
  font-size: var(--font-size-xs);
  font-weight: 700;
  letter-spacing: 0.14em;
  text-transform: uppercase;
  color: var(--color-accent);
  margin-bottom: var(--space-sm);
}
.tree-sig-header h2 {
  font-family: var(--font-heading);
  font-size: clamp(1.8rem, 3.5vw, 2.8rem);
  font-weight: 700;
  line-height: 1.15;
  letter-spacing: -0.02em;
  text-wrap: balance;
  color: #fff;
}
.tree-service-overlay-cards {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: var(--space-lg);
}
.tree-overlay-card {
  background: rgba(255,255,255,0.07);
  backdrop-filter: blur(12px);
  -webkit-backdrop-filter: blur(12px);
  border: 1px solid rgba(255,255,255,0.14);
  border-radius: var(--radius-lg);
  padding: var(--space-xl);
  transition: background var(--transition-base), transform var(--transition-base);
}
.tree-overlay-card:hover {
  background: rgba(var(--color-accent-rgb), 0.12);
  transform: translateY(-4px);
}
.overlay-card-icon {
  color: var(--color-accent);
  margin-bottom: var(--space-md);
}
.tree-overlay-card h3 {
  font-family: var(--font-heading);
  font-size: var(--font-size-xl);
  font-weight: 700;
  text-wrap: balance;
  color: #fff;
  margin-bottom: var(--space-sm);
}
.tree-overlay-card p {
  font-family: var(--font-body);
  font-size: var(--font-size-sm);
  line-height: 1.6;
  color: rgba(255,255,255,0.75);
}

/* ── Process Steps ───────────────────────────────────────────── */
.tree-process {
  padding: var(--space-4xl) 0;
  background: var(--color-bg-alt);
}
.tree-process .section-header {
  text-align: center;
  margin-bottom: var(--space-3xl);
}
.tree-process .section-header .eyebrow {
  display: inline-block;
  font-family: var(--font-body);
  font-size: var(--font-size-xs);
  font-weight: 700;
  letter-spacing: 0.14em;
  text-transform: uppercase;
  color: var(--color-accent);
  margin-bottom: var(--space-sm);
}
.tree-process .section-header h2 {
  font-family: var(--font-heading);
  font-size: clamp(1.8rem, 3.5vw, 2.6rem);
  font-weight: 700;
  line-height: 1.15;
  letter-spacing: -0.02em;
  text-wrap: balance;
  color: var(--color-primary);
}
.process-steps {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: var(--space-lg);
  position: relative;
}
.process-steps::before {
  content: '';
  position: absolute;
  top: 36px;
  left: 12.5%;
  right: 12.5%;
  height: 2px;
  background: linear-gradient(90deg, var(--color-accent), rgba(var(--color-accent-rgb), 0.2));
}
.process-step {
  text-align: center;
  position: relative;
  z-index: 1;
}
.step-number {
  width: 72px;
  height: 72px;
  background: var(--color-accent);
  color: var(--color-primary-dark);
  font-family: var(--font-heading);
  font-size: 1.5rem;
  font-weight: 800;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  margin: 0 auto var(--space-lg);
  box-shadow: 0 0 0 4px var(--color-bg-alt), 0 0 0 6px rgba(var(--color-accent-rgb), 0.3);
  transition: transform var(--transition-base);
}
.process-step:hover .step-number { transform: scale(1.1); }
.process-step h3 {
  font-family: var(--font-heading);
  font-size: var(--font-size-xl);
  font-weight: 700;
  text-wrap: balance;
  color: var(--color-primary);
  margin-bottom: var(--space-sm);
}
.process-step p {
  font-family: var(--font-body);
  font-size: var(--font-size-sm);
  line-height: 1.6;
  color: var(--color-text-light);
  max-width: 22ch;
  margin: 0 auto;
}

/* ── FAQ ─────────────────────────────────────────────────────── */
.tree-faq {
  padding: var(--space-4xl) 0;
  background: var(--color-bg);
}
.tree-faq .section-header {
  text-align: center;
  margin-bottom: var(--space-3xl);
}
.tree-faq .section-header .eyebrow {
  display: inline-block;
  font-family: var(--font-body);
  font-size: var(--font-size-xs);
  font-weight: 700;
  letter-spacing: 0.14em;
  text-transform: uppercase;
  color: var(--color-accent);
  margin-bottom: var(--space-sm);
}
.tree-faq .section-header h2 {
  font-family: var(--font-heading);
  font-size: clamp(1.8rem, 3.5vw, 2.6rem);
  font-weight: 700;
  line-height: 1.15;
  letter-spacing: -0.02em;
  text-wrap: balance;
  color: var(--color-primary);
}
.faq-list { max-width: 780px; margin: 0 auto; display: flex; flex-direction: column; gap: var(--space-md); }
.faq-item {
  background: var(--color-bg-alt);
  border-radius: var(--radius-md);
  border: 1px solid var(--color-light);
  overflow: hidden;
}
.faq-item summary {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: var(--space-lg) var(--space-xl);
  cursor: pointer;
  font-family: var(--font-heading);
  font-size: var(--font-size-lg);
  font-weight: 700;
  color: var(--color-primary);
  text-wrap: balance;
  list-style: none;
  transition: color var(--transition-fast);
  gap: var(--space-md);
}
.faq-item summary::-webkit-details-marker { display: none; }
.faq-item summary::after {
  content: '+';
  font-size: 1.4rem;
  color: var(--color-accent);
  flex-shrink: 0;
  transition: transform var(--transition-fast);
  line-height: 1;
}
.faq-item[open] summary::after { transform: rotate(45deg); }
.faq-item[open] summary { color: var(--color-accent); }
.faq-answer {
  padding: 0 var(--space-xl) var(--space-lg);
  font-family: var(--font-body);
  font-size: var(--font-size-base);
  line-height: 1.7;
  color: var(--color-text-light);
  max-width: 65ch;
}

/* ── Closing CTA ──────────────────────────────────────────────── */
.closing-cta {
  padding: var(--space-4xl) 0;
  background: var(--color-bg-alt);
  text-align: center;
}
.closing-cta .eyebrow {
  display: inline-block;
  font-family: var(--font-body);
  font-size: var(--font-size-xs);
  font-weight: 700;
  letter-spacing: 0.14em;
  text-transform: uppercase;
  color: var(--color-accent);
  margin-bottom: var(--space-md);
}
.closing-cta h2 {
  font-family: var(--font-heading);
  font-size: clamp(1.8rem, 3.5vw, 2.6rem);
  font-weight: 700;
  line-height: 1.15;
  letter-spacing: -0.02em;
  text-wrap: balance;
  color: var(--color-primary);
  margin-bottom: var(--space-md);
}
.closing-cta p {
  font-family: var(--font-body);
  font-size: var(--font-size-lg);
  color: var(--color-text-light);
  max-width: 55ch;
  margin: 0 auto var(--space-xl);
  line-height: 1.6;
}
.closing-cta-actions {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: var(--space-lg);
  flex-wrap: wrap;
}
.btn-closing-primary {
  display: inline-flex;
  align-items: center;
  gap: var(--space-sm);
  background: var(--color-primary);
  color: #fff;
  font-family: var(--font-heading);
  font-size: var(--font-size-lg);
  font-weight: 700;
  letter-spacing: 0.04em;
  text-transform: uppercase;
  padding: var(--space-md) var(--space-2xl);
  border-radius: var(--radius-md);
  box-shadow: 0 4px 0 var(--color-primary-dark);
  transition: transform var(--transition-fast), box-shadow var(--transition-fast);
  overflow: hidden;
}
.btn-closing-primary:hover {
  transform: translateY(-2px);
  box-shadow: 0 6px 0 var(--color-primary-dark);
  color: #fff;
}
.closing-phone {
  display: flex;
  align-items: center;
  gap: var(--space-sm);
  color: var(--color-primary);
  font-family: var(--font-heading);
  font-size: var(--font-size-xl);
  font-weight: 700;
}
.closing-phone:hover { color: var(--color-accent); }
.last-updated {
  font-family: var(--font-body);
  font-size: var(--font-size-xs);
  color: var(--color-text-light);
  margin-top: var(--space-xl);
}

/* ── Responsive ───────────────────────────────────────────────── */
@media (max-width: 1023px) {
  .benefit-cards-grid { grid-template-columns: repeat(2, 1fr); }
  .process-steps { grid-template-columns: repeat(2, 1fr); }
  .process-steps::before { display: none; }
  .tree-service-overlay-cards { grid-template-columns: 1fr 1fr; }
  .tree-detail .detail-grid { grid-template-columns: 1fr; }
}
@media (max-width: 767px) {
  .benefit-cards-grid { grid-template-columns: 1fr; }
  .process-steps { grid-template-columns: 1fr; }
  .tree-service-overlay-cards { grid-template-columns: 1fr; }
  .cta-banner-mid .container { flex-direction: column; }
  .cta-banner-mid .cta-actions { align-items: flex-start; }
  .tree-hero .hero-ctas { flex-direction: column; }
  .closing-cta-actions { flex-direction: column; }
  .tree-signature { background-attachment: scroll; }
}
</style>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

<!-- Breadcrumb -->
<nav class="breadcrumb-nav" aria-label="Breadcrumb">
  <div class="container">
    <a href="/">Home</a>
    <span aria-hidden="true">›</span>
    <a href="/services">Services</a>
    <span aria-hidden="true">›</span>
    <span class="current" aria-current="page">Tree Pruning</span>
  </div>
</nav>

<!-- Hero -->
<section class="tree-hero" aria-label="Tree Pruning Services Hero">
  <div class="hero-inner">
    <div class="container">
      <div class="eyebrow">
        <i data-lucide="tree-pine" style="width:14px;height:14px;"></i>
        Edgerton, WI Tree Care
      </div>
      <h1>Tree Pruning &amp; Trimming Services in <em>Edgerton, WI</em></h1>
      <p class="hero-sub">Crown thinning, deadwood removal, structural pruning, storm limb cleanup — all scheduled to Wisconsin's seasonal pruning window for maximum tree health and safety.</p>
      <div class="hero-ctas">
        <a href="/contact" class="btn-hero-primary">
          <i data-lucide="file-text" style="width:18px;height:18px;"></i>
          Get a Free Estimate
        </a>
        <a href="tel:6085015123" class="btn-hero-secondary">
          <i data-lucide="phone" style="width:18px;height:18px;"></i>
          (608) 501-5123
        </a>
      </div>
    </div>
  </div>
</section>

<!-- Proof Ticker -->
<div class="ticker-strip" aria-hidden="true">
  <div class="ticker-track">
    <div class="ticker-item">Licensed &amp; Insured<span class="ticker-sep">✦</span></div>
    <div class="ticker-item">Proper Collar Cuts — No Topping<span class="ticker-sep">✦</span></div>
    <div class="ticker-item">Timed to Wisconsin Season<span class="ticker-sep">✦</span></div>
    <div class="ticker-item">Storm Damage Response<span class="ticker-sep">✦</span></div>
    <div class="ticker-item">All Debris Chipped &amp; Removed<span class="ticker-sep">✦</span></div>
    <div class="ticker-item">Serving Edgerton, Stoughton, Janesville<span class="ticker-sep">✦</span></div>
    <div class="ticker-item">4.9★ Rated — 47 Reviews<span class="ticker-sep">✦</span></div>
    <div class="ticker-item">Free Estimates<span class="ticker-sep">✦</span></div>
    <!-- duplicate -->
    <div class="ticker-item">Licensed &amp; Insured<span class="ticker-sep">✦</span></div>
    <div class="ticker-item">Proper Collar Cuts — No Topping<span class="ticker-sep">✦</span></div>
    <div class="ticker-item">Timed to Wisconsin Season<span class="ticker-sep">✦</span></div>
    <div class="ticker-item">Storm Damage Response<span class="ticker-sep">✦</span></div>
    <div class="ticker-item">All Debris Chipped &amp; Removed<span class="ticker-sep">✦</span></div>
    <div class="ticker-item">Serving Edgerton, Stoughton, Janesville<span class="ticker-sep">✦</span></div>
    <div class="ticker-item">4.9★ Rated — 47 Reviews<span class="ticker-sep">✦</span></div>
    <div class="ticker-item">Free Estimates<span class="ticker-sep">✦</span></div>
  </div>
</div>

<!-- Service Detail -->
<section class="tree-detail" data-animate="fade-up">
  <div class="container">
    <div class="detail-grid">
      <div class="detail-img-wrap" data-animate="wipe-right">
        <div class="detail-img-frame">
          <picture>
            <source srcset="https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963883232-jst9wv-475547624_122211163226208320_5983283941194375535_n.jpg" type="image/webp">
            <img
              src="https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963883232-jst9wv-475547624_122211163226208320_5983283941194375535_n.jpg"
              alt="Tree pruning and trimming services Edgerton Wisconsin R.A.H. Solutions"
              width="800" height="1000" loading="lazy">
          </picture>
        </div>
        <div class="detail-img-stat" style="position:absolute;bottom:var(--space-lg);right:calc(-1 * var(--space-md));z-index:2;">
          <span class="stat-num">3+</span>
          <span class="stat-label">Years Serving<br>Southern WI</span>
        </div>
      </div>
      <div class="detail-content">
        <span class="section-eyebrow">Professional Tree Care</span>
        <h2>How Is <span class="text-accent">Pruning</span> Done Right the First Time?</h2>
        <div class="detail-price-note">
          <i data-lucide="tag" style="width:14px;height:14px;"></i>
          Typical range: $75–$400 per tree depending on size and scope
        </div>
        <div class="prose">
          <p>A properly pruned tree lives longer, resists storm damage better, and doesn't create liability hazards over your driveway, roof, or power lines. R.A.H. Solutions handles crown thinning, deadwood removal, structural pruning for young trees, and clearance pruning near structures — all using proper collar-cut technique that allows wound closure, not the destructive flush cuts or topping practices that compromise tree health.</p>
          <p>In Wisconsin, the optimal pruning window runs from late January through early March for most hardwood species. Pruning before bud break reduces stress and minimizes exposure to fungal spores and wood-boring insects that become active once temperatures rise. Oaks get special scheduling — we avoid the April through July oak wilt season entirely when pruning any oak on your property in Rock or Dane County.</p>
          <p>After a storm rolls through Edgerton or Stoughton, damaged limbs hanging over structures need attention quickly. We assess structural integrity of affected trees, safely remove hazard limbs, and make proper pruning cuts that allow the tree to recover rather than leaving ragged stubs that invite decay. All debris is chipped and removed from your property — we don't leave brush piles at the curb and call it done.</p>
          <div class="answer-block">
            <h3>How much does tree pruning cost in Edgerton, WI?</h3>
            <p>Tree pruning in Edgerton typically costs $75–$400 per tree, depending on tree size, species, accessibility, and the scope of work required. Small ornamental trees on the lower end, mature hardwoods with canopy access challenges on the higher end. R.A.H. Solutions provides free on-site estimates so you know exact pricing before any work begins.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Divider: diagonal down -->
<div class="divider-wrap" aria-hidden="true" style="background:var(--color-bg);line-height:0;">
  <svg viewBox="0 0 1200 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg"><polygon points="0,0 1200,60 1200,60 0,60" fill="#1a2b3c"/></svg>
</div>

<!-- Mid-Page CTA Banner -->
<section class="cta-banner-mid" aria-label="Request tree pruning estimate">
  <div class="container">
    <div class="cta-text">
      <h2>Storm Damage or Overgrown Trees Crowding Your Roof?</h2>
      <p>Call now for a same-week assessment and free estimate in Edgerton, Stoughton, Janesville &amp; Madison. Hazard limbs prioritized.</p>
    </div>
    <div class="cta-actions">
      <a href="tel:6085015123" class="cta-phone-large">
        <i data-lucide="phone-call" style="width:22px;height:22px;"></i>
        (608) 501-5123
      </a>
      <a href="/contact" class="btn-cta-accent">
        <i data-lucide="tree-pine" style="width:18px;height:18px;"></i>
        Request Free Estimate
      </a>
    </div>
  </div>
</section>

<!-- Divider: wave to dark -->
<div class="divider-wrap" aria-hidden="true" style="background:var(--color-primary-dark);line-height:0;">
  <svg viewBox="0 0 1200 80" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg"><path d="M0,40 C300,80 900,0 1200,40 L1200,80 L0,80 Z" fill="#0f1e2d"/></svg>
</div>

<!-- Why Choose — dark bg -->
<section class="why-choose-tree" data-animate="fade-up">
  <div class="container">
    <div class="section-header">
      <div class="eyebrow">Why R.A.H. Solutions</div>
      <h2>How Do We Approach <span class="text-accent">Tree Care</span> in Southern Wisconsin?</h2>
    </div>
    <div class="benefit-cards-grid">
      <div class="benefit-card">
        <div class="benefit-icon"><i data-lucide="calendar" style="width:28px;height:28px;"></i></div>
        <h3>Timed to Wisconsin Seasons</h3>
        <p>We schedule pruning during the late-winter window (Feb–March) to reduce disease exposure and promote rapid wound closure once spring growth begins.</p>
      </div>
      <div class="benefit-card">
        <div class="benefit-icon"><i data-lucide="scissors" style="width:28px;height:28px;"></i></div>
        <h3>Tools Cleaned Between Trees</h3>
        <p>Pruning tools are disinfected between each tree to prevent spreading fungal or bacterial diseases across your property — especially important for elms and oaks.</p>
      </div>
      <div class="benefit-card">
        <div class="benefit-icon"><i data-lucide="trash-2" style="width:28px;height:28px;"></i></div>
        <h3>Complete Debris Removal</h3>
        <p>Every limb, branch, and wood chip removed from your property. No brush piles left behind, no debris pushed into the corner of your yard.</p>
      </div>
      <div class="benefit-card">
        <div class="benefit-icon"><i data-lucide="shield-check" style="width:28px;height:28px;"></i></div>
        <h3>Safety-Rated for Overhead Work</h3>
        <p>Properly equipped and insured for limb removal near structures, over driveways, and in tight spaces where amateur work creates serious property risk.</p>
      </div>
    </div>
  </div>
</section>

<!-- Signature: Full-Bleed Forest Photo with Overlay Cards -->
<section class="tree-signature" aria-label="Tree pruning services breakdown">
  <div class="tree-sig-inner">
    <div class="container">
      <div class="tree-sig-header">
        <div class="eyebrow">What We Prune</div>
        <h2>What Tree Pruning Services Do We Offer in Rock &amp; Dane County?</h2>
      </div>
      <div class="tree-service-overlay-cards">
        <div class="tree-overlay-card">
          <div class="overlay-card-icon"><i data-lucide="git-branch" style="width:32px;height:32px;"></i></div>
          <h3>Crown Thinning</h3>
          <p>Selective removal of interior branches to improve light penetration and airflow — reduces wind resistance and storm damage risk without changing the tree's natural shape.</p>
        </div>
        <div class="tree-overlay-card">
          <div class="overlay-card-icon"><i data-lucide="x-circle" style="width:32px;height:32px;"></i></div>
          <h3>Deadwood Removal</h3>
          <p>Dead, dying, or diseased limbs create drop hazards and entry points for wood-boring insects. We remove them with proper collar cuts that seal cleanly.</p>
        </div>
        <div class="tree-overlay-card">
          <div class="overlay-card-icon"><i data-lucide="home" style="width:32px;height:32px;"></i></div>
          <h3>Clearance Pruning</h3>
          <p>Lifting or reducing branches that overhang rooflines, contact structures, or obstruct sightlines. Precision cuts that protect your property without harming the tree.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Divider: diagonal up from signature bg -->
<div class="divider-wrap" aria-hidden="true" style="background:var(--color-primary-dark);line-height:0;">
  <svg viewBox="0 0 1200 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg"><polygon points="0,60 1200,0 1200,60" fill="#f4f7f9"/></svg>
</div>

<!-- Process Steps -->
<section class="tree-process" data-animate="fade-up">
  <div class="container">
    <div class="section-header">
      <div class="eyebrow">How It Works</div>
      <h2>What Is Our Tree Pruning Process?</h2>
    </div>
    <div class="process-steps">
      <div class="process-step">
        <div class="step-number">1</div>
        <h3>Assessment &amp; Hazard Eval</h3>
        <p>We walk the property, identify hazard limbs, assess tree health, and confirm the right pruning approach.</p>
      </div>
      <div class="process-step">
        <div class="step-number">2</div>
        <h3>Pruning Plan &amp; Crew Dispatch</h3>
        <p>Scope confirmed, crew dispatched with the right equipment for the height and location of the work.</p>
      </div>
      <div class="process-step">
        <div class="step-number">3</div>
        <h3>Crown Work &amp; Deadwood Out</h3>
        <p>All pruning cuts made at the branch collar using clean, disinfected tools. No stubs, no topping.</p>
      </div>
      <div class="process-step">
        <div class="step-number">4</div>
        <h3>Cleanup &amp; Debris Disposal</h3>
        <p>Wood chipped on-site, debris loaded and hauled. Property left cleaner than we found it.</p>
      </div>
    </div>
  </div>
</section>

<!-- Divider: diagonal down -->
<div class="divider-wrap" aria-hidden="true" style="background:var(--color-bg-alt);line-height:0;">
  <svg viewBox="0 0 1200 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg"><polygon points="0,0 1200,60 1200,60 0,60" fill="#ffffff"/></svg>
</div>

<!-- FAQ -->
<section class="tree-faq" data-animate="fade-up">
  <div class="container">
    <div class="section-header">
      <div class="eyebrow">Common Questions</div>
      <h2>What Are Tree Pruning <span class="text-accent">FAQs</span> in Edgerton, WI?</h2>
    </div>
    <div class="faq-list">
      <?php foreach ($pageFaqs as $faq): ?>
      <details class="faq-item">
        <summary><?php echo htmlspecialchars($faq['q']); ?></summary>
        <div class="faq-answer"><?php echo htmlspecialchars($faq['a']); ?></div>
      </details>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Closing CTA -->
<section class="closing-cta" data-animate="fade-up">
  <div class="container">
    <div class="eyebrow">Ready to Schedule?</div>
    <h2>How Do You Get Hazard Limbs Down Before the Next Storm?</h2>
    <p>Free estimates for tree pruning and trimming in Edgerton, Stoughton, Janesville, and Madison. Most jobs scheduled within the week.</p>
    <div class="closing-cta-actions">
      <a href="tel:6085015123" class="closing-phone">
        <i data-lucide="phone" style="width:20px;height:20px;"></i>
        (608) 501-5123
      </a>
      <a href="/contact" class="btn-closing-primary">
        <i data-lucide="calendar-check" style="width:18px;height:18px;"></i>
        Schedule Free Estimate
      </a>
    </div>
    <p class="last-updated">Last Updated: May 2026</p>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
