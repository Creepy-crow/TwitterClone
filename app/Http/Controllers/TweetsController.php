<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TweetsController extends Controller
{
    public function index()
    {
        $login = Auth::user()->login;
        $users = User::with('tweets')->where('login', '=', $login)->get();
        foreach ($users as $key => $user) {
            $tweets = $user->tweets;
        }
        return view('twitter_clone.article', [
            'login' => $login,
            'tweets' => $tweets
        ]);
    }

    public function create(Request $request)
    {
        $user = Auth::user();
        $user->tweets()->create([
            'text' => $request->text
        ]);

        return redirect()->route('tweet');
    }

    public function show()
    {
        return view('twitter_clone.create');
    }
}
