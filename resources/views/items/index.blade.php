@extends('layouts.app')

@section('content')
    <div class="row">

        <div class="col-lg-8">
            @foreach($items as $item)
                @include('items.item')
            @endforeach
        </div>
    </div>


@endsection
