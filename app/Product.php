<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
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
        'name', 'orig_price', 'new_price', 'percentage', 'stock', 'leadtime', 'status', 'sizes', 'colors', 'material', 'reviews',
        'imagefile1', 'imagefile2', 'imagefile3', 'apps', 'description', 'deliverables', 'user_id',
    ];

    /**
     * The attributes that are preset to default values.
     *
     * @var array
     */
    protected $attributes = [
        'brand' => 'Generic',
    ];

    protected $table = "products";

    public function categories() {
        return $this->belongsToMany(Category::class, 'product_id', 'id');
    }

    public function tags() {
        return $this->belongsToMany(Tag::class, 'product_id', 'id');
    }

    public function users() {
        return $this->belongsToMany(User::class);
    }

    public function orders() {
        return $this->belongsToMany(Order::class)->withPivot('price', 'qty')->withTimestamps();
    }

}
