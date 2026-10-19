# Upgrade guide

## Migrating an existing LaraCoreKit checkout to the package layout

Back up the application and database. Deploy source and lockfile together. The functional modules have moved from `modules/{Core,Auth,User,Settings,Media,Blog}` to `packages/core/modules`. Their public `Modules\...` namespaces and migration filenames are preserved. The media migration moved into the package with the same filename so an existing migration record prevents it from being rerun.

Remove old individual module provider entries and obsolete `config/modules.php`. The package provider reads `config/laracorekit.php`. The host still registers its custom Filament panel and UIShowcase provider. Home and Changelog are now application Livewire components, with views under `resources/views/site`.

Sample seeders moved into `Database\Seeders`. Normal seeding creates roles only, unless explicit demo mode is enabled. The demo reset package calls the default seeder, which delegates to the guarded DemoSeeder in demo mode. Do not run `migrate:fresh` against an existing customer database.

```bash
composer install
php artisan optimize:clear
php artisan migrate
php artisan vendor:publish --tag=laracorekit-assets --force
npm ci
npm run build:core
npm run build
```

Review your copied view overrides against the package changes and verify authentication, resource permissions, blog publication and uploads in staging before deployment. Any public demo passwords previously used in a real deployment must be replaced.

## Updating package consumers

For the published package, use `composer update programmernomad/laracorekit --with-all-dependencies`, review the lockfile and release notes, run migrations and republish package assets. Application view overrides are preserved but may need manual changes. Minor releases before 1.0 can include breaking changes; pin a tested minor series.

The migration does not automatically turn the demo host into a minimal customer app. For a clean application use the package installation path.
