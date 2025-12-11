<?php

namespace Modules\User\Filament\Resources\Roles\Pages;

use Modules\User\Filament\Resources\Roles\RoleResource;
use Filament\Resources\Pages\CreateRecord;

class CreateRole extends CreateRecord
{
    protected static string $resource = RoleResource::class;
}
