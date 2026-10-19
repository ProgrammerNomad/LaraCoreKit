# Queues

Queue configuration remains standard Laravel configuration. Select a backend, run workers under a process supervisor and monitor failed jobs. Media conversions or notifications that you add may require workers.

The demo reset scheduler belongs only to the disposable demo host. Installing the reusable package does not configure a worker service or deployment scheduler automatically. Test retry and failure behavior for your application's jobs.

See [installation](/docs/installation) and [package architecture](/docs/core/architecture).
