@extends('layouts.app')
@section('header')
    <h2> Items</h2>
@endsection
@section('content')
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
            @if(( $items->count())=== 0)
                <a class="btn btn-primary btn-block" type="button" href='/items/create'>Offers New User</a>
            @endif
    </div>

@endsection
