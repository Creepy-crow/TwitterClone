<?php

namespace App\Http\Controllers;

use App\TwittAdd;
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
        return view('home', [
            'tweets' => $tweets
        ]);
    }

    /**
     * @param CommentAndTweet $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function create(CommentAndTweet $request)
    {
        $validated = $request->validated();
        Auth::user()->tweets()->create([
            'text' => $validated['text']
        ]);

        return redirect()->route('home');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show()
    {
        return view('writeTweet');
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $tweet = TwittAdd::find($id);
        return view('editTweet', [
            'tweet' => $tweet
        ]);
    }

    /**
     * @param $id
     * @param CommentAndTweet $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function update($id, CommentAndTweet $request)
    {
        $validated = $request->validated();
        $tweet = TwittAdd::find($id)->update([
            'text' => $validated['text']
        ]);
        return redirect()->route('home');
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function delete($id)
    {
        TwittAdd::find($id)->delete();
        return redirect()->route('home');
    }
}
