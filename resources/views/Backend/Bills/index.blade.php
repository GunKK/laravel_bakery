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
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Đơn hàng
                    <small>Danh sách đơn hàng</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr>
                        <th class="row">STT</th>
                        <th class="col">#Mã đơn</th>
                        <th class="col">Khách hàng</th>
                        <th class="col">Tổng tiền</th>
                        <th class="col">Phương thức</th>
                        <th class="col">Ngày đặt</th>
                        <th class="col">Trạng thái</th>
                        <th class="col">Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    @php 
                        $i=1;
                    @endphp
                    @foreach ( $bills as $bill )       
                    <tr class="odd gradeX">
                        <td>{{ $i }}</td>
                        <td>{{ $bill->id }}</td>
                        <td>{{ $bill->customer->name }}</td>
                        <td>{{ number_format($bill->total) }}VND</td>
                        <td>{{ $bill->payment_method }}</td>
                        <td>{{ $bill->date_order }}</td>
                        <td>{{ $bill->status }}</td>
                        <td>
                            <div>
                                <a style="width: 100%; margin:4px 0px" class="btn btn-success" href="{{ route('showBill', ['id'=>$bill->id]) }}"> View</a>
                                <a style="width: 100%; margin:4px 0px" class="btn btn-warning" href="{{ route('updateBill', ['id'=>$bill->id]) }}"><i class="fa-solid fa-pencil"></i> Edit</a>
                            </div>
                        </td>
                    </tr>
                    @php
                        $i++;
                    @endphp
                    @endforeach
                </tbody>
            </table>
            {{ $bills->links() }}
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@endsection

@section("script")
    {{-- <script>
        $(document).ready(function(){
            $("#statusOrder").change(function() {
                const idBill = $this.getAttribute('data-bs-id');
                var status = $("#status").val();
                    console.log(idBill);
                    console.log(status);
                    // $.get("admin/update/"+idBill+"/"+status, function(data){
                    // $("#statusOrder").html(data);
                    // });
            });
        });
    </script> --}}
@endsection