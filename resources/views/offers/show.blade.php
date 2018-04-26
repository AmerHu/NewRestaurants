@extends('layouts.app')
@section('header')
    <h2>Offers</h2>
@endsection


@section('content')
    <div class="row">
        <div class="col-md-6">
            <h3>Name EN : {{ json_decode($offer->name, true)['EN'] }}</h3>
            <h3>Name AR : {{ json_decode($offer->name, true)['AR'] }}</h3>
            <h3>Price : {{ $offer->price}}</h3>
            <h3>Description : {{ $offer->description }}</h3>
            <br/>
            <div class="row">
                @if(count($extras)>0)
                    <h2> Extras</h2>
                @endif
            </div>
            @foreach($extras as $extra)
                <div class="row">
                    <div class="col-md-11">
                        <h4>  {{ $extra->name }}</h4>
                    </div>
                    <div class="col-md-1">
                        <a href="/extraoffer/delete/{{$extra->id}}/{{ $offer->id}}"
                           class="btn btn-danger" type="button"
                           onclick="return confirm('Are you sure you want to delete this Extra ?')">X</a>
                    </div>
                </div>
                <br/>
            @endforeach
            <hr/>
            <div class="row">
                <div class=" col-md-6">
                    <a class="btn btn-primary btn-block" type="button" href="/offers/edit/{{$offer->id}}">edit</a>
                </div>
                <div class=" col-md-6">
                    <a class="btn btn-primary btn-block" type="button" href="/extraoffer/create/{{$offer->id}}">Add new
                        Extra</a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <img src="/images/offers/{{ $offer->img }}" width="100%"/>
        </div>
    </div>
@endsection
