<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

class PostController extends Controller
{
    public function index() 
    {
        $title = '';
        if(request('category')){
            $category = Category::firstWhere('slug', request('category'));
            $title = " Berdasarkan Genre Film ". $category->name;
        }
        if(request('editor')){
            $editor = User::firstWhere('username', request('editor'));
            $title = " Berdasarkan Penyunting ". $editor->name;
        }
        // dd(request('search'));
        // $posts = Post::latest();
        return view('posts', [
            "title" => "Seluruh Blog" . $title,
            "active" => "blog",
            // "posts" => Post::all()
            "posts" => Post::latest()->filter(request(['search', 'category', 'editor']))->paginate(7)->withQueryString()
        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            "title" => "SINGLE POST",
            "active" => "blog",
            "post" => $post
        ]);
    }
}
