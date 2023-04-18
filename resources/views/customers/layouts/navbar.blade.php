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
            <ul class="cart-header__wrap">
              <li class="cart-header__item" >
                <a class="cart-header__link" href="#">
                  <div class="cart-header__item-img"><img class="rounded-circle" width="80px" height="80px" src="data:image/jpeg;base64,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" alt=""></div>
                  <div class="cart-header__item-info ms-2 d-flex flex-column align-items-baseline">
                    <div class="cart-header__item-name">Item name </div>
                    <div class="cart-header__item-price" style="width: 100%">
                      <div>
                        $490000 x <small class="text-primary">2</small>
                      </div>
                      <div class="text-primary">Đơn giá $980000</div>
                    </div>
                  </div>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav><!-- .navbar -->
      <nav class="navbar">

        <ul>
          <li class="dropdown"><a href=# class="navbar-top__btn" ><span><i class="bi bi-person-circle"></i> Account</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="{{ route('sign_up') }}">Đăng kí</a></li>
              <li><a href="{{ route('login') }}">Đăng nhập</a></li>
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


  