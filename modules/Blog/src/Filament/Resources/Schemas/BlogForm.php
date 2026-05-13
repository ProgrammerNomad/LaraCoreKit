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
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;
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
                        Tabs::make('title_translations')
                            ->label('Title')
                            ->tabs([
                                Tab::make('English (EN)')
                                    ->schema([
                                        TextInput::make('title.en')
                                            ->label('Title (EN)')
                                            ->required()
                                            ->live(onBlur: true)
                                            ->afterStateUpdated(fn (string $operation, $state, callable $set) =>
                                                $operation === 'create' ? $set('slug', Str::slug($state)) : null
                                            ),
                                    ]),
                                Tab::make('हिन्दी (HI)')
                                    ->schema([
                                        TextInput::make('title.hi')
                                            ->label('Title (HI)'),
                                    ]),
                                Tab::make('العربية (AR)')
                                    ->schema([
                                        TextInput::make('title.ar')
                                            ->label('Title (AR)')
                                            ->extraInputAttributes(['dir' => 'rtl']),
                                    ]),
                            ])
                            ->columnSpanFull(),

                        TextInput::make('slug')
                            ->required()
                            ->unique(ignoreRecord: true)
                            ->maxLength(255)
                            ->helperText('Auto-generated from English title'),

                        Tabs::make('excerpt_translations')
                            ->label('Excerpt')
                            ->tabs([
                                Tab::make('English (EN)')
                                    ->schema([
                                        Textarea::make('excerpt.en')
                                            ->label('Excerpt (EN)')
                                            ->rows(3),
                                    ]),
                                Tab::make('हिन्दी (HI)')
                                    ->schema([
                                        Textarea::make('excerpt.hi')
                                            ->label('Excerpt (HI)')
                                            ->rows(3),
                                    ]),
                                Tab::make('العربية (AR)')
                                    ->schema([
                                        Textarea::make('excerpt.ar')
                                            ->label('Excerpt (AR)')
                                            ->rows(3)
                                            ->extraInputAttributes(['dir' => 'rtl']),
                                    ]),
                            ])
                            ->columnSpanFull(),

                        Tabs::make('content_translations')
                            ->label('Content')
                            ->tabs([
                                Tab::make('English (EN)')
                                    ->schema([
                                        Textarea::make('content.en')
                                            ->label('Content (EN)')
                                            ->required()
                                            ->rows(10),
                                    ]),
                                Tab::make('हिन्दी (HI)')
                                    ->schema([
                                        Textarea::make('content.hi')
                                            ->label('Content (HI)')
                                            ->rows(10),
                                    ]),
                                Tab::make('العربية (AR)')
                                    ->schema([
                                        Textarea::make('content.ar')
                                            ->label('Content (AR)')
                                            ->rows(10)
                                            ->extraInputAttributes(['dir' => 'rtl']),
                                    ]),
                            ])
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
