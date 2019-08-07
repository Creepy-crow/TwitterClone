<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

        //use compact
        return view('twitter_clone.allComments', [
            'comments' => $comments
        ]);
    }

    /**
     * @param $tweetId
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($tweetId)
    {
        //use compact
        return view('twitter_clone.comments', [
            'tweetId' => $tweetId
        ]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function create(Request $request)
    {
        //use request
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
