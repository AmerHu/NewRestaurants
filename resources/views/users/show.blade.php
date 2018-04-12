@extends('layouts.app')

@section('content')
    <h3>Name : {{ $user->name }}</h3>
    <h3>Email : {{ $user->email}}</h3>
    @foreach($information as $info)
    <h3>Gender : {{ $info->gender}}</h3>
    @endforeach
    <h3>Type : {{ $user->type }}</h3>

    <a class="btn btn-primary" type="button" href="/user/edit/{{$user->id}}/edit">edit</a>
    <a class="btn btn-danger" type="button" href="/user/delete/{{$user->id}}"
       onclick="return confirm('Are you sure you want to delete this user?')">
        Delete
    </a>

@endsection
