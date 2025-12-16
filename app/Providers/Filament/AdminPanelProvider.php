<?php

namespace App\Providers\Filament;

use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\AuthenticateSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Pages\Dashboard;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Filament\Widgets\AccountWidget;
use Filament\Widgets\FilamentInfoWidget;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;

class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('admin')
            ->path('admin')
            ->login()
            ->brandName('LaraCoreKit')
            ->brandLogo(asset('images/logo.svg'))
            ->darkMode(true)
            ->renderHook('panels::topbar.end', fn() => view('filament.dark-mode-toggle'))
            ->renderHook('panels::body.end', fn() => view('filament.login-placeholders'))
            ->renderHook('panels::auth.login.form.before', fn() => 
                config('demo.enabled') ? new \Illuminate\Support\HtmlString('
                    <div class="rounded-lg bg-yellow-50 border-l-4 border-yellow-400 p-4 mb-6">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <svg class="h-5 w-5 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div class="ml-3">
                                <h3 class="text-sm font-bold text-yellow-800">
                                    Demo Mode Active
                                </h3>
                                <div class="mt-2 text-sm text-yellow-700">
                                    <p><strong>Admin:</strong> <span class="font-mono">' . config('demo.credentials.admin.email') . ' / ' . config('demo.credentials.admin.password') . '</span></p>
                                    <p class="mt-1 text-xs text-yellow-600">Database auto-resets every ' . config('demo.reset_interval') . ' minutes. Changes won\'t persist.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                ') : ''
            )
            ->colors([
                'primary' => Color::Red,
                'danger' => Color::Red,
            ])
            ->font('Inter')
            ->resources([
                \Modules\Blog\Filament\Resources\BlogResource::class,
                \Modules\User\Filament\Resources\UserResource::class,
                \Modules\User\Filament\Resources\Roles\RoleResource::class,
                \Modules\User\Filament\Resources\Permissions\PermissionResource::class,
            ])
            ->pages([
                Dashboard::class,
                \Modules\Settings\Filament\Pages\Settings::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\Filament\Widgets')
            ->widgets([
                \LaraCoreKit\DemoModule\Filament\Widgets\DemoBannerWidget::class,
                AccountWidget::class,
                FilamentInfoWidget::class,
            ])
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])
            ->authMiddleware([
                Authenticate::class,
            ]);
    }
}
