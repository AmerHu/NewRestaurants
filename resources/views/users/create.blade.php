@extends('layouts.app')
@section('content')
    <form method="post" action="/user/create" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" class="form-control" id="name">
            @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-group">
            <label>Type</label>
            <input type="text" class="form-control" name="type" id="type"/>
            @if ($errors->has('type'))
                <span class="help-block">
                    <strong>{{ $errors->first('type') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-group">
            <label>gender</label>
            <input type="text" class="form-control" name="gender" id="gender"/>
            @if ($errors->has('gender'))
                <span class="help-block">
                    <strong>{{ $errors->first('count') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-group">
            <label>E-Mail</label>
            <input type="email" class="form-control" name="email" id="email"/>
            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-group">
            <label>password</label>
            <input type="password" class="form-control" name="password" id="password"/>
            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('price') }}</strong>
                </span>
            @endif
        </div>

        <button type="submit" class="btn btn-default">Publish</button>
    </form>
@endsection
