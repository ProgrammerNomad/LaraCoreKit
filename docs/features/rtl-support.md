# RTL Support

**Estimated time:** 5 minutes  
**Difficulty:** Beginner

---

LaraCoreKit automatically enables RTL (right-to-left) layout when the Arabic locale is active, without any additional setup required.

---

## How It Works

The layout detects the current locale and sets the HTML `dir` attribute automatically:

```blade
<html
    lang="{{ app()->getLocale() }}"
    dir="{{ in_array(app()->getLocale(), ['ar']) ? 'rtl' : 'ltr' }}"
>
```

When `ar` locale is set, the entire page flips to RTL — text, navigation, sidebars, and all components.

---

## TailwindCSS v4 RTL Classes

TailwindCSS v4 supports RTL modifiers natively:

```html
<!-- Text alignment flips automatically -->
<div class="rtl:text-right ltr:text-left">
    Content with direction-aware alignment
</div>

<!-- Margins also flip -->
<div class="ml-4 rtl:mr-4 rtl:ml-0">
    Direction-aware margin
</div>

<!-- Flexbox direction -->
<div class="flex-row rtl:flex-row-reverse">
    Items reverse in RTL
</div>
```

---

## Adding a New RTL Language

For example, adding Urdu (`ur`):

### Step 1: Create translations

```
lang/ur.json
lang/ur/auth.php
```

### Step 2: Add to RTL locales

In your layout file, add `'ur'` to the RTL array:

```blade
<html dir="{{ in_array(app()->getLocale(), ['ar', 'ur']) ? 'rtl' : 'ltr' }}">
```

### Step 3: Add to locale switcher

In `modules/Core/src/Http/Livewire/LocaleSwitcher.php`:

```php
protected array $locales = [
    'en' => 'English',
    'hi' => 'हिन्दी',
    'ar' => 'العربية',
    'ur' => 'اردو',   // Add this
];
```

---

## Testing RTL

Switch to Arabic locale:

```
http://localhost:8000?locale=ar
```

You should see the entire layout mirror to right-to-left.

---

## Filament RTL

Filament v3 also supports RTL. It auto-detects from the `<html dir="">` attribute.

---

## Next Steps

**[Admin Panel Overview →](../admin/filament-overview)**
