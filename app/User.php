<?php

namespace App;

use Illuminate\Notifications\Notifiable;
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
        'username', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function profile(){
        return $this->hasOne(Profile::class);
    }

    public function government(){
        return $this->hasOne(Government::class);
    }

    public function comment(){
        return $this->hasMany(Comment::class);
    }

    public function mood(){
        return $this->hasMany(Mood::class);
    }

    public function cities(){
        return $this->belongsToMany(City::class,'user_city', 'user_id', 'city_id');
    }
}
