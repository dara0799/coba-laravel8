@extends('layouts.main')

@section('container')
    <h1 class="mb-3">{{ $title }}</h1>
    @if ($posts->count())
        <div class="card mb-3">
            <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top" alt="Movie/Film">
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
    <div class="container">
        <div class="row">
            @foreach($posts->skip(1) as $post)
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="position-absolute px-3 py-2 text-white" style="background-color: rgba(0,0,0,0.7)"><a href="/categories/{{ $post->category->slug }}" class="text-decoration-none text-white">{{ $post->category->name }}</a></div>
                        <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}" class="card-img-top" alt="Movie/Film">
                        <div class="card-body">
                        <h5 class="card-title"><a href="/blog/{{ $post->slug }}" class="text-decoration-none text-dark">{{ $post->title }}</a></h5><h6><small class="text-muted">Kategori Film: <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></small></h6>
                        <p class="card-text">{{ $post->excerpt }}</p>
                        <p class="card-text"><small class="text-muted">Last update {{ $post->created_at->diffForHumans() }}</small></p>
                        <a href="/blog/{{ $post->slug }}" class="btn btn-primary">Baca selengkapnya</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    {{-- @foreach($posts->skip(1) as $post)
        <article  class="mb-5 pb-5 border-bottom">
            <h2><a href="/blog/{{ $post->slug }}" class="text-decoration-none">
                {{ $post->title }}
            </a></h2>
            <h5>Kategori Film: <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></h5>
            <p>{{ $post->excerpt }}</p>
            <a href="/blog/{{ $post->slug }}" class="text-decoration-none">Baca selengkapnya...</a>
        </article>
    @endforeach --}}
@endsection