@extends('layouts.main')

@section('container')
    <article>
        <h2>{{ $post->title }}</h2>
        <h5>Author: <a href="" class="text-decoration-none">{{ $post->author }}</a></h5>
        <h6>Kategori Film: <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></h6>
        {!! $post->body !!}
        <p>Penyunting Blog: <a href="/editors/{{ $post->editor->username }}" class="text-decoration-none">{{ $post->editor->name }}</a></p>
    </article>
    <a href="/blog" class="text-decoration-none">Back to All Blogs</a>
@endsection