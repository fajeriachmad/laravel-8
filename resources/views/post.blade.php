@extends('layouts.main')

@section('section')

    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h1 class="mb-3">{{ $post->title }}</h1>
                <h3 class="mb-3">
                    By: 
                        <a href="/posts?author={{ $post->author->username }}">{{ $post->author->name }}</a> 
                    in 
                        <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a>
                </h3>
                
                <img src="https://source.unsplash.com/1200x400?programming" class="img-fluid" alt="...">

                {{-- use {!! ... !!} instead of {{ ... }} to un-skip html elements inside the object --}}

                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article>

                <a href="/posts">Back to posts</a>
            </div>
        </div>
    </div>
    
@endsection