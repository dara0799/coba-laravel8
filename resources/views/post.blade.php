@extends('layouts.main')

@section('container')
    <article>
        <h2>{{ $post->title }}</h2>
        <h5>By: {{ $post->author }}</h5>
        <h6>Kategori Film: <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></h6>
        {!! $post->body !!}
    </article>
    <a href="/blog">Back to All Blog</a>
@endsection