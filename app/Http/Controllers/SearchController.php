<?php

namespace App\Http\Controllers;

use App\product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function getSearch(Request $req){
        $product = product::where('name','like','','%'.$req->key.'%')
            ->get();
        return view('admin.product.searce',compact('product'));
    }

}
