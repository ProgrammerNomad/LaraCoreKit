# Testing

Run `composer test` for the PHPUnit suite. Database-mutating tests use SQLite in memory, enforced in phpunit.xml, and demo mode is disabled. Never point regression tests at a real application database.

Coverage includes safe default seeding, demo-seeder guards, login throttling, registration controls, admin access, publication visibility, content sanitization and documentation endpoints. These tests reduce regressions; they are not a complete independent security audit.

Run `python tools/consumer-smoke.py` to install only the package into an isolated temporary Laravel application, verify public/admin login routes and assets, and test cached routes/configuration. It leaves the temporary consumer for inspection.

Run `composer pint-test`, `composer phpstan`, dependency audits and both frontend builds as well. CI separates locked dependencies from compatible updates. The browser smoke script requires Playwright and the disposable preview fixture; see the screenshot guide.

See [installation](/docs/installation) and [package architecture](/docs/core/architecture).

## Database support and regression checks

The release validation covers SQLite and MySQL 8 on PHP 8.3. PHP 8.5 has configured CI lanes; remote execution must pass before claiming that version verified. PostgreSQL, MariaDB and SQL Server are not part of the verified database matrix for this release.

The default `phpunit.xml` enforces an in-memory SQLite database. For MySQL, create a **disposable** database named `laracorekit_test`, set `DB_PORT` and `DB_PASSWORD` for that server and run:

```bash
php vendor/bin/phpunit --configuration phpunit.mysql.xml
```

That configuration forces MySQL on localhost with the dedicated test database. Tests migrate/reset its tables. Never use application data for this database. CI supplies an isolated MySQL 8 service.

The suite now includes reset-token validation/consumption, neutral reset responses, reset throttling, executable/oversized image rejection and module dependency checks. Run `node tools/header-smoke.cjs` against the disposable preview to check header alignment, closed-menu height, open/close behavior and page overflow at seven widths from 320px to 1440px. Set `LARACOREKIT_PREVIEW_URL` to use another preview server.
