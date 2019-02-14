<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cat extends Model
{
    protected $fillable= [
    	'name', 'breed_id', 'dob'
    ];


    public function scopeBreedIdIsFive($query)
    {
    	return $query->where('breed_id', 5)
    				->where('name', 'abc')
					->orderBy('name', 'desc');
    }
}
