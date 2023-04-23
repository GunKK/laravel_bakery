@if (! Session::has ('cart') || empty(Session::get('cart')))             
  <li class="text-center">
    <img src="{{ asset('assets/img/cartEmpty.png') }}" alt="">
    <div class="text-warning"><b>Giỏ hàng trống</b></div>
  </li>
@else
  @foreach ( Session::get('cart') as $item )                
    <li class="cart-header__item" >
      <a class="cart-header__link" href="#">
        <div class="cart-header__item-img"><img class="rounded-circle" width="80px" height="80px" src="{{ $item['image'] }}" alt=""></div>
        <div class="cart-header__item-info ms-2 d-flex flex-column align-items-baseline">
          <div class="cart-header__item-name">{{ $item['name'] }} </div>
          <div class="cart-header__item-price" style="width: 100%">
            <div>
              ${{ $item['price'] }} x <small class="text-primary">{{ $item['quantity'] }}</small>
            </div>
            <div class="text-primary">Tiền: ${{ $item['price']*$item['quantity'] }}</div>
          </div>
        </div>
      </a>
    </li>
  @endforeach
@endif