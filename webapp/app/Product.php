<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $fillable = ['title', 'subtitle', 'isbn', 'condition', 'description'];

    public function personalaccount()
    {
        return $this->belongsTo('App\PersonalAccount');
    }
    public function productphotos()
    {
        return $this->hasMany('App\ProductPhoto');
    }
    public function features()
    {
        return $this->hasMany('App\Feature');
    }
}
