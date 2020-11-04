<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductCart extends Model
{
    use SoftDeletes;

    public $table = 'product_cart';

    public $fillable = [
        'product_id',
        'cart_id',
        'quantity'
    ];

    /*public function product(){
        return $this->belongsTo('App\Product', 'product_id');
    }

    public function cart(){
        return $this->belongsTo('App\Cart', 'cart_id');
    }*/
}
