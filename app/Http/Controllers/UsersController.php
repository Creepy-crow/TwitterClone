<?php

namespace App\Http\Controllers;

use App\User;

class UsersController extends Controller
{
    //method {
    public function show() {
        $users = User::all();
        return view('twitter_clone.users', [
            'users' => $users
        ]);
    }

    //method {
    public function info($id) {
        $users = User::with('tweets')->where('id', '=', $id)->get();
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
