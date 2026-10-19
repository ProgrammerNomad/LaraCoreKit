# LaraCoreKit

LaraCoreKit is an MIT-licensed modular Laravel foundation for a **public website and an admin workspace**. It combines Laravel 13, Filament 5, Livewire 4 and Tailwind CSS 4.

The reusable package is `programmernomad/laracorekit`, with source in `packages/core`. Its internal modules are Core, Auth, User, Settings, Blog and Media. The repository root hosts the marketing website, documentation viewer, UI showcase and optional demo behavior.

## What is implemented

- Editable starter homepage, responsive shared header/footer, persistent theme switching and local UI component showcase.

- Public login, registration when enabled, password recovery and account dashboard.
- Filament administration for users, roles, permissions, blog posts and settings.
- Multilingual blog fields, public blog pages, media attachments and language switching for English, Hindi and Arabic.
- Package discovery, migrations, a configuration/asset installer and interactive administrator creation.
- Module configuration and application-level Blade overrides.

## Start here

1. [Choose an installation path](/docs/installation).
2. [Understand package ownership](/docs/core/architecture).
3. [Review production setup](/docs/deployment/production).
4. [Read the upgrade guide](/docs/upgrade-guide).

First create a fresh Laravel 13 application using the [installation guide](/docs/installation), then install the published package from Packagist with `composer require programmernomad/laracorekit:"~0.2.0"`. There is no mandatory account or installation telemetry. API tokens, enforced email verification, billing and tenancy need additional implementation.

The main project repository is [ProgrammerNomad/LaraCoreKit](https://github.com/ProgrammerNomad/LaraCoreKit). The supporting laracorekit-package repository is only the package-only Composer distribution export; project documentation, demo GIF, screenshots, issues and development remain in the main repository.
