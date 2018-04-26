@extends('layouts.app')
@section('header')
    <h2>Description</h2>
@endsection



@section('content')
    <div class="row">
        <div class="offset-8 col-md-4">
            <a class="btn btn-primary btn-block" type="button" href='/desc/create'> New Description</a>
        </div>
    </div>
    <br/>
    <br/>
    <div class="row">
        @foreach($descriptions as $description)
            @include('descriptions.description')
            @if(( $descriptions->count())>1)
                <hr/>
            @endif
        @endforeach
    </div>
@endsection
