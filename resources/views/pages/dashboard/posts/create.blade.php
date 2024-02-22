@extends('layouts.dashboard.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Create new post</h1>
    </div>

    <div class="col-lg-8">
        <form method="POST" action="/dashboard/posts">
            @csrf

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>

            <div class="form-group">
                <label for="slug">Slug</label>
                <input type="text" class="form-control" id="slug" name="slug" readonly>
            </div>

            <div class="form-group">
                <label for="category">Category</label>
                <select class="custom-select" id="category" name="category_id">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="body">Body</label>
                <input id="body" type="hidden" name="body">
                <trix-editor input="body"></trix-editor>
            </div>

            <button type="submit" class="btn btn-primary">Create Post</button>
        </form>
    </div>

    <script>
        const TITLE = $('#title');
        const SLUG = $('#slug');
        TITLE.on('change', function() {
            fetch('/dashboard/posts/checkSlug?title=' + TITLE.val())
                .then(response => response.json())
                .then(data => SLUG.val(data.slug));
        });
    </script>
@endsection
