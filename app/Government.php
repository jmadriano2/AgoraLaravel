<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Government extends Model
{
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function city(){
        return $this->belongsTo(City::class);
    }

    public function project(){
        return $this->hasMany(Project::class);
    }
}
