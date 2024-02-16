@extends('layouts.main')

@section('section')
    <article>
        <h1>{{ $post->title }}</h1>
        <h3>By: <a href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></h2>
        {{-- use {!! ... !!} instead of {{ ... }} to un-skip html elements inside the object --}}
        {!! $post->body !!}
    </article>
    <a href="/posts">Back to posts</a>
@endsection