# LaraCoreKit

**A modular Laravel foundation for your public website and admin workspace.**

Laravel 13 · Filament 5 · Livewire 4 · Tailwind CSS 4 · PHP 8.3+ · MIT

[Packagist](https://packagist.org/packages/programmernomad/laracorekit) · [Demo website](https://www.laracorekit.com) · [Documentation](https://www.laracorekit.com/docs) · [Installation](docs/installation.md) · [Security policy](SECURITY.md)

## Install with Composer (recommended)

Install the published public frontend and Filament admin bundle in a fresh Laravel 13 application:

```bash
composer create-project laravel/laravel my-app "^13.0"
cd my-app
composer require programmernomad/laracorekit:"^0.1"
php artisan laracorekit:install
```

Configure your database, application URL and mail in `.env`, then:

```bash
php artisan migrate
php artisan laracorekit:admin
php artisan storage:link
php artisan serve
```

Visit `/blog`, `/login` and `/admin`. Prebuilt assets ship with the package; the default package UI does not require npm. [Full installation and customization guide](docs/installation.md).

## See the public site and admin

![LaraCoreKit walkthrough: public site, blog, administration and documentation](docs/images/screenshots/walkthrough.gif)

Real views from the disposable demonstration application. The documentation viewer, component showcase, sample content and demo controls are host features outside the core package.

## Package and demo are separate

The reusable package **`programmernomad/laracorekit`** is maintained in [`packages/core`](packages/core) and exported to [laracorekit-package](https://github.com/ProgrammerNomad/laracorekit-package). It includes public authentication/blog pages, Filament administration, users, permissions, settings and media.

The optional [demo module](https://packagist.org/packages/programmernomad/laracorekit-demo-module) stays separate. Clone this monorepo to explore the demo or contribute; use the Composer installation above for your own application.

## Run the complete GitHub host

Requires Composer 2, PHP 8.3+ and Node 22.12+ (CI uses Node 24).

```bash
git clone https://github.com/ProgrammerNomad/LaraCoreKit.git my-app
cd my-app
composer install
npm ci
```

Copy `.env.example` to `.env`, configure your database, then:

```bash
php artisan key:generate
php artisan migrate --seed
php artisan laracorekit:admin
php artisan storage:link
npm run build:core
npm run build
php artisan serve
```

Normal seeding creates roles, not public sample accounts. Only a disposable demo instance should enable `DEMO_MODE=true` and run the guarded DemoSeeder. Never use demo credentials in production.

## What is included

| Public frontend | Admin and infrastructure |
| --- | --- |
| Login and password recovery | Filament administration |
| Optional registration and account dashboard | Users, roles and permissions |
| Public multilingual blog | Blog authoring and publication |
| English, Hindi and Arabic language switching | Settings and media attachments |
| RTL-aware shared layout | Configurable modules and view overrides |

API tokens, enforced email verification, billing, tenancy and a marketplace are not bundled. Check [architecture](docs/core/architecture.md) and [production setup](docs/deployment/production.md) before adopting.

## Screenshots

| Public website | Filament administration |
| --- | --- |
| ![Public homepage](docs/images/screenshots/homepage.png) | ![Admin dashboard](docs/images/screenshots/admin-dashboard.png) |
| ![Public blog](docs/images/screenshots/blog.png) | ![Documentation](docs/images/screenshots/documentation.png) |
| ![Component showcase](docs/images/screenshots/ui-showcase.png) | ![Mobile navigation](docs/images/screenshots/mobile-navigation.png) |

Screenshots show the local demonstration application, including host-only features. Open any image for the full view. See [capture instructions](docs/SCREENSHOT_GUIDE.md) to reproduce the screenshots and GIF.

## Development and validation

```bash
composer test
composer pint-test
composer phpstan
composer audit --locked
npm audit
npm run build:core
npm run build
```

See [contribution guidelines](CONTRIBUTING.md), [upgrade guide](docs/upgrade-guide.md), and [package release checklist](docs/package-release.md). Keep changes to package code in `packages/core`; site-specific changes belong in the host. Published assets must be rebuilt when their source changes.

## Adoption and privacy

No registration, activation or telemetry is required. Packagist downloads measure distribution activity, not unique developers or active projects. The host includes a validated daily snapshot command and optional scheduler configuration; see [release and metrics setup](docs/package-release.md). Contributions, issues and voluntary showcase submissions are welcome. Search engines and AI tools can read server-rendered docs and `/llms.txt`; no ranking or recommendation is promised.

## License

[MIT](LICENSE). Report sensitive vulnerabilities through the [security policy](SECURITY.md).
