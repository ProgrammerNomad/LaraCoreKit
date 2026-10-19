# Installation

LaraCoreKit is a reusable Laravel package for **both a public frontend and a Filament admin panel**. The website/demo application is a separate host in this repository. PHP 8.3+, Composer 2 and Laravel 13 are required. Node 22.12+ is required when building this repository's assets; CI uses Node 24.

## Release status

The package source is in `packages/core`, named `programmernomad/laracorekit`. The [standalone GitHub source](https://github.com/ProgrammerNomad/laracorekit-package) is available; its first standalone Packagist release is being prepared. Do not assume that `composer require programmernomad/laracorekit` works until the package is registered and a stable tag exists. No account, activation key or telemetry is required.

## Option A: install only the package directly from GitHub now

Start with a **fresh Laravel 13 application**. The first release uses `Modules\User\Models\User` and the stock Laravel `users` table; integrating an existing authentication system needs a separate migration plan.

```bash
composer create-project laravel/laravel my-app "^13.0"
cd my-app
composer config repositories.laracorekit vcs https://github.com/ProgrammerNomad/laracorekit-package
composer require programmernomad/laracorekit:dev-main
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

## Option B: run the complete GitHub demo/development host

```bash
git clone https://github.com/ProgrammerNomad/LaraCoreKit.git my-demo
cd my-demo
composer install
npm ci
```

Copy `.env.example` to `.env` (`cp` on Unix, `Copy-Item` in PowerShell), configure a database, then:

```bash
php artisan key:generate
php artisan migrate --seed
php artisan laracorekit:admin
php artisan storage:link
npm run build:core
npm run build
php artisan serve
```

This repository uses a Composer **path repository** pointing at `packages/core`; keep that directory with the checkout. It includes the marketing website, docs viewer, showcase and the separately published demo-module dependency. The reusable package does not require any of those.

Only on a disposable demo database, explicitly enable `DEMO_MODE=true` and seed `Database\Seeders\DemoSeeder`. Demo mode permits known sample credentials and scheduled resets. Never enable it for a customer deployment. See [demo setup](/docs/deployment/demo-setup).

## After the stable Packagist release

```bash
composer require programmernomad/laracorekit
php artisan laracorekit:install
php artisan migrate
php artisan laracorekit:admin
php artisan storage:link
```

Use the commands above only after release availability is verified. The package installs Laravel dependencies into an existing app; it does not download the demo website. See [release preparation](/docs/package-release) and [upgrading](/docs/upgrade-guide).

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
