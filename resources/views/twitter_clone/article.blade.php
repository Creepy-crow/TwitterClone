@extends('layouts.new')

@section('header')
  <div class="jumbotron">
      <div class="container">
          <h1 class="display-3">Twitter CLONE!</h1>
          @if (Auth::check())
              <p><a class="btn btn-primary btn-lg" href="{{ route('create') }}" role="button">Write a tweet &raquo;</a></p>
          @endif
      </div>
  </div>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            @foreach($tweets as $tweet)
                <div class="col-md-4">
                    <h2>{{$login}}</h2>
                    <p>{{$tweet->text}}</p>
                    <p><a class="btn btn-secondary" href="{{ route('comments', [
                    'userId'=> $tweet->user_id,
                    'tweetId' => $tweet->id
                    ])}}" role="button">Add comments&raquo;</a></p>
                    <p><a class="btn btn-secondary" href="{{ route('allComments', [
                    'tweetId' => $tweet->id
                    ]) }}" role="button">View all comments</a></p>
                </div>
            @endforeach
        </div>
        <hr>
    </div>
@endsection
