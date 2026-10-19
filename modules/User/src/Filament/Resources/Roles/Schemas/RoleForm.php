<?php

namespace Modules\User\Filament\Resources\Roles\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class RoleForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Role Information')
                    ->schema([
                        TextInput::make('name')
                            ->required()
                            ->unique(ignoreRecord: true)
                            ->maxLength(255)
                            ->placeholder('admin')
                            ->helperText('Unique role identifier (lowercase recommended)'),

                        TextInput::make('guard_name')
                            ->label('Guard Name')
                            ->default('web')
                            ->required()
                            ->maxLength(255)
                            ->placeholder('web')
                            ->helperText('Authentication guard (usually "web")'),
                    ])
                    ->columns(2),

                Section::make('Permissions')
                    ->schema([
                        Select::make('permissions')
                            ->label('Assign Permissions')
                            ->relationship('permissions', 'name')
                            ->multiple()
                            ->preload()
                            ->searchable()
                            ->placeholder('Select permissions')
                            ->helperText('Select permissions to assign to this role.'),
                    ]),
            ]);
    }
}
