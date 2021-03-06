<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    public $table = 'products';

    public $fillable = [
        'name',
        'sku',
        'description',
    ];

    public function carts(){
        return $this->belongsToMany('App\Cart', 'product_cart');
    }
}
