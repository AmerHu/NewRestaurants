@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-6">    <h3>Arabic Name : {{ $offer->name_ar}}</h3>
        <h3>English Name : {{ $offer->name_en}}</h3>
        <h3>Price : {{ $offer->price}}</h3>
        <h3>Description : {{ $offer->description }}</h3>

        <a class="btn btn-primary" type="button" href="/offers/edit/{{$offer->id}}">edit</a>
        <a class="btn btn-danger" type="button" href="/offers/delete/{{$offer->id}}"
           onclick="return confirm('Are you sure you want to delete this OFFERS?')">
            Delete
        </a>
    </div>
    <div class="col-md-6">
        <img src ="/images/offers/{{ $offer->img }}"  width="100%"/>
    </div>



</div>


@endsection
