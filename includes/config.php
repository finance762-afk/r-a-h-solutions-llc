<?php
// ============================================================
// R.A.H. Solutions, LLC — Site Configuration
// Generated from build-plan.json  |  Phase 2: nav_footer_head
// ============================================================

// ─── Identity ────────────────────────────────────────────────
$siteName        = 'R.A.H. Solutions';
$companyName     = 'R.A.H. Solutions, LLC';
$tagline         = 'Your Landscape, Our Passion';
$phone           = '6085015123';
$phoneFormatted  = '(608) 501-5123';
$phoneSecondary  = '';
$email           = 'rahsolutionsllc2@gmail.com';
$ownerName       = 'Robert Harried';

// ─── Address ─────────────────────────────────────────────────
$address = [
    'street' => '262 County Road W',
    'city'   => 'Edgerton',
    'state'  => 'WI',
    'zip'    => '53534',
];

$addressFull = $address['street'] . ', ' . $address['city'] . ', ' . $address['state'] . ' ' . $address['zip'];

// ─── Hours ────────────────────────────────────────────────────
$hours = [
    'weekdays' => 'Mon–Fri: 7:00am – 5:00pm',
    'saturday' => 'Saturday: 7:00am – 12:00pm',
    'sunday'   => 'Sunday: Closed',
];

// ─── Digital Presence ─────────────────────────────────────────
$domain        = 'rahsolutionsllc.com';
$canonicalBase = 'https://rahsolutionsllc.com';
$industry      = 'landscaping';

// ─── SEO ─────────────────────────────────────────────────────
$primaryKeyword    = 'landscaping services edgerton wi';
$defaultTitle      = 'R.A.H. Solutions | Landscaping Services | Edgerton, WI';
$defaultDescription = 'R.A.H. Solutions LLC delivers professional landscaping, lawn care, hardscaping, and concrete services in Edgerton, WI. Family-owned. Free estimates. Call (608) 501-5123.';

$secondaryKeywords = [
    'lawn care edgerton wi',
    'landscaping company edgerton',
    'landscape installation edgerton wisconsin',
    'concrete services edgerton wi',
    'hardscaping edgerton wi',
    'shrub trimming edgerton wisconsin',
    'lawn maintenance near me',
    'landscaping services near me',
    'commercial lawn care edgerton',
    'snow removal edgerton wi',
    'mulching services edgerton',
    'sod installation edgerton wisconsin',
];

// ─── Services ─────────────────────────────────────────────────
$services = [
    [
        'name'        => 'Lawn Maintenance',
        'slug'        => 'lawn-maintenance',
        'description' => 'Comprehensive lawn maintenance services including mowing, edging, and seasonal care. Regular maintenance programs keep your lawn healthy and beautiful year-round.',
        'keywords'    => ['lawn maintenance Edgerton WI', 'lawn care Wisconsin', 'grass maintenance Edgerton', 'lawn service programs'],
    ],
    [
        'name'        => 'Landscape Installation',
        'slug'        => 'landscape-installation',
        'description' => 'Professional landscape installation services bringing your outdoor vision to life. From plants and trees to hardscaping elements, we handle complete landscape transformations.',
        'keywords'    => ['landscape installation Edgerton WI', 'landscaping installation Wisconsin', 'landscape contractor Edgerton', 'professional landscaping services'],
    ],
    [
        'name'        => 'Hardscaping Services',
        'slug'        => 'hardscaping-services',
        'description' => 'Complete hardscaping solutions including patios, retaining walls, walkways, and outdoor living spaces. Durable stone and concrete features that enhance property value.',
        'keywords'    => ['hardscaping Edgerton WI', 'hardscape design Wisconsin', 'patio installation Edgerton', 'retaining walls Wisconsin'],
    ],
    [
        'name'        => 'Concrete Services',
        'slug'        => 'concrete-services',
        'description' => 'Professional concrete installation and repair services for driveways, walkways, and patios. Transform your outdoor spaces with durable, high-quality concrete solutions.',
        'keywords'    => ['concrete services Edgerton WI', 'concrete installation Edgerton', 'driveway concrete Wisconsin', 'concrete contractor Edgerton'],
    ],
    [
        'name'        => 'Shrub Trimming',
        'slug'        => 'shrub-trimming',
        'description' => 'Expert shrub trimming and shaping services to maintain healthy growth and attractive appearance. Professional pruning techniques that enhance your landscape\'s beauty.',
        'keywords'    => ['shrub trimming Edgerton WI', 'bush trimming Wisconsin', 'shrub pruning Edgerton', 'landscape trimming services'],
    ],
    [
        'name'        => 'Garden Maintenance',
        'slug'        => 'garden-maintenance',
        'description' => 'Comprehensive garden maintenance to keep your plants healthy and thriving year-round. Regular care including weeding, pruning, and seasonal garden upkeep.',
        'keywords'    => ['garden maintenance Edgerton WI', 'garden care Wisconsin', 'garden services Edgerton', 'plant maintenance services'],
    ],
    [
        'name'        => 'Mulching Services',
        'slug'        => 'mulching-services',
        'description' => 'Professional mulching services that retain soil moisture, suppress weeds, and enhance landscape appearance. Quality mulch installation for healthier plants and gardens.',
        'keywords'    => ['mulching services Edgerton WI', 'mulch installation Wisconsin', 'landscape mulching Edgerton', 'garden mulch services'],
    ],
    [
        'name'        => 'Sod Installation',
        'slug'        => 'sod-installation',
        'description' => 'Expert sod installation for instant, beautiful lawns that transform your outdoor space. Professional installation ensures proper establishment and long-term success.',
        'keywords'    => ['sod installation Edgerton WI', 'new lawn Wisconsin', 'grass installation Edgerton', 'instant lawn services'],
    ],
    [
        'name'        => 'Lawn Restoration',
        'slug'        => 'lawn-restoration',
        'description' => 'Complete lawn restoration services that revitalize damaged or neglected lawns. Overseeding, soil improvement, and professional techniques for a lush, healthy lawn.',
        'keywords'    => ['lawn restoration Edgerton WI', 'lawn renovation Wisconsin', 'grass restoration Edgerton', 'lawn repair services'],
    ],
    [
        'name'        => 'Spring Yard Cleanup',
        'slug'        => 'spring-yard-cleanup',
        'description' => 'Comprehensive spring cleanup services to prepare your yard for the growing season. Debris removal, bed preparation, and lawn restoration to start the year fresh.',
        'keywords'    => ['spring cleanup Edgerton WI', 'yard cleanup Wisconsin', 'spring yard services Edgerton', 'seasonal cleanup services'],
    ],
    [
        'name'        => 'Fall Yard Cleanup',
        'slug'        => 'fall-yard-cleanup',
        'description' => 'Professional fall cleanup services including leaf removal, bed preparation, and winterization. Prepare your landscape for winter while maintaining curb appeal.',
        'keywords'    => ['fall cleanup Edgerton WI', 'leaf removal Wisconsin', 'fall yard services Edgerton', 'autumn cleanup services'],
    ],
    [
        'name'        => 'Snow Removal',
        'slug'        => 'snow-removal',
        'description' => 'Reliable snow removal for residential and commercial properties throughout winter. Prompt, professional service to keep your property safe and accessible.',
        'keywords'    => ['snow removal Edgerton WI', 'snow plowing Wisconsin', 'winter services Edgerton', 'commercial snow removal'],
    ],
    [
        'name'        => 'Excavating Services',
        'slug'        => 'excavating-services',
        'description' => 'Professional excavation services for landscaping, drainage, and site preparation projects. Heavy equipment and expertise for all your earthmoving needs.',
        'keywords'    => ['excavating Edgerton WI', 'excavation services Wisconsin', 'site preparation Edgerton', 'landscaping excavation'],
    ],
    [
        'name'        => 'Residential Lawn Care',
        'slug'        => 'residential-lawn-care',
        'description' => 'Specialized residential lawn care tailored to homeowners\' needs. Complete lawn care programs including mowing, trimming, and seasonal maintenance.',
        'keywords'    => ['residential lawn care Edgerton WI', 'home lawn service Wisconsin', 'residential landscaping Edgerton', 'homeowner lawn care'],
    ],
    [
        'name'        => 'Commercial Lawn Care',
        'slug'        => 'commercial-lawn-care',
        'description' => 'Professional commercial lawn care for businesses and commercial properties. Reliable, scheduled maintenance that keeps your commercial landscape looking professional.',
        'keywords'    => ['commercial lawn care Edgerton WI', 'business landscaping Wisconsin', 'commercial property maintenance Edgerton', 'commercial grounds care'],
    ],
];

// Featured services for nav dropdown (8 primary + view-all link)
$navServices = array_filter($services, function($s) {
    return in_array($s['slug'], [
        'lawn-maintenance',

        'landscape-installation',
        'hardscaping-services',
        'concrete-services',
        'shrub-trimming',
        'snow-removal',
        'spring-yard-cleanup',
        'excavating-services',
    ]);
});
$navServices = array_values($navServices);

// ─── Service Areas ────────────────────────────────────────────
$serviceAreas = [
    [
        'city'    => 'Edgerton',
        'state'   => 'WI',
        'zip'     => '53534',
        'slug'    => 'edgerton-wi',
        'primary' => true,
    ],
    [
        'city'    => 'Stoughton',
        'state'   => 'WI',
        'zip'     => '53589',
        'slug'    => 'stoughton-wi',
        'primary' => false,
    ],
    [
        'city'    => 'Janesville',
        'state'   => 'WI',
        'zip'     => '53545',
        'slug'    => 'janesville-wi',
        'primary' => false,
    ],
    [
        'city'    => 'Madison',
        'state'   => 'WI',
        'zip'     => '53701',
        'slug'    => 'madison-wi',
        'primary' => false,
    ],
];

$serviceCity  = 'Edgerton';
$serviceState = 'WI';

// ─── Social Links ─────────────────────────────────────────────
$socialLinks = [
    'facebook'  => 'https://www.facebook.com/profile.php?id=61556249615787',
    'instagram' => '',
    'google'    => '',
];

// ─── Design Tokens ────────────────────────────────────────────
$colors = [
    'primary'     => '#1a2b3c',
    'primaryDark' => '#0f1e2d',
    'primaryRgb'  => '26, 43, 60',
    'secondary'   => '#4d5e6f',
    'accent'      => '#06b6d4',
    'accentRgb'   => '6, 182, 212',
    'accentDark'  => '#0590a8',
    'bgDark'      => '#0f1e2d',
];

$fonts = [
    'heading' => 'Oswald',
    'body'    => 'Lato',
    'accent'  => 'Caveat',
];

// ─── Business Details ─────────────────────────────────────────
$yearEstablished = 2023;
$yearsInBusiness = 3;
$licenseInfo     = 'Licensed & Insured';
$serviceRadius   = 50;

$description = 'Transform your outdoor spaces with R.A.H. Solutions, LLC, your premier partner for comprehensive outdoor improvement in Southern Wisconsin. Established in 2023, we are a dedicated landscaping company serving homeowners and small businesses throughout Edgerton, Stoughton, Madison, and Janesville. Our full suite of professional services includes landscaping, lawn care, and snow removal, ensuring your property looks exceptional and remains safe year-round.';

$differentiators = [
    'Local expertise in Edgerton, WI\'s specific climate and soil conditions',
    'Family-owned and operated — community commitment since 2023',
    'Comprehensive services from design to maintenance to snow removal',
    'Personalized approach for residential and commercial properties',
    'Quick response times and flexibility for local clients',
];

// ─── FAQs ─────────────────────────────────────────────────────
$faqs = [
    [
        'q' => 'What landscaping services do you offer?',
        'a' => 'R.A.H. Solutions provides comprehensive landscaping services including landscape installation, hardscaping (patios, retaining walls, walkways), lawn care and maintenance, shrub trimming, seasonal plantings, mulch and soil services, and outdoor living space creation.',
    ],
    [
        'q' => 'Do you offer seasonal services for Wisconsin winters?',
        'a' => 'Yes, we provide fall cleanup, winter preparation services to protect plants and outdoor features, and spring restoration. We also offer snow removal services to keep your property safe and accessible throughout Wisconsin winters.',
    ],
    [
        'q' => 'How much does a landscaping project typically cost?',
        'a' => 'Project costs vary widely based on scope, size, and materials. We provide free estimates and consultations to discuss your vision, budget, and timeline. Contact us to schedule an on-site evaluation.',
    ],
    [
        'q' => 'Can you work with my existing landscape design or budget constraints?',
        'a' => 'Absolutely. We work with clients at any budget level and can integrate with existing landscapes. Our design team can help prioritize improvements and suggest phased approaches to fit your timeline and budget.',
    ],
    [
        'q' => 'Are you licensed and insured?',
        'a' => 'Yes, R.A.H. Solutions is fully licensed and insured. We maintain all necessary credentials and insurance coverage to protect you and your property during all landscaping work.',
    ],
];

// ─── Legal Page Variables ─────────────────────────────────────
$entityType        = 'Limited Liability Company';
$stateOfFormation  = 'Wisconsin';
$contactEmail      = $email;
$contactPhone      = $phoneFormatted;
$businessAddress   = $addressFull;
$siteUrl           = $canonicalBase;
$clientSlug        = 'r-a-h-solutions-llc';

// ─── Forms ────────────────────────────────────────────────────
$formAction  = 'https://formsubmit.co/rahsolutionsllc2@gmail.com';

// ─── CSS Version (cache-bust) ─────────────────────────────
$cssVersion = '4';

// ─── Analytics ────────────────────────────────────────────────
$googleAnalyticsId = ''; // TODO: Add GA4 Measurement ID (e.g. G-XXXXXXXXXX) to activate analytics

// ─── Client Assets ────────────────────────────────────────────
$logoUrl = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/logo/1776963748052-3tu1va-RAH_logo.jpg';

$heroImageUrl = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963874866-f077by-471177305_122202492170208320_1592970065814584229_n.jpg';

$clientImages = [
    [
        'url'     => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963874866-f077by-471177305_122202492170208320_1592970065814584229_n.jpg',
        'context' => 'landscaping',
        'alt'     => 'Professional landscaping services Edgerton WI R.A.H. Solutions',
    ],
    [
        'url'     => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963876972-9uvcid-474456407_122209245674208320_3275147450913393227_n.jpg',
        'context' => 'landscaping',
        'alt'     => 'Landscape installation Edgerton Wisconsin R.A.H. Solutions',
    ],
    [
        'url'     => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963878224-9yylmf-474790582_122209560278208320_5110498035873152787_n.jpg',
        'context' => 'hardscaping',
        'alt'     => 'Hardscaping services patio installation Edgerton WI',
    ],
    [
        'url'     => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963879670-etljhr-474465615_122209560308208320_6377695377545475044_n.jpg',
        'context' => 'lawn',
        'alt'     => 'Lawn maintenance services Edgerton Wisconsin',
    ],
    [
        'url'     => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963882024-ohn2g8-474446326_122209560260208320_53140490767559634_n.jpg',
        'context' => 'mulching',
        'alt'     => 'Mulching and garden maintenance Edgerton Wisconsin',
    ],
    [
        'url'     => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963884244-pe5czp-475493043_122211163190208320_5361770049466921459_n.jpg',
        'context' => 'sod',
        'alt'     => 'Sod installation new lawn Edgerton Wisconsin',
    ],
    [
        'url'     => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963885204-c6dam2-475409956_122211163172208320_2104516663902467885_n.jpg',
        'context' => 'concrete',
        'alt'     => 'Concrete services driveway installation Edgerton WI',
    ],
    [
        'url'     => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963886495-agh3u2-475671791_122211163124208320_6715996363556920497_n.jpg',
        'context' => 'cleanup',
        'alt'     => 'Spring yard cleanup services Edgerton Wisconsin',
    ],
    [
        'url'     => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963887692-btgk52-490023562_122226629156208320_4857034073232372127_n.jpg',
        'context' => 'commercial',
        'alt'     => 'Commercial lawn care Edgerton WI R.A.H. Solutions',
    ],
    [
        'url'     => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963889584-ala069-486653046_122226629198208320_4781171488771186863_n.jpg',
        'context' => 'hardscaping',
        'alt'     => 'Retaining wall hardscaping installation Edgerton Wisconsin',
    ],
    [
        'url'     => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963890974-0j1sut-486971190_122226629348208320_8096727509961542480_n.jpg',
        'context' => 'excavating',
        'alt'     => 'Excavating services site preparation Edgerton WI',
    ],
    [
        'url'     => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963892391-3enmm5-486843500_122226629396208320_6857620022192748149_n.jpg',
        'context' => 'residential',
        'alt'     => 'Residential lawn care Edgerton WI homeowner services',
    ],
    [
        'url'     => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963893874-ak4j6n-489926707_122226629426208320_2862562131488466064_n.jpg',
        'context' => 'snow',
        'alt'     => 'Snow removal services Edgerton Wisconsin winter maintenance',
    ],
    [
        'url'     => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963895295-85rqf1-495734161_122236025852208320_5435639759042997660_n.jpg',
        'context' => 'cleanup',
        'alt'     => 'Fall yard cleanup leaf removal Edgerton WI',
    ],
    [
        'url'     => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963896244-0unq77-495336544_122236025864208320_4129821399527851126_n.jpg',
        'context' => 'shrub',
        'alt'     => 'Shrub trimming and pruning services Edgerton Wisconsin',
    ],
    [
        'url'     => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963897215-2h4a0d-512659884_122253684104208320_1892119159010734985_n.jpg',
        'context' => 'lawn',
        'alt'     => 'Lawn restoration overseeding services Edgerton WI',
    ],
    [
        'url'     => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963898405-wb12tf-509629996_122253717212208320_4867801287963445550_n.jpg',
        'context' => 'garden',
        'alt'     => 'Garden maintenance plant care Edgerton Wisconsin',
    ],
    [
        'url'     => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963899295-b8v0w8-607091027_122304065120208320_4309334725424131443_n.jpg',
        'context' => 'mulching',
        'alt'     => 'Mulch installation landscape beds Edgerton WI',
    ],
    [
        'url'     => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963900255-mzfpn4-615106273_122307410756208320_5795716215182246689_n.jpg',
        'context' => 'hardscaping',
        'alt'     => 'Patio hardscape outdoor living space Edgerton Wisconsin',
    ],
    [
        'url'     => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963901265-nudusv-612484153_122306872124208320_6814002630237134691_n.jpg',
        'context' => 'landscaping',
        'alt'     => 'Landscape installation complete yard transformation Edgerton WI',
    ],
    [
        'url'     => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963902399-ex8uz9-470815796_122202491606208320_6104297074012647116_n.jpg',
        'context' => 'landscaping',
        'alt'     => 'Professional landscaping crew Edgerton Wisconsin RAH Solutions',
    ],
    [
        'url'     => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963903365-fqbeu8-470859907_122202491636208320_4879251461866482528_n.jpg',
        'context' => 'concrete',
        'alt'     => 'Concrete driveway installation Edgerton WI R.A.H. Solutions',
    ],
    [
        'url'     => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963904225-q0hpk2-470686200_122202491702208320_8107918479252601066_n.jpg',
        'context' => 'commercial',
        'alt'     => 'Commercial grounds maintenance Edgerton Wisconsin',
    ],
    [
        'url'     => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963905145-cbpw70-470661025_122202491588208320_8070705476773582033_n.jpg',
        'context' => 'residential',
        'alt'     => 'Residential landscape installation Edgerton WI outdoor spaces',
    ],
    [
        'url'     => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963907325-0lw8ac-470717235_122202491672208320_1286182138053082297_n.jpg',
        'context' => 'cleanup',
        'alt'     => 'Yard cleanup seasonal services Edgerton Wisconsin',
    ],
    [
        'url'     => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963980269-u3tom9-470875398_122202491888208320_4188323936145154732_n.jpg',
        'context' => 'snow',
        'alt'     => 'Snow plowing winter services Edgerton WI R.A.H. Solutions',
    ],
];
