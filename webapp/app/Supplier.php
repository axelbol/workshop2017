<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $table="suppliers";

    protected $fillable=['companyName', 'contactName', 'addres', 'product', 'phono', 'email'];
}
