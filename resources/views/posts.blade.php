@extends('layouts.main')

@section('container')
    @foreach($posts as $post)
        <article class="mb-5">
            <a href="/blog/{{ $post->id }}">
                <h2>{{ $post->title }}</h2>
            </a>
            <h5>By: {{ $post->author }}</h5>
            <p>{{ $post->excerpt }}</p>
        </article>
    @endforeach
@endsection