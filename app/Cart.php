<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cart extends Model
{
    use SoftDeletes;

    public $table = 'carts';

    public $fillable = [
        'status',
    ];

    public function products(){
        return $this->belongsToMany('App\Product', 'product_cart')->withPivot('quantity');
    }
}
