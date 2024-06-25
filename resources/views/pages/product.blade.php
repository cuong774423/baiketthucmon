@extends('layout.master')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/productdetail.css') }}">
@endsection
@section('content')	

<div class="productdetail_content">
      <div class="productdetail_img">
          <img src="{{ asset('image/' . $product->image) }}">
      </div>
      <div class="productdetail_box">
          <div class="productdetail_item">
              <div class="productdetail_head">
                  <a href="{{ route('pages.index')}}">
                      Trang chủ
                  </a>
              </div>
          </div>
          <div class="productdetail_item">
              <div class="productdetail_name">
                    <h3>{{ $product->name }}</h3>
              </div>
          </div>
          <div class="productdetail_item">
              <div class="productdetail_divider">
                  <hr class="is_divider">
              </div>
          </div>
          <div class="productdetail_item">
              <div class="productdetail_description">
                  <p>
                        {{ $product->description }}
                  </p>
              </div>
          </div>
          <div class="productdetail_item">
              <div class="productdetail_price">
                  <span>
                        Đơn giá: {{ number_format($product->unit_price) }}đ
                  </span>
              </div>
          </div>
          <div class="productdetail_item">
              <div class="productdetail_button">
                    <a href ="{{ route('page.addtocart',$product->id) }}">     
                        <button type="submit">
                            Thêm vào giỏ hàng
                        </button>
                    </a>
                    <a href="{{ route('page.getdathang') }}">
                        <button type="submit">
                            Mua ngay
                        </button>
                    </a>
              </div>
          </div>
          <div class="productdetail_item">
                <div class="productdetail_item_icon">
                        <div class="productdetail_icon ">
                            <a href="https://www.facebook.com">
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>
                        </div>
                        <div class="productdetail_icon ">
                            <a href="https://www.x.com">
                                <i class="fa-brands fa-twitter"></i>
                            </a>
                        </div>
                        <div class="productdetail_icon ">
                            <a href="https://www.gmail.com">
                                <i class="fa-solid fa-square-envelope"></i>
                            </a>
                        </div>
                        <div class="productdetail_icon ">
                            <a href="https://www.pinterest.com">
                                <i class="fa-brands fa-pinterest"></i>
                            </a>
                        </div> 
                </div>
          </div>
      </div>

</div>

@endsection