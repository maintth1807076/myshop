<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GuestController extends Controller
{
    public function filterByName(Request $request)
    {
//        $product = Product::query();
//        if ($request->has('name')) {
//            $product->where('name', 'LIKE', '%' .$request->name. '%');
//        }
//        $data = [
//            'list' => $product->get()
//        ];
//        return $data;
        $users = DB::table('products')
            ->where('name', 'like','Mô_')
            ->get();
        return $users;
    }
    public function showForm()
    {
        return view('admin.image.form');
    }
}
