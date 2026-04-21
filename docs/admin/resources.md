# Filament Resources

**Estimated time:** 10 minutes  
**Difficulty:** Intermediate

---

Filament Resources are the primary way to manage Eloquent models in the LaraCoreKit admin panel. LaraCoreKit places each module's resources inside the module directory.

---

## Resource Location

```
modules/{Module}/src/Filament/Resources/
└── {Model}Resource.php
```

Example:
```
modules/Blog/src/Filament/Resources/PostResource.php
```

---

## Creating a Resource

```bash
php artisan make:filament-resource Post --model="Modules\Blog\Models\Post"
```

Move the generated file to your module and update the namespace.

---

## Full Resource Example

```php
<?php

namespace Modules\Blog\Filament\Resources;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Modules\Blog\Models\Post;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;
    protected static ?string $navigationIcon  = 'heroicon-o-document-text';
    protected static ?string $navigationGroup = 'Blog';
    protected static ?string $navigationLabel = 'Posts';
    protected static ?int    $navigationSort  = 1;

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\Grid::make(2)->schema([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255)
                    ->live(onBlur: true)
                    ->afterStateUpdated(fn ($state, $set) =>
                        $set('slug', \Str::slug($state))
                    ),

                Forms\Components\TextInput::make('slug')
                    ->required()
                    ->unique(ignoreRecord: true),
            ]),

            Forms\Components\Select::make('status')
                ->options(['draft' => 'Draft', 'published' => 'Published'])
                ->default('draft')
                ->required(),

            Forms\Components\Select::make('locale')
                ->options(['en' => 'English', 'hi' => 'Hindi', 'ar' => 'Arabic'])
                ->default('en')
                ->required(),

            Forms\Components\Textarea::make('excerpt')
                ->rows(2)
                ->maxLength(500),

            Forms\Components\RichEditor::make('content')
                ->columnSpanFull()
                ->required(),

            Forms\Components\SpatieMediaLibraryFileUpload::make('cover')
                ->collection('cover')
                ->image()
                ->imageResizeMode('cover'),

            Forms\Components\DateTimePicker::make('published_at'),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')->searchable()->sortable(),
                Tables\Columns\BadgeColumn::make('status')
                    ->colors(['warning' => 'draft', 'success' => 'published']),
                Tables\Columns\TextColumn::make('locale')->label('Lang'),
                Tables\Columns\TextColumn::make('published_at')->since()->sortable(),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('status')
                    ->options(['draft' => 'Draft', 'published' => 'Published']),
                Tables\Filters\SelectFilter::make('locale')
                    ->options(['en' => 'English', 'hi' => 'Hindi', 'ar' => 'Arabic']),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index'  => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'edit'   => Pages\EditPost::route('/{record}/edit'),
        ];
    }
}
```

---

## Registering Resources

Filament auto-discovers resources. If you need manual registration, add to `AdminPanelProvider`:

```php
->resources([
    PostResource::class,
])
```

---

## Next Steps

**[Custom Pages →](custom-pages)**
