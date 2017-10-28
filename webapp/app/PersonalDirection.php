<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PersonalDirection extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $fillable = ['country', 'state', 'city', 'address', 'code_postal', 'phone_number', 'cellular_number'];

    public function personalaccount()
    {
        return $this->belongsTo('App\PersonalAccount');
    }
}
