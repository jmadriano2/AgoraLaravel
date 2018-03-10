<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function government(){
        return $this->belongsTo(Government::class);
    }

    public function budget(){
        return $this->hasMany(Budget::class);
    }

    public function comment(){
        return $this->hasMany(Comment::class);
    }

    public function mood(){
        return $this->hasMany(Mood::class);
    }
}
