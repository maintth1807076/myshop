<?php

namespace App\Http\Controllers;

use App\Mail\OrderShipped;
use Illuminate\Http\Request;
use Mail;

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
            $message->to('keomut5sao@gmail.com', 'Tuấn Anh')->subject('Thông Báo Về Đơn Hàng');
            $message->from('keomut5sao@gmail.com', 'Toys Shop');
        });

        return "Okie";
    }

}
