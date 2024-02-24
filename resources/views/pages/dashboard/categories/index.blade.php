@extends('layouts.dashboard.main')

@section('container')
    <div id="success-toast" class="toast" role="alert" style="position: absolute; top: 10px; right: 10px;" data-delay="2000"
        data-autohide="true">
        <div class="toast-header bg-success text-white">
            <strong class="mr-auto">Success!</strong>
            <small><span data-feather="check"></span></small>
            <button type="button" class="ml-2 mb-1 text-white close" data-dismiss="toast" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @if (session()->has('success'))
            <div class="toast-body bg-gradient-success">
                {{ session('success') }}
            </div>
            <script>
                $('#success-toast').toast('show');
            </script>
        @else
            <script>
                $('#success-toast').toast('hide');
            </script>
        @endif
    </div>

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Post Categories</h1>
    </div>

    <div class="table-responsive col-md-6">
        <a href="/dashboard/categories/create" class="btn btn-primary mb-3">
            <span data-feather="plus"></span>
            Create new category
        </a>
        <table class="table table-striped table-sm">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $category->name }}</td>
                        <td>
                            <a href="/dashboard/categories/{{ $category->slug }}" class="badge bg-primary">
                                <span data-feather="eye" class="text-white"></span>
                            </a>
                            <a href="/dashboard/categories/{{ $category->slug }}/edit" class="badge bg-warning">
                                <span data-feather="edit" class="text-white"></span>
                            </a>
                            <form action="/dashboard/categories/{{ $category->slug }}" method="POST" class="d-inline">
                                @method('delete')
                                @csrf

                                <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')">
                                    <span data-feather="trash-2" class="text-white"></span>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
