@extends('layouts.app')

@section('header')
    <h2>Users</h2>
@endsection

@section('content')
    <form method="post" action="/user/edit/{{$user->id}}" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
            <input type="hidden" value="{{ csrf_token() }}">

            <div class="form-group">
                <input type="hidden" name="id" value="{{ $user->id }}">
            </div>

            <div class="form-group">
                <label>Name    :</label>
                <input type="text" name="name" value="{{ $user->name }}">
                @if ($errors->has('name'))
                    <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
                @endif
            </div>

            <div class="form-group">
                <label>E-Mail: </label>
                <input type="email" name="email" value="{{ $user->email }}">
                @if ($errors->has('email'))
                    <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif
            </div>

            <div class="form-group">
                <label>Type</label>
                <input type="text" name="type" value="{{ $user->type}}">
                @if ($errors->has('type'))
                    <span class="help-block">
                    <strong>{{ $errors->first('type') }}</strong>
                </span>
                @endif
            </div>
            @foreach($information as $info)
                <div class="form-group">
                    <label>Gender</label>
                    <input type="text" name="gender" value="{{  $info->gender}}">
                    @if ($errors->has('gender'))
                        <span class="help-block">
                    <strong>{{ $errors->first('gender') }}</strong>
                </span>
                    @endif
                </div>
            @endforeach
            <button type="submit" class="btn btn-default">Update</button>
        </div>
    </form>
@endsection
