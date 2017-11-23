<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Storage extends Model
{
    protected $fillable = ['id', 'quantity', 'lot', 'quantitylot', 'product_id'];

    public function product()
    {
        return $this->belongsTo('App\Product');
    }
}
