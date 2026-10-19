# Installation

LaraCoreKit is a reusable Laravel package for **both a public frontend and a Filament admin panel**. The website/demo application is a separate host in this repository. PHP 8.3+, Composer 2 and Laravel 13 are required. Node 22.12+ is required when building this repository's assets; CI uses Node 24.

## Release status

Stable releases are published on [Packagist](https://packagist.org/packages/programmernomad/laracorekit) as `programmernomad/laracorekit` (current stable line: `~0.2.0`). The package source is maintained in this monorepo under `packages/core`; the [distribution repository](https://github.com/ProgrammerNomad/laracorekit-package) tracks tagged releases. No account, activation key or telemetry is required.

## Option A: install from Packagist (recommended)

Start with a **fresh Laravel 13 application**. The first release uses `Modules\User\Models\User` and the stock Laravel `users` table; integrating an existing authentication system needs a separate migration plan.

The `create-project` command installs Laravel and initializes its `.env`, application key and default SQLite database. Run the remaining commands inside `my-app`. `composer require` and `laracorekit:install` alone assume Laravel already exists and do not create the complete demo website.

```bash
composer create-project laravel/laravel my-app "~13.0"
cd my-app
composer require programmernomad/laracorekit:"~0.2.0"
php artisan laracorekit:install
```

Configure `.env` with your application URL, mail and database settings. For local evaluation, keep the generated SQLite configuration and set `APP_URL=http://127.0.0.1:8000`. Keep `APP_DEBUG=false` in production.

```bash
php artisan migrate
php artisan laracorekit:admin
php artisan storage:link
php artisan serve
```

Open `/admin` for administration and `/blog` for the public frontend. From v0.2.0, the installer replaces Laravel's unchanged welcome route with an editable starter homepage. Custom homepage routes are preserved. `/login`, `/forgot-password`, `/reset-password/{token}` and `/dashboard` are provided by the Auth module. Public registration is disabled by default; enable `registration` in `config/laracorekit.php` when needed.

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

This repository uses a Composer **path repository** pointing at `packages/core`; keep that directory with the checkout. It includes the marketing website, docs viewer, showcase and the separately published demo-module dependency. The package now includes its own starter homepage and the same UI examples with prebuilt assets; it does not depend on the marketing site, Docs module or reset/demo module.

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

## Editable frontend and component library (v0.2)

The normal `laracorekit:install` command now installs the frontend too. On a fresh Laravel application, `/` shows your starter homepage with a responsive header, footer, language menu, light/dark theme and links to the blog and component library. `/ui-showcase` includes the existing example pages, copyable source, charts and sortable examples. These are UI examples; commerce, payments and other example-specific backend behavior are not implemented by preview markup.

Edit these application-owned files:

- `resources/views/home.blade.php`: homepage sections, copy and links.
- `resources/views/vendor/core/layouts/app.blade.php`: shared header, footer, logo and navigation.
- `.env`: your `APP_NAME`, `APP_URL` and other environment settings.
- `resources/views/vendor/showcase/`: editable component examples after running `php artisan vendor:publish --tag=laracorekit-showcase-views`.

The installer does not overwrite edited views or custom routes. Only Laravel's unchanged default welcome route is replaced; its backup is `routes/web.php.laracorekit-backup`. For a custom application, resolve the existing `/` route yourself and point it at `Route::view('/', 'home')->name('home');`. Clear cached routes with `php artisan optimize:clear` after changing them. Use `--without-frontend` to skip publishing starter views and changing the welcome route. Set `showcase.enabled=false` in `config/laracorekit.php` to disable the component library routes.

Default views use prebuilt assets and need no npm build. When adding Tailwind utility classes that are not present in the shipped stylesheet, compile your application's Tailwind CSS and load it in the published layout; never edit files in `vendor`. Laravel view overrides also let you customize individual blog/auth pages using `php artisan vendor:publish --tag=laracorekit-views`.

### Upgrade from 0.1 without recreating your application

```bash
composer require programmernomad/laracorekit:"~0.2.0"
php artisan laracorekit:install
php artisan optimize:clear
```

Keep your existing database and administrator. Do not rerun `create-project` or reset the database. If you previously published a custom layout, it stays unchanged: compare it with the new package layout and merge the header/footer/theme features you want. The starter is an application foundation, not a copy of the project's promotional website or demo reset service.
