<ul id="slide-out" class="side-nav custom-scrollbar">
    <li>
        <div class="logo-wrapper waves-light">
            <a href="#">
                <img src="https://mdbootstrap.com/img/logo/mdb-transparent.png" class="img-fluid flex-center">
            </a>
        </div>
    </li>
    <li>
        <ul class="collapsible collapsible-accordion">
            <li>
                <a class="collapsible-header waves-effect arrow-r">
                    <i class="fas fa-car"></i>
                    Tipe Mobil
                    <i class="fas fa-angle-down rotate-icon"></i>
                </a>
                <div class="collapsible-body">
                    <ul>
                        @foreach ($daftartipemobil as $item)
                        <li>
                            <a href="{{url('/type/'.str_replace(' ', '_', $item->type))}}" class="waves-effect">
                                {{$item->type}}
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </li>
            <li>
                <a class="collapsible-header waves-effect arrow-r">
                    <i class="fas fa-car-alt"></i>
                    Brand Mobil
                    <i class="fas fa-angle-down rotate-icon"></i>
                </a>
                <div class="collapsible-body">
                    <ul>
                        @foreach ($daftarbrandmobil as $item)
                        <li>
                            <a href="{{url('/brand/'.$item->brand)}}" class="waves-effect">
                                {{$item->brand}}
                            </a>
                        </li>
                        @endforeach
                        <li>
                            <a href="{{url('/brand')}}" class="waves-effect">
                                Lainnya
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </li>
    <div class="sidenav-bg mask-strong"></div>
</ul>