# Security policy

The standalone `programmernomad/laracorekit` package is published on Packagist; report issues against the reviewed tag you deploy. Older demo tags do not imply that their dependency lockfiles remain secure; audit and upgrade before deploying.

## Reporting a vulnerability

Report sensitive issues through [GitHub private vulnerability reporting](https://github.com/ProgrammerNomad/LaraCoreKit/security/advisories/new). Include affected commit/version, impact and a minimal reproduction. Do not post secrets or exploitable details in public issues. Repository administrators must enable private reporting if the form is unavailable.

Maintainers will assess reports and coordinate fixes and disclosure. Response and fix times depend on severity and maintainer availability; this project does not provide a guaranteed security-response SLA.

## Deployment expectations

- Use reviewed lockfiles and run Composer/npm audits regularly.
- Set `APP_DEBUG=false`, use HTTPS and keep environment files and logs private.
- Keep demo mode disabled in customer applications. Never deploy sample credentials or the demo reset scheduler against real data.
- Create administrators with unique passwords. Review permissions on public Livewire actions and direct admin record routes.
- Test upload restrictions, mail recovery and data backups for your deployment.

The package requires no activation, telemetry or user registration. The current automated tests are not an independent security audit. Read [production setup](docs/deployment/production.md) before deploying.
