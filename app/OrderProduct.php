<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrderProduct extends Model
{
    //
    use SoftDeletes;
  
    protected $dates = ['deleted_at'];
    
    protected $table = "order_product";
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'product_id',
        'order_id',
        'qty',
        'price',
    ];

}
