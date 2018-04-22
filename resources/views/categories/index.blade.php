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

                @if(( $categories->count())=== 0)
                    <a class="btn btn-primary btn-block" type="button" href='/category/create'> New Categories</a>
                @endif
        </div>
@endsection
