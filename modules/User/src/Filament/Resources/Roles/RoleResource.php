<?php

namespace Modules\User\Filament\Resources\Roles;

use Modules\User\Filament\Resources\Roles\Pages\CreateRole;
use Modules\User\Filament\Resources\Roles\Pages\EditRole;
use Modules\User\Filament\Resources\Roles\Pages\ListRoles;
use Modules\User\Filament\Resources\Roles\Pages\ViewRole;
use Modules\User\Filament\Resources\Roles\Schemas\RoleForm;
use Modules\User\Filament\Resources\Roles\Schemas\RoleInfolist;
use Modules\User\Filament\Resources\Roles\Tables\RolesTable;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Spatie\Permission\Models\Role;
use UnitEnum;

class RoleResource extends Resource
{
    protected static ?string $model = Role::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::ShieldCheck;

    protected static string|UnitEnum|null $navigationGroup = 'User Management';

    protected static ?int $navigationSort = 2;

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return RoleForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return RoleInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return RolesTable::configure($table);
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
            'index' => ListRoles::route('/'),
            'create' => CreateRole::route('/create'),
            'view' => ViewRole::route('/{record}'),
            'edit' => EditRole::route('/{record}/edit'),
        ];
    }

    public static function canViewAny(): bool
    {
        return auth()->user()?->can('view-roles') ?? false;
    }

    public static function canCreate(): bool
    {
        return auth()->user()?->can('create-roles') ?? false;
    }

    public static function canEdit($record): bool
    {
        return auth()->user()?->can('edit-roles') ?? false;
    }

    public static function canDelete($record): bool
    {
        return auth()->user()?->can('delete-roles') ?? false;
    }
}
