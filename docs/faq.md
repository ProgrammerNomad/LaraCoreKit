# Frequently asked questions

## Where do I edit modules?

Directly in modules/. The starter source belongs to your application. Third-party dependencies remain in vendor/.

## How do I install?

Use composer create-project programmernomad/laracorekit my-app after the 1.0 project release is indexed on Packagist, or clone the main repository. See installation.md for complete setup.

## Do Composer updates overwrite my modules?

No. They update dependencies, not root application source. Review upstream releases and merge relevant source changes using Git.

## Is the demo website included?

An editable frontend, admin, blog/authentication and component examples are included. Promotional pages, docs viewer, reset controls and sample accounts live in the separate website repository.

## Are downloads tracked?

Packagist reports aggregate downloads, not unique developers or active applications. No telemetry or activation is required.

## Can I upgrade from the 0.x library?

Not as a drop-in composer require update. See upgrade-guide.md. The 1.x project has a different source-ownership model.
