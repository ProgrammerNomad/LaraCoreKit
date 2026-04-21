# UI Showcase

**Estimated time:** 5 minutes  
**Difficulty:** Beginner

---

The UI Showcase is an interactive, searchable gallery of all **175+ components** included in LaraCoreKit. It's the fastest way to explore what's available and copy-paste into your project.

---

## Access the Showcase

```
http://localhost:8000/ui-showcase
```

**Live:** [laracorekit.mobrilz.digital/ui-showcase](https://www.laracorekit.com/ui-showcase/)

---

## What You'll Find

### Interactive Previews
Every component renders live in the browser — dark mode, RTL, responsive — exactly as it will look in your app.

### Copy-Paste Ready Code
Click **"Copy Code"** on any component to copy the Blade/Livewire markup. Paste into your views and it works.

### Multiple Formats
Components shown in:
- **Blade** (x-component tags)
- **HTML/TailwindCSS** (raw markup)
- **Livewire** (wire:* directives)

---

## Component Categories in Showcase

```
Core
├── Typography  — Headings, body text, code
├── Buttons     — All variants and sizes
├── Badges      — Colors, sizes, pill vs square
└── Icons       — Heroicons reference

Forms
├── Inputs      — Text, email, password, number
├── Selects     — Dropdown, multi-select
├── Textareas   — Plain and with character count
├── Checkboxes  — Single and group
├── Radios      — Button group style
├── Toggles     — Switch style
└── File Upload — Drag & drop, image preview

Layout
├── Cards       — Basic, profile, stats
├── Modals      — Confirmation, form modal
├── Drawers     — Slide-in panels
├── Tabs        — Horizontal tabs
└── Accordion   — Collapsible FAQ

Navigation
├── Navbar      — Desktop and mobile
├── Sidebar     — With groups + badges
├── Breadcrumbs — Icon and text
└── Pagination  — Standard and compact

Data Display
├── Tables      — Sortable, with actions
├── Stats Cards — Number, with trend
├── Progress    — Bar and ring
└── Timeline    — Activity log

Advanced
├── Auth Flows  — Login, register, forgot password
├── Media       — Gallery, lightbox, video
└── Charts      — Bar, line, pie (Alpine.js + Chart.js)
```

---

## Adding Your Own Component to Showcase

1. Create your component in `modules/UIShowcase/views/components/`
2. Register it in the showcase index

---

## Next Steps

**[API Authentication →](../api/sanctum)**
