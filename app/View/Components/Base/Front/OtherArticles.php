<?php

namespace App\View\Components\Base\front;

use App\Models\Article;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class OtherArticles extends Component
{
    /**
     * Create a new component instance.
     */
    public $articles;
    public function __construct()
    {
        $this->articles = Article::latest()->offset(5)->limit(5)->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.base.front.other-articles');
    }
}
