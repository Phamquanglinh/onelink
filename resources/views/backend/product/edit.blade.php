{{--PRODUCT EDIT--}}
<?php
    $product=\App\Product::find($id);

?>
@extends('layouts.app')
@section('content')
    <script src="//cdn.ckeditor.com/4.16.0/full/ckeditor.js"></script>
    <div class="container-fluid">
        <form action="{{route('product.update',['product' => $id])}}" method="post">
            @method('PUT')
            @csrf
            <label>Tên sản phẩm</label><br>
            <input type="text" name="name" value="{{$product->name}}"><br>
            <label>Giá</label><br>
            <input type="text" name="price" id="price" value="{{$product->price}}" onkeyup="calDiscout()" onchange="calDiscout()"><br>
            <label>Giá cũ</label><br>
            <input type="text" name="old_price" id="old" value="{{$product->old_price}}" onchange="calDiscout()" onkeyup="calDiscout()"><br>
            <label>Sale (%) </label><br>
            <input type="number" id="discout" name="discout" readonly><br>
            <label>Mô tả sản phẩm</label><br>
            <textarea  name="html_content" id="editor">{{$product->html_content}}</textarea><br>
            <button type="submit" class="btn btn-success">Cập nhật</button>
        </form>

    </div>
    <script>
        CKEDITOR.replace( 'editor' );
        function calDiscout(){
            price=parseInt(document.getElementById('price').value);
            old=parseInt(document.getElementById('old').value);
            discout = ((old-price)/old)*100;
            document.getElementById('discout').value=Math.round(discout);
        }
        calDiscout();
    </script>
@endsection
