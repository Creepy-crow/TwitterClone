@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="row">
                    @foreach($comments as $comment)
                        <div class="" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title">{{$comment->user->login}}</h5>
                                <p class="card-text">{{$comment->text}}</p>
                                <a href="{{ route('editComment', [
                                        'tweetId' => $comment->id
                                        ]) }}" class="card-link">Edit comment</a>
                                {{--<a href="{{ route('', [--}}
                                        {{--'tweetId' => $tweet->id--}}
                                        {{--]) }}" class="card-link">Delete comment</a>--}}
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
