# Filament administration

The reusable package provides its own panel at `/admin`, with public frontend features available alongside it. Create an administrator with `php artisan laracorekit:admin`; a generic Filament user without the required role cannot access the panel.

Registered resources include users, roles, permissions and blogs, plus the settings page. There is no separate media-library resource. Use `php artisan route:list --path=admin` for exact resource URLs.

The package panel uses Filament's default theme. The website host disables that panel and registers a custom panel provider, theme, dashboard and optional demo widget. Demo banners are not part of the package.

Set `panel.enabled=false` to build your own panel and register the resources you need. Preserve authorization methods when customizing resources.

See [installation](/docs/installation) and [package architecture](/docs/core/architecture).
