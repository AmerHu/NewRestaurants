@extends('layouts.app')

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

    <div class="row">
        <div class="text-center">
            {{$extras->links()}}
        </div>
    </div>

@endsection
