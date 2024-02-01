@extends('layouts.main')

@section('section')
{{-- use this curve block can prevent XSS attack --}}
<h1>Hello {{ $name; }}</h1>
<h2>My email is : {{ $email; }}</h2>
@endsection