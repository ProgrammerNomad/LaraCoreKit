# Starter releases and website handover

The main repository is now a Composer project, not a vendor-installed library. The Composer name remains programmernomad/laracorekit. Version 1.0 begins the editable modular starter series.

1. Verify tests, builds, audit and the clean create-project smoke test.
2. Push the reviewed main commit and create an immutable 1.0 release tag.
3. In Packagist, edit the existing package repository URL to https://github.com/ProgrammerNomad/LaraCoreKit. Configure its GitHub integration and trigger Update.
4. Confirm Packagist lists 1.0 with type project and the main repository source URL.
5. Test the exact public create-project command before promoting it.

Keep the old laracorekit-package repository available. Old 0.x lockfiles contain URLs pointing there. Deleting it may break reinstallations even if the main project is healthy. Existing 0.x tags are not moved or recreated.

## Plesk

Reconnect laracorekit.com to ProgrammerNomad/laracorekit-website, branch main. Preserve the current environment, database and persistent uploads. Deploy the website README's Composer/asset steps. The starter main branch is no longer the promotional website deployment source.

Packagist indexing and Plesk deployment are separate. Neither automatically upgrades users' customized source modules.
