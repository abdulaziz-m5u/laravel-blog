<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        if(!auth()->check()){
            return redirect()->route('login');
        }
        $name = !isset(auth()->user()->name) ? $request->name : auth()->user()->name;

        Comment::create([
            'user_id' => auth()->id(),
            'post_id' => $request->post_id,
            'name' => $name,
            'message' => $request->message,
            'comment_id' => $request->comment_id === "null" ? null : $request->comment_id
        ]);

        return redirect()->back();
    }
}
