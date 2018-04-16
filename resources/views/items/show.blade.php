@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-6"><h3>Arabic Name : {{ $item->name_ar}}</h3>
            <h3>English Name : {{ $item->name_en}}</h3>
            <h3>Price : {{ $item->price}}</h3>
            <h3>Description : {{ $item->description }}</h3>

            <h3>Category : {{ $category }}</h3>

            <hr/>
            <h2>Extra Items</h2>
            @foreach($extras as $extra)
                <h3>  {{ $extra->name }}</h3>
            @endforeach

            <a class="btn btn-primary" type="button" href="/items/edit/{{$item->id}}">edit</a>

            <a class="btn btn-danger" type="button" href="/items/delete/{{$item->id}}"
               onclick="return confirm('Are you sure you want to delete this OFFERS?')">
                Delete
            </a>
            <a class="btn btn-primary" type="button" href="/subitems/create/{{$item->id}}">Add new Extra</a>
        </div>
        <div class="col-md-6">
            <img src="/images/items/{{ $item->img }}" width="100%"/>
        </div>


    </div>


@endsection
