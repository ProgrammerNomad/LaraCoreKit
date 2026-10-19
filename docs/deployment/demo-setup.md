# Demo setup

The demo is a disposable application hosted by this repository. It is not part of `programmernomad/laracorekit`. The existing `programmernomad/laracorekit-demo-module` dependency manages reset behavior and restrictions.

Use a separate database and storage location. Explicitly set `DEMO_MODE=true` only for the demo application. Follow the demo package's allowed-host requirements before enabling it in production. Then migrate and seed:

```bash
php artisan migrate
php artisan db:seed --class="Database\Seeders\DemoSeeder"
```

The seeder refuses to run with demo mode disabled. Admin/editor sample passwords come from the demo administrator credential configuration; user credentials come from demo user configuration. These accounts are publicly shared and must never exist in a customer application.

The demo package's reset command rebuilds its configured database and calls the default seeder, which delegates to DemoSeeder only when demo mode is enabled. Configure Laravel's scheduler only on the disposable demo host. Review blocked actions and test restrictions after package updates. Do not run reset commands against valuable data.

Public-facing credential banners should appear only while demo mode is active. Screenshots must use a disposable demo instance and contain no real customer information.
