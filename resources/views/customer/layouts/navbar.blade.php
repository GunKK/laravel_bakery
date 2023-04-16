<header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="{{ route('home') }}" class="logo d-flex align-items-center me-auto me-lg-0">
        <h1>Bakery<span>.</span></h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="{{ route('home') }}">Home</a></li>
          <li><a href="{{ route('about') }}">About</a></li>
          <li class="dropdown"><a href="#"><span>Product</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>
          <li><a href="{{ route('contact') }}">Contact</a></li>

          <li class="dropdown"><a href="#"><span>Giỏ hàng<i class="bi bi-bag" style=""></i></span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>
        </ul>
      </nav><!-- .navbar -->
      <nav class="navbar">

        <ul>
          <li class="dropdown"><a href="#"><span><i class="bi bi-person-circle"></i> Tài khoản</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="#">Đăng nhập</a></li>
              <li><a href="#">Cài đặt</a></li>
              <li><a href="#">Đăng xuất</a></li>
            </ul>
          </li>
        </ul>
      </nav>
      <a href="#" class="nav-link me-4 d-none d-sm-block d-md-none"><i class="bi bi-bag" style=""></i></a>
      <a href="#" class="nav-link me-4 d-none d-sm-block d-md-none"><i class="bi bi-search"></i></a>
      {{-- <a class="btn-book-a-table" href="#book-a-table">Book a Table</a> --}}
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header>