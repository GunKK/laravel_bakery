@extends('Frontend.Layouts.master')
@section('title', 'product')
@section('content')
	<div class="container">
		<div id="content">
			<div class="row">
				<div class="col-sm-9">

					<div class="row">
						<div class="col-sm-4">
							<img src="{{ asset('Frontend/image/products/'.$product->image) }}" alt="">
						</div>
						<div class="col-sm-8">
							<div class="single-item-body">
								<div class="single-item-title mb-4"><b class="single-item-price">{{ $product->name }}</b></div>
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

							<div class="clearfix"></div>
							<div class="space20">&nbsp;</div>

							<div class="single-item-desc">
								<p>{{ $product->description }}</p>
							</div>
							<div class="space20">&nbsp;</div>

							<p>Options:</p>
							<div class="single-item-options">
								<select class="wc-select" name="size">
									<option>Size	</option>
									<option value="XS">XS</option>
									<option value="S">S</option>
									<option value="M">M</option>
									<option value="L">L</option>
									<option value="XL">XL</option>
								</select>
								<select class="wc-select" name="color">
									<option>Màu sắc</option>
									<option value="Red">Red</option>
									<option value="Green">Green</option>
									<option value="Yellow">Yellow</option>
									<option value="Black">Black</option>
									<option value="White">White</option>
								</select>
								<select class="wc-select" name="color">
									<option>Số lượng</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
								</select>
								<a class="add-to-cart" href="{{ route('addToCart', ['id'=>$product->id]) }}"><i class="fa fa-shopping-cart"></i></a>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>

					<div class="space40">&nbsp;</div>
					<div class="woocommerce-tabs">
						<ul class="tabs">
							<li><a href="#tab-description">Description</a></li>
							<li><a href="#tab-reviews">Reviews (0)</a></li>
						</ul>

						<div class="panel" id="tab-description">
							<p>{{ $product->description }}</p>
						</div>
						<div class="panel" id="tab-reviews">
							<p>No Reviews</p>
						</div>
					</div>
					<div class="space50">&nbsp;</div>
					<div class="beta-products-list">
						<h4 class="mb-3">Sản phẩm cùng loại</h4>
						<div class="row">
							@foreach ( $relationProducts as $relationProduct )	
							<div class="col-sm-4">
								@if ($relationProduct->promotion_price != 0)
									<div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
								@endif
								<div class="single-item">
									<div class="single-item-header">
										<a href="{{ route('product', ['id'=>$relationProduct->id]) }}">
											<img style="height: 200px" class="img-fluid rounded" src="{{ asset('Frontend/image/products/'.$relationProduct->image) }}" alt="{{ $relationProduct->image }}">
										</a>
									</div>
									<div class="single-item-body">
										<p class="single-item-title">{{ $relationProduct->name }}</p>
										<p class="single-item-price">
											@if ($relationProduct->promotion_price == 0)
												<span>{{ number_format($relationProduct->unit_price) }} đ </span>
											@else
											<del>

											</del>
												<span class="flash-del">{{ number_format($relationProduct->unit_price) }} đ </span>
												<span class="flash-sale">{{ number_format($relationProduct->promotion_price) }} đ </span>
											@endif
										</p>
									</div>
									<div class="single-item-caption">
										<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
										<a class="beta-btn primary" href="{{ route('product', ['id'=>$relationProduct->id]) }}">Xem chi tiết <i class="fa fa-chevron-right"></i></a>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
							@endforeach
						</div>
					</div> <!-- .beta-products-list -->
				</div>
				<div class="col-sm-3 aside">
					<div class="widget">
						<h3 class="widget-title">Sản phẩm mới</h3>
						<div class="widget-body">
							<div class="beta-sales beta-lists">
								@foreach ( $newProducts as $newProduct)	
								<div class="media beta-sales-item">
									<a class="pull-left" href="{{ route('product', ['id'=>$newProduct->id]) }}">
										<img class="rounded" src="{{ asset('Frontend/image/products/'.$newProduct->image) }}" alt="">
									</a>
									<div class="media-body">
										{{ $newProduct->name }}
										<div>
											@if ($newProduct->promotion_price == 0)
												<span>{{ $newProduct->unit_price }} đ</span>
											@else
											<del>

											</del>
												<span class="flash-del">{{ number_format($newProduct->unit_price) }} đ</span>
												<span class="beta-sales-price">{{ number_format($newProduct->promotion_price) }}  đ</span>
											@endif
										</div>
									</div>
								</div>
								@endforeach
							</div>
						</div>
					</div> 
					<!-- best sellers widget -->
					<div class="widget">
						<h3 class="widget-title">Giảm giá nhiều</h3>
						<div class="widget-body">
							<div class="beta-sales beta-lists">
								@foreach ( $saleProducts as $saleProduct)	
								<div class="media beta-sales-item">
									<a class="pull-left" href="{{ route('product', ['id'=>$saleProduct->id]) }}">
										<img class="rounded" src="{{ asset('Frontend/image/products/'.$saleProduct->image) }}" alt="">
									</a>
									<div class="media-body">
										{{ $saleProduct->name }}
										<div>
											@if ($saleProduct->promotion_price == 0)
												<span>{{ $saleProduct->unit_price }} đ</span>
											@else
											<del>
	
											</del>
												<span class="flash-del">{{ number_format($saleProduct->unit_price) }} đ</span>
												<span class="beta-sales-price">{{ number_format($saleProduct->promotion_price) }}  đ</span>
											@endif
										</div>
									</div>
								</div>
								@endforeach
							</div>
						</div>
					</div> 
				</div>
			</div>
		</div> <!-- #content -->
	</div> <!-- .container -->
@endsection