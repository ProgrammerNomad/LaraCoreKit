# Authentication

The Auth module implements session login, optional public registration, logout, password recovery and an authenticated account dashboard using Livewire. It is custom application code, not an installed Breeze scaffold. Sanctum API tokens and email-verification enforcement are not implemented.

Routes: `/login`, `/forgot-password`, `/reset-password/{token}`, `/dashboard` and POST `/logout`. `/register` exists only when `laracorekit.registration` is enabled. Form submission uses Livewire actions, not standalone POST login/register controllers.

Login failures are limited per normalized email/IP and per IP. Successful login regenerates the session and clears the account counter. Registration and reset requests are rate limited. Configure a shared cache in multi-server deployments and working mail transport for password recovery.

Registration creates an ordinary User role and redirects to the account dashboard. Administrative access requires the appropriate role and resource permissions. Create administrators with `php artisan laracorekit:admin`.

See [installation](/docs/installation) and [package architecture](/docs/core/architecture).
