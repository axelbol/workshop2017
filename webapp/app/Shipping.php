<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shipping extends Model
{
    protected $fillable = ['id', 'domesticshipment', 'shipmentservice',
        'shipmentcost', 'freeshipment', 'product_id'];

    public function product()
    {
        return $this->belongsTo('App\Product');
    }
}
