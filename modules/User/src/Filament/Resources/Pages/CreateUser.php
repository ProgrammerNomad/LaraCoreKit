<?php

namespace Modules\User\Filament\Resources\Pages;

use Modules\User\Filament\Resources\UserResource;
use Filament\Resources\Pages\CreateRecord;

class CreateUser extends CreateRecord
{
    protected static string $resource = UserResource::class;
}
