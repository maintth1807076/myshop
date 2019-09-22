<?php

namespace App\Http\Controllers;

use App\Order;
use App\OrderDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class OrderController extends Controller
{
    public function index()
    {
        $choosedStatus = Input::get('status'); // default all.
        $product_id = Input::get('product_id');

        if((!Input::has('status') || $choosedStatus== 3)){
            $choosedStatus = 3;
            $orders = Order::orderByRaw('created_at DESC')->paginate(10);
        } else {
            $orders = Order::where(['status' => $choosedStatus])->orderByRaw('created_at DESC')->paginate(10);
        }

        if (Input::has('product_id')){
            $details = OrderDetail::where('product_id', $product_id)->get();
            $order_ids = array();
            for ($i = 0 ;$i<count($details);$i++){
                $order_id = $details[$i] -> order_id;
                $order_ids[] = $order_id;
            }
            $orders = Order::whereIn('id',$order_ids)->paginate(10);
        }
        if (Input::has('created_at')){
            $created_at = Input::get('created_at');
            $orders = Order::where('created_at', '>=', $created_at.' 00:00:00')
                ->where('created_at', '<=', $created_at.' 23:59:59')
                ->where('status', '=', '2')
                ->paginate(10);
        }
        return view('admin.order.list')
            ->with('choosedStatus', $choosedStatus)
            ->with('orders', $orders)
            ->with('product_id', $product_id)
            ->with('null', null);

    }
}
