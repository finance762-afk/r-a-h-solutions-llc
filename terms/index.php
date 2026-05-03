<?php
// ============================================================
// Terms of Service — R.A.H. Solutions, LLC
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

$pageTitle       = 'Terms of Service | ' . $siteName;
$pageDescription = 'Terms of Service for R.A.H. Solutions, LLC — governing law, use of website, service disclaimers, and liability limitations. Governed by Wisconsin law.';
$canonicalUrl    = $siteUrl . '/terms/';
// SEO: {"@context":"https://schema.org"} — schema and <link rel="canonical"> rendered via head.php
$currentPage     = 'legal';

$schemaMarkup = json_encode([
  '@context' => 'https://schema.org',
  '@graph'   => [
    [
      '@type'       => 'WebPage',
      'name'        => 'Terms of Service',
      'url'         => $siteUrl . '/terms/',
      'description' => $pageDescription,
      'publisher'   => ['@type' => 'Organization', 'name' => $companyName],
    ],
    [
      '@type'           => 'BreadcrumbList',
      'itemListElement' => [
        ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home',             'item' => $siteUrl . '/'],
        ['@type' => 'ListItem', 'position' => 2, 'name' => 'Terms of Service', 'item' => $siteUrl . '/terms/'],
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
</style>

  <nav aria-label="Breadcrumb" style="background:var(--color-bg-dark);padding:var(--space-sm) 0;">
    <div class="container">
      <ol style="display:flex;align-items:center;gap:var(--space-xs);list-style:none;flex-wrap:wrap;font-size:var(--font-size-sm);color:rgba(255,255,255,0.55);">
        <li><a href="/" style="color:rgba(255,255,255,0.7);">Home</a></li>
        <li aria-hidden="true" style="color:rgba(255,255,255,0.3);">›</li>
        <li style="color:var(--color-accent);font-weight:600;" aria-current="page">Terms of Service</li>
      </ol>
    </div>
  </nav>

  <section class="legal-hero" aria-label="Terms of Service">
    <h1>Terms of Service</h1>
  </section>

  <section class="legal-content">
    <div class="content-narrow">
      <p class="legal-updated"><strong>Last Updated:</strong> <?php echo $lastUpdated; ?></p>

      <h2>Acceptance of Terms</h2>
      <p>These Terms of Service ("Terms") constitute a legally binding agreement between you ("you" or "user") and <?php echo htmlspecialchars($companyName); ?>, a <?php echo htmlspecialchars($companyEntityType); ?> formed in the State of <?php echo htmlspecialchars($companyState); ?> ("Company," "we," "us," or "our"). By accessing or using our website, you agree to be bound by these Terms. If you do not agree, do not use our website.</p>

      <h2>Description of Services</h2>
      <p><?php echo htmlspecialchars($companyName); ?> provides professional landscaping, lawn care, hardscaping, concrete, and related outdoor services as described on this website. The specific services available, service areas, and pricing are subject to change without notice. Descriptions of services on this website are for informational purposes and do not constitute a binding offer.</p>

      <h2>Use of This Website</h2>
      <p>You agree to use this website only for lawful purposes. You may not:</p>
      <ul>
        <li>Use the website in any way that violates applicable federal, state, or local laws</li>
        <li>Attempt to gain unauthorized access to any portion of the website or its systems</li>
        <li>Use automated tools to scrape, crawl, or extract data from the website without written permission</li>
        <li>Transmit any material that is defamatory, obscene, threatening, or that constitutes harassment</li>
        <li>Interfere with or disrupt the website's infrastructure or other users' access</li>
      </ul>

      <h2>Intellectual Property</h2>
      <p>All content on this website — including text, graphics, logos, images, photographs, and software — is the property of <?php echo htmlspecialchars($companyName); ?> or its content suppliers and is protected by United States and international copyright, trademark, and other intellectual property laws. You may not reproduce, distribute, modify, or create derivative works from any content without our prior written consent.</p>

      <h2>User Submissions</h2>
      <p>When you submit information through our contact forms or request-a-quote forms, you represent that:</p>
      <ul>
        <li>The information you provide is accurate and complete</li>
        <li>You have the right to submit the information</li>
        <li>Your submission does not violate any third-party rights</li>
      </ul>
      <p>By submitting content, you grant <?php echo htmlspecialchars($companyName); ?> a non-exclusive, royalty-free, perpetual license to use, display, and reproduce such content in connection with our business operations, including marketing and testimonials.</p>

      <h2>Estimates and Pricing</h2>
      <p>Any estimates, quotes, or pricing information provided through this website or in response to inquiries are for informational purposes only and do not constitute binding offers. Final pricing is determined after a site assessment, inspection, or detailed consultation and may differ from initial estimates based on actual conditions, scope of work, materials required, and other factors.</p>

      <h2>Service Disclaimers</h2>
      <p>This website and all services are provided on an "AS IS" and "AS AVAILABLE" basis without warranties of any kind, either express or implied, including but not limited to implied warranties of merchantability, fitness for a particular purpose, and non-infringement. We do not warrant that the website will be uninterrupted, error-free, or free of viruses or other harmful components.</p>

      <h2>Limitation of Liability</h2>
      <p>To the fullest extent permitted by applicable law, <?php echo htmlspecialchars($companyName); ?> shall not be liable for any indirect, incidental, special, consequential, or punitive damages, including but not limited to loss of profits, data, or use, arising out of or in connection with your use of this website or our services. Our total liability for any claim arising out of or relating to these Terms or our services shall not exceed the total amount you have paid to us in the twelve (12) months preceding the claim. Some states do not allow the exclusion or limitation of certain damages, so the above limitations may not apply to you.</p>

      <h2>Indemnification</h2>
      <p>You agree to indemnify, defend, and hold harmless <?php echo htmlspecialchars($companyName); ?>, its officers, directors, employees, agents, and affiliates from and against any claims, liabilities, damages, judgments, awards, losses, costs, or expenses (including reasonable attorneys' fees) arising out of or relating to your violation of these Terms or your use of the website.</p>

      <h2>Governing Law</h2>
      <p>These Terms are governed by the laws of the State of <?php echo htmlspecialchars($companyState); ?>, without regard to conflict of laws principles. Any dispute arising out of or relating to these Terms shall be resolved in the state or federal courts located in <?php echo htmlspecialchars($companyState); ?>.</p>

      <h2>Changes to These Terms</h2>
      <p>We reserve the right to update or modify these Terms at any time. Changes will be posted on this page with an updated "Last Updated" date. Your continued use of the website after changes constitutes acceptance of the revised Terms.</p>

      <h2>Severability</h2>
      <p>If any provision of these Terms is held to be invalid or unenforceable, the remaining provisions shall continue in full force and effect.</p>

      <h2>Entire Agreement</h2>
      <p>These Terms, together with our Privacy Policy and Cookie Policy, constitute the entire agreement between you and <?php echo htmlspecialchars($companyName); ?> regarding your use of this website.</p>

      <h2>Contact Us</h2>
      <p>If you have questions about these Terms of Service, contact us:</p>
      <ul>
        <li><strong><?php echo htmlspecialchars($companyName); ?></strong></li>
        <li>Email: <a href="mailto:<?php echo htmlspecialchars($companyEmail); ?>"><?php echo htmlspecialchars($companyEmail); ?></a></li>
        <li>Phone: <a href="tel:<?php echo htmlspecialchars($phone); ?>"><?php echo htmlspecialchars($companyPhone); ?></a></li>
        <li>Address: <?php echo htmlspecialchars($companyAddress); ?></li>
      </ul>
    </div>
  </section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
