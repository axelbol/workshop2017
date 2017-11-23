<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Devolution extends Model
{
    protected $fillable = ['id', 'devolutiontime', 'refund',
        'returnshipment', 'returndetails', 'restitutionfee', 'product_id'];

    public function product()
    {
        return $this->belongsTo('App\Product');
    }
}
