@extends('layouts.main')

@section('section')
<h1 class="mb-5">Post Category : {{ $category }}</h1>
@if ($posts->count() == 0)
    <h1>Tidak ada hasil.</h1>
@else
    @foreach ($posts as $post)
        <article>
            <h1>
                <a href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
            </h1>
            {{-- <h2>By: {{ $post->author }}</h2> --}}
            <p>{{ $post->excerpt }}</p>
        </article>
    @endforeach
@endif
@endsection