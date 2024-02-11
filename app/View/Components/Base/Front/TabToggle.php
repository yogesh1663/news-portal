<?php

namespace App\View\Components\base\front;

use App\Models\Article;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TabToggle extends Component
{
    /**
     * Create a new component instance.
     */
    public $latestNews;
    public $views;
    public $randoms;
    public function __construct()
    {
        $this->latestNews = Article::latest()->limit(5)->get();
        $this->views = Article::orderByDesc('views')->limit(5)->get();
        $this->randoms = Article::inRandomOrder()->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.base.front.tab-toggle');
    }
}
