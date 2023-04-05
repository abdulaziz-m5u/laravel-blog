<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\Admin\PostRequest;

class PostController extends Controller
{
   
    public function index(): View
    {
        $posts = Post::get();

        return view('admin.posts.index', compact('posts'));
    }

    public function create(): View
    {
        $categories = Category::pluck('title','id');

        return view('admin.posts.create', compact('categories'));
    }

    public function store(PostRequest $request): RedirectResponse
    {
        if($request->validated()){
            $image = $request->file('image')->store(
                'post/images', 'public'
            );
            Post::create($request->except('image') + ['image' => $image]);
        }

        return redirect()->route('admin.posts.index')->with([
            'message' => 'successfully created !',
            'alert-type' => 'success'
        ]);
    }

    public function show(Post $post): View
    {
        return view('admin.posts.show', compact('post'));
    }

    public function edit(Post $post): View
    {
        $categories = Category::pluck('title','id');

        return view('admin.posts.edit', compact('post', 'categories'));
    }

    public function update(PostRequest $request, Post $post): RedirectResponse
    {
        if($request->validated()){
            if($request->image) {
                File::delete('storage/' . $post->image);
                $image = $request->file('image')->store(
                    'post/images', 'public'
                );
                $post->update($request->except('image') + ['image' => $image]);
            }else {
                $post->update($request->validated());
            }
        }

        return redirect()->route('admin.posts.index')->with([
            'message' => 'successfully updated !',
            'alert-type' => 'info'
        ]);
    }

    public function destroy(Post $post): RedirectResponse
    {
        File::delete('storage/' . $post->image);
        $post->delete();

        return back()->with([
            'message' => 'successfully deleted !',
            'alert-type' => 'danger'
        ]);
    }
}