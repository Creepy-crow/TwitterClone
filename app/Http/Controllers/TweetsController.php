<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CommentAndTweet;

class TweetsController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $tweets = Auth::user()->tweets;
        return view('twitter_clone.article', [
            'tweets' => $tweets
        ]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function create(CommentAndTweet $request)
    {
        $validated = $request->validated();
        Auth::user()->tweets()->create([
            'text' => $validated['text']
        ]);

        return redirect()->route('tweet');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show()
    {
        return view('twitter_clone.create');
    }
}
