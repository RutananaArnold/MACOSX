<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    //
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'qty', 'price', 'total', 'note', 'user_id', 'order_id', 
        'name', 'email', 'phone', 'street', 'town', 'district', 'delivery', 'pay_method',
    ];

    /**
     * The attributes that are preset to default values.
     *
     * @var array
     */
    protected $attributes = [
        'status' => 'being processed',
    ];

    protected $table = "orders";

    public function products() {
        return $this->belongsToMany(Product::class)->withPivot('price', 'qty')->withTimestamps();
        //return $this->belongsToMany(Product::class, 'order_product', 'order_id', 'product_id');
    }


}
