<?php

namespace App\Http\Controllers;

use App\User;

//fix position of {
class UsersController extends Controller {
    //fix position of {
    public function show() {
        $users = User::all();
        return view('twitter_clone.users', [
            'users' => $users
        ]);
    }
    //fix position of {
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
