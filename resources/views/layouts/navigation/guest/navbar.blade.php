<nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar bg-dark">
    <div class="container">
        <a class="navbar-brand" href="{{url('/')}}"><strong class="font-weight-bold">Lelangin</strong>Store</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
            aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
            <ul class="navbar-nav ml-auto">               
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle waves-effect waves-light white-text font-weight-bold"
                        id="navbarDropdownMenuLink-4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-user white-text"></i>
                        User
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-cyan"
                        aria-labelledby="navbarDropdownMenuLink-4">
                        <a class="dropdown-item waves-effect waves-light" href="{{url('/login')}}">Sign In</a>
                        <a class="dropdown-item waves-effect waves-light" href="{{url('/register')}}">Register</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>