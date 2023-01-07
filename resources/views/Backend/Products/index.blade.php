@extends('Backend.Layouts.master')
@section('title', 'showProduct')
@section('content')    
<div id="page-wrapper">
    <div class="container-fluid">
        @if (session('notify')) 
        <div class="row">
            <div class="alert alert-success">
                {{ session('notify') }}
            </div>
        </div>
        @endif
        @if (session('error')) 
        <div class="row">
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        </div>
        @endif
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Sản phẩm
                    <small>Danh sách sản phẩm</small>
                </h1>
                <h1>
                    <a href="{{ route('addProduct') }}" class="btn btn-primary"><i class="fa-regular fa-plus"></i> Thêm mới</a>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr>
                        <th class="row">STT</th>
                        <th class="col">#Mã</th>
                        <th class="col">Tên</th>
                        <th class="col">Hình</th>
                        <th class="col">Loại</th>
                        <th class="col">Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    @php 
                        $i=1;
                    @endphp
                    @foreach ( $products as $product )       
                    <tr class="odd gradeX">
                        <td>{{ $i }}</td>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>
                        <td>
                            <img width="100px" src="{{ asset('Frontend/image/products/'.$product->image) }}" alt="">
                        </td>
                        <td>{{ $product->productType->name }}</td>
                        <td>
                            <div>
                                <a style="width: 100%; margin:4px 0px" class="btn btn-success" href="{{ route('showProduct', ['id'=>$product->id]) }}"><i class="fa-light fa-eye"></i> View</a>
                                <a style="width: 100%; margin:4px 0px" class="btn btn-warning" href="{{ route('updateProduct', ['id'=>$product->id]) }}"><i class="fa-solid fa-pencil"></i> Edit</a>
                                <a style="width: 100%; margin:4px 0px" class="btn btn-danger" href="{{ route('deleteProduct', ['id'=>$product->id]) }}"><i class="fa-solid fa-trash-can"></i> Delete</a>
                            </div>
                        </td>
                    </tr>
                    @php
                        $i++;
                    @endphp
                    @endforeach
                </tbody>
            </table>
            {{ $products->links() }}
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@endsection