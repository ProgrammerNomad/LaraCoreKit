# Shared layouts

The package's shared layout is `core::layouts.app`, loaded from its Core module. It provides a responsive page shell, stylesheet link, Livewire assets and navigation for enabled modules.

Override individual templates under `resources/views/vendor/core`. The demo host overrides `layouts/app.blade.php` there with the website header, footer, theme controls and metadata. Host-only marketing copy does not ship in the package.

Auth, Blog and Settings views use their own namespaces and can be overridden under matching vendor-view directories. Review copied overrides when upgrading, since they do not automatically inherit package fixes.

See [installation](/docs/installation) and [package architecture](/docs/core/architecture).
