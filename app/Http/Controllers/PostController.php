<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index() 
    {
        return view('posts', [
            "title" => "Seluruh Postingan",
            // "posts" => Post::all()
            "posts" => Post::with(['editor', 'category'])->latest()->get()
        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            "title" => "SINGLE POST",
            "post" => $post
        ]);
    }
}
