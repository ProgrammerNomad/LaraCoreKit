# Installation

LaraCoreKit is a reusable Laravel package for **both a public frontend and a Filament admin panel**. The website/demo application is a separate host in this repository. PHP 8.3+, Composer 2 and Laravel 13 are required. Node 22.12+ is required when building this repository's assets; CI uses Node 24.

## Release status

Stable releases are published on [Packagist](https://packagist.org/packages/programmernomad/laracorekit) as `programmernomad/laracorekit` (current stable line: `^0.1`). The package source is maintained in this monorepo under `packages/core`; the [distribution repository](https://github.com/ProgrammerNomad/laracorekit-package) tracks tagged releases. No account, activation key or telemetry is required.

## Option A: install from Packagist (recommended)

Start with a **fresh Laravel 13 application**. The first release uses `Modules\User\Models\User` and the stock Laravel `users` table; integrating an existing authentication system needs a separate migration plan.

The `create-project` command installs Laravel and initializes its `.env`, application key and default SQLite database. Run the remaining commands inside `my-app`. `composer require` and `laracorekit:install` alone assume Laravel already exists and do not create the complete demo website.

```bash
composer create-project laravel/laravel my-app "~13.0"
cd my-app
composer require programmernomad/laracorekit:"~0.1.0"
php artisan laracorekit:install
```

Configure `.env` with your application URL, mail and database settings. For local evaluation, keep the generated SQLite configuration and set `APP_URL=http://127.0.0.1:8000`. Keep `APP_DEBUG=false` in production.

```bash
php artisan migrate
php artisan laracorekit:admin
php artisan storage:link
php artisan serve
```

Open `/admin` for administration and `/blog` for the public frontend. Your own `/` route remains under your application's control. `/login`, `/forgot-password`, `/reset-password/{token}` and `/dashboard` are provided by the Auth module. Public registration is disabled by default; enable `registration` in `config/laracorekit.php` when needed.

From v0.1.1, the administrator command prompts for a unique email and a hidden password of at least 8 characters; invalid passwords can be retried without restarting. Longer unique passwords are recommended. A rejected password does not undo installation or migrations. It does not promote an existing account. Default seeding does not create sample users. Prebuilt package CSS is published by the installer, so consuming the default package views does not require the demo's npm dependencies.

Package discovery registers providers, views, routes and migrations. Composer installs dependencies; it does **not** configure your database or run package installation migrations automatically. `laracorekit:install --migrate` is available when you explicitly want the installer to run outstanding migrations. Re-running the installer preserves existing configuration.

For contributors testing unreleased changes only, add a VCS repository and require `dev-main`. Use the tagged Packagist package above for application installs:

```bash
composer config repositories.laracorekit vcs https://github.com/ProgrammerNomad/laracorekit-package
composer require programmernomad/laracorekit:dev-main
```

## Option B: run the complete GitHub demo/development host

```bash
git clone https://github.com/ProgrammerNomad/LaraCoreKit.git my-demo
cd my-demo
php -r "copy('.env.example', '.env');"
composer install
```

Laravel is already included in this checkout; do not run `composer create-project` here. Set `APP_URL=http://127.0.0.1:8000` in `.env`. Keep the default `DB_CONNECTION=sqlite` for local evaluation; the command below creates its database file. For MySQL, configure an existing database and credentials instead and skip the SQLite file command.

```bash
php artisan key:generate
php -r "file_exists('database/database.sqlite') || touch('database/database.sqlite');"
php artisan migrate --seed
php artisan laracorekit:admin
php artisan storage:link
npm ci
npm run build:core
npm run build
php artisan serve
```

This repository uses a Composer **path repository** pointing at `packages/core`; keep that directory with the checkout. It includes the marketing website, docs viewer, showcase and the separately published demo-module dependency. The reusable package does not require any of those.

Only on a disposable demo database, explicitly enable `DEMO_MODE=true` and seed `Database\Seeders\DemoSeeder`. Demo mode permits known sample credentials and scheduled resets. Never enable it for a customer deployment. See [demo setup](/docs/deployment/demo-setup).

The package installs Laravel dependencies into an existing app; it does not download the demo website. See [release preparation](/docs/package-release) and [upgrading](/docs/upgrade-guide).

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

A development branch can change without a release. Pin and review a tested commit for evaluation; use a reviewed tagged release for production when available. The monorepo host already configures the local path and an explicit dev-main version for CI.

## Updating an existing 0.1 installation

The commands use `~0.1.0` (the 0.1 patch series) to avoid caret escaping problems with Composer on Windows PowerShell. If an earlier command saved `0.1` as an exact constraint, run:

```bash
composer require programmernomad/laracorekit:"~0.1.0"
php artisan laracorekit:install
php artisan laracorekit:admin
```

Run the administrator command only if you still need to create an administrator. Existing accounts and passwords remain unchanged. You do not need to recreate Laravel or repeat successful migrations for this password-prompt fix. Pushing repository code alone does not update stable Composer installs: a new package tag must be indexed by Packagist. Existing applications update only when their maintainers run Composer.
