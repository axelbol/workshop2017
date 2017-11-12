<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['id', 'title', 'subtitle', 'category', 'isbn', 'condition', 'conditiondescription',
'productdescription', 'format', 'duration', 'ad', 'buynowprice', 'allowoffer', 'atleastoffer', 'atleastofferis',
'lowoffer', 'lowofferis', 'startprice', 'buyprice', 'reserveprice', 'cuantity', 'lot', 'cuantitylot', 'private',
'donation', 'paypal', 'emailpayment', 'pickpayment', 'paymentdescription', 'return', 'devolutiontime', 'refund',
'returnshipment', 'returndetails', 'restitutionfee', 'domesticshipment', 'shipmentservice', 'shipmentcost', 'freeshipment',
'packagetype', 'x', 'y', 'z', 'kilograms', 'grams', 'localization'];

    public function personalaccount()
    {
        return $this->belongsTo('App\PersonalAccount');
    }
}
