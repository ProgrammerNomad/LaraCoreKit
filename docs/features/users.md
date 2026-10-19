# Users and account dashboard

The packaged `Modules\User\Models\User` extends Laravel's authenticatable model and includes Spatie Permission roles, notifications and a package-specific factory. Passwords are hashed through a model cast; password and remember token are hidden from serialization.

The public dashboard displays account information. Filament provides user CRUD to authorized administrators. A complete self-service profile editor, avatar pipeline and enforced email-verification flow are not bundled.

The package uses Laravel's standard users table. Existing applications with a different auth model must plan integration before installing. Create the first administrator interactively; normal seeding creates roles without known accounts.

See [installation](/docs/installation) and [package architecture](/docs/core/architecture).
