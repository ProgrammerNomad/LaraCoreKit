# Configuration

After [creating a Laravel application and requiring the package](/docs/installation), run `php artisan laracorekit:install` to publish `config/laracorekit.php` and public CSS. Existing configuration is preserved.

| Setting | Default | Purpose |
| --- | --- | --- |
| `configure_auth` | `true` | Select the packaged User model for the `users` auth provider |
| `panel.enabled` | `true` | Register the package's Filament panel |
| `panel.id` / `panel.path` | `admin` | Panel identity and URL path |
| `modules` | all bundled modules enabled | Register module providers and matching panel resources |
| `registration` | `false` | Enable public registration |
| `locales` | `en`, `hi`, `ar` | Accepted language-switch values |

The initial supported authentication model is `Modules\User\Models\User`. Disabling `configure_auth` does not automatically adapt resources or relationships to a custom user model. Custom model support requires integration work.

The demo host disables the packaged panel, uses its own provider and enables registration for evaluation. Environment settings such as database, mail, queues, storage and APP_URL remain standard Laravel configuration. Cache configuration after deployment with `php artisan config:cache`.
