<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>E-Store | Dashboard</title>

    {{-- css assets --}}
    <link href="/assets/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/assets/trix/trix.css">

    {{-- css dist --}}
    <link href="/dist/css/pages/user/dashboard.css" rel="stylesheet">

    {{-- js assets --}}
    <script src="/assets/jquery/jquery.slim.min.js"></script>
    <script src="/assets/bootstrap/bootstrap.bundle.min.js"></script>
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

    {{-- js dist --}}
    <script src="/assets/feather/feather.min.js"></script>
    {{-- <script src="/assets/chart/Chart.min.js"></script> --}}
    <script type="text/javascript" src="/assets/trix/trix.js"></script>
    <script src="/dist/js/pages/user/dashboard.js"></script>
</body>

</html>
