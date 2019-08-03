<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TwittAdd extends Model
{
    protected $table = 'twitt_adds';

    protected $fillable = [
        'text',
        'user_id'
    ];
    //fix position of {
    public function user() {
        return $this->belongsTo('App\User');
    }
    //fix position of {
    public function comment() {
        return $this->hasMany('App\Comment', 'tweet_id', 'id');
    }
}
