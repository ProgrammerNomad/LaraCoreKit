<?php

namespace Modules\Core\Http\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\File;

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
        return view('core::livewire.changelog');
    }
}
