<?php

namespace Modules\Blog\Filament\Resources\Pages;

use Modules\Blog\Filament\Resources\BlogResource;
use Filament\Resources\Pages\CreateRecord;

class CreateBlog extends CreateRecord
{
    protected static string $resource = BlogResource::class;
}
