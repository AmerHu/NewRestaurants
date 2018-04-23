@extends('layouts.app')

@section('header')
    <h2>Users</h2>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-4">

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
                        <label>E-Mail : </label>
                        <input type="email" name="email" value="{{ $user->email }}">
                        @if ($errors->has('email'))
                            <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <select value="type_id" class="form-control" style="height:36px">
                            <option value="{{$userType->id}}">{{$userType->Type}}</option>
                            <option value="2">Cashier</option>
                            <option value="3">Waiter</option>
                            <option value="4">Table</option>
                            @if ($errors->has('type_id'))
                                <span class="help-block">
                        <strong>{{ $errors->first('type_id') }}</strong>
                    </span>
                            @endif
                        </select>
                    </div>

                    <button type="submit" class="btn btn-default">Update</button>
                </div>
            </form>
        </div>
    </div>
@endsection
