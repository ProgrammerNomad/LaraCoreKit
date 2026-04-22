# Admin Panel Overview (Filament)

---
**Supported Stack:** Laravel 13 / Filament 5 / Livewire 4 / Tailwind 4  
**Last Updated:** April 22, 2026  
**Source Files:** [AdminPanelProvider](../../app/Providers/Filament/AdminPanelProvider.php)
---

LaraCoreKit includes a **Filament 5** admin panel - a beautiful, powerful TALL-stack admin interface built for Laravel.

---

## Access the Admin Panel

```
URL:   /admin
Login: your Filament admin credentials
```

Create your first admin user:

```bash
php artisan filament:user
```

---

## What's Included

| Section | Route | Description |
|---------|-------|-------------|
| Dashboard | `/admin` | Overview stats and activity |
| Users | `/admin/users` | Manage registered users |
| Roles | `/admin/roles` | Roles & permissions |
| Permissions | `/admin/permissions` | Fine-grained permission management |
| Posts | `/admin/posts` | Blog content management |
| Media | `/admin/media` | File and image library |
| Settings | `/admin/settings` | Site configuration form |

---

## Admin Panel Architecture

```
app/Providers/Filament/AdminPanelProvider.php   ← Panel config
modules/*/src/Filament/
├── Resources/         ← CRUD resources (one per model)
├── Pages/             ← Custom admin pages
└── Widgets/           ← Dashboard widgets
```

---

## AdminPanelProvider

The admin panel is configured in `app/Providers/Filament/AdminPanelProvider.php`:

```php
use Filament\Panel;
use Filament\PanelProvider;

class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('admin')
            ->path('admin')
            ->login()
            ->colors(['primary' => Color::Violet])
            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\\Filament\\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\\Filament\\Pages');
    }
}
```

---

## Navigation Groups

Resources are grouped in the sidebar using `$navigationGroup`:

```php
class PostResource extends Resource
{
    protected static ?string $navigationGroup = 'Blog';
    protected static ?string $navigationIcon  = 'heroicon-o-document-text';
    protected static ?int    $navigationSort  = 1;
}
```

---

## Authorization

Users accessing `/admin` must pass the `canAccessFilament()` check. By default, any user with `is_admin = true` or the `admin` role can access it.

---

## Dark Mode

Filament's dark mode is enabled by default and follows system preference.

---

## Next Steps

**[Resources →](resources)**
