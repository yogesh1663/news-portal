<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::withCount('articles')->orderBy('id', 'DESC')->paginate(2);
        return view('category.index', ['categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'slug' => 'nullable|unique:categories,slug',
            'description' => 'required',
            'image' => 'nullable|file|'
        ]);
        if ($request->slug == NULL || $request->slug == "") {
            $slug = Str::slug($request->title);
        } else {
            $slug = $request->slug;
        }

        $filename = time() . "-" . $slug . '.' . $request->image->extension();
        $request->image->storeAs('public/image/', $filename);
        Category::create([
            'title' => $request->title,
            'slug' => $slug,
            'description' => $request->description,
            'image' => $filename
        ]);
        return redirect()->route('category.index')->with('success', 'Category data has been successfully added.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('category.edit', ['category' => $category]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        if ($request->slug == NULL || $request->slug == "") {
            $slug = Str::slug($request->title);
        } else {
            $slug = $request->slug;
        }

        if ($request->image) {
            $filename = time() . "." . $slug . "." . $request->image->extension();
            $request->image->storeAs('public/image/', $filename);
            if ($category->image) {
                if (Storage::exists('public/image/' . $category->image)) {
                    Storage::delete('public/image/' . $category->image);
                }
            }
        }

        $category->title = $request->title;
        $category->slug = $slug;
        $category->description = $request->description;
        if ($request->image) {
            $category->image = $filename;
        }
        $category->save();
        return redirect()->route('category.index')->with('success', 'Category data has been successfully updated.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        if ($category->image) {
            if (Storage::exists('public/image/' . $category->image)) {
                Storage::delete('public/image/' . $category->image);
            }
        }
        $category->delete();
        return redirect()->route('category.index')->with('success', 'Category data has been successfully deleted.');
    }
}
