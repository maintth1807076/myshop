<?php

namespace App\Http\Controllers;

use App\Order;
use App\OrderDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
    public function changeStatus($id)
    {
        $obj = Order::find($id);
        if ($obj == null) {
            return response()->json(['msg' => 'Not found'], 404);
        }
        $obj->status = Input::get('status');
        $obj->save();
        return redirect()->back();
    }
    public function changeStatusMany(Request $request)
    {
        DB::table('orders')->whereIn('id', Input::get('ids'))->update(['status' => $request->get('status')]);
        return redirect()->back();
    }
    public function getDataToTime()
    {
        $start_date = Input::get('startDate');
        $end_date = Input::get('endDate');
        $orders = Order::select()
            ->whereBetween('orders.created_at', array($start_date . ' 00:00:00', $end_date . ' 23:59:59'))
            ->orderBy('created_at','desc')
            ->get();
        foreach ($orders as $data) {
            $data->statusLabel = $data->getStatusLabelAttribute();
        }
        return response()->json(['list_obj' => $orders], 200);
    }
    public function getChartData()
    {
        $start_date = Input::get('startDate');
        $end_date = Input::get('endDate');
        $chart_data = Order::select(DB::raw('sum(total_price) as revenue'), DB::raw('created_at as day'))
//            ->where(['status' => 2])
            ->whereBetween('orders.created_at', array($start_date . ' 00:00:00', $end_date . ' 23:59:59'))
            ->groupBy('day')
            ->orderBy('day', 'desc')
            ->get();
        return $chart_data;
    }
}
