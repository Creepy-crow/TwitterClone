@extends('layouts.app')
@section('content')
<div class="container">
    <div class="d-flex flex-column justify-content-center">
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
        <div class="form-group">
            <label for="text">Your tweet</label>
            <input type="text" name="text" id="text" class="form-control" value = "{{ old("text") }}">
        </div>

        <button type="submit" class="btn btn-info float-right">Add Tweet</button>
    </form>
    </div>
</div>
@endsection
