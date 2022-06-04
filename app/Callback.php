<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Callback extends Model
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
        'name',
        'phone',
    ];

    protected $table = "callbacks";

    public function user() {
        return $this->belongsTo(User::class);
    }


}
