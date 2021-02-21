<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('title')
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <link href="{{asset("storage/css/css/bootstrap.min.css")}}" rel="stylesheet">
    <link href="{{asset("storage/css/css/mdb.min.css")}}" rel="stylesheet">
    @yield('customcss')
</head>

<body>
    <header>
        @include('layouts.navigation.guest.navbar')
    </header>
    <main>
        <div class="container">
            @yield('content')
        </div>
    </main>
    <footer>

    </footer>
    <script type="text/javascript" src="{{asset('storage/css/js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('storage/css/js/popper.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('storage/css/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('storage/css/js/mdb.min.js')}}"></script>
    <script>
      new WOW().init();
    </script>
@yield('customjs')
</body>

</html>