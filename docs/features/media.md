# Media attachments

The package requires Spatie Laravel Media Library and registers its media-table migration. Blog implements Media Library's HasMedia contract, with `featured_image` as a single-file collection and a `gallery` collection.

The Media module supplies infrastructure, not a standalone `/admin/media` library resource. Automatic thumbnails, a full media browser and storage-specific configuration should not be assumed. Configure permitted file types, size limits, storage and queue behavior for your application, and test uploads before deployment.

Run `php artisan storage:link` when using public local storage. S3 requires your own disk configuration and credentials. The demo's reset behavior is separate from this module.

See [installation](/docs/installation) and [package architecture](/docs/core/architecture).
