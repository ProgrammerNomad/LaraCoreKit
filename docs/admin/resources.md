# Admin resources

Resources live under the package module's `src/Filament/Resources` directory. They compose schema classes, table classes and list/create/view/edit pages. User resources manage User, Role and Permission models; BlogResource manages Blog.

Each resource checks permissions for record access and mutations. Bulk delete/restore/force-delete paths must remain consistent with record permissions. Test direct record URLs, not only resource navigation.

Add application-specific resources to your application's own panel. Editing files in vendor will be lost during updates.

See [installation](/docs/installation) and [package architecture](/docs/core/architecture).
