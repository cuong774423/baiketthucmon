<div class="header">
<div class='menu_content'>
                <div class="menu_logo">
                    <a href ="{{ route('pages.index') }}">
                        <img src="{{ asset('image/logo.png') }}" alt="Logo">
                    </a >
                </div>
                <div class="menu_list">
                    <li><a href ="{{ route('pages.index') }}">Trang chủ</a ></li>
                    <li><a href ="">Giới thiệu </a ></li>
                    <li><a href="">Sản phẩm <i class="fa-solid fa-chevron-down"></i></a>
                        <ul class="dropdown">
                        @foreach($cates as $cate)
                                <li><a href="{{ route('page.category', ['id' => $cate->id]) }}">{{ $cate->name }}</a></li>
                                <hr class="hr_dropdown">
                            @endforeach
                        </ul>
                    </li>
                    <li><a href ="">Cách thức vận chuyển</a ></li>
                    <li><a href ="">Tin tức</a ></li>
                    <li><a href ="{{url('/contact')}}">Liên hệ</a ></li>
                </div>
                <div class="signup_signin">
                    @if(Auth::check())
                            <div class="signup_signin_item">
                                <a>Chào bạn {{ Auth::user()->name }}</a>
                            </div>
                            <div class="signup_signin_item">
                                <a href="{{ route('getlogout') }} "><i class="fa fa-user"></i>Đăng xuất</a>
                            </div>
                                
                    @else   
                        <div class="signup_signin_item">
                            <a href="{{ route('getSignin') }}">Đăng kí</a>
                        </div>
                        <div class="signup_signin_item">
                            <a href="{{ route('getlogin') }}">Đăng nhập</a>
                        </div>
                    @endif
                </div>
                <div class="beta-comp">
                @if(Session::has('cart'))
                        <div class="cart">
                            <div class="beta-select"><i class="fa fa-shopping-cart"></i> Giỏ hàng (@if(Session::has('cart')){{ Session('cart')->totalQty }}
                                @else Trống @endif) <i class="fa fa-chevron-down"></i></div>
                           
                                <div class="beta-dropdown cart-body">
                                    @foreach($productCarts as $product)
                                    <div class="cart-item">
                                        <a class="cart-item-delete" href="{{ route('page.xoagiohang',$product['item']['id']) }}"><i class="fa fa-times"></i>
                                        </a>
                                        <div class="media">
                                            <a class="pull-left" href="#"><img src="image/{{ $product['item']['image'] }}" alt=""></a>
                                            <div class="media-body">
                                                <span class="cart-item-title">{{ $product['item']['name'] }}</span>
                                                <span class="cart-item-amount">{{ $product['qty'] }}*<span>
                                                    @if($product['item']['unit_price']==0)
                                                    {{ number_format($product['item']['unit_price']) }}đ@else
                                                    {{ number_format($product['item']['unit_price']) }}đ
                                                    @endif
                                                </span></span>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach

                                    <div class="cart-caption">
                                        <div class="cart-total text-right">Tổng tiền: <span class="cart-total-value"> {{ number_format($totalPrice) }}đ</span></div>
                                        <div class="clearfix"></div>

                                        <div class="center">
                                            <div class="space10">&nbsp;</div>
                                            <a href="{{ route('cart.index') }}" class="beta-btn primary text-center">Xem giỏ hàng<i class="fa fa-chevron-right"></i></a>
                                            <a href="{{ route('page.getdathang') }}" class="beta-btn primary text-center">Đặt hàng <i class="fa fa-chevron-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                        </div> <!-- .cart -->
                        @endif
                </div>
                
</div>
