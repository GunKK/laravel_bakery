@extends('customers.layouts.app')
@section('title', 'Product Details')
@section('content')
<div class="container-fluid" style="padding: 150px 0; background-color: #EDF1F5">
    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="section-header">
                    <h2>Thông tim sản phẩm</h2>
                    <p>Bánh <span>{{ $product->name }}</span></p>
                </div>
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-sm-6">
                        <div class="white-box text-center"><img src="{{ $product->images }}" class="w-100 img-responsive"></div>
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-6">
                        <h4 class="box-title mt-5">Mô tả sản phẩm</h4>
                        <p>{{ $product->description }}</p>
                            <h4 class="mt-5">
                                Giá bán: ${{ $product->price_base }}<small class="text-success">(36%off)</small>
                            </h4>
                        <button class="btn btn-dark btn-rounded mr-1" data-toggle="tooltip" title="" data-original-title="Add to cart">
                            <i class="bi bi-cart"></i>
                        </button>
                        <button class="btn btn-primary btn-rounded">Buy Now</button>
                        <h3 class="box-title mt-5">Key Highlights</h3>
                        <ul class="list-unstyled">
                            <li><i class="fa fa-check text-success"></i>Sturdy structure</li>
                            <li><i class="fa fa-check text-success"></i>Designed to foster easy portability</li>
                            <li><i class="fa fa-check text-success"></i>Perfect furniture to flaunt your wonderful collectibles</li>
                        </ul>
                    </div>
                    {{-- <div class="col-lg-12 col-md-12 col-sm-12">
                        <h3 class="box-title mt-5">General Info</h3>
                        <div class="table-responsive">
                            <table class="table table-striped table-product">
                                <tbody>
                                    <tr>
                                        <td width="390">Brand</td>
                                        <td>Stellar</td>
                                    </tr>
                                    <tr>
                                        <td>Delivery Condition</td>
                                        <td>Knock Down</td>
                                    </tr>
                                    <tr>
                                        <td>Seat Lock Included</td>
                                        <td>Yes</td>
                                    </tr>
                                    <tr>
                                        <td>Type</td>
                                        <td>Office Chair</td>
                                    </tr>
                                    <tr>
                                        <td>Style</td>
                                        <td>Contemporary&amp;Modern</td>
                                    </tr>
                                    <tr>
                                        <td>Wheels Included</td>
                                        <td>Yes</td>
                                    </tr>
                                    <tr>
                                        <td>Upholstery Included</td>
                                        <td>Yes</td>
                                    </tr>
                                    <tr>
                                        <td>Upholstery Type</td>
                                        <td>Cushion</td>
                                    </tr>
                                    <tr>
                                        <td>Head Support</td>
                                        <td>No</td>
                                    </tr>
                                    <tr>
                                        <td>Suitable For</td>
                                        <td>Study&amp;Home Office</td>
                                    </tr>
                                    <tr>
                                        <td>Adjustable Height</td>
                                        <td>Yes</td>
                                    </tr>
                                    <tr>
                                        <td>Model Number</td>
                                        <td>F01020701-00HT744A06</td>
                                    </tr>
                                    <tr>
                                        <td>Armrest Included</td>
                                        <td>Yes</td>
                                    </tr>
                                    <tr>
                                        <td>Care Instructions</td>
                                        <td>Handle With Care,Keep In Dry Place,Do Not Apply Any Chemical For Cleaning.</td>
                                    </tr>
                                    <tr>
                                        <td>Finish Type</td>
                                        <td>Matte</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div> --}}

                </div>

            </div>
            <section id="gallery" class="gallery section-bg">
                <div class="container" data-aos="fade-up">
        
                <div class="section-header">
                    <h2>Sản phẩm tương tự</h2>
                    <p>Check <span>Our Gallery</span></p>
                </div>
        
                <div class="gallery-slider swiper">
                    <div class="swiper-wrapper align-items-center">
                        @foreach ( $sameProducts as $sameProduct)
                            <div class="swiper-slide">
                                <a class="glightbox" data-gallery="images-gallery" href="{{ route('product.show', ['id' => $sameProduct->id]) }}">
                                    <img src="{{ $sameProduct->images }}" class="img-fluid" alt="" />
                                    <div>{{ $sameProduct->name }}</div>
                                    <div class="text-success text-sm">${{ $sameProduct->price_base }}</div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
        
                </div>
            </section>
        </div>
    </div>
</div>
@endsection