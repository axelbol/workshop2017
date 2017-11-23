<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AuctionMode extends Model
{
    protected $fillable = ['id', 'startprice', 'buyprice', 'reserveprice'];

    public function product()
    {
        return $this->belongsTo('App\Product');
    }
}
