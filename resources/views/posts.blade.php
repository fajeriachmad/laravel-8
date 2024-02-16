@extends('layouts.main')

@section('section')

    <h1 class="mb-3 text-center">{{ $title }}</h1>

    <div class="row justify-content-center mb-3">
        <div class="col-md-6">
            <form action="/posts">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif 
                @if (request('author'))
                    <input type="hidden" name="author" value="{{ request('author') }}">
                @endif
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search.." name="search" value="{{ request('search') }}">
                    <div class="input-group-append">
                        <button class="btn btn-outline-primary" type="submit" id="button-addon2">Button</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    @if ($posts->count())
        <div class="card mb-3">
            <img src="https://source.unsplash.com/500x500?{{ $posts[0]->category->name }}" class="card-img-top" alt="...">
            <div class="card-body text-center">
                <h3 class="card-title"><a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h5>

                <p>
                    <small>
                        By: 
                        <a href="/posts?author={{ $posts[0]->author->username }}">
                            {{ $posts[0]->author->name }}
                        </a> 
                        in 
                        <a href="/posts?category={{ $posts[0]->category->slug }}" class="text-decoration-none">
                            {{ $posts[0]->category->name }}
                        </a>
                        {{ $posts[0]->created_at->diffForHumans() }}
                    </small>
                </p>
                <p class="card-text">{{ $posts[0]->slug }}</p>
                <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">Read more</a>
                <p class="card-text"><small class="text-muted">Tanggal postingan: {{ date("d-m-Y", strtotime($posts[0]->created_at) )}}</small></p>
            </div>
        </div>
        
        {{-- @foreach ($posts as $post)
            @if ($loop->first)
                <div class="card mb-3">
                    <img src="https://source.unsplash.com/1200x400/?programming" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h3 class="card-title"><a href="/posts/{{ $post->slug }}" class="text-decoration-none text-dark">{{ $post->title }}</a></h5>

                        <p>
                            <small>
                                By: 
                                <a href="/authors/{{ $post->author->username }}">
                                    {{ $post->author->name }}
                                </a> 
                                in 
                                <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">
                                    {{ $post->category->name }}
                                </a>
                                {{ $post->created_at->diffForHumans() }}
                            </small>
                        </p>
                        <p class="card-text">{{ $post->slug }}</p>
                        <a href="/posts/{{ $post->slug }}" class="text-decoration-none btn btn-primary">Read more</a>
                        <p class="card-text"><small class="text-muted">Tanggal postingan: {{ date("d-m-Y", strtotime($post->created_at) )}}</small></p>
                    </div>
                </div>
            @else
                <article class="mb-5 border-bottom">
                    <h2><a href="/posts/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a></h2>
                    <p>
                        By: 
                        <a href="/authors/{{ $post->author->username }}">
                            {{ $post->author->name }}
                        </a> 
                        in 
                        <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">
                            {{ $post->category->name }}
                        </a>
                    </p>
                    <p>{{ $post->excerpt }}</p>
                        
                </article>

            @endif
        @endforeach  --}}

    <div class="container">
        <div class="row">
            @foreach ($posts->skip(1) as $post)
                <div class="col-md-4 mb-3">
                    <div class="card">
                        
                        <a href="/posts?category={{ $post->category->slug }}">
                            <div class="position-absolute px-3 py-2 text-white" style="background-color: rgba(0, 0, 0, .7)">
                                {{ $post->category->name }}
                            </div>
                        </a>
                        
                        <img src="https://source.unsplash.com/500x500?{{ $post->category->name }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $post->title }}</h5>
                            <p>
                                <small>
                                    By: 
                                    <a href="/posts?author={{ $post->author->username }}">
                                        {{ $post->author->name }}
                                    </a>
                                    {{ $post->created_at->diffForHumans() }}
                                </small>
                            </p>
                            <p class="card-text">{{ $post->excerpt }}</p>
                            <a href="/posts/{{ $post->slug }}" class="text-decoration-none btn btn-primary">Read more</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    @else
        <p class="text-center fs-4">Belum ada postingan.</p>
    @endif

@endsection