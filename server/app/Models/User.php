<?php

namespace App\Models;

use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

    protected $fillable = [
        'name', 'login', 'password',
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function message () {
        return $this->hasMany('App\Models\Message');
    }
    public function topic () {
        return $this->hasMany('App\Models\Message');
    }
}

