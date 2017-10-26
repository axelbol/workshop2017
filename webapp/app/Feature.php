<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Feature extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $fillable = ['feature', 'desc','product_id'];
    public function product()
    {
        return $this->belongsTo('App\Product');
    }
}
