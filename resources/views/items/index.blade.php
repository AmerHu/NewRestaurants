@extends('layouts.app')
@section('header')
    <h2> Items</h2>
@endsection
@section('content')

    <div class="row">
        <div class="offset-8 col-md-4">
            <a class="btn btn-primary btn-block" type="button" href='/items/create'>Create New Items</a>
        </div>
    </div>
    <br/>
    <div class="row">
        @foreach($items as $item)
            @include('items.item')
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
        @endforeach


    </div>

@endsection
