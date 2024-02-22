<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    {{-- <meta name="description" content=""> --}}
    {{-- <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors"> --}}
    {{-- <meta name="generator" content="Hugo 0.101.0"> --}}
    <title>E-Store | Dashboard</title>

    <!-- Bootstrap core CSS -->
    {{-- <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet"> --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="/dist/css/pages/user/dashboard.css" rel="stylesheet">
</head>

<body>
    @include('layouts.dashboard.header')

    <div class="container-fluid">
        <div class="row">
            @include('layouts.dashboard.sidebar')

            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
                @yield('container')
            </main>
        </div>
    </div>


    {{-- assets --}}
    <script src="/assets/bootstrap/bootstrap.bundle.min.js"></script>

    {{-- icons --}}
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"></script>

    {{-- distributed --}}
    <script src="/dist/js/pages/user/dashboard.js"></script>

    {{-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script> --}}
    {{-- <script>
        window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')
    </script> --}}


</body>

</html>
