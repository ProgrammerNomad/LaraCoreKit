# Package and website implementation report

Reviewed 19 October 2026.

## Distribution

- Composer identity: `programmernomad/laracorekit` (public frontend **and** administration).
- Package source: `packages/core` in this monorepo.
- Public distribution repository: [ProgrammerNomad/laracorekit-package](https://github.com/ProgrammerNomad/laracorekit-package).
- Core, Auth, User, Settings, Media and Blog ship together initially. Marketing pages, Docs, UIShowcase, sample seeders and the demo dependency stay in the host.
- The package archive is about 84 KB compressed, excluding installed PHP dependencies. The export checks that host public assets are not accidentally copied into the package.
- Packagist publishes v0.1.0 from package commit `220940d294bcd7d6de84f26d293867d576820e71`. Composer installation is the primary application path; GitHub VCS is a development fallback.

## Installation and updates

Package discovery registers the reusable providers. The explicit installer publishes configuration and prebuilt public CSS plus Filament assets, preserving existing configuration. Migrations run only when requested. Administrator creation is interactive and cannot promote an existing email address.

Source namespaces and migration filenames are preserved for migration from older checkouts. `config/laracorekit.php` replaces the old application module-loader configuration. The default package panel is optional; the host demonstrates a custom panel. Existing custom user models and conflicting routes require integration planning.

## Security and dependency changes

- Updated compatible PHP dependencies and the frontend toolchain; Composer and npm audits report no advisories at validation time.
- Added login/registration/reset throttling and neutral password-reset responses.
- Kept known accounts behind explicit demo mode and removed email-based automatic administrator promotion.
- Enforced direct record access, settings save and blog publication permissions.
- Sanitized public blog HTML and excluded future/draft posts from public publication queries.
- Generated default avatars locally instead of sending names to an external avatar service. Used Filament's bundled font by default.
- Removed unused crawler, Alpine and syntax-highlighter dependencies from the host where applicable.

These are tested improvements, not a claim of a completed independent security audit.

## Website and documentation

- Rebuilt the public homepage around the actual frontend/admin bundle, explicit installation paths and accurate release status.
- Added responsive site/showcase navigation, accessible theme controls and improved documentation search keyboard/focus behavior. Restored the original red/black logo, removed the locale-template BOM that shifted the language control, reduced header height and fixed narrow-screen installation-card overflow; browser regression checks pass at seven widths from 320px to 1440px.
- Added permission-aware admin overview statistics and real screenshots from disposable fixtures.
- Corrected unsupported feature claims in installation, architecture, feature, deployment and addon guides.
- Added Markdown source endpoints, `/llms.txt`, page descriptions, source-code metadata and a dynamic documentation sitemap. A pre-existing local static sitemap containing localhost URLs was moved into private storage so it cannot mask the route.
- Split showcase libraries from ordinary public JavaScript: approximately 50 KB for the base bundle versus 304 KB previously. Package public CSS is approximately 46 KB uncompressed.

## Validation

- 31 PHPUnit tests, 137 assertions passed on both SQLite and an isolated MySQL 8.0.45 server, locally on PHP 8.3.
- Pint and PHPStan passed.
- Root and package Composer schemas validated strictly.
- Composer and npm dependency audits reported zero advisories.
- Package and host production builds passed.
- Independent consumer installation passed public/admin login routes, asset availability, safe seed defaults, no demo dependency, and cached routes/configuration.
- Desktop/mobile browser checks covered primary public/admin pages and all 46 linked documentation pages. All 122 linked showcase URLs returned HTTP 200.

## Automation and external status

Weekly Dependabot proposals, scheduled dependency audits, PHP locked/compatible CI lanes, a MySQL 8 service job, clean-consumer CI and a manual package-preview archive workflow are configured in source. GitHub vulnerability alerts and automated security-fix PRs are enabled and API-verified on both repositories. The distribution repository also has a manual draft release-notes PR workflow; it does not tag or publish.

The distribution repository has a daily source-sync workflow using its own short-lived GITHUB_TOKEN. It proposes draft PRs rather than merging or tagging automatically, and waits for the extraction to reach the monorepo main branch.

The first remote run [39212465937](https://github.com/ProgrammerNomad/laracorekit-package/actions/runs/39212465937) did **not** execute: GitHub reported, “The job was not started because your account is locked due to a billing issue.” Remote CI is therefore unverified and blocked by account state; local checks are the evidence above. Billing settings were not changed.

The host's optional `laracorekit:stats` command saves validated daily Packagist download snapshots without installation telemetry. Missing/unavailable responses do not become zero counts. Packagist registration is complete; enable collection on persistent production storage when deploying.

Remaining operational actions: resolve the GitHub Actions account lock, pass remote checks, review/merge the host changes and deploy the updated website. Package tag v0.1.0 and Packagist registration are complete; production website deployment is not verified.

## Published-package follow-up

Packagist's Composer feed confirms v0.1.0. A fresh Laravel consumer installed the tagged package directly from Packagist with no path/VCS override and passed route, asset, migration, safe-default and cached configuration checks. CI now tests both local source and the published package.

Composer installation is the primary path in the homepage, host README, distribution README, installation guide and demo module introduction. Updated release-status documents remove the former publication-pending claim. Real screenshots and a four-view, 12-second GIF illustrate the public site/admin/docs host. Production deployment and the account-blocked remote CI remain separate operational requirements.

## v0.2 frontend distribution

The package now includes an editable starter homepage, shared responsive header/footer, persisted dark mode, language switching and packaged UI examples. The installer only replaces the unchanged Laravel welcome route and retains a backup. Source-consumer checks cover opt-out, repeat installation, preservation, homepage/showcase routing and cached routes. Browser checks cover five widths, RTL, theme persistence, a rendered Chart.js chart and 122 showcase routes. Project marketing/docs and demo resets remain separate. Earlier statements about excluding all showcase pages describe the 0.1 architecture.
