<?php

namespace App\Http\Controllers;

use App\TwittAdd;
use App\User;


class UsersController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show()
    {
        $users = User::all();
        return view('users', [
            'users' => $users
        ]);
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function info($id)
    {
        $tweets = TwittAdd::with('user')->where('user_id', '=', $id)->get();
        return view('usersTweets', [
            'tweets' => $tweets
        ]);
    }
}
