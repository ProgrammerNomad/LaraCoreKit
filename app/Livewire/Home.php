<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;
use Modules\Blog\Models\Blog;

#[Layout('core::layouts.app')]
class Home extends Component
{
    public function render()
    {
        try {
            $latestPosts = Blog::published()
                ->latest('published_at')
                ->take(3)
                ->get();
        } catch (\Exception $e) {
            $latestPosts = collect();
        }

        return view('site.home', [
            'latestPosts' => $latestPosts,
        ]);
    }
}
