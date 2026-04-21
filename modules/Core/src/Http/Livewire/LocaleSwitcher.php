<?php

namespace Modules\Core\Http\Livewire;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class LocaleSwitcher extends Component
{
    public string $currentLocale;
    public array $availableLocales = [
        'en' => ['name' => 'English', 'native' => 'English'],
        'hi' => ['name' => 'Hindi',   'native' => 'Hindi - हिंदी'],
        'ar' => ['name' => 'Arabic',  'native' => 'Arabic - عربي'],
    ];

    public function mount()
    {
        $this->currentLocale = app()->getLocale();
    }

    public function switchLocale(string $locale)
    {
        if (!array_key_exists($locale, $this->availableLocales)) {
            return;
        }

        Session::put('locale', $locale);
        $this->currentLocale = $locale;

        // Use JavaScript redirect instead of server-side redirect
        $this->dispatch('locale-switched');
        $this->js('window.location.reload()');
    }

    public function render()
    {
        return view('core::livewire.locale-switcher');
    }
}
