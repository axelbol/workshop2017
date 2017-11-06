<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    protected $table = "sellers";

    public $primaryKey='id';

    protected $fillable = ['name', 'last_name', 'address', 'email', 'phono'];
}
