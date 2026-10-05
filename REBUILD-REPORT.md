# RAH Solutions LLC — rebuild report (5 Oct 2026)

Branch `staging`, preview https://preview-r-a-h-solutions-llc.pageone.cloud. Nothing was merged to `main`, pushed to
`main` or deployed. Live site is untouched (rollback tag `pre-rebuild-20261005`).

## Result

- **48 pages** (was 25): home, services hub + 15 services, service-area hub + 13 town pages, blog index + 8 posts,
  about, contact, FAQ, thank-you, four legal pages, plus `404.php`. About 59,000 visible words in total.
- **QA: grade A (95%), 0 blockers** — `python3 ~/crm/qa/qa_audit.py . premium --url <preview>` (output below).
- **Lighthouse mobile** (preview): home 92 / 100 / 100, concrete service page 96 / 100 / 100, Stoughton town page
  95 / 100 / 100, pillar blog post 97 / 100 / 100 (Performance / Accessibility / Best Practices).
- All 25 pre-rebuild URLs still resolve at the same path. All 47 sitemap URLs return 200. No broken internal
  link or missing asset in a full crawl. No horizontal scroll and no H1 under the header on any page at 390 or 1440 px.
- The brief changed during the run (8 posts of 1,000+ words, top-tier account). Both additions are built.

## Things Calvin should look at first

1. **The supplied logo PNG exports are broken.** `assets/images/brand/rah-logo-on-dark.png`, `rah-logo-on-light.png`
   (and likely `rah-social-1200x630.png`) are missing the diamond outline: only the leaf and lettering rendered. The SVGs
   are correct. The site uses the SVGs, and I re-exported PNGs from them with Chrome
   (`assets/images/logo-rah-on-light-v2.png`, `-dark-v2.png`, icons in `assets/icons/`). The logo was not redrawn.
   The files in `brand/` are untouched; re-export them before sending them to the client.
2. **Schema type is `LocalBusiness`, not `LandscapingBusiness`.** `seo-aeo-2026.md` and `aeo-content-schema.md` both say
   `LandscapingBusiness` is not a real schema.org type and that landscaping uses `LocalBusiness`. The brief said to confirm
   against that file, so the reference won.
3. **Partner badge is out.** `includes/partner-badge.php` trips the QA hotlink check as a blocker even when it is not
   included (the file itself is scanned), so the partial and its include were both removed. QA shows one warning for it.
   Re-add after launch with `scripts/partner-badge-fleet.mjs` (profile slug `r-a-h-solutions-llc-edgerton-wi`).
4. **Three services and the spring cleanup page have no photo** (see the photo request list). They use a photo-free
   layout with the logo's facet motif instead of a mismatched picture.
5. **Facts to confirm** (below): several statements about how the company works came from the old site or were
   inferred by the writers. None is a number, price or guarantee, but the client should read them.

## What was built

- **Design:** v7 scaffold copied from `northbound-fences` and rethemed from the logo. Teal `#136F83` (the logo teal
  darkened to pass AA for text and buttons), green `#2F7A33` on light, leaf green `#72C267` and aqua `#6FCBD8` on dark,
  ink `#0F1D24`, deep `#0C171C`, paper `#F5F8F4`. Plus Jakarta Sans headings, Figtree body, Barlow Condensed labels, all
  self-hosted. Archetype warm/human: light photo-led home hero with the estimate card over the photo, deep ink-to-green
  bands, and the diamond's facet lines as section edges, card corners and floating accents. Focus rings use teal on
  light and aqua on dark because the logo green is too light to outline on white.
- **Logo:** `rah-logo-on-light.svg` in the header at 50 px tall on desktop (44 px scrolled, 40 px mobile); the on-dark
  variant in the footer. The header is always a light glass bar, so no variant swap is needed. Favicon, 48 px PNG,
  apple-touch icon and manifest icons generated from `rah-icon.svg`.
- **Navigation:** Services is a four-column menu (Lawn care · Landscaping & hardscape · Concrete & excavating ·
  Seasonal & snow); on mobile the groups collapse.
- **Photos:** 36 originals downloaded, looked at, renamed for what they show, auto-oriented and stripped. 32 are
  published as JPEG fallback + webp + avif variants; nothing is upscaled and nothing is hotlinked. Catalogue and
  usage ledger: `content/image-manifest.md`. Several old alts were wrong (one "sod roll" was a glove; a "completed
  project" was a rebar grid before the pour) and were rewritten.
- **Before/after:** one slider (side-entry steps). The second pair in `assets/images/` did not look like the same
  entrance from the same side, so it is not presented as a before/after; the "after" is used as a standalone photo.
- **Reviews:** the standard Page One block (`includes/google-reviews.php`) renders on the homepage from the live feed
  (5.0, 3 reviews, the one written review). The About page also quotes that review verbatim, attributed "May K.,
  Google review". The invented testimonials and the "4.9 / 47 reviews" claims on the old site are gone. No
  `aggregateRating` anywhere.
- **Forms:** every form posts to `https://db.pageone.cloud/functions/v1/leads/r-a-h-solutions-llc` with `_next` to
  `/thank-you/`, honeypot, attribution fields, `terms_accepted`, and the `_ft`/`_js` spam-shield fields. Terms and
  Privacy links open in a new tab. No test lead was submitted, to avoid creating a fake lead in the CRM: **submit one
  after launch**.
- **Config:** `includes/config.php` is the single source. `site-config.json`/`site-config.php` still feed the GA4 id
  (`G-F5F5TZ0F8J`) and the Search Console tag; the `google-site-verification` meta tag renders on every page.
  `includes/edit-mode.php` is kept and loaded from `head.php`. `build-plan.json` was rewritten to match the new
  facts (it held the street address).
- **SEO files:** `sitemap.php` (pages, images, blog registry; `lastmod` from file dates), `/sitemap.xml` rewrite,
  static sitemaps deleted, `robots.txt` with the Sitemap line, `llms.txt`, `llms-full.txt`, `site.webmanifest`.
- **.htaccess:** https + non-www, the `!-f`/`!-d` trailing-slash guard, 301s for `/thank-you.php`,
  `/sitemap-images.xml`, `/service-areas/` and `/service-area/{town}-wi/`; `.md`, `inventory/`, `content/`,
  `includes/`, the brief, the report and `build-plan.json` return 404. Not testable on the nginx preview.
- **Removed:** `references/`, `SKILL.md`, `includes/nav.php`, static sitemaps, old webp sets. `CLAUDE.md` replaced
  with the current `~/crm/CLAUDE-websites.md`.

## Pages and word counts

Words are visible text inside `<main>` (forms, scripts and SVG excluded; shared service cards and the estimate band
are included, roughly 280 words on service pages). Blog article bodies alone run 1,056 to 1,850 words.

| URL | Words in `<main>` | Title |
|---|---|---|
| `/` | 1,640 | Landscaping & Lawn Care in Edgerton, WI | RAH Solutions LLC |
| `/about/` | 615 | About RAH Solutions LLC | Edgerton, WI Landscaper |
| `/accessibility/` | 555 | Accessibility Statement | RAH Solutions LLC |
| `/areas/beloit-wi/` | 1,156 | Landscaper in Beloit, WI | RAH Solutions LLC |
| `/areas/brodhead-wi/` | 1,120 | Landscaper in Brodhead, WI | RAH Solutions LLC |
| `/areas/edgerton-wi/` | 1,040 | Landscaper in Edgerton, WI | Lawn Care & Snow | RAH Solutions |
| `/areas/evansville-wi/` | 1,072 | Landscaper in Evansville, WI | RAH Solutions LLC |
| `/areas/fort-atkinson-wi/` | 1,222 | Landscaper in Fort Atkinson, WI | RAH Solutions LLC |
| `/areas/janesville-wi/` | 1,201 | Landscaper in Janesville, WI | RAH Solutions LLC |
| `/areas/madison-wi/` | 1,221 | Landscaper in Madison, WI | RAH Solutions LLC |
| `/areas/mcfarland-wi/` | 1,099 | Landscaper in McFarland, WI | RAH Solutions LLC |
| `/areas/milton-wi/` | 1,142 | Landscaper in Milton, WI | RAH Solutions LLC |
| `/areas/oregon-wi/` | 1,149 | Landscaper in Oregon, WI | RAH Solutions LLC |
| `/areas/stoughton-wi/` | 1,166 | Landscaper in Stoughton, WI | RAH Solutions LLC |
| `/areas/watertown-wi/` | 1,223 | Landscaper in Watertown, WI | RAH Solutions LLC |
| `/areas/whitewater-wi/` | 1,165 | Landscaper in Whitewater, WI | RAH Solutions LLC |
| `/blog/` | 491 | Yard & Lawn Blog for Southern Wisconsin | RAH Solutions LLC |
| `/blog/concrete-steps-repair-or-replace/` | 1,555 | Concrete Steps: Repair or Replace After Freeze–Thaw? |
| `/blog/how-much-mulch-do-i-need/` | 1,627 | How Much Mulch Do You Need, and When to Lay It? |
| `/blog/lawn-care-calendar-southern-wisconsin/` | 2,137 | Month-by-Month Lawn Care Calendar for Southern Wisconsin |
| `/blog/paver-patio-vs-poured-concrete/` | 1,994 | Paver Patio vs. Poured Concrete in a Freeze–Thaw Climate |
| `/blog/snow-removal-contract-questions/` | 1,687 | What to Ask Before Signing a Snow Removal Contract |
| `/blog/sod-vs-seed-new-lawn-wisconsin/` | 1,525 | Sod vs. Seed for a New Lawn in Wisconsin |
| `/blog/spring-yard-cleanup-checklist-wisconsin/` | 1,520 | Spring Yard Cleanup Checklist for Wisconsin Yards |
| `/blog/when-to-aerate-and-overseed-southern-wisconsin/` | 1,332 | When to Aerate and Overseed in Southern Wisconsin |
| `/contact/` | 238 | Contact RAH Solutions LLC | Free Estimates in Edgerton, WI |
| `/cookie-policy/` | 649 | Cookie Policy | RAH Solutions LLC |
| `/faq/` | 888 | Landscaping & Lawn Care FAQ | Edgerton, WI | RAH Solutions |
| `/privacy-policy/` | 1,409 | Privacy Policy | RAH Solutions LLC |
| `/service-area/` | 486 | Service Area: Edgerton, WI & 12 Nearby Towns | RAH Solutions |
| `/services/` | 968 | Landscaping & Lawn Services in Edgerton, WI | RAH Solutions |
| `/services/commercial-lawn-care/` | 1,349 | Commercial Lawn Care in Edgerton, WI | RAH Solutions LLC |
| `/services/concrete-services/` | 1,531 | Concrete Services in Edgerton, WI | RAH Solutions LLC |
| `/services/excavating-services/` | 1,497 | Excavating Services in Edgerton, WI | RAH Solutions LLC |
| `/services/fall-yard-cleanup/` | 1,497 | Fall Yard Cleanup in Edgerton, WI | RAH Solutions LLC |
| `/services/garden-maintenance/` | 1,374 | Garden Maintenance in Edgerton, WI | RAH Solutions LLC |
| `/services/hardscaping-services/` | 1,485 | Hardscaping Services in Edgerton, WI | RAH Solutions LLC |
| `/services/landscape-installation/` | 1,478 | Landscape Installation in Edgerton, WI | RAH Solutions LLC |
| `/services/lawn-maintenance/` | 1,450 | Lawn Maintenance in Edgerton, WI | RAH Solutions LLC |
| `/services/lawn-restoration/` | 1,478 | Lawn Restoration in Edgerton, WI | RAH Solutions LLC |
| `/services/mulching-services/` | 1,465 | Mulching Services in Edgerton, WI | RAH Solutions LLC |
| `/services/residential-lawn-care/` | 1,376 | Residential Lawn Care in Edgerton, WI | RAH Solutions LLC |
| `/services/shrub-trimming/` | 1,392 | Shrub Trimming in Edgerton, WI | RAH Solutions LLC |
| `/services/snow-removal/` | 1,497 | Snow Removal in Edgerton, WI | RAH Solutions LLC |
| `/services/sod-installation/` | 1,412 | Sod Installation in Edgerton, WI | RAH Solutions LLC |
| `/services/spring-yard-cleanup/` | 1,496 | Spring Yard Cleanup in Edgerton, WI | RAH Solutions LLC |
| `/terms/` | 1,123 | Terms of Service | RAH Solutions LLC |
| `/thank-you/` | 149 | Thank You | RAH Solutions LLC |

## Titles before and after (existing URLs)

| URL | Before (live) | After (staging) |
|---|---|---|
| `/` | Landscaping Services Edgerton WI | R.A.H. Solutions | Landscaping & Lawn Care in Edgerton, WI | RAH Solutions LLC |
| `/about/` | About R.A.H. Solutions | Landscaping Edgerton, WI | R.A.H. Solutions | About RAH Solutions LLC | Edgerton, WI Landscaper |
| `/accessibility/` | (default) R.A.H. Solutions | Landscaping Services | Edgerton, WI | Accessibility Statement | RAH Solutions LLC |
| `/contact/` | Contact R.A.H. Solutions | Edgerton, WI | R.A.H. Solutions | Contact RAH Solutions LLC | Free Estimates in Edgerton, WI |
| `/cookie-policy/` | (default) R.A.H. Solutions | Landscaping Services | Edgerton, WI | Cookie Policy | RAH Solutions LLC |
| `/privacy-policy/` | (default) R.A.H. Solutions | Landscaping Services | Edgerton, WI | Privacy Policy | RAH Solutions LLC |
| `/service-area/` | Landscaping Services in Edgerton, WI & Surrounding Communities | R.A.H. Solutions | Service Area: Edgerton, WI & 12 Nearby Towns | RAH Solutions |
| `/services/` | Landscaping Services in Edgerton, WI | R.A.H. Solutions | Landscaping & Lawn Services in Edgerton, WI | RAH Solutions |
| `/services/commercial-lawn-care/` | Commercial Lawn Care | Edgerton, WI | R.A.H. Solutions | Commercial Lawn Care in Edgerton, WI | RAH Solutions LLC |
| `/services/concrete-services/` | Concrete Services in Edgerton, WI | R.A.H. Solutions | Concrete Services in Edgerton, WI | RAH Solutions LLC |
| `/services/excavating-services/` | Excavating Services in Edgerton, WI | R.A.H. Solutions | Excavating Services in Edgerton, WI | RAH Solutions LLC |
| `/services/fall-yard-cleanup/` | Fall Yard Cleanup | Edgerton, WI | R.A.H. Solutions | Fall Yard Cleanup in Edgerton, WI | RAH Solutions LLC |
| `/services/garden-maintenance/` | Garden Maintenance | Edgerton, WI | R.A.H. Solutions | Garden Maintenance in Edgerton, WI | RAH Solutions LLC |
| `/services/hardscaping-services/` | Hardscaping Services in Edgerton, WI | R.A.H. Solutions | Hardscaping Services in Edgerton, WI | RAH Solutions LLC |
| `/services/landscape-installation/` | Landscape Installation Edgerton, WI | R.A.H. Solutions | Landscape Installation in Edgerton, WI | RAH Solutions LLC |
| `/services/lawn-maintenance/` | Lawn Maintenance in Edgerton, WI | R.A.H. Solutions | Lawn Maintenance in Edgerton, WI | RAH Solutions LLC |
| `/services/lawn-restoration/` | Lawn Restoration in Edgerton, WI | R.A.H. Solutions | Lawn Restoration in Edgerton, WI | RAH Solutions LLC |
| `/services/mulching-services/` | Mulching Services in Edgerton, WI | R.A.H. Solutions | Mulching Services in Edgerton, WI | RAH Solutions LLC |
| `/services/residential-lawn-care/` | Residential Lawn Care | Edgerton, WI | R.A.H. Solutions | Residential Lawn Care in Edgerton, WI | RAH Solutions LLC |
| `/services/shrub-trimming/` | Shrub Trimming in Edgerton, WI | R.A.H. Solutions | Shrub Trimming in Edgerton, WI | RAH Solutions LLC |
| `/services/snow-removal/` | Snow Removal Services Edgerton, WI | R.A.H. Solutions | Snow Removal in Edgerton, WI | RAH Solutions LLC |
| `/services/sod-installation/` | Sod Installation in Edgerton, WI | R.A.H. Solutions | Sod Installation in Edgerton, WI | RAH Solutions LLC |
| `/services/spring-yard-cleanup/` | Spring Yard Cleanup | Edgerton, WI | R.A.H. Solutions | Spring Yard Cleanup in Edgerton, WI | RAH Solutions LLC |
| `/terms/` | (default) R.A.H. Solutions | Landscaping Services | Edgerton, WI | Terms of Service | RAH Solutions LLC |
| `/thank-you/` | Thank You — Message Received | R.A.H. Solutions | Thank You | RAH Solutions LLC |

New URLs: `/faq/`, `/blog/` + 8 posts, `/areas/{town}-wi/` × 13.

## QA output

```
python3 ~/crm/qa/qa_audit.py . premium --url https://preview-r-a-h-solutions-llc.pageone.cloud
PASS: 286  |  FAIL: 39  |  WARN: 5  |  Total: 330
Blockers failed: 0  |  Tier: premium  |  Techniques: 10
Grade: A  (95%)  PASSED
Lighthouse mobile Performance >=90   PASS  92 (runs 91, 92, 95) — LCP 3.0s · CLS 0.048 · TBT 158ms · 549KB
Lighthouse mobile Accessibility >=95 PASS  100
Lighthouse mobile Best Practices >=95 PASS 100
Lighthouse mobile SEO >=95           WARN  69 on the preview host (noindex header by design; re-check live)
```

What the 39 non-blocking failures are:

- **38 × "Image resolution"**: the check flags every file in `assets/images/` under 800×500, which includes every
  `-480.webp` responsive variant and the `-960` variants of the four wide 2048×922 photos. These are the variants the
  performance standard requires; the source photos are large enough. One real case: `zero-turn-mower-sunroom-yard`
  is 1080×486 (used only as a small tile).
- **1 × partner badge include** (see above).
- Warnings: no `assets/css/styles.css` for the legacy typography check, two render-phase notes, and the preview host
  lacking the `/sitemap.xml` rewrite (`/sitemap.php` returns valid XML with 47 URLs).

Other gates:

- `php -l` clean on every PHP file. Local render on `127.0.0.1:8090`: all 48 pages 200, one H1 each, no PHP notices;
  `404.php` returns 404; server stopped afterward.
- Lighthouse mobile, measured directly: `/services/concrete-services/` 96 (LCP 2.5 s, CLS 0.015),
  `/areas/stoughton-wi/` 95 (LCP 2.0 s), `/blog/lawn-care-calendar-southern-wisconsin/` 97.
- The banned-string grep is clean for site content. It still matches two things that are not content: SVG path
  coordinates containing "4.9" (`includes/icons.php`, `includes/google-reviews.php`, the logo SVG), and `CLAUDE.md`,
  which is the standards file the brief asked for and names imgur and the font CDN as things not to use. `.md` files
  are blocked from the web.
- Screenshots reviewed at 1440 and 390: home, service pages (photo and photo-free), a town page, blog posts, contact,
  services hub, about. Fixed from that review: header height clipping the logo, a blurry featured service tile,
  an oversized gallery tile, orphaned cards on the services hub, oversized in-article photos, a third-party
  dealer sign in the truck photo (cropped out), and tables overflowing on phones in blog posts.

## Facts used and where they came from

| Fact | Source |
|---|---|
| Name "RAH Solutions LLC", phone (608) 501-5123, hours Mon–Fri 8–5, categories, 13 service-area towns, 5 counties, place_id, verified, service-area business | `inventory/gbp-listing.json`, the row with `google_location_id` |
| 5.0 rating, 3 reviews, the May K. review text | `inventory/gbp-reviews.json` and the live reviews feed |
| Owner Robert Harried, family owned, established 2023, Edgerton, licensed and insured, free on-site estimates, residential and commercial, email, Facebook URL, the 15 services and what each includes, the four-step process (visit, plan and price, do the work, walk the finished job) | pre-rebuild `includes/config.php`, `build-plan.json`, home and about pages |
| Equipment list (zero-turn mowers, plow trucks, UTV with blade, skid steer / track loader, excavator, dump trailer) | visible in the client photos |
| Seeding window, mowing height, lawn calendar, snow mold, salt injury, mulch depth, shrub pruning timing | UW–Madison Extension pages, linked in each post |
| Concrete scaling, air entrainment, first-winter deicer advice, joints | NRMCA CIP 2 and CIP 6, ACI FAQ, cited in the posts |
| Paver base and maintenance | CMHA PAV-TEC-002, -006, -010, cited in the post |
| Diggers Hotline three-working-day notice | diggershotline.com and Wis. Stat. 182.0175 |
| Stair riser limits | Wis. Admin. Code SPS 321.04 |
| Town facts (population, rivers, districts, highways, sidewalk snow rules, distances) | listed with URLs in the comment header of each `areas/*/index.php` |
| GA4 id, Search Console token, lead endpoint, spam-shield secret | pre-rebuild config |

Dropped as unsourced: "4.9 stars across 47 reviews", the five testimonial cards, "3 years", "50-mile radius",
"same-day response", the street address, Saturday hours, USDA zone claims other than those verified, and the old
site's town paragraphs (which named neighborhoods and "regular stops" nobody could verify).

## Facts to confirm with the client

1. **"Licensed and insured"** appears sitewide as the client's own statement. No license number is shown. Confirm
   what licence or registration this refers to.
2. **How the company works**, written as practice but not confirmed: mows at about 3 to 3.5 inches; clippings blown
   off hard surfaces; gates closed and latched; debris and leaves hauled away; one-time and vacation mowing available;
   commercial accounts get a set weekday; fall cleanups can be split into two visits; weeds in beds pulled by hand;
   a utility locate (811) is requested before digging; Robert sees a driveway or lot before a winter account starts.
3. **Scope details** that extend the old one-line descriptions: natural stone patios, fire pit areas and seat walls
   (hardscaping); equipment and trash-enclosure pads (concrete); culverts and swales (excavating); storefronts,
   rentals, condominium grounds (commercial lawn care); mulch types offered.
4. **"Proof of insurance on request"** is promised on the FAQ, About and homepage.
5. **Madison:** the page says the company focuses on the south and east sides and asks other addresses to call first.
6. **Watertown** (about 39 road miles): the page suggests larger projects and seasonal accounts fit best and says to
   call to confirm scheduling.
7. **Recurring services in far towns:** `/service-area/` says weekly mowing and plowing availability is confirmed by
   address for the farthest towns.
8. **Texts:** SMS acceptance is unknown, so the mobile bar has Call and Free estimate only. The forms still carry the
   optional SMS opt-in required by the consent standard.
9. **The About story:** "local, family-owned, not a franchise" and "the name is the owner's initials" (the second is
   an inference from Robert A. Harried / R.A.H.; remove it if wrong).
10. **Town facts not read on the primary page** (the city sites blocked automated requests, so the text came from
    search extracts): Janesville's 12-hour sidewalk rule and terrace-tree clearances, Stoughton's sidewalk rule,
    Whitewater's and Watertown's 24-hour rules. USDA zones for Fort Atkinson, Whitewater, Watertown and McFarland came
    from a third-party mirror of the 2023 map; Edgerton's 5b is from my own knowledge of the map, not a lookup.
    Road distances are OpenStreetMap routing.
11. **Before/after slider:** the "after" photo shows the new landing still in its forms. A finished photo would be better.

## Client photo request list

No photo exists for: **hardscaping** (patio, wall or paver walk), **shrub trimming**, **commercial lawn care**,
**spring cleanup**. Weak matches that should be replaced: **sod** (prep photos only, no sod), **fall cleanup**
(a farmyard clearing, not leaves), **garden maintenance**, **lawn restoration** (no "after"). Also wanted: a
portrait of Robert or the crew for About, a finished shot of the replaced side-entry steps, and original files (not
Facebook downloads) with the job town noted, so town pages can show local work. Full list with reasons:
`content/image-manifest.md`.

## Skipped or different from the brief, and why

- **Partner badge** removed (QA blocker), as described above.
- **`LandscapingBusiness`** not used (not a real type per the references).
- **Town heroes have no photo.** No photo carries location data, so town pages use a gradient hero and one photo with
  a caption that does not claim the town.
- **Second before/after pair** not used as a slider (could not confirm it is the same entrance).
- **Three small photos** (under 520 px wide) left unpublished.
- **Logo swap on scroll** not needed: the header is a light bar in every state.
- **Hero paragraph is 39 words**, not 30 or fewer: `qa_audit.py` blocks under 35. On a 390 px screen it runs six lines,
  so the "no paragraph above the CTA past two lines" line of the mobile contract is not met; the CTA still sits at
  about 310 px and the chips are inside the first 700 px.
- **No lead test submission** and **no `.htaccess` test** (preview is nginx): do both at launch.
- **Lighthouse SEO** reads 69 on the preview because of its noindex header; re-check on the live domain.
- Content was written by parallel sub-agents from a shared fact sheet and two templates I built first; I reviewed
  their reports, measured every page, and edited where a claim went past the facts (for example dormant seeding,
  which UW Extension rates as unreliable). I did not read every sentence of all 48 pages.
