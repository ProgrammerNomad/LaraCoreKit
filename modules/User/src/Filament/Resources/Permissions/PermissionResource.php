<?php

namespace Modules\User\Filament\Resources\Permissions;

use Modules\User\Filament\Resources\Permissions\Pages\CreatePermission;
use Modules\User\Filament\Resources\Permissions\Pages\EditPermission;
use Modules\User\Filament\Resources\Permissions\Pages\ListPermissions;
use Modules\User\Filament\Resources\Permissions\Pages\ViewPermission;
use Modules\User\Filament\Resources\Permissions\Schemas\PermissionForm;
use Modules\User\Filament\Resources\Permissions\Schemas\PermissionInfolist;
use Modules\User\Filament\Resources\Permissions\Tables\PermissionsTable;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Spatie\Permission\Models\Permission;
use UnitEnum;

class PermissionResource extends Resource
{
    protected static ?string $model = Permission::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::Key;

    protected static string|UnitEnum|null $navigationGroup = 'User Management';

    protected static ?int $navigationSort = 3;

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return PermissionForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return PermissionInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PermissionsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListPermissions::route('/'),
            'create' => CreatePermission::route('/create'),
            'view' => ViewPermission::route('/{record}'),
            'edit' => EditPermission::route('/{record}/edit'),
        ];
    }

    public static function canViewAny(): bool
    {
        return auth()->user()?->hasRole(['Admin']) ?? false;
    }

    public static function canCreate(): bool
    {
        return auth()->user()?->hasRole(['Admin']) ?? false;
    }

    public static function canEdit($record): bool
    {
        return auth()->user()?->hasRole(['Admin']) ?? false;
    }

    public static function canDelete($record): bool
    {
        return auth()->user()?->hasRole(['Admin']) ?? false;
    }
}
