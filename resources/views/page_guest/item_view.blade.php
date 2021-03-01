@extends('layouts.master.master')
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
    class="product-v1 hidden-sn white-skin animated"
@endsection

@section('content')
    <div class="container mt-5 pt-4">
        <section id="productDetails" class="pb-5">
            <div class="row">
                <div class="col-12">
                    <a class="btn btn-sm btn-dark" href="{{ url('/') }}">
                        <i class="fas fa-chevron-left"></i>
                        <strong>Kembali</strong>
                    </a>
                </div>
            </div>
            <div class="card mt-3 hoverable">
                <div class="row mt-5">
                    {{-- div carousel --}}
                    <div class="col-lg-6">
                        <div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails"
                            data-ride="carousel">
                            <div class="carousel-inner text-center text-md-left" role="listbox">
                                @for ($i = 0; $i < count($data['gambar']); $i++)
                                    <div class="carousel-item {{ $i == 0 ? 'active' : null }}">
                                        <img src="{{ asset('/storage/images/item/' . $data['gambar'][$i]) }}"
                                            class="img-fluid">
                                    </div>
                                @endfor
                            </div>
                            <a class="carousel-control-prev" href="#carousel-thumb" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carousel-thumb" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                    {{-- div item --}}
                    <div class="col-lg-5 mr-3 text-center text-md-left">
                        <h2
                            class="h2-responsive text-center text-md-left product-name font-weight-bold dark-grey-text mb-1 ml-xl-0 ml-4">
                            {{ $data['nama'] }}
                        </h2>
                        <a class="text-muted mb-1 ml-xl-0 ml-4"> by </a>
                        <a class="mr-4" href="{{ url('/user/' . $data['seller']) }}">{{ $data['seller'] }}</a>
                        <span class="badge badge-danger product mb-4 ml-xl-0 ml-4">
                            @if ($data['sell_type'] == 1)
                                Bid
                            @elseif($data['sell_type'] == 2)
                                Sell
                            @endif
                        </span>
                        <span class="badge badge-info product mb-4 ml-xl-2 ml-4">
                            seen {{ $data['views'] }} time(s)
                        </span>
                        <h3 class="h3-responsive text-center text-md-left mb-5 mb-xl-0 ml-xl-0 ml-4">
                            <span class="red-text font-weight-bold">
                                Rp. {{ number_format($data['price_limit'], '0', ',', '.') }}
                            </span>
                        </h3>
                        <span class="badge badge-info">
                            @if ($data['sell_type'] == 1)
                                Buy It Now
                            @elseif($data['sell_type'] == 2)
                                Price :
                            @endif
                        </span>
                        <div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">
                            <div class="card">
                                <div class="card-header" role="tab" id="headingTwo2">
                                    <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo2"
                                        aria-expanded="true" aria-controls="collapseTwo2">
                                        <h5 class="mb-0">
                                            Details
                                            <i class="fas fa-angle-down rotate-icon"></i>
                                        </h5>
                                    </a>
                                </div>
                                <div id="collapseTwo2" class="collapse show" role="tabpanel" aria-labelledby="headingTwo2"
                                    data-parent="#accordionEx">
                                    <div class="card-body">
                                        <table class="table table-hover">
                                            <tbody class=" font-weight-bold">
                                                <tr>
                                                    <td class="font-weight-bold">Brand</td>
                                                    <td class="font-weight-bold">:</td>
                                                    <td>{{ $data['brand'] }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="font-weight-bold">Year</td>
                                                    <td class="font-weight-bold">:</td>
                                                    <td>{{ $data['tahun'] }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="font-weight-bold">Type</td>
                                                    <td class="font-weight-bold">:</td>
                                                    <td>{{ $data['type'] }}</td>
                                                </tr>
                                                @if ($data['sell_type'] == 1)
                                                    <tr>
                                                        <td class="font-weight-bold">Bid Interval</td>
                                                        <td class="font-weight-bold">:</td>
                                                        <td>{{ number_format($data['bid'], 0, ',', '.') }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="font-weight-bold">Bid Closing</td>
                                                        <td class="font-weight-bold">:</td>
                                                        <td>{{ date('d F Y', strtotime($data['time_limit'])) }}</td>
                                                    </tr>
                                                @endif
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" role="tab" id="headingThree3">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx"
                                        href="#collapseThree3" aria-expanded="false" aria-controls="collapseThree3">
                                        <h5 class="mb-0">
                                            Description
                                            <i class="fas fa-angle-down rotate-icon"></i>
                                        </h5>
                                    </a>
                                </div>
                                <div id="collapseThree3" class="collapse" role="tabpanel" aria-labelledby="headingThree3"
                                    data-parent="#accordionEx">
                                    <div class="card-body">
                                        {{ $data['desc'] }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <section class="color">
                            <div class="mt-5">
                                <p class="h5 dark-grey-text">Set your bid</p>
                                @auth('buyer')
                                    <div class="row text-center text-md-left">
                                        <div class="col-12 ">
                                            <div class="form-group">
                                                <input step="100000" class="form-control" name="bid" type="number"
                                                    placeholder="ex : {{ $data['price_limit'] - (50 / 100) * $data['price_limit'] }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-2 mb-4">
                                        <div class="col-md-12 text-center text-md-left text-md-right">
                                            <button class="btn btn-primary btn-rounded">
                                                <i class="fas fa-cart-plus mr-2" aria-hidden="true"></i> Add to cart</button>
                                        </div>
                                    </div>
                                @endauth
                                @guest
                                    <div class="row text-center text-md-left">
                                        <div class="col-12 ">
                                            <div class="form-group">
                                                <input step="100000" class="form-control" type="text" disabled
                                                    value="Login to Start Bidding">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-2 mb-4">
                                        <div class="col-md-12 text-center text-md-left text-md-right">
                                            <a class="btn btn-primary btn-rounded" href="{{ url('/login') }}">
                                                <i class="fas fa-user mr-2" aria-hidden="true"></i>
                                                Login
                                            </a>
                                        </div>
                                    </div>
                                @endguest
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </section>
        <div class="row">
            <div class="col-12">
                <ul class="nav md-tabs nav-justified grey lighten-3 mx-0" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active dark-grey-text font-weight-bold" data-toggle="tab" href="#latest"
                            role="tab">
                            Latest Bid Placement
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link dark-grey-text font-weight-bold" data-toggle="tab" href="#highest" role="tab">
                            Highest Bid Placement
                        </a>
                    </li>
                </ul>
                <div class="tab-content px-0">
                    <div class="tab-pane fade in show active " id="latest" role="tabpanel">
                        <div class="divider-new">
                            <h3 class="h3-responsive font-weight-bold blue-text mx-3">Latest Bid Placement</h3>
                        </div>
                        <section id="reviews" class="pb-5">
                            <div class="comments-list text-center text-md-left">
                                @foreach ($data['latestbid'] as $item)
                                    <div class="row mb-2">
                                        <div class="col-12">
                                            <h5 class="user-name font-weight-bold">
                                                {{ $item->nama[0]['nama'] }}
                                            </h5>
                                            <div class="card-data">
                                                <ul class="list-unstyled mb-1">
                                                    <li class="comment-date font-small grey-text">
                                                        {{-- Tanggal Bid --}}
                                                        {{ date('d/m/Y', strtotime($item->created_at)) }}
                                                    </li>
                                                    <li class="commen-date font-weight-bold dark-grey-text">
                                                        Rp. {{ number_format($item->bid_price, 0, ',', '.') }}
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                @endforeach
                            </div>
                        </section>
                    </div>
                    <div class="tab-pane fade" id="highest" role="tabpanel">
                        <div class="divider-new">
                            <h3 class="h3-responsive font-weight-bold blue-text mx-3">Highest Bid Placement</h3>
                        </div>
                        <section id="reviews" class="pb-5">
                            <div class="comments-list text-center text-md-left">
                                @foreach ($data['highestbid'] as $item)
                                    <div class="row mb-2">
                                        <div class="col-12">
                                            <h5 class="user-name font-weight-bold">
                                                {{ $item->nama[0]['nama'] }}
                                            </h5>
                                            <div class="card-data">
                                                <ul class="list-unstyled mb-1">
                                                    <li class="comment-date font-small grey-text">
                                                        {{-- Tanggal Bid --}}
                                                        {{ date('d/m/Y', strtotime($item->created_at)) }}
                                                    </li>
                                                    <li class="commen-date font-weight-bold dark-grey-text">
                                                        Rp. {{ number_format($item->bid_price, 0, ',', '.') }}
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                @endforeach
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
