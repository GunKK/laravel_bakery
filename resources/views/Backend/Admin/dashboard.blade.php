@extends('Backend.Layouts.master')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Dashboard
                <small>Quản trị admin</small>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <div class="row">
            <h1>Đổi mật khẩu</h1>
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