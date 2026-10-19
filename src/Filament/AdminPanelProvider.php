<?php

namespace LaraCoreKit\Core\Filament;

use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\AuthenticateSession;
use Filament\Pages\Dashboard;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Filament\Widgets\AccountWidget;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Modules\Blog\Filament\Resources\BlogResource;
use Modules\Settings\Filament\Pages\Settings;
use Modules\User\Filament\Resources\Permissions\PermissionResource;
use Modules\User\Filament\Resources\Roles\RoleResource;
use Modules\User\Filament\Resources\UserResource;

class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        $resources = [];
        $pages = [Dashboard::class];

        if (config('laracorekit.modules.User')) {
            $resources = [
                UserResource::class,
                RoleResource::class,
                PermissionResource::class,
            ];
        }
        if (config('laracorekit.modules.Blog')) {
            $resources[] = BlogResource::class;
        }
        if (config('laracorekit.modules.Settings')) {
            $pages[] = Settings::class;
        }

        return $panel->default()
            ->id(config('laracorekit.panel.id'))
            ->path(config('laracorekit.panel.path'))
            ->login()->authGuard('web')
            ->brandName(config('app.name'))
            ->colors(['primary' => Color::Indigo])
            ->resources($resources)->pages($pages)->widgets([AccountWidget::class, OverviewStats::class])
            ->middleware([
                EncryptCookies::class, AddQueuedCookiesToResponse::class,
                StartSession::class, AuthenticateSession::class,
                ShareErrorsFromSession::class, VerifyCsrfToken::class,
                SubstituteBindings::class,
            ])
            ->authMiddleware([Authenticate::class]);
    }
}
