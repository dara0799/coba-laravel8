<?php

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
    return view('posts', [
        "title" => "BLOG"
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

