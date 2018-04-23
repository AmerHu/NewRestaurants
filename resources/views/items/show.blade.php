@extends('layouts.app')
@section('header')
    <h2> Items</h2>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-6"><h3>English Name : {{ $item->name}}</h3>
            <h3>Price : {{ $item->price}}</h3>
            <h3>Category : {{ $category }}</h3>

            <hr/>
            <h2>Extra Items</h2>
            @foreach($extras as $extra)
                <div class="row">
                    <div class="col-md-11">
                        <h4>  {{ $extra->name }}</h4>
                    </div>
                    <div class="col-md-1">
                        <a href="/subitems/delete/{{$extra->id}}/{{ $item->id}}"
                           class="btn btn-danger" type="button"
                           onclick="return confirm('Are you sure you want to delete this Extra Item?')">X</a>
                    </div>
                </div>
                <br/>
            @endforeach
            <hr/>
            <h2>Description Items</h2>
            @foreach($descriptions as $description)
                <div class="row">
                    <div class="col-md-11">
                        <h4>  {{ $description->name }} </h4>
                    </div>
                    <div class="col-md-1">
                        <a href="/desitem/delete/{{$description->id}}/{{ $item->id}}"
                           class="btn btn-danger" type="button"
                           onclick="return confirm('Are you sure you want to delete this Descriptions?')">X</a>
                    </div>
                </div>
                <br/>
            @endforeach
            <hr/>

        </div>

        <div class="col-md-6">
            <img src="/images/items/{{ $item->img }}" height="100%"/>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-4">
                    <a class="btn btn-primary btn-block" type="button" href="/items/edit/{{$item->id}}">edit</a>
                </div>
                <div class="col-md-4">
                    <a class="btn btn-primary btn-block" type="button" href="/subitems/create/{{$item->id}}">Add new
                        Extra</a>
                </div>
                <div class="col-md-4">
                    <a class="btn btn-primary btn-block" type="button" href="/desitem/create/{{$item->id}}">Add New
                        Description</a>
                </div>
            </div>
        </div>
    </div>
@endsection
