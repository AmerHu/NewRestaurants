@extends('layouts.app')

@section('content')
    <div class="row">
            @foreach($categories as $category)
                @include('categories.category')
            <hr/>
            <br/>
            @endforeach
        </div>
@endsection
