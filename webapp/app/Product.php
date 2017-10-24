<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $fillable = ['title', 'subtitle', 'category', 'condition', 'description'];

    public function personalaccount()
    {
        return $this->belongsTo('App\PersonalAccount');
    }
}
