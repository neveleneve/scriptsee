@extends('layouts.master.guestmaster')
@section('title')
    <title>
        Selamat Datang di Lelangin Store
    </title>
@endsection

@section('customjs')
    <script type="text/javascript">
        new WOW().init();
        $(".button-collapse").sideNav();
        var sideNavScrollbar = document.querySelector('.custom-scrollbar');
        Ps.initialize(sideNavScrollbar);
        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        });
        $(document).ready(function() {
            $('.mdb-select').material_select();
        });
    </script>
@endsection

@section('cssbody')
    class="homepage-v3 hidden-sn white-skin animated"
@endsection

@section('content')
    <div class="container mt-5 pt-3">
        <nav class="navbar navbar-expand-lg navbar-dark primary-color mt-5">
            {{-- <a class="font-weight-bold white-text mr-4" href="#">Categories</a> --}}
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1"
                aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent1">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown mega-dropdown">
                        <a class="nav-link dropdown-toggle no-caret" id="navbarDropdownMenuLink1" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            Brands
                        </a>
                        <div class="dropdown-menu mega-menu v-2 row z-depth-1 white"
                            aria-labelledby="navbarDropdownMenuLink1">
                            <div class="row mx-md-4 mx-1">
                                <div class="col-md-6 col-xl-3 sub-menu">
                                    <ul class="caret-style pl-0">
                                        @for ($i = 0; $i < 5; $i++)
                                            <li class="">
                                                <a class="menu-item mb-0"
                                                    href="{{ url('/brand/' . str_replace(' ', '_', $daftarbrandmobil[$i]->brand)) }}">
                                                    {{ $daftarbrandmobil[$i]->brand }}
                                                </a>
                                            </li>
                                        @endfor
                                    </ul>
                                </div>
                                <div class="col-md-6 col-xl-3 sub-menu">
                                    <ul class="caret-style pl-0">
                                        @for ($i = 5; $i < 10; $i++)
                                            <li class="">
                                                <a class="menu-item mb-0"
                                                    href="{{ url('/brand/' . str_replace(' ', '_', $daftarbrandmobil[$i]->brand)) }}">
                                                    {{ $daftarbrandmobil[$i]->brand }}
                                                </a>
                                            </li>
                                        @endfor
                                    </ul>
                                </div>
                                <div class="col-md-6 col-xl-3 sub-menu">
                                    <ul class="caret-style pl-0">
                                        @for ($i = 10; $i < 15; $i++)
                                            <li class="">
                                                <a class="menu-item mb-0"
                                                    href="{{ url('/brand/' . str_replace(' ', '_', $daftarbrandmobil[$i]->brand)) }}">
                                                    {{ $daftarbrandmobil[$i]->brand }}
                                                </a>
                                            </li>
                                        @endfor
                                    </ul>
                                </div>
                                <div class="col-md-6 col-xl-3 sub-menu mt-2 mb-2">
                                    <ul class="caret-style pl-0">
                                        @for ($i = 15; $i < 19; $i++)
                                            <li class="">
                                                <a class="menu-item mb-0"
                                                    href="{{ url('/brand/' . str_replace(' ', '_', $daftarbrandmobil[$i]->brand)) }}">
                                                    {{ $daftarbrandmobil[$i]->brand }}
                                                </a>
                                            </li>
                                        @endfor
                                        <li class="">
                                            <a class="menu-item mb-0" href="{{ url('/brand') }}">
                                                Lainnya
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown mega-dropdown">
                        <a class="nav-link dropdown-toggle no-caret" id="navbarDropdownMenuLink1" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            Type
                        </a>
                        <div class="dropdown-menu mega-menu v-2 row z-depth-1 white"
                            aria-labelledby="navbarDropdownMenuLink1">
                            <div class="row mx-md-4 mx-1">
                                <div class="col-md-6 col-lg-6 sub-menu">
                                    <ul class="caret-style pl-0">
                                        @for ($i = 0; $i < 5; $i++)
                                            <li class="">
                                                <a class="menu-item"
                                                    href="{{ url('/type/' . strtolower(str_replace(' ', '_', $daftartipemobil[$i]->type))) }}">
                                                    {{ $daftartipemobil[$i]->type }}
                                                </a>
                                            </li>
                                        @endfor
                                    </ul>
                                </div>
                                <div class="col-md-6 col-lg-6 sub-menu">
                                    <ul class="caret-style pl-0">
                                        @for ($i = 5; $i < 10; $i++)
                                            <li class="">
                                                <a class="menu-item"
                                                    href="{{ url('/type/' . strtolower(str_replace(' ', '_', $daftartipemobil[$i]->type))) }}">
                                                    {{ $daftartipemobil[$i]->type }}
                                                </a>
                                            </li>
                                        @endfor
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <form class="search-form" role="search" action="{{ url('/search') }}" method="GET">
                    <div class="form-group md-form my-0 waves-light">
                        <input type="text" name="q" class="form-control" placeholder="Search">
                        <input type="hidden" name="type" value="all">
                        <input type="hidden" name="brand" value="all">
                        <input type="hidden" name="year" value="all">
                        <input type="hidden" name="price" value="all">
                    </div>
                </form>
            </div>
        </nav>
    </div>
    <div class="container">
        <section class="mb-5">
            <div class="row">
                <div class="col-12">
                    <hr>
                    <h5 class="text-center font-weight-bold dark-grey-text"><strong>Latest Products</strong></h5>
                    <hr>
                </div>
            </div>
            <div class="row">
                @php
                    $i = 0;
                @endphp
                @foreach ($latestitem as $item)
                    <div class="col-lg-4 col-md-12 col-12">
                        <div class="row mt-5 py-2 mb-4 hoverable align-items-center">
                            <div class="col-6">
                                <a href="{{ url('/item/' . $item->code) }}">
                                    <img src="{{ asset('/storage/images/item/' . $item->code . '-1.jpg') }}"
                                        class="img-fluid">
                                </a>
                            </div>
                            <div class="col-6">
                                @php
                                    $price = $detail->where('code_item', $item['code'])[0]['limit_price'];
                                    $id_user = $detail->where('code_item', $item['code'])[0]['id_seller'];
                                    $username = $seller->where('id', $id_user)[0]['username'];
                                    $selltype = $detail->where('code_item', $item['code'])[0]['sell_type'];
                                @endphp
                                <span class="bagde badge-danger px-1">
                                    @if ($selltype == 1)
                                        Bid
                                    @elseif($selltype == 2)
                                        Sell
                                    @elseif($selltype == 3)
                                        Bid / Sell
                                    @endif
                                </span>
                                <h6 class="font-weight-bold">
                                    <a href="{{ url('/item/' . $item->code) }}" class="text-muted">
                                        <strong>
                                            {{ $item->nama }}
                                        </strong>
                                    </a>
                                </h6>
                                <h6 class="h6-responsive font-weight-bold dark-grey-text">
                                    <strong>
                                        Rp. {{ number_format($price, '0', ',', '.') }}
                                    </strong>
                                </h6>
                                <a class="text-muted">by </a>
                                <a class="dark-gray-text font-weight-bold"
                                    href="{{ url('/user/'.$username) }}">{{ $username }}</a>
                            </div>
                        </div>
                    </div>
                    @php
                        $i += 1;
                    @endphp
                @endforeach
            </div>
        </section>
    </div>
@endsection
