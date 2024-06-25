@extends('layout.master')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/base.css') }}">
@endsection
@section('content')	
<div class="contacts_content">
    <div class="contacts_banner">
        <div class="contacts_img">
            <div class="overlay">
                <h3>Để Lại Thông Tin </h3>
                <h2>Liên Hệ Với Huynh Hoa</h3>
            </div>
        </div>
    </div>
    <div class="contacts_box">
        <div class="contacts_box_item1">
            <h3>Liên Hệ</h3>
            <span>Liên hệ nếu bạn cần </span>
            <div class="contacts_infor">
                <div class="contacts_infor1">
                    <div class="contacts_infor_item">
                        <i class="fa-solid fa-location-dot"></i>
                        <span>Địa chỉ</span>
                        <span>26-30-32 Lê Thị Riêng, Bến Thành, Quận 1</span>
                    </div>
                    <div class="contacts_infor_item">
                    <i class="fa-solid fa-phone"></i>
                        <span>Số điện thoại</span>
                        <span>0962 455 517</span>
                        <span>Hotline: 19008021</span>
                        
                    </div>
                </div>
                <div class="contacts_infor2">
                    <div class="contacts_infor_item">
                        <i class="fa-solid fa-clock"></i>
                        <span>Giờ mở cửa</span>
                        <span>6am - 10pm</span>
                    </div> 
                    <div class="contacts_infor_item">
                        <i class="fa-solid fa-envelope-open"></i>
                        <span>Email</span>
                        <span>admin@banhmihuynhhoa.vn</span>
                    </div>     
                </div>
            </div>
        </div>
        <div class="contacts_box_item2">
                    <div class="contacts_title">
                        <h3>TRỞ THÀNH ĐỐI TÁC TRUYỀN THÔNG CỦA BÁNH MÌ HUỲNH HOA</h3>
                    </div>
                    <form action="{{ route('contact.store') }}" method="post" >
                    @csrf
                        <div class="contacts_item">
                            <input name="your-name" type="text" placeholder="Tên của bạn"  required ></input>
                        </div>
                        <div class="contacts_item">
                            <input name="your-email" type="email" required placeholder="Email của bạn"  required ></input>
                        </div>  
                        <div class="contacts_item">
                            <textarea name="your-message" type="text" rows="6" cols="80"  placeholder="Tin nhắn"  required ></textarea>
                        </div>
                        <div class="contacts_btn">
                            <button type="submit">Gửi</button>
                        </div>
                    </div>
                </div>
    </div>
    <div class="contacts_map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15678.076876334362!2d106.6923852!3d10.771488!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6a60bc45340de55c!2zQsOhbmggTcOsIEh1eW5oIEhvYQ!5e0!3m2!1svi!2s!4v1656674747047!5m2!1svi!2s" width="1870" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
</div>

@endsection
