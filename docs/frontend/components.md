# UI Components

**Estimated time:** 8 minutes  
**Difficulty:** Beginner

---

LaraCoreKit ships with **175+ ready-to-use UI components** built with TailwindCSS v4 and Livewire. Browse them all interactively at `/ui-showcase`.

---

## Component Categories

### Core UI
| Component | Usage |
|-----------|-------|
| Buttons | Primary, secondary, outline, ghost, icon, loading |
| Badges | Status, counter, label variants |
| Alerts | Success, warning, error, info with dismiss |
| Avatars | Sizes, with status, group |
| Spinners | Loading states for buttons and pages |

### Forms
| Component | Usage |
|-----------|-------|
| Text Input | Standard, with icon, with error |
| Select | Native, searchable, multi-select |
| Textarea | Resizable with character count |
| Checkbox | Single, group |
| Radio | Button group style |
| Toggle | Switch component |
| File Upload | With drag-and-drop preview |

### Layout
| Component | Usage |
|-----------|-------|
| Cards | Basic, profile, stats, bordered |
| Modals | Confirmation, form, full-screen |
| Drawers | Side panel sliding menu |
| Tabs | Horizontal, vertical |
| Accordion | Collapsible FAQ sections |

### Navigation
| Component | Usage |
|-----------|-------|
| Navbar | Sticky, with search, mobile |
| Sidebar | Collapsible, with groups |
| Breadcrumbs | With icons, truncated |
| Pagination | Standard, compact, infinite scroll |

### Data Display
| Component | Usage |
|-----------|-------|
| Tables | Sortable, filterable, with actions |
| Stats | Number cards, with trend |
| Progress | Bar, circular, step indicator |
| Timeline | Activity feed |
| Charts | Bar, line, doughnut (Alpine.js) |

---

## Using Components

### Blade Components (x-tags)

```blade
{{-- Button --}}
<x-button variant="primary" size="lg">
    Save Changes
</x-button>

<x-button variant="outline" wire:click="delete" wire:confirm="Are you sure?">
    Delete
</x-button>

{{-- Alert --}}
<x-alert type="success" dismissible>
    Your changes have been saved successfully!
</x-alert>

{{-- Card --}}
<x-card title="User Stats" subtitle="Last 30 days">
    <x-stat label="Total Users" value="1,234" trend="+12%" trend-up />
</x-card>

{{-- Badge --}}
<x-badge color="green">Published</x-badge>
<x-badge color="yellow">Draft</x-badge>
```

### Form Components

```blade
<form wire:submit="save">
    <x-input
        label="Email Address"
        type="email"
        wire:model="email"
        placeholder="you@example.com"
        :error="$errors->first('email')"
    />

    <x-select
        label="Role"
        wire:model="role"
        :options="['admin' => 'Administrator', 'editor' => 'Editor']"
    />

    <x-toggle
        label="Send notifications"
        wire:model="notifications"
    />

    <x-button type="submit" wire:loading.attr="disabled">
        <span wire:loading.remove>Save</span>
        <span wire:loading>Saving...</span>
    </x-button>
</form>
```

---

## Livewire Components

Pre-built interactive components:

```blade
{{-- Blog listing with search & pagination --}}
@livewire('blog.blog-list')

{{-- Newsletter subscribe form --}}
@livewire('newsletter.subscribe')

{{-- Locale switcher dropdown --}}
@livewire('locale-switcher')
```

---

## Dark Mode

All components support dark mode automatically via TailwindCSS `dark:` variants. No extra configuration needed — just set `dark` class on `<html>`.

---

## Customizing Components

Components are in `modules/UIShowcase/views/components/` and `resources/views/components/`.

Override any component by publishing:

```bash
php artisan vendor:publish --tag=laracorekit-components
```

---

## Next Steps

� **[Layout System →](layouts)**
