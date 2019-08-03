<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

//fix conflict

<<<<<<< HEAD:app/TwittAdd.php
class TwittAdd extends Model
=======
//use cammel case TwiitAdd
class Twitt_add extends Model
>>>>>>> 98d12893a5a7aca4e3c8d1e312efcb06b21be2c5:app/Twitt_add.php
{
    //you dont need it
    protected $table = 'twitt_adds';

    protected $fillable = [
        'text',
        'user_id'
    ];

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function comment() {
        return $this->hasMany('App\Comment', 'tweet_id', 'id');
    }
}
