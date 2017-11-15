<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductTrial extends Model
{
    protected $fillable = ['imagePath', 'title', 'description', 'price'];
}
