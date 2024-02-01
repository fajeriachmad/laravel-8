@extends('layouts.main')

@section('section')
<h1 class="mb-5">Blog Posts Page</h1>

@foreach ($posts as $post)
    <article class="mb-5 border-bottom">
        <h2><a href="/posts/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a></h2>
        <p>By: {{ $post->user->name }} in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
        <p>{{ $post->excerpt }}</p>
        <a href="/posts/{{ $post->slug }}">Read more..</a>
    </article>
@endforeach

@endsection