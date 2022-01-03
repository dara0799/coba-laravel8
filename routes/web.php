<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/blog', function () {
    // $blog_posts = "";
        
        return view('posts', [
            "title" => "BLOG",
            "posts" => Post::all()
        ]);
    });
    
Route::get('/blog/{slug}', function ($slug) {

    return view('post', [
        "title" => "SINGLE POST",
        "post" => Post::find($slug)
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "ABOUT",
        "name" => " Dara",
        "email" => "dara@gm.com",
        "image" => "dara.jpg"
    ]);    
});    

Route::get('/', function () {
    return view('home', [
        "title" => "HOME"
    ]);
});

