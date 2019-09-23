<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    public $incrementing = false;
    public function product()
    {
        return $this->belongsTo('App\Product', 'product_id')->attributes['product'];
    }
    public function getProductAttribute(){
        $product = Product::find($this->product_id);
        return $product;
    }
}
