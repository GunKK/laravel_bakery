@extends('Backend.Layouts.master')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Dashboard
                <small>Quản trị admin</small> </h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <div class="row" style="margin: 24px 0px;">
            <h1 class="page-header">Thống kê
            <small>Quản trị admin</small> </h1>
            <div>
                <table class="table">
                    <tr>
                        <th>Khách hàng</th>
                        <th>Sản phẩm</th>
                        <th>Đơn hàng</th>
                        <th>Doanh thu (triệu)</th>
                    </tr>
                    <tr>
                        <td>{{ $countUser }}</td>
                        <td>{{ $countProduct }}</td>
                        <td>{{ $countBill }}</td>
                        <td>
                            @if ($revenue < 1000000)
                                {{ number_format($revenue) }}
                            @elseif ($revenue)
                                {{ number_format($revenue / 1000000, 2) }} Triệu
                            @else
                                {{ number_format($revenue / 1000000000, 2) }} Tỉ
                            @endif
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="row">
            <h1>Đổi mật khẩu <small>*đổi mật khẩu</small></h1>
            <div class="col">
                <form action="{{ url()->current() }}" method="post">
                    @csrf
                    <div style="margin-top:8px">
                        <label> Mật khẩu cũ</label>
                        <input class="form-control" type="password" name="oldPwd" placeholder="Vui lòng nhập mật khẩu cũ">
                    </div>
                    <div style="margin-top:8px">
                        <label>Mật khẩu mới</label>    
                        <input class="form-control" type="password" name="newPwd" placeholder="Vui lòng nhập mật khẩu mới">
                    </div>
                    <div style="margin-top:8px">
                        <label>Nhập lại mật khẩu</label>    
                        <input class="form-control" type="password" name="reNewPwd" placeholder="Vui lòng nhập lại mật khẩu">
                    </div>
                    <div style="margin:8px 0px;">
                        <button type="submit" class="btn btn-success">Xác nhận</button>
                    </div>
                </form>
                @if (session('error')) 
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
                @if (session('success')) 
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                @if ($errors->any())
                    <div class="alert alert-danger" style="margin-top: 20px; text-center">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@endsection