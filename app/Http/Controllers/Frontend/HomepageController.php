<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Post;
use App\Models\Comment;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomepageController extends Controller
{
    public function index()
    {
        $posts = Post::paginate(5);
        $categories = Category::withCount('posts')->get();

        return view('frontend.homepage', compact('posts','categories'));
    }

    public function show(Post $post)
    {
        $posts = Post::where('id','!=', $post->id)->get();
        $categories = Category::withCount('posts')->get();
        $shares = \Share::currentPage()
                        ->facebook()
                        ->twitter()
                        ->linkedin();

        return view('frontend.show', compact('post', 'posts','categories','shares'));
    }
}
