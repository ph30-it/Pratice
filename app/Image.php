<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'path', 'imageable_type', 'imageable_id'
    ];

    public function imageable()
{
    return $this->morphTo();
}
}
