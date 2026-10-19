<?php

namespace Modules\User\Filament\Resources\Roles\Pages;

use Filament\Resources\Pages\CreateRecord;
use Modules\User\Filament\Resources\Roles\RoleResource;

class CreateRole extends CreateRecord
{
    protected static string $resource = RoleResource::class;
}
