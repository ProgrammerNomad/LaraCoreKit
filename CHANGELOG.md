# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.1.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [Unreleased]

### Changed
- Development continues from [0.0.2] under this section until the next tagged release.

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

[Unreleased]: https://github.com/programmernomad/laracorekit/compare/v0.0.2...HEAD
[0.0.2]: https://github.com/programmernomad/laracorekit/compare/v0.0.1...v0.0.2
[0.0.1]: https://github.com/programmernomad/laracorekit/releases/tag/v0.0.1
