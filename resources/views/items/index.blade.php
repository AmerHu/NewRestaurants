@extends('layouts.app')

@section('content')
    <div class="row">

        <div class="col-lg-8">
            @foreach($items as $item)
                @include('items.item')
            @endforeach
        </div>
        <div class="col-md-4">
            <a class="btn btn-primary btn-block" type="button" href='/items/create'> New Items</a>
        </div>
    </div>

    <div class="row">
        <div class="text-center">
            {{$items->links()}}
        </div>
    </div>

@endsection
