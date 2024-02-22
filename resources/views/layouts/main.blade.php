<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E-Store | {{ $title }}</title>

    {{-- assets --}}
    <link rel="stylesheet" href="/assets/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    {{-- distributed --}}
    <link rel="stylesheet" href="/dist/css/layout/navbar.css">
    <link rel="stylesheet" href="/dist/css/pages/login/login.css">
    <link rel="stylesheet" href="/dist/css/pages/registration/registration.css">
</head>

<body>
    @include('partials.navbar')

    <section class="container mt-4">
        @yield('section')
    </section>

    {{-- assets --}}
    <script src="/assets/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> --}}

    {{-- distributed --}}
    <script src="/dist/js/layout/navbar.js"></script>
</body>

</html>
