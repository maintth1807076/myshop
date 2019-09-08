<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductVailidate;
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
        return view('admin.product.list', $data);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('admin.product.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response|string
     */
    public function upload(Request $request){
        $image_name = $request->file('thumbnail')->getRealPath();;
        Cloudder::upload($image_name, null);
        $result = Cloudder::getResult();
        $image_id = $result['public_id'].'.'.$result['format'];
        return $image_id;
    }
    public function store(ProductVailidate $request)
    {
        $product = new product();
        $request->validated();
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
        $product = product::find($id);
        $data = ['product' => $product];
        return view('admin.product.detail', $data);

//
//        // get the nerd
//        $product = product::find($id);
//
//        // show the view and pass the nerd to it
//        return View::make('admin.product.detail')
//            ->with('product', $product);
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
        return view('admin.product.edit',$data);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductVailidate $request, $id)
    {
        $request->validated();
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
        error_log('Some message here.');
        $product = product::find($id);
        $product->delete();
        return response()->json(['status' => '200', 'message' => 'Okie']);
    }
    public function changeStatus(Request $request)
    {
        $listItem = product::whereIn('id', $request->input('ids'));
        $listItem->update(array(
            'status' => (int)$request->input('status'),
            'updated_at' => date('Y-m-d H:i:s')));
        return response()->json(['status' => '200', 'message' => 'Good']);
}
    public function getById($id)
    {
        $product = product::find($id);
        return response()->json(['status' => '200', 'message' => 'Okie', 'data' => $product]);
    }
    public function getSearch(Request $req){
        $product = product::where('name','like','%'.$req->key.'%')->get();
        return view('admin.product.searce',compact('product'));
    }
}
