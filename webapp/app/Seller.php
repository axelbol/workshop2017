<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    protected $table = "sellers";

    protected $fillable = ['name', 'last_name', 'address', 'email', 'phono'];
}
