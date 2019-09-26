<?php

namespace App\Http\Controllers;

use App\Order;
use App\Product;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class EmailController extends Controller
{
//cài thằng này: composer require swiftmailer/swiftmailer
    public function send(Request $request)
    {
//// mail::to('tinhgtd00580@fpt.edu.vn')->send(new OrderShipped('Chào Tình', 'Thầy đói.'));
// mail::to('xuanhung2401@gmail.com')->send(new OrderShipped('Chào Tùng', 'Thầy rất đói.'));
// return response()->json(['message' => 'Request completed']);

        $data = array(
            'username' => 'Tuấn Anh',
            'namegift' => 'Hello world',
            'transaction' => 'as');

        Mail::send('mail.send', $data, function ($message) {
            $message->to('maintth1807076@fpt.edu.vn', 'Tuấn Anh')->subject('Thông Báo Về Đơn Hàng');
            $message->from('keomut5sao@gmail.com', 'Toys Shop');
        });
        return response()->json(['message' => 'Request completed']);

    }

    public function sendMailQuangCao()
    {
        $products = Product::whereIn('status', [2])->get();
        $data = array(
            'products' => $products
        );
        $users = User::whereIn('status', [2])->get();
        $receiver = array();
        foreach ($users as $user) {
            $email = $user->email;
            array_push($receiver, $email);
        }
        $email = $users->first()->email;
        if ($products->isEmpty() || $user->isEmpty()) {
            return;
        }
        Mail::send('mail.send-product', $data, function ($message) use ($email, $receiver) {
            $message->to($email, 'Mai')->cc($receiver)->subject('Quảng cáo sản phẩm');
            $message->from('keomut5sao@gmail.com', 'Toys Shop');
        });
        if (count(Mail::failures()) > 0) {

            foreach (Mail::failures() as $email_address) {
                echo " - $email_address <br />";
            }
        } else {
            return "Gửi thư thành công";
        }
    }

    public function sendMailCheckOrder(Request $request)
    {
        $orders = Order::whereIn('id', $request->input('ids'))->get();
        foreach ($orders as $order) {
            $data = array(
                'order' => $order
            );
            $email = $order->ship_email;
            Mail::send('mail.send-order', $data, function ($message) use ($email) {
                $message->to($email)->subject('Đơn hàng của bạn đang tới');
                $message->from('keomut5sao@gmail.com', 'Toys Shop');
            });
        }
        return "Gửi thành công";
    }

    public function sendMailNoticeOrder(Request $request)
    {
        $order = Order::find((int)$request->get('id'));
        $data = array(
            'order' => $order);
        $email = $order->ship_email;
        Mail::send('mail.send-notice', $data, function ($message) use ($email) {
            $message->to($email)->subject('Đơn hàng của bạn đang chờ');
            $message->from('keomut5sao@gmail.com', 'Toys Shop');
        });
        return redirect('/home');
    }
}
