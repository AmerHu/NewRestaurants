@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-6">    <h3>Arabic Name : {{ $extra->name}}</h3>
        <h3>Price : {{ $extra->price}}</h3>

        <a class="btn btn-primary" type="button" href="/extra/edit/{{$extra->id}}">edit</a>
        <a class="btn btn-danger" type="button" href="/extra/delete/{{$extra->id}}"
           onclick="return confirm('Are you sure you want to delete this OFFERS?')">
            Delete
        </a>
    </div>

</div>


@endsection
