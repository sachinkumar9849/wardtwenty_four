# Yadukul Real Estate & Construction — Website

A static, multi-page website for a Nepal-based real estate, land plotting, building,
construction, engineering and property consultancy business.

**Stack:** HTML5 · CSS3 · Bootstrap 5.3 (CDN) · Bootstrap Icons 1.11 (CDN) · Vanilla JavaScript.
No React, no Vue, no Next.js, no Tailwind, no build step.

---

## Structure

```
/
├── index.html              Homepage (hero, search, featured, services, plotting,
│                           buildings, construction, why-us, categories, about,
│                           CTA, testimonials, latest properties)
├── properties.html         Listing page with sidebar filters + sorting
├── property-details.html   Single property: gallery, specs, map, enquiry form
├── land-plotting.html      Plotting projects, plot availability table, benefits
├── buildings.html          Houses / commercial / apartments / ongoing projects
├── rent.html               Rental categories, listings, how renting works
├── construction.html       Construction services, 6-step process, project gallery
├── engineering.html        Engineering & consultancy services, deliverables
├── about.html              Company, mission, vision, values, team, statistics
├── contact.html            Contact details, form, map, quick-contact cards
│
├── css/
│   ├── style.css           Design system + all components (24 numbered sections)
│   └── responsive.css      Breakpoint refinements (loaded after style.css)
│
├── js/
│   ├── main.js             Navbar scroll, active link, reveal animations, counters,
│   │                       language toggle, back-to-top, form validation,
│   │                       homepage search, image fallback
│   └── properties.js       Property filtering + sorting, detail-page gallery
│
└── assets/
    ├── images/             logo.svg, favicon.svg, brand-illustration.jpeg
    └── icons/              (Bootstrap Icons come from CDN — see icons/README.md)
```

## Design system

All tokens live in `:root` at the top of `css/style.css`:

| Token | Value | Use |
|---|---|---|
| `--primary` | `#1F2937` | Headings, dark surfaces |
| `--secondary` | `#374151` | Body copy on light |
| `--accent` | `#C59D5F` | The single accent — CTAs, icons, highlights |
| `--light` | `#F8F7F4` | Alternating section background |
| `--text` | `#222222` | Default text |
| `--muted` | `#6B7280` | Supporting text |

Type: **Playfair Display** (headings) + **Inter** (UI/body), sized with `clamp()`.
Radii, shadows, easing and section rhythm are all tokenised — change a token, the
whole site follows.

## Brand mark

`assets/images/logo.svg` abstracts the traditional Yadukul illustration into a
peacock-feather, flute and roofline motif in gold. The original line illustration
(`brand-illustration.jpeg`) is used **once per page**, as a low-opacity decorative
element behind the About section on `index.html` and `about.html`, so the site
reads as a modern real-estate brand rather than a traditional one.

## How the JavaScript works

- **Navbar** is transparent over the hero and turns white with a shadow past 40px.
  The active menu item is derived from the filename, so the same nav markup is
  reused on every page.
- **Property filtering** is DOM-based. Each listing column carries
  `data-purpose`, `data-type`, `data-location`, `data-price` (NPR) and
  `data-area` (sq. ft.); `properties.js` shows or hides columns and updates the count.
  Adding a listing is pure HTML — no JS changes needed.
- **Homepage search** serialises its four selects into a query string and hands off
  to `properties.html?purpose=…&type=…&location=…&price=…`, which applies them on load.
- **Language toggle** swaps the text of any element carrying a `data-np` attribute
  and remembers the choice in `localStorage`. It is a UI demonstration — add
  `data-np="…"` to more elements to extend the coverage.
- **Forms** validate with the HTML5 constraint API plus Bootstrap's
  `was-validated` styling, then reveal an inline confirmation. There is no backend;
  wire the `submit` handler in `main.js` to your endpoint when one exists.

## Running it

No build step. Open `index.html` directly, or serve the folder:

```bash
python3 -m http.server 8080
```

## Replacing the placeholder content

- **Photography** comes from the Unsplash CDN. To go fully self-hosted, download each
  photo into `assets/images/` and replace the `src` values — every `<img>` already
  carries descriptive `alt` text.
- **Contact details** (`+977 1 4567890`, `+977 9801234567`, `info@yadukul.com.np`,
  Chabahil Chowk address) are placeholders. They appear in the footer of every page,
  on `contact.html`, in the floating action buttons and in the `tel:`/`wa.me:` links —
  search and replace across all HTML files.
- **Google Maps** embeds point at a generic Kathmandu query. Replace the `src` on the
  `<iframe>` in `contact.html`, `property-details.html` and `land-plotting.html` with
  your own place embed URL.
- **Listings** are static HTML cards. Copy an existing `.property-col` block and update
  its content plus its five `data-*` attributes.

## Responsive behaviour

Desktop ≥1200px (full menu, 3-column grids, 1280px container) · Laptop 992–1199px
(hamburger, tightened rhythm) · Tablet 768–991px (2-column cards and search fields)
· Mobile <768px (single column, stacked full-width buttons, centered hero,
persistent floating call/WhatsApp buttons). Verified free of horizontal scrolling
at 500, 768, 1024 and 1440px.

## Accessibility & SEO

Semantic `<header>/<nav>/<main>/<section>/<article>/<footer>`, exactly one `<h1>`
per page, unique titles and meta descriptions, breadcrumbs on inner pages,
descriptive `alt` text, labelled form fields, skip-to-content link, visible focus
rings, `aria-current` on the active nav item, and `prefers-reduced-motion` support.
