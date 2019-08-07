<?php
namespace App\Http\Controllers;

use App\TwittAdd;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class TweetsController extends Controller
{
    public function index()
    {
        $id = Auth::id();
        $tweets = TwittAdd::with('user')->where('user_id', $id)->get();
        $login = $tweets[0]->user->login;
        return view('twitter_clone.article', [
            'login' => $login,
            'tweets' => $tweets
        ]);
    }

    public function create(Request $request)
    {
        $messages = [];
       $validator = Validator::make($request->all(),[
          'text' => 'required|max:25'
       ], $messages);
       if($validator->fails()) {
           return redirect()->route('create')
               ->withErrors($validator)
               ->withInput();
       }

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
