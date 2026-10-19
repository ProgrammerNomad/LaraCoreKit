# Middleware

Core appends `Modules\Core\Http\Middleware\SetLocale` to the web middleware group. It reads the session locale and accepts only configured supported values.

Public auth pages use guest middleware, while the account dashboard and logout require authentication. Filament uses its own authenticated panel middleware stack and the User model's panel-access check.

CSRF protection, session handling and cookie encryption remain Laravel responsibilities. Configure trusted proxies correctly when deploying behind a load balancer, since IP-based rate limits depend on the resolved client address.

See [installation](/docs/installation) and [package architecture](/docs/core/architecture).
