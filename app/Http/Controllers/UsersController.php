<?php

namespace App\Http\Controllers;

use App\User;


class UsersController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show()
    {
        $users = User::all();
        return view('twitter_clone.users', [
            'users' => $users
        ]);
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function info($id)
    {
        //recreate like on screen
        $users = User::with('tweets')->where('id', '=', $id)->get();
        $login = [];
        $tweets = [];
        foreach ($users as $key => $user) {
            $login = $user->login;
            $tweets = $user->tweets;
        }
        return view('twitter_clone.article', [
            'login' => $login,
            'tweets' => $tweets
        ]);
    }
}
