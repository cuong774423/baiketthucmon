@extends('layout.master')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/base.css') }}">
@endsection
@section('content')	
<div class="signup-banner">
        <div class="signup_banner_img">
            <span>ĐĂNG NHẬP </span>
        </div>
</div>
<form action="{{ route('postlogin') }}" method="post">
@csrf
@if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
            @endif  
    <div class="form-signup2">
        <div class="signup-item">
            <h1>ĐĂNG NHẬP</h1>
        </div>
        <div class="signup-item">
             <input type="email" placeholder="Email" name="email" >
        </div>
        <div class="signup-item">
            <input type="password" placeholder="Mật khẩu" name="password" >
        </div>
        <div class="signup-item">
            <button type="submit" name="signin">Đăng nhập</button>
        </div>
        <div class="signup-item">
            <a href="{{ route('pages.index') }}">Trở về trang chủ</a>
        </div>
        <div class="signup-item">
            <a href="{{ route('getSignin') }}">Đăng ký</a>
        </div>
        <div class="signup-item">
            <a href="{{route('getInputEmail')}}">Quên mật khẩu?</a>
        </div>  
    </div>  
</form>
@endsection