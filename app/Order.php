<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function details()
    {
        return $this->hasMany('App\OrderDetail', 'order_id');
    }
    public function getStatusLabelAttribute()
    {
        switch ($this->status) {
            case -1:
                return 'Canceled';
                break;
            case 0:
                return 'Confirming';
                break;
            case 1:
                return 'Confirmed';
                break;
            case 2:
                return 'DONE';
                break;
            default:
                return 'Unknown';
                break;
        }
    }
}
