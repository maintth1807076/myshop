<?php

namespace App\Http\Controllers;

use App\product;
use Illuminate\Http\Request;
use JD\Cloudder\Facades\Cloudder;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list = product::paginate(2);
        $data = ['list' => $list];
        return view('admin.admin_list_products', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('auth.products_form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response|string
     */
    public function upload(Request $request){
        $image_name = $request->file('image')->getRealPath();;
        Cloudder::upload($image_name, null);
        $result = Cloudder::getResult();
        $image_id = $result['public_id'].'.'.$result['format'];
        return $image_id;
    }
    public function store(Request $request)
    {
        $product = new product();

        $product->name = $request->get('name');
        $product->price = $request->get('price');
        $product->thumbnail =$request->get('thumbnail');
        $product->description = $request->get('description');
        $product->detail = $request->get('detail');
        $product->id_categories =$request->get('id_categories');
        $product->save();
        return redirect('/admin/products');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('client.detail-product');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = product::find($id);
        $data = ['product' => $product];
        return view('admin.product.admin_edit_products', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = product::find($id);
        $product->name = $request->get('name');
        $product->price = $request->get('price');
        $product->thumbnail =$request->get('thumbnail');
        $product->description = $request->get('description');
        $product->detail = $request->get('detail');
        $product->id_categories =$request->get('id_categories');
        $product->save();
        return redirect('/admin/products');

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
