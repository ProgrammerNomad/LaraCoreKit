# Module best practices

Keep application-specific code outside vendor. Use unique namespaces, route names and view namespaces for addons. Declare dependencies explicitly and avoid references to demo-host classes or filesystem paths.

Authorize mutations on the server, validate uploads, rate-limit abuse-sensitive actions and avoid sensitive logs. Preserve migration history and document data changes. Tests should cover clean installation, disabled-module behavior, permissions and upgrades.

Do not assume configuration disables installed dependencies or deletes data. Keep public feature claims aligned with tested behavior. Use release notes and clear support constraints rather than promising every Laravel/database version.

See [installation](/docs/installation) and [package architecture](/docs/core/architecture).
