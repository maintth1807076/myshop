<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class GuestController extends Controller
{
    public function loadMore(Request $request)
    {
        $output = '';
        $number = Input::get('number');
        $list = Product::orderBy('created_at', 'DESC')->offset(4 * $number)->limit(4)->get();
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
            if($new_number <=2){
                $output .= '<div id="remove-row">
                    <button id="btn-more" data-number="' . $new_number . '" class="btn btn-outline-dark" ><h4>Xem thêm sản phẩm</h4></button>
                </div>';
            } else {
                $output .= '<div id="remove-row">
                    <a href="/products" class="btn btn-outline-dark" ><h4>Xem tất cả</h4></a>
                </div>';
            }
            echo $output;
        }
    }

    public function searchHome(Request $request)
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
            'list_product' => $list->appends(Input::except('page')),
            'currentPage' => $request->get('page'),
            'currentCategoryId' => $request->get('category_id'),
            'currentKeyword' => $request->get('keyword'),
            'list_category' => Category::all()
        ];
        return view('client.product', $data);
    }
}
