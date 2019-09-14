@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="row">
                    @foreach($tweets as $tweet)
                        <div class="" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title">{{$tweet->user->login}}</h5>
                                <p class="card-text">{{$tweet->text}}</p>
                                <a href="{{ route('comments', [
                                        'userId'=> $tweet->user_id,
                                        'tweetId' => $tweet->id
                                        ])}}" class="card-link">Add comment</a>
                                <a href="{{ route('allComments', [
                                        'tweetId' => $tweet->id
                                        ]) }}" class="card-link">All comments</a>
                                <a href="{{ route('edit', [
                                        'tweetId' => $tweet->id
                                        ]) }}" class="card-link">Edit tweet</a>
                                {{--<a href="{{ route('', [--}}
                                        {{--'tweetId' => $tweet->id--}}
                                        {{--]) }}" class="card-link">Delete tweet</a>--}}
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
