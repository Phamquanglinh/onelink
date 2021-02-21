@extends('layouts.frontend')
<link href="{{asset('css/category.scss')}}" rel="stylesheet" type="text/css">
@section('content')
    <?php
            $category = \App\Category::find($id);
            if($category){
                $products =$category->product;
                $id=$category->category_name;
            }else{
                $id='Không tìm thấy';

            }

    ?>
    <div class="list-product row">
        @if(isset($products))
        @foreach($products as $item)
            <div class="product col-md-3 col-sm-6 col-12">
                <a class="text-dark" href="{{route('product',['id'=>$item->id])}}">
                <div class="product-img">
                    <img src="{{$item->thumbnail}}" width="100%" height="100%">
                </div>
                <div class="product-name">
                    {{$item->name}}
                    <span class="badge-danger badge">
                        -{{$item->discout}} %
                    </span>
                </div>
                <div class="price text-bold text-danger font-settings">
                    {{$item->price/1000}}.000 đ
                </div>
                 <div class="old-price">
                     {{$item->old_price/1000}}.000 đ
                 </div>
                </a>
            </div>
        @endforeach
        @endif
    </div>

@endsection
