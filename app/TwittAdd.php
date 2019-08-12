<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TwittAdd extends Model
{
    /**
     * @var string
     */
    protected $table = 'twitt_adds';

    /**
     * @var array
     */
    protected $fillable = [
        'text',
        'user_id'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comment()
    {
        return $this->hasMany('App\Comment', 'tweet_id', 'id');
    }
}
