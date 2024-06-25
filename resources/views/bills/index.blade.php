@extends('admin.master')

@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Danh sách đơn hàng</h1>
            </div>
            <!-- /.col-lg-12 -->
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Khách hàng</th>
                        <th>Ngày đặt hàng</th>
                        <th>Tổng tiền</th>
                        <th>Thanh toán</th>
                        <th>Ghi chú</th>
                        <th>Trạng thái</th>
                        <th>Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($bills as $bill)
                    <tr class="odd gradeX" align="center">
                        <td>{{ $bill->id }}</td>
                        <td>{{ $bill->customer->name }}</td>
                        <td>{{ $bill->date_order }}</td>
                        <td>{{ $bill->total }}</td>
                        <td>{{ $bill->payment }}</td>
                        <td>{{ $bill->note }}</td>
                        <td>{{ $bill->status }}</td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{ route('bills.edit', $bill->id) }}">Chỉnh sửa trạng thái</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@endsection
