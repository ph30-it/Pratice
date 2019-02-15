<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cat extends Model
{
    protected $fillable= [
    	'name', 'breed_id', 'age'
    ];

    public function breed()
    {
    	return $this->belongsTo('App\Breed');
    }
}
