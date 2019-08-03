<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tweet extends Model {
    protected $fillable = [
        'text',
        'user_id'
    ];

    //fix position of {
    public function user() {
        return $this->belongsTo('App\User');
    }
}
