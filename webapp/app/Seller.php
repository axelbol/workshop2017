<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Seller extends Model
{
    use SoftDeletes;

    protected $table = "sellers";

    public $primaryKey='id';

    protected $fillable = ['name', 'last_name', 'address', 'email', 'phono'];

    protected $dates = ['deleted_at'];
}
