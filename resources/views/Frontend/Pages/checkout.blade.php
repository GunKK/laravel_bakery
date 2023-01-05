@extends('Frontend.Layouts.master')
@section('title', 'checkout')
@section('content')
	<div class="container">
		<div id="content">
			
			<form action="{{ url()->current() }}" method="post" class="beta-form-checkout">
				<div class="row">
					<div class="col-sm-6">
						<h4>Đặt hàng</h4>
						<div class="space20">&nbsp;</div>

						<div class="form-block">
							<label for="name">Họ tên:</label>
							<input type="text" id="name" placeholder="Họ tên" required>
						</div>

						<div class="form-block">
							<label for="adress">Địa chỉ:</label>
							<input type="text" id="adress" placeholder="Street Address" required>
						</div>
						

						<div class="form-block">
							<label for="phone">Điện thoại:</label>
							<input type="tel" id="phone" required>
						</div>
						
						<div class="form-block">
							<label for="notes">Ghi chú</label>
							<textarea id="notes"></textarea>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="your-order">
							<div class="your-order-head"><h5>Đơn hàng của bạn</h5></div>
							<div class="your-order-body" style="padding: 0px 10px">
								<div class="your-order-item">
									<div>
									<!--  one item	 -->
									@foreach ( $cart->items as $item )	
										<div class="media">
											{{-- <img width="25%" src="assets/dest/images/shoping1.jpg" alt="" class="pull-left"> --}}
											<div class="media-body d-flex justify-content-between">
												<div>
													<p class="font-large">{{ $item['item']->name }}</p>
													{{-- <span class="color-gray your-order-info">Color: Red</span>
													<span class="color-gray your-order-info">Size: M</span> --}}
													<span class="color-gray your-order-info mt-2">{{ $item['qty'] }} * {{ $item['item']->promotion_price==0 ? $item['item']->unit_price : $item['item']->promotion_price  }} </span>
												</div>
												<div>
													<p>Thành tiền</p>
													<b class="text-primary">{{ number_format($item['price']) }} đ</b>
												</div>
											</div>
										</div>
									@endforeach
									<!-- end one item -->
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="your-order-item">
									<div class="pull-left"><p class="your-order-f18">Tổng tiền (đã gồm VAT):</p></div>
									<div class="pull-right"><h6 class="color-black"><strong>{{ number_format($totalPrice) }} đ</strong></h6></div>
									<div class="clearfix"></div>
								</div>
							</div>
							<div class="your-order-head"><h5>Hình thức thanh toán</h5></div>
							
							<div class="your-order-body">
								<ul class="payment_methods methods">
									<li class="payment_method_bacs">
										<input id="payment_method_bacs" type="radio" class="input-radio" name="payment_method" value="COD" checked="checked" data-order_button_text="">
										<label for="payment_method_bacs">Thanh toán khi nhận hàng </label>
										<div class="payment_box payment_method_bacs" style="display: block;">
											Phí COD có thể tăng giảm tùy theo khu vực của bạn
										</div>						
									</li>

									{{-- <li class="payment_method_cheque">
										<input id="payment_method_cheque" type="radio" class="input-radio" name="payment_method" value="ATM" data-order_button_text="">
										<label for="payment_method_cheque">Chuyển khoản </label>
										<div class="payment_box payment_method_cheque" style="display: none;">
											Chuyển tiền đến tài khoản sau:
											<br>- Số tài khoản: 123 456 789
											<br>- Chủ TK: Nguyễn A
											<br>- Ngân hàng ACB, Chi nhánh TPHCM
										</div>						
									</li> --}}
									
								</ul>
							</div>

							<div class="text-center"><a class="beta-btn primary" href="#">Đặt hàng <i class="fa fa-chevron-right"></i></a></div>
						</div> <!-- .your-order -->
					</div>
				</div>
			</form>
		</div> <!-- #content -->
	</div> <!-- .container -->
@endsection