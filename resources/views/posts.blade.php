@extends('layouts.main')

@section('section')
@foreach ($posts as $post)
    <article>
        <h1>
            <a href="posts/{{ $post["slug"] }}">{{ $post["title"] }}</a>
        </h1>
        <h2>By: {{ $post["author"] }}</h2>
        <p>{{ $post["body"] }}</p>
    </article>
@endforeach
@endsection