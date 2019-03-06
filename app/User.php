<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function scopeIsAdmin($query, $role, $name, $email)
    {
        return $query->where('role', $role)
                    ->where('name', $name)
                    ->where('email', $email);
    }

    public function hoso()
    {
        return $this->hasMany('App\Profile');
    }


    public function roles()
    {
        return $this->belongsToMany('App\Role');
    }

    public function images()
    {
        return $this->morphMany('App\Image', 'imageable');
    }

    public function orderItems()
    {
        return $this->hasManyThrough('App\OrderItem', 'App\Order');
    }

    public function orders()
    {
        return $this->hasMany('App\Order');
    }
}
