@extends('layouts.app')
@section('header')
    <h2>Description</h2>
@endsection



@section('content')
    <div class="row">
        <hr/>
        <div class="col-lg-12">
            @foreach($descriptions as $description)
                @include('descriptions.description')
                <hr/>
            @endforeach
                @if(( $descriptions->count())=== 0)
                    <a class="btn btn-primary btn-block" type="button" href='/desc/create'> New Description</a>
                @endif
        </div>
    </div>
@endsection
