<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CommentAndTweet;
use App\Comment;
use App\TwittAdd;

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
            'comments' => $comments,
            'tweetId' => $tweetId
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

        return redirect()->route('home');
    }

    /**
     * @param $commentId
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($commnetId)
    {
        $comment = Comment::find($commnetId);
        return view('editComment', [
            'comment' => $comment
        ]);
    }

    /**
     * @param $commentId
     * @param CommentAndTweet $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function update($commentId, CommentAndTweet $request)
    {
        $validated = $request->validated();
        Comment::find($commentId)->update([
            'text' => $validated['text']
        ]);
        $comment = Comment::find($commentId);
        $tweetId = $comment->tweet_id;
        return redirect()->route('allComments', [
            'tweetId' => $tweetId
        ]);
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function delete($tweetId, $id)
    {
        Comment::find($id)->delete();
        return redirect()->route('allComments', [
            'tweetId' => $tweetId
        ]);
    }
}
