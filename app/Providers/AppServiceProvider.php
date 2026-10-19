<?php

namespace App\Providers;

use BezhanSalleh\LanguageSwitch\LanguageSwitch;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {

        // Filament admin language switcher (official plugin)
        LanguageSwitch::configureUsing(function (LanguageSwitch $switch) {
            $switch
                ->locales(['en', 'hi', 'ar'])
                ->labels([
                    'en' => 'English',
                    'hi' => 'Hindi - हिंदी',
                    'ar' => 'Arabic - عربي',
                ])
                ->circular()
                ->nativeLabel();
        });
    }
}
