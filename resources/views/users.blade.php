@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row justify-content-lg-start">
            <div class="col-md-14">
                <div class="flex-column">
                    @foreach($users as $user)
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title">{{$user->login}}</h5>
                                <a href="{{ route('info', [
                                    'id' => $user->id
                                    ]) }}" class="card-link">All users tweets</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
