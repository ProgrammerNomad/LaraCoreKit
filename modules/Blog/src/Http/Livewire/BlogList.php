<?php

namespace Modules\Blog\Http\Livewire;

use Illuminate\Support\Facades\Cache;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;
use Modules\Blog\Models\Blog;

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
            ->published()
            ->when($this->search, function ($query) use ($locale) {
                $query->where(function ($q) use ($locale) {
                    $q->where("title->{$locale}", 'like', "%{$this->search}%")
                        ->orWhere("content->{$locale}", 'like', "%{$this->search}%");
                });
            })
            ->when($this->category, function ($query) use ($locale) {
                $query->where("category->{$locale}", $this->category);
            })
            ->with(['author'])
            ->latest('published_at')
            ->paginate(9);

        $categories = Cache::remember('blog_categories_list:'.$locale, 3600, function () use ($locale) {
            return Blog::query()
                ->published()
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
