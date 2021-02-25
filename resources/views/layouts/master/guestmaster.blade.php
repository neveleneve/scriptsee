<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('title')
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <link href="{{ asset('storage/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('storage/bootstrap/css/mdb.min.css') }}" rel="stylesheet">
    @yield('customcss')
</head>

<body>
    <header>
        @include('layouts.navigation.guest.navbar')
    </header>
    @yield('content')
    <footer>

    </footer>
    <script type="text/javascript" src="{{ asset('storage/bootstrap/js/jquery-3.4.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('storage/bootstrap/js/popper.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('storage/bootstrap/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('storage/bootstrap/js/mdb.min.js') }}"></script>
    <script type="text/javascript">
        /* WOW.js init */
        new WOW().init();
        // Tooltips Initialization
        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        })
        // Material Select Initialization
        $(document).ready(function() {
            $('.mdb-select').materialSelect();
        });
        // SideNav Initialization
        $(".button-collapse").sideNav();

    </script>
    @yield('customjs')
</body>

</html>
