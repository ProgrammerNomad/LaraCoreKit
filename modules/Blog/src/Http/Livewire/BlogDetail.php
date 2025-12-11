<?php

namespace Modules\Blog\Http\Livewire;

use Modules\Blog\Models\Blog;
use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('core::layouts.app')]
class BlogDetail extends Component
{
    public Blog $blog;
    public string $locale;

    public function mount(string $slug)
    {
        $this->locale = app()->getLocale();
        
        $this->blog = Blog::query()
            ->where('slug', $slug)
            ->where('status', 'published')
            ->with(['author'])
            ->firstOrFail();
    }

    public function render()
    {
        $relatedBlogs = Blog::query()
            ->where('status', 'published')
            ->where('id', '!=', $this->blog->id)
            ->whereRaw("JSON_EXTRACT(category, '$.{$this->locale}') = ?", [$this->blog->category[$this->locale] ?? ''])
            ->with(['author'])
            ->latest('published_at')
            ->limit(3)
            ->get();

        return view('blog::livewire.blog-detail', [
            'relatedBlogs' => $relatedBlogs,
        ]);
    }
}
