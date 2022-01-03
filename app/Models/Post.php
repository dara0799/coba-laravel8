<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Post 
// extends Model
{
    // use HasFactory;
    private static $blog_posts = [
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
        
        public static function all()
        {
            return collect(self::$blog_posts);
        }

        public static function find($slug)
        {
            $posts = static::all();
            return $posts->firstWhere('slug', $slug);
        }
}