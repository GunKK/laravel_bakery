<div id="header">
    <div class="header-top">
        <div class="container">
            <div class="pull-left auto-width-left">
                <ul class="top-menu menu-beta l-inline">
                    <li><a href=""><i class="fa fa-home"></i> Kí túc xá khu B, Đông Hòa, Dĩ An, Bình Dương</a></li>
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
    <div class="header-body">
        <div class="container beta-relative">
            <div class="pull-left">
                <a href="{{ route('home') }}" id="logo"><img src="{{ asset('Frontend/assets/dest/images/logo-cake.png') }}" width="200px" alt=""></a>
            </div>
            <div class="pull-right beta-components space-left ov">
                <div class="space10">&nbsp;</div>
                <div class="beta-comp">
                    <form role="search" method="get" id="searchform" action="/">
                        <input type="text" value="" name="s" id="s" placeholder="Nhập từ khóa..." />
                        <button class="fa fa-search" type="submit" id="searchsubmit"></button>
                    </form>
                </div>

                <div class="beta-comp">
                    <div class="cart">
                        <div class="beta-select"><i class="fa fa-shopping-cart"></i> Giỏ hàng (Trống) <i class="fa fa-chevron-down"></i></div>
                        <div class="beta-dropdown cart-body">
                            <div class="cart-item">
                                <div class="media">
                                    <a class="pull-left" href="#"><img src="assets/dest/images/products/cart/1.png" alt=""></a>
                                    <div class="media-body">
                                        <span class="cart-item-title">Sample Woman Top</span>
                                        <span class="cart-item-options">Size: XS; Colar: Navy</span>
                                        <span class="cart-item-amount">1*<span>$49.50</span></span>
                                    </div>
                                </div>
                            </div>

                            <div class="cart-item">
                                <div class="media">
                                    <a class="pull-left" href="#"><img src="assets/dest/images/products/cart/2.png" alt=""></a>
                                    <div class="media-body">
                                        <span class="cart-item-title">Sample Woman Top</span>
                                        <span class="cart-item-options">Size: XS; Colar: Navy</span>
                                        <span class="cart-item-amount">1*<span>$49.50</span></span>
                                    </div>
                                </div>
                            </div>

                            <div class="cart-item">
                                <div class="media">
                                    <a class="pull-left" href="#"><img src="assets/dest/images/products/cart/3.png" alt=""></a>
                                    <div class="media-body">
                                        <span class="cart-item-title">Sample Woman Top</span>
                                        <span class="cart-item-options">Size: XS; Colar: Navy</span>
                                        <span class="cart-item-amount">1*<span>$49.50</span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="cart-item">
                                <div class="media">
                                    <a class="pull-left" href="#"><img src="assets/dest/images/products/cart/3.png" alt=""></a>
                                    <div class="media-body">
                                        <span class="cart-item-title">Sample Woman Top</span>
                                        <span class="cart-item-options">Size: XS; Colar: Navy</span>
                                        <span class="cart-item-amount">1*<span>$49.50</span></span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="cart-caption">
                                <div class="cart-total text-right">Tổng tiền: <span class="cart-total-value">$34.55</span></div>
                                <div class="clearfix"></div>

                                <div class="center">
                                    <div class="space10">&nbsp;</div>
                                    <a href="checkout.html" class="beta-btn primary text-center">Đặt hàng <i class="fa fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div> <!-- .cart -->
                </div>
            </div>
            <div class="clearfix"></div>
        </div> <!-- .container -->
    </div> <!-- .header-body -->
    <div class="header-bottom" style="background-image: linear-gradient(#FFBC06, #FFE700);">
        <div class="container">
            <a class="visible-xs beta-menu-toggle pull-right" href="#"><span class='beta-menu-toggle-text'>Menu</span> <i class="fa fa-bars"></i></a>
            <div class="visible-xs clearfix"></div>
            <nav class="main-menu">
                <ul class="l-inline ov">
                    <li><a href="{{ route('home') }}" style="color:#000; font-weight: 600">Trang chủ</a></li>
                    <li><a href="#" style="color:#000; font-weight: 600">Sản phẩm</a>
                        <ul class="sub-menu">
                            @foreach ( $productTypes as $productType )    
                                <li><a href="{{ route('productType',['id'=>$productType->id]) }}">{{ $productType->name }}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li><a href="{{ route('about') }}" style="color:#000; font-weight: 600">Giới thiệu</a></li>
                    <li><a href="{{ route('contact') }}" style="color:#000; font-weight: 600">Liên hệ</a></li>
                </ul>
                <div class="clearfix"></div>
            </nav>
        </div> <!-- .container -->
    </div> <!-- .header-bottom -->
</div> 