<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestPassword;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
    public function changePassword(RequestPassword $requestPassword){
        $input = $requestPassword->all();
        $user = User::find(auth()->user()->id);

        if(!Hash::check($input['password_old'], $user->password)){
            return redirect()->back()->with('danger','Mật khẩu cũ không đúng');
        }else{
            $user->password = bcrypt($requestPassword->password);
            $user->save();
            return redirect()->back()->with('success','Cập nhật thành công');
        }
        dd($requestPassword->all());
    }
}
