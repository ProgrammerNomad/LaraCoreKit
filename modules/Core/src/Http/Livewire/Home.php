<?php

namespace Modules\Core\Http\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('core::layouts.app')]
class Home extends Component
{
    public function render()
    {
        try {
            $latestPosts = \Modules\Blog\Models\Blog::where('status', 'published')
                ->latest('published_at')
                ->take(3)
                ->get();
        } catch (\Exception $e) {
            $latestPosts = collect();
        }

        return view('core::livewire.home', [
            'latestPosts' => $latestPosts
        ]);
    }
}
