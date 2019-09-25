<?php

namespace App\Http\Controllers;

use App\Order;
use App\OrderDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class OrderDetailController extends Controller
{
    public function getPieChartData()
    {
        $start_date = Input::get('startDate');
        $end_date = Input::get('endDate');
        $orders = Order::whereRaw('status=2')->get();
        $id = $orders->pluck('id')->all();
        $chart_data = OrderDetail::select(DB::raw('sum(quantity) as total_quantity'), 'product_id')
            ->whereBetween('order_details.created_at', array($start_date . ' 00:00:00', $end_date . ' 23:59:59'))
            ->whereIn('order_id',$id)
            ->groupBy('product_id')
            ->orderBy('total_quantity', 'desc')
            ->get();
        return $chart_data;
    }
}
