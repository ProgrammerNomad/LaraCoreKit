# Hosting

Deploy a supported PHP 8.3+ Laravel environment with required extensions, HTTPS, a webroot pointing at public/, a configured database, mail, storage and background workers as needed.

Use the production checklist for environment hardening, migrations, unique credentials and dependency audits. Do not expose .env, storage logs or repository files. Route requests through Laravel's front controller.

Keep the demo deployment isolated from customer applications and data. The package itself does not provision hosting, certificates or monitoring.

See [installation](/docs/installation) and [package architecture](/docs/core/architecture).
