<?php

namespace App\Filament\Pages;

use Filament\Pages\Dashboard as BaseDashboard;

class Dashboard extends BaseDashboard
{
    public static function canAccess(): bool
    {
        // Only Admin and Editor roles can access the dashboard
        return auth()->user()?->hasRole(['Admin', 'Editor']) ?? false;
    }
}
