@extends('Frontend.Layouts.master')
@section('title', 'search')
@section('content')
<div class="container">
	<div id="content" class="space-top-none">
		<div class="main-content">
			<div class="space60">&nbsp;</div>
			<div class="row">
				<div class="col-sm-3">
					<ul class="aside-menu">
						<li><span class="text-primary"><b>DANH MỤC SẢN PHẨM</b></span></li>
						@foreach ( $productTypes as $productType )	
							<li><a href="{{ route('productType', ['id'=>$productType->id]) }}">{{ $productType->name }}</a></li>
						@endforeach
					</ul>
				</div>
				<div class="col-sm-9">
					<div class="beta-products-list">
						<h4>Từ khóa: <span class="text-primary">{{ $key }}</span></h4>
						<div class="beta-products-details">
							<p class="pull-left"><span class="text-primary"><b>{{ $count }}</b></span> kết quả được tìm thấy</p>
							<div class="clearfix"></div>
						</div>
						@if ($count==0)
							<div class="row">
								<div class="alert alert-warning" role="alert">
									<i class="fa-light fa-circle-exclamation"></i>
									Rất tiếc, <strong>Bakery shop</strong> không tìm thấy kết quả nào phù hợp với từ khóa "{{ $key }}"
								</div>
								<div class="d-flex justify-content-center">
									<div>
										<h6>Để tìm được kết quả chính xác hơn, bạn vui lòng:</h6>
										<ul>
											<li>Kiểm tra lỗi chính tả của từ khóa đã nhập</li>
											<li>Thử lại bằng từ khóa khác</li>
											<li>Thử lại bằng những từ khóa tổng quát hơn</li>
											<li>Thử lại bằng những từ khóa ngắn gọn hơn</li>
										</ul>
									</div>
								</div>
							</div>
						@else
						<div class="row">
							@foreach ( $products as $product )
								<div class="col-sm-4">
									<div class="single-item">
										@if ($product->promotion_price != 0)
                                        <div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
                                        @endif
										<div class="single-item-header">
											<a href="{{ route('product', ['id'=>$product->id]) }}">
												<img style="height: 200px" class="img-fluid rounded"  src="{{ asset('Frontend/image/products/'.$product->image) }}" alt="{{ $product->image }}">
											</a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title">{{ $product->name }}</p>
											<p class="single-item-price">
												@if ($product->promotion_price == 0)
													<span>{{ number_format($product->unit_price) }} đ</span>
												@else
												<del>

												</del>
													<span class="flash-del">{{ number_format($product->unit_price) }} đ</span>
													<span class="flash-sale">{{ number_format($product->promotion_price) }} đ</span>
												@endif
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="{{ route('product', ['id'=>$product->id]) }}">Xem chi tiết <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
							@endforeach
						</div>
						<div style="text-align:center">
							{{ $products->appends(Request::all())->links() }}
                        </div>
						@endif
					</div> 
					<!-- .beta-products-list -->

					<div class="space50">&nbsp;</div>

					{{-- <div class="beta-products-list">
						<h4>Top Products</h4>
						<div class="beta-products-details">
							<p class="pull-left">438 styles found</p>
							<div class="clearfix"></div>
						</div>
						<div class="row">
							<div class="col-sm-4">
								<div class="single-item">
									<div class="single-item-header">
										<a href="product.html"><img src="assets/dest/images/products/1.jpg" alt=""></a>
									</div>
									<div class="single-item-body">
										<p class="single-item-title">Sample Woman Top</p>
										<p class="single-item-price">
											<span>$34.55</span>
										</p>
									</div>
									<div class="single-item-caption">
										<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
										<a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="single-item">
									<div class="single-item-header">
										<a href="product.html"><img src="assets/dest/images/products/1.jpg" alt=""></a>
									</div>
									<div class="single-item-body">
										<p class="single-item-title">Sample Woman Top</p>
										<p class="single-item-price">
											<span>$34.55</span>
										</p>
									</div>
									<div class="single-item-caption">
										<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
										<a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="single-item">
									<div class="single-item-header">
										<a href="product.html"><img src="assets/dest/images/products/1.jpg" alt=""></a>
									</div>
									<div class="single-item-body">
										<p class="single-item-title">Sample Woman Top</p>
										<p class="single-item-price">
											<span>$34.55</span>
										</p>
									</div>
									<div class="single-item-caption">
										<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
										<a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
						</div>
						<div class="space40">&nbsp;</div>
						
					</div>  --}}
					<!-- .beta-products-list -->
				</div>
			</div> <!-- end section with sidebar and main content -->


		</div> <!-- .main-content -->
	</div> <!-- #content -->
</div> <!-- .container -->
@endsection