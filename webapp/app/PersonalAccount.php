<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PersonalAccount extends Model
{
    protected $fillable = ['first_name', 'last_name', 'email', 'type', 'password'];

    public function products()
    {
        return $this->hasMany('App\Product');
    }
}
