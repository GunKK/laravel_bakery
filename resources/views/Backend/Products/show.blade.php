@extends('Backend.Layouts.master')
@section('title', 'show')
@section('content')  
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Sản phẩm
                    <small>Chi tiết sản phẩm</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                <div>
                    @csrf
                    <div class="form-group">
                        <label>Tên sản phẩm</label>
                        <input class="form-control" type="text" name="name" value="{{ $product->name }}" placeholder="Nhập tên sản phẩm" readonly />
                    </div>
                    <div class="form-group">
                        <label>Giá gốc</label>
                        <input class="form-control" type="number" step="any" name="price" value="{{ $product->unit_price }}" placeholder="Vui lòng nhập giá gốc sản phẩm" readonly />
                    </div>
                    <div class="form-group">
                        <label>Giá khuyến mãi</label>
                        <input class="form-control" type="number" step="any" name="pricePromotion" value="{{ $product->promotion_price }}" placeholder="Nếu không có khuyến mãi, vui lòng nhập 0" readonly />
                    </div>
                    <div class="form-group">
                        <label>Mô tả sản phẩm</label>
                        <textarea class="form-control" type="text" rows="3" name="desc" placeholder="Nhập mô tả sản phẩm" readonly>{{ $product->description }}</textarea>
                    </div>
                    <div class="form-group">
                        <img width="200px" src="{{ asset('Frontend/image/products/'.$product->image) }}">
                    </div>
                    <div class="form-group">
                        <label>Loại sản phẩm</label>
                        <select name="productTypeId" class="form-control">
                            <option value=""></option>
                            @foreach ( $productTypes as $productType )
                                <option @if ($product->id_type == $productType->id )
                                        selected
                                    @else 
                                        disabled
                                    @endif 
                                    value="{{ $productType->id }}"
                                >
                                    {{ $productType->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Đơn vị</label>
                        <select name="unit" class="form-control">
                            <option @if ($product->unit == 'Cái')
                                selected
                            @endif 
                                    value="Cái">Cái</option>
                            <option @if ($product->unit == 'Hộp')
                                selected
                                @else 
                                    disabled
                                @endif 
                                    value="Hộp">Hộp
                            </option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Sản phẩm mới ?</label>
                        <label class="radio-inline">
                            <input name="new" value="1" 
                                @if ($product->new == 1)
                                    checked
                                @else
                                    onclick="return false;"
                                @endif type="radio">Mới
                        </label>
                        <label class="radio-inline">
                            <input name="new" value="0" 
                                @if ($product->new == 0)
                                    checked
                                @else
                                    onclick="return false;"
                                @endif type="radio">Cũ
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@endsection