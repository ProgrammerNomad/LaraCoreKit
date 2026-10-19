# Roles and permissions

Spatie Laravel Permission supplies authorization. `RolePermissionSeeder` creates Admin, Editor and User roles with permissions for user/role management, blog actions, settings and media-related operations. It never promotes a user based on a well-known email address.

The User model permits Admin and Editor roles into the panel. Resources additionally check the relevant permissions for viewing, creating, editing and deleting records; entering the panel does not grant access to every resource. Settings saves check `edit-settings`. Blog publication checks `publish-blog`.

Default editors can author and publish blog content but cannot manage users or roles. Test custom roles and direct resource URLs when extending authorization. Do not treat hidden navigation items as a security boundary.

See [installation](/docs/installation) and [package architecture](/docs/core/architecture).
