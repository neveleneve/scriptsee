@extends('layouts.master.guestmaster')
@section('title')
<title>Selamat Datang di Toko Lelang</title>
@endsection

@section('customcss')
<link href="{{asset("storage/css/css/style.css")}}" rel="stylesheet">
@endsection

@section('content')
<section class="section pb-3 wow fadeIn" data-wow-delay="0.3s">
    <h1 class="font-weight-bold text-center h1 my-5 border-bottom">
        Lelang Terbaru
    </h1>
    <div class="row">
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card card-ecommerce">
                <div class="view overlay z-depth-1">
                    <img src="https://bluemoonfox.com/wp-content/uploads/2019/07/Ladies-Short-Sleeve-Satin-Blouse-1-1.jpg"
                        class="card-img-top" alt="">
                    <a>
                        <div class="mask rgba-white-slight"></div>
                    </a>
                </div>
                <div class="card-body text-center no-padding">
                    <a href="" class="text-muted">
                        <h5>Blouse</h5>
                    </a>
                    <h4 class="card-title">
                        <strong>
                            <a href="">White Blouse</a>
                        </strong>
                    </h4>
                    <p class="card-text">Neque porro quisquam est, qui dolorem ipsum quia dolor.
                    </p>
                    <div class="card-footer">
                        <span class="float-left">59$
                            <span class="discount">199$</span>
                        </span>
                        <span class="float-right">
                            <a class="" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                <i class="fas fa-heart"></i>
                            </a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection