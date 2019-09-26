<?php

namespace App\Http\Controllers;

use App\Category;
use App\Order;
use App\OrderDetail;
use App\Product;
use App\Slide;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class GuestController extends Controller
{
    public function index()
    {
        $orders = Order::whereRaw('status=2')->get();
        $id = $orders->pluck('id')->all();
        $product_id_best = OrderDetail::select(DB::raw('sum(quantity) as total_quantity'), 'product_id')
            ->whereIn('order_id', $id)
            ->groupBy('product_id')
            ->orderBy('total_quantity', 'desc')
            ->get();
        $ids = array();
        foreach ($product_id_best as $item) {
            $id = $item->product_id;
            array_push($ids, $id);
        }
        $list_product_best = Product::whereIn('id', $ids)->limit(4)->get();
        $list = OrderDetail::select(DB::raw('count(product_id) as count'), 'product_id')
            ->groupBy('product_id')
            ->orderBy('count', 'desc')->get();
        $list_product_hot = array();
        foreach ($list as $key => $value) {
            array_push($list_product_hot, $value['product']);
        }
        $data = [
            'list_slide' => Slide::whereNotIn('status', [-1])->get(),
            'list_product_new' => Product::orderBy('created_at', 'DESC')->limit(4)->get(),
            'list_product_hot' => $list_product_hot,
            'list_product_best' => $list_product_best,
        ];
        return view('client.home', $data);
    }

    public function loadMore(Request $request)
    {
        if (Input::has('number')) {
            $number = Input::get('number');
            $list = Product::orderBy('created_at', 'DESC')->offset(4 * $number)->limit(4)->get();
        }
        if (Input::has('number1')) {
            $number = Input::get('number1');
            $orders = Order::whereRaw('status=2')->get();
            $id = $orders->pluck('id')->all();
            $product_id_best = OrderDetail::select(DB::raw('sum(quantity) as total_quantity'), 'product_id')
                ->whereIn('order_id', $id)
                ->groupBy('product_id')
                ->orderBy('total_quantity', 'desc')
                ->get();
            $ids = array();
            foreach ($product_id_best as $item) {
                $id = $item->product_id;
                array_push($ids, $id);
            }
            $list = Product::whereIn('id', $ids)->offset(4 * $number)->limit(4)->get();
        }
        $output = '';
        if (!$list->isEmpty()) {
            foreach ($list as $item) {
                $url = '/product/' . $item->id;
                $price = number_format($item->price);
                $output .= ' <div class="col-xl-3 col-sm-4 col-12 mb-5">
        <div class="card">
            <div class="fuild">
                <div class="img-cart">
                    <a target="_blank" href="' . $url . '">
                        <div style="  width: 100%; height: 300px;  background-size: cover; background-image:url(' . $item->productDetail->first()->thumbnail . ')"></div>
                    </a>
                </div>
                <div class="card-body">
                    <h4 class="card-text name">' . $item->name . '</h4>
                    <h3 class="card-text ">
                        <pre> <b> ' . $price . ' VNĐ</b></pre>
                    </h3>
                </div>
                <div class="overlay overlay-product-home">
                    <div style="display: flex">
                        <span style="width: 50%; text-align: center">
                            <a class="add-cart nav-link active color" href="javascript:void(0)"
                                                        data-id="' . $item->id . '"
                                                        data-price="' . $item->price . '"
                                                        data-name="' . $item->name . '"
                                                        data-thumbnail="' . $item->productDetail->first()->thumbnail . '">
                                <i class="fa fa-shopping-bag" style="font-size:30px;"></i>
                            </a>
                        </span>
                        <span style="width: 50%; text-align: center">
                            <a class="nav-link color1" href="' . $url . '">
                                <i class="fa fa-eye" style="font-size:30px"></i>
                            </a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>';
            }
            $new_number = $number + 1;
            if (Input::has('number')) {
                if ($new_number <= 2) {
                    $output .= '<div id="remove-row">
                    <button id="btn-more" data-number="' . $new_number . '" class="btn btn-outline-dark" ><h4>Xem thêm sản phẩm</h4></button>
                </div>';
                } else {
                    $output .= '<div>
                    <a href="/products?sort_by=1" class="btn btn-outline-dark" ><h4>Xem tất cả</h4></a>
                </div>';
                }
            }
            if (Input::has('number1')) {
                if ($new_number <= 2) {
                    $output .= '<div id="remove-row-1">
                    <button id="btn-more-1" data-number1="' . $new_number . '" class="btn btn-outline-dark" ><h4>Xem thêm sản phẩm</h4></button>
                </div>';
                } else {
                    $output .= '<div>
                    <a href="/products?sort_by=2" class="btn btn-outline-dark" ><h4>Xem tất cả</h4></a>
                </div>';
                }
            }
            echo $output;
        }
    }

    public function searchHome(Request $request)
    {
        $list = Product::whereNotIn('status', [-1]);
        if (Input::get('keyword')) {
            $list = $list->where('name', 'like', '%' . $request->get('keyword') . '%');
        }
        $category_id = Input::get('category_id');
        if ($category_id) {
            $list = $list->where('category_id', $category_id);
        } else {
            $category_id = 0;
        }
        $sort_by = Input::get('sort_by');
        if ($sort_by) {
            switch ($sort_by) {
                case 1:
                    $list = $list->orderBy('created_at', 'desc');
                    break;
                case 2:
                    $orders = Order::whereRaw('status=2')->get();
                    $id = $orders->pluck('id')->all();
                    $product_id_best = OrderDetail::select(DB::raw('sum(quantity) as total_quantity'), 'product_id')
                        ->whereIn('order_id', $id)
                        ->groupBy('product_id')
                        ->orderBy('total_quantity', 'desc')
                        ->get();
                    $ids = array();
                    foreach ($product_id_best as $item) {
                        $id = $item->product_id;
                        array_push($ids, $id);
                    }
                    $list = $list->whereIn('id', $ids);
                    break;
                case 3:
                    $list = $list->orderBy('name', 'asc');
                    break;
                case 4:
                    $list = $list > orderBy('name', 'desc');
                    break;
                case 5:
                    $list = $list->orderBy('price', 'asc');
                    break;
                case 6:
                    $list = $list->orderBy('price', 'desc');
                    break;
            }
        }
        $list = $list->paginate(6);
        $data = [
            'list_product' => $list->appends(Input::except('page')),
            'currentPage' => $request->get('page'),
            'currentCategoryId' => $request->get('category_id'),
            'currentKeyword' => $request->get('keyword'),
            'currentSortBy' => $request->get('sort_by'),
            'list_category' => Category::all()
        ];
        return view('client.product', $data);
    }
}
