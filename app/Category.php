<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "categories";
    protected $primaryKey ="id";
    protected $guarded=[];
    public function products(){
        return $this->hasMany('App\product','id_categories');
    }
}
