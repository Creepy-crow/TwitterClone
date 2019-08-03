<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';

    protected $fillable = [
        'text',
        'user_id',
        'tweet_id'
    ];

    //fix position of {
    public function user() {
        return $this->belongsTo('App\User');
    }
    //fix position of {
    public function tweets() {
        return $this->belongsTo('App\TwittAdd');
    }
}
