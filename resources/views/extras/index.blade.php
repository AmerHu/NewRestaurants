@extends('layouts.app')
@section('header')
    <h2>Extra Items</h2>
@endsection
@section('content')
    <div class="row">

        @foreach($extras as $extra)
            @include('extras.extra')
        @endforeach
        @if(( $extras->count())=== 0)
            <a class="btn btn-primary btn-block" type="button" href='/extra/create'> New Extra</a>
        @endif
    </div>
@endsection
