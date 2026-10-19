<?php

namespace LaraCoreKit\Core\Filament;

use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Modules\Blog\Models\Blog;
use Modules\User\Models\User;

class OverviewStats extends StatsOverviewWidget
{
    protected ?string $pollingInterval = null;

    protected ?string $heading = 'Application overview';

    protected function getStats(): array
    {
        $stats = [];
        if (config('laracorekit.modules.User') && auth()->user()?->can('view-users')) {
            $stats[] = Stat::make('Users', User::count())->description('Registered accounts')->color('primary');
        }
        if (config('laracorekit.modules.Blog') && auth()->user()?->can('view-blog')) {
            $stats[] = Stat::make('Published posts', Blog::published()->count())->description('Visible on the public website')->color('success');
            $stats[] = Stat::make('Draft posts', Blog::where('status', 'draft')->count())->description('Waiting for publication')->color('warning');
        }

        return $stats;
    }
}
