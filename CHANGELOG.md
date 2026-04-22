# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.1.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [Unreleased]

### Added
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
