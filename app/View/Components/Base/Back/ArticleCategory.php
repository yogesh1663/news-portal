<?php

namespace App\View\Components\base\back;

use App\Models\Category;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ArticleCategory extends Component
{
    public $id;
    public $categories;
    /**
     * Create a new component instance.
     */
    public function __construct($id)
    {
        $this->id = $id;
        return $this->categories = Category::all();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.base.back.article-category');
    }
}
