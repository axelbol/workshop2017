<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = "orders";
    public $primaryKey='id';
    protected $fillable = ['address', 'name', 'last_name', 'total_price', 'nit'];
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
