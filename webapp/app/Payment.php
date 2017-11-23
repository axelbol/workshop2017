<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = ['id', 'paypal', 'emailpayment', 'pickpayment', 'paymentdescription', 'product_id'];

    public function product()
    {
        return $this->belongsTo('App\Product');
    }
}
