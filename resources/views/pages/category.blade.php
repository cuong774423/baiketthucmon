@extends('layout.master')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/base.css') }}">
@endsection
@section('content')	
<div class="category_content">
    <div class="category_banner">
        <div class="category_box">
            <div class="category_title">
                <h3>{{ $category->name }}</h3>       
            </div>
            <div class="category_link">
                <a href="{{ route('pages.index') }}">
                    Trang chủ
                </a>
                <span> / <span>
                <span>
                    {{ $category->name }}
                </span>
            </div>
        </div>
    </div>
    <div class="category_list">
    @foreach($products as $product)
        <div class="category_item">
            <a href="{{ route('page.product', $product->id) }}">
                <img src="{{ asset('image/' . $product->image) }}">
            </a>
            <span>{{ $product->name }}  </span>
        </div>
    @endforeach
    </div>
</div>

@endsection