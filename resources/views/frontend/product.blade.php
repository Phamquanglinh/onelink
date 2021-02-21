<?php
$product=\App\Product::find($id);
$temp=$id;
$id=$product->name;
?>
@extends('layouts.frontend')
<link href="{{asset('css/products.css')}}" rel="stylesheet" type="text/css">
@section('content')
    <div class="slug bg-success pl-2 pr-2 mb-3">
        <a href="../category/{{$product->categories->id}}">{{$product->categories->category_name}}</a> >>
        <a href="{{$product->id}}">{{$product->name}}</a>
    </div>
    <div class="product-name">
        {{$product->name}}
    </div>
    <div class="row">
        <div class="product-content col-md-6 col-12">
            <div class="product-image w-100">
                <img src="{{$product->thumbnail}}" width="100%">
            </div>
        </div>
        <div class="infomation col-md-6 col-12">
            <div class="info-boxs">
                <p class="text-danger text-bold price" >
                    Giá
                    <span id="price">{{$product->price/1000}}.000 đ</span>
                    <span class="badge badge-danger">- {{$product->discout}} % </span>
                </p>
                <p class="text-black-50">Giá cũ : {{$product->old_price/1000}}.000 đ</p>
                <a>Danh mục : <a href="{{route('category',['id'=>$product->categories->id])}}">
                    {{$product->categories->category_name}}
                </a></p>
                <p>Người bán :{{$product->user->name}}<a href="#"></a></p>
            </div>
            <div class="order-box row">
                <label class="col-12 col-md-6">Số lượng</label>
                <input class="col-12 col-md-6" id="cout" value="1" type="number" onchange="calPrice()">
                <label class="col-12 col-md-6">Thành tiền</label>
                <span  class="col-12 col-md-6 text-danger price text-bold" id="result_price">{{$product->price/1000}}.000 đ</span>
                <button class="btn-warning btn col-12 col-md-6">Thêm vào giỏ hàng</button>
                <button class="btn-success btn col-12 col-md-6 ">Mua ngay</button>
            </div>
        </div>
    </div>
    <div class="html_content">
        {!! $product->html_content !!}
    </div>
<script>
    function calPrice(){
        cout = document.getElementById('cout').value;
        price= document.getElementById('price').innerText;
        result = document.getElementById('result_price');
        result.innerText=parseInt(cout)*parseInt(price) + '.000 đ'
    }
</script>
@endsection
