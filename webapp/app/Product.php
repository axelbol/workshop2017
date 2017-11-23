<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['id', 'title', 'subtitle', 'category', 'isbn',
        'condition', 'conditiondescription',
        'productdescription', 'format', 'private',
        'donation', 'return','localization'];


    public function auctionmode()
    {
        return $this->hasOne('App\AuctionMode');
    }
    public function devolution()
    {
        return $this->hasOne('App\Devolution');
    }
    public function donation()
    {
        return $this->hasOne('App\Donation');
    }
    public function fixedprice()
    {
        return $this->hasOne('App\FixedPrice');
    }
    public function package()
    {
        return $this->hasOne('App\Package');
    }
    public function payment()
    {
        return $this->hasOne('App\Payment');
    }
    public function personalaccount()
    {
        return $this->belongsTo('App\PersonalAccount');
    }
    public function schedule()
    {
        return $this->hasOne('App\Schedule');
    }
    public function shipping()
    {
        return $this->hasOne('App\Shipping');
    }
    public function storage()
    {
        return $this->hasOne('App\Storage');
    }

}
