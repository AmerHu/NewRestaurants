@extends('layouts.app')
@section('header')
    <h2>Description</h2>
@endsection



@section('content')
    <div class="row">
        <h1>Description</h1>
        <hr/>
        <div class="col-lg-12">
            @foreach($descriptions as $description)
                @include('descriptions.description')
                <hr/>
            @endforeach
        </div>
    </div>

@endsection
