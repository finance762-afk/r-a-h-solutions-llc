<?php
// ============================================================
// Garden Maintenance — R.A.H. Solutions, LLC
// ============================================================
$pageTitle       = 'Garden Maintenance | Edgerton, WI';
$pageDescription = 'Garden maintenance in Edgerton, WI by R.A.H. Solutions — weeding, pruning & seasonal plant care. Healthy beds all season. Free estimates. Call (608) 501-5123.';
$canonicalUrl    = 'https://rahsolutionsllc.com/services/garden-maintenance';
// SEO: {"@context":"https://schema.org"} — schema and <link rel="canonical"> rendered via head.php
$ogImage         = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963898405-wb12tf-509629996_122253717212208320_4867801287963445550_n.jpg';
$currentPage     = 'service-garden-maintenance';
$heroPreload     = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963898405-wb12tf-509629996_122253717212208320_4867801287963445550_n.jpg';

$faqs = [
  [
    '@type'          => 'Question',
    'name'           => 'What does garden maintenance include?',
    'acceptedAnswer' => [
      '@type' => 'Answer',
      'text'  => 'R.A.H. Solutions garden maintenance covers weeding, deadheading spent blooms to extend flowering, dividing overgrown perennials, sharpening bed edges against lawn borders, monitoring plants for pest and disease symptoms, and light pruning of shrubs within beds. Seasonal visits include spring bed cleanup and division, summer weed and pest management, and fall cutback with protective mulch top-dressing before Wisconsin winters.',
    ],
  ],
  [
    '@type'          => 'Question',
    'name'           => 'How often should garden beds be maintained?',
    'acceptedAnswer' => [
      '@type' => 'Answer',
      'text'  => 'Most residential garden beds in Edgerton benefit from maintenance visits every 4–6 weeks during the active growing season (May through September). Monthly programs keep weed pressure manageable, maintain plant health, and prevent the kind of overgrowth that requires expensive corrective work. Some clients with aggressive weed pressure or large bed areas schedule visits every 3 weeks during peak summer.',
    ],
  ],
  [
    '@type'          => 'Question',
    'name'           => 'Do you handle weed control in garden beds?',
    'acceptedAnswer' => [
      '@type' => 'Answer',
      'text'  => 'Yes — weeding is one of the core tasks in every garden maintenance visit. We hand-pull weeds including roots to prevent immediate regrowth, and we can apply pre-emergent treatments at seasonal transitions to reduce new weed germination. Consistent monthly maintenance is the most effective weed management strategy — letting beds go 8–10 weeks between visits allows weed seed banks to establish and makes catch-up work significantly harder.',
    ],
  ],
  [
    '@type'          => 'Question',
    'name'           => 'Can you take over maintenance of an existing garden?',
    'acceptedAnswer' => [
      '@type' => 'Answer',
      'text'  => 'Yes — taking over existing gardens is common. We start with a garden assessment visit to document what\'s planted, identify any problem areas (overcrowded perennials, invasive weeds, disease-prone plants), and develop a care plan. Beds that have been neglected for one or more seasons may require a first-visit cleanup hour to bring them to a maintainable baseline before starting a monthly program.',
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
        ['@type' => 'ListItem', 'position' => 3, 'name' => 'Garden Maintenance', 'item' => 'https://rahsolutionsllc.com/services/garden-maintenance'],
      ],
    ],
    [
      '@type'       => 'Service',
      '@id'         => 'https://rahsolutionsllc.com/services/garden-maintenance/#service',
      'name'        => 'Garden Maintenance',
      'description' => 'Professional garden bed maintenance including weeding, deadheading, perennial division, edging, and seasonal plant care for residential properties in Edgerton, Stoughton, Janesville, and Madison, WI.',
      'provider'    => ['@type' => 'LocalBusiness', '@id' => 'https://rahsolutionsllc.com/#business'],
      'areaServed'  => [
        ['@type' => 'City', 'name' => 'Edgerton'],
        ['@type' => 'City', 'name' => 'Stoughton'],
        ['@type' => 'City', 'name' => 'Janesville'],
        ['@type' => 'City', 'name' => 'Madison'],
      ],
      'serviceType' => 'Garden Maintenance',
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
   Garden Maintenance — Page-Specific Styles (gm-)
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
.breadcrumb-list li a:hover { color: var(--color-accent); }
.breadcrumb-list li.current {
  color: var(--color-accent);
  font-weight: 600;
}
.breadcrumb-sep {
  color: rgba(255,255,255,0.3);
  font-size: var(--font-size-xs);
}

/* ── Inner Hero ───────────────────────────────────────────── */
.gm-hero {
  position: relative;
  min-height: 60vh;
  display: flex;
  align-items: center;
  overflow: hidden;
  background-image: url('https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963898405-wb12tf-509629996_122253717212208320_4867801287963445550_n.jpg');
  background-size: cover;
  background-position: center;
  animation: gm-kenburns 20s ease-in-out infinite alternate;
}
@keyframes gm-kenburns {
  from { background-size: 110%; background-position: center 30%; }
  to   { background-size: 122%; background-position: center 50%; }
}
.gm-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(
    135deg,
    rgba(var(--color-primary-rgb), 0.88) 0%,
    rgba(var(--color-primary-rgb), 0.52) 60%,
    rgba(var(--color-accent-rgb), 0.18) 100%
  );
  z-index: 1;
}
.gm-hero::after {
  content: '';
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noise)' opacity='0.04'/%3E%3C/svg%3E");
  z-index: 2;
  pointer-events: none;
}
.gm-hero-inner {
  position: relative;
  z-index: 3;
  padding: var(--space-4xl) 0 var(--space-3xl);
}
.gm-eyebrow {
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
.gm-eyebrow::before {
  content: '';
  display: block;
  width: 28px;
  height: 2px;
  background: var(--color-accent);
  flex-shrink: 0;
}
.gm-hero h1 {
  font-family: var(--font-heading);
  font-size: clamp(2.2rem, 5vw, 3.8rem);
  font-weight: 700;
  line-height: 1.1;
  text-wrap: balance;
  letter-spacing: -0.02em;
  margin-bottom: var(--space-md);
  background: linear-gradient(135deg, #ffffff 0%, rgba(var(--color-accent-rgb), 0.9) 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
}
.gm-hero-sub {
  font-size: var(--font-size-lg);
  color: rgba(255,255,255,0.82);
  max-width: 52ch;
  line-height: 1.6;
  margin-bottom: var(--space-xl);
}
.gm-hero-ctas {
  display: flex;
  gap: var(--space-md);
  flex-wrap: wrap;
  align-items: center;
}
.gm-btn-primary {
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
.gm-btn-primary:hover { transform: translateY(-2px); box-shadow: 0 6px 0 var(--color-accent-dark); }
.gm-btn-primary:active { transform: translateY(2px); box-shadow: 0 2px 0 var(--color-accent-dark); }
.gm-btn-secondary {
  display: inline-flex;
  align-items: center;
  gap: var(--space-sm);
  background: transparent;
  color: #ffffff;
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
.gm-btn-secondary:hover { background: rgba(255,255,255,0.12); border-color: rgba(255,255,255,0.8); }
.gm-hero-trust {
  display: flex;
  align-items: center;
  gap: var(--space-lg);
  margin-top: var(--space-xl);
  flex-wrap: wrap;
}
.gm-trust-item {
  display: flex;
  align-items: center;
  gap: var(--space-xs);
  font-size: var(--font-size-sm);
  color: rgba(255,255,255,0.75);
  font-weight: 600;
}
.gm-trust-item i { color: var(--color-accent); }

/* ── Ticker ───────────────────────────────────────────────── */
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
  top: 0; bottom: 0;
  width: 80px;
  z-index: 2;
  pointer-events: none;
}
.ticker-strip::before { left: 0; background: linear-gradient(to right, var(--color-primary), transparent); }
.ticker-strip::after  { right: 0; background: linear-gradient(to left,  var(--color-primary), transparent); }
.ticker-track {
  display: flex;
  width: max-content;
  animation: ticker-scroll 32s linear infinite;
}
.ticker-track:hover { animation-play-state: paused; }
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
  color: #ffffff;
  padding: 0 var(--space-xl);
}
.ticker-sep { color: var(--color-accent); font-size: 1.2rem; line-height: 1; }

/* ── Dividers ─────────────────────────────────────────────── */
.divider-wrap { display: block; line-height: 0; overflow: hidden; }
.divider-wrap svg { display: block; width: 100%; }

/* ── Section Eyebrow ──────────────────────────────────────── */
.gm-section-eyebrow {
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
.gm-section-eyebrow::after {
  content: '';
  display: block;
  width: 24px;
  height: 2px;
  background: var(--color-accent);
}

/* ── Service Detail ───────────────────────────────────────── */
.gm-detail {
  padding: var(--space-4xl) 0 var(--space-3xl);
  background: var(--color-bg);
}
.gm-detail-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-3xl);
  align-items: center;
}
.gm-detail-content { order: 1; }
.gm-detail-image   { order: 2; }
.gm-detail h2 {
  font-family: var(--font-heading);
  font-size: clamp(1.8rem, 3.5vw, 2.6rem);
  font-weight: 700;
  line-height: 1.15;
  text-wrap: balance;
  letter-spacing: -0.02em;
  color: var(--color-primary);
  margin-bottom: var(--space-lg);
}
.gm-detail p {
  font-size: var(--font-size-base);
  color: var(--color-text-light);
  line-height: 1.7;
  max-width: 65ch;
  margin-bottom: var(--space-md);
}
.gm-detail p:last-of-type { margin-bottom: var(--space-xl); }
.gm-updated {
  font-size: var(--font-size-sm);
  color: var(--color-gray);
  font-style: italic;
}
.gm-image-frame {
  position: relative;
  border-radius: var(--radius-lg);
  overflow: hidden;
  box-shadow: var(--shadow-xl);
}
.gm-image-frame::before {
  content: '';
  position: absolute;
  inset: 0;
  border: 3px solid rgba(var(--color-accent-rgb), 0.25);
  border-radius: var(--radius-lg);
  z-index: 2;
  pointer-events: none;
}
.gm-image-frame picture img {
  width: 100%;
  height: 420px;
  object-fit: cover;
  display: block;
  transition: transform var(--transition-slow);
}
.gm-image-frame:hover picture img { transform: scale(1.03); }
.gm-image-badge {
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
.gm-btn-detail {
  display: inline-flex;
  align-items: center;
  gap: var(--space-sm);
  background: var(--color-primary);
  color: #ffffff;
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
.gm-btn-detail:hover { transform: translateY(-2px); box-shadow: 0 6px 0 var(--color-primary-dark); }
.gm-btn-detail:active { transform: translateY(2px); box-shadow: 0 2px 0 var(--color-primary-dark); }

/* ── SIGNATURE: Stats Band ────────────────────────────────── */
.gm-stats-band {
  background: var(--color-bg-dark);
  padding: var(--space-3xl) 0;
  position: relative;
  overflow: hidden;
}
.gm-stats-band::before {
  content: '';
  position: absolute;
  top: -60px; left: -60px;
  width: 320px; height: 320px;
  border-radius: 50%;
  background: rgba(var(--color-accent-rgb), 0.06);
  pointer-events: none;
}
.gm-stats-band::after {
  content: '';
  position: absolute;
  bottom: -80px; right: -40px;
  width: 400px; height: 400px;
  border-radius: 50%;
  background: rgba(var(--color-accent-rgb), 0.04);
  pointer-events: none;
}
.gm-stats-inner { position: relative; z-index: 1; }
.gm-stats-label {
  text-align: center;
  font-family: var(--font-body);
  font-size: var(--font-size-sm);
  font-weight: 700;
  letter-spacing: 0.12em;
  text-transform: uppercase;
  color: var(--color-accent);
  margin-bottom: var(--space-2xl);
}
.gm-stats-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: var(--space-xl);
}
.gm-stat-item {
  text-align: center;
  padding: var(--space-xl);
  border: 1px solid rgba(var(--color-accent-rgb), 0.15);
  border-radius: var(--radius-lg);
  background: rgba(255,255,255,0.03);
  transition: border-color var(--transition-base), background var(--transition-base);
}
.gm-stat-item:hover {
  border-color: rgba(var(--color-accent-rgb), 0.35);
  background: rgba(var(--color-accent-rgb), 0.05);
}
.gm-stat-number {
  font-family: var(--font-heading);
  font-size: clamp(2.2rem, 4vw, 3.2rem);
  font-weight: 700;
  color: var(--color-accent);
  line-height: 1;
  margin-bottom: var(--space-xs);
  letter-spacing: -0.02em;
}
.gm-stat-label {
  font-size: var(--font-size-sm);
  color: rgba(255,255,255,0.65);
  line-height: 1.4;
  max-width: 18ch;
  margin: 0 auto;
}

/* ── Mid CTA Banner ───────────────────────────────────────── */
.gm-cta-mid {
  position: relative;
  padding: var(--space-3xl) 0;
  background: linear-gradient(135deg, var(--color-primary) 0%, var(--color-primary-dark) 100%);
  overflow: hidden;
}
.gm-cta-mid::after {
  content: '';
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noise)' opacity='0.04'/%3E%3C/svg%3E");
  pointer-events: none;
  z-index: 0;
}
.gm-cta-mid .container { position: relative; z-index: 1; text-align: center; }
.gm-cta-eyebrow {
  display: inline-block;
  font-family: var(--font-body);
  font-size: var(--font-size-sm);
  font-weight: 700;
  letter-spacing: 0.12em;
  text-transform: uppercase;
  color: var(--color-accent);
  margin-bottom: var(--space-sm);
}
.gm-cta-mid h2 {
  font-family: var(--font-heading);
  font-size: clamp(1.8rem, 4vw, 2.8rem);
  font-weight: 700;
  text-wrap: balance;
  letter-spacing: -0.02em;
  color: #ffffff;
  margin-bottom: var(--space-md);
}
.gm-cta-mid > .container > p {
  font-size: var(--font-size-lg);
  color: rgba(255,255,255,0.8);
  max-width: 55ch;
  margin: 0 auto var(--space-xl);
  line-height: 1.6;
}
.gm-cta-actions {
  display: flex;
  justify-content: center;
  align-items: center;
  gap: var(--space-md);
  flex-wrap: wrap;
}
.gm-btn-cta-phone {
  display: inline-flex;
  align-items: center;
  gap: var(--space-sm);
  background: #ffffff;
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
.gm-btn-cta-phone:hover { transform: translateY(-2px); box-shadow: var(--shadow-xl); }
.gm-btn-cta-est {
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
.gm-btn-cta-est:hover { transform: translateY(-2px); box-shadow: 0 6px 0 var(--color-accent-dark); }
.gm-btn-cta-est:active { transform: translateY(2px); box-shadow: 0 2px 0 var(--color-accent-dark); }

/* ── Why Choose ───────────────────────────────────────────── */
.gm-why {
  padding: var(--space-4xl) 0;
  background: var(--color-bg-alt);
}
.gm-why-header { text-align: center; margin-bottom: var(--space-3xl); }
.gm-why h2 {
  font-family: var(--font-heading);
  font-size: clamp(1.8rem, 3.5vw, 2.6rem);
  font-weight: 700;
  text-wrap: balance;
  letter-spacing: -0.02em;
  color: var(--color-primary);
  margin-bottom: var(--space-sm);
}
.gm-why .sub {
  font-size: var(--font-size-lg);
  color: var(--color-text-light);
  max-width: 55ch;
  margin: 0 auto;
}
.gm-why-cards {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: var(--space-lg);
}
.gm-why-card {
  background: var(--color-bg);
  border-radius: var(--radius-lg);
  padding: var(--space-xl) var(--space-lg);
  box-shadow: var(--shadow-card);
  transition: transform var(--transition-base), box-shadow var(--transition-base), background var(--transition-base);
  position: relative;
  overflow: hidden;
}
.gm-why-card::before {
  content: '';
  position: absolute;
  top: 0; left: 0; right: 0;
  height: 3px;
  background: var(--color-accent);
  transform: scaleX(0);
  transform-origin: left;
  transition: transform var(--transition-base);
}
.gm-why-card:hover { transform: translateY(-6px); box-shadow: var(--shadow-xl); background: var(--color-primary); }
.gm-why-card:hover::before { transform: scaleX(1); }
.gm-why-card:hover .gm-why-title,
.gm-why-card:hover .gm-why-text { color: rgba(255,255,255,0.9); }
.gm-why-card:hover .gm-why-icon {
  background: rgba(var(--color-accent-rgb), 0.2);
  color: var(--color-accent);
}
.gm-why-icon {
  width: 52px; height: 52px;
  border-radius: var(--radius-md);
  background: rgba(var(--color-accent-rgb), 0.1);
  display: flex;
  align-items: center;
  justify-content: center;
  color: var(--color-accent);
  margin-bottom: var(--space-md);
  transition: background var(--transition-base), color var(--transition-base);
}
.gm-why-title {
  font-family: var(--font-heading);
  font-size: var(--font-size-xl);
  font-weight: 600;
  text-wrap: balance;
  color: var(--color-primary);
  margin-bottom: var(--space-sm);
  transition: color var(--transition-base);
}
.gm-why-text {
  font-size: var(--font-size-sm);
  color: var(--color-text-light);
  line-height: 1.6;
  transition: color var(--transition-base);
}

/* ── Process ──────────────────────────────────────────────── */
.gm-process {
  padding: var(--space-4xl) 0;
  background: var(--color-bg);
}
.gm-process-header { text-align: center; margin-bottom: var(--space-3xl); }
.gm-process h2 {
  font-family: var(--font-heading);
  font-size: clamp(1.8rem, 3.5vw, 2.6rem);
  font-weight: 700;
  text-wrap: balance;
  letter-spacing: -0.02em;
  color: var(--color-primary);
  margin-bottom: var(--space-sm);
}
.gm-process .sub {
  font-size: var(--font-size-lg);
  color: var(--color-text-light);
  max-width: 55ch;
  margin: 0 auto;
}
.gm-process-steps {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: var(--space-lg);
  position: relative;
}
.gm-process-steps::before {
  content: '';
  position: absolute;
  top: 32px;
  left: calc(12.5% + 26px);
  right: calc(12.5% + 26px);
  height: 2px;
  background: linear-gradient(to right, var(--color-accent), rgba(var(--color-accent-rgb), 0.2));
  pointer-events: none;
}
.gm-step { text-align: center; padding: var(--space-lg); }
.gm-step-num {
  width: 64px; height: 64px;
  border-radius: 50%;
  background: var(--color-primary);
  color: #ffffff;
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
.gm-step:hover .gm-step-num {
  background: var(--color-accent);
  border-color: var(--color-accent);
  color: var(--color-bg-dark);
}
.gm-step-title {
  font-family: var(--font-heading);
  font-size: var(--font-size-lg);
  font-weight: 600;
  text-wrap: balance;
  color: var(--color-primary);
  margin-bottom: var(--space-sm);
}
.gm-step-desc {
  font-size: var(--font-size-sm);
  color: var(--color-text-light);
  line-height: 1.6;
  max-width: 22ch;
  margin: 0 auto;
}

/* ── FAQ ──────────────────────────────────────────────────── */
.gm-faq {
  padding: var(--space-4xl) 0;
  background: var(--color-bg-alt);
}
.gm-faq-header { text-align: center; margin-bottom: var(--space-3xl); }
.gm-faq h2 {
  font-family: var(--font-heading);
  font-size: clamp(1.8rem, 3.5vw, 2.6rem);
  font-weight: 700;
  text-wrap: balance;
  letter-spacing: -0.02em;
  color: var(--color-primary);
  margin-bottom: var(--space-sm);
}
.gm-faq .sub {
  font-size: var(--font-size-lg);
  color: var(--color-text-light);
  max-width: 55ch;
  margin: 0 auto;
}
.gm-faq-list {
  max-width: 800px;
  margin: 0 auto;
  display: flex;
  flex-direction: column;
  gap: var(--space-md);
}
.gm-faq-item {
  background: var(--color-bg);
  border-radius: var(--radius-md);
  box-shadow: var(--shadow-sm);
  border: 1px solid rgba(var(--color-primary-rgb), 0.08);
  overflow: hidden;
}
.gm-faq-item summary {
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
.gm-faq-item summary::-webkit-details-marker { display: none; }
.gm-faq-item summary::after {
  content: '+';
  font-size: 1.4rem;
  color: var(--color-accent);
  flex-shrink: 0;
  transition: transform var(--transition-base);
}
.gm-faq-item[open] summary::after { transform: rotate(45deg); }
.gm-faq-item[open] summary { color: var(--color-accent); }
.gm-faq-answer {
  padding: 0 var(--space-xl) var(--space-lg);
  font-size: var(--font-size-base);
  color: var(--color-text-light);
  line-height: 1.7;
  max-width: 65ch;
}

/* ── Closing CTA ──────────────────────────────────────────── */
.gm-closing {
  padding: var(--space-4xl) 0;
  background: var(--color-bg);
  text-align: center;
}
.gm-closing h2 {
  font-family: var(--font-heading);
  font-size: clamp(1.8rem, 3.5vw, 2.6rem);
  font-weight: 700;
  text-wrap: balance;
  letter-spacing: -0.02em;
  color: var(--color-primary);
  margin-bottom: var(--space-md);
}
.gm-closing p {
  font-size: var(--font-size-lg);
  color: var(--color-text-light);
  max-width: 55ch;
  margin: 0 auto var(--space-xl);
  line-height: 1.6;
}
.gm-closing-actions {
  display: flex;
  justify-content: center;
  gap: var(--space-md);
  flex-wrap: wrap;
}
.gm-btn-closing-primary {
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
.gm-btn-closing-primary:hover { transform: translateY(-2px); box-shadow: 0 6px 0 var(--color-accent-dark); }
.gm-btn-closing-phone {
  display: inline-flex;
  align-items: center;
  gap: var(--space-sm);
  background: var(--color-primary);
  color: #ffffff;
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
.gm-btn-closing-phone:hover { transform: translateY(-2px); box-shadow: 0 6px 0 var(--color-primary-dark); }

/* ── Responsive ───────────────────────────────────────────── */
@media (max-width: 1023px) {
  .gm-stats-grid    { grid-template-columns: repeat(2, 1fr); }
  .gm-why-cards     { grid-template-columns: repeat(2, 1fr); }
  .gm-process-steps { grid-template-columns: repeat(2, 1fr); }
  .gm-process-steps::before { display: none; }
}
@media (max-width: 767px) {
  .gm-detail-grid   { grid-template-columns: 1fr; }
  .gm-detail-image  { order: -1; }
  .gm-image-frame picture img { height: 280px; }
  .gm-stats-grid    { grid-template-columns: repeat(2, 1fr); gap: var(--space-md); }
  .gm-why-cards     { grid-template-columns: 1fr; }
  .gm-process-steps { grid-template-columns: 1fr; }
  .gm-hero-ctas     { flex-direction: column; align-items: flex-start; }
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
        <li class="current" aria-current="page">Garden Maintenance</li>
      </ol>
    </div>
  </nav>

  <!-- ── Inner Hero ─────────────────────────────────────────── -->
  <section class="gm-hero" aria-label="Garden Maintenance Services">
    <div class="container gm-hero-inner">
      <span class="gm-eyebrow">
        <i data-lucide="flower-2" aria-hidden="true" style="width:14px;height:14px;"></i>
        Bed Maintenance &amp; Plant Care
      </span>
      <h1>Garden Maintenance Services in Edgerton, WI</h1>
      <p class="gm-hero-sub">Monthly garden programs from $60/hour — weeding, deadheading, perennial division, bed edging, and pest monitoring that keep your beds looking sharp from May through October.</p>
      <div class="gm-hero-ctas">
        <a href="tel:6085015123" class="gm-btn-primary">
          <i data-lucide="phone" aria-hidden="true" style="width:18px;height:18px;"></i>
          Call (608) 501-5123
        </a>
        <a href="/contact" class="gm-btn-secondary">Get a Free Estimate</a>
      </div>
      <div class="gm-hero-trust">
        <span class="gm-trust-item">
          <i data-lucide="shield-check" aria-hidden="true"></i> Licensed &amp; Insured
        </span>
        <span class="gm-trust-item">
          <i data-lucide="star" aria-hidden="true"></i> 4.9-Star Rated
        </span>
        <span class="gm-trust-item">
          <i data-lucide="calendar-range" aria-hidden="true"></i> Monthly Programs Available
        </span>
      </div>
    </div>
  </section>

  <!-- ── Proof Ticker Strip ─────────────────────────────────── -->
  <div class="ticker-strip" aria-hidden="true">
    <div class="ticker-track">
      <span class="ticker-item">Weeding &amp; Deadheading<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">Perennial Division<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">Monthly Programs Available<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">Licensed &amp; Insured<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">Free Estimates<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">Edgerton · Stoughton · Madison · Janesville<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">Pest &amp; Disease Monitoring<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">Seasonal Transitions Included<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">Weeding &amp; Deadheading<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">Perennial Division<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">Monthly Programs Available<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">Licensed &amp; Insured<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">Free Estimates<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">Edgerton · Stoughton · Madison · Janesville<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">Pest &amp; Disease Monitoring<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">Seasonal Transitions Included<span class="ticker-sep">✦</span></span>
    </div>
  </div>

  <!-- ── Divider ────────────────────────────────────────────── -->
  <div class="divider-wrap" aria-hidden="true">
    <svg viewBox="0 0 1200 40" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
      <polygon points="0,0 1200,40 1200,40 0,40" fill="#ffffff"/>
    </svg>
  </div>

  <!-- ── Service Detail Section ─────────────────────────────── -->
  <section class="gm-detail" data-animate="fade-up">
    <div class="container">
      <div class="gm-detail-grid">
        <div class="gm-detail-content">
          <span class="gm-section-eyebrow">What We Do</span>
          <h2>What Garden Bed Care Keeps Up With Wisconsin's Growing Season?</h2>

          <p>Garden maintenance in Edgerton starts at $60/hour, with monthly program visits typically running 1–3 hours depending on bed size and plant complexity. Monthly programs run April through October. Every visit includes weeding, deadheading spent blooms, bed edge sharpening against lawn borders, and a visual check for pest and disease symptoms that need early attention.</p>

          <p>Wisconsin's growing season throws specific challenges at Edgerton garden beds that a non-local service wouldn't spot. Japanese beetles peak in July and can strip rose and linden foliage in days — catching them early means far less plant stress. Powdery mildew thrives in wet, humid summers and spreads quickly through phlox and monarda beds if left unchecked. Deer pressure is significant near the wooded corridors along the Rock River and in neighborhoods bordering farmland west of town. We know what to look for and when to look for it.</p>

          <p>A seasonal care calendar for Edgerton gardens looks like this: Spring (April–May) covers debris cleanup, division of overcrowded perennials, bed edge re-establishment, and a mulch top-dress for the growing season. Summer (June–August) is weed pressure management, deadheading to extend bloom cycles, water stress monitoring during dry stretches, and pest and disease intervention as needed. Fall (September–October) covers cutback of perennials, dividing fall-blooming plants, and a protective mulch layer before Wisconsin's first hard frost — which typically arrives in Edgerton in mid to late October.</p>

          <p>Monthly programs are the most cost-effective approach because they prevent the expensive catch-up work that comes from letting beds go 8–10 weeks between visits. A bed maintained monthly stays manageable in 1–2 hours per visit. A bed neglected through summer may need 4–6 hours of corrective work before it can go back on a maintenance schedule.</p>

          <p class="gm-updated">Last Updated: April 2026 · Serving Edgerton, WI and surrounding Rock &amp; Dane County communities.</p>

          <a href="/contact" class="gm-btn-detail">
            <i data-lucide="calendar-range" aria-hidden="true" style="width:18px;height:18px;"></i>
            Start a Monthly Program
          </a>
        </div>

        <div class="gm-detail-image">
          <div class="gm-image-frame">
            <picture>
              <source srcset="https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963898405-wb12tf-509629996_122253717212208320_4867801287963445550_n.jpg" type="image/webp">
              <img
                src="https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963898405-wb12tf-509629996_122253717212208320_4867801287963445550_n.jpg"
                alt="Professional garden maintenance and bed care Edgerton Wisconsin"
                width="600"
                height="420"
                loading="lazy"
              >
            </picture>
            <span class="gm-image-badge">Edgerton, WI</span>
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

  <!-- ── SIGNATURE: Stats Band ──────────────────────────────── -->
  <section class="gm-stats-band" aria-label="Garden maintenance service statistics">
    <div class="container gm-stats-inner">
      <p class="gm-stats-label">R.A.H. Solutions — Garden Maintenance by the Numbers</p>
      <div class="gm-stats-grid">
        <div class="gm-stat-item" data-animate="fade-up">
          <div class="gm-stat-number">$60<span style="font-size:1.5rem;">/hr</span></div>
          <div class="gm-stat-label">Starting hourly rate for garden maintenance</div>
        </div>
        <div class="gm-stat-item" data-animate="fade-up">
          <div class="gm-stat-number">Monthly</div>
          <div class="gm-stat-label">Programs available all growing season</div>
        </div>
        <div class="gm-stat-item" data-animate="fade-up">
          <div class="gm-stat-number">3+</div>
          <div class="gm-stat-label">Years serving Edgerton, WI gardens</div>
        </div>
        <div class="gm-stat-item" data-animate="fade-up">
          <div class="gm-stat-number">4.9★</div>
          <div class="gm-stat-label">Average rating across 47 customer reviews</div>
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
  <section class="gm-cta-mid" aria-label="Start a garden maintenance program">
    <div class="container">
      <p class="gm-cta-eyebrow">Monthly Programs · Free First Assessment</p>
      <h2>Why Shouldn't Beds That Look Good in June Look Abandoned by August?</h2>
      <p>Consistent monthly visits prevent the weed pressure and plant decline that make gardens a chore. R.A.H. Solutions handles Edgerton garden beds all season — you just enjoy the results.</p>
      <div class="gm-cta-actions">
        <a href="tel:6085015123" class="gm-btn-cta-phone">
          <i data-lucide="phone" aria-hidden="true" style="width:20px;height:20px;"></i>
          (608) 501-5123
        </a>
        <a href="/contact" class="gm-btn-cta-est">Get a Free Estimate</a>
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
  <section class="gm-why" data-animate="fade-up">
    <div class="container">
      <div class="gm-why-header">
        <span class="gm-section-eyebrow">Why R.A.H. Solutions</span>
        <h2>What Is Garden Care That Goes Beyond Pulling Weeds?</h2>
        <p class="sub">We treat your beds as a plant community — managing for long-term health, not just making things look tidy on the day of the visit.</p>
      </div>
      <div class="gm-why-cards">
        <div class="gm-why-card" data-tilt data-tilt-max="6" data-tilt-speed="400" data-tilt-glare data-tilt-max-glare="0.12">
          <div class="gm-why-icon">
            <i data-lucide="sun" aria-hidden="true" style="width:24px;height:24px;"></i>
          </div>
          <h3 class="gm-why-title">Seasonal Plant Care Calendar</h3>
          <p class="gm-why-text">Spring division, summer weed management, fall cutback and mulch — we follow a full seasonal program, not just a mow-and-go approach.</p>
        </div>
        <div class="gm-why-card" data-tilt data-tilt-max="6" data-tilt-speed="400" data-tilt-glare data-tilt-max-glare="0.12">
          <div class="gm-why-icon">
            <i data-lucide="bug" aria-hidden="true" style="width:24px;height:24px;"></i>
          </div>
          <h3 class="gm-why-title">Pest &amp; Disease Early Detection</h3>
          <p class="gm-why-text">Japanese beetles, powdery mildew, aphid pressure — we spot problems at the start, when a simple intervention prevents serious plant loss.</p>
        </div>
        <div class="gm-why-card" data-tilt data-tilt-max="6" data-tilt-speed="400" data-tilt-glare data-tilt-max-glare="0.12">
          <div class="gm-why-icon">
            <i data-lucide="pencil-ruler" aria-hidden="true" style="width:24px;height:24px;"></i>
          </div>
          <h3 class="gm-why-title">Bed Edge Sharpening Included</h3>
          <p class="gm-why-text">A clean, sharp edge between lawn and bed transforms how your property reads from the street. We include this on every maintenance visit.</p>
        </div>
        <div class="gm-why-card" data-tilt data-tilt-max="6" data-tilt-speed="400" data-tilt-glare data-tilt-max-glare="0.12">
          <div class="gm-why-icon">
            <i data-lucide="git-merge" aria-hidden="true" style="width:24px;height:24px;"></i>
          </div>
          <h3 class="gm-why-title">Perennial Division &amp; Spacing</h3>
          <p class="gm-why-text">Overcrowded hostas, daylilies, and ornamental grasses stop performing well. We divide and redistribute them so every plant has room to thrive.</p>
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
  <section class="gm-process" data-animate="fade-up">
    <div class="container">
      <div class="gm-process-header">
        <span class="gm-section-eyebrow">How It Works</span>
        <h2>What Are the Four Steps from First Visit to Full-Season Coverage?</h2>
        <p class="sub">Starting a garden maintenance program is simple — a quick assessment, a clear plan, and consistent visits that keep your beds in top shape.</p>
      </div>
      <div class="gm-process-steps">
        <div class="gm-step">
          <div class="gm-step-num">1</div>
          <h3 class="gm-step-title">Garden Assessment</h3>
          <p class="gm-step-desc">We document what's planted, identify problem areas, and note any beds that need corrective work before monthly programs begin.</p>
        </div>
        <div class="gm-step">
          <div class="gm-step-num">2</div>
          <h3 class="gm-step-title">Seasonal Care Plan</h3>
          <p class="gm-step-desc">We outline what each visit will include for spring, summer, and fall — so you know exactly what to expect each month.</p>
        </div>
        <div class="gm-step">
          <div class="gm-step-num">3</div>
          <h3 class="gm-step-title">Regular Maintenance Visits</h3>
          <p class="gm-step-desc">Monthly visits covering weeding, deadheading, edging, pest monitoring, and seasonal plant care tasks appropriate to the time of year.</p>
        </div>
        <div class="gm-step">
          <div class="gm-step-num">4</div>
          <h3 class="gm-step-title">Seasonal Transitions</h3>
          <p class="gm-step-desc">Spring prep and fall closeout visits ensure your beds start clean and end protected — mulched and ready for Wisconsin winters.</p>
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
  <section class="gm-faq" data-animate="fade-up">
    <div class="container">
      <div class="gm-faq-header">
        <span class="gm-section-eyebrow">Common Questions</span>
        <h2>What Are Garden Maintenance Questions Edgerton Homeowners Ask?</h2>
        <p class="sub">What's included, how often to schedule visits, and what to expect from a professional garden maintenance program.</p>
      </div>
      <div class="gm-faq-list">
        <details class="gm-faq-item">
          <summary>What does garden maintenance include?</summary>
          <div class="gm-faq-answer">
            <p>R.A.H. Solutions garden maintenance covers weeding, deadheading spent blooms to extend flowering, dividing overgrown perennials, sharpening bed edges against lawn borders, monitoring plants for pest and disease symptoms, and light pruning of shrubs within beds. Seasonal visits include spring bed cleanup and division, summer weed and pest management, and fall cutback with protective mulch top-dressing before Wisconsin winters.</p>
          </div>
        </details>
        <details class="gm-faq-item">
          <summary>How often should garden beds be maintained?</summary>
          <div class="gm-faq-answer">
            <p>Most residential garden beds in Edgerton benefit from maintenance visits every 4–6 weeks during the active growing season (May through September). Monthly programs keep weed pressure manageable, maintain plant health, and prevent the kind of overgrowth that requires expensive corrective work. Some clients with aggressive weed pressure or large bed areas schedule visits every 3 weeks during peak summer.</p>
          </div>
        </details>
        <details class="gm-faq-item">
          <summary>Do you handle weed control in garden beds?</summary>
          <div class="gm-faq-answer">
            <p>Yes — weeding is one of the core tasks in every garden maintenance visit. We hand-pull weeds including roots to prevent immediate regrowth, and we can apply pre-emergent treatments at seasonal transitions to reduce new weed germination. Consistent monthly maintenance is the most effective weed management strategy — letting beds go 8–10 weeks between visits allows weed seed banks to establish and makes catch-up work significantly harder.</p>
          </div>
        </details>
        <details class="gm-faq-item">
          <summary>Can you take over maintenance of an existing garden?</summary>
          <div class="gm-faq-answer">
            <p>Yes — taking over existing gardens is common. We start with a garden assessment visit to document what's planted, identify any problem areas (overcrowded perennials, invasive weeds, disease-prone plants), and develop a care plan. Beds that have been neglected for one or more seasons may require a first-visit cleanup to bring them to a maintainable baseline before starting a monthly program.</p>
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
  <section class="gm-closing" data-animate="fade-up">
    <div class="container">
      <span class="gm-section-eyebrow" style="justify-content:center;">Start Your Garden Program</span>
      <h2>Why Do Your Beds Deserve More Than a Once-a-Season Cleanup?</h2>
      <p>Call R.A.H. Solutions to schedule a free garden assessment. We'll walk your beds, document what's there, and put together a monthly program that actually works for your yard and schedule.</p>
      <div class="gm-closing-actions">
        <a href="tel:6085015123" class="gm-btn-closing-phone">
          <i data-lucide="phone" aria-hidden="true" style="width:20px;height:20px;"></i>
          (608) 501-5123
        </a>
        <a href="/contact" class="gm-btn-closing-primary">
          <i data-lucide="calendar-range" aria-hidden="true" style="width:20px;height:20px;"></i>
          Get a Free Estimate
        </a>
      </div>
    </div>
  </section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
