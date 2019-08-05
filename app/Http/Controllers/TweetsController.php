<?php
namespace App\Http\Controllers;

use App\User;
use App\TwittAdd;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TweetsController extends Controller
{
    public function index()
    {
        $id = Auth::id();
        // need to get tweets from tweets model
        //$users = User::with('tweets')->where('login', '=', $login)->get();
        $tweets = [];
        $tweets = TwittAdd::with('user')->where('user_id', $id)->get();
        $login = $tweets->user->login;
        dump($login);
            dd($id);
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
