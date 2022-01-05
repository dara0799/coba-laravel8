@extends('layouts.main')

@section('container')
    <h1>{{ $title }}</h1>
    @foreach($posts as $post)
        <article  class="mb-5 pb-5 border-bottom">
            <h2><a href="/blog/{{ $post->slug }}" class="text-decoration-none">
                {{ $post->title }}
            </a></h2>
            <h5>Kategori Film: <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></h5>
            <p>{{ $post->excerpt }}</p>
            <a href="/blog/{{ $post->slug }}" class="text-decoration-none">Baca selengkapnya...</a>
        </article>
    @endforeach
@endsection