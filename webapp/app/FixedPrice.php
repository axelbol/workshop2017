<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FixedPrice extends Model
{
    protected $fillable = ['id', 'buynowprice', 'allowoffer', 'atleastoffer',
        'atleastofferis', 'lowoffer', 'lowofferis', 'product_id'];

    public function product()
    {
        return $this->belongsTo('App\Product');
    }
}
