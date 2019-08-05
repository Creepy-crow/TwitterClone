@extends('layouts.new')

@section('content')
    <div class="container">
        <div class="row">
            @foreach($comments as $comment)
                <div class="col-md-4">
                    <h2>{{$login = $comment->user->name}}</h2>
                    <p>{{$text = $comment->text}}</p>
                    </div>
            @endforeach
        </div>
        <hr>
    </div>
@endsection
