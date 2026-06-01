<?php

namespace Modules\Blog\Http\Livewire;

use Modules\Blog\Models\Blog;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Layout;

#[Layout('core::layouts.app')]
class BlogList extends Component
{
    use WithPagination;

    public string $search = '';
    public string $category = '';

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function updatingCategory()
    {
        $this->resetPage();
    }

    public function render()
    {
        $locale = app()->getLocale();

        $blogs = Blog::query()
            ->where('status', 'published')
            ->when($this->search, function ($query) use ($locale) {
                $query->where(function ($q) use ($locale) {
                    $q->whereRaw("JSON_EXTRACT(title, '$.{$locale}') LIKE ?", ["%{$this->search}%"])
                      ->orWhereRaw("JSON_EXTRACT(content, '$.{$locale}') LIKE ?", ["%{$this->search}%"]);
                });
            })
            ->when($this->category, function ($query) use ($locale) {
                $query->whereRaw("JSON_EXTRACT(category, '$.{$locale}') = ?", [$this->category]);
            })
            ->with(['author'])
            ->latest('published_at')
            ->paginate(9);

        $categories = \Illuminate\Support\Facades\Cache::remember('blog_categories_list', 3600, function () use ($locale) {
            return Blog::query()
                ->where('status', 'published')
                ->whereNotNull('category')
                ->pluck('category')
                ->map(fn ($cat) => is_string($cat) ? json_decode($cat, true) : $cat)
                ->map(fn ($cat) => is_array($cat) ? ($cat[$locale] ?? '') : $cat)
                ->filter()
                ->unique()
                ->values();
        });

        return view('blog::livewire.blog-list', [
            'blogs' => $blogs,
            'categories' => $categories,
            'locale' => $locale,
        ]);
    }
}
