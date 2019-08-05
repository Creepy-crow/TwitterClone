@extends('layouts.new')

@section('content')
    <div class="container">
        <div class="row">
            @foreach($users as $user)
                <div class="col-md-4">
                    <h2>{{$user->name}}</h2>
                    <p><a class="btn btn-secondary" href="{{ route('info', [
                    'id' => $user->id
                    ]) }}" role="button">View tweets &raquo;</a></p>
                </div>
            @endforeach
        </div>
        <hr>
    </div>
@endsection
