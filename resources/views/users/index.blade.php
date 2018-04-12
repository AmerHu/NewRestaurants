@extends('layouts.app')

@section('content')
    <div class="col-lg-8">
        @foreach($users as $user)
            @include('users.user')
        @endforeach
    </div>
    <div class="col-md-4">
        <a class="btn btn-primary btn-block" type="button" href="/User/create">Create New User</a>
    </div>
@endsection
