# GitHub Issues to Seed

This document contains ready-to-create GitHub issues based on the audit report recommendations. Create these issues to show an active roadmap and provide entry points for contributors.

## How to Use This File

For each issue below:
1. Go to https://github.com/ProgrammerNomad/LaraCoreKit/issues/new
2. Copy the title
3. Copy the description
4. Add the suggested labels
5. Click "Submit new issue"

---

## Issue 1: Add Production Screenshots to README and Website

**Labels:** `documentation`, `good-first-issue`, `enhancement`

**Title:**
Add production screenshots to README and website homepage

**Description:**
```markdown
## Problem
The README and website currently don't show visual proof of what LaraCoreKit looks like. Developers want to see screenshots before deciding to use a starter kit.

## Solution
Add high-quality screenshots showing:

1. **Admin Dashboard** (admin-dashboard.png)
   - Filament 5 admin panel
   - Dark mode visible
   - Dashboard widgets
   - Navigation sidebar with resources

2. **Blog Editor** (blog-editor.png)
   - Filament form for creating/editing blog posts
   - Rich text editor with content
   - SEO fields visible
   - Multilingual tabs/selector

3. **UI Component Showcase** (ui-showcase.png)
   - Multiple component categories
   - 6-8 different components rendered
   - Clean, organized layout

4. **RTL Support** (rtl-support.png)
   - Right-to-left layout for Arabic
   - Navigation and content properly mirrored

## Deliverables
- [ ] 4 high-quality PNG screenshots (1920x1080+)
- [ ] 2 GIF animations (create-blog-post.gif, language-switching.gif)
- [ ] Files placed in `docs/images/screenshots/`
- [ ] README updated with screenshots
- [ ] Website homepage updated with screenshots

## Resources
- See [SCREENSHOT_GUIDE.md](docs/SCREENSHOT_GUIDE.md) for detailed instructions
- Screenshots should use seeded demo data, not empty screens
- Optimize images (PNG <1MB, GIF <3MB)

## Acceptance Criteria
- All 6 image files created and committed
- README displays screenshots correctly
- Screenshots show professional, clean UI
- No personal information or debug data visible

## Estimated Effort
1-2 days
```

---

## Issue 2: Publish to Packagist for Composer Installation

**Labels:** `enhancement`, `distribution`, `high-priority`

**Title:**
Publish LaraCoreKit to Packagist for Composer installation

**Description:**
```markdown
## Problem
Currently, LaraCoreKit can only be installed via `git clone`. Developers expect to install Laravel starters via Composer or Laravel installer.

## Solution
1. Publish to Packagist: https://packagist.org
2. Enable installation via `composer create-project`
3. Eventually support `laravel new --using=laracorekit`

## Steps
1. Create Packagist account
2. Submit package: `programmernomad/laracorekit`
3. Configure GitHub webhook for auto-updates
4. Update README with Composer installation command
5. Test installation: `composer create-project programmernomad/laracorekit my-app`

## Benefits
- Standard Laravel ecosystem distribution
- Auto-discovery by developers
- Version management via Composer
- Easier updates for users

## Acceptance Criteria
- [ ] Package published on Packagist
- [ ] Installation works via `composer create-project`
- [ ] README updated with Composer install command
- [ ] GitHub webhook configured for auto-updates
- [ ] Packagist badge added to README

## Documentation
- https://packagist.org
- https://getcomposer.org/doc/02-libraries.md#publishing-to-packagist

## Estimated Effort
4-6 hours
```

---

## Issue 3: Create First Tagged Release (v0.1.0)

**Labels:** `release`, `high-priority`

**Title:**
Create first official GitHub release (v0.1.0)

**Description:**
```markdown
## Problem
No official releases exist yet. Developers look for releases to assess project maturity and find stable versions.

## Solution
Create and publish v0.1.0 release with comprehensive release notes.

## Steps
1. Review and finalize CHANGELOG.md [Unreleased] section
2. Move [Unreleased] items to [0.1.0] - 2026-XX-XX
3. Update version number if needed in composer.json
4. Create Git tag: `git tag -a v0.1.0 -m "Release v0.1.0"`
5. Push tag: `git push origin v0.1.0`
6. Create GitHub Release from tag
7. Write release notes (copy from CHANGELOG + add highlights)
8. Add installation instructions to release notes
9. Publish release

## Release Notes Template
```
## LaraCoreKit v0.1.0

First official release of LaraCoreKit - a modular Laravel 13 starter kit!

### What's Included
- Laravel 13, Filament 5, Livewire 4, Tailwind 4
- Modular architecture with Auth, Blog, Media, Settings, User modules
- Multilingual support (EN/HI/AR) with RTL layout
- 175+ UI components
- Role & permission system
- GitHub Actions CI/CD
- Quality assurance tools (Pint, PHPStan, Tests)

### Installation
See [Installation Guide](https://www.laracorekit.com/docs/installation)

### Documentation
https://www.laracorekit.com/docs

### Changelog
See CHANGELOG.md for full details
```

## Acceptance Criteria
- [ ] CHANGELOG updated with v0.1.0
- [ ] Git tag created and pushed
- [ ] GitHub Release published
- [ ] Release notes comprehensive and clear
- [ ] Latest Release badge in README works

## Estimated Effort
2-4 hours
```

---

## Issue 4: Add Per-Page Documentation Metadata

**Labels:** `documentation`, `enhancement`

**Title:**
Add metadata header to all documentation pages

**Description:**
```markdown
## Problem
Documentation pages lack version information, last updated dates, and source links. Developers can't tell if docs match the codebase version.

## Solution
Add consistent metadata header to every docs page:

```markdown
---
**Supported Stack:** Laravel 13 / Filament 5 / Livewire 4 / Tailwind 4  
**Module Status:** Core | Addon | Planned  
**Last Updated:** 2026-04-22  
**Source Files:** [BlogResource](../../modules/Blog/src/Filament/Resources/BlogResource.php) | [Routes](../../modules/Blog/routes/web.php)
---
```

## Pages to Update
All pages in `docs/` directory, including:
- Getting started pages
- Core pages
- Frontend pages
- Admin pages
- Modules pages
- Features pages
- Development pages

## Acceptance Criteria
- [ ] All docs pages have metadata header
- [ ] Version information accurate
- [ ] Last updated dates current
- [ ] Source links work correctly
- [ ] Module status clearly indicated

## Estimated Effort
4-6 hours
```

---

## Issue 5: Add Code Coverage Reporting

**Labels:** `testing`, `ci`, `enhancement`

**Title:**
Add code coverage reporting to CI pipeline

**Description:**
```markdown
## Problem
No code coverage metrics available. Can't track test coverage or identify untested code.

## Solution
Add code coverage to GitHub Actions workflow and display badge in README.

## Implementation
1. Update `.github/workflows/tests.yml`:
```yaml
- name: Run tests with coverage
  run: php artisan test --coverage --min=70
```

2. Add Codecov or Coveralls integration
3. Add coverage badge to README
4. Set coverage threshold (target 70%+)

## Benefits
- Track test coverage over time
- Identify untested code
- Show quality signal to users
- Enforce coverage requirements in PRs

## Acceptance Criteria
- [ ] Coverage runs in GitHub Actions
- [ ] Coverage report generated
- [ ] Coverage badge in README
- [ ] Minimum coverage threshold set
- [ ] PRs show coverage changes

## Resources
- https://codecov.io
- https://coveralls.io
- https://laravel.com/docs/testing#coverage

## Estimated Effort
3-4 hours
```

---

## Issue 6: Create Comparison Pages Documentation

**Labels:** `documentation`, `content`, `good-first-issue`

**Title:**
Add comparison pages vs other Laravel starters

**Description:**
```markdown
## Problem
Developers want to understand how LaraCoreKit compares to alternatives before choosing.

## Solution
Create honest comparison documentation pages (already created in docs/comparisons/):

1. ✅ LaraCoreKit vs Larament
2. ✅ LaraCoreKit vs Official Livewire Starter Kit
3. TODO: Add to website/docs navigation
4. TODO: Create blog posts based on comparisons

## Next Steps
- [ ] Link comparison pages from main docs
- [ ] Add comparisons to website navigation
- [ ] Create comparison table on homepage
- [ ] Write blog posts for SEO

## Files
- `docs/comparisons/laracorekit-vs-larament.md`
- `docs/comparisons/laracorekit-vs-livewire-starter.md`

## Acceptance Criteria
- [ ] Comparison pages linked in docs
- [ ] Accessible from website navigation
- [ ] Content is honest and fair
- [ ] Tables are accurate
- [ ] Links work correctly

## Estimated Effort
2-3 hours (mostly linking/navigation)
```

---

## Issue 7: Implement Structured Data for SEO

**Labels:** `seo`, `enhancement`, `content`

**Title:**
Add schema.org structured data for better SEO

**Description:**
```markdown
## Problem
Search engines can't understand the site structure. No rich snippets in search results.

## Solution
Add schema.org structured data using JSON-LD:

1. **Homepage** - SoftwareApplication schema
2. **Docs pages** - TechArticle schema
3. **Blog posts** - Article schema with author/date
4. **About** - Organization schema

## Example Implementation
```html
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "SoftwareApplication",
  "name": "LaraCoreKit",
  "applicationCategory": "DeveloperApplication",
  "offers": {
    "@type": "Offer",
    "price": "0",
    "priceCurrency": "USD"
  },
  "operatingSystem": "Cross-platform"
}
</script>
```

## Benefits
- Rich snippets in search results
- Better search engine understanding
- Improved click-through rates
- Answer engine compatibility

## Acceptance Criteria
- [ ] Schema added to homepage
- [ ] Schema added to docs pages
- [ ] Schema added to blog posts
- [ ] Validated with Google Rich Results Test
- [ ] No schema errors

## Resources
- https://schema.org
- https://developers.google.com/search/docs/appearance/structured-data

## Estimated Effort
4-6 hours
```

---

## Issue 8: Add Hreflang Tags for Multilingual SEO

**Labels:** `seo`, `multilingual`, `enhancement`

**Title:**
Implement hreflang tags for multilingual content

**Description:**
```markdown
## Problem
Search engines don't know about multilingual page variants. Users might see wrong language in search results.

## Solution
Add hreflang tags to tell search engines about language variants:

```html
<link rel="alternate" hreflang="en" href="https://www.laracorekit.com/blog/post-slug" />
<link rel="alternate" hreflang="hi" href="https://www.laracorekit.com/hi/blog/post-slug" />
<link rel="alternate" hreflang="ar" href="https://www.laracorekit.com/ar/blog/post-slug" />
<link rel="alternate" hreflang="x-default" href="https://www.laracorekit.com/blog/post-slug" />
```

## Implementation
Add to layout header for:
- Homepage
- Blog posts
- Docs pages
- Static pages

## Benefits
- Correct language shown in search results
- Better international SEO
- Reduced duplicate content issues

## Acceptance Criteria
- [ ] Hreflang tags in all multilingual pages
- [ ] Correct language codes used
- [ ] x-default set to English
- [ ] Validated with hreflang testing tools
- [ ] No hreflang errors

## Resources
- https://developers.google.com/search/docs/specialty/international/localized-versions

## Estimated Effort
3-4 hours
```

---

## Issue 9: Create Video Tutorial for Installation

**Labels:** `documentation`, `content`, `good-first-issue`

**Title:**
Create video tutorial showing installation and setup

**Description:**
```markdown
## Problem
Some developers prefer video tutorials over written documentation.

## Solution
Create a 5-10 minute video tutorial covering:

1. System requirements
2. Clone repository
3. Install dependencies (Composer + NPM)
4. Configure environment
5. Create database
6. Run migrations and seeders
7. Create admin user
8. Start development servers
9. Access admin panel
10. Quick tour of modules

## Deliverables
- [ ] Video recorded (5-10 minutes)
- [ ] Video edited and polished
- [ ] Uploaded to YouTube
- [ ] Added to README
- [ ] Added to docs homepage
- [ ] Embedded on website

## Tools
- OBS Studio (free)
- ScreenToGif (free)
- YouTube for hosting

## Acceptance Criteria
- Clear audio and video quality
- No personal information shown
- Step-by-step instructions
- Professional presentation
- Actual working installation shown

## Estimated Effort
4-6 hours
```

---

## Issue 10: Setup Automated Dependency Updates

**Labels:** `ci`, `maintenance`, `enhancement`

**Title:**
Configure Dependabot for automated dependency updates

**Description:**
```markdown
## Problem
Dependencies (Composer and NPM) need manual updates. Security patches might be missed.

## Solution
Configure Dependabot to automatically create PRs for dependency updates.

## Implementation
Create `.github/dependabot.yml`:

```yaml
version: 2
updates:
  - package-ecosystem: "composer"
    directory: "/"
    schedule:
      interval: "weekly"
    open-pull-requests-limit: 5

  - package-ecosystem: "npm"
    directory: "/"
    schedule:
      interval: "weekly"
    open-pull-requests-limit: 5
```

## Benefits
- Automatic security updates
- Stay current with dependencies
- Reduced maintenance burden
- PRs include changelog links

## Acceptance Criteria
- [ ] Dependabot configured
- [ ] Weekly update schedule
- [ ] PRs created automatically
- [ ] CI runs on Dependabot PRs
- [ ] Updates reviewed and merged

## Resources
- https://docs.github.com/en/code-security/dependabot

## Estimated Effort
1 hour
```

---

## Additional Issues to Consider

### Good First Issues
- Fix typos in documentation
- Add missing docblocks to classes
- Improve error messages
- Add more unit tests
- Translate content to more languages

### Enhancement Issues
- Add search functionality to docs
- Create CLI command for module generation
- Add more UI component examples
- Improve mobile responsiveness
- Add dark mode to documentation site

### Feature Issues
- Teams/multi-tenancy module
- Payment gateway module
- Analytics dashboard module
- Search module (Meilisearch)
- Social authentication

---

## Issue Creation Priority

Create in this order:

1. **High Priority** (create immediately):
   - Screenshots (#1)
   - First Release (#3)
   - Packagist (#2)
   - Code Coverage (#5)

2. **Medium Priority** (create within week):
   - Documentation metadata (#4)
   - Structured data (#7)
   - Dependabot (#10)

3. **Lower Priority** (create as time allows):
   - Comparison pages (#6)
   - Hreflang tags (#8)
   - Video tutorial (#9)

---

## Notes

- All issue descriptions use only standard keyboard characters (no emojis)
- Issues are detailed enough for contributors to pick up
- Each issue has clear acceptance criteria
- Effort estimates help with planning
- Labels help with organization and filtering

**Remember:** The goal of seeding issues is to show active development and provide entry points for contributors. Even if you plan to do the work yourself, creating issues makes the project feel more alive and organized.
