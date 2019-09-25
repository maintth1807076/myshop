<?php

namespace App\Http\Controllers;

use App\Order;
use App\OrderDetail;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
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
            $vnp_TmnCode = "FACK02ZN";
            $vnp_HashSecret = "NGICKMDRLTTBANGKSCYBDFSZLEASMREP";
            $vnp_Url = "http://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
            $vnp_Returnurl = 'http://' . $request->getHttpHost() . '/vnpay-return';
            $vnp_TxnRef = $order_id;
            $vnp_OrderInfo = 'Thanh toán đơn hàng';
            $vnp_OrderType = 'billpayment';
            $vnp_Amount = $order->total_price * 100;
            $vnp_Locale = 'vn';
            $vnp_BankCode = 'NCB';
            $vnp_IpAddr = $request->ip();
            $inputData = array(
                "vnp_Version" => "2.0.0",
                "vnp_TmnCode" => $vnp_TmnCode,
                "vnp_Amount" => $vnp_Amount,
                "vnp_Command" => "pay",
                "vnp_CreateDate" => date('YmdHis'),
                "vnp_CurrCode" => "VND",
                "vnp_IpAddr" => $vnp_IpAddr,
                "vnp_Locale" => $vnp_Locale,
                "vnp_OrderInfo" => $vnp_OrderInfo,
                "vnp_OrderType" => $vnp_OrderType,
                "vnp_ReturnUrl" => $vnp_Returnurl,
                "vnp_TxnRef" => $vnp_TxnRef,
            );

            if (isset($vnp_BankCode) && $vnp_BankCode != "") {
                $inputData['vnp_BankCode'] = $vnp_BankCode;
            }
            ksort($inputData);
            $query = "";
            $i = 0;
            $hashdata = "";
            foreach ($inputData as $key => $value) {
                if ($i == 1) {
                    $hashdata .= '&' . $key . "=" . $value;
                } else {
                    $hashdata .= $key . "=" . $value;
                    $i = 1;
                }
                $query .= urlencode($key) . "=" . urlencode($value) . '&';
            }

            $vnp_Url = $vnp_Url . "?" . $query;
            if (isset($vnp_HashSecret)) {
                $vnpSecureHash = hash('sha256', $vnp_HashSecret . $hashdata);
                $vnp_Url .= 'vnp_SecureHashType=SHA256&vnp_SecureHash=' . $vnpSecureHash;
            }
            $returnData = array('code' => '00'
            , 'message' => 'success'
            , 'data' => $vnp_Url);
            DB::commit();
            return response()->json($returnData, 200);
        } catch (\Exception $exception) {
            DB::rollBack();
            return 'Có lỗi xảy ra.' . $exception->getMessage();
        }
    }
    public function return(){
        $vnp_TmnCode = "FACK02ZN";
        $vnp_HashSecret = "NGICKMDRLTTBANGKSCYBDFSZLEASMREP";
        $vnp_Url = "http://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
        $vnp_SecureHash = $_GET['vnp_SecureHash'];
        $inputData = array();
        foreach ($_GET as $key => $value) {
            if (substr($key, 0, 4) == "vnp_") {
                $inputData[$key] = $value;
            }
        }
        unset($inputData['vnp_SecureHashType']);
        unset($inputData['vnp_SecureHash']);
        ksort($inputData);
        $i = 0;
        $hashData = "";
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashData = $hashData . '&' . $key . "=" . $value;
            } else {
                $hashData = $hashData . $key . "=" . $value;
                $i = 1;
            }
        }
        $secureHash = hash('sha256',$vnp_HashSecret . $hashData);
        $order_id = $_GET['vnp_TxnRef'];
        Log::info($order_id);
        $data = [
            'secureHash' => $secureHash,
            'order' => Order::find($order_id)
        ];
        return view('client.vnpay-return', $data);
    }
}
