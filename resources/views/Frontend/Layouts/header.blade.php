<div id="header">
     {{-- nav-mobile --}}
     <nav class="navbar bg-light d-xl-none d-sm-block d-md-none fixNav nav-mobile">
        <div class="container-fluid">
            <div class="pull-left">
                <a href="{{ route('home') }}" id="logo"><img src="{{ asset('Frontend/assets/dest/images/logo-cake.png') }}" width="200px" alt=""></a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel"><img src="{{ asset('Frontend/assets/dest/images/logo-cake.png') }}" width="200px" alt=""></h5>
                <button type="button" class="btn-close me-2" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3 ps-3">
                    <li class="nav-item">
                        <a class="nav-link-mobile nav-link active" aria-current="page" href="{{ route('home') }}">Trang chủ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link-mobile nav-link" href="{{ route('about') }}">Về chúng tôi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link-mobile nav-link" href="{{ route('contact') }}">Liên hệ</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link-mobile nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Sản phẩm
                        </a>
                        <ul class="dropdown-menu">
                            @foreach ( $productTypes as $productType )    
                                <li><a class="dropdown-item" href="{{  route('productType',['id'=>$productType->id])  }}">{{ $productType->name }}</a></li>
                            @endforeach
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item disabled" href="#">More</a></li>
                        </ul>
                    </li>
                    @if (Auth()->check()) 
                        <li class="nav-item">
                            <a class="nav-link-mobile nav-link active" aria-current="page" href="#">
                                <i class="fa-light fa-user"></i>
                                {{ Auth::user()->name }}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link-mobile nav-link active" aria-current="page" href="#">Đăng xuất</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link-mobile nav-link active" aria-current="page" href="{{ route('login') }}">Đăng nhập</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link-mobile nav-link active" aria-current="page" href="{{ route('signup') }}">Đăng kí</a>
                        </li>
                    @endif
                </ul>
            </div>
            </div>
        </div>
    </nav>
    <div class="header-top d-xl-block d-md-block d-none">
        <div class="container">
            <div class="pull-left auto-width-left">
                <ul class="top-menu menu-beta l-inline d-xl-block d-none">
                    <li><a href="#"><i class="fa fa-home"></i> Kí túc xá khu B, Đông Hòa, Dĩ An, Bình Dương</a></li>
                    <li><a href="tel:0382848xxx"><i class="fa fa-phone"></i>Đặt hàng ngày:  0382848xxx</a></li>
                </ul>
            </div>
            <div class="pull-right auto-width-right">
                <ul class="top-details menu-beta l-inline">
                    {{-- <li><a href="#"><i class="fa fa-user"></i>Tài khoản</a></li> --}}
                    <li><a href="{{ route('signup') }}">Đăng kí</a></li>
                    <li><a href="{{ route('login') }}">Đăng nhập</a></li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div> <!-- .container -->
    </div> <!-- .header-top -->
    <div class="header-body mb-4 mt-5">
        <div class="container beta-relative">
            <div class="pull-left  d-xl-block d-md-block d-none">
                <a href="{{ route('home') }}" id="logo"><img src="{{ asset('Frontend/assets/dest/images/logo-cake.png') }}" width="200px" alt=""></a>
            </div>
            <div class="pull-right beta-components space-left ov">
                <div class="space10">&nbsp;</div>
                <div class="beta-comp">
                    <form role="search" method="get" id="searchform" action="{{ route('search') }}">
                        <input type="text" value="{{ $key ?? "" }}" name="key" id="s" placeholder="Nhập từ khóa..." />
                        <button class="fa fa-search" type="submit" id="searchsubmit"></button>
                    </form>
                    @if ($errors->any())
                        <div class="alert alert-danger" style="margin-top:12px">
                            <div>
                                @foreach ($errors->all() as $error)
                                    <span><i class="fa-solid fa-exclamation"></i> {{ $error }}</span>
                                @endforeach
                            </div>
                        </div>
                    @endif
                </div>

                <div class="beta-comp">
                    {{-- cart header --}}
                    <div class="cart">            
                        <div class="beta-select"><i class="fa fa-shopping-cart"></i> 
                            Giỏ hàng ({{ Session::has('cart') ? $totalQty : '0' }}) 
                            {{-- @foreach ( Session::get('cart')->items as $item ) 
                                {{ print_r($item['item']->image) }}
                                <hr/>
                            @endforeach
                            {{ dd(1) }} --}}
                            <i class="fa fa-chevron-down"></i></div>
                        <div class="beta-dropdown cart-body">
                            @if (Session::has('cart'))
                                <div>
                                    @foreach ( $cart->items as $item ) 
                                        <div class="cart-item">
                                            <div class="media">
                                                <a class="pull-left" href="#"><img src="{{ asset('Frontend/image/products/'.$item['item']->image) }}" alt="{{ $item['item']->image }}"></a>
                                                <div class="media-body">
                                                    <span class="cart-item-title">{{ $item['item']->name }}</span>
                                                    {{-- <span class="cart-item-options">Size: XS; Colar: Navy</span> --}}
                                                    <span class="cart-item-amount">{{ $item['qty'] }}*<span>{{ $item['item']->promotion_price == 0? $item['item']->unit_price: $item['item']->promotion_price }}</span></span>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="cart-caption">
                                    <div class="cart-total text-right pe-3">Tổng tiền: <span class="cart-total-value">đ {{ number_format($totalPrice) }}</span></div>
                                    <div class="clearfix"></div>
        
                                    <div class="center">
                                        <div class="space10">&nbsp;</div>
                                        <a href="{{ route('cart') }}" class="beta-btn primary text-center">Xem giỏ hàng <i class="fa fa-chevron-right"></i></a>
                                    </div>
                                </div>
                            @else
                                <img style="width: 100%" src="{{ asset('Frontend/image/cartEmpty.png') }}" alt="">
                                <div class="h6 text-warning text-center"><b>Giỏ hàng trống</b></div>
                            @endif
                        </div>
                    </div> 
                    <!--end cart -->
                </div>
            </div>
            <div class="clearfix"></div>
        </div> <!-- .container -->
    </div> <!-- .header-body -->
    <div class="header-bottom d-xl-block d-none d-md-block" style="background-image: linear-gradient(#FFBC06, #FFE700);">
        <div class="container">
            <a class="visible-xs beta-menu-toggle pull-right" href="#"><span class='beta-menu-toggle-text'>Menu</span> <i class="fa fa-bars"></i></a>
            <div class="visible-xs clearfix"></div>
            <nav class="main-menu">
                <ul class="l-inline ov">
                    <li><a href="{{ route('home') }}" style="color:#000; font-weight: 600">TRANG CHỦ</a></li>
                    <li><a href="#" style="color:#000; font-weight: 600">SẢN PHẨM</a>
                        <ul class="sub-menu">
                            @foreach ( $productTypes as $productType )    
                                <li><a href="{{ route('productType',['id'=>$productType->id]) }}">{{ $productType->name }}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li><a href="{{ route('about') }}" style="color:#000; font-weight: 600">VỀ CHÚNG TÔI</a></li>
                    <li><a href="{{ route('contact') }}" style="color:#000; font-weight: 600">LIÊN HỆ</a></li>
                </ul>
                <div class="clearfix"></div>
            </nav>
        </div> <!-- .container -->
    </div> <!-- .header-bottom -->
</div> 