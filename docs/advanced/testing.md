# Testing

Run `composer test` for the PHPUnit suite. Database-mutating tests use SQLite in memory, enforced in phpunit.xml, and demo mode is disabled. Never point regression tests at a real application database.

Coverage includes safe default seeding, demo-seeder guards, login throttling, registration controls, admin access, publication visibility, content sanitization and documentation endpoints. These tests reduce regressions; they are not a complete independent security audit.

Run `python tools/consumer-smoke.py` to install only the package into an isolated temporary Laravel application, verify public/admin login routes and assets, and test cached routes/configuration. It leaves the temporary consumer for inspection.

Run `composer pint-test`, `composer phpstan`, dependency audits and both frontend builds as well. CI separates locked dependencies from compatible updates. The browser smoke script requires Playwright and the disposable preview fixture; see the screenshot guide.

See [installation](/docs/installation) and [package architecture](/docs/core/architecture).
