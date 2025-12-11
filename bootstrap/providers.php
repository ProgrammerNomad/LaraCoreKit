<?php

return [
    App\Providers\AppServiceProvider::class,
    App\Providers\Filament\AdminPanelProvider::class,
    Modules\Auth\AuthServiceProvider::class,
    Modules\Core\CoreServiceProvider::class,
    Modules\Blog\BlogServiceProvider::class,
    Modules\Settings\SettingsServiceProvider::class,
    Modules\User\UserServiceProvider::class,
];
