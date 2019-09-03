<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $table = "products";
    public $timetamps = false;
    public function categories(){
        return $this->belongsTo('App\Category','id_categories','id');
    }
}




