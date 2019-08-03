<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Comment;

class CommentsController extends Controller
{
    public function index($tweetId)
    {
        // format before ->get()
        $comments = Comment::with('user')->where('tweet_id', $tweetId)->get();
        return view('twitter_clone.allComments', [
            'comments' => $comments
        ]);
    }

    public function show($tweetId, $userId)
    {
        return view('twitter_clone.comments', [
            'userId' => $userId,
            'tweetId' => $tweetId
        ]);
    }

    public function create(Request $request )
    {
        $user = Auth::user();
        $user->comment()->create([
            'text' => $request->text,
            'user_id' => $request->userId,
            'tweet_id' => $request->tweetId
        ]);

        return redirect()->route('tweet');
    }
}
