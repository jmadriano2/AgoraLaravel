<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    public function users(){
        return $this->belongsToMany(User::class,'user_city','city_id','user_id');
    }

    public function government(){
        return $this->hasMany(Government::class);
    }
}
