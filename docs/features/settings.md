# Settings

**Estimated time:** 5 minutes  
**Difficulty:** Beginner

---

The Settings module provides a centralized key-value store for site-wide configuration, fully managed from the Filament admin panel.

---

## Default Settings

| Key | Default | Description |
|-----|---------|-------------|
| `site_name` | LaraCoreKit | Site display name |
| `site_description` | — | Meta description |
| `default_locale` | `en` | Default language |
| `maintenance_mode` | `false` | Maintenance toggle |
| `logo` | — | Site logo path |
| `social_twitter` | — | Twitter/X URL |
| `social_github` | — | GitHub URL |

---

## Reading Settings

```php
use Modules\Settings\Models\Setting;

// Get a value with default
$siteName = Setting::get('site_name', 'LaraCoreKit');

// Get all settings as key-value array
$all = Setting::getAll();
```

---

## Writing Settings

```php
// Set a single setting
Setting::set('site_name', 'My Awesome App');

// Set multiple at once
Setting::setMany([
    'site_name'        => 'My App',
    'site_description' => 'A great Laravel app',
]);
```

---

## In Blade Templates

Settings are auto-shared as a view global:

```blade
<title>{{ setting('site_name', 'LaraCoreKit') }}</title>
<meta name="description" content="{{ setting('site_description') }}">
```

---

## Admin Panel

All settings are editable at `/admin/settings` — no code changes needed.

The settings admin shows a clean form UI generated from the settings schema.

---

## Adding a Custom Setting

1. Add to the Settings seeder:

```php
Setting::firstOrCreate(['key' => 'custom_key'], ['value' => 'default_value']);
```

2. Run the seeder:

```bash
php artisan db:seed --class=Modules\\Settings\\Database\\Seeders\\SettingsSeeder
```

---

## Caching Settings

Settings are cached automatically. To clear the settings cache:

```bash
php artisan cache:forget settings
# Or clear everything
php artisan optimize:clear
```

---

## Next Steps

� **[Multilingual →](multilingual)**
