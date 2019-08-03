<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name',
        'email', 
        'password', 
        'login',
    ];

    protected $hidden = [
        'password', 
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    //fix position of {
    public function tweets() {
        return $this->hasMany('App\TwittAdd', 'user_id', 'id');
    }
    //fix position of {
    public function comment() {
        return $this->hasMany('App\Comment', 'user_id', 'id');
    }
}
