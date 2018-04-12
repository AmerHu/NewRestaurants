@extends('layouts.app')

@section('content')
    @foreach($users as $user)
        @include('users.user')
    @endforeach
@endsection
