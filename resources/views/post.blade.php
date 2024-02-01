@extends('layouts.main')

@section('section')
    <article>
        <h1>
            <p>{{ $post["title"] }}</a>
        </h1>
        <h2>By: {{ $post["author"] }}</h2>
        <p>{{ $post["body"] }}</p>
    </article>
    <a href="/blog">Back to posts</a>
@endsection