# Service providers

Laravel discovers `LaraCoreKit\Core\CoreServiceProvider` from the package's Composer metadata. It merges configuration, selects the packaged auth model when enabled, registers configured module providers, and optionally registers the default Filament panel.

Module providers load namespaced views, migrations, public routes and Livewire aliases. The package also registers the locale middleware and console commands. The host's `AppServiceProvider` handles website-only integration, including the docs view namespace and the demo's language-switch plugin.

The former application `ModuleServiceProvider` and `config/modules.php` have been removed. Use `config/laracorekit.php` for bundled modules. Independently distributed addons should use normal Composer provider discovery.

See [installation](/docs/installation) and [package architecture](/docs/core/architecture).
