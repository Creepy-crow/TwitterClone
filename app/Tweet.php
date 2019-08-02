<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    //you dont need it
	protected $table = 'tweets';

    protected $fillable = [
        'text',
        'user_id'
    ];

    public function user() 
    {
        return $this->belongsTo('App\User');
    }
}
