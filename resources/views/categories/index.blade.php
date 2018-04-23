@extends('layouts.app')

@section('header')
    <h2>Categories</h2>
@endsection

@section('content')
    <div class="row">
        <div class="offset-8 col-md-4">
                <a class="btn btn-primary btn-block" type="button" href='/category/create'> New Categories</a>
        </div>
    </div>
    <br/>
    <div class="row">
            @foreach($categories as $category)
                @include('categories.category')
            <hr/>
            <br/>
            @endforeach


        </div>
@endsection
