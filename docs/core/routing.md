# Routing

Auth provides session authentication routes and Blog provides `/blog` and `/blog/{slug}`. Core provides the named `locale.switch` route. Routes use the web middleware group.

Your application owns `/`; the package does not replace your homepage. This repository's host additionally defines `/docs`, `/docs/{page}`, `/docs-source/{page}`, `/llms.txt`, `/changelog` and `/sitemap.xml`. UIShowcase owns `/ui-showcase` routes.

Use `php artisan route:list` to inspect exact routes. Conventional names such as `login`, `dashboard` and `blog.index` can collide with existing application routes. Resolve conflicts before installation and test `php artisan route:cache` during deployment.

See [installation](/docs/installation) and [package architecture](/docs/core/architecture).
