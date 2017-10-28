<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PersonalAccount extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $fillable = ['first_name', 'last_name', 'email', 'password'];

    public function personaldirections()
    {
        return $this->hasMany('App\PersonalDirection');
    }

    public function products()
    {
        return $this->hasMany('App\Product');
    }
}
