# Initial maintenance and distribution audit

**Historical findings:** this snapshot preceded the package extraction and remediation. See the current README, changelog, package release guide and implementation report for the resulting architecture and validation. Package identity is now `programmernomad/laracorekit`; earlier proposed names below are superseded.

Reviewed 19 October 2026. This is a repository and dependency review, not a complete security assessment. Versions and advisory counts are a point-in-time snapshot.

## Release blockers

1. **Dependency advisories:** `composer audit --locked --format=json` reports advisories against 21 package names, including Laravel, Filament, Livewire, Guzzle and Symfony components. `npm audit --json` reports 13 affected packages: 2 critical, 8 high and 3 moderate. These counts describe dependency advisories, not confirmed exploitable application vulnerabilities. Update compatible dependencies first, then assess remaining advisories individually; do not suppress audit failures to publish.
2. **Predictable seeded accounts:** `database/seeders/DatabaseSeeder.php` always calls `UserSeeder`, which creates privileged demo accounts with known passwords, including a literal `password` for the editor. Move demo users/content into an explicitly enabled demo seeder. Production setup should create its administrator interactively with a unique password. Test that default production seeding creates no demo accounts.
3. **Authentication protection:** `modules/Auth/src/Http/Livewire/Login.php` calls `Auth::attempt` without visible attempt throttling. Add server-side rate limiting to the Livewire action and tests for repeated failures and successful-login reset. Review registration and password recovery similarly. Remove routine email/role debug logging or document its retention.
4. **Insufficient regression coverage:** only two example tests were found in `tests`, and no module `*Test.php` files were found. Cover login, password reset, authorization, uploads, blog publication, module enable/disable behavior and demo restrictions before broad upgrades.
5. **Broken static-analysis prerequisites:** `phpstan.neon.dist` includes Larastan, but neither Larastan nor PHPStan is required in `composer.json`. Select compatible tooling, update obsolete configuration options, then make `composer review` pass.

## Dependency currency

Registry checks reported the following examples:

| Dependency | Locked/installed | Latest reported |
| --- | --- | --- |
| Laravel framework | 13.5.0 | 13.37.0 |
| Filament | 5.5.2 | 5.10.2 |
| Livewire | 4.2.4 | 4.4.7 |
| Media Library | 11.21.0 | 11.23.9 |
| Filament language switch | 4.3.0 | 5.0.0 |
| Spatie Permission | 6.25.0 | 8.3.0 |
| Vite | 6.4.1 | 8.3.4 |
| Laravel Vite plugin | 1.3.0 | 3.2.0 |
| Axios | 1.13.2 | 1.20.0 |

Latest does not automatically mean compatible. Use separate changes for major upgrades, verify PHP/Node requirements and peer dependencies, and regenerate lockfiles through the package managers. Re-run audit, tests and production asset build after updates.

## Other confirmed gaps

- Composer still identifies the project as `laravel/laravel` with Laravel's skeleton description. Give it its own vendor/package name before Packagist submission.
- README says Vite 5 while `package.json` requests Vite 6. README advertises Sanctum API tokens, but Sanctum is not in the root requirements and no implementation references were found outside documentation navigation. Verify the feature or correct the claim.
- README says every module ships tests; the repository scan did not find them.
- Module providers are registered directly in `bootstrap/providers.php`, while a separate configuration-driven loader exists. Establish a single registration contract and test that disabling a module actually disables it; consider how dependent modules behave.
- Test CI runs `composer update`, whereas quality CI installs the lockfile. Add an explicit locked-dependency lane and retain a separately named compatibility lane.
- SQLite test isolation is commented out in `phpunit.xml`. Set a dedicated test database before adding database-mutating tests.
- CI covers PHP 8.3 and SQLite only. Add supported PHP versions and database coverage according to an explicit support policy.
- `minimum-stability: dev` is broader than necessary unless an identified dependency requires it. Prefer stable dependencies after verifying resolution.

## Recommended Composer distribution

Start by publishing this repository as a **project** package, for example `programmernomad/laracorekit` (proposed name; availability and ownership must be checked). After publishing, installation becomes:

```sh
composer create-project programmernomad/laracorekit my-app
```

Keep the clone installation documented until the package is available and clean installation is verified. Register the GitHub repository on Packagist once, configure its GitHub update integration, and publish semantic version tags only after release checks pass. Composer derives versions from tags; do not add a manually maintained version field.

Next, extract reusable functionality into `programmernomad/laracorekit-core`, a library required by the starter project. This is an architectural migration, not a rename: move namespaces, providers, config, views, routes and migrations into a package, define publishable customization points, and test installation into a clean Laravel application. Existing apps need migration/upgrade instructions. Keep demo tooling and showcase content optional. Build on the existing separate demo-module package.

A project installed by `create-project` is a starting snapshot; future starter changes do not automatically upgrade the generated application. A core library installed with `require` can receive Composer updates. This maintainability benefit is the main reason to extract core.

## Adoption measurement

Packagist exposes total, monthly and daily downloads. These are adoption signals, not unique new projects, active sites or developer identities. CI, reinstalls, upgrades and caching affect counts. Core and starter downloads overlap: never sum them as unique users. Existing Git clones are not retroactively counted.

Recommended initial dashboard: starter downloads, core downloads, GitHub stars/forks, issue response time, release cadence and voluntarily submitted showcase projects. Keep download series separate. Use an optional community/showcase submission for developers who want to identify themselves. Avoid mandatory registration or hidden installation callbacks.

If active-installation measurement becomes necessary, design a separately reviewed, explicit opt-in telemetry feature: random installation identifier, limited version/environment fields, disclosed retention, disable/delete support, and a documented sampling policy. Do not send domains, emails, source code or secrets by default. Cloned deployments and disabled telemetry still prevent exact counting.

## Automation rollout

1. Added `.github/dependabot.yml` proposes weekly Composer, npm and GitHub Actions updates after this change reaches GitHub's default branch. Enable Dependabot security updates and vulnerability alerts in repository settings as well. No automatic merging is configured.
2. Add CI gates for Composer validation, dependency audits, working static analysis, focused tests and frontend build. Use deterministic installs with lockfiles and a separate compatibility-update job.
3. Add a clean-install smoke test that creates a fresh project, uses an isolated database, migrates, builds assets and checks representative public/admin routes.
4. Use a release PR workflow to update changelog/version tags after checks pass; connect tags to Packagist indexing. Keep a human release decision until regression coverage is meaningful.
5. After packages exist, collect Packagist statistics once daily using a scheduled GitHub Action or existing site scheduler. Store dated snapshots in durable storage with deduplication, timeouts and retry limits. A missing package or network failure must not become a zero-download datapoint. Do not create recurring Codex reminders for this application workflow.

## Sources

- [Composer create-project and CLI](https://getcomposer.org/doc/03-cli.md#create-project)
- [Composer library publishing and tags](https://getcomposer.org/doc/02-libraries.md)
- [Packagist setup and update integration](https://packagist.org/about)
- [Packagist download statistics API](https://packagist.org/apidoc#package-stats)

No dependencies were upgraded, package published, telemetry installed, or remote repository settings changed as part of this audit. The Dependabot configuration prepares update proposals; it does not establish that the application is up to date.
