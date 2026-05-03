<?php
// ============================================================
// Accessibility Statement — R.A.H. Solutions, LLC
// ============================================================
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$companyName       = $siteName;
$companyEntityType = $entityType;
$companyState      = $stateOfFormation;
$companyEmail      = $contactEmail;
$companyPhone      = $contactPhone;
$companyAddress    = $businessAddress;
$lastUpdated       = 'April 24, 2026';

$pageTitle       = 'Accessibility Statement | ' . $siteName;
$pageDescription = 'Accessibility statement for R.A.H. Solutions, LLC — our commitment to WCAG 2.1 AA conformance and digital accessibility for all users.';
$canonicalUrl    = $siteUrl . '/accessibility/';
// SEO: {"@context":"https://schema.org"} — schema and <link rel="canonical"> rendered via head.php
$currentPage     = 'legal';

$schemaMarkup = json_encode([
  '@context' => 'https://schema.org',
  '@graph'   => [
    [
      '@type'       => 'WebPage',
      'name'        => 'Accessibility Statement',
      'url'         => $siteUrl . '/accessibility/',
      'description' => $pageDescription,
      'publisher'   => ['@type' => 'Organization', 'name' => $companyName],
    ],
    [
      '@type'           => 'BreadcrumbList',
      'itemListElement' => [
        ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home',          'item' => $siteUrl . '/'],
        ['@type' => 'ListItem', 'position' => 2, 'name' => 'Accessibility', 'item' => $siteUrl . '/accessibility/'],
      ],
    ],
  ],
], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);

$heroPreload = $heroImageUrl;
include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<style>
.legal-hero {
  min-height: 40vh;
  display: flex;
  align-items: center;
  justify-content: center;
  background:
    linear-gradient(135deg, rgba(var(--color-primary-rgb), 0.85) 0%, rgba(15,30,45,0.80) 100%),
    url('https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963874866-f077by-471177305_122202492170208320_1592970065814584229_n.jpg') center/cover no-repeat;
  color: #fff;
  text-align: center;
  padding: var(--space-3xl) var(--space-lg);
  position: relative;
  overflow: hidden;
}
.legal-hero::after {
  content: '';
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noise)' opacity='0.04'/%3E%3C/svg%3E");
  pointer-events: none;
}
.legal-hero h1 {
  font-family: var(--font-heading);
  font-size: clamp(2rem, 5vw, 3rem);
  font-weight: 800;
  letter-spacing: -0.02em;
  text-wrap: balance;
  position: relative;
  z-index: 1;
}
.legal-content { background: var(--color-bg); padding: var(--space-3xl) 0 var(--space-4xl); }
.content-narrow {
  max-width: 720px;
  margin: 0 auto;
  padding: 0 var(--space-xl);
  line-height: 1.7;
  color: var(--color-text);
}
.content-narrow h2 {
  font-family: var(--font-heading);
  font-size: clamp(1.2rem, 2.5vw, 1.5rem);
  font-weight: 700;
  color: var(--color-primary);
  margin-top: var(--space-3xl);
  padding-bottom: var(--space-sm);
  border-bottom: 1px solid rgba(var(--color-primary-rgb), 0.1);
}
.content-narrow h3 { font-family: var(--font-heading); font-size: 1.1rem; font-weight: 700; color: var(--color-primary); margin-top: var(--space-xl); }
.content-narrow p { margin-bottom: var(--space-md); }
.content-narrow ul { padding-left: var(--space-xl); margin-bottom: var(--space-md); }
.content-narrow li { margin-bottom: var(--space-xs); }
.content-narrow a { color: var(--color-accent); text-decoration: underline; }
.legal-updated { font-size: 0.9rem; color: var(--color-text-light); margin-bottom: var(--space-2xl); padding-bottom: var(--space-md); border-bottom: 1px solid rgba(var(--color-primary-rgb), 0.08); }
.a11y-badge {
  display: inline-flex;
  align-items: center;
  gap: var(--space-sm);
  background: rgba(var(--color-accent-rgb), 0.1);
  border: 1px solid rgba(var(--color-accent-rgb), 0.25);
  border-radius: var(--radius-md);
  padding: var(--space-sm) var(--space-md);
  font-size: 0.9rem;
  font-weight: 700;
  color: var(--color-primary);
  margin-bottom: var(--space-xl);
}
</style>

  <nav aria-label="Breadcrumb" style="background:var(--color-bg-dark);padding:var(--space-sm) 0;">
    <div class="container">
      <ol style="display:flex;align-items:center;gap:var(--space-xs);list-style:none;flex-wrap:wrap;font-size:var(--font-size-sm);color:rgba(255,255,255,0.55);">
        <li><a href="/" style="color:rgba(255,255,255,0.7);">Home</a></li>
        <li aria-hidden="true" style="color:rgba(255,255,255,0.3);">›</li>
        <li style="color:var(--color-accent);font-weight:600;" aria-current="page">Accessibility</li>
      </ol>
    </div>
  </nav>

  <section class="legal-hero" aria-label="Accessibility Statement">
    <h1>Accessibility Statement</h1>
  </section>

  <section class="legal-content">
    <div class="content-narrow">
      <p class="legal-updated"><strong>Last Updated:</strong> <?php echo $lastUpdated; ?></p>

      <div class="a11y-badge">
        <span>Target: WCAG 2.1 Level AA</span>
      </div>

      <h2>Our Commitment</h2>
      <p><?php echo htmlspecialchars($companyName); ?> is committed to ensuring digital accessibility for people with disabilities. We continually work to improve the user experience of our website and aim to conform to the Web Content Accessibility Guidelines (WCAG) 2.1 Level AA standards.</p>

      <h2>Accessibility Features</h2>
      <p>We have implemented the following accessibility features on our website:</p>
      <ul>
        <li><strong>Semantic HTML5 structure</strong> — proper use of headings, landmarks, lists, and structural elements for screen reader compatibility</li>
        <li><strong>Skip-to-content link</strong> — allows keyboard users to bypass navigation and jump directly to main content</li>
        <li><strong>ARIA labels and landmarks</strong> — descriptive labels on interactive elements and ARIA landmarks for navigation regions</li>
        <li><strong>Full keyboard navigation</strong> — all interactive elements are operable via keyboard</li>
        <li><strong>Visible focus indicators</strong> — clear visual focus outlines on all interactive elements when navigating with a keyboard</li>
        <li><strong>WCAG AA color contrast</strong> — minimum 4.5:1 contrast ratio for body text and 3:1 for large text</li>
        <li><strong>Descriptive alt text</strong> — all informational images include descriptive alternative text</li>
        <li><strong>Responsive zoom up to 200%</strong> — content remains usable and readable when zoomed to 200%</li>
        <li><strong><code>prefers-reduced-motion</code> media query</strong> — animations are disabled or reduced for users who prefer reduced motion</li>
        <li><strong>Form labels associated with inputs</strong> — all form fields have programmatically associated labels</li>
        <li><strong>Mobile-responsive design</strong> — site adapts to all device sizes and orientations</li>
      </ul>

      <h2>Known Limitations</h2>
      <p>Despite our best efforts, some areas of the website may not be fully accessible:</p>
      <ul>
        <li><strong>Third-party content:</strong> Embedded content such as Google Maps may not fully conform to WCAG 2.1 AA standards. We are working with third-party providers to address these limitations.</li>
        <li><strong>PDF documents:</strong> Any PDF documents linked from this website may not be fully accessible. Please contact us and we will provide the information in an alternative format.</li>
      </ul>

      <h2>Feedback</h2>
      <p>We welcome your feedback on the accessibility of our website. If you encounter accessibility barriers or have suggestions for improvement, please contact us:</p>
      <ul>
        <li>Email: <a href="mailto:<?php echo htmlspecialchars($companyEmail); ?>"><?php echo htmlspecialchars($companyEmail); ?></a></li>
        <li>Phone: <a href="tel:<?php echo htmlspecialchars($phone); ?>"><?php echo htmlspecialchars($companyPhone); ?></a></li>
      </ul>
      <p>We aim to respond to accessibility feedback within 5 business days.</p>

      <h2>Enforcement</h2>
      <p>We recognize your rights under the Americans with Disabilities Act (ADA), Section 508 of the Rehabilitation Act, and applicable state accessibility laws. If you believe that your rights have been violated, you may file a complaint with the appropriate enforcement agency or contact us directly so we can address your concerns.</p>
    </div>
  </section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
