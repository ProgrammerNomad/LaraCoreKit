# Project structure

The reusable package and the demo host have separate responsibilities.

```text
LaraCoreKit/
  packages/core/                 programmernomad/laracorekit
    composer.json                package dependencies and discovery
    src/CoreServiceProvider.php  configuration and module registration
    src/Console/                 installer and administrator creation
    src/Filament/                default package admin panel
    config/laracorekit.php       package defaults
    modules/                    Core, Auth, User, Settings, Media, Blog
    showcase/                   packaged UI example views and routes
    resources/stubs/            editable homepage template
    resources/dist/              prebuilt public CSS and showcase JavaScript
  app/                          demo/site application and custom panel
  modules/Docs/                 website documentation viewer
  modules/UIShowcase/           component demonstration application
  resources/views/site/         marketing homepage and changelog
  resources/views/vendor/core/  host override for shared layout
  database/seeders/              safe defaults and guarded demo seeders
  docs/                         documentation source
```

Composer loads package namespaces and Laravel discovers `LaraCoreKit\Core\CoreServiceProvider`. It registers enabled module providers from `config/laracorekit.php` and the default panel when enabled. The host disables the default panel and provides its own. There is one registration contract; modules are no longer registered individually in the host's `bootstrap/providers.php`.

## Public and admin features

Auth and Blog register public routes and Livewire components. User, Settings, Blog and Media provide the models, migrations and admin resources. Core supplies the shared layout, locale component and middleware. The package includes an editable starter homepage, shared header/footer, theme and language controls, and UI showcase examples. The project marketing homepage, changelog viewer, docs viewer and reset controls remain host responsibilities.

The first release bundles functional modules in one package to keep compatibility and releases manageable. Their internal boundaries remain available for future extraction. Installing the bundle installs its PHP dependencies; disabling Blog does not uninstall Media Library or remove database tables.

## Application ownership

Keep application logic and view overrides outside `vendor/`. Your app owns its homepage, environment, mail, database, storage, queues and deployment. The installer publishes configuration, starter views and prebuilt CSS/JavaScript. It backs up and replaces only the unchanged Laravel welcome route; custom routes and edited views are preserved. It creates no demo accounts. The default admin uses Filament's theme; the host's custom admin theme is separate.

The public model namespaces remain `Modules\...` for compatibility with existing code. Applications that already use those namespaces or the package's route names need conflict resolution. Existing applications must review user-model and data compatibility before installation.

## Extension points

- Publish config with `php artisan vendor:publish --tag=laracorekit-config`.
- Override namespaced Blade views under `resources/views/vendor/{namespace}`.
- Disable the packaged panel and register resources in your own Filament panel.
- Use normal Laravel packages with auto-discovered providers for additional modules.
- Re-publish assets after updates with `php artisan vendor:publish --tag=laracorekit-assets --force`.

See [installation](/docs/installation) and [upgrade notes](/docs/upgrade-guide).
