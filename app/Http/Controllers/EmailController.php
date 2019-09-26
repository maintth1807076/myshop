<?php

namespace App\Http\Controllers;

use App\Mail\OrderShipped;
use App\Product;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Mail;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class EmailController extends Controller
{
    public function send(Request $request)
    {
        $data = array(
            'username' => 'Tuấn Anh',
            'namegift' => 'Hello world',
            'transaction' => 'as');

        Mail::send('mail.send', $data, function ($message) {
            $message->to('keomut5sao@gmail.com', 'Tuấn Anh')->subject('Thông Báo Về Đơn Hàng');
            $message->from('keomut5sao@gmail.com', 'Toys Shop');
        });

        return "Okie";
    }

    public function sendMailQuangCao()
    {
        $products = Product::whereIn('status', [2])->get();
        $data = array();
        foreach ($products as $product){
            array_push($data, $product);
        }
        $users = User::whereIn('status', [2])->get();
//        $receiver = array();
////        foreach ($users as $user){
////             $email = $user->email;
////            array_push($receiver, $email);
////        }
        $email =$users->first()->email;
        Mail::send('mail.send-product', $data, function ($message) use ($email) {
            $message->to('')->subject('Quảng cáo sản phẩm');
                $message->from('keomut5sao@gmail.com', 'Toys Shop');
            });
        return $data[0];
    }
}
