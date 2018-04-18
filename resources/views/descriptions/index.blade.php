@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-8">
            @foreach($descriptions as $description)
                @include('descriptions.description')
            @endforeach
        </div>
        <div class="col-md-4">
            <a class="btn btn-primary btn-block" type="button" href='/desc/create'>Crate New Description</a>
        </div>
    </div>

@endsection
