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
    </div>
@endsection
