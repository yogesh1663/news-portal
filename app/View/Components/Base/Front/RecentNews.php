<?php

namespace App\View\Components\base\front;

use App\Models\Article;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class RecentNews extends Component
{
    /**
     * Create a new component instance.
     */
    public $news;
    public function __construct()
    {
        $this->news = Article::latest()->limit(4)->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.base.front.recent-news');
    }
}
