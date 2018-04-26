@extends('layouts.app')
@section('header')
    <h2>Extra Items</h2>
@endsection
@section('content')
    <div class="row">
        <div class="offset-7 col-md-3">
            <a class="btn btn-primary btn-block" type="button" href='/extra/create'> New Extra</a>
        </div>
    </div>
    <br/>
    <div class="row">
        @foreach($extras as $extra)
            @include('extras.extra')
        @endforeach
    </div>
@endsection
