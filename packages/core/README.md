# LaraCoreKit

Reusable public frontend and Filament administration for Laravel. This repository is the distribution source for `programmernomad/laracorekit`. Development and integration tests are maintained in the [LaraCoreKit monorepo](https://github.com/ProgrammerNomad/LaraCoreKit), under `packages/core`.

## Installation

LaraCoreKit is a reusable Laravel package for **both a public frontend and a Filament admin panel**. The website/demo application is maintained separately in the LaraCoreKit monorepo. PHP 8.3+, Composer 2 and Laravel 13 are required. Prebuilt assets are included, so consuming the default package UI does not require Node. Asset development happens in the monorepo with Node 22.12+ (CI uses Node 24).

## Release status

Stable releases are published on [Packagist](https://packagist.org/packages/programmernomad/laracorekit) as `programmernomad/laracorekit` (current stable line: `^0.1`). Development continues in the [LaraCoreKit monorepo](https://github.com/ProgrammerNomad/LaraCoreKit) under `packages/core`; this repository is the distribution source. No account, activation key or telemetry is required.

## Install from Packagist (recommended)

Start with a **fresh Laravel 13 application**. The first release uses `Modules\User\Models\User` and the stock Laravel `users` table; integrating an existing authentication system needs a separate migration plan.

```bash
composer create-project laravel/laravel my-app "^13.0"
cd my-app
composer require programmernomad/laracorekit:"^0.1"
php artisan laracorekit:install
```

Configure `.env` with your application URL, mail and database settings. SQLite is sufficient for initial evaluation. Keep `APP_DEBUG=false` in production.

```bash
php artisan migrate
php artisan laracorekit:admin
php artisan storage:link
php artisan serve
```

Open `/admin` for administration and `/blog` for the public frontend. Your own `/` route remains under your application's control. `/login`, `/forgot-password`, `/reset-password/{token}` and `/dashboard` are provided by the Auth module. Public registration is disabled by default; enable `registration` in `config/laracorekit.php` when needed.

The administrator command prompts for a unique email and a hidden password. It does not promote an existing account. Default seeding does not create sample users. Prebuilt package CSS is published by the installer, so consuming the default package views does not require the demo's npm dependencies.

Package discovery registers providers, views, routes and migrations. Composer installs dependencies; it does **not** configure your database or run package installation migrations automatically. `laracorekit:install --migrate` is available when you explicitly want the installer to run outstanding migrations. Re-running the installer preserves existing configuration.

For contributors testing unreleased changes only, add a VCS repository and require `dev-main`. Application installs should use the tagged Packagist package above:

```bash
composer config repositories.laracorekit vcs https://github.com/ProgrammerNomad/laracorekit-package
composer require programmernomad/laracorekit:dev-main
```

## Demo and screenshots

![Public site and admin walkthrough](https://raw.githubusercontent.com/ProgrammerNomad/LaraCoreKit/42eb1bf42e5c833f7810fd0114432d029fa8c220/docs/images/screenshots/walkthrough.gif)

These real screenshots show the demonstration host, including optional website/docs/showcase features outside the core library. See the [full demo repository and gallery](https://github.com/ProgrammerNomad/LaraCoreKit/tree/42eb1bf42e5c833f7810fd0114432d029fa8c220#screenshots) for demo setup and contributions. Composer installs only the reusable frontend/admin bundle and its dependencies.

## Customization

- Edit published `config/laracorekit.php` for registration, modules and panel settings.
- Override individual views under `resources/views/vendor/core`, `auth`, `blog` or `settings`, following Laravel's namespaced-view override convention. Do not edit `vendor` files.
- To use your own Filament panel, set `panel.enabled=false` and register the desired resources/pages in your provider. The demo host is an example of this pattern.
- Keep User enabled for Auth, Blog and the packaged panel. Blog also requires Media. Invalid dependency combinations fail with an explicit configuration error.
- Disabling a module stops its provider/routes/resources from loading. It does not drop data or remove installed Composer dependencies.
- Routes use conventional names such as `login`, `dashboard`, and `blog.index`. Resolve collisions before integrating with existing routes.

The initial package is intended for new applications. API tokens, email-verification enforcement, billing, tenancy and a public module marketplace are not bundled capabilities.

## Local package development

When contributing from the monorepo, use a path repository instead of the GitHub VCS repository:

Add this path entry to the consumer application's `repositories` array in `composer.json`. The explicit local version keeps the command working when the monorepo is checked out on a feature branch:

```json
{
  "type": "path",
  "url": "../LaraCoreKit/packages/core",
  "options": {
    "versions": { "programmernomad/laracorekit": "dev-main" }
  }
}
```

```bash
composer require programmernomad/laracorekit:dev-main
```

A development branch can change without a release. Pin and review a tested commit for evaluation; use a reviewed tagged release for production. The monorepo host already configures the local path and an explicit dev-main version for CI.
