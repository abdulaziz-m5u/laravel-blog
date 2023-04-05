<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\Admin\CategoryRequest;

class CategoryController extends Controller
{
   
    public function index(): View
    {
        $categories = Category::get();

        return view('admin.categories.index', compact('categories'));
    }

    public function create(): View
    {
        return view('admin.categories.create');
    }

    public function store(CategoryRequest $request): RedirectResponse
    {
        if($request->validated()) {
            $image = $request->file('image')->store(
                'category/images', 'public'
            );
            Category::create($request->except('image') + ['image' => $image]);
        }

        return redirect()->route('admin.categories.index')->with([
            'message' => 'successfully created !',
            'alert-type' => 'success'
        ]);
    }

    public function show(Category $category): View
    {
        return view('admin.categories.show', compact('category'));
    }

    public function edit(Category $category): View
    {
        return view('admin.categories.edit', compact('category'));
    }

    public function update(CategoryRequest $request, Category $category): RedirectResponse
    {
        if($request->validated()) {
            if($request->image) {
                File::delete('storage/' . $category->image);
                $image = $request->file('image')->store(
                    'category/images', 'public'
                );
                $category->update($request->except('image') + ['image' => $image]);
            }else {
                $category->update($request->validated());
            }
        }

        return redirect()->route('admin.categories.index')->with([
            'message' => 'successfully updated !',
            'alert-type' => 'info'
        ]);
    }

    public function destroy(Category $category): RedirectResponse
    {
        $category->delete();

        return back()->with([
            'message' => 'successfully deleted !',
            'alert-type' => 'danger'
        ]);
    }
}