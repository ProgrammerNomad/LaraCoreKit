# Publishing the reusable package

Package name: **`programmernomad/laracorekit`**. Package root: `packages/core`. It provides both public and admin features. The repository root is the demo/documentation host and must not be submitted as the reusable package.

## Current release

[v0.1.0 is available on Packagist](https://packagist.org/packages/programmernomad/laracorekit), from standalone package commit `220940d294bcd7d6de84f26d293867d576820e71`. The recommended application install is:

```bash
composer create-project laravel/laravel my-app "^13.0"
cd my-app
composer require programmernomad/laracorekit:"^0.1"
php artisan laracorekit:install
```

Follow [installation](/docs/installation) for database setup, migrations and administrator creation. Packagist registration and the first tag are complete. Never recreate or move a published tag.

Source remains in `packages/core`; the standalone repository receives package-only exports. The website/demo root is not the library. Review compatibility and release notes before each new tag.

## Release checks

```bash
composer validate --strict
composer --working-dir=packages/core validate --strict
composer audit --locked
npm ci
npm audit
npm run build:core
npm run build
composer test
composer phpstan
```

Run the documented clean-consumer smoke check as well. Keep the release blocked on unresolved security findings or installation failures. Publish release notes with migration, asset and view-override changes.

## Adoption statistics

Packagist exposes download totals and daily/monthly counts through its [statistics API](https://packagist.org/apidoc). They are not unique developers, new projects or active installations. CI and reinstallations affect counts. The package sends no telemetry and does not require registration.

The host command `php artisan laracorekit:stats` records validated daily download snapshots on the local storage disk under `metrics/packagist/YYYY-MM-DD.json`. Missing packages produce no snapshot; invalid/network responses fail without inventing zeros. Repeated runs on the same UTC day reuse the existing snapshot.

After registration, set `LARACOREKIT_COLLECT_STATS=true` on the website host and run Laravel's scheduler. The command is scheduled daily at 07:23 in the application's configured timezone. Keep the local storage disk persistent and backed up. The command uses a public API and needs no Packagist token. These snapshots are distribution metrics, not installation telemetry.

`python tools/package-release.py` builds a package-only review ZIP and checksum manifest under private `storage/app/releases`. The manual **Package Release Preview** GitHub workflow runs checks and uploads the archive for review. Neither publishes to Packagist or pushes a package repository automatically.

## Ongoing source synchronization

The distribution repository's **Sync Package Source** workflow checks the public monorepo main branch daily at 08:17 UTC or on manual dispatch. Its maintained template is `.github/package-workflows/sync-source.yml` in the monorepo; the executable copy lives under `.github/workflows` in the distribution repository.

It validates the monorepo source, builds the package, tests a clean consumer, and opens a draft package-only update PR. It skips when extraction has not reached main yet, nothing has changed, or a prior package-sync PR is waiting for review. It preserves the distribution repository's maintenance workflow and never merges or tags a release.

The job uses the distribution repository's own short-lived GITHUB_TOKEN, so no cross-repository personal token or Packagist secret is needed. The distribution repository must allow Actions to create pull requests. Review source updates before merging; then create a reviewed release tag for Packagist indexing.

## Maintainer workflow for future releases

1. Resolve the GitHub Actions account lock and pass the host PR checks. Review/merge the host extraction before daily source synchronization can read it from main.
2. Review the standalone package-only source export and prebuilt CSS. Keep its Composer name unchanged and omit a manual version field.
3. Run **Prepare Release PR** with the next reviewed version, for example `0.1.1` for a compatible patch. Review and merge its release notes. Do not reuse `0.1.0`.
4. In the package repository, publish a GitHub release with a new semantic tag targeting the reviewed commit. Never move existing tags or tag the demo repository as the core package.
5. Packagist registration is already complete. Verify the GitHub update integration is enabled and the new version appears on [the package page](https://packagist.org/packages/programmernomad/laracorekit). See [integration setup](https://packagist.org/about#how-to-update-packages) if needed; keep API tokens out of source and chat.
6. Test the new version in a fresh Laravel application:

```bash
composer create-project laravel/laravel my-app "^13.0"
cd my-app
composer require programmernomad/laracorekit:"^0.1"
php artisan laracorekit:install
# Configure the application's .env and its database first.
php artisan migrate
php artisan laracorekit:admin
php artisan storage:link
```

7. Verify `/blog`, `/login` and `/admin`, then update the website's version references and deploy the reviewed host. Enable the optional statistics collector on persistent storage only after the public package endpoint works.

Future updates use reviewed source-sync PRs, then a release-notes PR and a new semantic tag. Packagist's GitHub integration indexes pushed tags; Composer updates remain under each consuming application's control. Download totals are not unique new installations or developer identities.

The distribution workflow template lives at `.github/package-workflows/prepare-release.yml`; the executable copy lives in the standalone repository. Official references: [Packagist publishing/integration](https://packagist.org/about), [Composer versioning](https://getcomposer.org/doc/02-libraries.md).

After a release, mirror its changelog section into `packages/core/CHANGELOG.md` in the monorepo before the next source synchronization so that exported release history remains intact.
