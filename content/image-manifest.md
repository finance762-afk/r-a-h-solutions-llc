# Image manifest — RAH Solutions LLC (rebuild, 5 Oct 2026)

Source: the 36 client photos listed in the pre-rebuild `includes/config.php` (`$clientImages`, Supabase
storage, Facebook-sized uploads) plus the five concrete photos that only existed as local webp sets.
Every file was downloaded, auto-oriented, stripped of metadata and looked at before naming. The old
machine-written alts were wrong in several places and have been replaced by what is actually in each photo.

- Files live in `/assets/images/{name}.jpg` (fallback, max 1600 px wide, max 250 KB) with
  `-480 / -960 / -1600` `.webp` and `.avif` variants where the source is wide enough. Nothing is upscaled.
- No EXIF GPS or capture dates survive (Facebook strips them), so no photo is tied to a town. Captions
  and alts never name a city or a client.
- `max_uses`: hero-quality 1 as a hero + 1 supporting; others 2. Card thumbnails in the shared services
  grid and blog registry are not counted.
- Render with `picture('{name}', '{alt}', '{sizes}')` from `includes/functions.php`.

## Photos

| name | source px | subject (what is in the photo) | service match | orientation | quality | suits | max_uses | used_on | suggested_alt |
|---|---|---|---|---|---|---|---|---|---|
| hero-lawn-striped-yard | 2048x922 | Large mowed lawn with mowing stripes, mature shade trees, ranch house behind | lawn maintenance / residential | wide | 9 | hero, split | 2 | `/` (hero), `/about/` | Large residential lawn mowed in even stripes under mature shade trees |
| lawn-mowed-stripes-corner-lot | 2048x922 | Corner lot lawn, fresh stripes, single-story house, scattered leaves | lawn maintenance | wide | 8 | hero, card, gallery | 2 | `/services/lawn-maintenance/` (hero), `/` (gallery) | Freshly mowed corner-lot lawn with mowing stripes in front of a single-story home |
| backyard-mowed-green-house | 2048x922 | Mowed backyard, green house, push mower, patio, shrubs | residential lawn care | wide | 7 | hero, card | 2 | `/services/residential-lawn-care/` (hero) | Freshly mowed backyard behind a green house with a patio and shrubs |
| rural-yard-mowed-white-house | 2048x922 | Rural yard mowed, white house, riding mower, equipment at right edge | residential / lawn maintenance | wide | 5 | gallery | 2 | `/services/residential-lawn-care/` | Mowed rural yard in front of a white farmhouse |
| zero-turn-mower-sunroom-yard | 1080x486 | Zero-turn mower on lawn beside arborvitae, junipers and a sunroom | lawn maintenance / shrub context | wide | 6 | gallery, split (small) | 2 | `/services/lawn-maintenance/`, `/services/residential-lawn-care/` | Zero-turn mower on a lawn beside arborvitae and a sunroom |
| zero-turn-spring-lawn-redbud | 510x510 | Zero-turn mower on bright spring lawn, redbud in bloom | spring cleanup / first mow | square | 5 (small) | card only | 2 | `/services/spring-yard-cleanup/` | Zero-turn mower on a bright green spring lawn with a redbud tree in bloom |
| red-barn-mowed-lawn | 2048x2048 | Long red barn, mowed lawn in front, maple, late-day light | lawn maintenance (rural) / commercial-scale mowing | square | 7 | split, gallery | 2 | `/services/commercial-lawn-care/` (supporting only), `/areas/` pages | Mowed lawn in front of a long red barn |
| perennial-bed-edging-layout | 2048x2048 | Perennial bed (daylilies, shrubs) on a slope, edging laid out along lawn | garden maintenance / landscape install | square | 7 | card, split | 2 | `/services/garden-maintenance/` (hero) | Perennial bed with daylilies and shrubs along a lawn, edging laid out for install |
| bed-edging-install-shade-garden | 2048x2048 | Shade bed with fresh soil, hostas/irises, edging being installed, string line | landscape installation / spring bed prep | square | 6 | split, gallery | 2 | `/services/landscape-installation/`, blog spring checklist | Shade garden bed with fresh soil and new edging being installed along a lawn |
| mulched-bed-steel-edging-driveway | 2048x2048 | Finished mulched bed with metal edging, shrubs, pine, rural driveway | landscape installation / mulching | square | 9 | hero, card, gallery | 2 | `/services/landscape-installation/` (hero), `/` (gallery) | New mulched planting bed with metal edging beside a mowed lawn and driveway |
| mulched-bed-edging-lawn-border | 2048x2048 | Long mulched bed with new edging along a tree line and lawn | mulching | square | 8 | hero, card, gallery | 2 | `/services/mulching-services/` (hero), `/` (gallery) | Long mulched garden bed with new edging along a mowed lawn |
| barnyard-overgrown-before-cleanup | 2048x2048 | Overgrown farmyard, weeds and goldenrod, tarp, barn behind | cleanup (before) | square | 6 | before/after, gallery | 2 | `/services/fall-yard-cleanup/` | Overgrown farmyard with weeds, brush and an old tarp before cleanup |
| barnyard-cleared-after-cleanup | 2048x2048 | Same farmyard cleared, barns visible, bare ground | cleanup (after) | square | 7 | hero, card, gallery | 2 | `/services/fall-yard-cleanup/` (hero), `/` (gallery) | Farmyard between red barns after overgrowth and debris were cleared |
| barn-lot-graded-after-clearing | 2048x2048 | Barn lot regraded to bare soil next to lawn | excavating / cleanup | square | 6 | gallery | 2 | `/services/excavating-services/` | Barn lot graded to bare soil after brush was cleared |
| hillside-yard-dead-turf-before | 2048x2048 | Sloped backyard, dead/burned turf and debris, house above | lawn restoration (before) / sod (before) | square | 6 | hero, before | 2 | `/services/lawn-restoration/` (hero) | Sloped backyard with dead and damaged turf before lawn restoration work |
| hillside-fill-dirt-rough-grade | 2048x2048 | Same slope with fill dirt rough graded | excavating / sod prep | square | 6 | gallery | 2 | `/services/sod-installation/`, `/services/excavating-services/` | Fill dirt rough graded across a backyard slope |
| hillside-yard-topsoil-graded | 2048x1560 (cropped: glove removed) | Same slope finish graded with dark topsoil | sod installation prep | wide | 7 | hero, card | 2 | `/services/sod-installation/` (hero) | Hillside backyard graded with fresh topsoil, ready for a new lawn |
| hillside-yard-finish-graded | 2048x2048 | Slope graded smooth, boulder, house above | lawn restoration / sod / seeding prep | square | 7 | split, gallery | 2 | `/services/lawn-restoration/`, blog sod vs seed | Sloped backyard graded smooth and ready for a new lawn behind a two-story home |
| track-loader-grading-pad-base | 2048x2048 | Compact track loader, graded soil, compacted gravel pad with plate compactor | excavating / base prep | square | 7 | split, gallery | 2 | `/services/excavating-services/`, `/` (gallery) | Compact track loader beside graded soil and a compacted gravel pad |
| excavator-skid-steer-culvert | 1482x2048 | Skid steer and excavator in dark soil, culvert pipe in foreground | excavating / drainage | tall | 8 | hero, card, gallery | 2 | `/services/excavating-services/` (hero), `/` (gallery) | Skid steer and excavator grading dark soil beside a drainage culvert pipe |
| concrete-patio-steps-stone-ranch | 1536x2048 | New concrete patio, rounded corner, two steps to door, stone ranch | concrete | tall | 9 | hero, card, gallery | 2 | `/services/concrete-services/` (hero), `/` (gallery) | New concrete patio with rounded corner and steps behind a stone ranch house |
| concrete-patio-aerial-view | 1152x2048 | Aerial view of the same patio with joints, landscaped bed below | concrete | tall | 8 | gallery, split | 2 | `/services/concrete-services/`, `/` (gallery) | Aerial view of a new concrete patio with steps next to a landscaped bed |
| concrete-slab-fresh-pour | 810x1080 | Freshly finished large slab/driveway with forms, hose, neighborhood behind | concrete | tall | 7 | gallery, split | 2 | `/services/concrete-services/` | Freshly finished concrete slab still in its forms |
| concrete-crew-forming-brick-ranch | 480x720 | Crew forming steps at a brick ranch, plywood path over lawn | concrete (process) | tall | 4 (small) | small inline only | 1 | — | Crew forming concrete steps at a brick ranch with plywood protecting the lawn |
| concrete-pad-metal-building | 510x510 | New concrete pad at the door of a metal building, track loader behind | concrete (commercial) | square | 4 (small) | small inline only | 1 | — | New concrete pad at the entrance of a metal building |
| concrete-steps-cracked-before | 1600x2133 | Cracked, settled concrete steps along a house side entry | concrete (before) | tall | 7 | before/after | 3 | `/` (slider), `/services/concrete-services/` (slider), blog concrete steps | Cracked, settled concrete steps along the side of a house before replacement |
| concrete-landing-formed-poured | 1600x2133 | Same side entry, new landing poured inside wood forms | concrete (after, in forms) | tall | 7 | before/after | 2 | `/` (slider), `/services/concrete-services/` (slider) | The same side entry with a new concrete landing poured inside wood forms |
| concrete-walk-rebar-grid | 1600x2133 | Walk formed with gravel base and rebar grid before the pour | concrete (process) | tall | 7 | gallery, split | 2 | `/services/concrete-services/`, blog concrete steps | Sidewalk formed with a gravel base and rebar grid before the concrete pour |
| porch-steps-tilted-before | 1600x2133 | Small wood stoop and concrete pad sunk and tilted at an entry | concrete (problem example) | tall | 5 | inline | 1 | blog concrete steps | Entry stoop that has sunk and tilted away from the house |
| porch-steps-new-after | 1600x2133 | New concrete steps, stoop and walk at a front porch | concrete | tall | 7 | gallery | 2 | `/` (gallery), `/services/concrete-services/` | New concrete steps, stoop and walkway at a front porch |
| plow-trucks-ready-snow | 2048x2048 | Two company pickups with plows on a snowy lot | snow removal | square | 8 | hero, card | 2 | `/services/snow-removal/` (hero) | Two RAH Solutions pickup trucks with snow plows mounted on a snowy lot |
| plow-truck-driveway-dusk | 1080x1080 | Plow truck with lights on clearing a driveway in a new subdivision at dusk | snow removal (residential) | square | 7 | gallery, split | 2 | `/services/snow-removal/`, `/` (gallery) | Pickup truck with a snow plow clearing a residential driveway at dusk |
| snow-plow-fleet-trucks | 1080x810 | Plow trucks, UTV with blade and skid steer with pusher lined up | snow removal (commercial) | wide | 7 | split, gallery | 2 | `/services/snow-removal/`, blog snow contract | Plow trucks, a utility vehicle and a skid steer with snow blades lined up on a snowy lot |
| snow-fleet-lineup-lot | 1080x810 | Same fleet from the front, four machines with blades | snow removal | wide | 6 | gallery | 2 | `/services/snow-removal/` | Four plow vehicles lined up side by side on a snow-covered lot |
| rah-truck-dump-trailer | 2048x2048 | Company pickup towing a red dump trailer (a trailer dealer sign is in the background) | about / equipment | square | 6 | about split | 2 | `/` (about), `/about/` | RAH Solutions pickup truck towing a red dump trailer on a paved lot |

Not used: five low-resolution duplicates of photos above (driveway.webp, snow.webp, patio.webp, o.jpg, o__2_.jpg),
a second near-identical frame of the culvert job, and a second copy of the formed landing photo.

## GAPS — client photo request list

Services with no matching client photo. These pages use the photo-free layout (facet panel in the card, gradient
hero) rather than a mismatched picture:

1. **Hardscaping Services** — no paver patio, retaining wall or stone walkway photo exists. Requested: 3 to 5
   finished hardscape photos (patio, wall, walk), wide shots in daylight.
2. **Shrub Trimming** — no trimming or hedge photo. Requested: before/after of a trimmed hedge or foundation shrubs.
3. **Commercial Lawn Care** — no commercial property photo. Requested: a mowed commercial frontage or lot the
   company maintains (with the owner's permission).

Weak matches (page has a photo, but a better one is wanted):

4. **Sod Installation** — only grading/topsoil prep photos; no photo of sod being laid or a finished sodded lawn.
5. **Spring Yard Cleanup** — only a small (510 px) spring mowing photo. Requested: bed cleanup or debris haul-off in spring.
6. **Fall Yard Cleanup** — the cleanup photos are a farmyard clearing, not leaf removal. Requested: leaf cleanup before/after.
7. **Garden Maintenance** — bed photo shows an edging install; requested: a weeded, maintained bed mid-season.
8. **Lawn Restoration** — has the "before" (dead turf) and the graded stage, but no "after" of the re-established lawn.
9. **Town pages** — no photo carries location data. Requested: original files (not Facebook downloads) with the job
   town noted, so town pages can show work from that town.
10. **People** — no photo of Robert Harried or the crew. Requested: one owner or crew portrait for the About page.
