<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $fillable = ['id', 'packagetype', 'x', 'y', 'z',
        'kilograms', 'grams', 'product_id'];

    public function product()
    {
        return $this->belongsTo('App\Product');
    }
}
