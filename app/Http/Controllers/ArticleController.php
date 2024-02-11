<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::get()->sortByDesc('id');
        return view('article.index', ['articles' => $articles]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $Category = Category::get();
        return view('article.create', ['categories' => $Category]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'slug' => 'nullable|unique:categories,slug',
            'content' => 'required',
            'image' => 'nullable|',
            'status' => 'required',
            'category' => 'required'
        ]);
        if ($request->slug == NULL || $request->slug == "") {
            $slug = Str::slug($request->title);
        } else {
            $slug = $request->slug;
        }

        $filename = time() . '.' . $request->image->extension();
        $request->image->storeAs('public/image/', $filename);

        $sql = Article::create([
            'title' => $request->title,
            'slug' => $slug,
            'content' => $request->content,
            'image' => $filename,
            'status' => $request->status,
            'category_id' => $request->category,

        ]);
        return redirect()->route('article.index')->with('success', 'Article data has been successfully added.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        return view('article.edit', ['articles' => $article]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {

        $request->validate([
            'title' => 'required',
            'slug' => 'nullable|unique:categories,slug',
            'content' => 'required',
            'image' => 'nullable|',
            'status' => 'required',
            'category' => 'required'
        ]);
        if ($request->slug == NULL || $request->slug == "") {
            $slug = Str::slug($request->title);
        } else {
            $slug = $request->slug;
        }
        if ($request->image) {
            $filename = time() . '.' . $request->image->extension();
            $request->image->storeAs('public/image/', $filename);
            if ($article->image) {
                if (Storage::exists('public/image/' . $article->image)) {
                    Storage::delete('public/image/' . $article->image);
                }
            }
        }
        $article->title = $request->title;
        $article->slug = $slug;
        $article->content = $request->content;
        if ($request->image) {
            $article->image = $filename;
        }
        $article->status = $request->status;
        $article->category_id = $request->category;
        $article->save();
        return redirect()->route('article.index')->with('success', 'Article data has been successfully updated.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        if ($article->image) {
            if (Storage::exists('public/image/' . $article->image)) {
                Storage::delete('public/image/' . $article->image);
            }
        }
        $article->delete();
        return redirect()->route('article.index')->with('success', 'Article data has been successfully deleted.');
    }
}
