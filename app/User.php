<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use Notifiable;

    use SoftDeletes;
    protected $dates = ['deleted_at'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'phone', 'password',
    ];

    /**
     * The attributes that are preset to default values.
     *
     * @var array
     */
    protected $attributes = [
        'avatar' => 'user.png',
        'payment' => 'full', //meaning someone can still use both payment methods
        'role_id' => '1',
        'street' => 'unknown',
        'town' => 'unknown',
        'district' => 'unknown',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function messages() {
        return $this->hasMany(Message::class);
    }

    public function callbacks() {
        return $this->hasMany(Callback::class);
    }

    public function products() {
        return $this->belongsToMany(Product::class);
    }


}
