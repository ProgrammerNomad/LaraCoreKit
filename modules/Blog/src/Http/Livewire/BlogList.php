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
    public string $locale;

    public function mount()
    {
        $this->locale = app()->getLocale();
    }

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
        $blogs = Blog::query()
            ->where('status', 'published')
            ->when($this->search, function ($query) {
                $query->where(function ($q) {
                    $q->whereRaw("JSON_EXTRACT(title, '$.{$this->locale}') LIKE ?", ["%{$this->search}%"])
                      ->orWhereRaw("JSON_EXTRACT(content, '$.{$this->locale}') LIKE ?", ["%{$this->search}%"]);
                });
            })
            ->when($this->category, function ($query) {
                $query->whereRaw("JSON_EXTRACT(category, '$.{$this->locale}') = ?", [$this->category]);
            })
            ->with(['author'])
            ->latest('published_at')
            ->paginate(9);

        $categories = Blog::query()
            ->where('status', 'published')
            ->get()
            ->pluck('category')
            ->filter()
            ->map(fn ($cat) => is_array($cat) ? ($cat[$this->locale] ?? '') : $cat)
            ->filter()
            ->unique()
            ->values();

        return view('blog::livewire.blog-list', [
            'blogs' => $blogs,
            'categories' => $categories,
        ]);
    }
}
