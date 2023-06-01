  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="{{ route('home') }}" class="logo d-flex align-items-center me-auto me-lg-0">
        <h1>Bakery<span>.</span></h1>
      </a>

      <nav id="navbar" class="navbar navbar-top">
        <ul>
          <li><a class="navbar-top__link" href="{{ route('home') }}">Home</a></li>
          <li><a class="navbar-top__link" href="{{ route('about') }}">About</a></li>
          <li class="dropdown"><a class="navbar-top__link" href="{{ route('product') }}"><span>Product</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              @foreach ( $categories as $category )
                <li><a href="#">{{ $category->name }}</a></li>
              @endforeach
            </ul>
          </li>
          <li><a class="navbar-top__link" href="{{ route('contact') }}">Contact</a></li>

          <li class="dropdown"><a class="navbar-top__link" href="#"><span>Cart <i class="bi bi-bag" class="cart-header"></i></span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul id="header-cart">
              @if (!Session::has('cart'))                
              <li class="text-center">
                <img src="{{ asset('assets/img/cartEmpty.png') }}" alt="">
                <div class="text-warning"><b>Giỏ hàng trống</b></div>
              </li>
              @else
                @include('customers.header_cart')
              @endif
            </ul>
          </li>
        </ul>
      </nav><!-- .navbar -->
      <nav class="navbar">

        <ul>
          <li class="dropdown"><a href=# class="navbar-top__btn" >
            <span><i class="bi bi-person-circle"></i> {{ (Auth()->check()) ? Auth::user()->name : 'Account' }}</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              @if (Auth()->check())
                <li><a href="#">{{ Auth::user()->name }}</a></li>
                <li><a href="{{ route('logout') }}">Đăng xuất</a></li>
              @else
                <li><a href="{{ route('sign_up') }}">Đăng kí</a></li>
                <li><a href="{{ route('login') }}">Đăng nhập</a></li>
              @endif
            </ul>
          </li>
        </ul>
      </nav>
      <a href="#" class="nav-link me-4 d-none d-sm-block d-md-none"><i class="bi bi-bag" style=""></i></a>
      <a href="#" class="nav-link me-4 d-none d-sm-block d-md-none"><i class="bi bi-search"></i></a>
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header>


  