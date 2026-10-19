# Updates and migration

## Editable starter (1.x)

Composer updates Laravel, Filament and third-party dependencies. It does not update root project source. Review upstream Git changes and selectively merge fixes into your own repository. Back up data, test migrations and review conflicts before deploying.

## Previous Composer library (0.x)

The 1.0 release is a different installation model, not a drop-in library update. Keep existing applications constrained to their tested 0.x series. Preserve the legacy laracorekit-package repository and tags: old lockfiles refer to its archive/source URLs.

To migrate, create the starter in a separate directory, compare configuration, authentication, routes and database migrations, then port your application changes. Do not install the project over an existing application, duplicate migrations, or replace the database. Test against a copy of production data before cutover.

## Distribution cutover

Connect Packagist's existing programmernomad/laracorekit entry to https://github.com/ProgrammerNomad/LaraCoreKit and confirm a 1.0 project release is indexed before announcing create-project. Do not rewrite 0.x tags. Retain the old repository for consumers; changing Packagist metadata does not rewrite their lockfiles.
