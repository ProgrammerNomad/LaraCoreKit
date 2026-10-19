# Changelog

## 1.0.0 - Editable modular starter

- Change distribution from a vendor-installed library to a complete Composer project.
- Move reusable source into application-owned modules/ with explicit local autoloading and provider registration.
- Include editable public homepage, shared frontend, administration and UI examples with prebuilt assets.
- Initialize a fresh SQLite application through create-project scripts without creating sample accounts.
- Preserve the promotional website and history in ProgrammerNomad/laracorekit-website.
- Existing 0.x applications require a planned migration, not a drop-in composer require update. Retain legacy repository/tags for old lockfiles.

## [Unreleased]

### Package extraction and website refresh
- Extract `programmernomad/laracorekit` under `packages/core`, bundling both public frontend and admin modules with auto-discovery.
- Move marketing pages and sample seeders into the host; retain Docs/UIShowcase/demo integrations outside the package.
- Add an explicit installer, prebuilt public CSS, interactive administrator creation and clean-consumer smoke testing.
- Update compatible PHP dependencies and the Vite toolchain; separate showcase JavaScript from ordinary pages.
- Add authentication throttling, safe seed defaults, direct resource access checks, settings save authorization and public blog sanitization/publication checks.
- Redesign the website, add mobile navigation and real screenshots, and correct installation/features/upgrade documentation.
- Add machine-readable docs, page descriptions, full documentation sitemap coverage and accurate source-code metadata.
- Add dependency proposals, scheduled security checks and separate locked/compatible PHP CI lanes.

This package release is prepared locally; registry publication and deployment are separate steps. Earlier entries below describe historical host changes.


### Added
- Installed `bezhansalleh/filament-language-switch` plugin for a native Filament admin topbar language switcher
- Configured `LanguageSwitch` in `AppServiceProvider` with locales `en`, `hi`, `ar`, native labels, and circular avatars
- Created custom Filament theme at `resources/css/filament/admin/theme.css` via `php artisan make:filament-theme`
- Added `@source` directive for the language switch plugin to the Filament theme CSS so plugin classes are compiled
- Published and ran `spatie/laravel-medialibrary` migration to create the `media` table (was missing from initial setup)

### Changed
- Replaced manual `panels::topbar.end` render hook (which injected the public frontend `LocaleSwitcher` Livewire component, looking unstyled) with the official language switch plugin - auto-places a native icon button in the Filament topbar
- Rebuilt Vite assets (`npm run build`) to include the language switch plugin CSS in the compiled theme
- Wrapped `$blog->getFirstMediaUrl()` call in `blog-detail.blade.php` with Laravel's `rescue()` helper to fall back to the default OG image instead of crashing when the media table is unavailable
- Removed broken `@php` block from `modules/UIShowcase/views/layouts/showcase.blade.php` that referenced the non-existent `\Illuminate\Support\View::yieldContent()` method, causing a 500 error on all UIShowcase pages

- SECURITY.md file with security policy and disclosure process
- CONTRIBUTING.md file with comprehensive contribution guidelines
- CODEOWNERS file for repository maintainers
- GitHub issue templates (Bug Report, Feature Request, Documentation)
- Pull request template with checklist
- GitHub Actions workflows for Tests, Code Quality, and Build verification
- Composer scripts for quality assurance: test, pint, pint-test, phpstan, review
- Demo credentials documentation in README
- Structured README with improved layout following best practices
- ROADMAP.md with detailed multi-version development plans
- phpstan.neon.dist configuration file for static analysis
- Screenshot placeholders in README with proper image paths
- SCREENSHOT_GUIDE.md with detailed instructions for capturing product screenshots
- Comparison documentation: LaraCoreKit vs Larament
- Comparison documentation: LaraCoreKit vs Official Livewire Starter Kit
- Comprehensive FAQ documentation (docs/faq.md)
- ISSUES_TO_SEED.md guide for creating GitHub issues
- DOCUMENTATION_METADATA_GUIDE.md for standardizing docs pages
- README_REPOSITORY.md with suggested repository About text and topics
- IMPLEMENTATION_CHECKLIST.md tracking audit recommendations
- Documentation page metadata template and examples
- AUDIT_COMPLETION_REPORT.md with comprehensive implementation status
- Metadata headers to 9 documentation pages with stack versions and update dates
- Hreflang tags to main layout for multilingual SEO
- Metadata headers to additional 11 documentation pages (modules and features)

### Changed
- Restructured README.md to prioritize trust signals and clear product positioning
- Updated all version references to Laravel 13, Filament 5, Livewire 4, Tailwind 4
- Improved module documentation with clear contract and structure
- Enhanced quick start guide with complete installation steps
- Updated footer copyright year from 2025 to 2026
- Updated LICENSE copyright year to 2026
- Fixed blog seeder slug from Laravel 12 to Laravel 13
- Updated settings seeder meta descriptions for Laravel 13
- Updated demo review date in UI showcase to 2026
- Enhanced FAQ with comprehensive Q&A covering all aspects
- Updated docs/introduction.md with proper metadata header
- Improved documentation structure and navigation
- Updated all PHP 8.2 references to PHP 8.3 in documentation
- Updated all Filament v3/3 references to Filament 5 across documentation
- Added metadata headers to quick-start, installation, configuration, project-structure docs
- Added metadata headers to blog, multilingual, rtl-support, and filament-overview docs
- Fixed GitHub repository URL case consistency in CHANGELOG
- Replaced placeholder security email with GitHub Security Advisories system
- Removed unnecessary contact emails, directing users to GitHub Issues and Discussions
- Updated contact email in settings seeder to shiv@srapsware.com

### Removed
- Placeholder clone URLs in documentation
- Duplicate content sections from README
- Old "screenshots coming soon" placeholder text
- Fake social proof statistics section from homepage (GitHub stars, contributors counts)
- Specific GitHub star counts from comparison documentation (replaced with general descriptions)

## [0.0.2] - 2026-04-21

### Added
- ResetPassword Livewire component for the auth module.
- reset-password view for the password reset flow.
- password.reset named route.
- PSR-4 autoload entry for Modules\Media\ namespace.
- MediaServiceProvider registration in providers bootstrap.
- Local path repository support for programmernomad/laracorekit-demo-module.
- Frontend dependencies installed via npm install, including alpinejs.
- Filament v5 assets published via filament:upgrade.

### Changed
- PHP upgraded from 8.2 to 8.3.30.
- laravel/framework upgraded from ^12.0 to ^13.0, resolved to 13.5.0.
- filament/filament upgraded from ^4.0 to ^5.0, resolved to 5.5.2.
- livewire/livewire upgraded from ^3.0 to ^4.0, resolved to 4.2.4.
- laravel/tinker upgraded from ^2.10 to ^3.0, resolved to 3.0.2.
- spatie/laravel-medialibrary upgraded to 11.21.0.
- spatie/laravel-permission upgraded to 6.25.0.
- Branch alias updated from 12.x-dev to 13.x-dev.
- Composer stability tuned to minimum-stability dev with prefer-stable true for local path packages.

### Removed
- Deprecated Filament middleware DisableBladeIconComponents from AdminPanelProvider.
- Deprecated Filament middleware DispatchServingFilamentEvent from AdminPanelProvider.

## [0.0.1] - 2025-01-01

### Added
- Initial release with Laravel 12, Filament 4, and Livewire 3
- Modular architecture with Auth, Blog, Core, Media, Settings, UIShowcase, User modules
- Filament Admin Panel with custom Dashboard page
- Spatie Media Library integration
- Spatie Laravel Permission integration

[Unreleased]: https://github.com/ProgrammerNomad/LaraCoreKit/compare/v0.0.2...HEAD
[0.0.2]: https://github.com/ProgrammerNomad/LaraCoreKit/compare/v0.0.1...v0.0.2
[0.0.1]: https://github.com/ProgrammerNomad/LaraCoreKit/releases/tag/v0.0.1
