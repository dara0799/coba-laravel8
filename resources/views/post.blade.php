@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <article>
                    <h2 class="mb-3">{{ $post->title }}</h2>
                    <h5>Author: <a href="" class="text-decoration-none">{{ $post->author }}</a></h5>
                    <h6>Kategori Film: <a href="/blog?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></h6>
                    <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="img-fluid " alt="Movie/Film">
                    <article class="my-3 fs-5">
                        {!! $post->body !!}
                    </article>
                    <p>Penyunting Blog: <a href="/blog?editor={{ $post->editor->username }}" class="text-decoration-none">{{ $post->editor->name }}</a></p>
                </article>
                <a href="/blog" class="text-decoration-none">Back to All Blogs</a>
            </div>
        </div>
    </div>
@endsection