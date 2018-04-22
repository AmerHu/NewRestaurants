@extends('layouts.app')
@section('header')
    <h2> compos</h2>
@endsection

@section('content')
    <form method="post" action="/compo/create" enctype="multipart/form-data">
        {{ csrf_field() }}

        <div class="form-group">
            <label>Name En</label>
            <input type="text" class="form-control" name="name" id="name"/>
            @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-group">
            <label>Price</label>
            <input type="text" class="form-control" name="price" id="price"/>
            @if ($errors->has('price'))
                <span class="help-block">
                    <strong>{{ $errors->first('price') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-group">
            <label>Image</label>
            <input id="file-upload" type="file" name="img" id="img"/>
            @if ($errors->has('img'))
                <span class="help-block">
                    <strong>{{ $errors->first('img') }}</strong>
                </span>
            @endif
        </div>

        <button type="submit" class="btn btn-default">Publish</button>
    </form>
@endsection


