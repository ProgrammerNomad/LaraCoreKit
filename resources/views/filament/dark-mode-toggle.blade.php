@php
    use Filament\Support\Icons\Heroicon;
    use Filament\View\PanelsIconAlias;
    use Illuminate\Support\Js;

    $lightLabel = __('filament-panels::layout.actions.theme_switcher.light.label');
    $darkLabel = __('filament-panels::layout.actions.theme_switcher.dark.label');

    $lightIconHtml = Filament\Support\generate_icon_html(
        Heroicon::Sun,
        alias: PanelsIconAlias::THEME_SWITCHER_LIGHT_BUTTON,
    )->toHtml();

    $darkIconHtml = Filament\Support\generate_icon_html(
        Heroicon::Moon,
        alias: PanelsIconAlias::THEME_SWITCHER_DARK_BUTTON,
    )->toHtml();
@endphp

<div
    x-data="{
        theme: 'light',
        initTheme() {
            const saved = localStorage.getItem('theme') ?? @js(filament()->getDefaultThemeMode()->value);
            const normalized = saved === 'dark' ? 'dark' : 'light';

            this.theme = normalized;
            this.applyTheme(normalized, false);

            window.addEventListener('theme-changed', (event) => {
                const detail = event.detail === 'dark' ? 'dark' : 'light';

                this.theme = detail;
                this.applyTheme(detail, false);
            });
        },
        applyTheme(value, shouldNotify = true) {
            localStorage.setItem('theme', value);

            if (window.Alpine?.store('theme')) {
                window.Alpine.store('theme', value);
            }

            if (shouldNotify) {
                window.dispatchEvent(new CustomEvent('theme-changed', { detail: value }));
            }
        },
        toggleTheme() {
            const next = this.theme === 'dark' ? 'light' : 'dark';

            this.theme = next;
            this.applyTheme(next);
        },
    }"
    x-init="initTheme()"
    class="fi-topbar-item hidden md:flex"
>
    <button
        type="button"
        x-on:click="toggleTheme()"
        x-bind:aria-label="theme === 'dark' ? {{ Js::from($lightLabel) }} : {{ Js::from($darkLabel) }}"
        x-tooltip="theme === 'dark'
            ? { content: {{ Js::from($lightLabel) }}, theme: $store.theme }
            : { content: {{ Js::from($darkLabel) }}, theme: $store.theme }"
        class="fi-theme-switcher-btn"
    >
        <span x-cloak x-show="theme === 'dark'">
            {!! $lightIconHtml !!}
        </span>

        <span x-cloak x-show="theme === 'light'">
            {!! $darkIconHtml !!}
        </span>
    </button>
</div>
