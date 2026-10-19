# Create an addon module

For an independently reusable addon, create a normal Composer library with its own namespace, service provider, routes, migrations, views, tests and README. The existing laracorekit-demo-module repository is an example of independent distribution.

Declare runtime dependencies in require, PSR-4 mappings in autoload and the provider in extra.laravel.providers. Use a Composer path repository during local development. Register admin resources in a custom panel or a documented Filament plugin.

The bundled module switch is for the known modules inside LaraCoreKit. It is not an arbitrary marketplace loader. Do not add application-specific source under vendor or modify the package's composer.json after installation.

See [installation](/docs/installation) and [package architecture](/docs/core/architecture).
