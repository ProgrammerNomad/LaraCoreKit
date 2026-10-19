<?php

use App\Providers\AppServiceProvider;
use App\Providers\Filament\AdminPanelProvider;
use Modules\UIShowcase\UIShowcaseServiceProvider;

return [
    AppServiceProvider::class,
    AdminPanelProvider::class,
    UIShowcaseServiceProvider::class,
];
