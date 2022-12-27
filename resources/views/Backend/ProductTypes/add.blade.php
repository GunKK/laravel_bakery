@extends('Backend.Layouts.master')
@section('title', 'addProduct')
@section('content')    
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Danh mục
                    <small>Thêm danh mục</small>
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
                        <label>Mô tả sản phẩm</label>
                        <textarea class="form-control" type="text" rows="3" name="desc" placeholder="Nhập mô tả sản phẩm"></textarea>
                    </div>
                    <div class="form-group">
                        <label class="form-label">File hình</label>
                        <input type="file" name="image" class="form-control">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Thêm danh mục</button>
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