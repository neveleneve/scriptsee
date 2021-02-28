<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    @yield('title')
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <link href="{{ asset('/storage/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/storage/bootstrap/css/mdb.min.css') }}" rel="stylesheet">
    @yield('customcss')
</head>

<body @yield('cssbody')>
    <header>
        @include('layouts.navigation.guest.navbar')
    </header>
    @yield('content')
    <footer>
        @include('layouts.navigation.guest.footer')
    </footer>
    <script type="text/javascript" src="{{ asset('storage/bootstrap/js/jquery-3.4.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('storage/bootstrap/js/popper.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('storage/bootstrap/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('storage/bootstrap/js/mdb.min.js') }}"></script>
    @yield('customjs')
</body>

</html>
