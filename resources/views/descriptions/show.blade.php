@extends('layouts.app')
@section('header')
    <h2>Description</h2>
@endsection



@section('content')
    <div class="row">
        <div class="col-md-6">
            <h3>Name : {{ $description->name}}</h3>
            <a class="btn btn-primary" type="button" href="/desc/edit/{{$description->id}}">edit</a>
            <a class="btn btn-danger" type="button" href="/desc/delete/{{$description->id}}"
               onclick="return confirm('Are you sure you want to delete this Description?')">
                Delete
            </a>
        </div>
    </div>
@endsection
