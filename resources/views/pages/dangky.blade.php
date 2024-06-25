@extends('layout.master')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/base.css') }}">
@endsection
@section('content')	
<div class="signup-banner">
    <div class="signup_banner_img">
        <span>ĐĂNG KÝ</span>
    </div>
</div>
<form action="{{ route('postSignin') }}" method="post">
    @csrf    
            @if (count($errors)>0)
                    <div class="alert alert danger">
                        @foreach($errors->all() as $err)
                            {{ $err }}
                        @endforeach
                    </div>
                @endif
                @if(Session::has('success'))
                    <div class="alert alert success">{{ Session::get('success') }} </div>
                @endif
                <div class="form-signup">
                    <div class="signup-item">
                        <h1>TẠO TÀI KHOẢN </h1>
                    </div>
                    <div class="signup-item">
                        <input type="email" placeholder="Email" required name="email">
                    </div>
                    <div class="signup-item">
                        <input type="text" placeholder="Tên" required name="name">
                    </div>
                    <div class="signup-item">
                        <input type="text" placeholder="Địa chỉ" required name="address">
                    </div>
                    <div class="signup-item">
                        <input type="number" placeholder="Số điện thoại" required name="phone">
                    </div>
                    <div class="signup-item">
                        <input type="password" placeholder="Mật khẩu" required name="password">
                    </div>
                    <div class="signup-item">
                        <input type="password" placeholder="Nhập lại mật khẩu" required name="repassword">
                    </div>
                    <div class="signup-item">
                        <button type="submit" name="signup">Đăng ký</button>
                    </div>
                    <div class="signup-item">
                        <a href="{{ route('pages.index') }}">Trở về trang chủ</a>
                    </div>
                </div>
</form>
@endsection
