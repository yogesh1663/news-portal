<?php

namespace App\View\Components\base\front;

use Closure;
use App\Models\Article;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class ArticleWithWithoutDescription extends Component
{
    /**
     * Create a new component instance.
     */
    public $article;
    public $desc;
    public function __construct($id, $desc)
    {
        $this->article = Article::find($id);
        $this->desc = $desc;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.base.front.article-with-without-description');
    }
}
