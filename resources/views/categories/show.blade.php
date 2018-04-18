@extends('layouts.app')

@section('header')
    <h2>Categories</h2>
@endsection


@section('content')

    <div class="row">

    <div class="col-md-6">

        <h3>Arabic Name :{{ $category->name_ar }} </h3>
        <h3>English Name :{{ $category->name_en }}</h3>
    </div>
    <div class="col-md-6">
        <img src="/images/categories/{{ $category->img }}" style="height:  150px">
    </div>
    </div>

    <div class="row">

        <a class="btn btn-primary" type="button" href="/category/edit/{{$category->id}}">edit</a>
        <a class="btn btn-danger" type="button" href="/category/delete/{{$category->id}}">Delete</a>
    </div>

@endsection
