<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'price', 'category_id'
    ];

    public function images()
    {
        return $this->morphMany('App\Image', 'imageable');
    }

    public function orderItems()
    {
        return $this->hasMany('App\OrderItem');
    }
}
