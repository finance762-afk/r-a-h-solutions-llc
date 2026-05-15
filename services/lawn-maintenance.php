<?php
// ============================================================
// Lawn Maintenance — R.A.H. Solutions, LLC
// ============================================================
$pageTitle       = 'Lawn Maintenance in Edgerton, WI';
$pageDescription = 'Scheduled lawn maintenance in Edgerton, WI — mowing, edging & seasonal care programs from $40–$80/visit. Licensed & insured. Call (608) 501-5123.';
$canonicalUrl    = 'https://rahsolutionsllc.com/services/lawn-maintenance';
// SEO: {"@context":"https://schema.org"} — schema and <link rel="canonical"> rendered via head.php
$ogImage         = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963879670-etljhr-474465615_122209560308208320_6377695377545475044_n.jpg';
$currentPage     = 'service-lawn-maintenance';
$heroPreload     = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963879670-etljhr-474465615_122209560308208320_6377695377545475044_n.jpg';

$faqs = [
  [
    '@type'          => 'Question',
    'name'           => 'How often should I mow my lawn in Wisconsin?',
    'acceptedAnswer' => [
      '@type' => 'Answer',
      'text'  => 'During the active growing season in Edgerton (May through September), most lawns need mowing every 7–10 days. Cool-season grasses like Kentucky bluegrass and fescue grow fastest in spring and fall, sometimes requiring weekly cuts. We adjust visit frequency based on your specific lawn and seasonal conditions.',
    ],
  ],
  [
    '@type'          => 'Question',
    'name'           => 'What is included in a lawn maintenance visit?',
    'acceptedAnswer' => [
      '@type' => 'Answer',
      'text'  => 'Every R.A.H. Solutions lawn maintenance visit includes mowing at the correct height for your grass type, string trimming along fences, beds, and structures, edging along hardscape borders, and blowing clippings off pavement. Seasonal visits include additional tasks like fall leaf management and spring green-up prep.',
    ],
  ],
  [
    '@type'          => 'Question',
    'name'           => 'Do you offer seasonal lawn maintenance programs?',
    'acceptedAnswer' => [
      '@type' => 'Answer',
      'text'  => 'Yes. We offer flexible weekly and bi-weekly programs that run through the full Wisconsin growing season, typically April through October. Programs can include spring cleanup, summer maintenance visits, and fall preparation — bundled at a discounted rate compared to one-off visits.',
    ],
  ],
  [
    '@type'          => 'Question',
    'name'           => 'What areas do you serve for lawn care?',
    'acceptedAnswer' => [
      '@type' => 'Answer',
      'text'  => 'R.A.H. Solutions provides lawn maintenance services throughout Edgerton, Stoughton, Janesville, and Madison, WI — covering most of Rock County and southern Dane County. Contact us to confirm service availability at your address.',
    ],
  ],
];

$schemaMarkup = json_encode([
  '@context' => 'https://schema.org',
  '@graph'   => [
    [
      '@type'           => 'BreadcrumbList',
      'itemListElement' => [
        ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home',     'item' => 'https://rahsolutionsllc.com'],
        ['@type' => 'ListItem', 'position' => 2, 'name' => 'Services', 'item' => 'https://rahsolutionsllc.com/services'],
        ['@type' => 'ListItem', 'position' => 3, 'name' => 'Lawn Maintenance', 'item' => 'https://rahsolutionsllc.com/services/lawn-maintenance'],
      ],
    ],
    [
      '@type'       => 'Service',
      '@id'         => 'https://rahsolutionsllc.com/services/lawn-maintenance/#service',
      'name'        => 'Lawn Maintenance',
      'description' => 'Scheduled lawn mowing, edging, trimming, and seasonal care programs for residential and commercial properties in Edgerton, Stoughton, Janesville, and Madison, WI.',
      'provider'    => ['@type' => 'LocalBusiness', '@id' => 'https://rahsolutionsllc.com/#business'],
      'areaServed'  => [
        ['@type' => 'City', 'name' => 'Edgerton'],
        ['@type' => 'City', 'name' => 'Stoughton'],
        ['@type' => 'City', 'name' => 'Janesville'],
        ['@type' => 'City', 'name' => 'Madison'],
      ],
      'serviceType' => 'Lawn Maintenance',
    ],
    [
      '@type'      => 'FAQPage',
      'mainEntity' => $faqs,
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
   Lawn Maintenance — Page-Specific Styles
   ============================================================ */

/* ── Breadcrumb ───────────────────────────────────────────── */
.svc-breadcrumb {
  background: var(--color-bg-dark);
  padding: var(--space-sm) 0;
  position: relative;
  z-index: 10;
}
.svc-breadcrumb .container {
  display: flex;
  align-items: center;
  gap: var(--space-xs);
}
.breadcrumb-list {
  display: flex;
  align-items: center;
  gap: var(--space-xs);
  list-style: none;
  flex-wrap: wrap;
}
.breadcrumb-list li {
  display: flex;
  align-items: center;
  gap: var(--space-xs);
  font-size: var(--font-size-sm);
  color: rgba(255,255,255,0.55);
}
.breadcrumb-list li a {
  color: rgba(255,255,255,0.7);
  transition: color var(--transition-fast);
}
.breadcrumb-list li a:hover {
  color: var(--color-accent);
}
.breadcrumb-list li.current {
  color: var(--color-accent);
  font-weight: 600;
}
.breadcrumb-sep {
  color: rgba(255,255,255,0.3);
  font-size: var(--font-size-xs);
}

/* ── Inner Hero ───────────────────────────────────────────── */
.svc-hero {
  position: relative;
  min-height: 60vh;
  display: flex;
  align-items: center;
  overflow: hidden;
  background-image: url('https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963879670-etljhr-474465615_122209560308208320_6377695377545475044_n.jpg');
  background-size: cover;
  background-position: center;
  animation: svc-kenburns 20s ease-in-out infinite alternate;
}
@keyframes svc-kenburns {
  from { background-size: 110%; background-position: center 40%; }
  to   { background-size: 120%; background-position: center 55%; }
}
.svc-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(
    135deg,
    rgba(var(--color-primary-rgb), 0.88) 0%,
    rgba(var(--color-primary-rgb), 0.55) 60%,
    rgba(var(--color-accent-rgb), 0.15) 100%
  );
  z-index: 1;
}
.svc-hero::after {
  content: '';
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noise)' opacity='0.04'/%3E%3C/svg%3E");
  z-index: 2;
  pointer-events: none;
}
.svc-hero-inner {
  position: relative;
  z-index: 3;
  padding: var(--space-4xl) 0 var(--space-3xl);
}
.svc-eyebrow {
  display: inline-flex;
  align-items: center;
  gap: var(--space-sm);
  font-family: var(--font-body);
  font-size: var(--font-size-sm);
  font-weight: 700;
  letter-spacing: 0.12em;
  text-transform: uppercase;
  color: var(--color-accent);
  margin-bottom: var(--space-md);
}
.svc-eyebrow::before {
  content: '';
  display: block;
  width: 28px;
  height: 2px;
  background: var(--color-accent);
  flex-shrink: 0;
}
.svc-hero h1 {
  font-family: var(--font-heading);
  font-size: clamp(2.2rem, 5vw, 3.8rem);
  font-weight: 700;
  line-height: 1.1;
  text-wrap: balance;
  letter-spacing: -0.02em;
  color: var(--color-bg);
  margin-bottom: var(--space-md);
  background: linear-gradient(135deg, #ffffff 0%, rgba(var(--color-accent-rgb), 0.9) 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
}
.svc-hero-sub {
  font-size: var(--font-size-lg);
  color: rgba(255,255,255,0.82);
  max-width: 52ch;
  line-height: 1.6;
  margin-bottom: var(--space-xl);
}
.svc-hero-ctas {
  display: flex;
  gap: var(--space-md);
  flex-wrap: wrap;
  align-items: center;
}
.btn-hero-primary {
  display: inline-flex;
  align-items: center;
  gap: var(--space-sm);
  background: var(--color-accent);
  color: var(--color-bg-dark);
  font-family: var(--font-heading);
  font-size: var(--font-size-base);
  font-weight: 700;
  letter-spacing: 0.04em;
  text-transform: uppercase;
  padding: var(--space-md) var(--space-xl);
  border-radius: var(--radius-md);
  box-shadow: 0 4px 0 var(--color-accent-dark);
  transition: transform var(--transition-fast), box-shadow var(--transition-fast);
  overflow: hidden;
  position: relative;
}
.btn-hero-primary:hover {
  transform: translateY(-2px);
  box-shadow: 0 6px 0 var(--color-accent-dark);
}
.btn-hero-primary:active {
  transform: translateY(2px);
  box-shadow: 0 2px 0 var(--color-accent-dark);
}
.btn-hero-secondary {
  display: inline-flex;
  align-items: center;
  gap: var(--space-sm);
  background: transparent;
  color: var(--color-bg);
  font-family: var(--font-heading);
  font-size: var(--font-size-base);
  font-weight: 600;
  letter-spacing: 0.04em;
  text-transform: uppercase;
  padding: var(--space-md) var(--space-xl);
  border-radius: var(--radius-md);
  border: 2px solid rgba(255,255,255,0.5);
  transition: background var(--transition-base), border-color var(--transition-base);
}
.btn-hero-secondary:hover {
  background: rgba(255,255,255,0.12);
  border-color: rgba(255,255,255,0.8);
}
.svc-hero-trust {
  display: flex;
  align-items: center;
  gap: var(--space-lg);
  margin-top: var(--space-xl);
  flex-wrap: wrap;
}
.hero-trust-item {
  display: flex;
  align-items: center;
  gap: var(--space-xs);
  font-size: var(--font-size-sm);
  color: rgba(255,255,255,0.75);
  font-weight: 600;
}
.hero-trust-item i {
  color: var(--color-accent);
  width: 16px;
  height: 16px;
}

/* ── Ticker Strip ─────────────────────────────────────────── */
.ticker-strip {
  background: var(--color-primary);
  padding: var(--space-sm) 0;
  overflow: hidden;
  position: relative;
}
.ticker-strip::before,
.ticker-strip::after {
  content: '';
  position: absolute;
  top: 0;
  bottom: 0;
  width: 80px;
  z-index: 2;
  pointer-events: none;
}
.ticker-strip::before {
  left: 0;
  background: linear-gradient(to right, var(--color-primary), transparent);
}
.ticker-strip::after {
  right: 0;
  background: linear-gradient(to left, var(--color-primary), transparent);
}
.ticker-track {
  display: flex;
  width: max-content;
  animation: ticker-scroll 30s linear infinite;
}
.ticker-track:hover {
  animation-play-state: paused;
}
@keyframes ticker-scroll {
  from { transform: translateX(0); }
  to   { transform: translateX(-50%); }
}
.ticker-item {
  display: inline-flex;
  align-items: center;
  gap: var(--space-md);
  white-space: nowrap;
  font-family: var(--font-body);
  font-size: 0.8rem;
  font-weight: 700;
  letter-spacing: 0.1em;
  text-transform: uppercase;
  color: var(--color-bg);
  padding: 0 var(--space-xl);
}
.ticker-sep {
  color: var(--color-accent);
  font-size: 1.2rem;
  line-height: 1;
}

/* ── Section Dividers ─────────────────────────────────────── */
.divider-wrap {
  display: block;
  line-height: 0;
  overflow: hidden;
}
.divider-wrap svg {
  display: block;
  width: 100%;
}

/* ── Service Detail Section ───────────────────────────────── */
.svc-detail {
  padding: var(--space-4xl) 0 var(--space-3xl);
  background: var(--color-bg);
}
.svc-detail-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-3xl);
  align-items: center;
}
.svc-detail-content {
  order: 1;
}
.svc-detail-image {
  order: 2;
}
.section-eyebrow {
  display: inline-flex;
  align-items: center;
  gap: var(--space-sm);
  font-family: var(--font-body);
  font-size: var(--font-size-xs);
  font-weight: 700;
  letter-spacing: 0.14em;
  text-transform: uppercase;
  color: var(--color-accent);
  margin-bottom: var(--space-sm);
}
.section-eyebrow::after {
  content: '';
  display: block;
  width: 24px;
  height: 2px;
  background: var(--color-accent);
}
.svc-detail h2 {
  font-family: var(--font-heading);
  font-size: clamp(1.8rem, 3.5vw, 2.6rem);
  font-weight: 700;
  line-height: 1.15;
  text-wrap: balance;
  letter-spacing: -0.02em;
  color: var(--color-primary);
  margin-bottom: var(--space-lg);
}
.svc-detail p {
  font-size: var(--font-size-base);
  color: var(--color-text-light);
  line-height: 1.7;
  max-width: 65ch;
  margin-bottom: var(--space-md);
}
.svc-detail p:last-of-type {
  margin-bottom: var(--space-xl);
}
.svc-updated {
  font-size: var(--font-size-sm);
  color: var(--color-gray);
  font-style: italic;
}
.svc-image-frame {
  position: relative;
  border-radius: var(--radius-lg);
  overflow: hidden;
  box-shadow: var(--shadow-xl);
}
.svc-image-frame::before {
  content: '';
  position: absolute;
  inset: 0;
  border: 3px solid rgba(var(--color-accent-rgb), 0.25);
  border-radius: var(--radius-lg);
  z-index: 2;
  pointer-events: none;
}
.svc-image-frame picture img {
  width: 100%;
  height: 420px;
  object-fit: cover;
  display: block;
  transition: transform var(--transition-slow);
}
.svc-image-frame:hover picture img {
  transform: scale(1.03);
}
.svc-image-badge {
  position: absolute;
  bottom: var(--space-lg);
  left: var(--space-lg);
  background: var(--color-accent);
  color: var(--color-bg-dark);
  font-family: var(--font-heading);
  font-size: var(--font-size-sm);
  font-weight: 700;
  letter-spacing: 0.06em;
  text-transform: uppercase;
  padding: var(--space-xs) var(--space-md);
  border-radius: var(--radius-sm);
  z-index: 3;
  box-shadow: var(--shadow-md);
}
.btn-detail {
  display: inline-flex;
  align-items: center;
  gap: var(--space-sm);
  background: var(--color-primary);
  color: var(--color-bg);
  font-family: var(--font-heading);
  font-size: var(--font-size-base);
  font-weight: 600;
  letter-spacing: 0.04em;
  text-transform: uppercase;
  padding: var(--space-md) var(--space-xl);
  border-radius: var(--radius-md);
  box-shadow: 0 4px 0 var(--color-primary-dark);
  transition: transform var(--transition-fast), box-shadow var(--transition-fast);
  overflow: hidden;
  position: relative;
}
.btn-detail:hover {
  transform: translateY(-2px);
  box-shadow: 0 6px 0 var(--color-primary-dark);
}
.btn-detail:active {
  transform: translateY(2px);
  box-shadow: 0 2px 0 var(--color-primary-dark);
}

/* ── Mid CTA Banner ───────────────────────────────────────── */
.cta-mid {
  position: relative;
  padding: var(--space-3xl) 0;
  background: linear-gradient(135deg, var(--color-primary) 0%, var(--color-primary-dark) 100%);
  overflow: hidden;
}
.cta-mid::after {
  content: '';
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noise)' opacity='0.04'/%3E%3C/svg%3E");
  pointer-events: none;
  z-index: 0;
}
.cta-mid .container {
  position: relative;
  z-index: 1;
  text-align: center;
}
.cta-eyebrow {
  display: inline-block;
  font-family: var(--font-body);
  font-size: var(--font-size-sm);
  font-weight: 700;
  letter-spacing: 0.12em;
  text-transform: uppercase;
  color: var(--color-accent);
  margin-bottom: var(--space-sm);
}
.cta-mid h2 {
  font-family: var(--font-heading);
  font-size: clamp(1.8rem, 4vw, 2.8rem);
  font-weight: 700;
  text-wrap: balance;
  letter-spacing: -0.02em;
  color: var(--color-bg);
  margin-bottom: var(--space-md);
}
.cta-mid > .container > p {
  font-size: var(--font-size-lg);
  color: rgba(255,255,255,0.8);
  max-width: 55ch;
  margin: 0 auto var(--space-xl);
  line-height: 1.6;
}
.cta-actions {
  display: flex;
  justify-content: center;
  align-items: center;
  gap: var(--space-md);
  flex-wrap: wrap;
}
.btn-cta-phone {
  display: inline-flex;
  align-items: center;
  gap: var(--space-sm);
  background: var(--color-bg);
  color: var(--color-primary-dark);
  font-family: var(--font-heading);
  font-size: clamp(1.1rem, 2vw, 1.4rem);
  font-weight: 700;
  padding: var(--space-md) var(--space-xl);
  border-radius: var(--radius-md);
  box-shadow: var(--shadow-lg);
  transition: transform var(--transition-fast), box-shadow var(--transition-fast);
  overflow: hidden;
  position: relative;
}
.btn-cta-phone:hover {
  transform: translateY(-2px);
  box-shadow: var(--shadow-xl);
}
.btn-cta-primary {
  display: inline-flex;
  align-items: center;
  gap: var(--space-sm);
  background: var(--color-accent);
  color: var(--color-bg-dark);
  font-family: var(--font-heading);
  font-size: var(--font-size-base);
  font-weight: 700;
  letter-spacing: 0.04em;
  text-transform: uppercase;
  padding: var(--space-md) var(--space-xl);
  border-radius: var(--radius-md);
  box-shadow: 0 4px 0 var(--color-accent-dark);
  transition: transform var(--transition-fast), box-shadow var(--transition-fast);
  overflow: hidden;
  position: relative;
}
.btn-cta-primary:hover {
  transform: translateY(-2px);
  box-shadow: 0 6px 0 var(--color-accent-dark);
}
.btn-cta-primary:active {
  transform: translateY(2px);
  box-shadow: 0 2px 0 var(--color-accent-dark);
}

/* ── Signature: Full-Bleed Stats Band ─────────────────────── */
.stats-band {
  background: var(--color-bg-dark);
  padding: var(--space-3xl) 0;
  position: relative;
  overflow: hidden;
}
.stats-band::before {
  content: '';
  position: absolute;
  top: -60px;
  left: -60px;
  width: 320px;
  height: 320px;
  border-radius: 50%;
  background: rgba(var(--color-accent-rgb), 0.06);
  pointer-events: none;
}
.stats-band::after {
  content: '';
  position: absolute;
  bottom: -80px;
  right: -40px;
  width: 400px;
  height: 400px;
  border-radius: 50%;
  background: rgba(var(--color-accent-rgb), 0.04);
  pointer-events: none;
}
.stats-band-inner {
  position: relative;
  z-index: 1;
}
.stats-band-label {
  text-align: center;
  font-family: var(--font-body);
  font-size: var(--font-size-sm);
  font-weight: 700;
  letter-spacing: 0.12em;
  text-transform: uppercase;
  color: var(--color-accent);
  margin-bottom: var(--space-2xl);
}
.stats-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: var(--space-xl);
}
.stat-item {
  text-align: center;
  padding: var(--space-xl);
  border: 1px solid rgba(var(--color-accent-rgb), 0.15);
  border-radius: var(--radius-lg);
  background: rgba(255,255,255,0.03);
  transition: border-color var(--transition-base), background var(--transition-base);
}
.stat-item:hover {
  border-color: rgba(var(--color-accent-rgb), 0.35);
  background: rgba(var(--color-accent-rgb), 0.05);
}
.stat-number {
  font-family: var(--font-heading);
  font-size: clamp(2.2rem, 4vw, 3.2rem);
  font-weight: 700;
  color: var(--color-accent);
  line-height: 1;
  margin-bottom: var(--space-xs);
  letter-spacing: -0.02em;
}
.stat-label {
  font-size: var(--font-size-sm);
  color: rgba(255,255,255,0.65);
  line-height: 1.4;
  max-width: 18ch;
  margin: 0 auto;
}

/* ── Why Choose Section ───────────────────────────────────── */
.why-choose {
  padding: var(--space-4xl) 0;
  background: var(--color-bg-alt);
}
.why-choose-header {
  text-align: center;
  margin-bottom: var(--space-3xl);
}
.why-choose h2 {
  font-family: var(--font-heading);
  font-size: clamp(1.8rem, 3.5vw, 2.6rem);
  font-weight: 700;
  text-wrap: balance;
  letter-spacing: -0.02em;
  color: var(--color-primary);
  margin-bottom: var(--space-sm);
}
.why-choose .sub {
  font-size: var(--font-size-lg);
  color: var(--color-text-light);
  max-width: 55ch;
  margin: 0 auto;
}
.why-cards {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: var(--space-lg);
}
.why-card {
  background: var(--color-bg);
  border-radius: var(--radius-lg);
  padding: var(--space-xl) var(--space-lg);
  box-shadow: var(--shadow-card);
  transition: transform var(--transition-base), box-shadow var(--transition-base), background var(--transition-base);
  position: relative;
  overflow: hidden;
}
.why-card::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  height: 3px;
  background: var(--color-accent);
  transform: scaleX(0);
  transform-origin: left;
  transition: transform var(--transition-base);
}
.why-card:hover {
  transform: translateY(-6px);
  box-shadow: var(--shadow-xl);
  background: var(--color-primary);
}
.why-card:hover::before {
  transform: scaleX(1);
}
.why-card:hover .why-card-title,
.why-card:hover .why-card-text {
  color: rgba(255,255,255,0.9);
}
.why-card:hover .why-icon {
  background: rgba(var(--color-accent-rgb), 0.2);
  color: var(--color-accent);
}
.why-icon {
  width: 52px;
  height: 52px;
  border-radius: var(--radius-md);
  background: rgba(var(--color-accent-rgb), 0.1);
  display: flex;
  align-items: center;
  justify-content: center;
  color: var(--color-accent);
  margin-bottom: var(--space-md);
  transition: background var(--transition-base), color var(--transition-base);
}
.why-card-title {
  font-family: var(--font-heading);
  font-size: var(--font-size-xl);
  font-weight: 600;
  text-wrap: balance;
  color: var(--color-primary);
  margin-bottom: var(--space-sm);
  transition: color var(--transition-base);
}
.why-card-text {
  font-size: var(--font-size-sm);
  color: var(--color-text-light);
  line-height: 1.6;
  transition: color var(--transition-base);
}

/* ── Process Section ──────────────────────────────────────── */
.process-section {
  padding: var(--space-4xl) 0;
  background: var(--color-bg);
}
.process-section-header {
  text-align: center;
  margin-bottom: var(--space-3xl);
}
.process-section h2 {
  font-family: var(--font-heading);
  font-size: clamp(1.8rem, 3.5vw, 2.6rem);
  font-weight: 700;
  text-wrap: balance;
  letter-spacing: -0.02em;
  color: var(--color-primary);
  margin-bottom: var(--space-sm);
}
.process-section .sub {
  font-size: var(--font-size-lg);
  color: var(--color-text-light);
  max-width: 55ch;
  margin: 0 auto;
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
  top: 32px;
  left: calc(12.5% + 26px);
  right: calc(12.5% + 26px);
  height: 2px;
  background: linear-gradient(to right, var(--color-accent), rgba(var(--color-accent-rgb), 0.2));
  pointer-events: none;
}
.process-step {
  text-align: center;
  padding: var(--space-lg);
}
.step-number {
  width: 64px;
  height: 64px;
  border-radius: 50%;
  background: var(--color-primary);
  color: var(--color-bg);
  font-family: var(--font-heading);
  font-size: 1.5rem;
  font-weight: 700;
  display: flex;
  align-items: center;
  justify-content: center;
  margin: 0 auto var(--space-md);
  position: relative;
  z-index: 1;
  border: 3px solid rgba(var(--color-accent-rgb), 0.3);
  transition: background var(--transition-base), border-color var(--transition-base);
}
.process-step:hover .step-number {
  background: var(--color-accent);
  border-color: var(--color-accent);
  color: var(--color-bg-dark);
}
.step-title {
  font-family: var(--font-heading);
  font-size: var(--font-size-lg);
  font-weight: 600;
  text-wrap: balance;
  color: var(--color-primary);
  margin-bottom: var(--space-sm);
}
.step-desc {
  font-size: var(--font-size-sm);
  color: var(--color-text-light);
  line-height: 1.6;
  max-width: 22ch;
  margin: 0 auto;
}

/* ── FAQ Section ──────────────────────────────────────────── */
.faq-section {
  padding: var(--space-4xl) 0;
  background: var(--color-bg-alt);
}
.faq-section-header {
  text-align: center;
  margin-bottom: var(--space-3xl);
}
.faq-section h2 {
  font-family: var(--font-heading);
  font-size: clamp(1.8rem, 3.5vw, 2.6rem);
  font-weight: 700;
  text-wrap: balance;
  letter-spacing: -0.02em;
  color: var(--color-primary);
  margin-bottom: var(--space-sm);
}
.faq-section .sub {
  font-size: var(--font-size-lg);
  color: var(--color-text-light);
  max-width: 55ch;
  margin: 0 auto;
}
.faq-list {
  max-width: 800px;
  margin: 0 auto;
  display: flex;
  flex-direction: column;
  gap: var(--space-md);
}
.faq-item {
  background: var(--color-bg);
  border-radius: var(--radius-md);
  box-shadow: var(--shadow-sm);
  border: 1px solid rgba(var(--color-primary-rgb), 0.08);
  overflow: hidden;
}
.faq-item summary {
  padding: var(--space-lg) var(--space-xl);
  font-family: var(--font-heading);
  font-size: var(--font-size-lg);
  font-weight: 600;
  text-wrap: balance;
  color: var(--color-primary);
  cursor: pointer;
  display: flex;
  justify-content: space-between;
  align-items: center;
  gap: var(--space-md);
  list-style: none;
  transition: color var(--transition-fast);
}
.faq-item summary::-webkit-details-marker { display: none; }
.faq-item summary::after {
  content: '+';
  font-size: 1.4rem;
  color: var(--color-accent);
  flex-shrink: 0;
  transition: transform var(--transition-base);
}
.faq-item[open] summary::after {
  transform: rotate(45deg);
}
.faq-item[open] summary {
  color: var(--color-accent);
}
.faq-answer {
  padding: 0 var(--space-xl) var(--space-lg);
  font-size: var(--font-size-base);
  color: var(--color-text-light);
  line-height: 1.7;
  max-width: 65ch;
}

/* ── Closing CTA ──────────────────────────────────────────── */
.closing-cta {
  padding: var(--space-4xl) 0;
  background: var(--color-bg);
  text-align: center;
}
.closing-cta h2 {
  font-family: var(--font-heading);
  font-size: clamp(1.8rem, 3.5vw, 2.6rem);
  font-weight: 700;
  text-wrap: balance;
  letter-spacing: -0.02em;
  color: var(--color-primary);
  margin-bottom: var(--space-md);
}
.closing-cta p {
  font-size: var(--font-size-lg);
  color: var(--color-text-light);
  max-width: 55ch;
  margin: 0 auto var(--space-xl);
  line-height: 1.6;
}
.closing-cta-actions {
  display: flex;
  justify-content: center;
  gap: var(--space-md);
  flex-wrap: wrap;
}
.btn-closing-primary {
  display: inline-flex;
  align-items: center;
  gap: var(--space-sm);
  background: var(--color-accent);
  color: var(--color-bg-dark);
  font-family: var(--font-heading);
  font-size: var(--font-size-lg);
  font-weight: 700;
  letter-spacing: 0.04em;
  text-transform: uppercase;
  padding: var(--space-md) var(--space-2xl);
  border-radius: var(--radius-md);
  box-shadow: 0 4px 0 var(--color-accent-dark);
  transition: transform var(--transition-fast), box-shadow var(--transition-fast);
  overflow: hidden;
  position: relative;
}
.btn-closing-primary:hover {
  transform: translateY(-2px);
  box-shadow: 0 6px 0 var(--color-accent-dark);
}
.btn-closing-phone {
  display: inline-flex;
  align-items: center;
  gap: var(--space-sm);
  background: var(--color-primary);
  color: var(--color-bg);
  font-family: var(--font-heading);
  font-size: var(--font-size-lg);
  font-weight: 700;
  padding: var(--space-md) var(--space-2xl);
  border-radius: var(--radius-md);
  box-shadow: 0 4px 0 var(--color-primary-dark);
  transition: transform var(--transition-fast), box-shadow var(--transition-fast);
  overflow: hidden;
  position: relative;
}
.btn-closing-phone:hover {
  transform: translateY(-2px);
  box-shadow: 0 6px 0 var(--color-primary-dark);
}

/* ── Responsive ───────────────────────────────────────────── */
@media (max-width: 1023px) {
  .stats-grid { grid-template-columns: repeat(2, 1fr); }
  .why-cards  { grid-template-columns: repeat(2, 1fr); }
  .process-steps { grid-template-columns: repeat(2, 1fr); }
  .process-steps::before { display: none; }
}
@media (max-width: 767px) {
  .svc-detail-grid { grid-template-columns: 1fr; }
  .svc-detail-image { order: -1; }
  .svc-image-frame picture img { height: 280px; }
  .stats-grid { grid-template-columns: repeat(2, 1fr); gap: var(--space-md); }
  .why-cards  { grid-template-columns: 1fr; }
  .process-steps { grid-template-columns: 1fr; }
  .svc-hero-ctas { flex-direction: column; align-items: flex-start; }
}
</style>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

  <!-- ── Breadcrumb ─────────────────────────────────────────── -->
  <nav class="svc-breadcrumb" aria-label="Breadcrumb">
    <div class="container">
      <ol class="breadcrumb-list">
        <li><a href="/">Home</a></li>
        <li aria-hidden="true"><span class="breadcrumb-sep">›</span></li>
        <li><a href="/services">Services</a></li>
        <li aria-hidden="true"><span class="breadcrumb-sep">›</span></li>
        <li class="current" aria-current="page">Lawn Maintenance</li>
      </ol>
    </div>
  </nav>

  <!-- ── Inner Hero ─────────────────────────────────────────── -->
  <section class="svc-hero" aria-label="Lawn Maintenance Services">
    <div class="container svc-hero-inner">
      <span class="svc-eyebrow">
        <i data-lucide="scissors" aria-hidden="true" style="width:14px;height:14px;"></i>
        Lawn Care Programs
      </span>
      <h1>Lawn Maintenance Services in Edgerton, WI</h1>
      <p class="svc-hero-sub">Consistent mowing, clean edging, and seasonal programs — from $40–$80/visit — that keep your lawn looking sharp all season long across Rock &amp; Dane County.</p>
      <div class="svc-hero-ctas">
        <a href="tel:6085015123" class="btn-hero-primary">
          <i data-lucide="phone" aria-hidden="true" style="width:18px;height:18px;"></i>
          Call (608) 501-5123
        </a>
        <a href="/contact" class="btn-hero-secondary">
          Get a Free Estimate
        </a>
      </div>
      <div class="svc-hero-trust">
        <span class="hero-trust-item">
          <i data-lucide="shield-check" aria-hidden="true"></i> Licensed &amp; Insured
        </span>
        <span class="hero-trust-item">
          <i data-lucide="star" aria-hidden="true"></i> 4.9-Star Rated
        </span>
        <span class="hero-trust-item">
          <i data-lucide="calendar-check" aria-hidden="true"></i> Weekly &amp; Bi-Weekly Programs
        </span>
      </div>
    </div>
  </section>

  <!-- ── Proof Ticker Strip ─────────────────────────────────── -->
  <div class="ticker-strip" aria-hidden="true">
    <div class="ticker-track">
      <!-- Set 1 -->
      <span class="ticker-item">Mowing &amp; Edging<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">Weekly Programs Available<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">Rock County Specialists<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">Licensed &amp; Insured<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">Free Estimates<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">Edgerton · Stoughton · Madison · Janesville<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">Seasonal Programs<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">3 Years Strong<span class="ticker-sep">✦</span></span>
      <!-- Set 2 (duplicate for seamless loop) -->
      <span class="ticker-item">Mowing &amp; Edging<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">Weekly Programs Available<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">Rock County Specialists<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">Licensed &amp; Insured<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">Free Estimates<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">Edgerton · Stoughton · Madison · Janesville<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">Seasonal Programs<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">3 Years Strong<span class="ticker-sep">✦</span></span>
    </div>
  </div>

  <!-- ── Divider: bg → bg ──────────────────────────────────── -->
  <div class="divider-wrap" aria-hidden="true">
    <svg viewBox="0 0 1200 40" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
      <polygon points="0,0 1200,40 1200,40 0,40" fill="#ffffff"/>
    </svg>
  </div>

  <!-- ── Service Detail Section ─────────────────────────────── -->
  <section class="svc-detail" data-animate="fade-up">
    <div class="container">
      <div class="svc-detail-grid">

        <!-- Content (left) -->
        <div class="svc-detail-content">
          <span class="section-eyebrow">What We Do</span>
          <h2>What Precision Lawn Care Is Designed for Wisconsin's Growing Season?</h2>

          <p>Lawn maintenance in Edgerton starts at $40–$80 per visit depending on property size, and covers mowing, string trimming, edging along driveways and beds, and blowing clippings off all paved surfaces. Every visit is performed by the same crew on a consistent schedule so your lawn never looks neglected between visits.</p>

          <p>Wisconsin's climate demands a different approach than you'd find in milder regions. Rock County soils trend toward heavy clay, which compacts quickly and holds water after spring rains. We factor in mowing height adjustments — 3 to 3.5 inches for fescue and bluegrass mixes — that help the turf develop deeper roots and tolerate July dry spells without browning out. In spring, we avoid scalping fresh growth; in fall, we drop cut heights gradually to prep for dormancy without stressing the crown.</p>

          <p>Summer drought stress is real in Southern Wisconsin, particularly in July and August when stretches of 90°F heat arrive with no rainfall. Rather than forcing a rigid mow schedule during these periods, we adjust visit timing and cut height so we're never removing more than a third of the blade at once. This "one-third rule" is the single biggest factor in whether a lawn stays green through summer or turns brown and thin.</p>

          <p>Regular maintenance beats reactive repair every time. Lawns that receive consistent mowing, edging, and seasonal care are 60–70% less likely to develop significant weed pressure, bare spots, or thatch buildup that requires expensive renovation. Keeping your lawn on a program protects your investment in the property and prevents the kind of decline that takes multiple growing seasons to reverse.</p>

          <p class="svc-updated">Last Updated: April 2026 · Serving Edgerton, WI and surrounding Rock &amp; Dane County communities.</p>

          <a href="/contact" class="btn-detail">
            <i data-lucide="clipboard-list" aria-hidden="true" style="width:18px;height:18px;"></i>
            Request a Program Quote
          </a>
        </div>

        <!-- Image (right) -->
        <div class="svc-detail-image">
          <div class="svc-image-frame">
            <picture>
              <source srcset="https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963892391-3enmm5-486843500_122226629396208320_6857620022192748149_n.jpg" type="image/webp">
              <img
                src="https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963892391-3enmm5-486843500_122226629396208320_6857620022192748149_n.jpg"
                alt="Residential lawn maintenance mowing and edging Edgerton Wisconsin"
                width="600"
                height="420"
                loading="lazy"
              >
            </picture>
            <span class="svc-image-badge">Edgerton, WI</span>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- ── Divider: bg → bg-dark (wave) ──────────────────────── -->
  <div class="divider-wrap" aria-hidden="true">
    <svg viewBox="0 0 1200 80" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M0,40 C300,80 900,0 1200,40 L1200,80 L0,80 Z" fill="#0f1e2d"/>
    </svg>
  </div>

  <!-- ── SIGNATURE: Full-Bleed Stats Band ───────────────────── -->
  <section class="stats-band" aria-label="Service statistics">
    <div class="container stats-band-inner">
      <p class="stats-band-label">R.A.H. Solutions — By the Numbers</p>
      <div class="stats-grid">
        <div class="stat-item" data-animate="fade-up">
          <div class="stat-number">$40<span style="font-size:1.5rem;">+</span></div>
          <div class="stat-label">Starting price per maintenance visit</div>
        </div>
        <div class="stat-item" data-animate="fade-up">
          <div class="stat-number">3+</div>
          <div class="stat-label">Years serving Rock &amp; Dane County</div>
        </div>
        <div class="stat-item" data-animate="fade-up">
          <div class="stat-number">4.9★</div>
          <div class="stat-label">Average customer rating across 47 reviews</div>
        </div>
        <div class="stat-item" data-animate="fade-up">
          <div class="stat-number">4</div>
          <div class="stat-label">Cities served across Southern Wisconsin</div>
        </div>
      </div>
    </div>
  </section>

  <!-- ── Divider: bg-dark → bg-alt (diagonal up) ───────────── -->
  <div class="divider-wrap" aria-hidden="true">
    <svg viewBox="0 0 1200 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
      <polygon points="0,60 1200,0 1200,60" fill="#f4f7f9"/>
    </svg>
  </div>

  <!-- ── Mid-Page CTA Banner ────────────────────────────────── -->
  <section class="cta-mid" aria-label="Contact R.A.H. Solutions">
    <div class="container">
      <p class="cta-eyebrow">Free Estimates · No Obligation</p>
      <h2>Why Should You Stop Watching Your Lawn Fall Behind?</h2>
      <p>Get on a consistent maintenance schedule this season. R.A.H. Solutions serves Edgerton, Stoughton, Madison &amp; Janesville — same-crew visits, every time.</p>
      <div class="cta-actions">
        <a href="tel:6085015123" class="btn-cta-phone">
          <i data-lucide="phone" aria-hidden="true" style="width:20px;height:20px;"></i>
          (608) 501-5123
        </a>
        <a href="/contact" class="btn-cta-primary">Get a Free Estimate</a>
      </div>
    </div>
  </section>

  <!-- ── Divider: primary → bg-alt ─────────────────────────── -->
  <div class="divider-wrap" aria-hidden="true">
    <svg viewBox="0 0 1200 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
      <polygon points="0,0 1200,60 1200,60 0,60" fill="#f4f7f9"/>
    </svg>
  </div>

  <!-- ── Why Choose Section ─────────────────────────────────── -->
  <section class="why-choose" data-animate="fade-up">
    <div class="container">
      <div class="why-choose-header">
        <span class="section-eyebrow">Why R.A.H. Solutions</span>
        <h2>How Is Our Service Built Around How Wisconsin Lawns Grow?</h2>
        <p class="sub">Local crews who know Rock County's soil and seasonal patterns — not a franchise operation running the same playbook coast to coast.</p>
      </div>
      <div class="why-cards">
        <div class="why-card" data-tilt data-tilt-max="6" data-tilt-speed="400" data-tilt-glare data-tilt-max-glare="0.12">
          <div class="why-icon">
            <i data-lucide="map-pin" aria-hidden="true" style="width:24px;height:24px;"></i>
          </div>
          <h3 class="why-card-title">Local Climate Knowledge</h3>
          <p class="why-card-text">Rock and Dane County soils, seasonal frost timelines, and drought patterns inform every mowing decision we make for your property.</p>
        </div>
        <div class="why-card" data-tilt data-tilt-max="6" data-tilt-speed="400" data-tilt-glare data-tilt-max-glare="0.12">
          <div class="why-icon">
            <i data-lucide="users" aria-hidden="true" style="width:24px;height:24px;"></i>
          </div>
          <h3 class="why-card-title">Consistent Crew, Reliable Schedule</h3>
          <p class="why-card-text">No rotating strangers on your property. The same team handles your lawn each visit on the day you expect them.</p>
        </div>
        <div class="why-card" data-tilt data-tilt-max="6" data-tilt-speed="400" data-tilt-glare data-tilt-max-glare="0.12">
          <div class="why-icon">
            <i data-lucide="maximize-2" aria-hidden="true" style="width:24px;height:24px;"></i>
          </div>
          <h3 class="why-card-title">Edging &amp; Trimming Always Included</h3>
          <p class="why-card-text">Sharp bed lines and clean driveway edges aren't an add-on — they're part of every visit. Your property should look finished, not just mowed.</p>
        </div>
        <div class="why-card" data-tilt data-tilt-max="6" data-tilt-speed="400" data-tilt-glare data-tilt-max-glare="0.12">
          <div class="why-icon">
            <i data-lucide="calendar-range" aria-hidden="true" style="width:24px;height:24px;"></i>
          </div>
          <h3 class="why-card-title">Flexible Weekly or Bi-Weekly Programs</h3>
          <p class="why-card-text">We offer programs that adapt to your lawn's growth rate — weekly in peak season, bi-weekly during slower periods, with seasonal pricing that makes sense.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ── Divider: bg-alt → bg ───────────────────────────────── -->
  <div class="divider-wrap" aria-hidden="true">
    <svg viewBox="0 0 1200 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
      <polygon points="0,0 1200,60 1200,0" fill="#ffffff"/>
    </svg>
  </div>

  <!-- ── Process Steps ──────────────────────────────────────── -->
  <section class="process-section" data-animate="fade-up">
    <div class="container">
      <div class="process-section-header">
        <span class="section-eyebrow">How It Works</span>
        <h2>What Are the 4 Steps from First Call to First Cut?</h2>
        <p class="sub">No complicated contracts. No guesswork. We make getting on a maintenance program straightforward.</p>
      </div>
      <div class="process-steps">
        <div class="process-step">
          <div class="step-number">1</div>
          <h3 class="step-title">Free Yard Assessment</h3>
          <p class="step-desc">We visit your property to measure the lawn, note obstacles, and assess turf condition before quoting.</p>
        </div>
        <div class="process-step">
          <div class="step-number">2</div>
          <h3 class="step-title">Custom Maintenance Plan</h3>
          <p class="step-desc">You receive a written plan with visit frequency, pricing, and any seasonal add-ons — no surprises.</p>
        </div>
        <div class="process-step">
          <div class="step-number">3</div>
          <h3 class="step-title">Scheduled Regular Visits</h3>
          <p class="step-desc">Your crew arrives on schedule, performs the full service, and leaves the property clean and tidy.</p>
        </div>
        <div class="process-step">
          <div class="step-number">4</div>
          <h3 class="step-title">Seasonal Adjustments</h3>
          <p class="step-desc">We shift mowing height, frequency, and included tasks as Wisconsin's seasons change — spring through fall.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ── Divider: bg → bg-alt (diagonal down) ──────────────── -->
  <div class="divider-wrap" aria-hidden="true">
    <svg viewBox="0 0 1200 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
      <polygon points="0,0 1200,60 1200,60 0,60" fill="#f4f7f9"/>
    </svg>
  </div>

  <!-- ── FAQ Section ────────────────────────────────────────── -->
  <section class="faq-section" data-animate="fade-up">
    <div class="container">
      <div class="faq-section-header">
        <span class="section-eyebrow">Common Questions</span>
        <h2>What Are Your Lawn Maintenance Questions?</h2>
        <p class="sub">Real answers about what our programs include and how we work in Edgerton and surrounding communities.</p>
      </div>
      <div class="faq-list">
        <details class="faq-item">
          <summary>How often should I mow my lawn in Wisconsin?</summary>
          <div class="faq-answer">
            <p>During the active growing season in Edgerton (May through September), most lawns need mowing every 7–10 days. Cool-season grasses like Kentucky bluegrass and fescue grow fastest in spring and fall, sometimes requiring weekly cuts. We adjust visit frequency based on your specific lawn and seasonal conditions.</p>
          </div>
        </details>
        <details class="faq-item">
          <summary>What is included in a lawn maintenance visit?</summary>
          <div class="faq-answer">
            <p>Every R.A.H. Solutions maintenance visit includes mowing at the correct height for your grass type, string trimming along fences, beds, and structures, edging along hardscape borders, and blowing clippings off all paved surfaces. Seasonal visits may include additional tasks like fall leaf management and spring green-up prep.</p>
          </div>
        </details>
        <details class="faq-item">
          <summary>Do you offer seasonal lawn maintenance programs?</summary>
          <div class="faq-answer">
            <p>Yes. We offer flexible weekly and bi-weekly programs that run through the full Wisconsin growing season, typically April through October. Programs can include spring cleanup, summer maintenance visits, and fall preparation — bundled at a discounted rate compared to one-off visits.</p>
          </div>
        </details>
        <details class="faq-item">
          <summary>What areas do you serve for lawn care?</summary>
          <div class="faq-answer">
            <p>R.A.H. Solutions provides lawn maintenance throughout Edgerton, Stoughton, Janesville, and Madison, WI — covering most of Rock County and southern Dane County. Contact us to confirm service availability at your specific address.</p>
          </div>
        </details>
      </div>
    </div>
  </section>

  <!-- ── Divider: bg-alt → bg (diagonal up) ────────────────── -->
  <div class="divider-wrap" aria-hidden="true">
    <svg viewBox="0 0 1200 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
      <polygon points="0,60 1200,0 1200,60" fill="#ffffff"/>
    </svg>
  </div>

  <!-- ── Closing CTA ────────────────────────────────────────── -->
  <section class="closing-cta" data-animate="fade-up">
    <div class="container">
      <span class="section-eyebrow" style="justify-content:center;">Start This Season Right</span>
      <h2>How Do You Get Your First Lawn Maintenance Visit Scheduled?</h2>
      <p>Programs fill up fast in spring. Call now or request a free estimate online — R.A.H. Solutions has been keeping Edgerton properties looking sharp since 2023.</p>
      <div class="closing-cta-actions">
        <a href="tel:6085015123" class="btn-closing-phone">
          <i data-lucide="phone" aria-hidden="true" style="width:20px;height:20px;"></i>
          (608) 501-5123
        </a>
        <a href="/contact" class="btn-closing-primary">
          <i data-lucide="clipboard-list" aria-hidden="true" style="width:20px;height:20px;"></i>
          Get a Free Estimate
        </a>
      </div>
    </div>
  </section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
