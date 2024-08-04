<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Component;

class PostFilter extends Component
{
    public function selectCategory($categoryId)
    {
        $this->dispatch('filter-updated', categoryId: $categoryId);
    }

    public function clearFilter()
    {
        $this->dispatch('filter-updated', categoryId: null);
    }

    public function render()
    {
        return view('livewire.post-filter', ['categories' => Category::withCount('posts')->orderBy('name')->get()]);
    }
}
