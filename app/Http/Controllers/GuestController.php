<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function loadMore(Request $request)
    {
        $output = '';
        $list = Product::orderBy('created_at', 'DESC')->offset(10)->limit(4)->get();
        if (!$list->isEmpty()) {
            foreach ($list as $item) {
                $url = '/product/' . $item->id;
                $price = number_format($item->price);
                $output .= '<div class="col-xl-3 col-sm-4 col-12 mb-5">
                    <div class="card">
                        <div class="fuild">
                            <div class="img-cart">
                                <a target="_blank" href="' . $url . '">
                                    <div
                                        style="  width: 100%; height: 300px;  background-size: cover; background-image:url(' . $item->productDetail->first()->thumbnail . ')"></div>
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
            $output .= '<div id="remove-row">
                    <button id="btn-more" class="btn btn-outline-dark" ><h4>Xem thêm sản phẩm</h4></button>
                </div>';
            echo $output;
        }
    }
}
