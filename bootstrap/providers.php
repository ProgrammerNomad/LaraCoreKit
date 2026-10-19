<?php

use App\Providers\AppServiceProvider;
use App\Providers\Filament\AdminPanelProvider;
use LaraCoreKit\Core\CoreServiceProvider;
use Modules\UIShowcase\UIShowcaseServiceProvider;

return [
    CoreServiceProvider::class,
    AppServiceProvider::class,
    AdminPanelProvider::class,
    UIShowcaseServiceProvider::class,
];
