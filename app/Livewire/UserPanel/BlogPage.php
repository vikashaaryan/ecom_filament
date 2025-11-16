<?php

namespace App\Livewire\UserPanel;

use App\Models\Article;
use App\Models\Category;
use Livewire\Attributes\Url;
use Livewire\Component;


class BlogPage extends Component
{
    #[Url]
    public $categorySlug = null;

   public function render()
{
    $categories = Category::all();
    $blogArticles = Article::query()->orderBy('created_at', 'DESC')->paginate(2);

    $activeCategory = null;

    if (!empty($this->categorySlug)) {
        $activeCategory = Category::where('slug', $this->categorySlug)->first();
        if(empty($categories)){
            abort(404);
        }
        if ($activeCategory) {
            $blogArticles->where('category_id', $activeCategory->id)->paginate(2);
        }
    }
    $latesArticles = Article::orderBy('created_at', 'DESC')->take(5)->get();

    return view('livewire.user-panel.blog-page', [
        'blogArticles' => $blogArticles,
        'categories'   => $categories,
        'activeCategory' => $activeCategory,
        'latesArticles' => $latesArticles,
    ]);
}
}