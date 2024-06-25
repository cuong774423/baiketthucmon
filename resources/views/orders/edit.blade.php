@extends('admin.master')

@section('content')
    <div class="container">
        <h1>Chỉnh sửa trạng thái đơn hàng</h1>
        <form action="{{ route('orders.update', $order->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="status">Trạng thái:</label>
                <select name="status" id="status" class="form-control">
                    <option value="new" {{ $order->status === 'new' ? 'selected' : '' }}>Mới</option>
                    <option value="shipping" {{ $order->status === 'shipping' ? 'selected' : '' }}>Đang giao</option>
                    <option value="delivered" {{ $order->status === 'delivered' ? 'selected' : '' }}>Đã giao</option>
                    <option value="cancelled" {{ $order->status === 'cancelled' ? 'selected' : '' }}>Đã hủy</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Lưu</button>
        </form>
    </div>
@endsection
