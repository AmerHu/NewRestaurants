@extends('layouts.app')
@section('header')
    <h2>Offers</h2>
@endsection

@section('content')
    <div class="row">

        <div class="col-lg-8">
            @foreach($offers as $offer)
                @include('offers.offer')
            @endforeach
        </div>
        <div class="col-md-4">
            <a class="btn btn-primary btn-block" type="button" href='/offers/create'>Offers New User</a>
        </div>
    </div>

    <div class="row">
        <div class="text-center">
            {{$offers->links()}}
        </div>
    </div>
@endsection
