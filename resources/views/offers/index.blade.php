@extends('layouts.app')
@section('header')
    <h2>Offers</h2>
@endsection

@section('content')
    <div class="row">

        @foreach($offers as $offer)
            @include('offers.offer')
        @endforeach
        @if(( $offers->count())=== 0)
            <a class="btn btn-primary btn-block" type="button" href='/offers/create'>Offers New User</a>
        @endif
    </div>
    <div class="row">
        <div class="text-center">
            {{$offers->links()}}
        </div>
    </div>
@endsection
