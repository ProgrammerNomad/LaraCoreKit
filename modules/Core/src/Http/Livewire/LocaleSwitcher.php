<?php

namespace Modules\Core\Http\Livewire;

use Livewire\Component;

class LocaleSwitcher extends Component
{
    public array $availableLocales = [
        'en' => ['name' => 'English', 'native' => 'English'],
        'hi' => ['name' => 'Hindi',   'native' => 'Hindi - हिंदी'],
        'ar' => ['name' => 'Arabic',  'native' => 'Arabic - عربي'],
    ];

    public function render()
    {
        return view('core::livewire.locale-switcher', [
            'currentLocale' => app()->getLocale(),
        ]);
    }
}
