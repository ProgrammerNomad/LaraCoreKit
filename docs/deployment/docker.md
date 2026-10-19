# Docker

Docker is an optional deployment/development choice. This repository includes Laravel Sail as a development dependency; it does not claim a maintained production container image.

For container deployment, build your own reviewed PHP/Node stages, install locked dependencies, compile assets, run as a suitable non-root user and mount persistent storage appropriately. Configure secrets at runtime and run migrations as a deliberate deployment step. Validate the resulting image with your application's smoke tests.

See [installation](/docs/installation) and [package architecture](/docs/core/architecture).
