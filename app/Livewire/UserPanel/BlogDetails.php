<?php

namespace App\Livewire\UserPanel;

use App\Models\Article;
use Livewire\Component;

class BlogDetails extends Component
{
    public $article;

    public function mount($id){
        $this->article = Article::findOrFail($id);    
    }
    public function render()
    {
        return view('livewire.user-panel.blog-details', [
            'article' => $this->article,
        ]);
    }
}
