@extends('layouts.app')

@section('header')
    <h2>Categories</h2>
@endsection


@section('content')

    <div class="row">

        <div class="col-md-6">
            <h3>Name :{{ $category->name }}</h3>

        </div>

        <div class="col-md-6">
            <img src="/images/categories/{{ $category->img }}" style="height:  80%">
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">

            <a class="btn btn-primary btn-block" type="button" href="/category/edit/{{$category->id}}">edit</a>
        </div>
    </div>

@endsection
