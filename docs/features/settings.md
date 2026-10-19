# Site settings

Settings stores key/value data with JSON values, type metadata and translatable fields. Its Filament page edits site identity, contact details, footer and SEO fields. Loading the page requires `view-settings`; saving requires `edit-settings`.

The model provides `Setting::get($key, $default)` and `Setting::set($key, $value)`. The page caches individual settings and invalidates affected keys when saving rather than clearing the application's entire cache.

The package does not seed the demo's brand/contact information into customer applications. Configure your own defaults. Keep secrets in appropriate environment/secret storage rather than publicly rendered settings.

See [installation](/docs/installation) and [package architecture](/docs/core/architecture).
