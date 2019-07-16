<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    public function Order()
    {
        return $this->belongsToMany('App\User', 'id');
    }
}
