# Performance

The host builds ordinary public JavaScript separately from Chart.js, Sortable and Prism used by the component showcase. Images below the fold should use lazy loading, defined dimensions and suitable compression.

Use production builds, reviewed lockfiles, OPcache, appropriate cache storage and eager loading for public content. Paginate lists and measure real response times with representative data before making performance claims.

Run `npm run build:core` for the package's prebuilt public stylesheet and `npm run build` for the demo host. Package consumers do not need the demo's npm dependencies to use default views. Test view overrides after changes.

See [installation](/docs/installation) and [package architecture](/docs/core/architecture).
