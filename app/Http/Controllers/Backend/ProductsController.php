<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Product;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Types\Integer;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.product.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=[
            'user_id' => Auth::id(),
            'category_id'=>$request->category_id,
            'name' =>  $request->name,
            'price' => $request->price,
            'discout'=>$request->discout,
            'old_price' => $request->old_price,
            'html_content' => $request->html_content,
            'thumbnail'=>$request->thumbnail,
        ];
       $update= DB::table('products')->where('name', $request->name)->first();
        if(isset($update->name)){
            $id=$update->id;
            Product::where('id', $id)
                ->update($data);
            return redirect('product/'.$id);
        }else{
            Product::create($data);
            return redirect('/backend/product');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return redirect('product/'.$id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('backend.product.edit',['id'=>$id]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(  Request $request,$id)
    {
        $data=[
            //'user_id' => $request->user_id,
            //'category_id'=>$request->category_id,
            'name' =>  $request->name,
            'price' => $request->price,
            'old_price' => $request->old_price,
            'html_content' => $request->html_content,
            //'thumbnail'=>'https://myphamchat.com/wp-content/uploads/2019/01/black-rouge-air-fit-velvet-tint-tk.jpg',
        ];
        //


        //
        Product::where('id', $id)
            ->update($data);
        return redirect('product/'.$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
