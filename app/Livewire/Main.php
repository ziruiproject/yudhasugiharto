<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class Main extends Component
{
    use WithPagination;

    public $search = '';
    public $selectedCategory;

    #[On('filter-updated')]
    public function updateFilter($categoryId)
    {
        $this->selectedCategory = $categoryId;
        $this->resetPage();
    }

    public function render()
    {
        // Filter posts based on the selected category
        $posts = Post::query()
            ->where('visible', '=', true)
            ->when($this->search, function ($query) {
                $query->where('title', 'like', '%' . $this->search . '%');
            })
            ->when($this->selectedCategory, function ($query) {
                $query->whereHas('categories', function ($query) {
                    $query->where('categories.id', $this->selectedCategory)->orderBy('name');
                });
            })
            ->paginate(10); // Adjust the number of posts per page as needed

        return view('livewire.main', ['posts' => $posts]);
    }
}
