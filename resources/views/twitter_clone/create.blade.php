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
        <input type="text" name="text" id="text" class="form-control" value = "{{ old("text") }}">
        @if ($errors->has('text'))
            error
            @foreach ($errors-get('text') as $message)
                <pre>{{ $message }}</pre>
            @endforeach
        @endif
    </div>
    <button type="submit" class="btn btn-primary">Add Tweet</button>
</form>
@endsection
