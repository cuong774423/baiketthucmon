@extends('layout.master')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/base.css') }}">
@endsection
@section('content')    

<div class="cart_content">
    <div class="cart_content_item1">
        @if(count($productCarts) > 0)
        <form id="cart-form" action="{{ route('updateCart') }}" method="post">
            @csrf
            <table>
                <tr class="cart_th">
                    <th>Sản phẩm</th>
                    <th>Giá</th>
                    <th>Số lượng</th>
                    <th>Tạm tính</th>
                </tr>
                @foreach($productCarts as $product)
                <tr class="cart_td">
                    <td>
                        <div class="cart_product">
                            <a href="{{ route('cart.xoagiohang',$product['item']['id']) }}"><i class="fa fa-times"></i>
                            </a>
                            <a href="#"><img src="image/{{ $product['item']['image'] }}" alt=""></a>
                            <span class="cart-item-title">{{ $product['item']['name'] }}</span>
                        </div>
                    </td>
                    <td>
                        <span>
                            @if($product['item']['unit_price']==0)
                                {{ number_format($product['item']['unit_price']) }}đ@else
                                {{ number_format($product['item']['unit_price']) }}đ
                            @endif
                        </span>
                    </td>
                    <td>
                        <div class="quantity-control">
                            <button type="button" class="quantity-decrease" data-id="{{ $product['item']['id'] }}">-</button>
                            <input type="number" name="quantities[{{ $product['item']['id'] }}]" value="{{ $product['qty'] }}" min="1">
                            <button type="button" class="quantity-increase" data-id="{{ $product['item']['id'] }}">+</button>
                        </div>
                    </td>
                    <td>
                        <span class="cart-total-value">{{ number_format($product['item']['unit_price'] * $product['qty']) }}đ</span>
                    </td>
                </tr>  
                @endforeach
            </table>
            <button type="submit" class="update-cart-button">Cập nhật giỏ hàng</button>
            <span class="cart_sum">Tổng tiền: {{ number_format($totalPrice) }}đ</span>
        </form>
        @else
            <p>Giỏ hàng của bạn hiện đang trống.</p>
        @endif
    </div>
    <div class="cart_content_item2">
        <div class="cart_item2">
            <span>Cộng giỏ hàng</span>
        </div>
        <div class="cart_item2 cart_sum1">
            <span>Tạm tính</span>
            <span>{{ number_format($totalPrice) }}đ</span>
        </div>
        <div class="cart_item2 cart_sum2">
            <span>Tổng</span>
            <span>{{ number_format($totalPrice) }}đ</span>
        </div>
        <div class="cart_item2">
            <a href="{{ route('page.getdathang') }}">
                <button type="submit">
                    Tiến hành thanh toán
                </button>
            </a>
        </div>
        <div class="cart_item2">
            <i class="fa-solid fa-tag"></i>
            <span>Phiếu ưu đãi</span>
        </div>
        <div class="cart_item2">
            <input type="text" name="coupons" placeholder="Mã ưu đãi">
        </div>
        <div class="cart_item2">
            <button type="submit">
                Áp dụng
            </button>
        </div>
    </div>
</div>

<script>
document.querySelectorAll('.quantity-decrease').forEach(button => {
    button.addEventListener('click', function() {
        let input = this.nextElementSibling;
        if (input.value > 1) {
            input.value = parseInt(input.value) - 1;
        }
    });
});

document.querySelectorAll('.quantity-increase').forEach(button => {
    button.addEventListener('click', function() {
        let input = this.previousElementSibling;
        input.value = parseInt(input.value) + 1;
    });
});
</script>

@endsection
