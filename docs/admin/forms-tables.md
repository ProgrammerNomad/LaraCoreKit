# Forms & Tables in Filament

**Estimated time:** 10 minutes  
**Difficulty:** Intermediate

---

Filament provides rich declarative builders for forms and tables that power all admin resources in LaraCoreKit.

---

## Form Fields Reference

```php
use Filament\Forms\Components\*;

$form->schema([
    // Text inputs
    TextInput::make('title')->required()->maxLength(255),
    TextInput::make('slug')->unique(ignoreRecord: true),
    TextInput::make('email')->email()->required(),
    TextInput::make('password')->password()->minLength(8),

    // Select & multi-select
    Select::make('status')
        ->options(['draft' => 'Draft', 'published' => 'Published'])
        ->default('draft'),

    Select::make('tags')
        ->multiple()
        ->relationship('tags', 'name'),

    // Rich text
    RichEditor::make('content')->columnSpanFull(),
    MarkdownEditor::make('notes'),

    // Dates
    DatePicker::make('published_at'),
    DateTimePicker::make('scheduled_at'),

    // Toggle / Checkbox
    Toggle::make('is_featured')->inline(false),
    Checkbox::make('agree_terms')->required(),

    // File uploads
    FileUpload::make('attachment'),
    FileUpload::make('avatar')->image()->avatar()->circular(),

    // Layout helpers
    Grid::make(2)->schema([...]),
    Section::make('SEO')->schema([...]),
    Tabs::make()->tabs([
        Tabs\Tab::make('Content')->schema([...]),
        Tabs\Tab::make('SEO')->schema([...]),
    ]),
]);
```

---

## Table Columns Reference

```php
use Filament\Tables\Columns\*;

$table->columns([
    TextColumn::make('title')->searchable()->sortable()->limit(50),
    TextColumn::make('author.name')->label('Author'),
    BadgeColumn::make('status')
        ->colors(['success' => 'published', 'warning' => 'draft', 'danger' => 'archived']),
    ImageColumn::make('avatar')->circular(),
    IconColumn::make('is_featured')->boolean(),
    TextColumn::make('created_at')->dateTime()->since()->sortable(),
    TextColumn::make('published_at')->date(),
]);
```

---

## Table Filters

```php
use Filament\Tables\Filters\*;

$table->filters([
    SelectFilter::make('status')->options(['draft' => 'Draft', 'published' => 'Published']),
    SelectFilter::make('locale')->options(['en' => 'English', 'hi' => 'Hindi', 'ar' => 'Arabic']),

    Filter::make('featured')
        ->label('Featured only')
        ->query(fn ($query) => $query->where('is_featured', true)),

    Filter::make('published_this_month')
        ->query(fn ($query) => $query->whereMonth('published_at', now()->month)),
]);
```

---

## Table Actions

```php
use Filament\Tables\Actions\*;

$table
    ->actions([
        EditAction::make(),
        DeleteAction::make(),
        Action::make('publish')
            ->label('Publish')
            ->icon('heroicon-o-check')
            ->visible(fn ($record) => $record->status === 'draft')
            ->action(fn ($record) => $record->update(['status' => 'published'])),
    ])
    ->bulkActions([
        DeleteBulkAction::make(),
        BulkAction::make('publish_selected')
            ->label('Publish Selected')
            ->action(fn ($records) => $records->each->update(['status' => 'published'])),
    ]);
```

---

## Validation

All form fields support Laravel validation rules:

```php
TextInput::make('email')
    ->email()
    ->required()
    ->unique('users', 'email', ignoreRecord: true)
    ->maxLength(255),

TextInput::make('price')
    ->numeric()
    ->minValue(0)
    ->maxValue(99999),
```

---

## Next Steps

**[Livewire Basics →](../frontend/livewire)**
