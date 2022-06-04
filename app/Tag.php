<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tag extends Model
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
        'title', 'user_id', 'product_id',
    ];

    protected $table = "tags";

    public function products() {
        return $this->belongsToMany(Product::class);
    }
    
}
