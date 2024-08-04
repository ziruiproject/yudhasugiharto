<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class PostList extends Component
{
    use WithPagination;

    public $search = '';

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $posts = Post::query()
            ->where('visible', '=', true)
            ->with('categories')
            ->when($this->search, function ($query) {
                $query->where('title', 'like', '%' . $this->search . '%');
            })
            ->paginate(10); // Ganti angka ini dengan jumlah per halaman yang diinginkan

        return view('livewire.main', ['posts' => $posts]);
    }
}
