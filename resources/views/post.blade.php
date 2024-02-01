@extends('layouts.main')

@section('section')
    <article>
        <h1>
            <p>{{ $post->title }}</p>
        </h1>
        <h2>By: {{ $post->author }}</h2>
        {{-- use {!! ... !!} instead of {{ ... }} to un-skip html elements inside the object --}}
        {!! $post->body !!}
    </article>
    <a href="/posts">Back to posts</a>
@endsection