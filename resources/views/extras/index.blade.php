@extends('layouts.app')
@section('header')
    <h2>Extra Items</h2>
@endsection
@section('content')
    <div class="row">

        <div class="col-lg-8">
            @foreach($extras as $extra)
                @include('extras.extra')
            @endforeach
        </div>
        <div class="col-md-4">
            <a class="btn btn-primary btn-block" type="button" href='/extra/create'> New Extra</a>
        </div>
    </div>
@endsection
