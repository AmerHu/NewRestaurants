@extends('layouts.app')

@section('header')
    <h2>Categories</h2>
@endsection

@section('content')
    <div class="row">
            @foreach($categories as $category)
                @include('categories.category')
            <hr/>
            <br/>
            @endforeach
        </div>
@endsection
