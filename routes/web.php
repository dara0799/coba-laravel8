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
    $blog_posts = [
        [
            "title" => "Harry Potter and the Philosopher's Stone",
            "slug" => "harry-potter-and-the-philosopher-stone",
            "author" => "J.K. Rowling",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Error tempora iure harum cum, ad, quaerat doloribus temporibus voluptatem beatae cumque itaque accusantium voluptatum est corporis porro magnam dolores. Tempora perspiciatis totam rerum consequatur ullam necessitatibus, nihil laboriosam libero, maxime voluptatem obcaecati fugiat assumenda tenetur ducimus aut itaque. Voluptatum tempora earum amet inventore! Modi nisi ullam itaque, ea odit assumenda placeat voluptatum id amet possimus reiciendis soluta temporibus porro dolores. Consequuntur sed ipsum optio, magnam velit et ratione quisquam tempore eum?"
        ],
        [
            "title" => "Harry Potter and the Chamber of Secrets",
            "slug" => "harry-potter-and-the-chamber-of-secrets",
            "author" => "J.K. Rowling",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus, voluptatum. Reiciendis veritatis velit eos fugit, neque consequuntur alias autem molestias delectus repudiandae tempore quaerat sapiente libero ut nihil dignissimos vel, voluptates ipsam esse exercitationem adipisci excepturi eveniet tenetur obcaecati! Similique veniam accusamus enim a nihil quas nisi assumenda sed eius dolores aspernatur non sint delectus vel possimus minima obcaecati fuga, neque dicta aut at. Porro animi dolorum labore enim dolore vitae quidem maxime earum error. Corrupti praesentium, totam eligendi delectus quam molestias optio maiores reprehenderit repellat suscipit nobis aliquam ex sint sapiente amet distinctio placeat nisi? Asperiores nam recusandae ut."
            ]
        ];
        
        return view('posts', [
            "title" => "BLOG",
            "posts" => $blog_posts
        ]);
    });
    
Route::get('/blog/{slug}', function ($slug) {
        $blog_posts = [
            [
                "title" => "Harry Potter and the Philosopher's Stone",
                "slug" => "harry-potter-and-the-philosopher-stone",
                "author" => "J.K. Rowling",
                "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Error tempora iure harum cum, ad, quaerat doloribus temporibus voluptatem beatae cumque itaque accusantium voluptatum est corporis porro magnam dolores. Tempora perspiciatis totam rerum consequatur ullam necessitatibus, nihil laboriosam libero, maxime voluptatem obcaecati fugiat assumenda tenetur ducimus aut itaque. Voluptatum tempora earum amet inventore! Modi nisi ullam itaque, ea odit assumenda placeat voluptatum id amet possimus reiciendis soluta temporibus porro dolores. Consequuntur sed ipsum optio, magnam velit et ratione quisquam tempore eum?"
            ],
            [
                "title" => "Harry Potter and the Chamber of Secrets",
                "slug" => "harry-potter-and-the-chamber-of-secrets",
                "author" => "J.K. Rowling",
                "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus, voluptatum. Reiciendis veritatis velit eos fugit, neque consequuntur alias autem molestias delectus repudiandae tempore quaerat sapiente libero ut nihil dignissimos vel, voluptates ipsam esse exercitationem adipisci excepturi eveniet tenetur obcaecati! Similique veniam accusamus enim a nihil quas nisi assumenda sed eius dolores aspernatur non sint delectus vel possimus minima obcaecati fuga, neque dicta aut at. Porro animi dolorum labore enim dolore vitae quidem maxime earum error. Corrupti praesentium, totam eligendi delectus quam molestias optio maiores reprehenderit repellat suscipit nobis aliquam ex sint sapiente amet distinctio placeat nisi? Asperiores nam recusandae ut."
            ]
        ];
        
    $new_post = [];
        foreach ($blog_posts as $post) {
            if ($post["slug"] === $slug) {
                $new_post = $post;
        }
    }
    
    return view('post', [
        "title" => "SINGLE POST",
        "post" => $new_post
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

