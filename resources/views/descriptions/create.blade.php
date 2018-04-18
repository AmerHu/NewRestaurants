@extends('layouts.app')

@section('header')
    <h2>Description</h2>
@endsection



@section('content')
    <form method="post" action="/desc/create" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
            <label fir="name">Name</label>
            <input type="text" name="name" class="form-control" id="name">
            @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
        </div>

        <button type="submit" class="btn btn-default">Publish</button>
    </form>
@endsection
