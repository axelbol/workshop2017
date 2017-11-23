<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    protected $fillable = ['id', 'product_id'];

    public function product()
    {
        return $this->belongsTo('App\Product');
    }
}
