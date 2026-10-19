<?php

namespace Modules\Blog\Http\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;
use Modules\Blog\Models\Blog;

#[Layout('core::layouts.app')]
class BlogDetail extends Component
{
    public Blog $blog;

    public function mount(string $slug)
    {
        $this->blog = Blog::query()
            ->where('slug', $slug)
            ->published()
            ->with(['author'])
            ->firstOrFail();
    }

    public function render()
    {
        $locale = app()->getLocale();

        $relatedBlogs = Blog::query()
            ->published()
            ->where('id', '!=', $this->blog->id)
            ->where("category->{$locale}", $this->blog->category[$locale] ?? '')
            ->with(['author'])
            ->latest('published_at')
            ->limit(3)
            ->get();

        return view('blog::livewire.blog-detail', [
            'relatedBlogs' => $relatedBlogs,
            'locale' => $locale,
        ]);
    }
}
