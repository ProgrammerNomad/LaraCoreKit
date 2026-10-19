# Optional API integration

The current package implements session-based public authentication and Filament administration. It does **not** ship Sanctum tokens or a public application API. Earlier references to bundled API authentication were inaccurate.

If your application needs an API, install and configure Laravel Sanctum using the [official Laravel documentation](https://laravel.com/docs/13.x/sanctum), adapt your user model, and define your own routes, token abilities, validation and rate limits. Treat this as application development and add authorization tests before exposing endpoints.
