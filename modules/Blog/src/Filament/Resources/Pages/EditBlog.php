<?php

namespace Modules\Blog\Filament\Resources\Pages;

use Filament\Actions\DeleteAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\RestoreAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;
use Modules\Blog\Filament\Resources\BlogResource;

class EditBlog extends EditRecord
{
    protected static string $resource = BlogResource::class;

    protected function mutateFormDataBeforeSave(array $data): array
    {
        abort_if(($data['status'] ?? 'draft') === 'published' && ! auth()->user()?->can('publish-blog'), 403);

        return $data;
    }

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
            ForceDeleteAction::make(),
            RestoreAction::make(),
        ];
    }
}
