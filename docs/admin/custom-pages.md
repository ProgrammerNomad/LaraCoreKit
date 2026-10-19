# Custom admin pages

The package Settings page lives under `packages/core/modules/Settings/src/Filament/Pages`. Its view namespace is `settings`. The demo Dashboard lives under `app/Filament/Pages` and is host-only.

Use Filament 5's page APIs for your own application pages and register them in a custom panel. Enforce permissions again inside public Livewire mutation methods; navigation visibility alone is insufficient. Settings provides an example by checking edit permission in `save()`.

See [installation](/docs/installation) and [package architecture](/docs/core/architecture).
