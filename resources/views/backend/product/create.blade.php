{{$id='Tạo sản phẩm mới'}}
@extends('layouts.app')

@section('content')
    <?php
    $category= \App\Category::get();
    ?>
    <script src="//cdn.ckeditor.com/4.16.0/full/ckeditor.js"></script>
    @include('ckfinder::setup')
    <div class="container-fluid">
        <form action="{{route('product.store')}}" method="post">
            @method('POST')
            @csrf
            <label>Tên sản phẩm</label><br>
            <input type="text" name="name" value="" required><br>
            <label>Url ảnh</label><br>
            <input type="text" name="thumbnail" value="" required><br>
            <label>Giá</label><br>
            <input type="number" id="price" name="price" onkeyup="calDiscout()" onchange="calDiscout()" required><br>
            <label>Giá cũ</label><br>
            <input type="number" id="old" name="old_price" onkeyup="calDiscout()" onchange="calDiscout()" required><br>
            <label>Sale (%) </label><br>
            <input type="number" id="discout" name="discout" readonly><br><br>
            <label>Danh mục</label>
            <select name="category_id">
                @foreach($category as $item)
                    <option value="{{$item->id}}">{{$item->category_name}}</option>
                @endforeach
            </select><br><br>
            <label>Mô tả sản phẩm</label><br>
            <textarea  name="html_content" id="editor" required></textarea><br>
            <button type="submit" class="btn btn-success">Cập nhật</button>
        </form>
    </div>

    <script>
        var editor = CKEDITOR.replace( 'editor' );
        CKFinder.setupCKEditor( editor, null, { type: 'Files' } );
        function calDiscout(){
            price=parseInt(document.getElementById('price').value);
            old=parseInt(document.getElementById('old').value);
            discout = ((old-price)/old)*100;
            document.getElementById('discout').value=Math.round(discout);
        }
        calDiscout();
    </script>
@endsection
