<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductTag extends Model
{
    //
     //
    use SoftDeletes;
  
    protected $dates = ['deleted_at'];
    
    protected $table = "product_tag";
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'product_id',
        'tag_id',
    ];

}
