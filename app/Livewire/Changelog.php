<?php

namespace App\Livewire;

use Illuminate\Support\Facades\File;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('core::layouts.app')]
class Changelog extends Component
{
    public $changelog;

    public function mount()
    {
        $changelogPath = base_path('CHANGELOG.md');

        if (File::exists($changelogPath)) {
            $this->changelog = File::get($changelogPath);
        } else {
            $this->changelog = '# Changelog not found';
        }
    }

    public function render()
    {
        return view('site.changelog');
    }
}
