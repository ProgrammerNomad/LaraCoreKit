# Blog

Blog supports JSON translations for titles, excerpts, content, categories and metadata, unique slugs, authors, draft/published/archived status, featured posts, publication timestamps and soft deletion.

Public routes are `/blog` and `/blog/{slug}`. The published scope requires published status and a publication time at or before now, so future-dated posts and drafts remain private. Blog HTML is sanitized before public rendering. The list includes search, categories and pagination; related-post filtering uses Laravel JSON queries rather than MySQL-specific raw SQL.

Filament BlogResource provides authoring and permission checks. Featured-image and gallery attachments use Media Library. Configure storage and workers for the media operations you enable. Blog depends on User and Media.

See [installation](/docs/installation) and [package architecture](/docs/core/architecture).
