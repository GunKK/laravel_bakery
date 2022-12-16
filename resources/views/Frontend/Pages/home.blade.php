@extends('Frontend.Layouts.master');
@section('title', 'Home')
@section('content')    
{{-- sldier --}}
@include('Frontend.Layouts.slider')
<div class="container">
    <div id="content" class="space-top-none">
        <div class="main-content">
            <div class="space60">&nbsp;</div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="beta-products-list">
                        <h4>Sản phẩm mới</h4>
                        <div class="beta-products-details">
                            <p class="pull-left"> <span class="text-primary"><b>{{ $newProducts->count() }}</b></span> kết quả được tìm thấy</p>
                            <div class="clearfix"></div>
                        </div>

                        <div class="row">
                            @foreach ( $newProducts as $newProduct)    
                            <div class="col-sm-3">
                                <div class="single-item">
                                    <div class="single-item-header">
                                        @if ($newProduct->promotion_price != 0)
                                        <div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
                                        @endif
                                        <a href="{{ route('product', ['id'=>$newProduct->id]) }}">
                                            <img style="height: 200px" class="img-fluid rounded"  src="{{ asset('Frontend/image/products/'.$newProduct->image) }}" alt="">
                                        </a>
                                    </div>
                                    <div class="single-item-body">
                                        <p class="single-item-title">{{ $newProduct->name }}</p>
                                        <p class="single-item-price">
                                            @if ($newProduct->promotion_price == 0)
                                            <span>{{ number_format($newProduct->unit_price) }} đ</span>
                                            @else
                                            <del>

                                            </del>
                                            <span class="flash-del">{{ number_format($newProduct->unit_price) }} đ</span>
                                            <span class="flash-sale">{{ number_format($newProduct->promotion_price) }} đ</span>
                                            @endif
                                        </p>
                                    </div>
                                    <div class="single-item-caption">
                                        <a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
                                        <a class="beta-btn primary" href="{{ route('product', ['id'=>$newProduct->id]) }}">Xem chi tiết <i class="fa fa-chevron-right"></i></a>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div style="text-align:center">
                            {{ $newProducts->appends(['pageNew'=>$newProducts->currentPage()])->links() }}
                        </div>
                    </div> <!-- .beta-products-list -->
                    <div class="space50">&nbsp;</div>
                    <div class="beta-products-list">
                        <h4>Giảm giá nhiều</h4>
                        <div class="beta-products-details">
                            <p class="pull-left"> <span class="text-primary"><b>{{ $saleProducts->count() }}</b></span> kết quả được tìm thấy</p>
                            <div class="clearfix"></div>
                        </div>

                        <div class="row">
                            @foreach ( $saleProducts as $saleProduct)    
                            <div class="col-sm-3">
                                <div class="single-item">
                                    <div class="single-item-header">
                                        @if ($saleProduct->promotion_price != 0)
                                        <div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
                                        @endif
                                        <a href="{{ route('product', ['id'=>$saleProduct->id]) }}">
                                            <img style="height: 200px" class="img-fluid rounded"  src="{{ asset('Frontend/image/products/'.$saleProduct->image) }}" alt="">
                                        </a>
                                    </div>
                                    <div class="single-item-body">
                                        <p class="single-item-title">{{ $saleProduct->name }}</p>
                                        <p class="single-item-price">
                                            @if ($saleProduct->promotion_price == 0)
                                            <span>{{ number_format($saleProduct->unit_price) }} đ</span>
                                            @else
                                            <del>

                                            </del>
                                            <span class="flash-del">{{ number_format($saleProduct->unit_price) }} đ</span>
                                            <span class="flash-sale">{{ number_format($saleProduct->promotion_price) }} đ</span>
                                            @endif
                                        </p>
                                    </div>
                                    <div class="single-item-caption">
                                        <a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
                                        <a class="beta-btn primary" href="{{ route('product', ['id'=>$saleProduct->id]) }}">Xem chi tiết <i class="fa fa-chevron-right"></i></a>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div style="text-align:center">
                            {{ $saleProducts->appends(['pageSale'=>$saleProducts->currentPage()])->links() }}
                        </div>
                    </div> <!-- .beta-products-list -->
                    <div class="space50">&nbsp;</div>
                </div>
            </div> <!-- end section with sidebar and main content -->


        </div> <!-- .main-content -->
    </div> <!-- #content -->
</div> <!-- .container -->
@endsection