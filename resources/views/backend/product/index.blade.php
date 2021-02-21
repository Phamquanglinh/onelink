{{--PRODUCT INDEX--}}
<style>
</style>

@extends('layouts.app')
@section('content')

    <div class="container-fluid">
        <button class="float-right btn btn-success"><a class="text-white" href="{{route('product.create')}}">Tạo sản phẩm</a></button>
    </div>
    <div class="clearfix"></div>
    <?php
        $products=\App\Product::get()->where('user_id','==',\Illuminate\Support\Facades\Auth::user()->id);
    ?>
    @foreach($products as $item)
        <x-list-product id="{{$item->id}}" name="{{$item->name}}"></x-list-product>
    @endforeach

@endsection
