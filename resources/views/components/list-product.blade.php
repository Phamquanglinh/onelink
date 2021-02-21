
    <div class="box box-solid box-primary p-3 mt-3 bg-warning shadow">
        <h3>Sản phẩm : {{$name}}</h3>
        <hr>
        <a class="btn btn-success text-white" href="{{route('product.show',$id)}}">Xem chi tiết</a>
        <a class="btn btn-info text-white" href="{{route('product.edit',$id)}}">Chỉnh sửa sản phẩm</a>
        <a class="btn btn-danger text-white" href="{{route('product.destroy',$id)}}">Xoá sản phẩm</a>
    </div>
    <style>
        .shadow{
            box-shadow: 1px 1px black;
        }
    </style>
