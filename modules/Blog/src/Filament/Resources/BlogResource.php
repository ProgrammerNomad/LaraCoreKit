<?php

namespace Modules\Blog\Filament\Resources;

use Modules\Blog\Filament\Resources\Pages\CreateBlog;
use Modules\Blog\Filament\Resources\Pages\EditBlog;
use Modules\Blog\Filament\Resources\Pages\ListBlogs;
use Modules\Blog\Filament\Resources\Pages\ViewBlog;
use Modules\Blog\Filament\Resources\Schemas\BlogForm;
use Modules\Blog\Filament\Resources\Schemas\BlogInfolist;
use Modules\Blog\Filament\Resources\Tables\BlogsTable;
use Modules\Blog\Models\Blog;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use UnitEnum;

class BlogResource extends Resource
{
    protected static ?string $model = Blog::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::DocumentText;

    protected static string|UnitEnum|null $navigationGroup = 'Content';

    protected static ?int $navigationSort = 1;

    public static function getRecordTitle($record): ?string
    {
        $title = $record->title;
        if (is_array($title)) {
            $locale = app()->getLocale();
            return $title[$locale] ?? $title['en'] ?? 'Untitled';
        }
        return $title ?? 'Untitled';
    }

    public static function form(Schema $schema): Schema
    {
        return BlogForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return BlogInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return BlogsTable::configure($table);
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
            'index' => ListBlogs::route('/'),
            'create' => CreateBlog::route('/create'),
            'view' => ViewBlog::route('/{record}'),
            'edit' => EditBlog::route('/{record}/edit'),
        ];
    }

    public static function getRecordRouteBindingEloquentQuery(): Builder
    {
        return parent::getRecordRouteBindingEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}
