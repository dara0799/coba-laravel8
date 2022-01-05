@extends('layouts.main')

@section('container')
    <h1 class="mb-3">{{ $title }}</h1>
    @if ($posts->count())
        <div class="card mb-3">
            <img src="https://source.unsplash.com/1200x400/?{{ $posts[0]->category->name }}" class="card-img-top" alt="Movie/Film">
            <div class="card-body text-center">
                <h3 class="card-title"><a href="/blog/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h3>
                <h5><small class="text-muted">Kategori Film: <a href="/categories/{{ $posts[0]->category->slug }}" class="text-decoration-none">{{ $posts[0]->category->name }}</a></small></h5>
                <p class="card-text"><small>{{ $posts[0]->excerpt }}</small></p>
                <p class="card-text"><small class="text-muted">Last update {{ $posts[0]->created_at->diffForHumans() }}</small></p>
                <a href="/blog/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">Baca selengkapnya</a>
            </div>
        </div>
    @else
        <p class="text-center fs-4">Blog tidak ditemukan</p>
    @endif
    @foreach($posts->skip(1) as $post)
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