<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
=======
//remove it, you dont use it
use App\Twitt_add;
>>>>>>> 98d12893a5a7aca4e3c8d1e312efcb06b21be2c5
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TweetsController extends Controller
{
<<<<<<< HEAD
    public function index() {
        $login = Auth::user()->login;
        $users = User::with('tweets')->where('login', '=', $login)->get();
        foreach ($users as $key => $user) {
=======
    
    public function index($login)
    {
    //delete space
        $users = User::all()->where('login', '=', $login);
        //space foreach
        foreach ($users as $key => $user)
        {
            //eager loading
>>>>>>> 98d12893a5a7aca4e3c8d1e312efcb06b21be2c5
            $tweets = $user->tweets;
        }
        return view('twitter_clone.article', [
            'login' => $login,
            'tweets' => $tweets
        ]);
    }

<<<<<<< HEAD
    public function create(Request $request) {
=======
    public function create(Request $request)
    {
        //delete comments
        // $this->validate([
        //     'tweet-text'=>'required'
        // ]);

>>>>>>> 98d12893a5a7aca4e3c8d1e312efcb06b21be2c5
        $user = Auth::user();
        //delete variable
        $data = $request->all();
<<<<<<< HEAD
        $user->tweets()->create([
=======
        //delete comment
        // dd($data);
        //delete variable
        //delete ()
        $user->tweets()->create([
            //use request instance
>>>>>>> 98d12893a5a7aca4e3c8d1e312efcb06b21be2c5
            'text' => $data['text']
        ]);

        return redirect()->route('tweet');
    }
        
    public function show() {
        return view('twitter_clone.create');
    }
}
