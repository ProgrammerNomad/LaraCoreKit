# Changelog

## Unreleased

## 0.2.0 - 2026-10-19

- Install an editable starter homepage on unchanged Laravel welcome routes, retaining a route backup and preserving custom routes and views.
- Include a responsive shared header/footer, language switching, RTL support and persistent dark theme.
- Bundle the existing UI showcase examples with prebuilt CSS, charts, sorting and code-copy assets; publish example views for customization.
- Add frontend opt-out and showcase configuration. No demo accounts, resets or database changes are introduced.
- Upgrade explicitly with `composer require programmernomad/laracorekit:"~0.2.0"`, then run the installer and clear cached routes.

## 0.1.1 - 2026-10-19

- Accept administrator passwords of at least 8 characters and retry invalid hidden input without restarting setup.
- Keep unique-account validation, password hashing and noninteractive-input protection.
- Document Windows-compatible Composer constraints and recovery after rejected administrator passwords.

## 0.1.0 - 2026-10-19

- Extract the reusable public and admin modules into `programmernomad/laracorekit`.
- Add provider discovery, explicit configuration/asset installation and interactive administrator creation.
- Keep website, docs, showcase, sample accounts and demo dependency outside the package.
- Add login throttling, registration controls, settings save authorization and public content sanitization.

Initial stable release on Packagist. Requires Laravel 13, PHP 8.3+, and a fresh application using `Modules\User\Models\User`.
