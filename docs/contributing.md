# Contributing

Changes are welcome through GitHub pull requests. Read CONTRIBUTING.md at the repository root for the workflow, and use the security policy for sensitive reports.

Package changes belong in packages/core; website/docs/showcase changes belong in the host. Add meaningful regression tests for behavior changes, rebuild package CSS when its source changes, and update installation/upgrade notes when the public contract changes.

Run tests, Pint, static analysis, dependency audits and production builds before proposing a release. Test package installation independently of the host using the consumer smoke script.

See [installation](/docs/installation) and [package architecture](/docs/core/architecture).
