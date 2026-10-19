# Forms and tables

The package uses Filament 5 schema and table APIs. Forms are organized under resource `Schemas` directories; table definitions live under `Tables`.

User forms contain identity fields, hashed password handling and role assignments. Blog forms contain translations, status, author and metadata fields. Table definitions provide search, filters and record actions.

Validate permissions on the server for role assignment, publication and destructive actions. Use Laravel's JSON query syntax for database portability rather than concatenating SQL for a specific database. Consult the official Filament 5 documentation when extending components.

See [installation](/docs/installation) and [package architecture](/docs/core/architecture).
