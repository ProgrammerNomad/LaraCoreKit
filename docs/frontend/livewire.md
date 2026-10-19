# Livewire frontend

Public package pages use Livewire 4 components and the `core::layouts.app` layout. Auth components implement login, registration, password recovery and the account dashboard. Blog components implement the public list/detail pages.

Components are registered by module providers with stable aliases. The demo Home and Changelog components live under `app/Livewire`, outside the package. Livewire bundles Alpine; do not load a second Alpine instance.

Treat public component methods as externally callable endpoints: validate inputs, authorize mutations and rate-limit abuse-sensitive operations. Test them with Livewire's component testing helpers.

See [installation](/docs/installation) and [package architecture](/docs/core/architecture).
