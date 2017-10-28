<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['title', 'subtitle', 'category', 'condition', 'description'];

    public function personalaccount()
    {
        return $this->belongsTo('App\PersonalAccount');
    }
}
