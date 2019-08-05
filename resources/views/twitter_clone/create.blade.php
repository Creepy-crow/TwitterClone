@extends('layouts.new')
@section('content')

@if (count($errors) > 0)
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

<form method="post" action="{{ route('add') }}">
    {{csrf_field()}}
    <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text">Your Tweet</span>
        </div>
        <textarea maxlength="255" name="text" id="tweet-text" class="form-control" aria-label="With textarea"
                  value = "{{ old('text') }}"></textarea>
        @if ($errors->has('text'))
            {{--error--}}
            @foreach ($errors-get('text') as $message)
                <pre>{{ $message }}</pre>
            @endforeach
        @endif
    </div>
    <button type="submit" class="btn btn-primary">Add Tweet</button>
</form>
@endsection
