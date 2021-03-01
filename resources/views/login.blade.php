<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <link href="{{ asset('/storage/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/storage/bootstrap/css/mdb.min.css') }}" rel="stylesheet">
</head>

<body class="pt-5">
    <div class="row justify-content-center mt-5">
        <div class="col-4">
            <div class="card">
                <div class="card-header text-center">
                    <a class="h1 text-center">
                        <span class="font-weight-bold">Log</span> In
                    </a>
                </div>
                <div class="card-body">
                    <form action="{{ url('login') }}" method="post">
                        {{ csrf_field() }}
                        <div class="row mb-3">
                            <div class="col-12">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="username" name="username"
                                        placeholder="Username" autofocus>
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-user"></span>
                                        </div>
                                    </div>
                                </div>
                                @if (session('passgagal'))
                                    {{ session('passgagal') }}
                                    <a class="text-danger">Halo</a>
                                @endif
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-12">
                                <div class="input-group">
                                    <input type="password" class="form-control" id="password" name="password"
                                        placeholder="Password">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-lock"></span>
                                        </div>
                                    </div>
                                </div>
                                @if (session('passgagal'))
                                    {{ session('passgagal') }}
                                    <p class="text-danger">Halo</p>
                                @endif
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary btn-block">Masuk</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('admin/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('admin/dist/js/adminlte.min.js') }}"></script>
</body>

</html>
