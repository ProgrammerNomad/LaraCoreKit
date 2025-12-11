<?php

namespace Modules\Blog\Filament\Resources\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class BlogForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Content')
                    ->schema([
                        TextInput::make('title')
                            ->required()
                            ->live(onBlur: true)
                            ->afterStateUpdated(fn (string $operation, $state, callable $set) => 
                                $operation === 'create' ? $set('slug', Str::slug($state)) : null
                            )
                            ->helperText('Enter title in English, Hindi, and Arabic'),

                        TextInput::make('slug')
                            ->required()
                            ->unique(ignoreRecord: true)
                            ->maxLength(255)
                            ->helperText('Auto-generated from English title'),

                        Textarea::make('excerpt')
                            ->rows(3)
                            ->helperText('Short summary in all languages'),

                        Textarea::make('content')
                            ->required()
                            ->rows(10)
                            ->helperText('Blog content (stored as JSON for multilingual support)')
                            ->columnSpanFull(),
                    ])
                    ->columns(2),

                Section::make('Publishing')
                    ->schema([
                        Select::make('user_id')
                            ->label('Author')
                            ->relationship('author', 'name')
                            ->required()
                            ->searchable()
                            ->preload()
                            ->default(auth()->id()),

                        Select::make('status')
                            ->options([
                                'draft' => 'Draft',
                                'published' => 'Published',
                                'archived' => 'Archived',
                            ])
                            ->required()
                            ->default('draft')
                            ->native(false),

                        Toggle::make('featured')
                            ->label('Featured Post')
                            ->default(false),

                        DateTimePicker::make('published_at')
                            ->label('Publish Date')
                            ->displayFormat('M d, Y H:i')
                            ->nullable(),
                    ])
                    ->columns(2),

                Section::make('Featured Image')
                    ->schema([
                        FileUpload::make('featured_image')
                            ->image()
                            ->disk('public')
                            ->directory('blog-images')
                            ->imageEditor()
                            ->maxSize(5120)
                            ->helperText('Max 5MB. Recommended: 1200x630px'),
                    ]),

                Section::make('SEO')
                    ->schema([
                        TextInput::make('meta_title')
                            ->maxLength(60)
                            ->helperText('SEO title (max 60 chars)'),

                        Textarea::make('meta_description')
                            ->rows(3)
                            ->maxLength(160)
                            ->helperText('SEO description (max 160 chars)'),

                        TextInput::make('meta_keywords')
                            ->helperText('Comma-separated keywords'),
                    ])
                    ->collapsible()
                    ->collapsed(),
            ]);
    }
}
