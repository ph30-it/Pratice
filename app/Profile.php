<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'address', 'user_id'
    ];
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
