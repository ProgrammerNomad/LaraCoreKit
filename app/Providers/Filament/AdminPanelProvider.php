<?php

namespace App\Providers\Filament;

use App\Filament\Pages\Dashboard;
use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\AuthenticateSession;
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
use LaraCoreKit\Core\Filament\LocalAvatarProvider;
use LaraCoreKit\Core\Filament\OverviewStats;
use LaraCoreKit\DemoModule\Filament\Widgets\DemoBannerWidget;
use Modules\Blog\Filament\Resources\BlogResource;
use Modules\Settings\Filament\Pages\Settings;
use Modules\User\Filament\Resources\Permissions\PermissionResource;
use Modules\User\Filament\Resources\Roles\RoleResource;
use Modules\User\Filament\Resources\UserResource;

class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('admin')
            ->path('admin')
            ->viteTheme('resources/css/filament/admin/theme.css')
            ->login()
            ->authGuard('web')
            ->brandName('LaraCoreKit')
            ->defaultAvatarProvider(LocalAvatarProvider::class)
            ->brandLogo(asset('images/logo.svg'))
            ->darkModeBrandLogo(asset('images/logo-dark.svg'))
            ->darkMode(true)
            ->colors([
                'primary' => Color::Red,
                'danger' => Color::Red,
            ])
            ->resources([
                BlogResource::class,
                UserResource::class,
                RoleResource::class,
                PermissionResource::class,
            ])
            ->pages([
                Dashboard::class,
                Settings::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\Filament\Widgets')
            ->widgets([
                AccountWidget::class,
                OverviewStats::class,
                ...(config('demo.enabled') && class_exists(DemoBannerWidget::class)
                    ? [DemoBannerWidget::class] : []),
            ])
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
            ])
            ->authMiddleware([
                Authenticate::class,
            ]);
    }
}
