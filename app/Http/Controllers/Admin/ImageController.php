<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ImageController extends Controller
{
    public function store()
    {
        $post = new Post();
        $post->id = 0;
        $post->exists = TRUE;
        $image = $post->addMediaFromRequest('upload')->toMediaCollection('images');

        return response()->json([
            'url' =>  $image->getUrl('thumb')
        ]);
    }
}
