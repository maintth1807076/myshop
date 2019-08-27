<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use JD\Cloudder\Facades\Cloudder;

class DemoImageUploadController extends Controller
{
    public function create(){
        return view('admin.image.form');
    }
    public function upload(Request $request){
        $image_name = $request->file('image')->getRealPath();;
        Cloudder::upload($image_name, null);
        $result = Cloudder::getResult();
        $image_id = $result['public_id'].'.'.$result['format'];
        return $image_id;
    }
}
