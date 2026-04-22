# Custom Admin Pages

---
**Supported Stack:** Laravel 13 / Filament 5 / Livewire 4 / Tailwind 4  
**Last Updated:** April 22, 2026  
**Source Files:** [Settings Page example](../../modules/Settings/views/filament/pages/settings.blade.php)
---

Filament Custom Pages let you build completely custom screens in the admin panel - dashboards, reports, settings forms, and more - without being tied to a specific Eloquent model.

---

## Creating a Custom Page

```bash
php artisan make:filament-page DashboardStats
```

Move to your module:
```
modules/Core/src/Filament/Pages/DashboardStats.php
```

---

## Custom Dashboard Page

```php
<?php

namespace Modules\Core\Filament\Pages;

use Filament\Pages\Page;
use Modules\Blog\Models\Post;
use Modules\User\Models\User;

class DashboardStats extends Page
{
    protected static ?string $navigationIcon  = 'heroicon-o-home';
    protected static ?string $navigationLabel = 'Dashboard';
    protected static ?int    $navigationSort  = -2;
    protected static string  $view = 'core::filament.pages.dashboard-stats';

    public array $stats = [];

    public function mount(): void
    {
        $this->stats = [
            'users'      => User::count(),
            'posts'      => Post::where('status', 'published')->count(),
            'drafts'     => Post::where('status', 'draft')->count(),
            'new_today'  => User::whereDate('created_at', today())->count(),
        ];
    }
}
```

---

## Custom Page View

```blade
{{-- modules/Core/views/filament/pages/dashboard-stats.blade.php --}}

<x-filament-panels::page>
    <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
        @foreach($stats as $key => $value)
        <div class="bg-white dark:bg-gray-800 rounded-xl border border-gray-200 dark:border-gray-700 p-6">
            <p class="text-sm text-gray-500 dark:text-gray-400 capitalize">{{ str_replace('_', ' ', $key) }}</p>
            <p class="text-3xl font-bold text-gray-900 dark:text-white mt-1">{{ number_format($value) }}</p>
        </div>
        @endforeach
    </div>
</x-filament-panels::page>
```

---

## Settings Page (Form-based)

```php
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Pages\Page;

class SiteSettings extends Page
{
    use InteractsWithForms;

    protected static ?string $navigationIcon = 'heroicon-o-cog';
    protected static string  $view = 'core::filament.pages.site-settings';

    public string $site_name = '';

    public function mount(): void
    {
        $this->site_name = Setting::get('site_name', '');
    }

    public function save(): void
    {
        Setting::set('site_name', $this->site_name);
        $this->notify('success', 'Settings saved!');
    }

    protected function getFormSchema(): array
    {
        return [
            TextInput::make('site_name')->required(),
        ];
    }
}
```

---

## Next Steps

**[Forms & Tables →](forms-tables)**
