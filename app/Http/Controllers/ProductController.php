<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\ProductDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use JD\Cloudder\Facades\Cloudder;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $list = Product::orderBy('created_at', 'desc')->whereNotIn('status', [-1]);
        if (Input::get('keyword')) {
            $list = $list->where('name', 'like', '%' . $request->get('keyword') . '%');
        }
        $category_id = Input::get('category_id');
        if ($category_id) {
            $list = $list->where('category_id', $category_id);
        } else {
            $category_id = 0;
        }
        $list = $list->paginate(8);
        $data = [
            'list' => $list->appends(Input::except('page')),
            'currentPage' => $request->get('page'),
            'currentCategoryId' => $request->get('category_id'),
            'currentKeyword' => $request->get('keyword'),
            'categories' => Category::all()
        ];
        return view('admin.product.list', $data);
    }

    public function create()
    {
        return view('admin.product.form');
    }

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
            $image_id = 'http://res.cloudinary.com/kuramakyubi/image/upload/c_fit,h_300,w_300/' . $result['public_id'] . '.' . $result['format'];
            $product_detail = new ProductDetail();
            $product_detail->product_id = $product->id;
            $product_detail->thumbnail = $image_id;
            $product_detail->save();
        }
        return redirect('/admin/products');
    }

    public function show($id)
    {
        $data = [
            'item' => Product::find($id),
            'list' => Product::find($id)->productDetail
        ];
        return view('admin.product.detail', $data);
    }

    public function edit($id)
    {
        $data = [
            'item' => Product::find($id),
            'list' => Product::find($id)->productDetail
        ];
        return $data;
    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->name = $request->get('name');
        $product->price = $request->get('price');
        $product->description = $request->get('description');
        $product->detail = $request->get('detail');
        $product->category_id = $request->category_id;
        $product->save();
        return redirect('/admin/products');

    }

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
        return response()->json(['status' => '200', 'message' => 'Okie']);
    }
}
