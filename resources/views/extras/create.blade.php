@extends('layouts.app')

<style>
    input[type="file"] {
        display: none;
    }
    .custom-file-upload {
        border: 1px solid #ccc;
        display: inline-block;
        padding: 6px 12px;
        cursor: pointer;
    }
</style>
@section('header')
    <h2>Extra Items</h2>
@endsection

@section('content')

    <form method="post" action="/extra/create/" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div  class="form-group">
            <label>Name AR</label>
            <input type="text" name="nameAR" class="form-control" id="name">
            @if ($errors->has('name'))
                <span class="help-block">
                   <strong>{{ $errors->first('name') }}</strong>
               </span>
            @endif
        </div>
        <div  class="form-group">
            <label>Name EN</label>
            <input type="text" name="nameEN" class="form-control" id="name">
            @if ($errors->has('name'))
                <span class="help-block">
                   <strong>{{ $errors->first('name') }}</strong>
               </span>
            @endif
        </div>
        <div class="form-group">
            <label>Price</label>
            <input type="text" class="form-control" name="price" id="price">
            @if ($errors->has('price'))
                <span class="help-block">
                    <strong>{{ $errors->first('price') }}</strong>
                </span>
            @endif
        </div>

        <button type="submit" class="btn btn-default">Publish</button>
    </form>
@endsection
