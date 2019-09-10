<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

//    protected $table = "products";
//    protected $primaryKey ="id";
//    protected $guarded=[];
    public function categories() {
        return $this->belongsTo(Category::class,'category_id','id');
    }

    public function productDetail(){
        return $this->hasMany(ProductDetail::class);
    }
}




