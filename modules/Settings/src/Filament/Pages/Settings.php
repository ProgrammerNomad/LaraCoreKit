<?php

namespace Modules\Settings\Filament\Pages;

use Filament\Actions\Action;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Illuminate\Support\Facades\Cache;
use Modules\Settings\Models\Setting;
use BackedEnum;
use UnitEnum;

class Settings extends Page implements HasForms
{
    use InteractsWithForms;
    protected static string|BackedEnum|null $navigationIcon = Heroicon::Cog6Tooth;

    protected static string|UnitEnum|null $navigationGroup = 'Configuration';

    protected static ?int $navigationSort = 10;

    protected string $view = 'settings::filament.pages.settings';

    public ?array $data = [];

    public function mount(): void
    {
        $this->form->fill([
            'site_name_en' => $this->getTranslation('site_name', 'en', 'LaraCoreKit'),
            'site_name_hi' => $this->getTranslation('site_name', 'hi'),
            'site_name_ar' => $this->getTranslation('site_name', 'ar'),
            'site_description_en' => $this->getTranslation('site_description', 'en'),
            'site_description_hi' => $this->getTranslation('site_description', 'hi'),
            'site_description_ar' => $this->getTranslation('site_description', 'ar'),
            'site_logo' => $this->getSetting('site_logo'),
            'site_favicon' => $this->getSetting('site_favicon'),
            'contact_email' => $this->getSetting('contact_email'),
            'contact_phone' => $this->getSetting('contact_phone'),
            'footer_text_en' => $this->getTranslation('footer_text', 'en'),
            'footer_text_hi' => $this->getTranslation('footer_text', 'hi'),
            'footer_text_ar' => $this->getTranslation('footer_text', 'ar'),
            'meta_title_en' => $this->getTranslation('meta_title', 'en'),
            'meta_title_hi' => $this->getTranslation('meta_title', 'hi'),
            'meta_title_ar' => $this->getTranslation('meta_title', 'ar'),
            'meta_description_en' => $this->getTranslation('meta_description', 'en'),
            'meta_description_hi' => $this->getTranslation('meta_description', 'hi'),
            'meta_description_ar' => $this->getTranslation('meta_description', 'ar'),
            'meta_keywords_en' => $this->getTranslation('meta_keywords', 'en'),
            'meta_keywords_hi' => $this->getTranslation('meta_keywords', 'hi'),
            'meta_keywords_ar' => $this->getTranslation('meta_keywords', 'ar'),
            'social_facebook' => $this->getSetting('social_facebook'),
            'social_twitter' => $this->getSetting('social_twitter'),
            'social_instagram' => $this->getSetting('social_instagram'),
            'social_linkedin' => $this->getSetting('social_linkedin'),
        ]);
    }

    public function form(Schema $schema): Schema
    {
        return $schema
            ->schema([
                Section::make('General Settings')
                    ->schema([
                        Tabs::make('Site Name')
                            ->tabs([
                                Tabs\Tab::make('English')
                                    ->schema([
                                        TextInput::make('site_name_en')
                                            ->label('Site Name (EN)')
                                            ->required()
                                            ->maxLength(255),
                                    ]),
                                Tabs\Tab::make('Hindi')
                                    ->schema([
                                        TextInput::make('site_name_hi')
                                            ->label('साइट का नाम (HI)')
                                            ->maxLength(255),
                                    ]),
                                Tabs\Tab::make('Arabic')
                                    ->schema([
                                        TextInput::make('site_name_ar')
                                            ->label('اسم الموقع (AR)')
                                            ->maxLength(255),
                                    ]),
                            ]),

                        Tabs::make('Site Description')
                            ->tabs([
                                Tabs\Tab::make('English')
                                    ->schema([
                                        Textarea::make('site_description_en')
                                            ->label('Site Description (EN)')
                                            ->rows(3)
                                            ->maxLength(500),
                                    ]),
                                Tabs\Tab::make('Hindi')
                                    ->schema([
                                        Textarea::make('site_description_hi')
                                            ->label('साइट विवरण (HI)')
                                            ->rows(3)
                                            ->maxLength(500),
                                    ]),
                                Tabs\Tab::make('Arabic')
                                    ->schema([
                                        Textarea::make('site_description_ar')
                                            ->label('وصف الموقع (AR)')
                                            ->rows(3)
                                            ->maxLength(500),
                                    ]),
                            ]),
                    ]),

                Section::make('Branding')
                    ->schema([
                        FileUpload::make('site_logo')
                            ->label('Site Logo')
                            ->image()
                            ->disk('public')
                            ->directory('settings')
                            ->imageEditor()
                            ->maxSize(2048),

                        FileUpload::make('site_favicon')
                            ->label('Favicon')
                            ->image()
                            ->disk('public')
                            ->directory('settings')
                            ->maxSize(512)
                            ->helperText('Recommended: 32x32px or 64x64px PNG'),
                    ])
                    ->columns(2),

                Section::make('Contact Information')
                    ->schema([
                        TextInput::make('contact_email')
                            ->label('Contact Email')
                            ->email()
                            ->maxLength(255),

                        TextInput::make('contact_phone')
                            ->label('Contact Phone')
                            ->tel()
                            ->maxLength(20),

                        Tabs::make('Footer Text')
                            ->tabs([
                                Tabs\Tab::make('English')
                                    ->schema([
                                        Textarea::make('footer_text_en')
                                            ->label('Footer Text (EN)')
                                            ->rows(2)
                                            ->maxLength(255),
                                    ]),
                                Tabs\Tab::make('Hindi')
                                    ->schema([
                                        Textarea::make('footer_text_hi')
                                            ->label('फुटर टेक्स्ट (HI)')
                                            ->rows(2)
                                            ->maxLength(255),
                                    ]),
                                Tabs\Tab::make('Arabic')
                                    ->schema([
                                        Textarea::make('footer_text_ar')
                                            ->label('نص التذييل (AR)')
                                            ->rows(2)
                                            ->maxLength(255),
                                    ]),
                            ])
                            ->columnSpanFull(),
                    ])
                    ->columns(2),

                Section::make('SEO Settings')
                    ->schema([
                        Tabs::make('Meta Title')
                            ->tabs([
                                Tabs\Tab::make('English')
                                    ->schema([
                                        TextInput::make('meta_title_en')
                                            ->label('Meta Title (EN)')
                                            ->maxLength(60)
                                            ->helperText('Recommended length: 50-60 characters'),
                                    ]),
                                Tabs\Tab::make('Hindi')
                                    ->schema([
                                        TextInput::make('meta_title_hi')
                                            ->label('मेटा शीर्षक (HI)')
                                            ->maxLength(60),
                                    ]),
                                Tabs\Tab::make('Arabic')
                                    ->schema([
                                        TextInput::make('meta_title_ar')
                                            ->label('عنوان ميتا (AR)')
                                            ->maxLength(60),
                                    ]),
                            ]),

                        Tabs::make('Meta Description')
                            ->tabs([
                                Tabs\Tab::make('English')
                                    ->schema([
                                        Textarea::make('meta_description_en')
                                            ->label('Meta Description (EN)')
                                            ->rows(3)
                                            ->maxLength(160)
                                            ->helperText('Recommended length: 150-160 characters'),
                                    ]),
                                Tabs\Tab::make('Hindi')
                                    ->schema([
                                        Textarea::make('meta_description_hi')
                                            ->label('मेटा विवरण (HI)')
                                            ->rows(3)
                                            ->maxLength(160),
                                    ]),
                                Tabs\Tab::make('Arabic')
                                    ->schema([
                                        Textarea::make('meta_description_ar')
                                            ->label('وصف ميتا (AR)')
                                            ->rows(3)
                                            ->maxLength(160),
                                    ]),
                            ]),

                        Tabs::make('Meta Keywords')
                            ->tabs([
                                Tabs\Tab::make('English')
                                    ->schema([
                                        TextInput::make('meta_keywords_en')
                                            ->label('Meta Keywords (EN)')
                                            ->helperText('Comma-separated keywords'),
                                    ]),
                                Tabs\Tab::make('Hindi')
                                    ->schema([
                                        TextInput::make('meta_keywords_hi')
                                            ->label('मेटा कीवर्ड (HI)')
                                            ->helperText('अल्पविराम से अलग किए गए कीवर्ड'),
                                    ]),
                                Tabs\Tab::make('Arabic')
                                    ->schema([
                                        TextInput::make('meta_keywords_ar')
                                            ->label('كلمات ميتا (AR)')
                                            ->helperText('كلمات مفصولة بفواصل'),
                                    ]),
                            ]),
                    ])
                    ->collapsible(),

                Section::make('Social Media')
                    ->schema([
                        TextInput::make('social_facebook')
                            ->label('Facebook URL')
                            ->url()
                            ->prefixIcon(Heroicon::OutlinedUser)
                            ->maxLength(255),

                        TextInput::make('social_twitter')
                            ->label('Twitter/X URL')
                            ->url()
                            ->prefixIcon(Heroicon::OutlinedUser)
                            ->maxLength(255),

                        TextInput::make('social_instagram')
                            ->label('Instagram URL')
                            ->url()
                            ->prefixIcon(Heroicon::OutlinedUser)
                            ->maxLength(255),

                        TextInput::make('social_linkedin')
                            ->label('LinkedIn URL')
                            ->url()
                            ->prefixIcon(Heroicon::OutlinedUser)
                            ->maxLength(255),
                    ])
                    ->columns(2)
                    ->collapsible(),
            ])
            ->statePath('data');
    }

    protected function getFormActions(): array
    {
        return [
            Action::make('save')
                ->label('Save Settings')
                ->action('save')
                ->icon(Heroicon::Check)
                ->color('primary'),
        ];
    }

    public function save(): void
    {
        $data = $this->form->getState();

        // Save translatable fields as JSON
        $translatableFields = [
            'site_name' => ['en', 'hi', 'ar'],
            'site_description' => ['en', 'hi', 'ar'],
            'footer_text' => ['en', 'hi', 'ar'],
            'meta_title' => ['en', 'hi', 'ar'],
            'meta_description' => ['en', 'hi', 'ar'],
            'meta_keywords' => ['en', 'hi', 'ar'],
        ];

        foreach ($translatableFields as $field => $locales) {
            $translations = [];
            foreach ($locales as $locale) {
                $key = "{$field}_{$locale}";
                if (isset($data[$key]) && $data[$key] !== null) {
                    $translations[$locale] = $data[$key];
                }
                unset($data[$key]);
            }
            if (!empty($translations)) {
                $this->saveSetting($field, $translations);
            }
        }

        // Save non-translatable fields
        foreach ($data as $key => $value) {
            $this->saveSetting($key, $value);
        }

        Cache::flush();

        Notification::make()
            ->success()
            ->title('Settings saved')
            ->body('Your settings have been saved successfully.')
            ->send();
    }

    protected function getSetting(string $key, mixed $default = null): mixed
    {
        return Cache::remember(
            "setting.{$key}",
            now()->addDay(),
            fn () => Setting::where('key', $key)->value('value') ?? $default
        );
    }

    protected function getTranslation(string $key, string $locale, mixed $default = null): mixed
    {
        $value = $this->getSetting($key);
        
        if (is_array($value) && isset($value[$locale])) {
            return $value[$locale];
        }
        
        return $default;
    }

    protected function saveSetting(string $key, mixed $value): void
    {
        Setting::updateOrCreate(
            ['key' => $key],
            [
                'value' => $value,
                'type' => is_array($value) ? 'json' : (is_bool($value) ? 'boolean' : (is_numeric($value) ? 'number' : 'string')),
                'is_translatable' => is_array($value) && isset($value['en']),
            ]
        );
    }
}
