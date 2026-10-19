# Module structure

Bundled modules are under `modules/{Name}`. Source is in src/, migrations in database/migrations, routes in routes/, and Blade views in views/ where applicable. Providers register their resources explicitly.

The package's composer.json owns autoload mappings, including separate factory/seeder namespaces. Website modules Docs and UIShowcase remain under the repository root's modules/ directory.

Not every module has all possible directories or a dedicated test suite. Check actual source and integration tests rather than assuming a module contract is fully implemented.

See [installation](/docs/installation) and [package architecture](/docs/core/architecture).
