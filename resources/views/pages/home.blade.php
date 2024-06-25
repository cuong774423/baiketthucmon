@extends('layout.master')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/base.css') }}">
@endsection
@section('content')	
<div class="banner_content">
                <div class="banner_img">
                    <a href="">
                    <img src="{{ asset('image/banner.png') }}"></img>
                    </a>
                </div>
                <div class="banner_number">
                    <div class="banner_number_item">
                        <div class="banner_number_icon">
                            <i class="fa-solid fa-headphones-simple"></i>
                        </div>
                        <div class="banner_number_text">
                            <span class="banner_number_text_1">chăm sóc khách hàng</span>
                            <span>0962 455 517</span>
                        </div>
                    </div>
                    <div class="banner_number_item">
                        <div class="banner_number_icon">
                            <i class="fa-solid fa-truck-fast"></i>
                        </div>
                        <div class="banner_number_text">
                            <span class="banner_number_text_1">giao hàng</span>
                            <span>Giao hàng nhanh chóng</span>
                        </div>
                    </div>
                    <div class="banner_number_item">
                        <div class="banner_number_icon phone">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <div class="banner_number_text">
                            <span class="banner_number_text_1">liên hệ online  </span>
                            <span>1900 8021</span>
                        </div>
                    </div>
                </div>
            </div>
    <!--------------------------------------------------END BANNER-------------------------------------------- -->
<div class="main_contennt">
    <div class="product_content">
                    <h2>
                        Danh mục sản phẩm 
                    </h2>
                    <div class="product_list">
                    @foreach ($products as $product)    
                        <div class="product_item">
                            <div class="product_item_img">
                                    <img src="{{ asset('image/' . $product->image) }}" alt="" />
                            </div>
                            <div class="product_name">
                                <a href ="{{ route('page.product', $product->id) }}">
                                    <span>{{ $product->name }}</span>
                                </a>
                                <div class="product_price">
                                    <span>{{ $product->unit_price }}đ</span>
                                </div>
                            </div>                      
                                <div class="product_cart">
                                    <a href ="{{ route('page.addtocart',$product->id) }}">     
                                        <i  class="fa-solid fa-cart-plus"></i>
                                    </a>
                                </div>
                                    
                        </div>
                    @endforeach
                    </div>
                </div>
    <!-------------------------------------------END PRODUCT-------------------------------------------------------->
    <div class="about_content">
                <h2>Giới thiệu Bánh mì Huynh Hoa</h2>
                <div class="about_text"> 
                <p>Bánh mì Huynh Hoa được xem là tiệm bánh mì nổi tiếng nhất ở Sài Gòn với thời gian hoạt động đã trên 30 năm. Không chỉ thu hút người dân Sài Gòn, những người sành ăn, cộng đồng food blogger trên toàn thế giới, bánh mì Huynh Hoa còn được báo chí nước ngoài ca ngợi như một món ăn đường phố không thể bỏ qua khi đến thành phố này.</p>
                <p>Bánh mì Huynh Hoa gây ấn tượng với khách trong và ngoài nước nhờ chất lượng nguyên liệu từ bánh mì, thịt nguội, bơ, pate đến dưa leo, đồ chua đều rất cao và được nâng cấp liên tục. Tất cả đều được sản xuất theo công thức độc quyền của riêng Huynh Hoa và đảm bảo an toàn thực phẩm. Bên cạnh đó, Huynh Hoa luôn bán hết nguyên liệu đã chuẩn bị trong ngày và không bao giờ bán thực phẩm cũ vào hôm sau.</p>
                <p>Một ổ bánh mì Huynh Hoa gồm 5 – 6 lớp nhân và được phết pate, bơ ở giữa để vỏ bánh luôn giữ được độ giòn ngon, không hề bị mềm nhão như những tiệm bánh mì khác. Ổ bánh mì Huynh Hoa được chăm chút kĩ lưỡng như thế nên đã đi vào lòng bao thực khách yêu ẩm thực Sài Gòn.</p>
                </div>
            </div>
    <!------------------------------------------END ABOUT CONTENT---------------------------------------------------->
    <div class="feedback_content">
                <h2>Khách hàng & Truyền thông nói gì về Huynh Hoa</h2>
                <div class="feedback_list">
                    <div class="feedback_item">
                        <img src="{{ asset('image/thaytien.jpg') }}"></img>
                        <div class="star">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <p>Cũng ra gì đấy nhở! Cũng khét đấy! nhở.</p>
                        <p></p>
                        <p>Thầy tiến/ Giáo viên online</p>
                    </div>
                    <div class="feedback_item">
                        <img src="{{ asset('image/jack5cu.webp') }}"></img>
                        <div class="star">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <p>Tôi thà bỏ con chứ không bao giờ bỏ qua cửa hàng bánh mỳ này! Bonus ngay 5 củ!</p>
                        <p>Jack 5 củ/ Máy dập Bến Tre</p>
                    </div>
                    <div class="feedback_item">
                        <img src="{{ asset('image/thanhpahm.jpg') }}"></img>
                        <div class="star">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <p>Man and woman don't matter as long as they're happy.</p>
                        <p>Thanh pahm/ Họa sĩ</p>
                    </div>
                </div>
            </div>
    <!----------------------------------------------END FEEDBACK-------------------------------------------------->
    <div class="contact_content">
                <div class="contact_img">
                    <img src="{{ asset('image/contact.jpg') }}"></img>
                </div>
                <div class="form_contact">
                    <form action="{{ route('contact.store') }}" method="post" >
                    @csrf
                        <div class="contact_item">
                            <h2>TRỞ THÀNH ĐỐI TÁC TRUYỀN THÔNG CỦA BÁNH MÌ HUỲNH HOA</h2>
                        </div>
                            <div class="contact_item">
                                <p>Bạn đang muốn trở thành hợp tác truyền thông cùng Bánh mì Huỳnh Hoa (review, KOLs, báo chí, TV,…), hãy gửi thông tin của bạn về địa chỉ mail admin@banhmihuynhhoa.vn, hoặc ĐỂ LẠI THÔNG TIN TẠI FORM BÊN DƯỚI.</p>                  
                            </div>
                            <div class="contact_item">
                                <input name="your-name" type="text" placeholder="Tên của bạn"  required ></input>
                            </div>
                            <div class="contact_item">
                                <input name="your-email" type="email" placeholder="Email của bạn"  required ></input>
                            </div>  
                            <div class="contact_item">
                                <textarea name="your-message" type="text" rows="4" cols="80"  placeholder="Tin nhắn"  required ></textarea>
                            </div>
                            <div class="contact_item">
                                <div class="contact_btn">
                                    <input type="submit" value="Gửi"></input>
                                </div>
                            </div>
                    </div>
                </div>
    </div>
    <!-------------------------------------------------------END CONTACT------------------------------------------------------------>
    <div class="partner_content">
                <h2>Đối tác đồng hành</h2>
                <span>Những đơn vị uy tín mà chúng tôi đang hợp tác chung</span>
                <div class="partner_box">
                    <div class="partner_item">
                        <a href="#">                           
                        <img src="{{ asset('image/grab.jpg') }}"></img>
                        </a>
                    </div>
                    <div class="partner_item">
                        <a href="#">
                        <img src="{{ asset('image/shopee.png') }}"></img>
                        </a>
                    </div>
                    <div class="partner_item">
                        <a href="#">
                        <img src="{{ asset('image/gojek.png') }}"></img>
                        </a>
                    </div>
                    <div class="partner_item">
                        <a href="#">
                        <img src="{{ asset('image/be.jpg') }}"></img>
                        </a>
                    </div>
                </div>
            </div>
    <!------------------------------------------------------END PARTNER------------------------------------------------------------->

</div>
@endsection