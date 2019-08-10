<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App{
/**
 * App\User
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Comment[] $comment
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\TwittAdd[] $tweets
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User query()
 */
	class User extends \Eloquent {}
}

namespace App{
/**
 * App\TwittAdd
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Comment[] $comment
 * @property-read \App\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TwittAdd newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TwittAdd newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TwittAdd query()
 */
	class TwittAdd extends \Eloquent {}
}

namespace App{
/**
 * App\Comment
 *
 * @property-read \App\TwittAdd $tweets
 * @property-read \App\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Comment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Comment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Comment query()
 */
	class Comment extends \Eloquent {}
}

namespace App{
/**
 * App\Tweet
 *
 * @property-read \App\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Tweet newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Tweet newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Tweet query()
 */
	class Tweet extends \Eloquent {}
}

