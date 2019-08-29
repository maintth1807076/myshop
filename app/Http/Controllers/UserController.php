<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function show(){
        return view('user.information');
    }
    public function changeName(Request $request){
        $user = Auth::user();
        $user->name = $request->name;
        $user->save();
        return view('user.information');
    }
    public function changeAvatar(Request $request){
        $user = Auth::user();
        $user->avatar = $request->avatar;
        $user->save();
        return view('user.information');
    }
}
