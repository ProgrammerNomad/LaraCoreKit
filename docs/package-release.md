# Publishing the reusable package

Package name: **`programmernomad/laracorekit`**. Package root: `packages/core`. It provides both public and admin features. The repository root is the demo/documentation host and must not be submitted as the reusable package.

## One-time setup

1. Use the selected distribution repository `ProgrammerNomad/laracorekit-package`. The Composer name remains `programmernomad/laracorekit`.
2. Export **only** `packages/core` to that repository. Update its Composer support links to the final repository. Include LICENSE, README, changelog and prebuilt frontend CSS.
3. Run clean-consumer installation and regression checks. Verify the archive excludes demo accounts, website, docs viewer and showcase.
4. Tag the first reviewed release, for example `v0.1.0`, in the package repository. Composer reads the version from the tag.
5. Submit that package repository to Packagist and enable its GitHub update integration. Keep API tokens in secret storage; never in source or screenshots.
6. Verify `composer require programmernomad/laracorekit:^0.1` from a fresh Laravel application. Only then remove the unreleased notices from website/README instructions.

The source remains maintained in this monorepo. The distribution repository receives the package export through the synchronization workflow described below, preserving its own maintenance workflow. Its root contains the package's `composer.json`; never push the demo repository's root into it. Review compatibility and release notes before tagging.

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
