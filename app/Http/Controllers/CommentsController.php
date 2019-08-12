<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CommentAndTweet;
use App\Comment;

class CommentsController extends Controller
{
    /**
     * @param $tweetId
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index($tweetId)
    {
        $comments = Comment::with('user')->where('tweet_id', $tweetId)->get();

        return view('showComments', [
            'comments' => $comments
        ]);
    }

    /**
     * @param $tweetId
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($tweetId)
    {
        return view('createComment', [
            'tweetId' => $tweetId
        ]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function create(CommentAndTweet $request)
    {
        $validated = $request->validated();
        Auth::user()->comment()->create([
            'text' => $validated['text'],
            'user_id' => Auth::user()->id,
            'tweet_id' => $request->tweetId
        ]);

        return redirect()->route('tweet');
    }
}
