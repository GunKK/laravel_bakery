@extends('Frontend.Layouts.master')
@section('title', 'productType')
@section('content')
<div class="container">
	<div id="content" class="space-top-none">
		<div class="main-content">
			<div class="space60">&nbsp;</div>
			<div class="row">
				{{-- <div class="col-auto px-0 d-none d-sm-block d-md-none">
					<div id="sidebar" class="collapse collapse-horizontal show border-end">
						<div id="sidebar-nav" class="list-group border-0 rounded-0 text-sm-start min-vh-100">
							<a href="#" class="list-group-item border-end-0 d-inline-block text-truncate" data-bs-parent="#sidebar"><i class="bi bi-bootstrap"></i> <span>Item</span> </a>
							<a href="#" class="list-group-item border-end-0 d-inline-block text-truncate" data-bs-parent="#sidebar"><i class="bi bi-film"></i> <span>Item</span></a>
							<a href="#" class="list-group-item border-end-0 d-inline-block text-truncate" data-bs-parent="#sidebar"><i class="bi bi-heart"></i> <span>Item</span></a>
							<a href="#" class="list-group-item border-end-0 d-inline-block text-truncate" data-bs-parent="#sidebar"><i class="bi bi-bricks"></i> <span>Item</span></a>
							<a href="#" class="list-group-item border-end-0 d-inline-block text-truncate" data-bs-parent="#sidebar"><i class="bi bi-clock"></i> <span>Item</span></a>
							<a href="#" class="list-group-item border-end-0 d-inline-block text-truncate" data-bs-parent="#sidebar"><i class="bi bi-archive"></i> <span>Item</span></a>
							<a href="#" class="list-group-item border-end-0 d-inline-block text-truncate" data-bs-parent="#sidebar"><i class="bi bi-gear"></i> <span>Item</span></a>
							<a href="#" class="list-group-item border-end-0 d-inline-block text-truncate" data-bs-parent="#sidebar"><i class="bi bi-calendar"></i> <span>Item</span></a>
							<a href="#" class="list-group-item border-end-0 d-inline-block text-truncate" data-bs-parent="#sidebar"><i class="bi bi-envelope"></i> <span>Item</span></a>
						</div>
					</div>
				</div> --}}

				{{-- d-xl-block d-md-block d-none --}}
				<div class="col-xl-3 col-md-3">
					<ul class="aside-menu">
						<li><span class="text-primary"><b>DANH MỤC SẢN PHẨM</b></span></li>
						@foreach ( $productTypes as $productType )	
							<li><a href="{{ route('productType', ['id'=>$productType->id]) }}">{{ $productType->name }}</a></li>
						@endforeach
					</ul>
				</div>
				<div class="col-xl-9 col-md-9">
					<div class="beta-products-list">
						{{-- <div class="d-none d-sm-block d-md-none">
							<a href="#" data-bs-target="#sidebar" data-bs-toggle="collapse" class="border rounded-3 p-1 text-decoration-none"><i class="bi bi-list bi-lg py-2 p-1"></i> Menu</a>
						</div> --}}
						<h4>{{ $productTypeFind->name }}</h4>
						<div class="beta-products-details">
							<p class="pull-left"><span class="text-primary"><b>{{ $productTypeFind->product->count() }}</b></span> kết quả được tìm thấy</p>
							<div class="clearfix"></div>
						</div>

						<div class="row">
							@foreach ( $productTypeFind->product as $product )
								<div class="col-sm-4">
									<div class="single-item">
										@if ($product->promotion_price != 0)
                                        <div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
                                        @endif
										<div class="single-item-header">
											<a href="{{ route('product', ['id'=>$product->id]) }}">
												<img style="height: 250px" width="250px" class="rounded"  src="{{ asset('Frontend/image/products/'.$product->image) }}" alt="{{ $product->image }}">
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