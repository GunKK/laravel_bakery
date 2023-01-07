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
                    <small>Danh mục sản phẩm</small>
                </h1>
                <h1>
                    <a href="{{ route('addProductType') }}" class="btn btn-primary"><i class="fa-regular fa-plus"></i> Thêm mới</a>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr>
                        <th class="row">STT</th>
                        <th class="col">#Mã</th>
                        <th class="col">Tên danh mục</th>
                        <th class="col">Hình</th>
                        <th class="col">Mô tả</th>
                        <th class="col">Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    @php 
                        $i=1;
                    @endphp
                    @foreach ( $productTypes as $productType )       
                    <tr class="odd gradeX">
                        <td>{{ $i }}</td>
                        <td>{{ $productType->id }}</td>
                        <td>{{ $productType->name }}</td>
                        <td>{{ $productType->description }}</td>
                        <td>
                            <img width="150px" height="100px" src="{{ asset('Frontend/image/product_types/'.$productType->image) }}" alt="{{ $productType->name }}">
                        </td>
                        <td>
                            <div>
                                <a class="btn btn-warning" style="width: 100%" href="{{ Route('updateProductType', ['id'=>$productType->id]) }}"><i class="fa-solid fa-pencil"></i> Edit</a>
                                <a class="btn btn-danger" style="width: 100%; margin-top: 4px" href="{{ Route('deleteProductType', ['id'=>$productType->id]) }}"><i class="fa-solid fa-trash-can"></i> Delete</a>
                            </div>
                        </td>
                    </tr>
                    @php
                        $i++;
                    @endphp
                    @endforeach
                </tbody>
            </table>
            {{ $productTypes->links() }}
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@endsection