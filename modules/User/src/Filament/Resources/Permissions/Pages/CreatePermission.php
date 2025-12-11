<?php

namespace Modules\User\Filament\Resources\Permissions\Pages;

use Modules\User\Filament\Resources\Permissions\PermissionResource;
use Filament\Resources\Pages\CreateRecord;

class CreatePermission extends CreateRecord
{
    protected static string $resource = PermissionResource::class;
}
