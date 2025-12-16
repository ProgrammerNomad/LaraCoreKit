<?php

namespace Modules\User\Filament\Resources;

use Modules\User\Filament\Resources\Pages\CreateUser;
use Modules\User\Filament\Resources\Pages\EditUser;
use Modules\User\Filament\Resources\Pages\ListUsers;
use Modules\User\Filament\Resources\Pages\ViewUser;
use Modules\User\Filament\Resources\Schemas\UserForm;
use Modules\User\Filament\Resources\Schemas\UserInfolist;
use Modules\User\Filament\Resources\Tables\UsersTable;
use Modules\User\Models\User;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static string|UnitEnum|null $navigationGroup = 'User Management';

    protected static ?int $navigationSort = 1;

    protected static ?string $recordTitleAttribute = 'User';

    public static function form(Schema $schema): Schema
    {
        return UserForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return UserInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return UsersTable::configure($table);
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
            'index' => ListUsers::route('/'),
            'create' => CreateUser::route('/create'),
            'view' => ViewUser::route('/{record}'),
            'edit' => EditUser::route('/{record}/edit'),
        ];
    }

    /**
     * Authorization methods for User resource
     */
    public static function canViewAny(): bool
    {
        return auth()->user()?->can('view-users') ?? false;
    }

    public static function canCreate(): bool
    {
        return auth()->user()?->can('create-users') ?? false;
    }

    public static function canEdit($record): bool
    {
        return auth()->user()?->can('edit-users') ?? false;
    }

    public static function canDelete($record): bool
    {
        return auth()->user()?->can('delete-users') ?? false;
    }
}
