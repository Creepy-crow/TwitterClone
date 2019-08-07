<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Comment;

class CommentsController extends Controller
{
    public function index($tweetId)
    {
        $comments = Comment::with('user')->where('tweet_id', $tweetId)->get();
        return view('twitter_clone.allComments', [
            'comments' => $comments
        ]);
    }

    public function show($tweetId)
    {
        return view('twitter_clone.comments', [
            'tweetId' => $tweetId
        ]);
    }

    public function create(Request $request)
    {
        $rules = [
            'text' => 'required|max:25'
        ];
        $this->validate($request, $rules);

        $user = Auth::user();
        $id = $user->id;
        $user->comment()->create([
            'text' => $request->text,
            'user_id' => $id,
            'tweet_id' => $request->tweetId
        ]);

        return redirect()->route('tweet');
    }
}
