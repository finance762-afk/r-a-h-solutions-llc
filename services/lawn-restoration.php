<?php
// ============================================================
// R.A.H. Solutions, LLC — services/lawn-restoration.php
// Service Page | Standard Tier
// ============================================================

$pageTitle       = 'Lawn Restoration in Edgerton, WI';
$pageDescription = 'Lawn restoration in Edgerton, WI — core aeration, overseeding & soil amendment for bare or grub-damaged turf. R.A.H. Solutions. Free estimates. (608) 501-5123.';
$canonicalUrl    = 'https://rahsolutionsllc.com/services/lawn-restoration';
// SEO: {"@context":"https://schema.org"} — schema and <link rel="canonical"> rendered via head.php
$ogImage         = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963897215-2h4a0d-512659884_122253684104208320_1892119159010734985_n.jpg';
$currentPage     = 'services';
$heroPreload     = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963897215-2h4a0d-512659884_122253684104208320_1892119159010734985_n.jpg';

$pageFaqs = [
  [
    'q' => 'When is the best time to overseed in Wisconsin?',
    'a' => 'Late August through mid-September is the prime overseeding window in the Edgerton area. Soil temperatures are still warm enough for germination (above 50°F), fall rains reduce irrigation demands, and new grass establishes before winter dormancy. Spring overseeding is possible but competes with weed pressure and summer heat stress.',
  ],
  [
    'q' => 'How long does lawn restoration take to show results?',
    'a' => 'Germination begins in 7–14 days for ryegrass and fescue, 14–21 days for Kentucky bluegrass. You\'ll see meaningful coverage within 4–6 weeks of a fall overseeding. Full density — where it looks like a finished lawn — typically develops by the following spring after the restored lawn\'s first winter.',
  ],
  [
    'q' => 'Can a completely dead lawn be restored, or does it need to be replaced with sod?',
    'a' => 'It depends on the cause and extent of damage. Drought stress, grub damage up to 50% coverage, and thin, weedy lawns are excellent overseeding candidates. Lawns with widespread fungal disease, severe compaction from construction, or more than 60% dead coverage are usually better candidates for sod installation. We assess every lawn and give you an honest recommendation.',
  ],
  [
    'q' => 'Do I need to aerate before overseeding my lawn?',
    'a' => 'Core aeration before overseeding dramatically improves results — especially in the clay soils common around Edgerton. Aeration opens channels for seed-to-soil contact, reduces compaction, and allows nutrients to reach roots. We typically combine aeration and overseeding in a single visit for efficiency and the best germination rates.',
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
        ['@type' => 'ListItem', 'position' => 3, 'name' => 'Lawn Restoration', 'item' => 'https://rahsolutionsllc.com/services/lawn-restoration'],
      ],
    ],
    [
      '@type'       => 'Service',
      '@id'         => 'https://rahsolutionsllc.com/services/lawn-restoration/#service',
      'name'        => 'Lawn Restoration',
      'description' => 'Complete lawn restoration in Edgerton, WI including core aeration, overseeding, thatch removal, soil amendment for compacted Wisconsin clay lawns, and a 4-week post-restoration care program.',
      'provider'    => ['@type' => 'LocalBusiness', '@id' => 'https://rahsolutionsllc.com/#business'],
      'areaServed'  => [
        ['@type' => 'City', 'name' => 'Edgerton'],
        ['@type' => 'City', 'name' => 'Stoughton'],
        ['@type' => 'City', 'name' => 'Janesville'],
        ['@type' => 'City', 'name' => 'Madison'],
      ],
      'serviceType' => 'Lawn Restoration',
      'offers'      => [
        '@type'       => 'Offer',
        'description' => 'Lawn restoration starting at $250–$600 for average residential lot',
      ],
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
   LAWN RESTORATION — Page-Specific Styles
   Standard Tier | 200+ lines
   Signature: Stats band on dark background (3 key numbers)
   ============================================================ */

/* ── Hero ─────────────────────────────────────────────────── */
.rest-hero {
  position: relative;
  min-height: 85vh;
  display: flex;
  align-items: flex-end;
  background-image: url('https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963897215-2h4a0d-512659884_122253684104208320_1892119159010734985_n.jpg');
  background-size: cover;
  background-position: center 40%;
  animation: kenburns-rest 24s ease-in-out infinite alternate;
}
@keyframes kenburns-rest {
  from { background-size: 110%; background-position: center 40%; }
  to   { background-size: 125%; background-position: center 60%; }
}
.rest-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(
    to top,
    rgba(var(--color-primary-rgb), 0.9) 0%,
    rgba(var(--color-primary-rgb), 0.6) 45%,
    rgba(var(--color-primary-rgb), 0.2) 100%
  );
  z-index: 1;
}
.rest-hero::after {
  content: '';
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noise)' opacity='0.04'/%3E%3C/svg%3E");
  z-index: 2;
  pointer-events: none;
}
.rest-hero__inner {
  position: relative;
  z-index: 3;
  width: 100%;
  max-width: var(--max-width, 1200px);
  margin-inline: auto;
  padding: var(--space-4xl, 96px) var(--space-lg, 24px) var(--space-3xl, 64px);
}
.rest-hero__breadcrumb {
  display: flex;
  align-items: center;
  gap: var(--space-sm, 8px);
  margin-bottom: var(--space-xl, 32px);
  font-family: var(--font-body);
  font-size: var(--font-size-sm, 0.875rem);
  color: rgba(255,255,255,0.7);
}
.rest-hero__breadcrumb a { color: rgba(255,255,255,0.7); transition: color var(--transition-fast, 0.15s ease); }
.rest-hero__breadcrumb a:hover { color: var(--color-accent); }
.rest-hero__breadcrumb-sep { color: rgba(255,255,255,0.35); }
.rest-hero__eyebrow {
  display: inline-flex;
  align-items: center;
  gap: var(--space-sm, 8px);
  background: rgba(var(--color-accent-rgb, 6,182,212), 0.15);
  border: 1px solid rgba(var(--color-accent-rgb, 6,182,212), 0.4);
  color: var(--color-accent);
  font-family: var(--font-body);
  font-size: var(--font-size-xs, 0.75rem);
  font-weight: 700;
  letter-spacing: 0.12em;
  text-transform: uppercase;
  padding: var(--space-xs, 4px) var(--space-md, 16px);
  border-radius: var(--radius-xl, 24px);
  margin-bottom: var(--space-lg, 24px);
}
.rest-hero__title {
  font-family: var(--font-heading);
  font-size: clamp(2.4rem, 5.5vw, 4rem);
  font-weight: 700;
  line-height: 1.1;
  letter-spacing: -0.02em;
  text-wrap: balance;
  color: #fff;
  max-width: 20ch;
  margin-bottom: var(--space-lg, 24px);
  background: linear-gradient(135deg, #fff 0%, var(--color-accent) 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
}
.rest-hero__sub {
  font-family: var(--font-body);
  font-size: clamp(1rem, 2vw, 1.2rem);
  color: rgba(255,255,255,0.85);
  max-width: 55ch;
  line-height: 1.7;
  margin-bottom: var(--space-2xl, 48px);
}
.rest-hero__actions {
  display: flex;
  align-items: center;
  flex-wrap: wrap;
  gap: var(--space-md, 16px);
}
.rest-hero__trust {
  display: flex;
  gap: var(--space-xl, 32px);
  margin-top: var(--space-2xl, 48px);
  flex-wrap: wrap;
}
.rest-hero__trust-item {
  font-family: var(--font-body);
  font-size: var(--font-size-sm, 0.875rem);
  color: rgba(255,255,255,0.8);
  display: flex;
  align-items: center;
  gap: var(--space-xs, 4px);
}
.rest-hero__trust-item i { color: var(--color-accent); }

/* ── Ticker ──────────────────────────────────────────────── */
.rest-ticker {
  background: var(--color-primary);
  overflow: hidden;
  padding: var(--space-md, 16px) 0;
  border-top: 2px solid var(--color-accent);
  border-bottom: 2px solid rgba(var(--color-accent-rgb, 6,182,212), 0.3);
}
.rest-ticker__track {
  display: flex;
  width: max-content;
  animation: rest-ticker-scroll 30s linear infinite;
}
.rest-ticker__track:hover { animation-play-state: paused; }
@keyframes rest-ticker-scroll {
  from { transform: translateX(0); }
  to   { transform: translateX(-50%); }
}
.rest-ticker__item {
  display: inline-flex;
  align-items: center;
  gap: var(--space-md, 16px);
  padding-inline: var(--space-2xl, 48px);
  color: #fff;
  font-family: var(--font-body);
  font-size: var(--font-size-xs, 0.75rem);
  font-weight: 700;
  letter-spacing: 0.1em;
  text-transform: uppercase;
  white-space: nowrap;
}
.rest-ticker__sep { color: var(--color-accent); }

/* ── Detail Section ──────────────────────────────────────── */
.rest-detail {
  background: var(--color-bg);
  padding: var(--space-4xl, 96px) var(--space-lg, 24px);
}
.rest-detail__inner {
  max-width: var(--max-width, 1200px);
  margin-inline: auto;
  display: grid;
  grid-template-columns: 3fr 2fr;
  gap: var(--space-3xl, 64px);
  align-items: start;
}
.rest-eyebrow {
  display: inline-flex;
  align-items: center;
  gap: var(--space-sm, 8px);
  color: var(--color-accent);
  font-family: var(--font-body);
  font-size: var(--font-size-xs, 0.75rem);
  font-weight: 700;
  letter-spacing: 0.12em;
  text-transform: uppercase;
  margin-bottom: var(--space-md, 16px);
}
.rest-heading {
  font-family: var(--font-heading);
  font-size: clamp(1.8rem, 3.5vw, 2.6rem);
  font-weight: 700;
  line-height: 1.15;
  letter-spacing: -0.02em;
  text-wrap: balance;
  color: var(--color-primary);
  margin-bottom: var(--space-lg, 24px);
}
.rest-text {
  font-family: var(--font-body);
  font-size: var(--font-size-base, 1rem);
  color: var(--color-text-light);
  line-height: 1.72;
  max-width: 65ch;
  margin-bottom: var(--space-lg, 24px);
}
.rest-img-block {
  border-radius: var(--radius-lg, 16px);
  overflow: hidden;
  box-shadow: var(--shadow-xl);
  aspect-ratio: 3/4;
}
.rest-img-block img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
}
.rest-services-list {
  list-style: none;
  display: flex;
  flex-direction: column;
  gap: var(--space-sm, 8px);
  margin-bottom: var(--space-xl, 32px);
}
.rest-services-list li {
  display: flex;
  align-items: flex-start;
  gap: var(--space-sm, 8px);
  font-family: var(--font-body);
  font-size: var(--font-size-base, 1rem);
  color: var(--color-text-light);
  line-height: 1.5;
}
.rest-services-list li i { color: var(--color-accent); flex-shrink: 0; margin-top: 3px; }

/* ── SIGNATURE SECTION: Stats Band on Dark Background ────── */
.rest-stats {
  background: var(--color-bg-dark);
  padding: var(--space-3xl, 64px) var(--space-lg, 24px);
  position: relative;
  overflow: hidden;
}
.rest-stats::before {
  content: '';
  position: absolute;
  top: 0; left: 0; right: 0;
  height: 3px;
  background: linear-gradient(90deg, var(--color-accent) 0%, rgba(var(--color-accent-rgb, 6,182,212), 0.2) 100%);
}
.rest-stats__inner {
  max-width: var(--max-width, 1200px);
  margin-inline: auto;
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: var(--space-xl, 32px);
  text-align: center;
}
.rest-stats__item {}
.rest-stats__num {
  font-family: var(--font-heading);
  font-size: clamp(3rem, 6vw, 5rem);
  font-weight: 700;
  color: var(--color-accent);
  line-height: 1;
  margin-bottom: var(--space-sm, 8px);
  letter-spacing: -0.02em;
}
.rest-stats__label {
  font-family: var(--font-body);
  font-size: var(--font-size-sm, 0.875rem);
  color: rgba(255,255,255,0.75);
  line-height: 1.4;
  text-transform: uppercase;
  letter-spacing: 0.08em;
  font-weight: 700;
}
.rest-stats__divider {
  width: 1px;
  background: rgba(255,255,255,0.12);
  align-self: center;
  height: 60px;
  display: none;
}

/* ── Mid CTA Banner ──────────────────────────────────────── */
.rest-cta-mid {
  position: relative;
  overflow: hidden;
  padding: var(--space-4xl, 96px) var(--space-lg, 24px);
  background: linear-gradient(135deg, var(--color-primary) 0%, var(--color-primary-dark) 100%);
}
.rest-cta-mid::after {
  content: '';
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noise)' opacity='0.04'/%3E%3C/svg%3E");
  pointer-events: none;
}
.rest-cta-mid__inner {
  position: relative;
  z-index: 1;
  max-width: var(--max-width, 1200px);
  margin-inline: auto;
  display: grid;
  grid-template-columns: 1fr auto;
  gap: var(--space-3xl, 64px);
  align-items: center;
}
.rest-cta-mid__text-col {}
.rest-cta-mid__eyebrow {
  font-family: var(--font-body);
  font-size: var(--font-size-xs, 0.75rem);
  font-weight: 700;
  letter-spacing: 0.14em;
  text-transform: uppercase;
  color: var(--color-accent);
  margin-bottom: var(--space-sm, 8px);
}
.rest-cta-mid__heading {
  font-family: var(--font-heading);
  font-size: clamp(1.6rem, 3vw, 2.4rem);
  font-weight: 700;
  color: #fff;
  text-wrap: balance;
  line-height: 1.15;
  letter-spacing: -0.02em;
  margin-bottom: var(--space-md, 16px);
}
.rest-cta-mid__sub {
  font-family: var(--font-body);
  color: rgba(255,255,255,0.78);
  font-size: var(--font-size-base, 1rem);
  line-height: 1.65;
  max-width: 48ch;
}
.rest-cta-mid__action-col {
  text-align: center;
  min-width: 200px;
}
.rest-cta-mid__phone {
  display: block;
  font-family: var(--font-heading);
  font-size: clamp(1.6rem, 3vw, 2.4rem);
  font-weight: 700;
  color: var(--color-accent);
  letter-spacing: 0.02em;
  margin-bottom: var(--space-lg, 24px);
  text-decoration: none;
  transition: opacity var(--transition-fast, 0.15s ease);
  white-space: nowrap;
}
.rest-cta-mid__phone:hover { opacity: 0.82; }

/* ── Why Choose ──────────────────────────────────────────── */
.rest-why {
  background: var(--color-bg-alt);
  padding: var(--space-4xl, 96px) var(--space-lg, 24px);
}
.rest-why__inner {
  max-width: var(--max-width, 1200px);
  margin-inline: auto;
}
.rest-why__header {
  text-align: center;
  margin-bottom: var(--space-3xl, 64px);
}
.rest-why__heading {
  font-family: var(--font-heading);
  font-size: clamp(1.8rem, 3.5vw, 2.6rem);
  font-weight: 700;
  line-height: 1.15;
  letter-spacing: -0.02em;
  text-wrap: balance;
  color: var(--color-primary);
  margin-bottom: var(--space-md, 16px);
}
.rest-why__sub {
  font-family: var(--font-body);
  color: var(--color-text-light);
  font-size: var(--font-size-lg, 1.125rem);
  max-width: 52ch;
  margin-inline: auto;
  line-height: 1.65;
}
.rest-why__cards {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: var(--space-lg, 24px);
}
.rest-why__card {
  background: var(--color-bg);
  border-radius: var(--radius-lg, 16px);
  padding: var(--space-xl, 32px);
  box-shadow: var(--shadow-md);
  border-left: 4px solid var(--color-accent);
  transition: transform var(--transition-base, 0.25s ease), box-shadow var(--transition-base, 0.25s ease);
  display: flex;
  gap: var(--space-lg, 24px);
  align-items: flex-start;
}
.rest-why__card:hover { transform: translateY(-4px); box-shadow: var(--shadow-xl); }
.rest-why__card-icon {
  width: 44px;
  height: 44px;
  flex-shrink: 0;
  background: rgba(var(--color-accent-rgb, 6,182,212), 0.1);
  border-radius: var(--radius-md, 8px);
  display: flex;
  align-items: center;
  justify-content: center;
  color: var(--color-accent);
  transition: transform var(--transition-base, 0.25s ease);
}
.rest-why__card:hover .rest-why__card-icon { transform: scale(1.12) rotate(-5deg); }
.rest-why__card-body {}
.rest-why__card-title {
  font-family: var(--font-heading);
  font-size: clamp(1rem, 2vw, 1.25rem);
  font-weight: 700;
  color: var(--color-primary);
  text-wrap: balance;
  margin-bottom: var(--space-xs, 4px);
  letter-spacing: -0.01em;
}
.rest-why__card-text {
  font-family: var(--font-body);
  font-size: var(--font-size-sm, 0.875rem);
  color: var(--color-text-light);
  line-height: 1.65;
  max-width: 42ch;
}

/* ── Process ─────────────────────────────────────────────── */
.rest-process {
  background: var(--color-bg);
  padding: var(--space-4xl, 96px) var(--space-lg, 24px);
}
.rest-process__inner {
  max-width: var(--max-width, 1200px);
  margin-inline: auto;
}
.rest-process__header {
  text-align: center;
  margin-bottom: var(--space-3xl, 64px);
}
.rest-process__heading {
  font-family: var(--font-heading);
  font-size: clamp(1.8rem, 3.5vw, 2.6rem);
  font-weight: 700;
  line-height: 1.15;
  letter-spacing: -0.02em;
  text-wrap: balance;
  color: var(--color-primary);
  margin-bottom: var(--space-md, 16px);
}
.rest-process__grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: var(--space-lg, 24px);
}
.rest-process__step {
  background: var(--color-bg-alt);
  border-radius: var(--radius-lg, 16px);
  padding: var(--space-xl, 32px) var(--space-lg, 24px);
  text-align: center;
  border-bottom: 3px solid var(--color-accent);
  transition: transform var(--transition-base, 0.25s ease), box-shadow var(--transition-base, 0.25s ease);
}
.rest-process__step:hover { transform: translateY(-5px); box-shadow: var(--shadow-xl); }
.rest-process__num {
  font-family: var(--font-heading);
  font-size: 2.5rem;
  font-weight: 700;
  color: var(--color-accent);
  line-height: 1;
  margin-bottom: var(--space-md, 16px);
  opacity: 0.6;
}
.rest-process__step-title {
  font-family: var(--font-heading);
  font-size: clamp(1rem, 2vw, 1.2rem);
  font-weight: 700;
  color: var(--color-primary);
  text-wrap: balance;
  margin-bottom: var(--space-sm, 8px);
}
.rest-process__step-text {
  font-family: var(--font-body);
  font-size: var(--font-size-sm, 0.875rem);
  color: var(--color-text-light);
  line-height: 1.65;
}

/* ── FAQ ─────────────────────────────────────────────────── */
.rest-faq {
  background: var(--color-bg-alt);
  padding: var(--space-4xl, 96px) var(--space-lg, 24px);
}
.rest-faq__inner {
  max-width: 800px;
  margin-inline: auto;
}
.rest-faq__eyebrow {
  text-align: center;
  color: var(--color-accent);
  font-family: var(--font-body);
  font-size: var(--font-size-xs, 0.75rem);
  font-weight: 700;
  letter-spacing: 0.12em;
  text-transform: uppercase;
  margin-bottom: var(--space-md, 16px);
}
.rest-faq__heading {
  font-family: var(--font-heading);
  font-size: clamp(1.8rem, 3.5vw, 2.4rem);
  font-weight: 700;
  color: var(--color-primary);
  text-wrap: balance;
  text-align: center;
  margin-bottom: var(--space-3xl, 64px);
  line-height: 1.15;
  letter-spacing: -0.02em;
}
.rest-faq__item {
  border-bottom: 1px solid var(--color-light);
  padding: var(--space-xl, 32px) 0;
}
.rest-faq__item:first-of-type { border-top: 1px solid var(--color-light); }
.rest-faq__q {
  font-family: var(--font-heading);
  font-size: clamp(1rem, 2vw, 1.2rem);
  font-weight: 700;
  color: var(--color-primary);
  text-wrap: balance;
  margin-bottom: var(--space-md, 16px);
}
.rest-faq__a {
  font-family: var(--font-body);
  font-size: var(--font-size-base, 1rem);
  color: var(--color-text-light);
  line-height: 1.72;
  max-width: 65ch;
}

/* ── Closing CTA ─────────────────────────────────────────── */
.rest-cta-close {
  background: var(--color-bg-dark);
  padding: var(--space-4xl, 96px) var(--space-lg, 24px);
  text-align: center;
  position: relative;
  overflow: hidden;
}
.rest-cta-close::after {
  content: '';
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noise)' opacity='0.04'/%3E%3C/svg%3E");
  pointer-events: none;
}
.rest-cta-close__inner {
  position: relative;
  z-index: 1;
  max-width: 700px;
  margin-inline: auto;
}
.rest-cta-close__heading {
  font-family: var(--font-heading);
  font-size: clamp(1.8rem, 4vw, 2.8rem);
  font-weight: 700;
  color: #fff;
  text-wrap: balance;
  margin-bottom: var(--space-md, 16px);
  line-height: 1.15;
  letter-spacing: -0.02em;
}
.rest-cta-close__text {
  font-family: var(--font-body);
  color: rgba(255,255,255,0.75);
  font-size: var(--font-size-lg, 1.125rem);
  line-height: 1.65;
  max-width: 52ch;
  margin-inline: auto;
  margin-bottom: var(--space-2xl, 48px);
}
.rest-cta-close__actions {
  display: flex;
  justify-content: center;
  gap: var(--space-md, 16px);
  flex-wrap: wrap;
  margin-bottom: var(--space-lg, 24px);
}
.rest-cta-close__meta {
  font-family: var(--font-body);
  font-size: var(--font-size-sm, 0.875rem);
  color: rgba(255,255,255,0.55);
}

/* ── Responsive ──────────────────────────────────────────── */
@media (max-width: 1023px) {
  .rest-detail__inner { grid-template-columns: 1fr; }
  .rest-cta-mid__inner { grid-template-columns: 1fr; text-align: center; }
  .rest-cta-mid__sub { max-width: 100%; }
  .rest-why__cards { grid-template-columns: 1fr; }
  .rest-process__grid { grid-template-columns: repeat(2, 1fr); }
  .rest-stats__inner { grid-template-columns: 1fr; gap: var(--space-2xl, 48px); }
}
@media (max-width: 767px) {
  .rest-hero { min-height: 72vh; }
  .rest-process__grid { grid-template-columns: 1fr; }
  .rest-why__card { flex-direction: column; }
  .rest-cta-close__actions { flex-direction: column; align-items: center; }
}
</style>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

<!-- ── Hero ──────────────────────────────────────────────── -->
<section class="rest-hero" aria-labelledby="rest-hero-heading">
  <div class="rest-hero__inner">

    <nav aria-label="Breadcrumb">
      <ol class="rest-hero__breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList">
        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
          <a href="/" itemprop="item"><span itemprop="name">Home</span></a>
          <meta itemprop="position" content="1">
        </li>
        <span class="rest-hero__breadcrumb-sep" aria-hidden="true">/</span>
        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
          <a href="/services" itemprop="item"><span itemprop="name">Services</span></a>
          <meta itemprop="position" content="2">
        </li>
        <span class="rest-hero__breadcrumb-sep" aria-hidden="true">/</span>
        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
          <span itemprop="name">Lawn Restoration</span>
          <meta itemprop="position" content="3">
        </li>
      </ol>
    </nav>

    <div class="rest-hero__eyebrow">
      <i data-lucide="repeat-2" style="width:14px;height:14px;" aria-hidden="true"></i>
      Lawn Restoration — Edgerton, WI
    </div>

    <h1 id="rest-hero-heading" class="rest-hero__title">Lawn Restoration Services in Edgerton, WI — Revive Your Damaged Lawn</h1>

    <p class="rest-hero__sub">Bare patches, grub damage, compacted clay, or drought stress — your lawn can recover. We combine core aeration and overseeding in a single visit, matched to Wisconsin's fall germination window, and follow up with a 4-week care program so results actually hold.</p>

    <div class="rest-hero__actions">
      <a href="/contact" class="btn-primary">Get a Free Lawn Assessment</a>
      <a href="tel:6085015123" class="btn-secondary" style="background:rgba(255,255,255,0.1);border:2px solid rgba(255,255,255,0.35);color:#fff;">
        <i data-lucide="phone" style="width:16px;height:16px;" aria-hidden="true"></i>
        (608) 501-5123
      </a>
    </div>

    <div class="rest-hero__trust">
      <div class="rest-hero__trust-item"><i data-lucide="leaf" style="width:15px;height:15px;" aria-hidden="true"></i> Fall overseeding specialists</div>
      <div class="rest-hero__trust-item"><i data-lucide="star" style="width:15px;height:15px;" aria-hidden="true"></i> 4.9-star rated</div>
      <div class="rest-hero__trust-item"><i data-lucide="shield-check" style="width:15px;height:15px;" aria-hidden="true"></i> Licensed &amp; insured</div>
    </div>

  </div>
</section>

<!-- ── Ticker ─────────────────────────────────────────────── -->
<div class="rest-ticker" aria-hidden="true">
  <div class="rest-ticker__track">
    <span class="rest-ticker__item">Core aeration + overseeding — one visit <span class="rest-ticker__sep">✦</span></span>
    <span class="rest-ticker__item">$250–$600 for average residential lot <span class="rest-ticker__sep">✦</span></span>
    <span class="rest-ticker__item">Seed matched to your existing lawn <span class="rest-ticker__sep">✦</span></span>
    <span class="rest-ticker__item">Fall timing = Wisconsin's best germination window <span class="rest-ticker__sep">✦</span></span>
    <span class="rest-ticker__item">Edgerton · Stoughton · Janesville · Madison <span class="rest-ticker__sep">✦</span></span>
    <span class="rest-ticker__item">Free estimates — no obligation <span class="rest-ticker__sep">✦</span></span>
    <!-- Duplicate -->
    <span class="rest-ticker__item">Core aeration + overseeding — one visit <span class="rest-ticker__sep">✦</span></span>
    <span class="rest-ticker__item">$250–$600 for average residential lot <span class="rest-ticker__sep">✦</span></span>
    <span class="rest-ticker__item">Seed matched to your existing lawn <span class="rest-ticker__sep">✦</span></span>
    <span class="rest-ticker__item">Fall timing = Wisconsin's best germination window <span class="rest-ticker__sep">✦</span></span>
    <span class="rest-ticker__item">Edgerton · Stoughton · Janesville · Madison <span class="rest-ticker__sep">✦</span></span>
    <span class="rest-ticker__item">Free estimates — no obligation <span class="rest-ticker__sep">✦</span></span>
  </div>
</div>

<!-- ── Divider ────────────────────────────────────────────── -->
<div class="divider-wrap" aria-hidden="true" style="background:var(--color-primary);line-height:0;overflow:hidden;height:60px;">
  <svg viewBox="0 0 1200 60" preserveAspectRatio="none" width="100%" height="60"><polygon points="0,0 1200,60 1200,60 0,60" fill="#ffffff"/></svg>
</div>

<!-- ── Detail Section ────────────────────────────────────── -->
<section class="rest-detail" aria-labelledby="rest-detail-heading">
  <div class="rest-detail__inner">

    <div data-animate="fade-up">
      <div class="rest-eyebrow">
        <i data-lucide="clipboard-list" style="width:14px;height:14px;" aria-hidden="true"></i>
        What We Address
      </div>
      <h2 id="rest-detail-heading" class="rest-heading">When Your Lawn Needs More Than Mowing</h2>
      <p class="rest-text">A lawn with bare spots, thinning coverage, or heavy thatch isn't a cosmetic problem — it's a sign the root zone is failing. In the Edgerton area, compacted clay soil, grub cycles, and Wisconsin's harsh winters combine to stress lawns in ways that routine mowing can't fix. Lawn restoration targets the underlying cause: compaction, poor seed-to-soil contact, or soil nutrient deficiency.</p>
      <p class="rest-text">Core aeration paired with overseeding — the most effective combination for most Southern Wisconsin lawns — runs <strong>$250–$600 for a typical residential lot</strong>. That includes aeration, starter fertilizer, and seed selected to match your existing lawn species so the repair blends seamlessly.</p>
      <ul class="rest-services-list" role="list">
        <li><i data-lucide="check-circle" style="width:17px;height:17px;" aria-hidden="true"></i>Core aeration (3–4" plug depth) to break compacted clay</li>
        <li><i data-lucide="check-circle" style="width:17px;height:17px;" aria-hidden="true"></i>Power dethatch for lawns with ½"+ thatch layer</li>
        <li><i data-lucide="check-circle" style="width:17px;height:17px;" aria-hidden="true"></i>Bare spot grade repair and topsoil addition</li>
        <li><i data-lucide="check-circle" style="width:17px;height:17px;" aria-hidden="true"></i>Species-matched overseeding — no jarring color differences</li>
        <li><i data-lucide="check-circle" style="width:17px;height:17px;" aria-hidden="true"></i>Starter fertilizer for accelerated root development</li>
        <li><i data-lucide="check-circle" style="width:17px;height:17px;" aria-hidden="true"></i>Pre-emergent weed control timing strategy</li>
        <li><i data-lucide="check-circle" style="width:17px;height:17px;" aria-hidden="true"></i>4-week follow-up care schedule included</li>
      </ul>
      <a href="/contact" class="btn-primary">Schedule Your Lawn Assessment</a>
    </div>

    <div class="rest-img-block" data-animate="wipe-right">
      <picture>
        <source srcset="https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963879670-etljhr-474465615_122209560308208320_6377695377545475044_n.jpg" type="image/webp">
        <img
          src="https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963879670-etljhr-474465615_122209560308208320_6377695377545475044_n.jpg"
          alt="Lawn restoration aeration overseeding Edgerton Wisconsin R.A.H. Solutions"
          width="560"
          height="747"
          loading="lazy"
        >
      </picture>
    </div>

  </div>
</section>

<!-- SIGNATURE SECTION: Stats Band on Dark Background -->
<section class="rest-stats" aria-label="R.A.H. Solutions key statistics">
  <div class="rest-stats__inner">
    <div class="rest-stats__item" data-animate="fade-up">
      <div class="rest-stats__num">3+</div>
      <div class="rest-stats__label">Years Serving<br>Southern Wisconsin</div>
    </div>
    <div class="rest-stats__item" data-animate="fade-up">
      <div class="rest-stats__num">100+</div>
      <div class="rest-stats__label">Properties<br>Restored</div>
    </div>
    <div class="rest-stats__item" data-animate="fade-up">
      <div class="rest-stats__num">4.9★</div>
      <div class="rest-stats__label">Average Customer<br>Rating</div>
    </div>
  </div>
</section>

<!-- ── Divider ────────────────────────────────────────────── -->
<div class="divider-wrap" aria-hidden="true" style="background:var(--color-bg-dark);line-height:0;overflow:hidden;height:80px;">
  <svg viewBox="0 0 1200 80" preserveAspectRatio="none" width="100%" height="80"><path d="M0,40 C300,80 900,0 1200,40 L1200,80 L0,80 Z" fill="#1a2b3c"/></svg>
</div>

<!-- ── Mid CTA Banner ─────────────────────────────────────── -->
<section class="rest-cta-mid" aria-labelledby="rest-cta-mid-heading">
  <div class="rest-cta-mid__inner">
    <div class="rest-cta-mid__text-col">
      <div class="rest-cta-mid__eyebrow">Fall Restoration Window — August–September</div>
      <h2 id="rest-cta-mid-heading" class="rest-cta-mid__heading">Miss the Fall Window and Wait Another Year</h2>
      <p class="rest-cta-mid__sub">Wisconsin's best overseeding window closes by mid-September. Book now to lock in your restoration before soil temps drop and germination becomes unreliable.</p>
    </div>
    <div class="rest-cta-mid__action-col">
      <a href="tel:6085015123" class="rest-cta-mid__phone" aria-label="Call R.A.H. Solutions">(608) 501-5123</a>
      <a href="/contact" class="btn-primary">Get Your Free Estimate</a>
    </div>
  </div>
</section>

<!-- ── Divider ────────────────────────────────────────────── -->
<div class="divider-wrap" aria-hidden="true" style="background:var(--color-primary);line-height:0;overflow:hidden;height:60px;">
  <svg viewBox="0 0 1200 60" preserveAspectRatio="none" width="100%" height="60"><polygon points="0,60 1200,0 1200,60" fill="#f4f7f9"/></svg>
</div>

<!-- ── Why Choose ─────────────────────────────────────────── -->
<section class="rest-why" aria-labelledby="rest-why-heading">
  <div class="rest-why__inner">
    <header class="rest-why__header" data-animate="fade-up">
      <div class="rest-eyebrow" style="justify-content:center;">
        <i data-lucide="award" style="width:14px;height:14px;" aria-hidden="true"></i>
        Why R.A.H. Solutions
      </div>
      <h2 id="rest-why-heading" class="rest-why__heading">Restoration Timed to Wisconsin's Growing Season</h2>
      <p class="rest-why__sub">Generic lawn restoration misses the timing that makes all the difference in Wisconsin. Here's what sets our approach apart.</p>
    </header>
    <div class="rest-why__cards">
      <div class="rest-why__card" data-animate="fade-up">
        <div class="rest-why__card-icon"><i data-lucide="calendar" style="width:22px;height:22px;" aria-hidden="true"></i></div>
        <div class="rest-why__card-body">
          <h3 class="rest-why__card-title">Fall Timing — Wisconsin's Best Germination Window</h3>
          <p class="rest-why__card-text">We schedule overseeding in late August through mid-September when Edgerton-area soil temps stay above 50°F and fall rains reduce irrigation. Spring overseed competes with crabgrass pre-emergent — we know when NOT to seed too.</p>
        </div>
      </div>
      <div class="rest-why__card" data-animate="fade-up">
        <div class="rest-why__card-icon"><i data-lucide="combine" style="width:22px;height:22px;" aria-hidden="true"></i></div>
        <div class="rest-why__card-body">
          <h3 class="rest-why__card-title">Aeration + Overseeding in One Visit</h3>
          <p class="rest-why__card-text">We combine core aeration and overseeding into a single mobilization. The aeration plugs create perfect seedbed pockets; seed falls in, and germination rates jump significantly versus broadcast seeding on hard soil.</p>
        </div>
      </div>
      <div class="rest-why__card" data-animate="fade-up">
        <div class="rest-why__card-icon"><i data-lucide="blend" style="width:22px;height:22px;" aria-hidden="true"></i></div>
        <div class="rest-why__card-body">
          <h3 class="rest-why__card-title">Seed Matched to Your Existing Lawn Species</h3>
          <p class="rest-why__card-text">A patch that germinates in a different shade or texture looks worse than a bare spot. We identify your existing species — bluegrass, fescue, rye mix — and match the seed selection so repairs blend by the following spring.</p>
        </div>
      </div>
      <div class="rest-why__card" data-animate="fade-up">
        <div class="rest-why__card-icon"><i data-lucide="notebook-text" style="width:22px;height:22px;" aria-hidden="true"></i></div>
        <div class="rest-why__card-body">
          <h3 class="rest-why__card-title">4-Week Post-Restoration Care Program</h3>
          <p class="rest-why__card-text">We don't disappear after the seed goes down. Every restoration includes a written 4-week care schedule covering watering frequency, first mow timing, and fall fertilizer application to give new seedlings the best start.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ── Divider ────────────────────────────────────────────── -->
<div class="divider-wrap" aria-hidden="true" style="background:var(--color-bg-alt);line-height:0;overflow:hidden;height:60px;">
  <svg viewBox="0 0 1200 60" preserveAspectRatio="none" width="100%" height="60"><polygon points="0,0 1200,0 1200,60 0,60" fill="var(--color-bg)"/></svg>
</div>

<!-- ── Process ────────────────────────────────────────────── -->
<section class="rest-process" aria-labelledby="rest-process-heading">
  <div class="rest-process__inner">
    <header class="rest-process__header" data-animate="fade-up">
      <div class="rest-eyebrow" style="justify-content:center;">
        <i data-lucide="list-ordered" style="width:14px;height:14px;" aria-hidden="true"></i>
        Our Process
      </div>
      <h2 id="rest-process-heading" class="rest-process__heading">Lawn Restoration — How It Works</h2>
    </header>
    <div class="rest-process__grid">
      <div class="rest-process__step" data-animate="fade-up">
        <div class="rest-process__num">01</div>
        <h3 class="rest-process__step-title">Lawn Assessment &amp; Problem Diagnosis</h3>
        <p class="rest-process__step-text">Walk-through identifies damage type (grub, drought, disease, compaction), thatch depth, and soil drainage. We determine what restoration method fits the situation.</p>
      </div>
      <div class="rest-process__step" data-animate="fade-up">
        <div class="rest-process__num">02</div>
        <h3 class="rest-process__step-title">Soil Prep — Aerate, Dethatch, Grade</h3>
        <p class="rest-process__step-text">Core aeration, power dethatch where needed, bare spot grade repairs with topsoil. Soil prepared to maximize seed-to-soil contact for best germination.</p>
      </div>
      <div class="rest-process__step" data-animate="fade-up">
        <div class="rest-process__num">03</div>
        <h3 class="rest-process__step-title">Seed + Fertilizer Application</h3>
        <p class="rest-process__step-text">Species-matched seed broadcast at recommended rates, starter fertilizer worked into aeration channels, and initial watering initiated same day.</p>
      </div>
      <div class="rest-process__step" data-animate="fade-up">
        <div class="rest-process__num">04</div>
        <h3 class="rest-process__step-title">Follow-Up Care Schedule</h3>
        <p class="rest-process__step-text">Written 4-week program for watering, first mow height, and fall fertilizer. We stay available for questions during the critical establishment window.</p>
      </div>
    </div>
  </div>
</section>

<!-- ── Divider ────────────────────────────────────────────── -->
<div class="divider-wrap" aria-hidden="true" style="background:var(--color-bg);line-height:0;overflow:hidden;height:80px;">
  <svg viewBox="0 0 1200 80" preserveAspectRatio="none" width="100%" height="80"><path d="M0,40 C300,0 900,80 1200,40 L1200,80 L0,80 Z" fill="#f4f7f9"/></svg>
</div>

<!-- ── FAQ ────────────────────────────────────────────────── -->
<section class="rest-faq" aria-labelledby="rest-faq-heading">
  <div class="rest-faq__inner">
    <div class="rest-faq__eyebrow">Common Questions</div>
    <h2 id="rest-faq-heading" class="rest-faq__heading">Lawn Restoration FAQ — Edgerton, WI</h2>
    <?php foreach ($pageFaqs as $faq): ?>
    <div class="rest-faq__item" data-animate="fade-up">
      <h3 class="rest-faq__q"><?php echo htmlspecialchars($faq['q']); ?></h3>
      <p class="rest-faq__a"><?php echo htmlspecialchars($faq['a']); ?></p>
    </div>
    <?php endforeach; ?>
  </div>
</section>

<!-- ── Divider ────────────────────────────────────────────── -->
<div class="divider-wrap" aria-hidden="true" style="background:var(--color-bg-alt);line-height:0;overflow:hidden;height:80px;">
  <svg viewBox="0 0 1200 80" preserveAspectRatio="none" width="100%" height="80"><path d="M0,40 C300,80 900,0 1200,40 L1200,80 L0,80 Z" fill="#0f1e2d"/></svg>
</div>

<!-- ── Closing CTA ────────────────────────────────────────── -->
<section class="rest-cta-close" aria-labelledby="rest-close-heading">
  <div class="rest-cta-close__inner" data-animate="fade-up">
    <h2 id="rest-close-heading" class="rest-cta-close__heading">Stop Staring at Dead Patches — Get Your Lawn Back</h2>
    <p class="rest-cta-close__text">R.A.H. Solutions restores lawns across Edgerton, Stoughton, Janesville, and Madison. Don't wait — the fall restoration window is short, and there's no good second option until next year.</p>
    <div class="rest-cta-close__actions">
      <a href="/contact" class="btn-primary" style="font-size:1.05rem;">Get a Free Lawn Assessment</a>
      <a href="tel:6085015123" class="btn-secondary" style="background:rgba(255,255,255,0.1);border:2px solid rgba(255,255,255,0.25);color:#fff;">Call (608) 501-5123</a>
    </div>
    <div class="rest-cta-close__meta">Licensed &amp; Insured · Free Estimates · Edgerton, WI</div>
    <p style="font-family:var(--font-body);font-size:var(--font-size-xs);color:rgba(255,255,255,0.35);margin-top:var(--space-lg);">Last Updated: April 2026</p>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
