<?php

namespace App\Http\Controllers;

use App\User;


class UsersController extends Controller
{
    public function show()
    {
        $users = User::all();
        return view('twitter_clone.users', [
            'users' => $users
        ]);
    }

    public function info($id)
    {
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
