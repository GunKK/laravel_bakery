@extends('Backend.Layouts.master')
@section('title', 'addProduct')
@section('content')    
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Sản phẩm
                    <small>Thêm sản phẩm</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                <form action="{{ url()->current() }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Tên sản phẩm</label>
                        <input class="form-control" type="text" name="name" placeholder="Nhập tên sản phẩm" />
                    </div>
                    <div class="form-group">
                        <label>Giá gốc</label>
                        <input class="form-control" type="number" step="any" name="price" placeholder="Vui lòng nhập giá gốc sản phẩm" />
                    </div>
                    <div class="form-group">
                        <label>Giá khuyến mãi</label>
                        <input class="form-control" type="number" step="any" name="pricePromotion" placeholder="Nếu không có khuyến mãi, vui lòng nhập 0" />
                    </div>
                    <div class="form-group">
                        <label>Mô tả sản phẩm</label>
                        <textarea class="form-control" type="text" rows="3" name="desc" placeholder="Nhập mô tả sản phẩm"></textarea>
                    </div>
                    <div class="form-group">
                        <label class="form-label">File hình</label>
                        <input type="file" name="image" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Loại sản phẩm</label>
                        <select name="productTypeId" class="form-control">
                            <option value=""></option>
                            @foreach ( $productTypes as $productType )
                                <option value="{{ $productType->id }}">{{ $productType->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Đơn vị</label>
                        <select name="unit" class="form-control">
                            <option value=""></option>
                            <option value="Cái">Cái</option>
                            <option value="Hộp">Hộp</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Sản phẩm mới ?</label>
                        <label class="radio-inline">
                            <input name="new" value="1" checked type="radio">Mới
                        </label>
                        <label class="radio-inline">
                            <input name="new" value="0" type="radio">Cũ
                        </label>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Thêm sản phẩm</button>
                        <button type="reset" class="btn btn-default">Reset</button>
                    </div>
                    @if ($errors->any())
                        <div class="form-group alert alert-danger">
                            @foreach ( $errors->all() as $error)
                                <div>! {{ $error }}</div>
                            @endforeach
                        </div>
                    @endif
                    @if (session('error')) 
                    <div class="row">
                        <div class="form-group alert alert-danger">
                            {{ session('error') }}
                        </div>
                    </div>
                    @endif
                <form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@endsection