<?php

namespace Modules\Blog\Filament\Resources\Pages;

use Filament\Resources\Pages\CreateRecord;
use Modules\Blog\Filament\Resources\BlogResource;

class CreateBlog extends CreateRecord
{
    protected static string $resource = BlogResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        abort_if(($data['status'] ?? 'draft') === 'published' && ! auth()->user()?->can('publish-blog'), 403);

        return $data;
    }
}
