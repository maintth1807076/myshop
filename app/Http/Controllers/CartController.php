<?php

namespace App\Http\Controllers;

use App\Order;
use App\OrderDetail;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function MongoDB\BSON\toJSON;

class CartController extends Controller
{
    public function checkoutCart(Request $request)
    {
        try {
            $cart = $request->input('cart');
            $ship = $request->input('ship');
            DB::beginTransaction();
            $order = new Order();
            $order->ship_name = $ship['ship_name'];
            $order->ship_address = $ship['ship_address'];
            $order->ship_phone = $ship['ship_phone'];
            $order->total_price = 0;
            $order->save();
            $order_id = $order->id;
            $order_details = array();
            foreach ($cart as $key => $cart_item) {
                $product = Product::find($cart_item['id']);
                if ($product == null || $product->status != 1) {
                    return;
                }
                $quantity = $cart_item['quantity'];
                $order_detail = new OrderDetail();
                $order_detail->order_id = $order_id;
                $order_detail->product_id = $product->id;
                $order_detail->quantity = $quantity;
                $order_detail->unit_price = $product->price;
                $order->total_price += $order_detail->unit_price * $order_detail->quantity;
                $order_detail->save();
                array_push($order_details, $order_details);
            }
            $order->save();
            DB::commit();
            return $order;
        } catch (\Exception $exception) {
            DB::rollBack();
            return 'Có lỗi xảy ra.' . $exception->getMessage();
        }
    }
}
