<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'product_id', 'order_id'
    ];

    public function product()
    {
        return $this->belongsTo('App\Product');
    }
}
