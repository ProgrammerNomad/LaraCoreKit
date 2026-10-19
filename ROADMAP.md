# Roadmap

## First standalone package release

- [x] Extract reusable public and admin modules into `programmernomad/laracorekit`.
- [x] Keep demo website, Docs, UIShowcase and sample accounts outside the package.
- [x] Add configuration/asset installation and interactive administrator creation.
- [x] Update website, installation docs and module guides around both installation paths.
- [x] Add independent consumer smoke tests, security regressions and dependency update proposals.
- [x] Refresh public/admin screenshots using disposable fixtures.
- [ ] Create/configure the dedicated package repository and export reviewed package source.
- [ ] Publish a reviewed semantic version tag and register it on Packagist.
- [ ] Verify a registry-based installation and enable repository branch protections/security settings.
- [x] Implement validated daily Packagist snapshot collection without install telemetry.
- [ ] Enable the statistics collector on persistent production storage after publication.

## Next priorities

- Broader database coverage and additional upload/authorization regression tests.
- Document and test migration paths for custom existing user models.
- More complete translations of website marketing copy and accessibility testing of individual showcase examples.
- Release automation from the monorepo into the dedicated package repository.

## Optional future work

Email-verification enforcement, API authentication, billing, tenancy and external search integrations require separate implementation and compatibility testing. These are not claims about current bundled features. No release dates are promised until scope and maintainers are assigned.
