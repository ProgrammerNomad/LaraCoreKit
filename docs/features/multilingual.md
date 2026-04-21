# Multilingual Support

**Estimated time:** 8 minutes  
**Difficulty:** Intermediate

---

LaraCoreKit ships with multilingual support for **English**, **Hindi**, and **Arabic** out of the box, including automatic RTL layout switching for Arabic.

---

## Supported Languages

| Code | Language | Direction | Flag |
|------|----------|-----------|------|
| `en` | English | LTR | �� |
| `hi` | Hindi | LTR | �� |
| `ar` | Arabic | RTL | �� |

---

## Locale Switcher

The `LocaleSwitcher` Livewire component (Core module) handles language switching:

```blade
@livewire('locale-switcher')
```

It stores the selected locale in the session and redirects back with the new locale active.

**Component:** `modules/Core/src/Http/Livewire/LocaleSwitcher.php`

---

## Translation Files

### JSON translations (recommended for UI strings)

```
lang/
├── en.json
├── hi.json
└── ar.json
```

```json
// lang/hi.json
{
    "Welcome": "स्वागत है",
    "Log in": "लॉग इन करें",
    "Register": "पंजीकरण करें"
}
```

### PHP translation files (for organized namespaced strings)

```php
// lang/hi/auth.php
return [
    'failed'   => 'प्रमाण-पत्र इनमें से किसी से मेल नहीं खाते।',
    'throttle' => 'बहुत अधिक लॉगिन प्रयास।',
];
```

---

## Using Translations in Blade

```blade
{{ __('Welcome') }}
{{ __('Hello, :name!', ['name' => $user->name]) }}
@lang('auth.failed')
```

---

## Using Translations in PHP

```php
__('Welcome');
trans('auth.failed');
app()->getLocale(); // 'en', 'hi', 'ar'
```

---

## Detecting Current Locale

```php
$locale = app()->getLocale();
$isRTL = in_array($locale, ['ar']);
```

---

## Adding a New Language

1. Create `lang/{locale}.json` with translations:

```json
// lang/fr.json
{
    "Welcome": "Bienvenue",
    "Log in": "Se connecter"
}
```

2. Add to the locale switcher options in `CoreServiceProvider.php`

3. If it's RTL, add to the RTL detection in your layout

---

## SEO with Multilingual

Use `hreflang` tags for multilingual SEO:

```blade
<link rel="alternate" hreflang="en" href="{{ url('/en') }}">
<link rel="alternate" hreflang="hi" href="{{ url('/hi') }}">
<link rel="alternate" hreflang="ar" href="{{ url('/ar') }}">
```

---

## Next Steps

� **[RTL Support →](rtl-support)**
