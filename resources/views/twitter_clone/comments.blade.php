@extends('layouts.new')
@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <form method="post" action="{{ route('new-comments') }}">
        {{csrf_field()}}
        <input type="hidden" name="tweetId" value="{{ $tweetId }}">
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">Your Tweet</span>
            </div>
            <input type="text" name="text" id="tweet-text" class="form-control" value = "{{ old('text') }}">
            @if ($errors->has('text'))
                @foreach ($errors-get('text') as $message)
                    <pre>{{ $message }}</pre>
                @endforeach
            @endif
        </div>

        <button type="submit" class="btn btn-primary">Add comment</button>
    </form>
@endsection
