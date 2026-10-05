# RAH Solutions LLC (rahsolutionsllc.com) — rebuild to the Page One v7 standard (5 Oct 2026)

## Why this exists
The live site is an April–May 2026 build on the v6.1 standard: Oswald/Lato from the old pipeline, a
generic navy + cyan "bold industrial" look, a 48px square JPEG logo that is unreadable in the header,
37 photos hotlinked from Supabase storage, static `sitemap.xml`, no town pages, no blog, an invented
"4.9 Google rating" chip. In 90 days Google showed it 300 times, almost all for the brand name.
Calvin (5 Oct): "RAH Solutions website is super old and we need to bring it up to premium new design
standards including improving the logo."

Client: Robert Harried, owner. Landscaper in Edgerton, WI (lawn care, landscaping, hardscape, concrete,
excavating, snow removal). Client pays $399/mo (Calvin, 5 Oct: "we want to give him the highest quality possible with included blogs"): treat this as a top-tier account, no shortcuts on design polish, copy depth or the blog. Keep the brand, the facts and every existing URL;
raise the design, the content depth and the technical standard.

## What to build
A **Premium-tier PHP-include site** to the standards in `~/crm/references/` (read `build-phases.md` first,
then `design-system.md` Parts B–D and F, `design-aesthetics-2026.md`, `seo-aeo-2026.md` Parts A–D and H,
`blog-standard.md`, `performance-2026.md`, `legal-compliance.md`, `aeo-content-schema.md`,
`contact-form-standard.md`, `required-components.md` where they exist). This repo's own `CLAUDE.md` and
`references/` folder are the older standard: where they conflict with `~/crm/references/` and
`~/crm/CLAUDE-websites.md`, the newer ones win. Copy working patterns (structure, includes, config.php,
framework CSS, sitemap.php, blog registry) from the v7 Premium reference sites
`~/client-sites/northbound-fences`, `~/client-sites/el-dorado-heating-cooling-llc` and
`~/client-sites/green-limb-tree-service` — never their content or images. Template CSS:
`~/crm/references/framework-v7.css` (fill the tokens). Fonts self-hosted from `~/crm/references/fonts/`.

Work in THIS repo on branch `staging` (already checked out). The working tree is served, noindexed, at
**https://preview-r-a-h-solutions-llc.pageone.cloud** (nginx: extensionless URLs → .php; the
`/sitemap.xml` rewrite is NOT available on preview, check `/sitemap.php` directly).
**Do NOT merge to `main`, do NOT push to `main`, and do NOT deploy** — `main` is the live site
(rollback tag `pre-rebuild-20261005`). Push `staging` only (`git push -u origin staging`).

## The new logo (already made — use it, do not redraw it)
The client's logo was a line diamond in aqua with green lettering on black, with the owner's name and
phone inside the artwork (`assets/images/brand/original-client-logo-2023.jpg`, reference only, never
shown on the site). It has been redrawn as vector art, same diamond and same two colours, with a leaf
set into the stone to say "landscaping", and a two-line wordmark set in Plus Jakarta Sans:

- `assets/images/brand/rah-logo-on-dark.svg` — white + green lettering, aqua mark. For dark surfaces.
- `assets/images/brand/rah-logo-on-light.svg` — ink + deeper green/teal. For light surfaces.
- `assets/images/brand/rah-icon.svg` — the mark alone on a dark rounded square (favicon, app icon).
- PNG exports alongside (`rah-logo-on-dark.png`, `rah-logo-on-light.png`, `rah-icon-512.png`,
  `rah-social-1200x630.png` for og:image if no better photo-led social image is made).
- `alt-…-facet-…svg` = an alternate concept kept for Calvin; do not use it on the site.

Rules: lockup aspect ratio is about 3.4:1; give it real size in the header (about 44–52px tall on
desktop, 36–40px on mobile) and in the footer. Pick the variant by the surface behind it; if the header
changes from transparent-over-photo to solid-light on scroll, swap variants (two `<img>` tags toggled by
class is fine). Inline `width`/`height`. Generate `favicon.svg`, `favicon.png` (48), `apple-touch-icon.png`
(180) and the manifest icons from `rah-icon.svg`, replacing the old ones (version the file names or add
`?v=2`). Schema `logo` = the PNG on the launch domain.

### Brand tokens (from the logo)
- Aqua `#6FCBD8` (on dark) / teal `#17839A` (on light, AA for text at large sizes — check contrast and
  darken for small text).
- Green `#72C267` (on dark) / `#3F9440` (on light).
- Ink `#0F1D24`, deep background `#0C171C`.
- The old site's navy `#1a2b3c` + cyan `#06b6d4` palette is retired.
- Headings: Plus Jakarta Sans (matches the wordmark). Choose the body face from the font library per
  `design-system.md` Part D; no Oswald, no Lato.
- Direction: this is a landscaper. Light, fresh, photo-led pages with deep ink/green bands for contrast,
  not an all-dark industrial site. The diamond's facet geometry (thin aqua lines, angled cuts) is the
  ownable motif for dividers, card corners and accents; use it with restraint.

## Inputs (all in this repo)
- The current pages (`index.php`, `about/`, `services/*`, `service-area/`, `contact/`, `llms-full.txt`,
  `includes/config.php`, `build-plan.json`): the source of business facts (owner Robert Harried, family
  owned, established 2023, Edgerton WI, licensed & insured as stated by the client, the 15 services).
  Reuse facts; do not invent numbers, awards, years, staff, warranties, prices or reviews. If a figure on
  the current site has no visible source, keep it only if it reads as the client's own statement, and
  list it in the report under "facts to confirm".
- `inventory/gbp-listing.json`: two rows for the same Google profile; the one with `google_location_id`
  is the live API row and wins. `inventory/gbp-reviews.json`: 3 Google reviews, all 5★, one with text.
  `inventory/gbp-photos.json`, `inventory/deal-assets.json`: nothing usable.
- Photos: the 36 client photos listed in `$clientImages` in the current `includes/config.php` (Supabase
  URLs, with context + alt) plus the local webp sets in `assets/images/`. Download every remote one into
  `assets/images/` (browser UA), LOOK at each one before placing it (several alts were machine-written),
  write `content/image-manifest.md` per `build-phases.md`, and generate 480/960/1600 webp + avif
  variants (`~/crm/scripts/image-variants.mjs`; normalise EXIF rotation first). These are Facebook-sized
  originals: do not upscale beyond the source width, and choose the hero from the sharpest wide shot.
  No hotlinks of any kind, no stock photos. Services with no matching photo go in the report as the
  client photo request list (and get a photo-free layout, not a mismatched picture).
- Form endpoint: `https://db.pageone.cloud/functions/v1/leads/r-a-h-solutions-llc` — every form posts
  there with `_next` → /thank-you/, honeypot, attribution fields, TCPA consent checkbox (Terms and
  Privacy links open in a new tab), and the `_ft`/`_js` spam-shield fields
  (`~/crm/scripts/patch-leads-spamshield.py`; the current `contact/index.php` shows the working shape).
  No Formsubmit.

## Fixed facts for config.php (single source, used everywhere)
- `$siteUrl = 'https://rahsolutionsllc.com'`, `$domain = 'rahsolutionsllc.com'` — never the preview domain.
- **Business name (NAP, schema, footer, legal): `RAH Solutions LLC`** — exactly as the verified Google
  profile spells it. The current site writes "R.A.H. Solutions, LLC"; replace it everywhere in text. The
  logo artwork keeps the client's "R.A.H." lettering; that is art, not NAP. In running copy "RAH
  Solutions" is fine after first mention.
- Phone **(608) 501-5123** (`tel:+16085015123`). Email `rahsolutionsllc2@gmail.com`.
- **Address: service-area business.** The Google profile hides the street address
  (`CUSTOMER_LOCATION_ONLY`). Show "Edgerton, WI 53534" only. The street address on the current site
  ("262 County Road W") must not appear in visible text, schema, llms files or a map pin. Schema:
  `addressLocality` Edgerton, `addressRegion` WI, `postalCode` 53534, no `streetAddress`, no `geo`
  (the latitude/longitude in the DataForSEO row is wrong — it is in Illinois). Map embed, if used:
  Edgerton, WI area, not a street pin. `hasMap`/review link from place_id `ChIJL745uaVvI6gRauPk_YNHUzI`.
- **Hours: Monday–Friday 8:00 am – 5:00 pm, closed Saturday and Sunday** (Google profile). The current
  site says 7–5 plus Saturday morning; Google wins. Snow removal pages may say storms are handled as
  they come only if the current site already says so in the client's words.
- Google categories: Landscaper (primary), Lawn care service, Snow removal service → schema
  `LandscapingBusiness` (confirm against `seo-aeo-2026.md`).
- `$googleAnalyticsId = 'G-F5F5TZ0F8J'` (also in `includes/site-config.json` — keep that mechanism
  working if the references still use it).
- Search Console: keep every `google-site-verification` meta tag now in `includes/head.php` on the home
  page. Removing one un-verifies the site.
- Facebook: `https://www.facebook.com/profile.php?id=61556249615787`.
- **Rating and reviews:** the profile is 5.0 with 3 reviews. Delete the "4.9 Google rating" chip and any
  other rating number that is not exactly that. No `aggregateRating` anywhere. Show Google reviews with
  the standard Page One reviews block (`design-system.md` F7, `includes/google-reviews.php`; see
  `~/client-sites/drain-masters*` or another site that already ships it) — never hand-typed review cards,
  never invented names. If the block cannot render for this deal, show the one text review from
  `inventory/gbp-reviews.json` verbatim with first name + last initial, attributed "Google review", and
  say so in the report.
- "Years in business": established 2023. Say "since 2023". No "3+ years", no counters built on it.
- Keep `includes/edit-mode.php` (inline editor) and `includes/partner-badge.php` behaviour. If the
  partner badge trips the QA hotlink check, leave the include out and say so in the report (it is
  re-added after launch by a fleet script).

## Pages (keep every existing URL exactly; directory + index.php, trailing slash)
- `/` — hero sized to content, H1 on "landscaping and lawn care in Edgerton, WI" intent, compact
  estimate form on desktop / dialog on mobile, service grid with real photos, named process, why-us from
  real facts, recent-work strip (before/after slider for the concrete steps pairs that exist in
  `assets/images/`), reviews block, service-area band, FAQ (visible + FAQPage), blog teasers, estimate
  section.
- `/services/` + the 15 existing service pages (same slugs): commercial-lawn-care, concrete-services,
  excavating-services, fall-yard-cleanup, garden-maintenance, hardscaping-services,
  landscape-installation, lawn-maintenance, lawn-restoration, mulching-services, residential-lawn-care,
  shrub-trimming, snow-removal, sod-installation, spring-yard-cleanup. 1,000–1,500 words each,
  answer-first, written for a southern Wisconsin property owner (clay soils, freeze–thaw, lake-effect-free
  but heavy snow years, cool-season turf: only what is true for Rock and Dane counties), 5–6 FAQs +
  FAQPage, Service schema, 2–3 internal links. Group them in the nav (Lawn care · Landscaping &
  hardscape · Concrete & excavating · Seasonal & snow) so the menu is not a 15-item list.
- `/service-area/` (keep this slug) + one town page for each town on the Google profile's service area,
  at `/areas/{town}-wi/`: Edgerton, Stoughton, Janesville, Madison, Milton, Beloit, Evansville, Fort
  Atkinson, Whitewater, McFarland, Oregon, Brodhead, Watertown. ≥ 400 unique words each with ≥ 3 local
  specifics that would be false if the town name were swapped, links to 3 services. The counties on the
  profile (Rock, Dane, Green, Jefferson, Iowa) are named on `/service-area/` only. The one-then-batch
  review stop in `build-phases.md` is waived for this run: build Edgerton first, check it yourself
  against the rule, then do the rest.
- `/about/`, `/contact/`, `/faq/` (new), `/thank-you/`, the four legal pages (same slugs), `404.php`.
- `/blog/` with `includes/blog-data.php` registry + 8 posts (≥ 1,000 words, answer-first, FAQ, Related
  Services/Articles) on what a homeowner here searches before hiring: when to aerate and overseed in
  southern Wisconsin, spring yard cleanup checklist, how much mulch you need and when to lay it, sod vs
  seed for a new lawn, concrete steps: repair or replace after freeze–thaw, what to ask before signing a
  snow removal contract, a month-by-month lawn care calendar for southern Wisconsin (pillar post, links to the others), and paver patio vs poured concrete in a freeze–thaw climate. No invented prices or statistics; cite UW–Madison Extension or other primary
  sources where a fact needs one.
- `sitemap.php` (dynamic, images included) + `.htaccess` rewrite for `/sitemap.xml`; delete the static
  `sitemap.xml` and `sitemap-images.xml` once the rewrite is in place; `robots.txt` with the Sitemap
  line; `llms.txt` + `llms-full.txt`; manifest.
- `.htaccess`: keep the https / non-www rules and the `!-f`/`!-d` trailing-slash guard; 301 any URL that
  changes shape. Block `.md`, `inventory/`, `content/`, `includes/` from the web.
- Remove from the repo what the new build no longer uses (old `references/`, `SKILL.md`,
  `qa-report.json` is regenerated). Replace this repo's `CLAUDE.md` with the current
  `~/crm/CLAUDE-websites.md`.

## Standards that are non-negotiable
Premium visual bar from `design-system.md` + `design-aesthetics-2026.md`: no template look, real
hierarchy, generous whitespace, asymmetric sections, SVG dividers, considered motion that fails open.
`data-p1-dynamic` on every loop container. Inline SVG icons (no runtime injection). Performance budgets
from `performance-2026.md` (hero ≤ 150 KB as `<picture>` with fetchpriority, all `<img>` with
width/height, defer on scripts, no CDN libraries, no Google Fonts CDN). Entity block in first 100 words
+ footer; dofollow footer link to https://pageoneinsights.com; NAP identical everywhere. No meta
keywords, no Twitter cards, no aggregateRating. WCAG AA contrast (the aqua and green are light: never
use them for small text on white). Legal pages: follow `legal-compliance.md` exactly (no
template-disclaimer text; Wisconsin governing law; entity = Wisconsin limited liability company).

## QA gate (do not stop before this passes)
- `php -l` on every PHP file; local render check with `php -S 127.0.0.1:8090` (NEVER port 8000) — every
  page 200, no PHP notices, then kill the server.
- `python3 ~/crm/qa/qa_audit.py` (default, not `--legacy`): **grade A, 0 blockers**. Fix, don't excuse.
- Lighthouse mobile ≥ 90 on home + one service page + one town page against the preview URL.
- Look at your own work: headless Chrome screenshots of home, one service page, one town page, one post
  and contact at 1440 and 390 wide (`google-chrome --headless=new --no-sandbox --screenshot`). Read the
  images. Fix anything that looks broken, cramped, low-contrast or generic: logo size and legibility,
  H1 clear of the header, no horizontal scroll, no blurry upscaled photo, no empty gaps.
- Every existing URL still resolves (list them from `git ls-tree -r main --name-only | grep index.php`
  before you start); every URL in sitemap.php returns 200; robots has Sitemap; no hotlinked image;
  `grep -rIi "262 County\|R\.A\.H\. Solutions, LLC\|4\.9\|imgur\|fonts.googleapis\|storage/v1/object"`
  over the served files (outside `.git`, `inventory/`, `assets/images/brand/`, this brief) returns nothing.
- Commit in phases on `staging` (scaffold/config/logo → home → services → towns → blog → legal/SEO → QA
  fixes) and push `staging`. End every commit message with:
  `Co-Authored-By: Claude Opus 5.5 <noreply@anthropic.com>`
- Finish with `REBUILD-REPORT.md` (page list with word counts, before/after title table, QA output,
  Lighthouse scores, every fact you used and where it came from, "facts to confirm" list, client photo
  request list, anything skipped and why) and `touch .rebuild-done`.
