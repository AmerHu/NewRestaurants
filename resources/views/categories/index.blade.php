@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-8">
            @foreach($categories as $category)
                @include('categories.category')
            @endforeach
        </div>
        <div class="col-md-4">
            <a class="btn btn-primary btn-block" type="button" href="/category/create">Create New Category</a>
        </div>
    </div>
    <div class="row">
        <div class="text-center">
            {{$categories->links()}}
        </div>
    </div>
@endsection
