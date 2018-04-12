@extends('layouts.app')

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
            </div>

            <div class="form-group">
                <label>E-Mail: </label>
                <input type="email" name="email" value="{{ $user->email }}">

            </div>

            <div class="form-group">
                <label>Type</label>
                <input type="text" name="type" value="{{ $user->type}}">
            </div>
            @foreach($information as $info)
                <div class="form-group">
                    <label>Gender</label>
                    <input type="text" name="gender" value="{{  $info->gender}}">
                </div>
            @endforeach
            <button type="submit" class="btn btn-default">Update</button>
        </div>
    </form>
@endsection
