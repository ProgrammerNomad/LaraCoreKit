# Publishing modules

Publish addons as Composer libraries with their own repository-root composer.json, version tags, license, docs and tests. Use Laravel provider discovery and namespaced views to avoid requiring manual source copies.

The reusable LaraCoreKit package is maintained in packages/core and must be exported to its own package repository before Packagist submission. Do not submit the website host as the core package. See the package release checklist for the release and subtree-split process.

State compatibility constraints accurately and test a clean consumer. Keep demo code and sample credentials out of release archives. Packagist counts downloads; it does not identify users.

See [installation](/docs/installation) and [package architecture](/docs/core/architecture).
