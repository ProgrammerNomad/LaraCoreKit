# Frequently asked questions

## Is this only an admin panel?

No. The package provides a public Livewire frontend and a Filament admin workspace, with shared users, roles, blog, settings and media.

## Should I clone GitHub or install with Composer?

Install `programmernomad/laracorekit:"^0.1"` from Packagist in a fresh Laravel application for your product. Clone the full repository to run the demo website, docs and showcase or contribute. GitHub dev-main is for testing unreleased changes.

For Composer, first run `composer create-project laravel/laravel my-app "^13.0"` and enter `my-app`. Requiring the core and running its installer alone do not finish setup: configure the database, migrate and create an administrator. A GitHub clone already contains Laravel, but still needs environment setup and asset builds. Follow the [complete installation commands](/docs/installation) for your chosen path.

## Does Composer install the demo too?

No. The package has no dependency on the demo module, marketing website, Docs module or UIShowcase module. Its own Laravel/Filament dependencies still need to be downloaded.

## Can I update my application later?

Yes, package code can be updated through Composer. Your application code and view overrides stay outside vendor. Read release notes, back up data and test migrations in staging. Before 1.0, pin a tested minor release series.

## Can I add it to an existing application?

The initial supported path is a fresh Laravel 13 application. Existing authentication models, route names, tables and Modules namespaces require compatibility review. The installer does not resolve those conflicts automatically.

## Is everything advertised implemented?

The installation and introduction pages list the implemented scope. API tokens, email-verification enforcement, billing, tenancy and a module marketplace are not bundled. There is no claim of a completed independent security audit.

## Are installations tracked?

No telemetry or registration is required. Packagist downloads indicate distribution activity, but cannot identify developers or count unique active installations.

## Can AI tools read the documentation?

Documentation is server-rendered HTML with stable links and a plain-text index at `/llms.txt`. Markdown source is available under `/docs-source/{page}`. These formats help tools retrieve accurate information; they do not guarantee search rankings or recommendations.
