<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\ProductDetail;
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
        $list = Product::whereNotIn('status', [-1])->orderBy('id', 'asc')->paginate(2);
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
        return view('admin.product.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response|string
     */
    public function store(Request $request)
    {
        $product = new Product();
        $product->name = $request->get('name');
        $product->price = $request->get('price');
        $product->description = $request->get('description');
        $product->detail = $request->get('detail');
        $product->category_id = $request->category_id;
        $product->save();
        foreach ($request->images as $image) {
            $image_name = $image->getRealPath();;
            Cloudder::upload($image_name, null);
            $result = Cloudder::getResult();
            $image_id = $result['public_id'] . '.' . $result['format'];
            $product_detail = new ProductDetail();
            $product_detail->product_id = $product->id;
            $product_detail->thumbnail = $image_id;
            $product_detail->save();
        }
        return redirect('/admin/products');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
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
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = product::find($id);
        $data = ['product' => $product];
        return view('admin.product.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = product::find($id);
        $product->name = $request->get('name');
        $product->price = (double)$request->get('price');
        $product->thumbnail = $request->get('thumbnail');
        $product->description = $request->get('description');
        $product->detail = $request->get('detail');
        $product->category_id = $request->get('category_id');
        $product->save();
        return redirect('/admin/products');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Product::find($id);
        if ($item == null) {

        }
        $item->status = -1;
        $item->save();
        return response()->json(['status' => '200', 'message' => 'Okie']);
    }
    public function changeStatus(Request $request)
    {
        $data = Product::whereIn('id', $request->input('ids'));
        $data->update(array(
            'status' => (int)$request->input('status'),
            'updated_at' => date('Y-m-d H:i:s')));
        return response()->json(['status' => '200', 'message' => 'Good']);
    }
}
