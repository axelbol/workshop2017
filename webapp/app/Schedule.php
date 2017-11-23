<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $fillable = ['id', 'duration', 'ad', 'product_id'];

    public function product()
    {
        return $this->belongsTo('App\Product');
    }
}
