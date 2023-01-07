@extends('Backend.Layouts.master')
@section('title', 'edit')
@section('content')  
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            @if (Session::has('success'))
            <div class="col-lg-12">
                <div class="alert alert-success" style="margin-top:8px">
                    {{ Session::get('success') }}
                </div>
            </div>
            @endif
            <div class="col-lg-12">
                <h1 class="page-header">Đơn hàng
                    <small>Chi tiết đơn hàng <b class="text-primary">#{{ $bill->id }}</b></small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-md-6 col-sm-12">
                            <div class="text-primary h5">Đơn hàng #{{ $bill->id }}</div>
                            <div>Khách hàng: {{ $customer->name }}</div>
                            <div>Hình thức thanh toán: {{ $bill->payment_method }}</div>
                            <div>Địa chỉ nhận hàng: {{ $customer->address }}</div>
                            <div>Số điện thoại: {{ $customer->phone }}</div>
                            <div>Địa chỉ email: {{ $customer->email }}</div>
                            <div>Thời gian đặt hàng: {{ $bill->date_order }}</div>
                            <div>
                                Ghi chú:
                            </div>
                            <div>
                                Trạng thái
                                <form action="{{ url()->current() }}" method="post">
                                    @csrf
                                    <select class="form-control" name="status" id="">
                                        <option @if($bill->status == 'Chưa giao hàng') selected @endif value="Chưa giao hàng">Chưa giao hàng</option>
                                        <option @if($bill->status == 'Đang giao hàng') selected @endif value="Đang giao hàng">Đang giao hàng</option>
                                        <option @if($bill->status == 'Đã nhận hàng') selected @endif value="Đã nhận hàng">Đã nhận hàng</option>
                                    </select>
                                    <button type="submit" class="btn btn-success" style="margin: 8px 0px;">Lưu</button>
                                </form>
                            </div>
                            <hr/>
                            <div>
                                <h5>
                                    Đơn hàng gồm <span class="text-primary">{{ $billDetails->count()  }} sản phẩm</span>
                                </h5>
                                <table class="table">
                                    @foreach ( $billDetails as $billDetail )
                                        <tr>
                                            <td>
                                                <div>   
                                                    {{ $billDetail->product->name }}
                                                </div>
                                                <div>
                                                    {{ $billDetail->quantity }} x {{ $billDetail->price/$billDetail->quantity }}
                                                </div>
                                            </td>
                                            <td class="text-primary"><b>{{ number_format($billDetail->price) }}</b></td>
                                        </tr>
                                    @endforeach
                                    <tr>
                                        <td>Tổng tiền (đã gồm VAT)</td>
                                        <td><div class="text-primary"><b>{{ number_format($bill->total) }} VND</b></div></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@endsection