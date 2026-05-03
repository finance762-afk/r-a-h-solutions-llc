<?php
// ============================================================
// Privacy Policy — R.A.H. Solutions, LLC
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

$pageTitle       = 'Privacy Policy | ' . $siteName;
$pageDescription = 'Privacy Policy for R.A.H. Solutions — how we collect, use, and protect your information. CCPA/CPRA rights, SMS terms, and data processor disclosure.';
$canonicalUrl    = $siteUrl . '/privacy-policy/';
// SEO: {"@context":"https://schema.org"} — schema and <link rel="canonical"> rendered via head.php
$currentPage     = 'legal';

$schemaMarkup = json_encode([
  '@context' => 'https://schema.org',
  '@graph'   => [
    [
      '@type'       => 'WebPage',
      'name'        => 'Privacy Policy',
      'url'         => $siteUrl . '/privacy-policy/',
      'description' => $pageDescription,
      'publisher'   => ['@type' => 'Organization', 'name' => $companyName],
    ],
    [
      '@type'           => 'BreadcrumbList',
      'itemListElement' => [
        ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home',           'item' => $siteUrl . '/'],
        ['@type' => 'ListItem', 'position' => 2, 'name' => 'Privacy Policy', 'item' => $siteUrl . '/privacy-policy/'],
      ],
    ],
  ],
], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);

$heroPreload = $heroImageUrl;
include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<style>
/* ── Legal Page Shared Styles ─────────────────────────────── */
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
.legal-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noise)' opacity='0.04'/%3E%3C/svg%3E");
  pointer-events: none;
  z-index: 0;
}
.legal-hero::after {
  display: none;
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
.legal-content {
  background: var(--color-bg);
  padding: var(--space-3xl) 0 var(--space-4xl);
}
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
.content-narrow h3 {
  font-family: var(--font-heading);
  font-size: 1.1rem;
  font-weight: 700;
  color: var(--color-primary);
  margin-top: var(--space-xl);
}
.content-narrow p { margin-bottom: var(--space-md); }
.content-narrow ul {
  padding-left: var(--space-xl);
  margin-bottom: var(--space-md);
}
.content-narrow li { margin-bottom: var(--space-xs); }
.content-narrow a {
  color: var(--color-accent);
  text-decoration: underline;
}
.legal-updated {
  font-size: 0.9rem;
  color: var(--color-text-light);
  margin-bottom: var(--space-2xl);
  padding-bottom: var(--space-md);
  border-bottom: 1px solid rgba(var(--color-primary-rgb), 0.08);
}
</style>

  <!-- Breadcrumb -->
  <nav class="ct-breadcrumb" aria-label="Breadcrumb" style="background:var(--color-bg-dark);padding:var(--space-sm) 0;">
    <div class="container">
      <ol style="display:flex;align-items:center;gap:var(--space-xs);list-style:none;flex-wrap:wrap;font-size:var(--font-size-sm);color:rgba(255,255,255,0.55);">
        <li><a href="/" style="color:rgba(255,255,255,0.7);">Home</a></li>
        <li aria-hidden="true" style="color:rgba(255,255,255,0.3);">›</li>
        <li style="color:var(--color-accent);font-weight:600;" aria-current="page">Privacy Policy</li>
      </ol>
    </div>
  </nav>

  <section class="legal-hero" aria-label="Privacy Policy">
    <h1>Privacy Policy</h1>
  </section>

  <section class="legal-content">
    <div class="content-narrow">
      <p class="legal-updated"><strong>Last Updated:</strong> <?php echo $lastUpdated; ?></p>

      <h2>Introduction</h2>
      <p><?php echo htmlspecialchars($companyName); ?> ("Company," "we," "us," or "our"), a <?php echo htmlspecialchars($companyEntityType); ?> formed in the State of <?php echo htmlspecialchars($companyState); ?>, operates this website. This Privacy Policy describes how we collect, use, disclose, and protect your personal information when you visit our website or submit information through our contact forms.</p>
      <p>By using our website, you agree to the collection and use of information in accordance with this policy. If you do not agree, please do not use our website.</p>

      <h2>Information We Collect</h2>
      <h3>Information You Provide</h3>
      <p>When you submit a contact form or request a quote, we collect:</p>
      <ul>
        <li>Full name</li>
        <li>Email address</li>
        <li>Phone number</li>
        <li>Service requested</li>
        <li>Message or project details</li>
      </ul>
      <p>We also automatically capture the following when you submit a form:</p>
      <ul>
        <li>IP address</li>
        <li>Browser user agent</li>
        <li>Consent timestamp</li>
        <li>Page URL where the form was submitted</li>
        <li>Consent version identifier</li>
      </ul>

      <h3>Information Collected Automatically</h3>
      <p>We use Google Analytics 4 to collect anonymized usage data, including:</p>
      <ul>
        <li>Pages visited and time on site</li>
        <li>Device type, browser, and operating system</li>
        <li>Referring website</li>
        <li>General geographic location (city/region level)</li>
      </ul>

      <h2>How We Use Your Information</h2>
      <ul>
        <li>Respond to your inquiries and requests for service</li>
        <li>Schedule appointments and provide estimates</li>
        <li>Send transactional communications related to your inquiry</li>
        <li>With your explicit consent, send marketing communications via email</li>
        <li>With your explicit consent, send SMS/text messages about services, appointments, and promotions</li>
        <li>Improve our website and services</li>
        <li>Comply with legal obligations</li>
      </ul>

      <h2>How We Share Your Information</h2>
      <p>We do not sell your personal information. We may share your information with the following categories of service providers who assist in operating our business:</p>

      <h3>Google LLC</h3>
      <p>We use Google Analytics (website analytics), Google Fonts (typography), and Google Maps (embedded maps) on this website. Google may collect cookies and usage data as described in their <a href="https://policies.google.com/privacy" target="_blank" rel="noopener">Privacy Policy</a>.</p>

      <h3>Page One Insights LLC</h3>
      <p>Our website and lead management services are provided by Page One Insights LLC, a web design and digital marketing company based in Greenville, SC. Page One Insights handles form submissions, CRM (customer relationship management), and communications infrastructure on our behalf. Their sub-processors include:</p>
      <ul>
        <li><strong>Supabase Inc.</strong> — data hosting and database services</li>
        <li><strong>Twilio SendGrid</strong> — email delivery for lead notifications</li>
        <li><strong>Twilio Inc.</strong> — SMS/text message delivery (only if you opt in to SMS communications)</li>
      </ul>

      <h3>Hosting Provider</h3>
      <p>Our website is hosted by Hostinger International Ltd., which provides web hosting infrastructure.</p>

      <h3>Legal Requirements</h3>
      <p>We may disclose your information if required by law, court order, or governmental regulation, or if disclosure is necessary to protect our rights, property, or safety.</p>

      <h2>Your Privacy Rights</h2>

      <h3 id="ccpa-rights">California Residents (CCPA/CPRA)</h3>
      <p>If you are a California resident, you have the following rights under the California Consumer Privacy Act (CCPA) as amended by the California Privacy Rights Act (CPRA):</p>
      <ul>
        <li><strong>Right to Know:</strong> You may request that we disclose the categories and specific pieces of personal information we have collected about you.</li>
        <li><strong>Right to Delete:</strong> You may request that we delete personal information we have collected from you, subject to certain exceptions.</li>
        <li><strong>Right to Correct:</strong> You may request that we correct inaccurate personal information we maintain about you.</li>
        <li><strong>Right to Limit Use of Sensitive Personal Information:</strong> You may limit the use and disclosure of your sensitive personal information.</li>
        <li><strong>Right to Opt-Out of Sale/Sharing:</strong> We do not sell or share your personal information for cross-context behavioral advertising. However, you may still exercise this right by contacting us.</li>
        <li><strong>Right to Non-Discrimination:</strong> We will not discriminate against you for exercising your privacy rights.</li>
        <li><strong>Authorized Agent:</strong> You may designate an authorized agent to make a request on your behalf.</li>
      </ul>
      <p>We honor Global Privacy Control (GPC) signals as a valid opt-out request.</p>
      <p>To exercise these rights, contact us at <a href="mailto:<?php echo htmlspecialchars($companyEmail); ?>"><?php echo htmlspecialchars($companyEmail); ?></a> or call <a href="tel:<?php echo htmlspecialchars($phone); ?>"><?php echo htmlspecialchars($companyPhone); ?></a>. We will respond within 45 days.</p>

      <h3>Other State Privacy Rights</h3>
      <p>Residents of the following states have similar privacy rights under their respective state laws. While specific rights vary by state, they generally include the right to access, correct, delete, and opt out of certain data processing activities:</p>
      <ul>
        <li><strong>Virginia</strong> — Virginia Consumer Data Protection Act (VCDPA)</li>
        <li><strong>Colorado</strong> — Colorado Privacy Act (CPA)</li>
        <li><strong>Connecticut</strong> — Connecticut Data Privacy Act (CTDPA)</li>
        <li><strong>Utah</strong> — Utah Consumer Privacy Act (UCPA)</li>
        <li><strong>Texas</strong> — Texas Data Privacy and Security Act (TDPSA)</li>
        <li><strong>Florida</strong> — Florida Digital Bill of Rights (FDBR)</li>
        <li><strong>Oregon</strong> — Oregon Consumer Privacy Act (OCPA)</li>
        <li><strong>Montana</strong> — Montana Consumer Data Privacy Act (MCDPA)</li>
        <li><strong>Delaware</strong> — Delaware Personal Data Privacy Act (DPDPA)</li>
        <li><strong>Iowa</strong> — Iowa Consumer Data Protection Act (ICDPA)</li>
        <li><strong>Tennessee</strong> — Tennessee Information Protection Act (TIPA)</li>
        <li><strong>Indiana</strong> — Indiana Consumer Data Protection Act (ICDPA)</li>
        <li><strong>Kentucky</strong> — Kentucky Consumer Data Protection Act (KCDPA)</li>
        <li><strong>Rhode Island</strong> — Rhode Island Data Transparency and Privacy Protection Act (DTPPA)</li>
        <li><strong>Maryland</strong> — Maryland Online Data Privacy Act (MODPA)</li>
        <li><strong>Minnesota</strong> — Minnesota Consumer Data Privacy Act (MCDPA)</li>
        <li><strong>New Hampshire</strong> — New Hampshire Privacy Act (NHPA)</li>
        <li><strong>New Jersey</strong> — New Jersey Data Privacy Act (NJDPA)</li>
        <li><strong>Nebraska</strong> — Nebraska Data Privacy Act (NDPA)</li>
      </ul>
      <p>To exercise your rights under any state privacy law, contact us using the information in the "Contact Us" section below. We will respond within the timeframe required by your state's law.</p>

      <h2>Data Retention</h2>
      <p>We retain lead data and consent records for four (4) years from the date of collection, consistent with the statute of limitations for TCPA claims. After this period, data is purged unless an active client relationship exists. Active client data is retained for the duration of the relationship plus four years.</p>

      <h2>Security</h2>
      <p>We implement reasonable technical and organizational security measures to protect your personal information against unauthorized access, alteration, disclosure, or destruction. These include encrypted data transmission (SSL/TLS), secure database hosting, and access controls. However, no method of electronic transmission or storage is 100% secure, and we cannot guarantee absolute security.</p>

      <h2>Children's Privacy</h2>
      <p>Our website and services are not directed to children under the age of 13. We do not knowingly collect personal information from children under 13. If you believe we have inadvertently collected such information, please contact us immediately and we will take steps to delete it.</p>

      <h2>Third-Party Links</h2>
      <p>Our website may contain links to third-party websites. We are not responsible for the privacy practices or content of those sites. We encourage you to review the privacy policies of any third-party sites you visit.</p>

      <h2>SMS Program Terms</h2>
      <p>If you opt in to receive SMS/text messages from <?php echo htmlspecialchars($companyName); ?>:</p>
      <ul>
        <li><strong>Message frequency:</strong> Varies. You may receive appointment reminders, service updates, and promotional offers.</li>
        <li><strong>Message and data rates may apply.</strong> Check with your carrier for details.</li>
        <li><strong>Opt-out:</strong> Text <strong>STOP</strong> to cancel at any time. You may also opt out by emailing <a href="mailto:<?php echo htmlspecialchars($companyEmail); ?>"><?php echo htmlspecialchars($companyEmail); ?></a>, calling <a href="tel:<?php echo htmlspecialchars($phone); ?>"><?php echo htmlspecialchars($companyPhone); ?></a>, or any other reasonable method. We will honor all reasonable opt-out requests.</li>
        <li><strong>Help:</strong> Text <strong>HELP</strong> for help, or contact us at the email or phone number above.</li>
        <li><strong>Carriers:</strong> Carriers are not liable for delayed or undelivered messages.</li>
        <li><strong>Consent is not a condition of purchase.</strong> You are not required to opt in to SMS to use our services or receive a quote.</li>
      </ul>

      <h2>Changes to This Privacy Policy</h2>
      <p>We may update this Privacy Policy from time to time. Changes will be posted on this page with an updated "Last Updated" date. Your continued use of our website after changes constitutes acceptance of the revised policy.</p>

      <h2>Contact Us</h2>
      <p>If you have questions about this Privacy Policy or wish to exercise your privacy rights, contact us:</p>
      <ul>
        <li><strong><?php echo htmlspecialchars($companyName); ?></strong></li>
        <li>Email: <a href="mailto:<?php echo htmlspecialchars($companyEmail); ?>"><?php echo htmlspecialchars($companyEmail); ?></a></li>
        <li>Phone: <a href="tel:<?php echo htmlspecialchars($phone); ?>"><?php echo htmlspecialchars($companyPhone); ?></a></li>
        <li>Address: <?php echo htmlspecialchars($companyAddress); ?></li>
      </ul>
    </div>
  </section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
