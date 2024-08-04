<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;
use Illuminate\Support\Str;

class PostView extends Component
{
    public $post;
    public $readDuration;
    public function mount($slug)
    {
        $this->post = Post::query()->where('slug', '=', $slug)->first();

        if ($this->post) {
            $this->readDuration = Str::readDuration($this->post->article) . ' minute(s) to read';
        }
    }

    public function render()
    {
        return $this->post ? view('livewire.post-view') : view('errors.404');
    }
}
