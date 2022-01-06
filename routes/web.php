<?php

use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\User;
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

Route::get('/blog', [PostController::class, 'index']);

Route::get('/blog/{post:slug}', [PostController::class, 'show']);

Route::get('/about', function () {
    return view('about', [
        "title" => "ABOUT",
        "active" => "about",
        "name" => " Dara",
        "email" => "dara@gm.com",
        "image" => "dara.jpg"
    ]);    
});

Route::get('/categories', function() {
    return view('categories', [
        'title' => 'All Categories',
        "active" => "categories",
        'categories' => Category::all()
    ]);
});

Route::get('/categories/{category:slug}', function(Category $category) {
    return view('posts', [
        'title' => "Blog berdasarkan kategori film: $category->name",
        'posts' => $category->posts,
        "active" => "categories",
        'category' => $category->posts->load(['editor', 'category'])
    ]);
});

Route::get('/editors/{editor:username}', function(User $editor) {
    return view('posts', [
        'title' => "Blog berdasarkan penyunting: $editor->name",
        'posts' => $editor->posts->load(['editor', 'category'])
    ]);
});

Route::get('/', function () {
    return view('home', [
        "title" => "HOME",
        "active" => "home",
    ]);
});

