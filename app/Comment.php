<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'text',
        'user_id',
        'tweet_id'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function tweets()
    {
        return $this->belongsTo('App\TwittAdd');
    }
}
